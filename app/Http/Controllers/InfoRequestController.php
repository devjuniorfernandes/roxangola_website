<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoRequest;

class InfoRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        InfoRequest::create($validated);

        return back()->with('success', 'Pedido enviado com sucesso! Entraremos em contacto com mais informações em breve.');
    }
}
