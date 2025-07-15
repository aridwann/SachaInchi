<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(200)->create();
        // Product::factory()->create([
        //     'name' => 'Sacha Inchi Oil',
        //     'img' => 'img/sacha-inchi-oil.png'
        // ]);
        // Product::factory()->create([
        //     'name' => 'Sacha Inchi Seeds',
        //     'img' => 'img/sacha-inchi-seeds.png'
        // ]);
        // Product::factory()->create([
        //     'name' => 'Sacha Inchi Powder',
        //     'img' => 'img/sacha-inchi-powder.png'
        // ]);
        // Product::factory()->create([
        //     'name' => 'Sacha Inchi Capsules',
        //     'img' => 'img/sacha-inchi-capsules.png'
        // ]);
        // Product::factory()->create([
        //     'name' => 'Sacha Inchi Tea',
        //     'img' => 'img/sacha-inchi-tea.png'
        // ]);
        // Product::factory()->create([
        //     'name' => 'Sacha Inchi Snacks',
        //     'img' => 'img/sacha-inchi-snacks.png'
        // ]);
        // User::factory()->create([
        //     'name' => 'Admin Ganteng',
        //     'email' => 'a@gmail.com',
        //     'password' => 'a',
        //     'is_admin' => true,  
        // ]);
    }
}
