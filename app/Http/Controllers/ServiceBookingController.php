<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceBooking;

class ServiceBookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'model' => 'required|string|in:ROX 01,ROX ADAMAS',
            'plate' => 'required|string|max:20',
            'service_type' => 'required|string|in:Acessórios ROX,Manutenção Preventiva,Manutenção Correctiva,Diagnóstico,Revisão Geral,Outro',
            'preferred_date' => 'required|date|after_or_equal:today',
            'preferred_time' => 'required|string|max:10',
            'observations' => 'nullable|string|max:2000',
        ]);

        ServiceBooking::create($validated);

        return back()->with('success', __('common.forms.success.service'));
    }
}
