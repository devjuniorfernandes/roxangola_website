<?php
namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use App\Models\PageSeo;
use Illuminate\Http\Request;
class SeoController extends Controller
{
    public function index()
    {
        return view('cms.seo.index', ['rows' => PageSeo::orderBy('label')->orderBy('page_key')->get()]);
    }
    public function edit(PageSeo $pageSeo)
    {
        return view('cms.seo.form', ['row' => $pageSeo]);
    }
    public function update(Request $request, PageSeo $pageSeo)
    {
        $pageSeo->update($request->only([
            'title_pt', 'title_en', 'description_pt', 'description_en', 'h1_pt', 'h1_en', 'keywords',
        ]));
        return redirect()->route('cms.seo.index')->with('status', 'SEO atualizado.');
    }
}
