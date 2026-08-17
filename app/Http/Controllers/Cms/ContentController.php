<?php
namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use App\Models\ContentOverride;
use Illuminate\Http\Request;
class ContentController extends Controller
{
    public function index()
    {
        return view('cms.content.index', [
            'groups'    => config('cms.images', []),
            'overrides' => ContentOverride::imageMap(),
        ]);
    }
    public function update(Request $request)
    {
        foreach (config('cms.images', []) as $group) {
            foreach ($group['slots'] as $key => $slot) {
                $h = md5($key);
                if ($request->boolean('reset_'.$h)) {
                    ContentOverride::where('key', $key)->where('type', 'image')->delete();
                } elseif ($request->hasFile('img_'.$h)) {
                    $path = $request->file('img_'.$h)->store('cms', 'public');
                    ContentOverride::updateOrCreate(
                        ['key' => $key, 'type' => 'image', 'locale' => '*'],
                        ['value' => 'storage/'.$path]
                    );
                }
            }
        }
        return redirect()->route('cms.content.index')->with('status', 'Imagens atualizadas.');
    }
}
