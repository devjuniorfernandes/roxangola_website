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
        'home'          => ['label' => 'Página Inicial', 'file' => 'home', 'route' => 'home'],
        'showroom'      => ['label' => 'Showroom', 'file' => 'showroom', 'route' => 'showroom'],
        'representante' => ['label' => 'Representante (OCTA)', 'file' => 'concessionaria', 'route' => 'representante'],
        'revendedores'  => ['label' => 'Revendedores', 'file' => 'revendedores', 'route' => 'revendedores'],
        'catalogo'      => ['label' => 'Catálogo', 'file' => 'catalogo', 'route' => 'catalogo'],
        'contactos'     => ['label' => 'Contactos', 'file' => 'contactos', 'route' => 'contactos'],
        'marca'         => ['label' => 'Sobre — A Marca', 'file' => 'marca', 'route' => 'sobre.marca'],
        'historia'      => ['label' => 'Sobre — História', 'file' => 'historia', 'route' => 'sobre.historia'],
        'comunidade'    => ['label' => 'Sobre — Comunidade', 'file' => 'comunidade', 'route' => 'sobre.comunidade'],
        'common'        => ['label' => 'Comum (menu, rodapé, formulários)', 'file' => 'common', 'route' => 'home'],
    ],

    'images' => [
        'home' => [
            'label' => 'Página Inicial',
            'slots' => [
                'home.hero.rox01'     => ['label' => 'Hero — slide ROX 01', 'default' => 'assets/banner2.jpg'],
                'home.explore.adamas' => ['label' => 'Modelos — card ROX ADAMAS', 'default' => 'assets/banner-adamas.avif'],
                'home.explore.rox01'  => ['label' => 'Modelos — card ROX 01', 'default' => 'assets/banner2.jpg'],
                'home.showcase.bg'    => ['label' => 'Secção destaque — imagem de fundo', 'default' => 'assets/banner.jpg'],
                'home.cta.bg'         => ['label' => 'CTA Test Drive — imagem de fundo', 'default' => 'assets/cta.avif'],
            ],
        ],
    ],
];
