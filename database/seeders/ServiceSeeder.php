<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        if (Service::count() > 0) {
            return;
        }

        $items = [
            [
                'image' => 'assets/services.jpg', 'link' => '/servicos/agendamento',
                'title' => 'Serviço por Agendamento', 'title_en' => 'Service by Appointment',
                'desc' => 'Agende o seu serviço de forma rápida e conveniente. A nossa equipa técnica está preparada para prestar assistência especializada, garantindo um atendimento eficiente e de acordo com os padrões de qualidade da ROX Motor.',
                'desc_en' => 'Book your service quickly and conveniently. Our technical team is ready to provide specialised assistance, ensuring efficient service in line with ROX Motor quality standards.',
            ],
            [
                'image' => 'assets/services-ver.jpg', 'link' => '/servicos/apoio-tecnico',
                'title' => 'Apoio Técnico & Manutenção', 'title_en' => 'Technical Support & Maintenance',
                'desc' => 'Por intermédio da OCTA Angola, disponibilizamos apoio técnico especializado, manutenção e assistência realizada por técnicos certificados, utilizando equipamentos de diagnóstico oficiais e seguindo os procedimentos definidos.',
                'desc_en' => 'Through OCTA Angola, we provide specialised technical support, maintenance and assistance carried out by certified technicians, using official diagnostic equipment and following the defined procedures.',
            ],
            [
                'image' => 'assets/1.jpg', 'link' => '/servicos/pecas-acessorios',
                'title' => 'Peças & Acessórios', 'title_en' => 'Parts & Accessories',
                'desc' => 'Mantenha a sua viatura com os elevados padrões de qualidade da ROX Motor. Disponibilizamos peças originais e acessórios desenvolvidos para garantir desempenho, segurança e total compatibilidade com o seu veículo.',
                'desc_en' => 'Keep your vehicle to ROX Motor\'s high quality standards. We offer genuine parts and accessories designed to ensure performance, safety and full compatibility with your vehicle.',
            ],
            [
                'image' => 'assets/keji.jpg', 'link' => '/servicos/manual-instrucoes',
                'title' => 'Manual de Instruções', 'title_en' => 'Owner\'s Manual',
                'desc' => 'Consulte os manuais oficiais da ROX Motor para conhecer todas as funcionalidades, sistemas e recomendações de utilização da sua viatura. Tenha acesso rápido às informações necessárias para tirar o máximo partido da tecnologia.',
                'desc_en' => 'Consult the official ROX Motor manuals to learn about all the features, systems and usage recommendations for your vehicle. Get quick access to the information you need to make the most of the technology.',
            ],
        ];

        foreach ($items as $i => $row) {
            Service::create($row + ['sort' => $i + 1, 'is_published' => true]);
        }
    }
}
