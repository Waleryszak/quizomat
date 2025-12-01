<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  //Odpalanie seedera
    public function run(): void
    {
        $this->call([
            QuizSeeder::class,
        ]);
    }
}

