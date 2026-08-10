<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Milestone;

class MilestoneSeeder extends Seeder
{
    public function run(): void
    {
        if (Milestone::count() > 0) {
            return;
        }

        $pt = require lang_path('pt/historia.php');
        $en = require lang_path('en/historia.php');

        // [data, imagem] por ordem cronológica (m1..m25)
        $meta = [
            ['2021.1', 'banner.jpg'], ['2023.8', 'banner2.jpg'], ['2023.8', 'banner1.jpg'],
            ['2023.9', 'life.jpg'], ['2023.12', 'outdoor.avif'], ['2024.4', 'keji.jpg'],
            ['2024.4', 'lichengbei.jpg'], ['2024.4', 'shequ.jpg'], ['2024.5', '1.jpg'],
            ['2024.8', 'services.jpg'], ['2024.10', 'services-ver.jpg'], ['2024.10', 'dealer.jpg'],
            ['2024.10', 'showroom.jpg'], ['2024.12', 'life.jpg'], ['2025.2', 'keji.jpg'],
            ['2025.4', 'banner.jpg'], ['2025.4', 'lichengbei.jpg'], ['2025.4', 'outdoor.avif'],
            ['2025.7', 'banner1.jpg'], ['2025.7', 'services.jpg'], ['2025.9', '1.jpg'],
            ['2025.10', 'shequ.jpg'], ['2025.10', 'banner-adamas.avif'], ['2025.12', 'adamas.jpg'],
            ['2026.2', 'dealer.jpg'],
        ];

        foreach ($meta as $i => [$date, $img]) {
            $n = $i + 1;
            Milestone::create([
                'date' => $date,
                'image' => 'assets/' . $img,
                'title' => $pt['ms']['m' . $n] ?? '',
                'title_en' => $en['ms']['m' . $n] ?? '',
                'sort' => $n,
                'is_published' => true,
            ]);
        }
    }
}
