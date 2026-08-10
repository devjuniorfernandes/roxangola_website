<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GalleryImage;

class GalleryImageSeeder extends Seeder
{
    public function run(): void
    {
        if (GalleryImage::count() > 0) {
            return;
        }

        $items = [
            ['image' => 'assets/showroom/Gemini_Generated_Image_bpajg6bpajg6bpaj.png', 'label' => 'Showroom ROX Motor Angola', 'label_en' => 'ROX Motor Angola Showroom'],
            ['image' => 'assets/showroom/Gemini_Generated_Image_qzc3l3qzc3l3qzc3.png', 'label' => 'Lounge de clientes', 'label_en' => 'Customer lounge'],
            ['image' => 'assets/showroom/Gemini_Generated_Image_fnsi3zfnsi3zfnsi.png', 'label' => 'Área de exposição de veículos', 'label_en' => 'Vehicle display area'],
            ['image' => 'assets/showroom/Gemini_Generated_Image_tvmk14tvmk14tvmk.png', 'label' => 'Área comercial', 'label_en' => 'Sales area'],
        ];

        foreach ($items as $i => $row) {
            GalleryImage::create($row + ['sort' => $i + 1, 'is_published' => true]);
        }
    }
}
