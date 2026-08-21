<?php
namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\ContentOverride;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        // Mapa de ficheiros: indexado por locale depois por key
        $fileMaps = ContentOverride::fileMap();

        return view('cms.content.index', [
            'groups'     => config('cms.images', []),
            'overrides'  => ContentOverride::imageMap(),
            'fileGroups' => config('cms.files', []),
            'fileMap'    => $fileMaps,
        ]);
    }

    public function update(Request $request)
    {
        // ─── Imagens ────────────────────────────────────────────────────
        foreach (config('cms.images', []) as $group) {
            foreach ($group['slots'] as $key => $slot) {
                $h = md5($key);
                if ($request->boolean('reset_' . $h)) {
                    ContentOverride::where('key', $key)->where('type', 'image')->delete();
                } elseif ($request->hasFile('img_' . $h)) {
                    $path = $request->file('img_' . $h)->store('cms', 'public');
                    ContentOverride::updateOrCreate(
                        ['key' => $key, 'type' => 'image', 'locale' => '*'],
                        ['value' => 'storage/' . $path]
                    );
                }
            }
        }

        // ─── Ficheiros PDF ───────────────────────────────────────────────
        foreach (config('cms.files', []) as $group) {
            foreach ($group['slots'] as $key => $slot) {
                $h      = md5($key);
                $locale = $slot['locale'] ?? '*';

                if ($request->boolean('reset_file_' . $h)) {
                    ContentOverride::where('key', $key)->where('type', 'file')->delete();
                } elseif ($request->hasFile('file_' . $h)) {
                    $request->validate([
                        'file_' . $h => ['file', 'mimes:pdf', 'max:51200'],
                    ]);
                    $path = $request->file('file_' . $h)->store('cms/catalogos', 'public');
                    ContentOverride::updateOrCreate(
                        ['key' => $key, 'type' => 'file', 'locale' => $locale],
                        ['value' => 'storage/' . $path]
                    );
                }
            }
        }

        return redirect()->route('cms.content.index')->with('status', 'Conteúdo atualizado com sucesso.');
    }
}
