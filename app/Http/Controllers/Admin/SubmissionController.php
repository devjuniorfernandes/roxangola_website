<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DealerApplication;
use App\Models\InfoRequest;
use App\Models\Lead;
use App\Models\ServiceBooking;
use App\Models\ShowroomVisit;
use Illuminate\View\View;

/** Caixa de entrada única para todas as submissões públicas. */
class SubmissionController extends Controller
{
    private function render(string $title, string $description, string $model, array $columns): View
    {
        return view('admin.submissions.index', [
            'title' => $title,
            'description' => $description,
            'columns' => $columns,
            'items' => $model::latest()->get(),
        ]);
    }

    public function showroomVisits(): View
    {
        return $this->render('Visitas ao Showroom', 'Pedidos de marcação de visita e test drive.', ShowroomVisit::class, [
            'name' => 'Nome', 'email' => 'Email', 'phone' => 'Telefone', 'model_interest' => 'Modelo', 'preferred_date' => 'Data', 'preferred_time' => 'Hora', 'observations' => 'Observações',
        ]);
    }

    public function serviceBookings(): View
    {
        return $this->render('Marcações de Serviço', 'Pedidos de assistência, manutenção e diagnóstico.', ServiceBooking::class, [
            'name' => 'Nome', 'email' => 'Email', 'phone' => 'Telefone', 'model' => 'Modelo', 'plate' => 'Matrícula', 'service_type' => 'Serviço', 'preferred_date' => 'Data', 'preferred_time' => 'Hora', 'observations' => 'Observações',
        ]);
    }

    public function dealerApplications(): View
    {
        return $this->render('Candidaturas de Revendedor', 'Pedidos enviados por potenciais parceiros comerciais.', DealerApplication::class, [
            'company_name' => 'Empresa', 'contact_name' => 'Contacto', 'email' => 'Email', 'phone' => 'Telefone', 'location' => 'Localização', 'message' => 'Mensagem',
        ]);
    }

    public function infoRequests(): View
    {
        return $this->render('Pedidos de Informação', 'Registos recebidos através da página de comunidade.', InfoRequest::class, [
            'name' => 'Nome', 'email' => 'Email', 'phone' => 'Telefone',
        ]);
    }

    public function leads(): View
    {
        return $this->render('Leads', 'Contactos recolhidos pelo popup de interesse.', Lead::class, [
            'name' => 'Nome', 'phone' => 'Telefone', 'source' => 'Origem',
        ]);
    }
}
