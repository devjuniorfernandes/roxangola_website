<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShowroomVisit;

class ShowroomVisitController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'model_interest' => 'required|string|in:ROX 01,ROX ADAMAS,Ambos',
            'preferred_date' => 'nullable|date|after_or_equal:today',
            'preferred_time' => 'nullable|string|max:10',
            'observations' => 'nullable|string|max:2000',
        ]);

        ShowroomVisit::create($validated);

        return back()->with('success', __('common.forms.success.showroom'));
    }
}
