<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'model_interest' => 'required|string|in:ROX 01,ROX ADAMAS,Ambos',
            'intention' => 'required|string|in:Quero ser contactado,Proposta comercial,Informação geral',
            'message' => 'required|string',
        ]);

        \App\Models\Contact::create($validated);

        return back()->with('success', __('common.forms.success.contact'));
    }

    public function index()
    {
        $contacts = \App\Models\Contact::orderBy('created_at', 'desc')->get();
        return view('admin.contacts.index', compact('contacts'));
    }
}
