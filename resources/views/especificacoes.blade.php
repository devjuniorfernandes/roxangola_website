<x-front-layout>
    <x-slot name="title">{{ __('especificacoes.title') }}</x-slot>

    @php
        $isEnglish = app()->getLocale() === 'en';
        $models = [
            'rox-01' => ['name' => 'ROX 01', 'dimensoes' => '5.295 × 1.980 × 1.869 mm', 'peso' => '2.735 kg', 'potencia' => '350 kW / 740 N·m', 'autonomia_hibrida' => '1.115 km', 'carregamento_ac' => '8.6 h (0-100%)', 'seat_7' => __('especificacoes.models.rox-01.seat_7'), 'seat_7_layout' => '(2-2-3)', 'seat_6' => __('especificacoes.models.rox-01.seat_6'), 'seat_6_layout' => '(2-2-2)'],
            'rox-adamas' => ['name' => 'ROX ADAMAS', 'dimensoes' => '5.298 × 1.985 × 1.856 mm', 'peso' => '2.745 kg', 'potencia' => '350 kW / 740 N·m', 'autonomia_hibrida' => '1.226 km', 'carregamento_ac' => '8.8 h (0-100%)', 'seat_7' => __('especificacoes.models.rox-adamas.seat_7'), 'seat_7_layout' => '(2-3-2)', 'seat_6' => __('especificacoes.models.rox-adamas.seat_6'), 'seat_6_layout' => '(2-2-2)'],
        ];
        $initialModel = $modeloActivo ?? 'rox-01';

        $colorRows = [
            'rox-01' => [
                ['subsection' => __('especificacoes.labels.ext_colors')],
                ['label' => __('especificacoes.labels.white_polar'), 'color' => '#d4d4d0', 'image' => 'assets/rox_1/interior/swatches/white exterior.png', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => __('especificacoes.labels.grey_twilight'), 'color' => '#6b6b6b', 'image' => 'assets/rox_1/interior/swatches/grey exterior.png', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => __('especificacoes.labels.black_knight_edition'), 'color' => '#2d2d2d', 'image' => 'assets/rox_1/interior/swatches/black exterior.png', '7' => '&#9675;', '6' => '&#9675;'],
                ['subsection' => __('especificacoes.labels.int_colors')],
                ['label' => __('especificacoes.labels.amber_orange'), 'color' => '#c8850f', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => __('especificacoes.labels.jade_white'), 'color' => '#c4c0b0', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => __('especificacoes.labels.pearl_black'), 'color' => '#2d2d2d', '7' => '&#9679;', '6' => '&#9679;'],
            ],
            'rox-adamas' => [
                ['subsection' => __('especificacoes.labels.ext_colors')],
                ['label' => __('especificacoes.labels.desert_gold'), 'color' => '#b28b4e', 'image' => 'assets/rox_adamas/exterior_colors/Desert Gold.png', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => __('especificacoes.labels.emerald_green'), 'color' => '#31594a', 'image' => 'assets/rox_adamas/exterior_colors/Emerald Green.png', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => __('especificacoes.labels.basalt_grey'), 'color' => '#62676a', 'image' => 'assets/rox_adamas/exterior_colors/Basalt Grey.png', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => __('especificacoes.labels.white_polar'), 'color' => '#d4d4d0', 'image' => 'assets/rox_adamas/exterior_colors/Polar White.png', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => __('especificacoes.labels.black_obsidian'), 'color' => '#202124', 'image' => 'assets/rox_adamas/exterior_colors/Obsidian Black - Black Knight Edition.png', '7' => '&#9675;', '6' => '&#9675;'],
                ['subsection' => __('especificacoes.labels.int_colors')],
                ['label' => __('especificacoes.labels.amethyst_purple'), 'color' => '#776d88', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => __('especificacoes.labels.amber_orange'), 'color' => '#d5804a', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => __('especificacoes.labels.pearl_black'), 'color' => '#292a2c', '7' => '&#9679;', '6' => '&#9679;'],
                ['label' => __('especificacoes.labels.jade_white'), 'color' => '#d5d5d5', '7' => '&#9679;', '6' => '&#9679;'],
            ],
        ];

        $sections = [
            'cores' => [
                'title' => __('especificacoes.sections.cores'),
                'rows' => collect($colorRows)->flatMap(fn ($rows, $model) => collect($rows)->map(fn ($row) => $row + ['model' => $model]))->all(),
            ],
            'parametros' => [
                'title' => __('especificacoes.sections.parametros'),
                'rows' => [
                    ['label' => __('especificacoes.labels.dimensoes'), '7' => '__DIMENSOES__', '6' => '__DIMENSOES__', 'dynamic' => 'dimensoes'],
                    ['label' => __('especificacoes.labels.wheelbase'), '7' => '3.010 mm', '6' => '3.010 mm'],
                    ['label' => __('especificacoes.labels.weight'), '7' => '__PESO__', '6' => '__PESO__', 'dynamic' => 'peso'],
                    ['label' => __('especificacoes.labels.accel'), '7' => '5.5 s', '6' => '5.5 s'],
                    ['label' => __('especificacoes.labels.max_speed'), '7' => '190 km/h', '6' => '190 km/h'],
                    ['label' => __('especificacoes.labels.power_modes'), '7' => __('especificacoes.labels.power_modes_val'), '6' => __('especificacoes.labels.power_modes_val')],
                    ['label' => __('especificacoes.labels.front_motor'), '7' => '150 kW / 340 N·m', '6' => '150 kW / 340 N·m'],
                    ['label' => __('especificacoes.labels.rear_motor'), '7' => '200 kW / 400 N·m', '6' => '200 kW / 400 N·m'],
                    ['label' => __('especificacoes.labels.total_power'), '7' => '__POTENCIA__', '6' => '__POTENCIA__', 'dynamic' => 'potencia'],
                    ['label' => __('especificacoes.labels.wltc_electric'), '7' => '235 km', '6' => '235 km'],
                    ['label' => __('especificacoes.labels.wltc_hybrid'), '7' => '1.115 km', '6' => '1.115 km', 'dynamic' => 'autonomia_hibrida'],
                    ['label' => __('especificacoes.labels.range_extender'), '7' => __('especificacoes.labels.range_extender_val'), '6' => __('especificacoes.labels.range_extender_val')],
                    ['label' => __('especificacoes.labels.fuel_type'), '7' => '95', '6' => '95'],
                    ['label' => __('especificacoes.labels.emissions'), '7' => 'Euro V', '6' => 'Euro V'],
                    ['label' => __('especificacoes.labels.tank_capacity'), '7' => '70 L', '6' => '70 L'],
                    ['label' => __('especificacoes.labels.ac_charging'), '7' => '8.6 h (0-100%)', '6' => '8.6 h (0-100%)', 'dynamic' => 'carregamento_ac'],
                ],
            ],
            'chassis' => [
                'title' => __('especificacoes.sections.chassis'),
                'rows' => [
                    ['label' => __('especificacoes.labels.susp_front'), '7' => __('especificacoes.labels.susp_front_val'), '6' => __('especificacoes.labels.susp_front_val')],
                    ['label' => __('especificacoes.labels.susp_rear'), '7' => __('especificacoes.labels.susp_rear_val'), '6' => __('especificacoes.labels.susp_rear_val')],
                    ['label' => __('especificacoes.labels.subframes'), '7' => __('especificacoes.labels.subframes_val'), '6' => __('especificacoes.labels.subframes_val')],
                    ['label' => __('especificacoes.labels.shock_type'), '7' => __('especificacoes.labels.shock_type_val'), '6' => __('especificacoes.labels.shock_type_val')],
                    ['label' => __('especificacoes.labels.vent_discs'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.braking_regen'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.power_steering'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.road_mode'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.snow_mode'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.rock_mode'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.mud_mode'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.sand_mode'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.wading_mode'), '7' => '●', '6' => '●'],
                ],
            ],
            'jantes' => [
                'title' => __('especificacoes.sections.jantes'),
                'rows' => [
                    ['label' => __('especificacoes.labels.wheels_21_twotone'), '7' => '● (275/45 R21)', '6' => '● (275/45 R21)'],
                    ['label' => __('especificacoes.labels.wheels_21_black'), '7' => '● (275/45 R21)', '6' => '● (275/45 R21)'],
                    ['label' => __('especificacoes.labels.spare_wheel'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.towing_prep'), '7' => '●', '6' => '●'],
                ],
            ],
            'seguranca' => [
                'title' => __('especificacoes.sections.seguranca'),
                'rows' => [
                    ['label' => __('especificacoes.labels.esp'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.abs'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.hhc'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.tcs'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.vdc'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.ebd'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.haz'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.airbags_front'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.airbags_side'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.airbags_curtain'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.seatbelt_alert_1'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.seatbelt_alert_2'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.seatbelt_pre'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.dst'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.rmi'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.hdc'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.tpms'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.epb'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.avas'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.towing_mode'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.autohold'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.ecall'), '7' => '●', '6' => '●'],
                    ['label' => __('especificacoes.labels.first_aid'), '7' => __('especificacoes.labels.first_aid_val'), '6' => __('especificacoes.labels.first_aid_val')],
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
            'title' => __('especificacoes.sections.energia'),
            'rows' => array_merge([
                ['label' => __('especificacoes.labels.ccs_port'), '7' => 'CCS Type 2', '6' => 'CCS Type 2', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.v2l_discharge'), '7' => '2,2 kW / 2,2 kW', '6' => '2,2 kW / 2,2 kW', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.battery_capacity'), '7' => '56,01 kWh', '6' => '56,01 kWh', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.battery_type'), '7' => __('especificacoes.labels.battery_type'), '6' => __('especificacoes.labels.battery_type'), 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.traction_4wd'), '7' => __('especificacoes.labels.traction_4wd'), '6' => __('especificacoes.labels.traction_4wd'), 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.max_power'), '7' => '350 kW', '6' => '350 kW', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.max_torque'), '7' => '740 N·m', '6' => '740 N·m', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.battery_capacity'), '7' => '56,01 kWh', '6' => '56,01 kWh', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.battery_type'), '7' => 'Lítio ternária CATL', '6' => 'Lítio ternária CATL', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.wltc_hybrid'), '7' => '1.226 km', '6' => '1.226 km', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.wltc_electric'), '7' => '235 km', '6' => '235 km', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.ac_charging'), '7' => '8,8 h (7 kW)', '6' => '8,8 h (7 kW)', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.external_power'), '7' => '5,7 kW (3,5 kW V2L + 2,2 kW a 220 V)', '6' => '5,7 kW (3,5 kW V2L + 2,2 kW a 220 V)', 'model' => 'rox-adamas'],
            ], $standardRows([
                __('especificacoes.labels.range_extender_val'), __('especificacoes.labels.ccs_port'),
            ], 'rox-adamas')),
        ];

        $sections['todo_terreno'] = [
            'title' => __('especificacoes.sections.todo_terreno'),
            'rows' => array_merge($standardRows([
                __('especificacoes.labels.rox_sand'), __('especificacoes.labels.rox_wading'),
            ], 'rox-01'), [
                ['label' => __('especificacoes.labels.air_suspension'), '7' => 'Ajuste de altura em 7 níveis', '6' => 'Ajuste de altura em 7 níveis', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.air_suspension_travel'), '7' => '140 mm', '6' => '140 mm', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.high_speed_mode'), '7' => 'Rebaixamento de 15/25 mm', '6' => 'Rebaixamento de 15/25 mm', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.access_assist'), '7' => 'Rebaixamento de 50 mm', '6' => 'Rebaixamento de 50 mm', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.easy_trunk'), '7' => 'Eixo traseiro rebaixa 60 mm', '6' => 'Eixo traseiro rebaixa 60 mm', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.recovery_mode'), '7' => 'Elevação de 80 mm', '6' => 'Elevação de 80 mm', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.battery_clearance'), '7' => '324 mm', '6' => '324 mm', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.min_clearance'), '7' => '272 mm', '6' => '272 mm', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.angles'), '7' => '27,5° / 27,9° / 24,6°', '6' => '27,5° / 27,9° / 24,6°', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.max_grade'), '7' => '100% (45°)', '6' => '100% (45°)', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.wading_depth'), '7' => '770 mm', '6' => '770 mm', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.offroad_modes'), '7' => 'Auto, Estrada, Montanha, Lama, Areia, Neve e Travessia', '6' => 'Auto, Estrada, Montanha, Lama, Areia, Neve e Travessia', 'model' => 'rox-adamas'],
                ['label' => __('especificacoes.labels.offroad_cruise'), '7' => '2–15 km/h / 2–35 km/h', '6' => '2–15 km/h / 2–35 km/h', 'model' => 'rox-adamas'],
            ]),
        ];

        $sections['interior_comforto'] = [
            'title' => __('especificacoes.sections.interior_comforto'),
            'rows' => array_merge($standardRows([
                __('especificacoes.labels.leather_steering'), __('especificacoes.labels.heated_steering'), __('especificacoes.labels.adj_steering'),
                __('especificacoes.labels.sun_visors'),
                __('especificacoes.labels.ac_3zones'), __('especificacoes.labels.ac_rear_vents'),
                __('especificacoes.labels.front_storage_light'), __('especificacoes.labels.air_purifier'), __('especificacoes.labels.ion_generator'), __('especificacoes.labels.armrest_light'), __('especificacoes.labels.ambient_light'),
                __('especificacoes.labels.reading_lights'), __('especificacoes.labels.power_windows'), __('especificacoes.labels.keyless_access'),
                __('especificacoes.labels.bluetooth_key'), __('especificacoes.labels.remote_key'), __('especificacoes.labels.mechanical_key'), __('especificacoes.labels.walkaway_lock'), __('especificacoes.labels.trunk_light'), __('especificacoes.labels.flat_floor'), __('especificacoes.labels.premium_mats'), __('especificacoes.labels.camping_mode'), __('especificacoes.labels.nap_mode'),
                __('especificacoes.labels.driver_welcome'), __('especificacoes.labels.boss_button'),
            ], 'rox-01'), $standardRows([
                __('especificacoes.labels.heated_steering'), __('especificacoes.labels.child_lock'),
                __('especificacoes.labels.suede_headliner'), __('especificacoes.labels.ac_3zones'),
                __('especificacoes.labels.ac_rear_vents'), __('especificacoes.labels.air_purifier'),
                __('especificacoes.labels.fridge_warmer'), __('especificacoes.labels.ambient_light'),
                __('especificacoes.labels.modular_led'), __('especificacoes.labels.keyless_access'),
                __('especificacoes.labels.driver_welcome'), __('especificacoes.labels.boss_button'),
            ], 'rox-adamas'), [
                ['subsection' => __('especificacoes.labels.seats_title'), 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.driver_seat_14way'), '7' => '●', '6' => '●', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.passenger_seat_10way'), '7' => '●', '6' => '●', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.row2_seats_8way'), '7' => '—', '6' => '●', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.row2_seats_12way'), '7' => '●', '6' => '—', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.heated_seats'), '7' => '1.ª e 2.ª filas', '6' => '1.ª e 2.ª filas (inclui apoio de pernas aquecido)', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.ventilated_seats'), '7' => '1.ª fila', '6' => '1.ª e 2.ª filas', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.lumbar_massage'), '7' => '1.ª e 2.ª filas', '6' => '1.ª e 2.ª filas (massagem em 8 pontos)', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.headrests_aero'), '7' => '● (×4)', '6' => '● (×4)', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.headrests_wings'), '7' => '—', '6' => '●', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.aero_easy_entry'), '7' => '—', '6' => '●', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.row3_seats_num'), '7' => '● (×3)', '6' => '● (×2)', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.king_bed_mode'), '7' => '●', '6' => '—', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.single_bed_mode'), '7' => '—', '6' => '●', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.row3_adj_levels'), '7' => '●', '6' => '●', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.front_armrest_cup'), '7' => '●', '6' => '●', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.rear_cup_holders'), '7' => '●', '6' => '●', 'model' => 'rox-01'],
            ]),
        ];

        $sections['cockpit'] = [
            'title' => __('especificacoes.sections.cockpit'),
            'rows' => array_merge($standardRows([
                __('especificacoes.labels.snapdragon_chip'), __('especificacoes.labels.cluster_12_3'), __('especificacoes.labels.center_touch_15_7'),
                __('especificacoes.labels.rear_screen_15_6'), __('especificacoes.labels.digital_mirror_9'), __('especificacoes.labels.carplay_carbit'),
                __('especificacoes.labels.anti_fingerprint'), __('especificacoes.labels.antiglare_tech'), __('especificacoes.labels.aspice_glass'), __('especificacoes.labels.speaker_system'), __('especificacoes.labels.bluetooth_5_1'), __('especificacoes.labels.wireless_charge'), __('especificacoes.labels.dashcam'), __('especificacoes.labels.dab_radio'),
            ], 'rox-01'), $standardRows([
                __('especificacoes.labels.snapdragon_chip'), __('especificacoes.labels.center_touch_15_7'), __('especificacoes.labels.cluster_12_3'),
                __('especificacoes.labels.rear_screen_15_6'), __('especificacoes.labels.digital_mirror_9'),
                __('especificacoes.labels.speaker_system'), __('especificacoes.labels.carplay_carbit'),
                __('especificacoes.labels.bluetooth_5_1'), __('especificacoes.labels.wireless_charge'),
                __('especificacoes.labels.dashcam'), __('especificacoes.labels.dab_radio'),
            ], 'rox-adamas'), [
                ['label' => __('especificacoes.labels.charging_row1'), '7' => '● (×2)', '6' => '● (×2)', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.charging_row2'), '7' => '● (×2)', '6' => '● (×2)', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.power_12v_row2'), '7' => '—', '6' => '●', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.charging_row3'), '7' => '● (×2)', '6' => '● (×2)', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.power_armrest'), '7' => '—', '6' => '●', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.power_220v_trunk'), '7' => '2,2 kW', '6' => '2,2 kW', 'model' => 'rox-01'],
            ]),
        ];

        $sections['exterior'] = [
            'title' => __('especificacoes.sections.exterior'),
            'rows' => array_merge($standardRows([
                __('especificacoes.labels.led_headlights'), __('especificacoes.labels.led_taillights'), __('especificacoes.labels.led_drl'), __('especificacoes.labels.adaptive_headlights'), __('especificacoes.labels.auto_highbeam'),
                __('especificacoes.labels.dynamic_indicators'), __('especificacoes.labels.brake_light_led'), __('especificacoes.labels.fog_light_led'), __('especificacoes.labels.reverse_light_led'), __('especificacoes.labels.power_tailgate'),
                __('especificacoes.labels.auto_wipers'), __('especificacoes.labels.rear_wiper'), __('especificacoes.labels.heated_mirrors'), __('especificacoes.labels.folding_mirrors'), __('especificacoes.labels.dimming_mirror'),
                __('especificacoes.labels.laminated_windshield'), __('especificacoes.labels.acoustic_glass_row1'), __('especificacoes.labels.acoustic_glass_row2'), __('especificacoes.labels.acoustic_glass_row3'), __('especificacoes.labels.panoramic_roof'), __('especificacoes.labels.roof_sunshade'),
                __('especificacoes.labels.uv_glass'), __('especificacoes.labels.rear_window'), __('especificacoes.labels.rear_window_heat'), __('especificacoes.labels.roof_rails'),
            ], 'rox-01'), $standardRows([
                __('especificacoes.labels.led_headlights'), __('especificacoes.labels.auto_highbeam'),
                __('especificacoes.labels.power_tailgate'), __('especificacoes.labels.walkaway_lock'),
                __('especificacoes.labels.auto_wipers'), __('especificacoes.labels.heated_mirrors'),
                __('especificacoes.labels.laminated_windshield'), __('especificacoes.labels.acoustic_glass_row1'),
                __('especificacoes.labels.panoramic_roof'),
            ], 'rox-adamas')),
        ];

        $sections['conducao_inteligente'] = [
            'title' => __('especificacoes.sections.conducao_inteligente'),
            'rows' => array_merge($standardRows([
                __('especificacoes.labels.smart_drive_chip'), __('especificacoes.labels.radar_5mm'), __('especificacoes.labels.front_cam_2mp'),
                __('especificacoes.labels.surround_cam_2mp'), __('especificacoes.labels.ultrasonic_sensors'),
                __('especificacoes.labels.surround_360'), __('especificacoes.labels.clc_assist'),
                __('especificacoes.labels.acc_cruise'), __('especificacoes.labels.rear_collision_warn'),
                __('especificacoes.labels.lane_keep_warn'), __('especificacoes.labels.blind_spot_warn'),
            ], 'rox-01'), $standardRows([
                __('especificacoes.labels.smart_drive_chip'), __('especificacoes.labels.radar_5mm'), __('especificacoes.labels.front_cam_2mp'),
                __('especificacoes.labels.surround_cam_2mp'), __('especificacoes.labels.ultrasonic_sensors'),
                __('especificacoes.labels.surround_360'), __('especificacoes.labels.clc_assist'),
                __('especificacoes.labels.acc_cruise'), __('especificacoes.labels.rear_collision_warn'),
                __('especificacoes.labels.lane_keep_warn'), __('especificacoes.labels.blind_spot_warn'),
            ], 'rox-adamas')),
        ];

        $sections['seguranca_avancada'] = [
            'title' => __('especificacoes.sections.seguranca_avancada'),
            'rows' => array_merge($standardRows([
                __('especificacoes.labels.body_structure'), __('especificacoes.labels.ciri_crash'),
                __('especificacoes.labels.seatbelt_pre'), __('especificacoes.labels.hdc'), __('especificacoes.labels.tpms'),
                __('especificacoes.labels.epb'), __('especificacoes.labels.avas'), __('especificacoes.labels.autohold'),
                __('especificacoes.labels.ecall'), __('especificacoes.labels.towing_mode'),
            ], 'rox-01'), $standardRows([
                __('especificacoes.labels.body_structure'), __('especificacoes.labels.ciri_crash'),
                __('especificacoes.labels.seatbelt_pre'), __('especificacoes.labels.hdc'), __('especificacoes.labels.tpms'),
                __('especificacoes.labels.epb'), __('especificacoes.labels.avas'), __('especificacoes.labels.autohold'),
                __('especificacoes.labels.ecall'), __('especificacoes.labels.towing_mode'),
            ], 'rox-adamas')),
        ];

        $sections['acessorios'] = [
            'title' => __('especificacoes.sections.acessorios'),
            'rows' => array_merge([
                ['label' => __('especificacoes.labels.pedals_tungsten'), '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.pedals_soft_light'), '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.rear_kitchen'), '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.roof_rack'), '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.chassis_shield'), '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.l_awning'), '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.wheels_20_at_twotone'), '7' => '○', '6' => '○', 'model' => 'rox-01'],
                ['label' => __('especificacoes.labels.wheels_20_at_black'), '7' => '○', '6' => '○', 'model' => 'rox-01'],
            ], $standardRows([
                __('especificacoes.labels.sentry_mode_urban'), __('especificacoes.labels.sentry_mode_camping'),
            ], 'rox-adamas')),
        ];

        if ($isEnglish && $initialModel === 'rox-01') {
            $translateToEnglish = static fn ($value) => is_string($value)
                ? app(\App\Support\PageContentTranslator::class)->translate($value)
                : $value;

            foreach ($sections as &$section) {
                $section['title'] = $translateToEnglish($section['title']);
                foreach ($section['rows'] as &$row) {
                    foreach (['label', 'subsection', '7', '6'] as $field) {
                        if (isset($row[$field])) $row[$field] = $translateToEnglish($row[$field]);
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
                    {{ __('especificacoes.hero.download_btn') }}
                </a>
            </div>

            <!-- Row 2: Legend + Column headers -->
            <div class="hidden md:grid grid-cols-12 gap-4 py-3">
                <div class="col-span-5 flex items-center gap-6 text-xs text-gray-500">
                    <span class="flex items-center gap-1.5"><span class="text-black text-sm">●</span> {{ __('especificacoes.hero.legend_standard') }}</span>
                    <span class="flex items-center gap-1.5"><span class="text-black text-sm">○</span> {{ __('especificacoes.hero.legend_optional') }}</span>
                    <span class="flex items-center gap-1.5"><span class="text-gray-400">—</span> {{ __('especificacoes.hero.legend_unavailable') }}</span>
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
            <h1 class="text-2xl md:text-[2rem] font-medium text-black animate-up" id="page-title">{{ __('especificacoes.hero.title', ['model' => $models[$initialModel]['name']]) }}</h1>
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
                <p class="text-xs text-gray-400">{{ __('especificacoes.hero.disclaimer') }}</p>
                <a href="{{ route('especificacoes.pdf', $initialModel) }}" id="download-link-bottom" class="inline-flex items-center gap-2 px-6 py-3 text-xs font-medium tracking-widest uppercase text-white transition-all duration-300 hover:brightness-110 flex-shrink-0" style="background: var(--rox-dune-yellow);">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    {{ __('especificacoes.hero.download_pdf') }}
                </a>
            </div>

            <section class="mt-10 border-t border-gray-200 pt-8 {{ $initialModel === 'rox-adamas' ? '' : 'hidden' }}" data-model-spec="rox-adamas">
                <h2 class="text-base font-semibold text-black">{{ __('especificacoes.sections.notes_title') }}</h2>
                <ol class="mt-4 list-decimal space-y-2 pl-5 text-xs leading-relaxed text-gray-500">
                    @for($i = 1; $i <= 15; $i++)
                        <li>{{ __('especificacoes.notes.' . $i) }}</li>
                    @endfor
                </ol>
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
                document.getElementById('page-title').textContent = (isEnglish ? 'Specifications for ' : 'Especificações do ') + newName;

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
