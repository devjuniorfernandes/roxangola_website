<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteSectionController extends Controller
{
    public function index()
    {
        // Group settings by section_name for easier UI rendering
        $sections = \App\Models\SiteSection::all()->groupBy('section_name');
        return view('admin.pages.index', compact('sections'));
    }

    public function update(\Illuminate\Http\Request $request)
    {
        $inputs = $request->except(['_token', '_method']);

        foreach ($inputs as $id => $value) {
            $section = \App\Models\SiteSection::find($id);
            if ($section) {
                if ($request->hasFile($id)) {
                    // Handle file upload (Image or Video)
                    $file = $request->file($id);
                    $path = $file->store('site', 'public');
                    $section->value = 'storage/' . $path;
                } else {
                    // Handle text update
                    $section->value = $value;
                }
                $section->save();
            }
        }

        return back()->with('success', 'Conteúdos da página atualizados com sucesso!');
    }
}
