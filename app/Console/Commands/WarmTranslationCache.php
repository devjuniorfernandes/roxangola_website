<?php

namespace App\Console\Commands;

use App\Models\GalleryImage;
use App\Models\Highlight;
use App\Models\Milestone;
use App\Models\PageSeo;
use App\Models\Service;
use App\Models\SiteSection;
use App\Models\Vehicle;
use App\Services\Translation\TranslationService;
use Illuminate\Console\Command;

class WarmTranslationCache extends Command
{
    protected $signature   = 'translation:warm {--locale=en} {--source=pt}';
    protected $description = 'Pre-populate translation cache for all database content to avoid slow first-visit translations.';

    public function handle(TranslationService $service): int
    {
        $locale = $this->option('locale');
        $source = $this->option('source');

        if ($locale === $source) {
            $this->error('Source and target locale cannot be the same.');
            return self::FAILURE;
        }

        $this->info("Warming translation cache: {$source} → {$locale}");

        $texts = [];

        // Collect all translatable text from database models
        $this->line('  → Collecting Highlights...');
        foreach (Highlight::all() as $m) {
            if ($m->getRawOriginal('title') && empty($m->title_en)) {
                $texts[] = $m->getRawOriginal('title');
            }
        }

        $this->line('  → Collecting Services...');
        foreach (Service::all() as $m) {
            if ($m->getRawOriginal('title') && empty($m->title_en)) {
                $texts[] = $m->getRawOriginal('title');
            }
            if ($m->getRawOriginal('desc') && empty($m->desc_en)) {
                $texts[] = $m->getRawOriginal('desc');
            }
        }

        $this->line('  → Collecting Milestones...');
        foreach (Milestone::all() as $m) {
            if ($m->getRawOriginal('title') && empty($m->title_en)) {
                $texts[] = $m->getRawOriginal('title');
            }
        }

        $this->line('  → Collecting Gallery Images...');
        foreach (GalleryImage::all() as $m) {
            if ($m->getRawOriginal('label') && empty($m->label_en)) {
                $texts[] = $m->getRawOriginal('label');
            }
        }

        $this->line('  → Collecting Vehicles...');
        foreach (Vehicle::all() as $m) {
            if ($m->getRawOriginal('name'))        $texts[] = $m->getRawOriginal('name');
            if ($m->getRawOriginal('description')) $texts[] = $m->getRawOriginal('description');
        }

        $this->line('  → Collecting SiteSections...');
        foreach (SiteSection::where('type', 'text')->get() as $m) {
            if ($m->getRawOriginal('value')) $texts[] = $m->getRawOriginal('value');
        }

        $this->line('  → Collecting PageSeos...');
        foreach (PageSeo::all() as $m) {
            foreach (['title', 'description', 'h1'] as $field) {
                $pt = $m->{"${field}_pt"};
                $en = $m->{"${field}_en"};
                if ($pt && !$en) $texts[] = $pt;
            }
        }

        $unique = array_values(array_unique(array_filter($texts)));
        $total  = count($unique);

        if ($total === 0) {
            $this->info('No texts to warm — all fields already have manual translations.');
            return self::SUCCESS;
        }

        $this->info("Found {$total} unique texts to cache.");

        // Translate in batches of 20 to respect API limits
        $chunks = array_chunk($unique, 20);
        $bar    = $this->output->createProgressBar(count($chunks));
        $bar->start();

        foreach ($chunks as $chunk) {
            $service->translateMany($chunk, $locale, $source);
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info("✅  Translation cache warmed successfully ({$total} entries).");

        return self::SUCCESS;
    }
}
