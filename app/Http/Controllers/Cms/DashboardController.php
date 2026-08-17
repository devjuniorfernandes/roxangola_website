<?php
namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use App\Models\{Highlight, GalleryImage, Milestone, Service};
class DashboardController extends Controller
{
    public function index()
    {
        return view('cms.dashboard', [
            'counts' => [
                'highlights' => Highlight::count(),
                'gallery'    => GalleryImage::count(),
                'milestones' => Milestone::count(),
                'services'   => Service::count(),
            ],
        ]);
    }
}
