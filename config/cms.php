<?php

/**
 * Slots de imagem editáveis no CMS.
 * Cada slot: chave única => [label, default (caminho relativo em public/)].
 * Agrupados por página para a UI do admin. Para tornar uma imagem editável,
 * usar cms_image('chave', asset('assets/....')) na respetiva view.
 */
return [
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
