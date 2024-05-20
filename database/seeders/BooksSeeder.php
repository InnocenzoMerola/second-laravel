<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'Harry potter e il calice di fuoco',
            'author' => 'J.K. Rowling',
            'category' => 'Fantasy',
            'year' => 2008,
            'description' => 'Harry è un giovane mago',
        ]);

        for ($i=0; $i < 5; $i++) { 
            DB::table('books')->insert([
                'title' => fake()->words(rand(1, 10), true),
                'author' => fake()->name(),
                'category' => fake()->word(),
                'year' => rand(1900, 2024),
                'description' => fake()->paragraph(2, 6),
                'image' => fake()->imageUrl(640, 480)
            ]);
        }
    }
}
