<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        @font-face {
            font-family: 'TTNormsPro';
            src: url('{{ public_path('assets/fonts/TTNormsProRegular.otf') }}') format('opentype');
            font-weight: 400;
        }
        @font-face {
            font-family: 'TTNormsPro';
            src: url('{{ public_path('assets/fonts/TTNormsProMedium.otf') }}') format('opentype');
            font-weight: 500;
        }
        @page { margin: 40px 50px; }
        body { font-family: 'TTNormsPro', 'Helvetica Neue', Arial, sans-serif; color: #1a1a1a; font-size: 11px; line-height: 1.6; }

        /* Cover */
        .cover { text-align: center; padding-top: 220px; page-break-after: always; }
        .cover h1 { font-size: 32px; font-weight: 400; letter-spacing: 5px; margin-bottom: 6px; }
        .cover .subtitle { font-size: 12px; color: #C5A059; letter-spacing: 3px; margin-top: 30px; }
        .cover .distributor { font-size: 10px; color: #bbb; margin-top: 50px; }
        .cover .logo-row { margin-bottom: 6px; }
        .cover .angola-text { font-size: 10px; font-weight: 500; letter-spacing: 4px; color: #999; text-transform: uppercase; }

        /* Header bar on spec pages */
        .header-bar { display: table; width: 100%; margin-bottom: 25px; border-bottom: 1px solid #e5e5e5; padding-bottom: 12px; }
        .header-bar .logo-cell { display: table-cell; vertical-align: middle; }
        .header-bar .model-cell { display: table-cell; vertical-align: middle; text-align: right; }
        .header-bar .model-name { font-size: 13px; font-weight: 400; letter-spacing: 2px; }
        .header-bar .model-sub { font-size: 9px; color: #C5A059; letter-spacing: 2px; }
        .header-bar .angola-text { font-size: 8px; font-weight: 500; letter-spacing: 3px; color: #999; text-transform: uppercase; }

        h2 { font-size: 20px; font-weight: 400; margin: 25px 0 18px; letter-spacing: 1px; }
        .section-header { background: #f4f6f9; padding: 8px 12px; font-size: 11px; font-weight: 500; margin: 18px 0 4px; }
        .subsection { font-size: 10px; font-weight: 500; color: #666; text-transform: uppercase; letter-spacing: 1.5px; padding: 10px 12px 4px; }
        .legend { font-size: 10px; color: #888; margin-bottom: 12px; }
        table { width: 100%; border-collapse: collapse; }
        table th { text-align: left; font-size: 10px; font-weight: 500; color: #888; padding: 8px 12px; border-bottom: 1px solid #ddd; }
        table td { padding: 6px 12px; border-bottom: 1px solid #f0f0f0; font-size: 10px; }
        table td:first-child { color: #555; width: 45%; }
        table td:nth-child(2), table td:nth-child(3) { width: 27.5%; color: #1a1a1a; }
        .disclaimer { margin-top: 25px; padding-top: 12px; border-top: 1px solid #e5e5e5; font-size: 8px; color: #bbb; }
        .footer { position: fixed; bottom: 0; left: 0; right: 0; text-align: center; font-size: 8px; color: #ccc; padding: 8px 50px; }
    </style>
</head>
<body>
    <!-- Cover Page -->
    <div class="cover">
        <div class="logo-row">
            <img src="{{ public_path('assets/logo-full.svg') }}" alt="ROX" style="height: 28px;">
        </div>
        <div class="angola-text">Angola</div>

        <div style="margin-top: 70px;">
            <h1>{{ $modelName }}</h1>
            <div class="subtitle">Full-Scenario All-Terrain Luxury SUV</div>
        </div>

        <div class="distributor">Distribuído por Octa Mobil &bull; Luanda, Angola</div>
    </div>

    <!-- Specs Pages -->
    <div class="header-bar">
        <div class="logo-cell">
            <img src="{{ public_path('assets/logo-full.svg') }}" alt="ROX" style="height: 18px; vertical-align: middle;">
            <span class="angola-text" style="margin-left: 8px; vertical-align: middle;">Angola</span>
        </div>
        <div class="model-cell">
            <div class="model-name">{{ $modelName }}</div>
            <div class="model-sub">Full-Scenario All-Terrain Luxury SUV</div>
        </div>
    </div>

    <h2>{{ $modelName }} Especificações</h2>

    <div class="legend">● Padrão &nbsp;&nbsp; ○ Opcional &nbsp;&nbsp; — Não disponível</div>

    <table>
        <thead>
            <tr>
                <th></th>
                <th>Versão 7 lugares (2-2-3)</th>
                <th>Versão 6 lugares (2-2-2)</th>
            </tr>
        </thead>
    </table>

    @php
        $sections = [
            'Cores Exteriores & Interiores' => [
                '_sub:Cores Exteriores' => null,
                'Gloaming Gray' => ['●', '●'],
                'Polar White' => ['●', '●'],
                'Black Knight Special Version — All Black Exterior Kit' => ['○', '○'],
                '_sub:Cores Interiores' => null,
                'Amber Orange' => ['●', '●'],
                'Jade White' => ['●', '●'],
                'Pearl Black' => ['●', '●'],
            ],
            'Parâmetros Básicos' => [
                'Dimensões do veículo' => $modelo === 'rox-01' ? ['5.295 × 1.980 × 1.869 mm', '5.295 × 1.980 × 1.869 mm'] : ['5.298 × 1.985 × 1.856 mm', '5.298 × 1.985 × 1.856 mm'],
                'Entre-eixos' => ['3.010 mm', '3.010 mm'],
                'Peso em vazio' => ['2.735 kg', '2.735 kg'],
                'Aceleração 0-100 km/h' => ['5.5 s', '5.5 s'],
                'Velocidade máxima' => ['190 km/h', '190 km/h'],
                'Modos de energia' => ['Elétrico / Combustível / Híbrido', 'Elétrico / Combustível / Híbrido'],
                'Motor dianteiro 3-in-1' => ['150 kW / 340 N·m', '150 kW / 340 N·m'],
                'Motor traseiro 3-in-1' => ['200 kW / 400 N·m', '200 kW / 400 N·m'],
                'Potência/binário total' => $modelo === 'rox-01' ? ['350 kW / 740 N·m', '350 kW / 740 N·m'] : ['380 kW / 780 N·m', '380 kW / 780 N·m'],
                'Autonomia elétrica WLTC' => ['235 km', '235 km'],
                'Autonomia híbrida WLTC' => ['1.115 km', '1.115 km'],
                'Range extender' => ['1.5T quatro cilindros', '1.5T quatro cilindros'],
                'Tipo de combustível' => ['95', '95'],
                'Norma de emissões' => ['Euro V', 'Euro V'],
                'Capacidade do depósito' => ['70 L', '70 L'],
                'Carregamento AC lento (7 kW)' => ['8.6 h (0-100%)', '8.6 h (0-100%)'],
            ],
            'Chassis' => [
                'Suspensão dianteira' => ['Liga alumínio — duplo triângulo', 'Liga alumínio — duplo triângulo'],
                'Suspensão traseira' => ['Liga alumínio — multilink H-arm', 'Liga alumínio — multilink H-arm'],
                'Sub-quadros dianteiro e traseiro' => ['Alumínio', 'Alumínio'],
                'Tipo de amortecedor' => ['DCC — Amortecimento variável contínuo', 'DCC — Amortecimento variável contínuo'],
                'Discos ventilados nas 4 rodas' => ['●', '●'],
                'Regeneração de energia na travagem' => ['●', '●'],
                'Direção assistida elétrica' => ['●', '●'],
                'Modo Estrada' => ['●', '●'],
                'Modo Neve' => ['●', '●'],
                'Modo Rocha' => ['●', '●'],
                'Modo Lama' => ['●', '●'],
            ],
            'Jantes e Pneus' => [
                '21" jantes dual-tone e pneus all-season (WLTC 235 km)' => ['● (275/45 R21)', '● (275/45 R21)'],
                '21" jantes pretas e pneus all-season (WLTC 235 km)' => ['● (275/45 R21)', '● (275/45 R21)'],
                'Pneu suplente exterior tamanho completo (incl. capa)' => ['●', '●'],
                'Pacote de reboque' => ['●', '●'],
            ],
            'Proteção e Segurança' => [
                'Programa de Estabilidade Eletrónica (ESP)' => ['●', '●'],
                'Sistema Anti-bloqueio (ABS)' => ['●', '●'],
                'Controlo de Arranque em Rampa (HHC)' => ['●', '●'],
                'Controlo de Tração (TCS)' => ['●', '●'],
                'Controlo Dinâmico do Veículo (VDC)' => ['●', '●'],
                'Distribuição Eletrónica de Travagem (EBD)' => ['●', '●'],
                'Sinal de paragem de emergência (HAZ)' => ['●', '●'],
                'Airbags frontais condutor e passageiro' => ['●', '●'],
                'Airbags laterais dianteiros' => ['●', '●'],
                'Airbags de cortina' => ['●', '●'],
            ],
        ];
    @endphp

    @foreach($sections as $sectionName => $rows)
        <div class="section-header">{{ $sectionName }}</div>
        <table>
            <tbody>
                @foreach($rows as $label => $values)
                    @if(str_starts_with($label, '_sub:'))
                        <tr><td colspan="3" class="subsection" style="border-bottom: none;">{{ str_replace('_sub:', '', $label) }}</td></tr>
                    @else
                        <tr>
                            <td>{{ $label }}</td>
                            <td>{{ $values[0] }}</td>
                            <td>{{ $values[1] }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @endforeach

    <div class="disclaimer">
        <p>Todas as especificações estão sujeitas a alterações sem aviso prévio. As imagens são meramente ilustrativas. Consulte o seu concessionário Octa Mobil para informações atualizadas.</p>
        <p style="margin-top: 6px;">&copy; {{ date('Y') }} ROX Angola — Distribuído por Octa Mobil, Luanda, Angola &bull; info@octamobil.com &bull; (+244) 945 110 22</p>
    </div>

    <div class="footer">roxmotors.ao</div>
</body>
</html>
