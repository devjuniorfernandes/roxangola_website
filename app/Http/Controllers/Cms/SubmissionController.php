<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\{Contact, Lead, ShowroomVisit, ServiceBooking, DealerApplication, InfoRequest};

class SubmissionController extends Controller
{
    /** Tipos de submissão (caixas de entrada). */
    public static function types(): array
    {
        return [
            'contactos'    => ['model' => Contact::class,          'label' => 'Contactos',                 'cols' => ['name' => 'Nome', 'email' => 'Email', 'phone' => 'Telefone', 'model_interest' => 'Modelo', 'intention' => 'Intenção']],
            'leads'        => ['model' => Lead::class,             'label' => 'Leads (Test Drive)',        'cols' => ['name' => 'Nome', 'phone' => 'Telefone', 'source' => 'Origem']],
            'visitas'      => ['model' => ShowroomVisit::class,    'label' => 'Visitas ao Showroom',        'cols' => ['name' => 'Nome', 'phone' => 'Telefone', 'preferred_date' => 'Data', 'model_interest' => 'Modelo']],
            'marcacoes'    => ['model' => ServiceBooking::class,   'label' => 'Marcações de Serviço',       'cols' => ['name' => 'Nome', 'model' => 'Modelo', 'service_type' => 'Serviço', 'preferred_date' => 'Data']],
            'revendedores' => ['model' => DealerApplication::class,'label' => 'Candidaturas de Revendedor', 'cols' => ['company_name' => 'Empresa', 'contact_name' => 'Contacto', 'email' => 'Email']],
            'info'         => ['model' => InfoRequest::class,      'label' => 'Pedidos de Informação',      'cols' => ['name' => 'Nome', 'email' => 'Email', 'phone' => 'Telefone']],
        ];
    }

    /** Contagem de não lidos por tipo (para os badges na sidebar). */
    public static function unreadCounts(): array
    {
        $out = [];
        foreach (static::types() as $key => $t) {
            try {
                $out[$key] = $t['model']::where('is_read', false)->count();
            } catch (\Throwable $e) {
                $out[$key] = 0;
            }
        }
        return $out;
    }

    protected function config(string $type): array
    {
        $types = static::types();
        abort_unless(isset($types[$type]), 404);
        return $types[$type];
    }

    public function index(string $type)
    {
        $cfg = $this->config($type);
        $items = $cfg['model']::latest()->paginate(25);
        return view('cms.submissions.index', [
            'type' => $type, 'cfg' => $cfg, 'items' => $items, 'types' => static::types(),
        ]);
    }

    public function show(string $type, int $id)
    {
        $cfg = $this->config($type);
        $item = $cfg['model']::findOrFail($id);
        if (\Schema::hasColumn($item->getTable(), 'is_read')) {
            $item->forceFill(['is_read' => true])->save();
        }
        return view('cms.submissions.show', [
            'type' => $type, 'cfg' => $cfg, 'item' => $item,
        ]);
    }

    public function destroy(string $type, int $id)
    {
        $cfg = $this->config($type);
        $cfg['model']::findOrFail($id)->delete();
        return redirect()->route('cms.submissions.index', $type)->with('status', 'Registo removido.');
    }
}
