<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['slug' => 'historia', 'title' => 'Historia'],
            ['slug' => 'chemia', 'title' => 'Chemia'],
            ['slug' => 'biologia', 'title' => 'Biologia'],
            ['slug' => 'matematyka', 'title' => 'Matematyka'],
            ['slug' => 'przyroda', 'title' => 'Przyroda'],
            ['slug' => 'informatyka', 'title' => 'Informatyka'],
            ['slug' => 'edukacja', 'title' => 'Edukacja dla bezpieczeństwa'],
            ['slug' => 'geografia', 'title' => 'Geografia'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
