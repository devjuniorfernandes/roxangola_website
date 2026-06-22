<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            // Hero Section
            ['section_name' => 'hero', 'key' => 'title', 'value' => 'ROX Angola', 'type' => 'text'],
            ['section_name' => 'hero', 'key' => 'subtitle', 'value' => 'A Nova Era da Mobilidade Premium.', 'type' => 'text'],
            ['section_name' => 'hero', 'key' => 'video_url', 'value' => 'assets/videos/Dealer Feed Video.mp4', 'type' => 'video'],
            ['section_name' => 'hero', 'key' => 'banner_image', 'value' => 'assets/banner.jpg', 'type' => 'image'],
            
            // Features Section
            ['section_name' => 'features', 'key' => 'title', 'value' => 'Inovação e Performance', 'type' => 'text'],
            ['section_name' => 'features', 'key' => 'subtitle', 'value' => 'Descubra a tecnologia de ponta que equipa os nossos veículos.', 'type' => 'text'],

            // Explore Models Section
            ['section_name' => 'explore_models', 'key' => 'title', 'value' => 'Explorar Modelos ROX', 'type' => 'text'],
            ['section_name' => 'explore_models', 'key' => 'car_image', 'value' => 'assets/rox01.png', 'type' => 'image'],
            ['section_name' => 'explore_models', 'key' => 'button_text', 'value' => 'Explorar', 'type' => 'text'],
            ['section_name' => 'explore_models', 'key' => 'button_link', 'value' => '/rox01', 'type' => 'text'],
        ];

        foreach ($sections as $section) {
            \App\Models\SiteSection::updateOrCreate(
                ['section_name' => $section['section_name'], 'key' => $section['key']],
                ['value' => $section['value'], 'type' => $section['type']]
            );
        }
    }
}
