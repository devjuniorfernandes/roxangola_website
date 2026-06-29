<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/contacts', [\App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
    
    // Pages / Site Sections
    Route::get('/pages', [\App\Http\Controllers\SiteSectionController::class, 'index'])->name('pages.index');
    Route::put('/pages', [\App\Http\Controllers\SiteSectionController::class, 'update'])->name('pages.update');
    
    // Vehicles
    Route::resource('vehicles', \App\Http\Controllers\VehicleController::class)->except(['show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
