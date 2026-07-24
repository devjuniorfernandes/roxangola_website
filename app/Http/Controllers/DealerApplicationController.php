<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DealerApplication;

class DealerApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'location' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        DealerApplication::create($validated);

        return back()->with('success', 'Candidatura enviada com sucesso! A nossa equipa entrará em contacto em breve.');
    }
}
