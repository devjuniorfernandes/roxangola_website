<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\{Highlight, GalleryImage, Milestone, Service, Contact, ServiceBooking, ShowroomVisit};

class DashboardController extends Controller
{
    public function index()
    {
        $unread = SubmissionController::unreadCounts();

        return view('cms.dashboard', [
            'kpis' => [
                ['Submissões por ler', array_sum($unread), 'cms.submissions.index', 'contactos'],
                ['Marcações de serviço', ServiceBooking::count(), 'cms.submissions.index', 'marcacoes'],
                ['Visitas ao showroom', ShowroomVisit::count(), 'cms.submissions.index', 'visitas'],
                ['Contactos', Contact::count(), 'cms.submissions.index', 'contactos'],
            ],
            'counts' => [
                'highlights' => Highlight::count(),
                'gallery'    => GalleryImage::count(),
                'milestones' => Milestone::count(),
                'services'   => Service::count(),
            ],
            'recent' => Contact::latest()->take(6)->get(),
        ]);
    }
}
