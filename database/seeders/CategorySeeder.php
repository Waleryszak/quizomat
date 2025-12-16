<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['category' => 'historia', 'title' => 'Historia'],
            ['category' => 'chemia', 'title' => 'Chemia'],
            ['category' => 'biologia', 'title' => 'Biologia'],
            ['category' => 'matematyka', 'title' => 'Matematyka'],
            ['category' => 'przyroda', 'title' => 'Przyroda'],
            ['category' => 'informatyka', 'title' => 'Informatyka'],
            ['category' => 'edukacja', 'title' => 'Edukacja dla bezpieczeństwa'],
            ['category' => 'geografia', 'title' => 'Geografia'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
