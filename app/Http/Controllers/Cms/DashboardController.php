<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\{Highlight, GalleryImage, Milestone, Service, Contact, ServiceBooking, ShowroomVisit};
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $unread     = SubmissionController::unreadCounts();
        $submTypes  = SubmissionController::types();
        $pages      = config('cms.pages', []);
        $imageGroups = config('cms.images', []);

        // Count image slots
        $imageSlotsCount = 0;
        foreach ($imageGroups as $group) {
            $imageSlotsCount += count($group['slots'] ?? []);
        }

        // Submissions breakdown
        $submissionCounts = [
            'contactos' => Contact::count(),
            'marcacoes' => ServiceBooking::count(),
            'visitas'   => ShowroomVisit::count(),
        ];

        // Recent submissions (all types combined)
        $recentContacts = Contact::latest()->take(3)->get()->map(function ($item) {
            $item->type_key    = 'contactos';
            $item->type_label  = 'Contacto';
            $item->client_name = $item->name ?? $item->nome ?? 'Cliente';
            return $item;
        });

        $recentBookings = ServiceBooking::latest()->take(3)->get()->map(function ($item) {
            $item->type_key    = 'marcacoes';
            $item->type_label  = 'Marcação de Serviço';
            $item->client_name = $item->name ?? $item->nome ?? 'Cliente';
            return $item;
        });

        $recentVisits = ShowroomVisit::latest()->take(3)->get()->map(function ($item) {
            $item->type_key    = 'visitas';
            $item->type_label  = 'Visita ao Showroom';
            $item->client_name = $item->name ?? $item->nome ?? 'Cliente';
            return $item;
        });

        $recentSubmissions = collect()
            ->concat($recentContacts)
            ->concat($recentBookings)
            ->concat($recentVisits)
            ->sortByDesc('created_at')
            ->take(6);

        // Content counts
        $overrideCount = \App\Models\ContentOverride::count();
        $seoCount      = \App\Models\PageSeo::count();

        // Highlights preview
        $activeHighlights = Highlight::where('is_published', true)->take(3)->get();
        if ($activeHighlights->isEmpty()) {
            $activeHighlights = Highlight::latest()->take(3)->get();
        }

        // Services
        $servicesList = Service::take(4)->get();

        // ── Chart: últimos 7 dias ──────────────────────────────────────
        $chartDates  = [];
        $chartLabels = [];

        for ($i = 6; $i >= 0; $i--) {
            $date          = Carbon::today()->subDays($i);
            $chartDates[]  = $date->toDateString();
            $chartLabels[] = $date->format('d M');
        }

        $from = Carbon::today()->subDays(6)->startOfDay();

        $contactsByDate = Contact::where('created_at', '>=', $from)
            ->selectRaw('DATE(created_at) as day, COUNT(*) as total')
            ->groupBy('day')
            ->pluck('total', 'day');

        $bookingsByDate = ServiceBooking::where('created_at', '>=', $from)
            ->selectRaw('DATE(created_at) as day, COUNT(*) as total')
            ->groupBy('day')
            ->pluck('total', 'day');

        $visitsByDate = ShowroomVisit::where('created_at', '>=', $from)
            ->selectRaw('DATE(created_at) as day, COUNT(*) as total')
            ->groupBy('day')
            ->pluck('total', 'day');

        $chartContacts = array_map(fn ($d) => (int) ($contactsByDate[$d] ?? 0), $chartDates);
        $chartBookings = array_map(fn ($d) => (int) ($bookingsByDate[$d] ?? 0), $chartDates);
        $chartVisits   = array_map(fn ($d) => (int) ($visitsByDate[$d]   ?? 0), $chartDates);

        return view('cms.dashboard', [
            'unread'           => $unread,
            'submTypes'        => $submTypes,
            'submissionCounts' => $submissionCounts,
            'recentSubmissions'=> $recentSubmissions,
            'counts'           => [
                'highlights' => Highlight::count(),
                'gallery'    => GalleryImage::count(),
                'milestones' => Milestone::count(),
                'services'   => Service::count(),
                'pages'      => count($pages),
                'imageSlots' => $imageSlotsCount,
                'overrides'  => $overrideCount,
                'seo'        => $seoCount,
            ],
            'activeHighlights' => $activeHighlights,
            'servicesList'     => $servicesList,
            'chartLabels'      => $chartLabels,
            'chartContacts'    => $chartContacts,
            'chartBookings'    => $chartBookings,
            'chartVisits'      => $chartVisits,
        ]);
    }
}
