<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageSeo;

class PageSeoSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            [
                'page_key' => 'home', 'label' => 'Página Inicial',
                'title_pt' => 'ROX Angola | SUVs Premium Oficiais em Angola | ROX 01 & ADAMAS',
                'title_en' => 'ROX Angola | Official Premium SUVs in Angola | ROX 01 & ADAMAS',
                'description_pt' => 'Conheça a ROX Angola. Descubra os SUVs premium ROX 01 e ROX ADAMAS, marque um test drive e visite o showroom oficial em Angola.',
                'description_en' => 'Discover ROX Angola. Explore the premium ROX 01 and ROX ADAMAS SUVs, book a test drive and visit the official showroom in Angola.',
                'h1_pt' => 'ROX Angola – SUVs Premium para uma Nova Geração de Mobilidade',
                'h1_en' => 'ROX Angola – Premium SUVs for a New Generation of Mobility',
                'keywords' => 'ROX Angola, ROX Motor Angola, SUV Premium Angola, SUV de luxo Angola, Carros ROX, ROX Oficial, Test Drive ROX',
            ],
            [
                'page_key' => 'rox-adamas', 'label' => 'ROX ADAMAS',
                'title_pt' => 'ROX ADAMAS Angola | SUV Premium de Luxo | ROX Motor',
                'title_en' => 'ROX ADAMAS Angola | Premium Luxury SUV | ROX Motor',
                'description_pt' => 'Descubra o ROX ADAMAS em Angola. Um SUV premium que combina luxo, tecnologia avançada e desempenho para qualquer aventura.',
                'description_en' => 'Discover the ROX ADAMAS in Angola. A premium SUV combining luxury, advanced technology and performance for any adventure.',
                'h1_pt' => 'ROX ADAMAS', 'h1_en' => 'ROX ADAMAS',
                'keywords' => 'ROX ADAMAS Angola, SUV luxo Angola, SUV Premium Angola, Carro Premium Angola',
            ],
            [
                'page_key' => 'rox01', 'label' => 'ROX 01',
                'title_pt' => 'ROX 01 Angola | SUV Premium Híbrido | ROX Motor Angola',
                'title_en' => 'ROX 01 Angola | Premium Hybrid SUV | ROX Motor Angola',
                'description_pt' => 'Conheça o ROX 01 em Angola. SUV premium híbrido com tecnologia inteligente, conforto e capacidade para todas as aventuras.',
                'description_en' => 'Discover the ROX 01 in Angola. A premium hybrid SUV with intelligent technology, comfort and capability for every adventure.',
                'h1_pt' => 'ROX 01', 'h1_en' => 'ROX 01',
                'keywords' => 'ROX 01 Angola, SUV híbrido Angola, SUV Premium, SUV sete lugares',
            ],
            [
                'page_key' => 'catalogo', 'label' => 'Catálogo',
                'title_pt' => 'Catálogo ROX Angola | Explore Todos os Modelos',
                'title_en' => 'ROX Angola Catalogue | Explore All Models',
                'description_pt' => 'Consulte o catálogo oficial da ROX Angola. Compare modelos, descubra especificações e encontre o SUV ideal.',
                'description_en' => 'Browse the official ROX Angola catalogue. Compare models, discover specifications and find the ideal SUV.',
                'h1_pt' => 'Catálogo ROX Angola', 'h1_en' => 'ROX Angola Catalogue',
                'keywords' => 'Catálogo ROX Angola, SUV Premium Angola, ROX 01, ROX ADAMAS',
            ],
            [
                'page_key' => 'representante', 'label' => 'Representante (OCTA Angola)',
                'title_pt' => 'Representante Oficial ROX em Angola | OCTA Angola',
                'title_en' => 'Official ROX Representative in Angola | OCTA Angola',
                'description_pt' => 'Conheça a OCTA Angola, representante oficial da ROX em Angola. Descubra os nossos serviços, showroom e apoio especializado.',
                'description_en' => 'Meet OCTA Angola, the official ROX representative in Angola. Discover our services, showroom and specialised support.',
                'h1_pt' => 'Representante Oficial ROX em Angola', 'h1_en' => 'Official ROX Representative in Angola',
                'keywords' => 'Representante Oficial ROX Angola, OCTA Angola, Concessionário ROX Angola',
            ],
            [
                'page_key' => 'showroom', 'label' => 'Showroom',
                'title_pt' => 'Showroom ROX Angola | Visite-nos e Faça um Test Drive',
                'title_en' => 'ROX Angola Showroom | Visit Us and Book a Test Drive',
                'description_pt' => 'Visite o showroom oficial da ROX Angola. Conheça os modelos, marque um test drive e descubra a experiência ROX.',
                'description_en' => 'Visit the official ROX Angola showroom. Explore the models, book a test drive and discover the ROX experience.',
                'h1_pt' => 'Showroom ROX Angola', 'h1_en' => 'ROX Angola Showroom',
                'keywords' => 'Showroom ROX Luanda, Test Drive ROX Angola, SUV Premium Angola',
            ],
            [
                'page_key' => 'servicos', 'label' => 'Serviços',
                'title_pt' => 'Serviços ROX Angola | Assistência Técnica Oficial',
                'title_en' => 'ROX Angola Services | Official Technical Assistance',
                'description_pt' => 'Descubra os serviços oficiais da ROX Angola, incluindo manutenção, apoio técnico, peças originais e assistência especializada.',
                'description_en' => 'Discover ROX Angola\'s official services, including maintenance, technical support, genuine parts and specialised assistance.',
                'h1_pt' => 'Serviços ROX Angola', 'h1_en' => 'ROX Angola Services',
                'keywords' => 'Assistência Técnica ROX, Manutenção ROX, Serviços ROX Angola',
            ],
            [
                'page_key' => 'servicos.agendamento', 'label' => 'Serviço por Agendamento',
                'title_pt' => 'Agendamento de Serviço | ROX Angola',
                'title_en' => 'Service Booking | ROX Angola',
                'description_pt' => 'Marque online a manutenção ou revisão do seu veículo ROX em Angola com assistência técnica especializada.',
                'description_en' => 'Book your ROX vehicle maintenance or service online in Angola with specialised technical assistance.',
                'h1_pt' => 'Agendar Serviço', 'h1_en' => 'Book a Service',
                'keywords' => 'Agendamento Serviço ROX, Manutenção ROX Angola',
            ],
            [
                'page_key' => 'servicos.apoio-tecnico', 'label' => 'Apoio Técnico & Manutenção',
                'title_pt' => 'Assistência Técnica ROX Angola | Manutenção Oficial',
                'title_en' => 'ROX Angola Technical Assistance | Official Maintenance',
                'description_pt' => 'Serviço técnico especializado para veículos ROX em Angola. Garantimos qualidade, segurança e peças originais.',
                'description_en' => 'Specialised technical service for ROX vehicles in Angola. We guarantee quality, safety and genuine parts.',
                'h1_pt' => 'Assistência Técnica e Manutenção', 'h1_en' => 'Technical Assistance and Maintenance',
                'keywords' => 'Assistência Técnica ROX, Manutenção Oficial ROX Angola',
            ],
            [
                'page_key' => 'servicos.pecas-acessorios', 'label' => 'Peças e Acessórios',
                'title_pt' => 'Peças e Acessórios Originais ROX Angola',
                'title_en' => 'Genuine ROX Angola Parts and Accessories',
                'description_pt' => 'Encontre peças e acessórios originais para o seu veículo ROX. Qualidade certificada e assistência oficial em Angola.',
                'description_en' => 'Find genuine parts and accessories for your ROX vehicle. Certified quality and official assistance in Angola.',
                'h1_pt' => 'Peças e Acessórios', 'h1_en' => 'Parts and Accessories',
                'keywords' => 'Peças Originais ROX Angola, Acessórios ROX',
            ],
            [
                'page_key' => 'servicos.manual-instrucoes', 'label' => 'Manual de Instruções',
                'title_pt' => 'Manual do Proprietário | ROX Angola',
                'title_en' => 'Owner\'s Manual | ROX Angola',
                'description_pt' => 'Consulte os manuais oficiais dos veículos ROX e obtenha toda a informação necessária para a utilização e manutenção.',
                'description_en' => 'Access the official ROX vehicle manuals and get all the information you need for use and maintenance.',
                'h1_pt' => 'Manual de Instruções', 'h1_en' => 'Owner\'s Manual',
                'keywords' => 'Manual ROX, Manual do Proprietário ROX Angola',
            ],
            [
                'page_key' => 'sobre.marca', 'label' => 'A Marca',
                'title_pt' => 'A Marca ROX | Inovação e Mobilidade Premium',
                'title_en' => 'The ROX Brand | Innovation and Premium Mobility',
                'description_pt' => 'Descubra a filosofia da ROX, uma marca internacional que combina tecnologia, luxo e inovação automóvel.',
                'description_en' => 'Discover the ROX philosophy, an international brand combining technology, luxury and automotive innovation.',
                'h1_pt' => 'A Marca', 'h1_en' => 'The Brand',
                'keywords' => 'Marca ROX, Inovação ROX, Mobilidade Premium',
            ],
            [
                'page_key' => 'sobre.historia', 'label' => 'A História',
                'title_pt' => 'História da ROX | A Evolução da Marca',
                'title_en' => 'ROX History | The Evolution of the Brand',
                'description_pt' => 'Conheça a história da ROX e a evolução da marca até se tornar uma referência em SUVs premium.',
                'description_en' => 'Learn about ROX\'s history and the brand\'s evolution into a benchmark for premium SUVs.',
                'h1_pt' => 'A História da ROX', 'h1_en' => 'The History of ROX',
                'keywords' => 'História ROX, Marca ROX',
            ],
            [
                'page_key' => 'sobre.comunidade', 'label' => 'Comunidade ROX',
                'title_pt' => 'Comunidade ROX | Eventos e Experiências',
                'title_en' => 'ROX Community | Events and Experiences',
                'description_pt' => 'Junte-se à comunidade ROX e acompanhe eventos, experiências e novidades da marca em Angola e no mundo.',
                'description_en' => 'Join the ROX community and follow events, experiences and brand news in Angola and around the world.',
                'h1_pt' => 'Comunidade ROX', 'h1_en' => 'ROX Community',
                'keywords' => 'Comunidade ROX, Eventos ROX Angola',
            ],
            [
                'page_key' => 'contactos', 'label' => 'Contactos',
                'title_pt' => 'Contactos ROX Angola | Marque o Seu Test Drive',
                'title_en' => 'Contact ROX Angola | Book Your Test Drive',
                'description_pt' => 'Entre em contacto com a ROX Angola para solicitar informações, marcar um test drive ou visitar o showroom oficial.',
                'description_en' => 'Get in touch with ROX Angola to request information, book a test drive or visit the official showroom.',
                'h1_pt' => 'Contactos', 'h1_en' => 'Contact',
                'keywords' => 'Contactos ROX Angola, Test Drive ROX Angola',
            ],
            // Páginas sem entrada no documento — SEO genérico
            [
                'page_key' => 'especificacoes', 'label' => 'Especificações',
                'title_pt' => 'Especificações ROX | ROX 01 e ROX ADAMAS',
                'title_en' => 'ROX Specifications | ROX 01 and ROX ADAMAS',
                'description_pt' => 'Consulte as especificações técnicas completas do ROX 01 e do ROX ADAMAS em Angola.',
                'description_en' => 'See the full technical specifications of the ROX 01 and ROX ADAMAS in Angola.',
                'h1_pt' => 'Especificações ROX', 'h1_en' => 'ROX Specifications',
                'keywords' => 'Especificações ROX, ROX 01 ficha técnica, ROX ADAMAS ficha técnica',
            ],
            [
                'page_key' => 'revendedores', 'label' => 'Revendedores',
                'title_pt' => 'Seja Revendedor ROX em Angola | OCTA Angola',
                'title_en' => 'Become a ROX Dealer in Angola | OCTA Angola',
                'description_pt' => 'Junte-se à rede ROX em Angola. Candidate-se a revendedor oficial através da OCTA Angola.',
                'description_en' => 'Join the ROX network in Angola. Apply to become an official dealer through OCTA Angola.',
                'h1_pt' => 'Seja Nosso Revendedor', 'h1_en' => 'Become Our Dealer',
                'keywords' => 'Revendedor ROX Angola, Parceria ROX',
            ],
        ];

        foreach ($rows as $row) {
            PageSeo::updateOrCreate(['page_key' => $row['page_key']], $row);
        }
    }
}
