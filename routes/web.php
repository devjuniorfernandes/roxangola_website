<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/locale/{locale}', function (string $locale) {
    if (in_array($locale, \App\Http\Middleware\SetLocale::SUPPORTED, true)) {
        session(['locale' => $locale]);
        cookie()->queue(cookie('locale', $locale, 525600)); // 1 ano
    }
    return redirect()->back();
})->name('locale.switch');

Route::get('/sitemap.xml', function () {
    $paths = [
        '/', '/rox-01', '/rox-adamas', '/catalogo',
        '/representante', '/showroom', '/revendedores',
        '/servicos', '/servicos/agendamento', '/servicos/apoio-tecnico',
        '/servicos/pecas-acessorios', '/servicos/manual-instrucoes',
        '/sobre/marca', '/sobre/historia', '/sobre/comunidade',
        '/contactos', '/especificacoes/rox-01', '/especificacoes/rox-adamas',
        '/politica-privacidade',
    ];
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($paths as $p) {
        $loc = htmlspecialchars(url($p), ENT_XML1);
        $priority = $p === '/' ? '1.0' : '0.8';
        $xml .= "  <url><loc>{$loc}</loc><changefreq>weekly</changefreq><priority>{$priority}</priority></url>\n";
    }
    $xml .= '</urlset>';
    return response($xml, 200)->header('Content-Type', 'application/xml; charset=utf-8');
})->name('sitemap');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/rox-01', function () {
    return view('rox01');
})->name('rox01');

Route::get('/rox-adamas', function () {
    return view('rox-adamas');
})->name('rox-adamas');

Route::get('/explorar', function () {
    return view('explorar');
})->name('explorar');

Route::get('/contactos', function () {
    return view('contactos');
})->name('contactos');

Route::post('/contactos', [\App\Http\Controllers\ContactController::class, 'store'])->name('contactos.store');

Route::post('/leads', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
    ]);
    \App\Models\Lead::create($validated);
    return response()->json(['success' => true]);
})->name('leads.store');

Route::get('/sobre-nos', function () {
    return view('sobre-nos');
})->name('sobre-nos');

Route::get('/sobre/marca', function () {
    return view('sobre.marca');
})->name('sobre.marca');

Route::get('/sobre/historia', function () {
    return view('sobre.historia');
})->name('sobre.historia');

Route::get('/sobre/comunidade', function () {
    return view('sobre.comunidade');
})->name('sobre.comunidade');

Route::post('/sobre/comunidade', [\App\Http\Controllers\InfoRequestController::class, 'store'])->name('sobre.comunidade.store');

Route::get('/showroom', function () {
    return view('showroom');
})->name('showroom');

Route::post('/showroom', [\App\Http\Controllers\ShowroomVisitController::class, 'store'])->name('showroom.store');

Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

Route::get('/representante', function () {
    return view('concessionaria');
})->name('representante');

Route::get('/revendedores', function () {
    return view('revendedores');
})->name('revendedores');

Route::post('/revendedores', [\App\Http\Controllers\DealerApplicationController::class, 'store'])->name('revendedores.store');

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

Route::get('/servicos/agendamento', function () {
    return view('servicos.agendamento');
})->name('servicos.agendamento');

Route::post('/servicos/agendamento', [\App\Http\Controllers\ServiceBookingController::class, 'store'])->name('servicos.agendamento.store');

Route::get('/servicos/apoio-tecnico', function () {
    return view('servicos.apoio-tecnico');
})->name('servicos.apoio-tecnico');

Route::get('/servicos/pecas-acessorios', function () {
    return view('servicos.pecas-acessorios');
})->name('servicos.pecas-acessorios');

Route::get('/servicos/manual-instrucoes', function () {
    return view('servicos.manual-instrucoes');
})->name('servicos.manual-instrucoes');

Route::get('/politica-privacidade', function () {
    return view('politica-privacidade');
})->name('politica-privacidade');

Route::get('/especificacoes/{modelo?}', function ($modelo = 'rox-01') {
    return view('especificacoes', ['modeloActivo' => $modelo]);
})->name('especificacoes');

Route::get('/especificacoes/{modelo}/pdf', [\App\Http\Controllers\SpecsController::class, 'downloadPdf'])->name('especificacoes.pdf');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/contacts', [\App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
    
    // Pages / Site Sections
    Route::get('/pages', [\App\Http\Controllers\SiteSectionController::class, 'index'])->name('pages.index');
    Route::put('/pages', [\App\Http\Controllers\SiteSectionController::class, 'update'])->name('pages.update');

    // CMS — conteúdo editável (texto + imagens)
    Route::get('/cms', [\App\Http\Controllers\CmsContentController::class, 'edit'])->name('cms.edit');
    Route::put('/cms', [\App\Http\Controllers\CmsContentController::class, 'update'])->name('cms.update');

    // CMS — Coleções (CRUD guiado por schema)
    Route::resource('highlights', \App\Http\Controllers\Admin\HighlightController::class)->except(['show']);
    
    // Vehicles
    Route::resource('vehicles', \App\Http\Controllers\VehicleController::class)->except(['show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
