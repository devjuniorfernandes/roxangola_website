<?php

/**
 * Slots de imagem editáveis no CMS.
 * Cada slot: chave única => [label, default (caminho relativo em public/)].
 * Agrupados por página para a UI do admin. Para tornar uma imagem editável,
 * usar cms_image('chave', asset('assets/....')) na respetiva view.
 */
return [
    /**
     * Páginas mapeadas para edição de texto no CMS.
     * page_key => [label, file (ficheiro em lang/{locale}), route (para pré-visualizar)]
     * Os textos destas páginas usam __() e são editáveis via overrides.
     */
    'pages' => [
        'home'                      => ['label' => 'Página Inicial',                          'file' => 'home',                      'route' => 'home'],
        'rox01'                     => ['label' => 'ROX 01 — Página do Modelo',               'file' => 'rox01',                     'route' => 'rox01'],
        'rox-adamas'                => ['label' => 'ROX ADAMAS — Página do Modelo',           'file' => 'rox-adamas',                'route' => 'rox-adamas'],
        'especificacoes-rox01'      => ['label' => 'Especificações — ROX 01',                 'file' => 'especificacoes',            'route' => 'especificacoes.rox01'],
        'especificacoes-adamas'     => ['label' => 'Especificações — ROX ADAMAS',             'file' => 'especificacoes',            'route' => 'especificacoes.adamas'],
        'showroom'                  => ['label' => 'Showroom',                                'file' => 'showroom',                  'route' => 'showroom'],
        'representante'             => ['label' => 'Representante (OCTA)',                    'file' => 'concessionaria',            'route' => 'representante'],
        'revendedores'              => ['label' => 'Revendedores',                            'file' => 'revendedores',              'route' => 'revendedores'],
        'catalogo'                  => ['label' => 'Catálogo',                                'file' => 'catalogo',                  'route' => 'catalogo'],
        'contactos'                 => ['label' => 'Contactos',                               'file' => 'contactos',                 'route' => 'contactos'],
        'servicos'                  => ['label' => 'Serviços (página index)',                 'file' => 'servicos',                  'route' => 'servicos'],
        'servicos-agendamento'      => ['label' => 'Serviços — Agendamento',                  'file' => 'servicos_agendamento',      'route' => 'servicos.agendamento'],
        'servicos-apoio-tecnico'    => ['label' => 'Serviços — Apoio Técnico',              'file' => 'servicos_apoio_tecnico',    'route' => 'servicos.apoio-tecnico'],
        'servicos-pecas-acessorios' => ['label' => 'Serviços — Peças & Acessórios',          'file' => 'servicos_pecas_acessorios', 'route' => 'servicos.pecas-acessorios'],
        'servicos-manual-instrucoes'=> ['label' => 'Serviços — Manual de Instruções',        'file' => 'servicos_manual_instrucoes','route' => 'servicos.manual-instrucoes'],
        'marca'                     => ['label' => 'Sobre — A Marca',                         'file' => 'marca',                     'route' => 'sobre.marca'],
        'historia'                  => ['label' => 'Sobre — História',                        'file' => 'historia',                  'route' => 'sobre.historia'],
        'comunidade'                => ['label' => 'Sobre — Comunidade',                      'file' => 'comunidade',                'route' => 'sobre.comunidade'],
        'politica-privacidade'      => ['label' => 'Política de Privacidade',                 'file' => 'politica-privacidade',      'route' => 'politica-privacidade'],
        'common'                    => ['label' => 'Comum (menu, rodapé, formulários)',       'file' => 'common',                    'route' => 'home'],
    ],

    'images' => [
        'home' => [
            'label' => 'Página Inicial',
            'slots' => [
                // Hero
                'home.hero.adamas'         => ['label' => 'Hero — fundo slide ROX ADAMAS (poster)',    'default' => 'assets/banner-adamas.avif'],
                'home.hero.rox01'          => ['label' => 'Hero — fundo slide ROX 01',                  'default' => 'assets/banner2.jpg'],
                // Explore Models
                'home.explore.adamas'      => ['label' => 'Explorar Modelos — imagem card ROX ADAMAS',  'default' => 'assets/banner-adamas.avif'],
                'home.explore.rox01'       => ['label' => 'Explorar Modelos — imagem card ROX 01',      'default' => 'assets/banner2.jpg'],
                // Showcase background
                'home.showcase.bg'         => ['label' => 'Showcase — imagem de fundo sticky',          'default' => 'assets/banner.jpg'],
                // Specs slider (6 cards)
                'home.specs.slide1.img'    => ['label' => 'Specs — Card 1 (REEV) — imagem',            'default' => 'assets/sellingpoint.avif'],
                'home.specs.slide2.img'    => ['label' => 'Specs — Card 2 (Autonomia) — imagem',       'default' => 'assets/banner1_en.jfif'],
                'home.specs.slide3.img'    => ['label' => 'Specs — Card 3 (Todo-o-Terreno) — imagem', 'default' => 'assets/rox01_global.jfif'],
                'home.specs.slide4.img'    => ['label' => 'Specs — Card 4 (Luxo) — imagem',            'default' => 'assets/rox_1/interior/6-seater/Amber Orange.jpg'],
                'home.specs.slide5.img'    => ['label' => 'Specs — Card 5 (Segurança) — imagem',      'default' => 'assets/banner3_global.jfif'],
                'home.specs.slide6.img'    => ['label' => 'Specs — Card 6 (Conectividade) — imagem',  'default' => 'assets/banner6_global.jfif'],
                // Catalog cards
                'home.catalog.download_img'=> ['label' => 'Catálogo — imagem card Download PDF',       'default' => 'assets/adamasslider1.avif'],
                'home.catalog.view_img'    => ['label' => 'Catálogo — imagem card Visualizar',          'default' => 'assets/banner2.jpg'],
                // CTA Test Drive
                'home.cta.bg'              => ['label' => 'CTA Test Drive — imagem de fundo',           'default' => 'assets/cta.avif'],
            ],
        ],
        'rox01' => [
            'label' => 'ROX 01',
            'slots' => [
                'rox01.hero.bg'          => ['label' => 'Hero — imagem de fundo',         'default' => 'assets/banner2.jpg'],
                'rox01.terrain.section'  => ['label' => 'Todo-o-Terreno — imagem header', 'default' => 'assets/banner1_en.jfif'],
                'rox01.versatile.section'=> ['label' => 'Versatilidade — imagem header',  'default' => 'assets/banner1_g.jfif'],
                'rox01.specs.car'        => ['label' => 'Especificações — foto do carro',  'default' => 'assets/car1.avif'],
            ],
        ],
        'rox-adamas' => [
            'label' => 'ROX ADAMAS',
            'slots' => [
                'adamas.hero.bg'    => ['label' => 'Hero — imagem de fundo (poster)', 'default' => 'assets/banner-adamas.avif'],
            ],
        ],
        'servicos' => [
            'label' => 'Serviços',
            'slots' => [
                'servicos.hero.bg'                     => ['label' => 'Serviços — imagem de fundo',                'default' => 'assets/servicos.avif'],
                'servicos.agendamento.hero_bg'         => ['label' => 'Agendamento — imagem de fundo',             'default' => 'assets/services.jpg'],
                'servicos.apoio_tecnico.hero_bg'       => ['label' => 'Apoio Técnico — imagem de fundo',           'default' => 'assets/services-ver.jpg'],
                'servicos.apoio_tecnico.card1'         => ['label' => 'Apoio Técnico — Card 1 (Revisões)',        'default' => 'assets/revisao.avif'],
                'servicos.apoio_tecnico.card2'         => ['label' => 'Apoio Técnico — Card 2 (Diagnóstico)',     'default' => 'assets/Diagnostico.avif'],
                'servicos.apoio_tecnico.card3'         => ['label' => 'Apoio Técnico — Card 3 (Oficina)',         'default' => 'assets/oficina_apoio_tecnico.avif'],
                'servicos.apoio_tecnico.card4'         => ['label' => 'Apoio Técnico — Card 4 (Garantia)',        'default' => 'assets/services.jpg'],
                'servicos.pecas_acessorios.hero_bg'    => ['label' => 'Peças & Acessórios — imagem de fundo',     'default' => 'assets/1.jpg'],
                'servicos.pecas_acessorios.card1'      => ['label' => 'Peças & Acessórios — Card 1 (Peças)',      'default' => 'assets/pecas.avif'],
                'servicos.pecas_acessorios.card2'      => ['label' => 'Peças & Acessórios — Card 2 (Acessórios)', 'default' => 'assets/acessorios_oficiais.avif'],
                'servicos.pecas_acessorios.card3'      => ['label' => 'Peças & Acessórios — Card 3 (Encomenda)',   'default' => 'assets/encomenda.avif'],
                'servicos.pecas_acessorios.card4'      => ['label' => 'Peças & Acessórios — Card 4 (Stock)',       'default' => 'assets/stock.avif'],
                'servicos.manual_instrucoes.hero_bg'   => ['label' => 'Manual de Instruções — imagem de fundo',    'default' => 'assets/keji.jpg'],
                'servicos.manual_instrucoes.adamas_img'=> ['label' => 'Manual de Instruções — Imagem ROX ADAMAS','default' => 'assets/adamasslider1.avif'],
                'servicos.manual_instrucoes.rox01_img' => ['label' => 'Manual de Instruções — Imagem ROX 01',    'default' => 'assets/banner2.jpg'],
            ],
        ],
    ],

    /**
     * Slots de ficheiros (PDF, documentos) editáveis no CMS.
     * Cada slot: chave única => [label, default (caminho relativo em public/), locale].
     * locale: 'pt' | 'en' | '*' (partilhado entre idiomas).
     */
    'files' => [
        'catalogo' => [
            'label' => 'Catálogo de Veículos (PDF)',
            'slots' => [
                'catalog.pdf.pt' => [
                    'label'   => 'Catálogo PDF — Versão em Português (PT)',
                    'default' => 'assets/Catalogo_ROX_PT_baixa.pdf',
                    'locale'  => 'pt',
                    'accept'  => 'application/pdf',
                ],
                'catalog.pdf.en' => [
                    'label'   => 'Catálogo PDF — Versão em Inglês (EN)',
                    'default' => 'assets/Catalogo_ROX_PT_baixa.pdf',
                    'locale'  => 'en',
                    'accept'  => 'application/pdf',
                ],
            ],
        ],
    ],
];

