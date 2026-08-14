<x-front-layout>
    <x-slot name="title">Especificações ROX</x-slot>

    @php
        $isEnglish = app()->getLocale() === 'en';
        $models = [
            'rox-01' => ['name' => 'ROX 01', 'dimensoes' => '5.295 × 1.980 × 1.869 mm', 'peso' => '2.735 kg', 'potencia' => '350 kW / 740 N·m', 'autonomia_hibrida' => '1.115 km', 'carregamento_ac' => '8.6 h (0-100%)', 'seat_7' => 'Versão 7 lugares', 'seat_7_layout' => '(2-2-3)', 'seat_6' => 'Versão 6 lugares', 'seat_6_layout' => '(2-2-2)'],
            'rox-adamas' => ['name' => 'ROX ADAMAS', 'dimensoes' => '5.298 × 1.985 × 1.856 mm', 'peso' => '2.745 kg', 'potencia' => '350 kW / 740 N·m', 'autonomia_hibrida' => '1.226 km', 'carregamento_ac' => '8.8 h (0-100%)', 'seat_7' => $isEnglish ? 'ROX ADAMAS Couch 7-Seater' : 'ROX ADAMAS — Versão Couch de 7 lugares', 'seat_7_layout' => '(2-3-2)', 'seat_6' => $isEnglish ? 'ROX ADAMAS First-Class 6-Seater' : 'ROX ADAMAS — Versão First-Class de 6 lugares', 'seat_6_layout' => '(2-2-2)'],
        ];
        $initialModel = $modeloActivo ?? 'rox-01';

        $colorRows = [
            'rox-01' => [
                ['subsection' => 'Cores Exteriores'],
                ['label' => 'Branco Polar', 'color' => '#d4d4d0', 'image' => 'assets/rox_1/interior/swatches/white exterior.png', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => 'Cinza Crepúsculo', 'color' => '#6b6b6b', 'image' => 'assets/rox_1/interior/swatches/grey exterior.png', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => 'Preto Noite Estrelada — Série Especial Black Knight (Kit Exterior All Black, incluindo acabamento em aço tungsténio)', 'color' => '#2d2d2d', 'image' => 'assets/rox_1/interior/swatches/black exterior.png', '7' => '&#9675;', '6' => '&#9675;'],
                ['subsection' => 'Cores Interiores'],
                ['label' => 'Laranja Âmbar', 'color' => '#c8850f', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => 'Branco Jade', 'color' => '#c4c0b0', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => 'Preto Perolado', 'color' => '#2d2d2d', '7' => '&#9679;', '6' => '&#9679;'],
            ],
            'rox-adamas' => [
                ['subsection' => 'Cores Exteriores'],
                ['label' => 'Dourado Deserto', 'color' => '#b28b4e', 'image' => 'assets/rox_adamas/exterior_colors/Desert Gold.png', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => 'Verde Esmeralda', 'color' => '#31594a', 'image' => 'assets/rox_adamas/exterior_colors/Emerald Green.png', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => 'Cinzento Basalto', 'color' => '#62676a', 'image' => 'assets/rox_adamas/exterior_colors/Basalt Grey.png', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => 'Branco Polar', 'color' => '#d4d4d0', 'image' => 'assets/rox_adamas/exterior_colors/Polar White.png', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => 'Preto Obsidiana — Edição Black Knight', 'color' => '#202124', 'image' => 'assets/rox_adamas/exterior_colors/Obsidian Black - Black Knight Edition.png', '7' => '&#9675;', '6' => '&#9675;'],
                ['subsection' => 'Cores Interiores'],
                ['label' => 'Roxo Ametista', 'color' => '#776d88', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => 'Laranja Âmbar', 'color' => '#d5804a', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => 'Preto Perolado', 'color' => '#292a2c', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => 'Branco Jade', 'color' => '#d5d5d5', '7' => '&#9679;', '6' => '&#9679;'],
            ],
        ];

        $sections = [
            'cores' => [
                'title' => 'Cores Exteriores & Interiores',
                'rows' => collect($colorRows)->flatMap(fn ($rows, $model) => collect($rows)->map(fn ($row) => $row + ['model' => $model]))->all(),
            ],
            'parametros' => [
                'title' => 'Parâmetros Básicos',
                'rows' => [
                    ['label' => 'Dimensões do veículo', '7' => '__DIMENSOES__', '6' => '__DIMENSOES__', 'dynamic' => 'dimensoes'],
                    ['label' => 'Entre-eixos', '7' => '3.010 mm', '6' => '3.010 mm'],
                    ['label' => 'Peso em vazio', '7' => '__PESO__', '6' => '__PESO__', 'dynamic' => 'peso'],
                    ['label' => 'Aceleração 0-100 km/h', '7' => '5.5 s', '6' => '5.5 s'],
                    ['label' => 'Velocidade máxima', '7' => '190 km/h', '6' => '190 km/h'],
                    ['label' => 'Modos de energia', '7' => 'Elétrico / Combustível / Híbrido', '6' => 'Elétrico / Combustível / Híbrido'],
                    ['label' => 'Motor dianteiro 3 em 1 de alta eficiência', '7' => '150 kW / 340 N·m', '6' => '150 kW / 340 N·m'],
                    ['label' => 'Motor traseiro 3 em 1 de alta eficiência', '7' => '200 kW / 400 N·m', '6' => '200 kW / 400 N·m'],
                    ['label' => 'Potência/binário total do sistema', '7' => '__POTENCIA__', '6' => '__POTENCIA__', 'dynamic' => 'potencia'],
                    ['label' => 'Autonomia elétrica WLTC', '7' => '235 km', '6' => '235 km'],
                    ['label' => 'Autonomia híbrida WLTC', '7' => '1.115 km', '6' => '1.115 km', 'dynamic' => 'autonomia_hibrida'],
                    ['label' => 'Extensor de Autonomia', '7' => '1.5T quatro cilindros', '6' => '1.5T quatro cilindros'],
                    ['label' => 'Tipo de combustível', '7' => '95', '6' => '95'],
                    ['label' => 'Norma de emissões', '7' => 'Euro V', '6' => 'Euro V'],
                    ['label' => 'Capacidade do depósito', '7' => '70 L', '6' => '70 L'],
                    ['label' => 'Carregamento AC lento (7 kW)', '7' => '8.6 h (0-100%)', '6' => '8.6 h (0-100%)', 'dynamic' => 'carregamento_ac'],
                ],
            ],
            'chassis' => [
                'title' => 'Chassis',
                'rows' => [
                    ['label' => 'Suspensão dianteira', '7' => 'Liga de alumínio — duplo triângulo', '6' => 'Liga de alumínio — duplo triângulo'],
                    ['label' => 'Suspensão traseira', '7' => 'Liga de alumínio — multilink H-arm', '6' => 'Liga de alumínio — multilink H-arm'],
                    ['label' => 'Sub-quadros dianteiro e traseiro', '7' => 'Alumínio', '6' => 'Alumínio'],
                    ['label' => 'Tipo de amortecedor', '7' => 'DCC — Amortecimento variável contínuo', '6' => 'DCC — Amortecimento variável contínuo'],
                    ['label' => 'Discos ventilados nas 4 rodas', '7' => '●', '6' => '●'],
                    ['label' => 'Regeneração de energia na travagem', '7' => '●', '6' => '●'],
                    ['label' => 'Direção assistida elétrica', '7' => '●', '6' => '●'],
                    ['label' => 'Modo Estrada', '7' => '●', '6' => '●'],
                    ['label' => 'Modo Neve', '7' => '●', '6' => '●'],
                    ['label' => 'Modo Rocha', '7' => '●', '6' => '●'],
                    ['label' => 'Modo Lama', '7' => '●', '6' => '●'],
                    ['label' => 'Modo Areia', '7' => '●', '6' => '●'],
                    ['label' => 'Modo Vadeamento', '7' => '●', '6' => '●'],
                ],
            ],
            'jantes' => [
                'title' => 'Jantes e Pneus',
                'rows' => [
                    ['label' => 'Jantes 21" em dois tons e pneus para todas as estações (autonomia elétrica WLTC 235 km)', '7' => '● (275/45 R21)', '6' => '● (275/45 R21)'],
                    ['label' => 'Jantes 21" em preto e pneus para todas as estações (autonomia elétrica WLTC 235 km)', '7' => '● (275/45 R21)', '6' => '● (275/45 R21)'],
                    ['label' => 'Pneu suplente exterior tamanho completo (incl. capa)', '7' => '●', '6' => '●'],
                    ['label' => 'Pré-Instalação de Kit de reboque', '7' => '●', '6' => '●'],
                ],
            ],
            'seguranca' => [
                'title' => 'Proteção e Segurança',
                'rows' => [
                    ['label' => 'Programa de Estabilidade Eletrónica (ESP)', '7' => '●', '6' => '●'],
                    ['label' => 'Sistema Anti-bloqueio (ABS)', '7' => '●', '6' => '●'],
                    ['label' => 'Controlo de Arranque em Rampa (HHC)', '7' => '●', '6' => '●'],
                    ['label' => 'Controlo de Tração (TCS)', '7' => '●', '6' => '●'],
                    ['label' => 'Controlo Dinâmico do Veículo (VDC)', '7' => '●', '6' => '●'],
                    ['label' => 'Distribuição Eletrónica de Travagem (EBD)', '7' => '●', '6' => '●'],
                    ['label' => 'Sinal de paragem de emergência (HAZ)', '7' => '●', '6' => '●'],
                    ['label' => 'Airbags frontais condutor e passageiro', '7' => '●', '6' => '●'],
                    ['label' => 'Airbags laterais dianteiros', '7' => '●', '6' => '●'],
                    ['label' => 'Airbags de cortina', '7' => '●', '6' => '●'],
                    ['label' => 'Alerta de cinto desapertado na 1.ª fila', '7' => '●', '6' => '●'],
                    ['label' => 'Alerta de cinto desapertado na 2.ª fila', '7' => '●', '6' => '●'],
                    ['label' => 'Pré-tensores dos cintos de segurança', '7' => '●', '6' => '●'],
                    ['label' => 'Controlo Dinâmico de Estabilidade (DST)', '7' => '●', '6' => '●'],
                    ['label' => 'Intervenção anti-capotamento (RMI)', '7' => '●', '6' => '●'],
                    ['label' => 'Controlo de descida em declives (HDC)', '7' => '●', '6' => '●'],
                    ['label' => 'Monitorização da pressão dos pneus (TPMS)', '7' => '●', '6' => '●'],
                    ['label' => 'Travão de estacionamento elétrico (EPB)', '7' => '●', '6' => '●'],
                    ['label' => 'Sistema sonoro de alerta para peões (AVAS)', '7' => '●', '6' => '●'],
                    ['label' => 'Modo reboque', '7' => '●', '6' => '●'],
                    ['label' => 'Auto Hold', '7' => '●', '6' => '●'],
                    ['label' => 'Sistema de chamada de emergência eCall', '7' => '●', '6' => '●'],
                    ['label' => 'Extintor', '7' => '● (fornecido pelo distribuidor local)', '6' => '● (fornecido pelo distribuidor local)'],
                    ['label' => 'Kit de primeiros socorros', '7' => '● (fornecido pelo distribuidor local)', '6' => '● (fornecido pelo distribuidor local)'],
                ],
            ],
        ];

        // A tabela oficial tem equipamentos próprios de cada modelo. Estes grupos
        // mantêm os dados separados, inclusive quando se troca de modelo sem recarregar.
        $standardRows = static fn (array $labels, string $model) => array_map(
            static fn (string $label) => ['label' => $label, '7' => '●', '6' => '●', 'model' => $model],
            $labels
        );

        $sections['energia'] = [
            'title' => 'Sistema de Energia e Motorização',
            'rows' => array_merge([
                ['label' => 'Porta de carregamento padrão europeu', '7' => 'CCS Type 2', '6' => 'CCS Type 2', 'model' => 'rox-01'],
                ['label' => 'Descarga V2L (bagageira + exterior)', '7' => '2,2 kW / 2,2 kW', '6' => '2,2 kW / 2,2 kW', 'model' => 'rox-01'],
                ['label' => 'Capacidade da bateria de tração', '7' => '56,01 kWh', '6' => '56,01 kWh', 'model' => 'rox-01'],
                ['label' => 'Tipo de bateria de tração', '7' => 'Bateria de lítio ternária', '6' => 'Bateria de lítio ternária', 'model' => 'rox-01'],
                ['label' => 'Tração', '7' => '4WD permanente de dois motores', '6' => '4WD permanente de dois motores', 'model' => 'rox-adamas'],
                ['label' => 'Potência máxima', '7' => '350 kW', '6' => '350 kW', 'model' => 'rox-adamas'],
                ['label' => 'Binário máximo', '7' => '740 N·m', '6' => '740 N·m', 'model' => 'rox-adamas'],
                ['label' => 'Capacidade da bateria', '7' => '56,01 kWh', '6' => '56,01 kWh', 'model' => 'rox-adamas'],
                ['label' => 'Bateria', '7' => 'Lítio ternária CATL com proteção contra fuga térmica', '6' => 'Lítio ternária CATL com proteção contra fuga térmica', 'model' => 'rox-adamas'],
                ['label' => 'Autonomia combinada (WLTC)', '7' => '1.226 km', '6' => '1.226 km', 'model' => 'rox-adamas'],
                ['label' => 'Autonomia elétrica (WLTC)', '7' => '235 km', '6' => '235 km', 'model' => 'rox-adamas'],
                ['label' => 'Carregamento AC (0–100%)', '7' => '8,8 h (7 kW)', '6' => '8,8 h (7 kW)', 'model' => 'rox-adamas'],
                ['label' => 'Saída de energia externa', '7' => '5,7 kW (3,5 kW V2L + 2,2 kW a 220 V)', '6' => '5,7 kW (3,5 kW V2L + 2,2 kW a 220 V)', 'model' => 'rox-adamas'],
            ], $standardRows([
                'Extensor de autonomia 1.5T de quatro cilindros', 'Porta de carregamento CCS Type 2',
            ], 'rox-adamas')),
        ];

        $sections['todo_terreno'] = [
            'title' => 'Desempenho Todo-o-Terreno',
            'rows' => array_merge($standardRows([
                'Modo ROX: Areia', 'Modo ROX: Vadeamento',
            ], 'rox-01'), [
                ['label' => 'Suspensão pneumática de câmara fechada', '7' => 'Ajuste de altura em 7 níveis', '6' => 'Ajuste de altura em 7 níveis', 'model' => 'rox-adamas'],
                ['label' => 'Curso máximo da suspensão pneumática', '7' => '140 mm', '6' => '140 mm', 'model' => 'rox-adamas'],
                ['label' => 'Modo de alta velocidade', '7' => 'Rebaixamento de 15/25 mm', '6' => 'Rebaixamento de 15/25 mm', 'model' => 'rox-adamas'],
                ['label' => 'Assistência de acesso / garagem', '7' => 'Rebaixamento de 50 mm', '6' => 'Rebaixamento de 50 mm', 'model' => 'rox-adamas'],
                ['label' => 'Modo de carga fácil da bagageira', '7' => 'Eixo traseiro rebaixa 60 mm', '6' => 'Eixo traseiro rebaixa 60 mm', 'model' => 'rox-adamas'],
                ['label' => 'Modo de recuperação', '7' => 'Elevação de 80 mm', '6' => 'Elevação de 80 mm', 'model' => 'rox-adamas'],
                ['label' => 'Altura livre da bateria ao solo', '7' => '324 mm', '6' => '324 mm', 'model' => 'rox-adamas'],
                ['label' => 'Altura livre mínima ao solo', '7' => '272 mm', '6' => '272 mm', 'model' => 'rox-adamas'],
                ['label' => 'Ângulo de ataque / saída / ventral', '7' => '27,5° / 27,9° / 24,6°', '6' => '27,5° / 27,9° / 24,6°', 'model' => 'rox-adamas'],
                ['label' => 'Inclinação máxima', '7' => '100% (45°)', '6' => '100% (45°)', 'model' => 'rox-adamas'],
                ['label' => 'Profundidade máxima de vadeamento', '7' => '770 mm', '6' => '770 mm', 'model' => 'rox-adamas'],
                ['label' => 'Modos todo-o-terreno', '7' => 'Auto, Estrada, Montanha, Lama, Areia, Neve e Vadeamento', '6' => 'Auto, Estrada, Montanha, Lama, Areia, Neve e Vadeamento', 'model' => 'rox-adamas'],
                ['label' => 'Controlo de cruzeiro todo-o-terreno / descida', '7' => '2–15 km/h / 2–35 km/h', '6' => '2–15 km/h / 2–35 km/h', 'model' => 'rox-adamas'],
            ]),
        ];

        $sections['interior_comforto'] = [
            'title' => 'Interior e Conforto',
            'rows' => array_merge($standardRows([
                'Volante multifunções em couro', 'Aquecimento do volante', 'Volante com ajuste elétrico em quatro vias',
                'Palas de sol esquerda e direita com espelho de cortesia iluminado',
                'Ar condicionado termostático de três zonas', 'Saídas de ar independentes na 2.ª e 3.ª filas',
                'Compartimento de arrumação inferior dianteiro com iluminação', 'Purificador de ar integrado com monitorização PM2.5', 'Gerador de iões negativos', 'Iluminação da caixa do apoio de braço central', 'Iluminação ambiente de 256 cores',
                'Luzes de leitura LED de um toque', 'Vidros elétricos com função anti-entalamento', 'Acesso sem chave em todas as portas',
                'Chave Bluetooth para telemóvel', 'Chave remota para novos modelos de energia (×2)', 'Chave mecânica (×2)', 'Fecho automático ao afastar-se do veículo', 'Iluminação da bagageira', 'Piso totalmente plano', 'Tapetes premium', 'Modo de campismo', 'Modo sesta',
                'Função de boas-vindas no banco do condutor', 'Botão “Boss” no lado do passageiro',
            ], 'rox-01'), $standardRows([
                'Volante aquecido com ajuste em quatro vias', 'Tranca de segurança infantil elétrica nas portas traseiras',
                'Forro do teto em camurça de microfibra', 'Ar condicionado automático de três zonas',
                'Saídas de ar independentes na 2.ª e 3.ª filas', 'Filtro de ar PM2.5 e purificador iónico',
                'Refrigerador/aquecedor de 8,5 L (0 °C a 50 °C)', 'Iluminação ambiente de 256 cores',
                'Luz exterior LED modular com carregamento magnético na bagageira', 'Acesso e arranque sem chave',
                'Bancos em couro Nappa', 'Ajuste elétrico do condutor em 12 vias', 'Ajuste elétrico do passageiro em 10 vias',
                'Aquecimento, ventilação e massagem nos bancos dianteiros', 'Encostos de cabeça Aero Comfort',
                'Função de boas-vindas do condutor e botão traseiro do passageiro', 'Modo divã',
                'Modo cama completo com 2.ª e 3.ª filas rebatidas', 'Entrada elétrica fácil na 3.ª fila',
                'Porta-luvas, caixa de apoio de braço, compartimento frontal e arrumação integrada na porta da bagageira',
            ], 'rox-adamas'), [
                ['subsection' => 'Bancos', 'model' => 'rox-01'],
                ['label' => 'Banco do condutor em couro premium respirável: ajuste elétrico em 14 vias, incluindo apoio para coxa (dianteiro/traseiro), reclinação (frente/trás), ângulo do encosto e apoio lombar em 4 vias; ajuste manual do encosto de cabeça e memória', '7' => '●', '6' => '●', 'model' => 'rox-01'],
                ['label' => 'Banco do passageiro dianteiro em couro premium respirável: ajuste elétrico em 10 vias, incluindo apoio para coxa (dianteiro/traseiro), reclinação (frente/trás), ângulo do encosto e apoio lombar em 4 vias; ajuste manual do encosto de cabeça', '7' => '●', '6' => '●', 'model' => 'rox-01'],
                ['label' => 'Bancos da 2.ª fila com ajuste elétrico em 8 vias, incluindo posicionamento (frente/trás), ângulo do encosto, apoio lombar em 4 vias; aquecimento e massagem', '7' => '—', '6' => '●', 'model' => 'rox-01'],
                ['label' => 'Banco traseiro da 2.ª fila com ajuste elétrico em 12 vias, incluindo posicionamento (frente/trás), ângulo do encosto, apoio lombar em 4 vias, apoio de pernas em 2 vias e apoio de cabeça em 4 vias; massagem e apoio de braço ajustável', '7' => '●', '6' => '—', 'model' => 'rox-01'],
                ['label' => 'Bancos aquecidos (3 níveis)', '7' => '1.ª e 2.ª filas', '6' => '1.ª e 2.ª filas (inclui apoio de pernas aquecido)', 'model' => 'rox-01'],
                ['label' => 'Bancos ventilados (3 níveis)', '7' => '1.ª fila', '6' => '1.ª e 2.ª filas', 'model' => 'rox-01'],
                ['label' => 'Apoio lombar e massagem', '7' => '1.ª e 2.ª filas', '6' => '1.ª e 2.ª filas (massagem em 8 pontos)', 'model' => 'rox-01'],
                ['label' => 'Encostos de cabeça macios Aero Comfort', '7' => '● (×4)', '6' => '● (×4)', 'model' => 'rox-01'],
                ['label' => 'Encostos de cabeça da 2.ª fila com abas laterais ajustáveis', '7' => '—', '6' => '●', 'model' => 'rox-01'],
                ['label' => 'Bancos Aero elétricos da 2.ª fila para entrada/saída fácil', '7' => '—', '6' => '●', 'model' => 'rox-01'],
                ['label' => 'Número de lugares na 3.ª fila', '7' => '● (×3)', '6' => '● (×2)', 'model' => 'rox-01'],
                ['label' => 'Modo cama king-size (2.ª e 3.ª filas rebatidas)', '7' => '●', '6' => '—', 'model' => 'rox-01'],
                ['label' => 'Modo cama individual (1.º banco ligado aos bancos da 2.ª fila)', '7' => '—', '6' => '●', 'model' => 'rox-01'],
                ['label' => 'Ajuste da 3.ª fila (7 níveis)', '7' => '●', '6' => '●', 'model' => 'rox-01'],
                ['label' => 'Apoio de braço central dianteiro com porta-copos', '7' => '●', '6' => '●', 'model' => 'rox-01'],
                ['label' => 'Porta-copos na 2.ª e 3.ª filas', '7' => '●', '6' => '●', 'model' => 'rox-01'],
            ]),
        ];

        $sections['cockpit'] = [
            'title' => 'Cockpit e Conectividade',
            'rows' => array_merge($standardRows([
                'Processador Qualcomm Snapdragon 8155', 'Painel de instrumentos de 12,3”', 'Ecrã tátil central de 15,7” com resolução 3K',
                'Ecrã traseiro HD de 15,6”', 'Espelho retrovisor digital de 9”', 'Apple CarPlay e espelhamento Carbit',
                'Processo anti-impressão digital por deposição de vapor de flúor-carbono', 'Tecnologia de ecrã antirreflexo', 'Vidro AS-PICE à prova de estilhaços', 'Sistema de altifalantes em todo o veículo', 'Bluetooth 5.1', 'Carregamento sem fios', 'Gravador de condução', 'Rádio DAB',
            ], 'rox-01'), $standardRows([
                'Processador Qualcomm Snapdragon 8155', 'Ecrã central tátil 3K de 15,7”', 'Painel multifunções de 12,3”',
                'Ecrã traseiro 3K de 15,7” com inclinação elétrica em 5 posições', 'Espelho retrovisor digital de 9,2”',
                'Sistema de áudio premium de 14 altifalantes (surround 7.1)', 'Afinação acústica ARKAMYS',
                'Apple CarPlay, CarbitLink e espelhamento de ecrãs', 'Bluetooth 5.2 e T-BOX',
                'Carregamento sem fios de 50 W arrefecido a ar (2×)', 'Portas USB-C dianteiras de 18 W (2×)',
                'Portas USB-C traseiras de 60 W (2×)', 'Tomada 220 V de 2,2 kW na bagageira', 'DVR panorâmico HD de 5 vistas', 'Rádio DAB',
            ], 'rox-adamas'), [
                ['label' => 'Portas de carregamento da 1.ª fila', '7' => '● (×2)', '6' => '● (×2)', 'model' => 'rox-01'],
                ['label' => 'Portas de carregamento da 2.ª fila', '7' => '● (×2)', '6' => '● (×2)', 'model' => 'rox-01'],
                ['label' => 'Tomada de carregamento de 12 V na 2.ª fila', '7' => '—', '6' => '●', 'model' => 'rox-01'],
                ['label' => 'Portas de carregamento da 3.ª fila', '7' => '● (×2)', '6' => '● (×2)', 'model' => 'rox-01'],
                ['label' => 'Portas de carregamento no apoio de braço central', '7' => '—', '6' => '●', 'model' => 'rox-01'],
                ['label' => 'Tomada de 220 V na bagageira', '7' => '2,2 kW', '6' => '2,2 kW', 'model' => 'rox-01'],
            ]),
        ];

        $sections['exterior'] = [
            'title' => 'Configuração Exterior',
            'rows' => array_merge($standardRows([
                'Faróis LED', 'Luzes traseiras LED', 'Luzes diurnas LED', 'Faróis adaptativos', 'Máximos automáticos (reconhecidos pela câmara de condução inteligente)',
                'Indicadores de mudança de direção dinâmicos dianteiros e traseiros', 'Luz de travagem elevada LED', 'Luz de nevoeiro traseira LED', 'Luz de marcha-atrás LED', 'Porta da bagageira lateral elétrica com sucção',
                'Limpa-para-brisas automático dianteiro', 'Limpa-vidro traseiro', 'Espelhos retrovisores aquecidos', 'Espelhos retrovisores rebatíveis automaticamente com ajuste elétrico e memória', 'Espelho retrovisor do condutor com escurecimento automático',
                'Para-brisas laminado termo-isolante', 'Vidros da 1.ª fila de dupla camada com isolamento acústico', 'Vidros da 2.ª fila de dupla camada com isolamento acústico', 'Vidros da 3.ª fila de dupla camada com isolamento acústico', 'Teto panorâmico de dois painéis com vidro de isolamento térmico/acústico', 'Cortina elétrica do teto panorâmico de dois painéis',
                'Vidros com proteção UV (veículo completo)', 'Vidro traseiro', 'Aquecimento do vidro traseiro', 'Barras longitudinais de tejadilho',
            ], 'rox-01'), $standardRows([
                'Faróis, luzes traseiras, luzes diurnas, nevoeiro e marcha-atrás LED', 'Controlo inteligente de máximos',
                'Indicador luminoso pulsante na porta de carregamento', 'Luzes de cortesia nas maçanetas',
                'Cinco portas com fecho suave, incluindo a bagageira', 'Fecho automático ao afastar-se',
                'Limpa-vidros dianteiro com sensor de chuva e traseiro elétrico', 'Espelhos exteriores aquecidos, elétricos e com memória',
                'Para-brisas laminado com isolamento UV e infravermelho', 'Vidros laminados acústicos na 1.ª e 2.ª filas',
                'Teto de vidro dianteiro e teto panorâmico traseiro com cortinas elétricas',
            ], 'rox-adamas')),
        ];

        $sections['conducao_inteligente'] = [
            'title' => 'Condução Inteligente e Assistência',
            'rows' => array_merge($standardRows([
                'Chip de condução inteligente', '5 radares de ondas milimétricas', '2 câmaras dianteiras de 2 MP',
                '4 câmaras de visão envolvente de 2 MP', '12 sensores ultrassónicos dianteiros e traseiros',
                'Imagem panorâmica HD de 360°', 'Mudança de faixa por comando (CLC) com assistência',
                'Cruzeiro adaptativo (ACC)', 'Aviso de colisão traseira e de tráfego cruzado traseiro',
                'Aviso de saída de faixa e assistência de manutenção na faixa', 'Monitorização de ângulo morto e aviso de abertura de porta',
            ], 'rox-01'), $standardRows([
                'Chip Horizon Journey® 6M', '3 radares de ondas milimétricas', '2 câmaras frontais de 8 MP',
                '4 câmaras de visão envolvente, 4 laterais e 1 traseira (2 MP)', '12 sensores de estacionamento dianteiros/traseiros',
                'Assistência automatizada em autoestrada', 'Cruzeiro adaptativo e centragem na faixa',
                'Mudança de faixa por comando e assistência à mudança de faixa', 'Aviso de tráfego cruzado dianteiro/traseiro e colisão dianteira/traseira',
                'Travagem automática de emergência dianteira e em marcha-atrás', 'Deteção de ângulo morto, aviso de abertura de porta e saída de faixa',
                'Manutenção de faixa de emergência', 'Estacionamento automático e remoto', 'Chamada remota inteligente em linha reta',
                'Vista transparente da zona inferior e deteção de profundidade de vadeamento',
            ], 'rox-adamas')),
        ];

        $sections['seguranca_avancada'] = [
            'title' => 'Segurança e Proteção Avançada',
            'rows' => array_merge($standardRows([
                'Estrutura de carroçaria em aço de alta resistência e alumínio', 'Classificação de colisão CIRI (G)',
                'Pré-tensores dos cintos de segurança', 'Controlo de descida em declives (HDC)', 'Monitorização da pressão dos pneus (TPMS)',
                'Travão de estacionamento elétrico (EPB)', 'Sistema sonoro de alerta para peões (AVAS)', 'Auto Hold',
                'Sistema de chamada de emergência eCall', 'Modo reboque',
            ], 'rox-01'), $standardRows([
                'Classificação C-NCAP de cinco estrelas e CIRI (G)', 'Estrutura de aço de alta resistência e liga de alumínio',
                'Estrutura composta da soleira da porta em alumínio extrudido reforçado', '2 airbags frontais, 2 laterais dianteiros e 2 laterais traseiros',
                '2 airbags de cortina', 'Alerta de cinto desapertado na 1.ª e 2.ª filas',
                'Cintos dianteiros com pré-tensor e limitador de carga (2×)', 'ISOFIX na 2.ª e 3.ª filas',
                'Imagem envolvente HD e assistência de radar de estacionamento', 'TPMS, EPB, Auto Hold e som de aviso exterior para peões',
                'Modo de reboque para assistência em estrada', 'Kit de primeiros socorros e extintor',
            ], 'rox-adamas')),
        ];

        $sections['acessorios'] = [
            'title' => 'Acessórios Opcionais',
            'rows' => array_merge([
                ['label' => 'Pedais fixos em aço de tungsténio', '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => 'Pedais fixos de luz suave', '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => 'Cozinha traseira', '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => 'Suporte de carga de tejadilho', '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => 'Proteção inferior do chassis', '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => 'Toldo em L de montagem rápida', '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => 'Jantes de 20” em dois tons com pneus AT', '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => 'Jantes de 20” pretas com pneus AT', '7' => '○', '6' => '○', 'model' => 'rox-01'],
            ], $standardRows([
                'Modo Sentinela urbano', 'Modo Sentinela de campismo',
            ], 'rox-adamas')),
        ];

        if ($initialModel === 'rox-adamas') {
            $adamas = static fn (array $labels) => array_map(static fn (string $label) => ['label' => $label, '7' => '●', '6' => '●'], $labels);
            $adamasSections = [
                'cores' => ['title' => 'Exterior & Interior', 'rows' => [
                    ['subsection' => 'Exterior Colors'],
                    ['label' => 'Polar White', 'color' => '#d4d4d0', 'image' => 'assets/rox_adamas/exterior_colors/Polar White.png', '7' => '●', '6' => '●'], ['label' => 'Basalt Gray', 'color' => '#62676a', 'image' => 'assets/rox_adamas/exterior_colors/Basalt Grey.png', '7' => '●', '6' => '●'], ['label' => 'Emerald Green', 'color' => '#31594a', 'image' => 'assets/rox_adamas/exterior_colors/Emerald Green.png', '7' => '●', '6' => '●'],
                    ['label' => 'Desert Gold', 'color' => '#b28b4e', 'image' => 'assets/rox_adamas/exterior_colors/Desert Gold.png', '7' => '○', '6' => '○'], ['label' => 'Obsidian Black – Black Knight Edition (available only with black starlight wheels)', 'color' => '#202124', 'image' => 'assets/rox_adamas/exterior_colors/Obsidian Black - Black Knight Edition.png', '7' => '○', '6' => '○'],
                    ['subsection' => 'Interior Colors'],
                    ['label' => 'Amber Orange', 'color' => '#d5804a', '7' => '●', '6' => '●'], ['label' => 'Jade White', 'color' => '#d5d5d5', '7' => '●', '6' => '●'], ['label' => 'Pearl Black', 'color' => '#292a2c', '7' => '●', '6' => '●'], ['label' => 'Amethyst Purple', 'color' => '#776d88', '7' => '●', '6' => '●'],
                ]],
                'rodas' => ['title' => 'Tires & Wheels', 'rows' => [
                    ['label' => '21-inch two-tone starlight wheel with all-season tire', '7' => '● (275/45 R21)', '6' => '● (275/45 R21)'], ['label' => '21-inch black starlight wheel with all-season tire', '7' => '● (275/45 R21)', '6' => '● (275/45 R21)'], ['label' => 'Tailgate-mounted full-size spare tire', '7' => '● (275/45 R21)', '6' => '● (275/45 R21)'],
                ]],
                'exterior_features' => ['title' => 'Exterior Features', 'rows' => $adamas(['Roof rail tracks', 'Towing package'])],
                'tecnicas' => ['title' => 'Technical Specifications', 'rows' => [
                    ['label' => 'Dimensions (L×W×H)', '7' => '5,298 × 1,985 × 1,856 mm', '6' => '5,298 × 1,985 × 1,856 mm'], ['label' => 'Vehicle wheelbase', '7' => '3,010 mm', '6' => '3,010 mm'], ['label' => 'Seating configuration', '7' => '2-3-2 seven-seat', '6' => '2-2-2 six-seat'], ['label' => '0–100 km/h acceleration', '7' => '5.5 s', '6' => '5.5 s'], ['label' => 'Top speed', '7' => '190 km/h (electronic speed limit)', '6' => '190 km/h (electronic speed limit)'], ['label' => 'Energy mode', '7' => 'ELECTRIC, e-SAVE, HYBRID', '6' => 'ELECTRIC, e-SAVE, HYBRID'], ['label' => 'Drive mode', '7' => 'Comfort, Standard, Sport, Sport+', '6' => 'Comfort, Standard, Sport, Sport+'], ['label' => 'High-efficiency range extender', '7' => '1.5T four-cylinder', '6' => '1.5T four-cylinder'], ['label' => 'Fuel recommendation', '7' => 'RON 95', '6' => 'RON 95'], ['label' => 'Emission standard', '7' => 'Euro V', '6' => 'Euro V'], ['label' => 'Fuel tank capacity', '7' => '70 L', '6' => '70 L'], ['label' => 'Drivetrain', '7' => 'Dual-motor full-time 4WD', '6' => 'Dual-motor full-time 4WD'], ['label' => 'Maximum power / torque', '7' => '350 kW / 740 N·m', '6' => '350 kW / 740 N·m'], ['label' => 'Front 3-in-1 high-efficiency e-drive system', '7' => '150 kW / 340 N·m', '6' => '150 kW / 340 N·m'], ['label' => 'Rear 3-in-1 high-efficiency e-drive system', '7' => '200 kW / 400 N·m', '6' => '200 kW / 400 N·m'], ['label' => 'Battery capacity', '7' => '56.01 kWh', '6' => '56.01 kWh'], ['label' => 'Battery type', '7' => 'CATL ternary lithium battery (flame-retardant materials and thermal-runaway protection)', '6' => 'CATL ternary lithium battery (flame-retardant materials and thermal-runaway protection)'], ['label' => 'Combined range (WLTC*)', '7' => '1,226 km', '6' => '1,226 km'], ['label' => 'EV range (WLTC*)', '7' => '235 km', '6' => '235 km'], ['label' => 'AC charging time (0–100%)', '7' => '8.8 h (7 kW)', '6' => '8.8 h (7 kW)'], ['label' => 'External power output', '7' => '5.7 kW (3.5 kW V2L + 2.2 kW 220 V)', '6' => '5.7 kW (3.5 kW V2L + 2.2 kW 220 V)'], ['label' => 'Curb weight', '7' => '2,745 kg', '6' => '2,745 kg'],
                ]],
                'chassis' => ['title' => 'Chassis System', 'rows' => array_merge([
                    ['label' => 'Front suspension type', '7' => 'All-aluminum double-wishbone suspension', '6' => 'All-aluminum double-wishbone suspension'], ['label' => 'Rear suspension type', '7' => 'All-aluminum H-arm multi-link suspension', '6' => 'All-aluminum H-arm multi-link suspension'], ['label' => 'Material of front and rear subframes', '7' => 'All aluminum alloy', '6' => 'All aluminum alloy'], ['label' => 'Closed-chamber air suspension', '7' => '● (7-level height adjustment)', '6' => '● (7-level height adjustment)'], ['label' => 'Maximum travel of air suspension', '7' => '140 mm', '6' => '140 mm'], ['label' => 'High Speed Mode*', '7' => 'Lowered by 15/25 mm', '6' => 'Lowered by 15/25 mm'], ['label' => 'Access Assist/Basement Parking Garage Mode*', '7' => 'Lowered by 50 mm', '6' => 'Lowered by 50 mm'], ['label' => 'Easy Trunk Loading Mode*', '7' => 'Rear axle lowered by 60 mm', '6' => 'Rear axle lowered by 60 mm'], ['label' => 'DCC mode', '7' => 'Comfort, Standard, Sport, All-terrain, Smart', '6' => 'Comfort, Standard, Sport, All-terrain, Smart'], ['label' => 'Regenerative coasting', '7' => '3-position adjustment', '6' => '3-position adjustment'],
                ], $adamas(['Dynamic damping control (DCC)', 'Front and rear ventilated disc brakes', 'Electric power steering (EPS)', 'Electric power-assisted brake']))],
                'offroad' => ['title' => 'Off-road Performance', 'rows' => [
                    ['label' => 'Ride height*', '7' => 'Raised by 80 mm', '6' => 'Raised by 80 mm'], ['label' => 'Battery pack ground clearance', '7' => '324 mm', '6' => '324 mm'], ['label' => 'Minimum ground clearance', '7' => '272 mm', '6' => '272 mm'], ['label' => 'Approach angle', '7' => '27.5°', '6' => '27.5°'], ['label' => 'Departure angle', '7' => '27.9°', '6' => '27.9°'], ['label' => 'Ramp angle', '7' => '24.6°', '6' => '24.6°'], ['label' => 'Maximum climbing grade', '7' => '100% (45° slope)', '6' => '100% (45° slope)'], ['label' => 'Maximum wading depth*', '7' => '770 mm', '6' => '770 mm'], ['label' => 'Recovery Mode', '7' => '●', '6' => '●'],
                ]],
            ];
            $sections = $adamasSections;
            $sections['interior'] = ['title' => 'Interior Configuration', 'rows' => array_merge(
                [['subsection' => 'Comfortable and Luxurious Configuration']],
                $adamas(['Heated steering wheel', 'Four-way adjustable steering wheel', 'Electrically controlled rear door child safety lock', 'Microfiber suede headliner', 'Automatic 3-zone air conditioner', 'Middle East–exclusive high-power A/C compressor', 'Front-row full electric air vent', 'Second-/third-row independent air vent', 'Interior temperature and humidity sensor', 'PM2.5 cabin air filter', 'Ionic air purifier', '256-color ambient light', 'Touch-control LED reading lights', 'Modular outdoor LED headlamp (magnetic trunk docking and charging)', 'All four power windows with one-touch up/down and anti-pinch protection', 'Keyless entry (including tailgate)', 'Bluetooth key (mobile enabled)', 'Keyless start', 'Fully flat cabin floor', 'Premium tufted carpet floor mats']),
                [['label' => 'Sun visor (with vanity mirror and lamp)', '7' => '×2', '6' => '×2'], ['label' => '8.5 L dual-mode cooler/warmer', '7' => '● (minimum 0°C, maximum 50°C)', '6' => '● (minimum 0°C, maximum 50°C)'], ['label' => 'Physical smart key', '7' => '×2', '6' => '×2'], ['subsection' => 'Seat Configuration'], ['subsection' => 'First-row Seats']],
                $adamas(['Nappa leather seats*', 'Seat heating', 'Seat ventilation', 'Seat massage (lumbar acupressure massage)', 'Driver’s seat welcome function', 'Front passenger seat rear control button']),
                [['label' => 'Driver’s seat adjustment', '7' => '12-way power adjustment', '6' => '12-way power adjustment'], ['label' => 'Front passenger seat adjustment', '7' => '10-way power adjustment', '6' => '10-way power adjustment'], ['label' => 'Aero comfort headrest', '7' => '×2', '6' => '×2'], ['label' => 'Daybed Mode', '7' => '—', '6' => '●'], ['subsection' => 'Second-row Seats'], ['label' => 'Nappa leather seats*', '7' => '●', '6' => '●'], ['label' => 'Second-row seat adjustment', '7' => 'Manual 4-way (40/60 split-folding)', '6' => '8-way power adjustment'], ['label' => 'Aero seat headrest wing adjustable', '7' => '—', '6' => '●'], ['label' => 'Aero seat one-button comfort mode', '7' => '—', '6' => '●'], ['label' => 'Seat heating', '7' => '●', '6' => '● (including leg-rest heating)'], ['label' => 'Seat ventilation', '7' => '—', '6' => '●'], ['label' => 'Seat massage', '7' => '—', '6' => '● (8-point full-back acupressure massage)'], ['label' => 'Aero comfort headrest', '7' => '×2', '6' => '×2'], ['label' => 'Full-bed Mode (2nd & 3rd rows folded flat)', '7' => '●', '6' => '—'], ['subsection' => 'Third-row Seats'], ['label' => 'Number of seats', '7' => '2', '6' => '2'], ['label' => 'Seat back adjustment', '7' => 'Manual 2-way (7-position adjustment)', '6' => 'Manual 2-way (7-position adjustment)'], ['label' => 'Power easy-entry (3rd row)', '7' => '—', '6' => '●'], ['subsection' => 'Interior Storage Configuration'], ['label' => 'Trunk capacity', '7' => '346 L / 1,191 L (3rd row folded) / 2,175 L (2nd & 3rd rows folded)', '6' => '346 L / 1,191 L (3rd row folded)']],
                $adamas(['Front passenger glove box', 'Central armrest box', 'Front center open storage compartment', 'Tailgate-integrated storage bin'])
            )];
            $sections['cockpit'] = ['title' => 'Cockpit Configuration', 'rows' => array_merge(
                $adamas(['15.7-inch 3K center touch screen', '12.3-inch multi-function instrument display', 'Screen multi-touch (center screen & rear infotainment display)', '9.2-inch slim-bezel streaming rearview mirror', 'Anti-fingerprint fluorocarbon coating (touchscreen)', 'Anti-glare screen', 'Automatic screen brightness adjustment', 'Automotive-grade shatter-resistant glass', 'Multilingual infotainment system*', 'Cockpit full-scene voice persona*', '“Say What You See” on IHU screen', 'Camping mode', 'Pet mode', 'Stealth mode', 'Power retention mode', 'In-car karaoke', 'Apple CarPlay', 'Smartphone Mirroring (CarbitLink)*', 'Infotainment app ecosystem', 'Bluetooth 5.2', 'T-BOX', 'On-board data network*', 'On-board two-way Wi-Fi*', 'Mobile app remote vehicle control*', 'HD panoramic DVR (5 simultaneous views)*', 'Digital Audio Broadcasting (DAB)']),
                [['label' => 'Infotainment system chip', '7' => 'Qualcomm Snapdragon 8155', '6' => 'Qualcomm Snapdragon 8155'], ['label' => '15.7-inch 3K rear infotainment touch screen', '7' => '● (5-position power tilt)', '6' => '● (5-position power tilt)'], ['label' => 'Premium audio system', '7' => '14 speakers (7.1-channel surround sound)', '6' => '14 speakers (7.1-channel surround sound)'], ['label' => 'Cabin acoustic tuning', '7' => 'ARKAMYS', '6' => 'ARKAMYS'], ['label' => 'Multi-zone intelligent voice control', '7' => '4-zone', '6' => '4-zone'], ['label' => 'Nap mode', '7' => 'First-row', '6' => 'First-row, second-row'], ['label' => 'Central/rear infotainment display mirroring', '7' => 'Wireless mirroring, wired mirroring', '6' => 'Wireless mirroring, wired mirroring'], ['label' => 'First-row mobile phone wireless fast charging', '7' => '×2 (50 W air cooling)', '6' => '×2 (50 W air cooling)'], ['label' => 'First-row charging port (18 W Type-C)', '7' => '×2', '6' => '×2'], ['label' => 'First-row 12 V power supply (180 W)', '7' => '×1', '6' => '×1'], ['label' => 'Center armrest TF card slot / Type-A data interface', '7' => '×1 / ×1', '6' => '×1 / ×1'], ['label' => 'Second-row charging port (60 W Type-C)', '7' => '×2', '6' => '×2'], ['label' => 'Second-row aero seat charging port (18 W Type-A)', '7' => '—', '6' => '×2'], ['label' => 'Third-row charging port (18 W Type-C)', '7' => '×2', '6' => '×2'], ['label' => 'Trunk 220 V power supply (2.2 kW)', '7' => '×1', '6' => '×1']]
            )];
            $sections['exterior_config'] = ['title' => 'Exterior Configuration', 'rows' => array_merge(
                [['subsection' => 'Exterior Lighting']],
                $adamas(['LED headlamp', 'LED tail lamp', 'LED daytime running lamp', 'Automatic headlamp', 'Intelligent High Beam Control (IHBC)', 'LED dynamic turn signal light', 'LED high-mounted brake lamp', 'LED rear fog lamp', 'LED reversing lamp', 'Charge port indicator light with pulsing animation', 'Exterior door-handle courtesy lights']),
                [['subsection' => 'Door and Window Configuration']],
                $adamas(['All 5 soft-close doors (including tailgate)', 'Walk-away auto locking', 'Rain-sensing windshield wipers', 'Rear windshield electric wiper', 'Electric heating of exterior rearview mirror', 'Electric adjustment of exterior rearview mirror (with position memory)', 'Automatic dimming of exterior rearview mirror (driver’s side)', 'First-row acoustic laminated glass', 'Second-row acoustic laminated glass', 'Heated rear window', 'First-row glass sunroof with electric sunshade', 'Second-/third-row panoramic sunroof with electric sunshade', 'UV-protective glass']),
                [['label' => 'Silver-coated heat-insulating laminated windshield', '7' => '● (UV isolation 99%, infrared isolation 80%)', '6' => '● (UV isolation 99%, infrared isolation 80%)'], ['label' => 'Rear privacy glass package*', '7' => '○', '6' => '○']]
            )];
            $sections['adas'] = ['title' => 'Advanced Driver Assistance System (ADAS)', 'rows' => array_merge(
                [['label' => 'ADAS chip', '7' => 'Horizon Journey® 6M Chip', '6' => 'Horizon Journey® 6M Chip'], ['label' => 'Millimeter-wave radar', '7' => '×3', '6' => '×3'], ['label' => 'Front-view camera (8 million pixels)', '7' => '×2', '6' => '×2'], ['label' => 'Surround-view / side-view / rear-view camera (2 million pixels)', '7' => '×4 / ×4 / ×1', '6' => '×4 / ×4 / ×1'], ['label' => 'Front and rear parking sensors', '7' => '×12', '6' => '×12'], ['subsection' => 'Automated Highway Driving Assist (AHDA)*']],
                $adamas(['Cruise Control (maximum speed 170 km/h)', 'Adaptive Cruise Control (ACC)', 'Lane Centering Control (LCC)', 'Command Lane Change (CLC)', 'Lane Change Assist (LCA)', 'Front Cross Traffic Alert (FCTA)', 'Forward Collision Warning (FCW)', 'Rear Cross Traffic Alert (RCTA)', 'Rear Collision Warning (RCW)', 'Forward/Reverse Automatic Emergency Braking (FAEB/RAEB)', 'Blind Spot Detection (BSD)', 'Door Open Warning (DOW)', 'Lane Keeping Assist (LKA)', 'Lane Departure Warning (LDW)', 'Emergency Lane Keeping (ELK)', 'Automatic Parking Assist (APA)', 'Remote Parking Assist (RPA)', 'Intelligent Straight-line Remote Summon (ISRS)']),
                [['subsection' => 'Off-road Assist Driving*'], ['label' => 'All-Terrain Mode', '7' => 'Automatic, Road, Mountain, Mud, Sand, Snow, Wading', '6' => 'Automatic, Road, Mountain, Mud, Sand, Snow, Wading'], ['label' => 'Off-road Automatic Cruise Control', '7' => '● (2–15 km/h)', '6' => '● (2–15 km/h)'], ['label' => 'Hill Descent Control (HDC)', '7' => '● (2–35 km/h)', '6' => '● (2–35 km/h)']],
                $adamas(['Transparent underbody view', 'Wading Depth Detection'])
            )];
            $sections['safety'] = ['title' => 'Safety Configuration', 'rows' => array_merge(
                [['label' => 'C-NCAP / CIRI', '7' => '★★★★★ / G', '6' => '★★★★★ / G'], ['label' => 'Body frame', '7' => 'High-strength steel and aluminum alloy structure', '6' => 'High-strength steel and aluminum alloy structure'], ['label' => 'Composite door-sill beam structure', '7' => '● (extruded aluminum profile reinforced)', '6' => '● (extruded aluminum profile reinforced)'], ['label' => 'First-row frontal / side airbag', '7' => '×2 / ×2', '6' => '×2 / ×2'], ['label' => 'Second-row side airbag / side curtain airbag', '7' => '×2 / ×2', '6' => '×2 / ×2'], ['label' => 'First-row seat belt with pretensioner and load limiter', '7' => '×2', '6' => '×2'], ['label' => 'Second-row integrated seat belt with pretensioner and load limiter', '7' => '—', '6' => '×2']],
                $adamas(['HD Surround-view Imaging', 'Front/Rear Parking Radar Assist', 'First-row Seat Belt Unfastened Alarm', 'Second-row Seat Belt Unfastened Alarm', 'Second-row ISOFIX Safety Seat Interface', 'Third-row ISOFIX Safety Seat Interface', 'City Sentry Mode*', 'Camping Sentry Mode*', 'Emergency Call System (E-Call)', 'Electronic Stability Program (ESP)', 'Anti-lock Braking System (ABS)', 'Hill Hold Control (HHC)', 'Traction Control System (TCS)', 'Vehicle Dynamic Control (VDC)', 'Electronic Braking Force Distribution (EBD)', 'Hazard Warning (HAZ)', 'Dynamic Steering Torque (DST)', 'Roll Movement Intervention (RMI)', 'Tire Pressure Monitoring System (TPMS)', 'Electric Parking Brake (EPB)', 'Outside Pedestrian Warning Sound', 'Roadside Assistance Towing Mode', 'Auto Hold', 'First Aid Kit', 'Fire Extinguisher'])
            )];
        }

        if (!$isEnglish && $initialModel === 'rox-adamas') {
            $ptSpecs = [
                'Exterior & Interior' => 'Exterior e Interior', 'Exterior Colors' => 'Cores Exteriores', 'Interior Colors' => 'Cores Interiores', 'Tires & Wheels' => 'Pneus e Jantes', 'Exterior Features' => 'Equipamento Exterior', 'Technical Specifications' => 'Especificações Técnicas', 'Chassis System' => 'Sistema de Chassis', 'Off-road Performance' => 'Desempenho Todo-o-Terreno', 'Interior Configuration' => 'Configuração Interior', 'Cockpit Configuration' => 'Configuração do Cockpit', 'Exterior Configuration' => 'Configuração Exterior', 'Advanced Driver Assistance System (ADAS)' => 'Sistema Avançado de Assistência à Condução (ADAS)', 'Safety Configuration' => 'Configuração de Segurança',
                'Polar White' => 'Branco Polar', 'Basalt Gray' => 'Cinzento Basalto', 'Emerald Green' => 'Verde Esmeralda', 'Desert Gold' => 'Dourado Deserto', 'Obsidian Black – Black Knight Edition (available only with black starlight wheels)' => 'Preto Obsidiana – Edição Black Knight (disponível apenas com jantes starlight pretas)', 'Amber Orange' => 'Laranja Âmbar', 'Jade White' => 'Branco Jade', 'Pearl Black' => 'Preto Perolado', 'Amethyst Purple' => 'Roxo Ametista',
                '21-inch two-tone starlight wheel with all-season tire' => 'Jante starlight de 21” em dois tons com pneu para todas as estações', '21-inch black starlight wheel with all-season tire' => 'Jante starlight preta de 21” com pneu para todas as estações', 'Tailgate-mounted full-size spare tire' => 'Pneu suplente de tamanho completo montado na porta da bagageira', 'Roof rail tracks' => 'Calhas de tejadilho', 'Towing package' => 'Pacote de reboque',
                'Dimensions (L×W×H)' => 'Dimensões (C×L×A)', 'Vehicle wheelbase' => 'Distância entre eixos', 'Seating configuration' => 'Configuração dos bancos', '0–100 km/h acceleration' => 'Aceleração 0–100 km/h', 'Top speed' => 'Velocidade máxima', 'Energy mode' => 'Modo de energia', 'Drive mode' => 'Modo de condução', 'High-efficiency range extender' => 'Extensor de autonomia de elevada eficiência', 'Fuel recommendation' => 'Combustível recomendado', 'Emission standard' => 'Norma de emissões', 'Fuel tank capacity' => 'Capacidade do depósito de combustível', 'Drivetrain' => 'Sistema de tração', 'Maximum power / torque' => 'Potência máxima / binário máximo', 'Battery capacity' => 'Capacidade da bateria', 'Battery type' => 'Tipo de bateria', 'Combined range (WLTC*)' => 'Autonomia combinada (WLTC*)', 'EV range (WLTC*)' => 'Autonomia elétrica (WLTC*)', 'AC charging time (0–100%)' => 'Tempo de carregamento AC (0–100%)', 'External power output' => 'Saída de energia externa', 'Curb weight' => 'Peso em vazio',
                'Front suspension type' => 'Tipo de suspensão dianteira', 'Rear suspension type' => 'Tipo de suspensão traseira', 'Material of front and rear subframes' => 'Material dos subchassis dianteiro e traseiro', 'Closed-chamber air suspension' => 'Suspensão pneumática de câmara fechada', 'Maximum travel of air suspension' => 'Curso máximo da suspensão pneumática', 'High Speed Mode*' => 'Modo de alta velocidade*', 'Access Assist/Basement Parking Garage Mode*' => 'Modo de assistência de acesso/garagem subterrânea*', 'Easy Trunk Loading Mode*' => 'Modo de carga fácil da bagageira*', 'Dynamic damping control (DCC)' => 'Controlo dinâmico de amortecimento (DCC)', 'Front and rear ventilated disc brakes' => 'Travões de disco ventilados dianteiros e traseiros', 'Electric power steering (EPS)' => 'Direção assistida elétrica (EPS)', 'Electric power-assisted brake' => 'Travão elétrico assistido', 'Recovery Mode' => 'Modo de recuperação', 'Ride height*' => 'Altura do veículo*', 'Battery pack ground clearance' => 'Altura livre ao solo do conjunto de baterias', 'Minimum ground clearance' => 'Altura livre mínima ao solo', 'Approach angle' => 'Ângulo de ataque', 'Departure angle' => 'Ângulo de saída', 'Ramp angle' => 'Ângulo ventral', 'Maximum climbing grade' => 'Inclinação máxima transponível', 'Maximum wading depth*' => 'Profundidade máxima de vadeamento*',
                'Comfortable and Luxurious Configuration' => 'Configuração Confortável e Luxuosa', 'Heated steering wheel' => 'Volante aquecido', 'Four-way adjustable steering wheel' => 'Volante ajustável em quatro vias', 'Electrically controlled rear door child safety lock' => 'Bloqueio elétrico de segurança infantil nas portas traseiras', 'Microfiber suede headliner' => 'Forro do teto em camurça de microfibra', 'Automatic 3-zone air conditioner' => 'Ar condicionado automático de três zonas', 'Front-row full electric air vent' => 'Saída de ar totalmente elétrica na primeira fila', 'Second-/third-row independent air vent' => 'Saída de ar independente na segunda/terceira fila', 'Interior temperature and humidity sensor' => 'Sensor de temperatura e humidade do habitáculo', 'PM2.5 cabin air filter' => 'Filtro de ar do habitáculo PM2.5', 'Ionic air purifier' => 'Purificador de ar iónico', 'Seat Configuration' => 'Configuração dos Bancos', 'First-row Seats' => 'Bancos da Primeira Fila', 'Second-row Seats' => 'Bancos da Segunda Fila', 'Third-row Seats' => 'Bancos da Terceira Fila', 'Interior Storage Configuration' => 'Configuração de Arrumação Interior', 'Trunk capacity' => 'Capacidade da bagageira',
                'Exterior Lighting' => 'Iluminação Exterior', 'Door and Window Configuration' => 'Configuração de Portas e Vidros', 'Automated Highway Driving Assist (AHDA)*' => 'Assistência de Condução Automatizada em Autoestrada (AHDA)*', 'Off-road Assist Driving*' => 'Assistência à Condução Todo-o-Terreno*', 'All-Terrain Mode' => 'Modo Todo-o-Terreno',
                'C-NCAP / CIRI' => 'C-NCAP / CIRI', 'Body frame' => 'Estrutura da carroçaria', 'Composite door-sill beam structure' => 'Estrutura composta da soleira da porta',
                'First-row frontal / side airbag' => 'Airbags frontais / laterais da primeira fila', 'Second-row side airbag / side curtain airbag' => 'Airbags laterais da segunda fila / airbags de cortina', 'First-row seat belt with pretensioner and load limiter' => 'Cinto da primeira fila com pré-tensor e limitador de esforço', 'Second-row integrated seat belt with pretensioner and load limiter' => 'Cinto integrado da segunda fila com pré-tensor e limitador de esforço',
                '8.5 L dual-mode cooler/warmer' => 'Refrigerador/aquecedor de modo duplo de 8,5 L', '256-color ambient light' => 'Iluminação ambiente de 256 cores', 'Touch-control LED reading lights' => 'Luzes de leitura LED com controlo tátil', 'Modular outdoor LED headlamp (magnetic trunk docking and charging)' => 'Lanterna exterior LED modular (fixação e carregamento magnéticos na bagageira)', 'All four power windows with one-touch up/down and anti-pinch protection' => 'Quatro vidros elétricos com subida/descida de um toque e proteção antientalamento', 'Keyless entry (including tailgate)' => 'Acesso sem chave, incluindo a bagageira', 'Bluetooth key (mobile enabled)' => 'Chave Bluetooth (telemóvel compatível)', 'Physical smart key' => 'Chave inteligente física', 'Fully flat cabin floor' => 'Piso do habitáculo totalmente plano', 'Premium tufted carpet floor mats' => 'Tapetes de alcatifa premium',
                'Nappa leather seats*' => 'Bancos em couro Nappa*', 'Driver’s seat adjustment' => 'Ajuste do banco do condutor', 'Front passenger seat adjustment' => 'Ajuste do banco do passageiro dianteiro', 'Seat heating' => 'Aquecimento dos bancos', 'Seat ventilation' => 'Ventilação dos bancos', 'Seat massage (lumbar acupressure massage)' => 'Massagem dos bancos (acupressão lombar)', 'Aero comfort headrest' => 'Encosto de cabeça Aero Comfort', 'Driver’s seat welcome function' => 'Função de boas-vindas do banco do condutor', 'Front passenger seat rear control button' => 'Botão de controlo traseiro do banco do passageiro dianteiro', 'Daybed Mode' => 'Modo divã', 'Second-row seat adjustment' => 'Ajuste dos bancos da segunda fila', 'Aero seat headrest wing adjustable' => 'Ajuste das abas do encosto de cabeça do banco Aero', 'Aero seat one-button comfort mode' => 'Modo conforto de um botão do banco Aero', 'Full-bed Mode (2nd & 3rd rows folded flat)' => 'Modo cama completa (segunda e terceira filas rebatidas)', 'Number of seats' => 'Número de lugares', 'Seat back adjustment' => 'Ajuste do encosto do banco', 'Power easy-entry (3rd row)' => 'Acesso fácil elétrico à terceira fila', 'Front passenger glove box' => 'Porta-luvas do passageiro dianteiro', 'Central armrest box' => 'Compartimento do apoio de braço central', 'Front center open storage compartment' => 'Compartimento aberto central dianteiro', 'Tailgate-integrated storage bin' => 'Compartimento de arrumação integrado na porta da bagageira',
                'Infotainment system chip' => 'Processador do sistema de infoentretenimento', '15.7-inch 3K center touch screen' => 'Ecrã tátil central 3K de 15,7”', '12.3-inch multi-function instrument display' => 'Painel de instrumentos multifunções de 12,3”', '15.7-inch 3K rear infotainment touch screen' => 'Ecrã tátil traseiro de infoentretenimento 3K de 15,7”', 'Premium audio system' => 'Sistema de áudio premium', 'Cabin acoustic tuning' => 'Afinação acústica do habitáculo', 'Multi-zone intelligent voice control' => 'Controlo de voz inteligente multizona', 'Nap mode' => 'Modo sesta', 'Central/rear infotainment display mirroring' => 'Espelhamento do ecrã central/traseiro de infoentretenimento', 'First-row mobile phone wireless fast charging' => 'Carregamento rápido sem fios para telemóvel na primeira fila', 'First-row charging port (18 W Type-C)' => 'Porta de carregamento da primeira fila (Type-C de 18 W)', 'First-row 12 V power supply (180 W)' => 'Alimentação de 12 V na primeira fila (180 W)', 'Center armrest TF card slot / Type-A data interface' => 'Ranhura para cartão TF / interface de dados Type-A no apoio de braço central', 'Second-row charging port (60 W Type-C)' => 'Porta de carregamento da segunda fila (Type-C de 60 W)', 'Second-row aero seat charging port (18 W Type-A)' => 'Porta de carregamento do banco Aero da segunda fila (Type-A de 18 W)', 'Third-row charging port (18 W Type-C)' => 'Porta de carregamento da terceira fila (Type-C de 18 W)', 'Trunk 220 V power supply (2.2 kW)' => 'Alimentação de 220 V na bagageira (2,2 kW)',
                'LED headlamp' => 'Faróis LED', 'LED tail lamp' => 'Luzes traseiras LED', 'LED daytime running lamp' => 'Luzes de circulação diurna LED', 'Automatic headlamp' => 'Faróis automáticos', 'Intelligent High Beam Control (IHBC)' => 'Controlo inteligente de máximos (IHBC)', 'LED dynamic turn signal light' => 'Indicadores de mudança de direção dinâmicos LED', 'LED high-mounted brake lamp' => 'Luz de travagem elevada LED', 'LED rear fog lamp' => 'Luz de nevoeiro traseira LED', 'LED reversing lamp' => 'Luz de marcha-atrás LED', 'Charge port indicator light with pulsing animation' => 'Luz indicadora da porta de carregamento com animação pulsante', 'Exterior door-handle courtesy lights' => 'Luzes de cortesia nas maçanetas exteriores', 'All 5 soft-close doors (including tailgate)' => 'Cinco portas com fecho suave, incluindo a bagageira', 'Walk-away auto locking' => 'Fecho automático ao afastar-se', 'Rain-sensing windshield wipers' => 'Limpa-para-brisas com sensor de chuva', 'Rear windshield electric wiper' => 'Limpa-vidro traseiro elétrico', 'Electric heating of exterior rearview mirror' => 'Aquecimento elétrico dos espelhos retrovisores exteriores', 'Electric adjustment of exterior rearview mirror (with position memory)' => 'Ajuste elétrico dos espelhos exteriores (com memória de posição)', 'Automatic dimming of exterior rearview mirror (driver’s side)' => 'Escurecimento automático do espelho exterior do condutor', 'Silver-coated heat-insulating laminated windshield' => 'Para-brisas laminado termo-isolante com revestimento prateado', 'First-row acoustic laminated glass' => 'Vidros laminados acústicos na primeira fila', 'Second-row acoustic laminated glass' => 'Vidros laminados acústicos na segunda fila', 'Rear privacy glass package*' => 'Pacote de vidros escurecidos traseiros*', 'Heated rear window' => 'Vidro traseiro aquecido', 'First-row glass sunroof with electric sunshade' => 'Teto de vidro da primeira fila com cortina elétrica', 'Second-/third-row panoramic sunroof with electric sunshade' => 'Teto panorâmico da segunda/terceira fila com cortina elétrica', 'UV-protective glass' => 'Vidros com proteção UV',
                '1.5T four-cylinder' => '1.5T de quatro cilindros', 'Dual-motor full-time 4WD' => 'Tração integral permanente de dois motores', 'CATL ternary lithium battery (flame-retardant materials and thermal-runaway protection)' => 'Bateria de lítio ternária CATL (materiais retardadores de chama e proteção contra fuga térmica)', 'All-aluminum double-wishbone suspension' => 'Suspensão de duplo braço triangular integralmente em alumínio', 'All-aluminum H-arm multi-link suspension' => 'Suspensão multilink com braço em H integralmente em alumínio', 'All aluminum alloy' => 'Liga de alumínio integral', 'Lowered by 15/25 mm' => 'Rebaixamento de 15/25 mm', 'Lowered by 50 mm' => 'Rebaixamento de 50 mm', 'Rear axle lowered by 60 mm' => 'Eixo traseiro rebaixado em 60 mm', 'Comfort, Standard, Sport, All-terrain, Smart' => 'Conforto, Normal, Desportivo, Todo-o-Terreno, Inteligente', 'Raised by 80 mm' => 'Elevação de 80 mm', 'Automatic, Road, Mountain, Mud, Sand, Snow, Wading' => 'Automático, Estrada, Montanha, Lama, Areia, Neve, Vadeamento', 'minimum 0°C, maximum 50°C' => 'mínimo de 0 °C, máximo de 50 °C', '12-way power adjustment' => 'Ajuste elétrico em 12 vias', '10-way power adjustment' => 'Ajuste elétrico em 10 vias', 'Manual 4-way (40/60 split-folding)' => 'Ajuste manual em 4 vias (rebatimento dividido 40/60)', '8-way power adjustment' => 'Ajuste elétrico em 8 vias', 'including leg-rest heating' => 'incluindo aquecimento do apoio de pernas', '8-point full-back acupressure massage' => 'massagem de acupressão em 8 pontos nas costas', 'Manual 2-way (7-position adjustment)' => 'Ajuste manual em 2 vias (7 posições)', '3rd row folded' => 'terceira fila rebatida', '2nd & 3rd rows folded' => 'segunda e terceira filas rebatidas', '5-position power tilt' => 'inclinação elétrica em 5 posições', '14 speakers (7.1-channel surround sound)' => '14 altifalantes (som surround de 7.1 canais)', 'First-row, second-row' => 'primeira fila, segunda fila', 'First-row' => 'primeira fila', 'Wireless mirroring, wired mirroring' => 'espelhamento sem fios, espelhamento com cabo', '50 W air cooling' => '50 W com arrefecimento a ar', 'UV isolation 99%, infrared isolation 80%' => 'isolamento UV de 99%, isolamento infravermelho de 80%', 'High-strength steel and aluminum alloy structure' => 'Estrutura em aço de alta resistência e liga de alumínio', 'extruded aluminum profile reinforced' => 'perfil de alumínio extrudido reforçado',
                'ADAS chip' => 'Processador ADAS', 'Millimeter-wave radar' => 'Radar de ondas milimétricas', 'Front-view camera (8 million pixels)' => 'Câmara frontal (8 milhões de píxeis)', 'Surround-view / side-view / rear-view camera (2 million pixels)' => 'Câmara de visão envolvente / lateral / traseira (2 milhões de píxeis)', 'Front and rear parking sensors' => 'Sensores de estacionamento dianteiros e traseiros', 'Cruise Control (maximum speed 170 km/h)' => 'Controlo de cruzeiro (velocidade máxima de 170 km/h)', 'Adaptive Cruise Control (ACC)' => 'Controlo de cruzeiro adaptativo (ACC)', 'Lane Centering Control (LCC)' => 'Controlo de centragem na faixa (LCC)', 'Command Lane Change (CLC)' => 'Mudança de faixa por comando (CLC)', 'Lane Change Assist (LCA)' => 'Assistência à mudança de faixa (LCA)', 'Front Cross Traffic Alert (FCTA)' => 'Alerta de tráfego cruzado dianteiro (FCTA)', 'Forward Collision Warning (FCW)' => 'Aviso de colisão dianteira (FCW)', 'Rear Cross Traffic Alert (RCTA)' => 'Alerta de tráfego cruzado traseiro (RCTA)', 'Rear Collision Warning (RCW)' => 'Aviso de colisão traseira (RCW)', 'Forward/Reverse Automatic Emergency Braking (FAEB/RAEB)' => 'Travagem automática de emergência dianteira/em marcha-atrás (FAEB/RAEB)', 'Blind Spot Detection (BSD)' => 'Deteção de ângulo morto (BSD)', 'Door Open Warning (DOW)' => 'Aviso de abertura de porta (DOW)', 'Lane Keeping Assist (LKA)' => 'Assistência de manutenção na faixa (LKA)', 'Lane Departure Warning (LDW)' => 'Aviso de saída de faixa (LDW)', 'Emergency Lane Keeping (ELK)' => 'Manutenção de faixa de emergência (ELK)', 'Automatic Parking Assist (APA)' => 'Assistência automática ao estacionamento (APA)', 'Remote Parking Assist (RPA)' => 'Assistência remota ao estacionamento (RPA)', 'Intelligent Straight-line Remote Summon (ISRS)' => 'Chamada remota inteligente em linha reta (ISRS)', 'Transparent underbody view' => 'Vista transparente da zona inferior', 'Wading Depth Detection' => 'Deteção da profundidade de vadeamento',
            ];
            $replace = static function ($value) use ($ptSpecs) {
                return is_string($value) ? strtr($value, $ptSpecs) : $value;
            };
            foreach ($sections as &$section) {
                $section['title'] = $replace($section['title']);
                foreach ($section['rows'] as &$row) {
                    foreach (['label', 'subsection', '7', '6'] as $field) {
                        if (isset($row[$field])) $row[$field] = $replace($row[$field]);
                    }
                }
                unset($row);
            }
            unset($section);
        }
    @endphp

    <!-- Sticky Header Bar -->
    <div class="sticky top-[60px] z-20 bg-white border-b border-gray-200">
        <div class="site-container">
            <!-- Row 1: Model select + Download -->
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <div class="relative" id="model-dropdown">
                    <button type="button" id="model-dropdown-btn" class="flex items-center gap-2 text-sm font-medium text-black pb-1 border-b border-gray-300 hover:border-black transition-colors cursor-pointer">
                        <span id="model-dropdown-label">{{ $models[$initialModel]['name'] }}</span>
                        <svg class="w-4 h-4 text-gray-500 transition-transform duration-200" id="model-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div id="model-dropdown-menu" class="hidden absolute left-0 top-full mt-1 w-48 bg-white shadow-lg border border-gray-100 z-30">
                        @foreach($models as $mKey => $mData)
                            <button type="button" class="model-switch-btn w-full flex items-center justify-between px-4 py-3 text-sm transition-colors hover:bg-gray-50 text-left" data-model="{{ $mKey }}" data-name="{{ $mData['name'] }}">
                                <span>{{ $mData['name'] }}</span>
                                <svg class="model-check w-4 h-4 {{ $mKey === $initialModel ? '' : 'hidden' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </button>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('especificacoes.pdf', $initialModel) }}" id="download-link" class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-black transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Baixar Especificações
                </a>
            </div>

            <!-- Row 2: Legend + Column headers -->
            <div class="hidden md:grid grid-cols-12 gap-4 py-3">
                <div class="col-span-5 flex items-center gap-6 text-xs text-gray-500">
                    <span class="flex items-center gap-1.5"><span class="text-black text-sm">●</span> Padrão</span>
                    <span class="flex items-center gap-1.5"><span class="text-black text-sm">○</span> Opcional</span>
                    <span class="flex items-center gap-1.5"><span class="text-gray-400">—</span> Não disponível</span>
                </div>
                <div class="col-span-3">
                    <p class="text-sm font-medium text-black" id="seat-7-label">{{ $models[$initialModel]['seat_7'] }}</p>
                    <p class="text-xs text-gray-400" id="seat-7-layout">{{ $models[$initialModel]['seat_7_layout'] }}</p>
                </div>
                <div class="col-span-3">
                    <p class="text-sm font-medium text-black" id="seat-6-label">{{ $models[$initialModel]['seat_6'] }}</p>
                    <p class="text-xs text-gray-400" id="seat-6-layout">{{ $models[$initialModel]['seat_6_layout'] }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Title -->
    <section class="pt-32 pb-6 bg-white">
        <div class="site-container">
            <h1 class="text-2xl md:text-[2rem] font-medium text-black animate-up" id="page-title">Especificações do {{ $models[$initialModel]['name'] }}</h1>
        </div>
    </section>

    <!-- Section Navigation + Content -->
    <section class="pb-20 md:pb-28 bg-white">
        <div class="site-container">

            @foreach($sections as $key => $section)
                <div id="spec-{{ $key }}" class="scroll-mt-[180px] spec-section" data-section-key="{{ $key }}">
                    <div class="bg-[#f4f6f9] px-5 py-3.5 mt-2 flex items-center justify-between cursor-pointer relative spec-header sticky top-[175px] z-[15]" data-key="{{ $key }}">
                        <div class="flex items-center gap-2">
                            <h3 class="text-sm font-semibold text-black">{{ $section['title'] }}</h3>
                            <svg class="w-4 h-4 text-gray-400 transition-transform duration-200 spec-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>

                        <div class="spec-nav-dropdown hidden absolute left-0 top-full w-full md:w-[400px] bg-[#f4f6f9] shadow-lg z-30 border-t border-gray-200">
                            @foreach($sections as $navKey => $navSection)
                                <a href="#spec-{{ $navKey }}" class="spec-nav-link flex items-center justify-between px-5 py-3 text-sm hover:bg-gray-200/50 transition-colors {{ $navKey === $key ? 'font-semibold text-black' : 'text-gray-500' }}" data-target="{{ $navKey }}">
                                    {{ $navSection['title'] }}
                                    @if($navKey === $key)
                                        <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        @foreach($section['rows'] as $row)
                            @if(isset($row['subsection']))
                                <div class="px-5 pt-6 pb-2 {{ isset($row['model']) && $row['model'] !== $initialModel ? 'hidden' : '' }}" {!! isset($row['model']) ? 'data-model-spec="'.$row['model'].'"' : '' !!}>
                                    <h4 class="text-sm font-semibold text-black">{{ $row['subsection'] }}</h4>
                                </div>
                            @else
                                <div class="grid grid-cols-1 md:grid-cols-12 gap-1 md:gap-4 py-4 px-5 border-b border-gray-100 text-sm {{ isset($row['model']) && $row['model'] !== $initialModel ? 'hidden' : '' }}" {!! isset($row['model']) ? 'data-model-spec="'.$row['model'].'"' : '' !!}>
                                    <div class="md:col-span-5 text-gray-600 font-light mb-1 md:mb-0 flex items-center gap-2.5">
                                        @if(isset($row['image']))
                                            <img src="{{ asset($row['image']) }}" alt="{{ $row['label'] }}" class="w-4 h-4 rounded-full border border-gray-200 object-cover flex-shrink-0" loading="lazy">
                                        @elseif(isset($row['color']))
                                            <span class="w-4 h-4 rounded-full flex-shrink-0 border border-gray-200" style="background: {{ $row['color'] }};"></span>
                                        @endif
                                        {{ $row['label'] }}
                                    </div>
                                    <div class="md:col-span-3 text-black font-normal {{ isset($row['dynamic']) ? 'dynamic-val' : '' }}" {!! isset($row['dynamic']) ? 'data-field="'.$row['dynamic'].'"' : '' !!}>
                                        <span class="md:hidden text-xs text-gray-400">7 lug.: </span>{{ isset($row['dynamic']) ? $models[$initialModel][$row['dynamic']] : html_entity_decode($row['7']) }}
                                    </div>
                                    <div class="md:col-span-3 text-black font-normal {{ isset($row['dynamic']) ? 'dynamic-val' : '' }}" {!! isset($row['dynamic']) ? 'data-field="'.$row['dynamic'].'"' : '' !!}>
                                        <span class="md:hidden text-xs text-gray-400">6 lug.: </span>{{ isset($row['dynamic']) ? $models[$initialModel][$row['dynamic']] : html_entity_decode($row['6']) }}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach

            <!-- Bottom -->
            <div class="mt-16 pt-8 border-t border-gray-200 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <p class="text-xs text-gray-400">Todas as especificações estão sujeitas a alterações. Consulte o seu distribuidor Octa Angola para informações atualizadas.</p>
                <a href="{{ route('especificacoes.pdf', $initialModel) }}" id="download-link-bottom" class="inline-flex items-center gap-2 px-6 py-3 text-xs font-medium tracking-widest uppercase text-white transition-all duration-300 hover:brightness-110 flex-shrink-0" style="background: var(--rox-dune-yellow);">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Baixar PDF
                </a>
            </div>

            <section class="mt-10 border-t border-gray-200 pt-8 {{ $initialModel === 'rox-adamas' ? '' : 'hidden' }}" data-model-spec="rox-adamas">
                <h2 class="text-base font-semibold text-black">{{ app()->getLocale() === 'en' ? 'Notes' : 'Notas' }}</h2>
                @if(app()->getLocale() === 'en')
                <ol class="mt-4 list-decimal space-y-2 pl-5 text-xs leading-relaxed text-gray-500">
                    <li>The total range and battery range (full SOC) data under WLTC are obtained by ROX and its partners in accordance with the relevant corporate test standards and verified by a nationally certified third-party laboratory. Actual range may vary due to ambient temperature, road conditions, driving habits, operating behaviour and battery service life.</li>
                    <li>ROX reserves the right to adjust the content of the parameter configuration table within the legal range. Final delivered-vehicle configuration shall prevail.</li>
                    <li>Air-spring height settings are: Lift, High, Relatively High, Standard, Low, Underground-garage Height Limit/Welcome and Easy Trunk Loading.</li>
                    <li>High-Speed Mode, Access Assist, Basement Parking Garage Mode and Easy Trunk Loading values refer to vehicle-height changes relative to the standard height.</li>
                    <li>The 80 mm increase in Recovery Mode refers to the rise of the chassis from standard height to maximum height.</li>
                    <li>Maximum wading depth is 770 mm in Recovery Mode. Avoid dynamic driving or prolonged immersion at this depth; the cabin is a dry area and water ingress must be avoided.</li>
                    <li>Nappa leather coverage includes partial perforated areas of the seat backrest and cushion.</li>
                    <li>The IHU supports Arabic, English, French, Kazakh, Portuguese, Russian and Spanish. Cockpit voice interaction supports Arabic, English and Russian.</li>
                    <li>Smartphone Mirroring (CarbitLink) supports Android and iOS devices via USB or wireless connection.</li>
                    <li>On-board data networking, two-way Wi-Fi and mobile-app remote vehicle control are currently supported in Egypt, Jordan, Kuwait, Oman, Qatar, Saudi Arabia and the UAE; availability, pricing and terms vary by market.</li>
                    <li>The privacy-glass package includes second-row, third-row and rear-windscreen privacy glass. Availability is subject to local laws and regulations.</li>
                    <li>The HD panoramic DVR (five simultaneous views) requires a TF card.</li>
                    <li>LCC, FAEB, FCW, RAEB, IHBC, APA, RPA, ISRS, wading-depth detection, HD panoramic DVR, City Sentry Mode, Camping Sentry Mode and transparent-chassis functions are scheduled for OTA or after-sales upgrade in Q1 2026.</li>
                    <li>The driver-assistance system is an auxiliary function only. The driver must monitor conditions and retain active control of the vehicle at all times.</li>
                    <li>“○” indicates an optional feature. Images are for reference only; final delivered vehicle shall prevail.</li>
                </ol>
                @else
                <ol class="mt-4 list-decimal space-y-2 pl-5 text-xs leading-relaxed text-gray-500">
                    <li>Os dados de autonomia total e autonomia da bateria (SOC completo) no ciclo WLTC são obtidos pela ROX e respetivos parceiros segundo normas internas aplicáveis e validados por laboratório terceiro certificado. A autonomia real pode variar conforme temperatura ambiente, condições da estrada, hábitos de condução, utilização e vida útil da bateria.</li>
                    <li>A ROX reserva-se o direito de ajustar, dentro dos limites legais, o conteúdo da tabela de parâmetros e configurações. Prevalece sempre a configuração do veículo efetivamente entregue.</li>
                    <li>As regulações de altura da suspensão pneumática são: Lift, High, Relatively High, Standard, Low, limite de altura para garagem subterrânea/Welcome e Easy Trunk Loading.</li>
                    <li>Os valores dos modos High-Speed, Access Assist, Basement Parking Garage e Easy Trunk Loading referem-se à alteração da altura do veículo relativamente à altura padrão.</li>
                    <li>O aumento de 80 mm no modo Recovery refere-se à elevação do chassis desde a altura padrão até à altura máxima.</li>
                    <li>A profundidade máxima de vadeamento é de 770 mm no modo Recovery. Evite condução dinâmica ou imersão prolongada a esta profundidade; o habitáculo é uma área seca e deve ser evitada a entrada de água.</li>
                    <li>A cobertura em couro Nappa inclui zonas parcialmente perfuradas do encosto e da almofada dos bancos.</li>
                    <li>A IHU suporta árabe, inglês, francês, cazaque, português, russo e espanhol. A interação por voz do cockpit suporta árabe, inglês e russo.</li>
                    <li>O espelhamento de smartphone (CarbitLink) suporta dispositivos Android e iOS por USB ou ligação sem fios.</li>
                    <li>A rede de dados a bordo, o Wi-Fi bidirecional e o controlo remoto por aplicação móvel estão atualmente disponíveis no Egito, Jordânia, Kuwait, Omã, Catar, Arábia Saudita e EAU; a disponibilidade, preços e condições variam por mercado.</li>
                    <li>O pacote de vidros escurecidos inclui os vidros da segunda fila, terceira fila e vidro traseiro. A disponibilidade está sujeita às leis e regulamentos locais.</li>
                    <li>O DVR panorâmico HD (cinco vistas simultâneas) requer um cartão TF.</li>
                    <li>As funções LCC, FAEB, FCW, RAEB, IHBC, APA, RPA, ISRS, deteção de profundidade de vadeamento, DVR panorâmico HD, modo sentinela urbano, modo sentinela de campismo e chassis transparente estão previstas para atualização OTA ou pós-venda no primeiro trimestre de 2026.</li>
                    <li>O sistema de assistência à condução é apenas uma função auxiliar. O condutor deve monitorizar as condições e manter sempre o controlo ativo do veículo.</li>
                    <li>“○” indica um equipamento opcional. As imagens são meramente ilustrativas; prevalece o veículo efetivamente entregue.</li>
                </ol>
                @endif
            </section>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Model data for client-side switching
        var modelData = @json($models);
        var currentModel = '{{ $initialModel }}';
        var pdfBaseUrl = '{{ url("especificacoes") }}';

        // Model dropdown toggle
        var modelBtn = document.getElementById('model-dropdown-btn');
        var modelMenu = document.getElementById('model-dropdown-menu');
        var modelArrow = document.getElementById('model-dropdown-arrow');
        modelBtn.addEventListener('click', function() {
            modelMenu.classList.toggle('hidden');
            modelArrow.classList.toggle('rotate-180');
        });
        document.addEventListener('click', function(e) {
            if (!e.target.closest('#model-dropdown')) {
                modelMenu.classList.add('hidden');
                modelArrow.classList.remove('rotate-180');
            }
        });

        // Model switch (no page reload)
        document.querySelectorAll('.model-switch-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var newModel = btn.dataset.model;
                var newName = btn.dataset.name;
                if (newModel === currentModel) { modelMenu.classList.add('hidden'); return; }
                // Each model has its own complete configuration table and row order.
                window.location.href = pdfBaseUrl + '/' + newModel;
                return;
                currentModel = newModel;

                // Update label
                document.getElementById('model-dropdown-label').textContent = newName;
                document.getElementById('page-title').textContent = 'Especificações do ' + newName;

                // Update checks
                document.querySelectorAll('.model-check').forEach(function(c) { c.classList.add('hidden'); });
                btn.querySelector('.model-check').classList.remove('hidden');

                // Update dynamic values
                document.querySelectorAll('.dynamic-val').forEach(function(el) {
                    var field = el.dataset.field;
                    var mobileLabel = el.querySelector('span');
                    var val = modelData[newModel][field];
                    if (mobileLabel) { el.innerHTML = ''; el.appendChild(mobileLabel); el.appendChild(document.createTextNode(val)); }
                    else { el.textContent = val; }
                });

                document.querySelectorAll('[data-model-spec]').forEach(function(el) {
                    el.classList.toggle('hidden', el.dataset.modelSpec !== newModel);
                });

                ['seat_7', 'seat_7_layout', 'seat_6', 'seat_6_layout'].forEach(function(field) {
                    document.getElementById(field.replace('_', '-').replace('_', '-')).textContent = modelData[newModel][field];
                });

                // Update download links
                document.getElementById('download-link').href = pdfBaseUrl + '/' + newModel + '/pdf';
                document.getElementById('download-link-bottom').href = pdfBaseUrl + '/' + newModel + '/pdf';

                // Update URL without reload
                history.replaceState(null, '', pdfBaseUrl + '/' + newModel);

                // Close dropdown
                modelMenu.classList.add('hidden');
                modelArrow.classList.remove('rotate-180');
            });
        });

        // Section dropdown navigation
        var headers = document.querySelectorAll('.spec-header');
        var sections = document.querySelectorAll('.spec-section');
        var activeDropdown = null;

        headers.forEach(function(header) {
            header.addEventListener('click', function(e) {
                if (e.target.closest('.spec-nav-link')) return;
                var dropdown = header.querySelector('.spec-nav-dropdown');
                var arrow = header.querySelector('.spec-arrow');
                if (activeDropdown && activeDropdown !== dropdown) {
                    activeDropdown.classList.add('hidden');
                    activeDropdown.closest('.spec-header').querySelector('.spec-arrow').classList.remove('rotate-180');
                }
                dropdown.classList.toggle('hidden');
                arrow.classList.toggle('rotate-180');
                activeDropdown = dropdown.classList.contains('hidden') ? null : dropdown;
            });
        });

        document.querySelectorAll('.spec-nav-link').forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                var target = document.getElementById('spec-' + link.dataset.target);
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                if (activeDropdown) {
                    activeDropdown.classList.add('hidden');
                    activeDropdown.closest('.spec-header').querySelector('.spec-arrow').classList.remove('rotate-180');
                    activeDropdown = null;
                }
            });
        });

        document.addEventListener('click', function(e) {
            if (activeDropdown && !e.target.closest('.spec-header')) {
                activeDropdown.classList.add('hidden');
                activeDropdown.closest('.spec-header').querySelector('.spec-arrow').classList.remove('rotate-180');
                activeDropdown = null;
            }
        });

        // Update checkmarks on scroll
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var activeKey = entry.target.dataset.sectionKey;
                    document.querySelectorAll('.spec-nav-link').forEach(function(link) {
                        var check = link.querySelector('svg');
                        if (link.dataset.target === activeKey) {
                            link.classList.add('font-semibold', 'text-black');
                            link.classList.remove('text-gray-500');
                            if (!check) link.insertAdjacentHTML('beforeend', '<svg class="w-4 h-4 text-black flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>');
                        } else {
                            link.classList.remove('font-semibold', 'text-black');
                            link.classList.add('text-gray-500');
                            if (check) check.remove();
                        }
                    });
                }
            });
        }, { rootMargin: '-180px 0px -60% 0px', threshold: 0 });

        sections.forEach(function(s) { observer.observe(s); });
    });
    </script>
</x-front-layout>
