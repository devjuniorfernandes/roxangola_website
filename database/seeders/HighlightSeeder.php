<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Highlight;

class HighlightSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['image' => 'assets/banner-adamas.avif', 'title' => 'ROX Motor e OCTA Angola celebram parceria exclusiva para o mercado angolano', 'title_en' => 'ROX Motor and OCTA Angola celebrate an exclusive partnership for the Angolan market'],
            ['image' => 'assets/lichengbei.jpg', 'title' => 'ROX ADAMAS: o SUV de luxo todo-o-terreno que chega a Angola', 'title_en' => 'ROX ADAMAS: the all-terrain luxury SUV arriving in Angola'],
            ['image' => 'assets/keji.jpg', 'title' => 'Tecnologia REEV: a autonomia inteligente que define o futuro da mobilidade', 'title_en' => 'REEV technology: the intelligent range defining the future of mobility'],
            ['image' => 'assets/banner1.jpg', 'title' => 'ROX 01 testado nos terrenos mais exigentes do mundo', 'title_en' => 'ROX 01 tested on the world\'s most demanding terrains'],
            ['image' => 'assets/rox01.jpg', 'title' => 'Showroom ROX Angola: uma experiência premium de atendimento', 'title_en' => 'ROX Angola Showroom: a premium customer experience'],
            ['image' => 'assets/banner2.jpg', 'title' => 'A rede de assistência ROX em Angola: proximidade e confiança', 'title_en' => 'The ROX service network in Angola: proximity and trust'],
        ];

        // Só semeia se estiver vazio (não duplicar).
        if (Highlight::count() === 0) {
            foreach ($items as $i => $row) {
                Highlight::create($row + ['sort' => $i + 1, 'is_published' => true, 'link' => '#']);
            }
        }
    }
}
