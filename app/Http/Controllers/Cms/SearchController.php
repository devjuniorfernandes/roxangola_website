<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\{Highlight, Service, Milestone, GalleryImage, Contact, ServiceBooking, ShowroomVisit};
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $q = trim($request->get('q', ''));

        if (strlen($q) < 2) {
            return response()->json([]);
        }

        $results = collect();

        // ── Serviços ──────────────────────────────────────────────────
        Service::where('title_pt', 'like', "%{$q}%")
            ->orWhere('title_en', 'like', "%{$q}%")
            ->take(4)->get()
            ->each(fn ($r) => $results->push([
                'icon'  => 'fa-solid fa-screwdriver-wrench',
                'label' => $r->title_pt ?? $r->title_en ?? 'Serviço',
                'sub'   => 'Serviço',
                'url'   => route('cms.services.edit', $r->id),
            ]));

        // ── Destaques ────────────────────────────────────────────────
        Highlight::where('title_pt', 'like', "%{$q}%")
            ->orWhere('title_en', 'like', "%{$q}%")
            ->take(4)->get()
            ->each(fn ($r) => $results->push([
                'icon'  => 'fa-solid fa-star',
                'label' => $r->title_pt ?? $r->title_en ?? 'Destaque',
                'sub'   => 'Destaque (Homepage)',
                'url'   => route('cms.highlights.edit', $r->id),
            ]));

        // ── Galeria ───────────────────────────────────────────────────
        GalleryImage::where('caption', 'like', "%{$q}%")
            ->take(3)->get()
            ->each(fn ($r) => $results->push([
                'icon'  => 'fa-regular fa-image',
                'label' => Str::limit($r->caption ?? 'Imagem', 40),
                'sub'   => 'Galeria',
                'url'   => route('cms.gallery.edit', $r->id),
            ]));

        // ── Marcos ───────────────────────────────────────────────────
        Milestone::where('title', 'like', "%{$q}%")
            ->orWhere('description', 'like', "%{$q}%")
            ->take(3)->get()
            ->each(fn ($r) => $results->push([
                'icon'  => 'fa-solid fa-flag',
                'label' => Str::limit($r->title ?? $r->description ?? 'Marco', 40),
                'sub'   => 'Marco da História',
                'url'   => route('cms.milestones.edit', $r->id),
            ]));

        // ── Contactos / Submissões ────────────────────────────────────
        Contact::where('name', 'like', "%{$q}%")
            ->orWhere('email', 'like', "%{$q}%")
            ->take(3)->get()
            ->each(fn ($r) => $results->push([
                'icon'  => 'fa-regular fa-envelope',
                'label' => Str::limit($r->name ?? $r->email ?? 'Contacto', 40),
                'sub'   => 'Contacto',
                'url'   => route('cms.submissions.show', ['contactos', $r->id]),
            ]));

        ServiceBooking::where('name', 'like', "%{$q}%")
            ->orWhere('email', 'like', "%{$q}%")
            ->take(2)->get()
            ->each(fn ($r) => $results->push([
                'icon'  => 'fa-solid fa-screwdriver-wrench',
                'label' => Str::limit($r->name ?? $r->email ?? 'Marcação', 40),
                'sub'   => 'Marcação de Serviço',
                'url'   => route('cms.submissions.show', ['marcacoes', $r->id]),
            ]));

        ShowroomVisit::where('name', 'like', "%{$q}%")
            ->orWhere('email', 'like', "%{$q}%")
            ->take(2)->get()
            ->each(fn ($r) => $results->push([
                'icon'  => 'fa-solid fa-building-columns',
                'label' => Str::limit($r->name ?? $r->email ?? 'Visita', 40),
                'sub'   => 'Visita ao Showroom',
                'url'   => route('cms.submissions.show', ['visitas', $r->id]),
            ]));

        // ── Atalhos de navegação ──────────────────────────────────────
        $navLinks = [
            ['icon' => 'fa-regular fa-file-lines', 'label' => 'Páginas do Website',   'sub' => 'Navegação', 'url' => route('cms.pages.index'),              'search' => 'páginas textos'],
            ['icon' => 'fa-solid fa-star',          'label' => 'Destaques (Homepage)', 'sub' => 'Navegação', 'url' => route('cms.highlights.index'),         'search' => 'destaques homepage'],
            ['icon' => 'fa-regular fa-image',       'label' => 'Galeria de Imagens',   'sub' => 'Navegação', 'url' => route('cms.gallery.index'),            'search' => 'galeria imagens'],
            ['icon' => 'fa-solid fa-screwdriver-wrench','label'=>'Serviços',           'sub' => 'Navegação', 'url' => route('cms.services.index'),           'search' => 'serviços'],
            ['icon' => 'fa-solid fa-flag',          'label' => 'Marcos da História',   'sub' => 'Navegação', 'url' => route('cms.milestones.index'),         'search' => 'marcos história'],
            ['icon' => 'fa-regular fa-envelope',    'label' => 'Submissões / Contactos','sub'=> 'Navegação', 'url' => route('cms.submissions.index', 'contactos'), 'search' => 'submissões contactos'],
            ['icon' => 'fa-solid fa-globe',         'label' => 'SEO & Meta Tags',      'sub' => 'Navegação', 'url' => route('cms.seo.index'),                'search' => 'seo meta tags'],
            ['icon' => 'fa-regular fa-image',       'label' => 'Imagens do Site',      'sub' => 'Navegação', 'url' => route('cms.content.index'),            'search' => 'imagens site conteúdo'],
        ];

        foreach ($navLinks as $nav) {
            if (str_contains(strtolower($nav['search']), strtolower($q)) ||
                str_contains(strtolower($nav['label']),  strtolower($q))) {
                $results->push([
                    'icon'  => $nav['icon'],
                    'label' => $nav['label'],
                    'sub'   => $nav['sub'],
                    'url'   => $nav['url'],
                ]);
            }
        }

        return response()->json($results->take(10)->values());
    }
}
