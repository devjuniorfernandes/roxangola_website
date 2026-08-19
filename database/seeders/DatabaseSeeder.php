<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Criação do Administrador por defeito
        User::firstOrCreate(
            ['email' => 'admin@roxangola.com'],
            [
                'name' => 'Administrador',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'is_admin' => true,
            ]
        );

        $this->call([
            GalleryImageSeeder::class,
            HighlightSeeder::class,
            MilestoneSeeder::class,
            PageSeoSeeder::class,
            ServiceSeeder::class,
            SiteSectionSeeder::class,
        ]);
    }
}
