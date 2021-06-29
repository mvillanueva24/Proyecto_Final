<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category::factory(5)->has(Book::factory()->count(3))->create();
        Category::factory(1)
        ->has(Book::factory()->count(20))
        ->state(['genero' => 'Terror'])
        ->create();
        Category::factory(1)
        ->has(Book::factory()->count(20))
        ->state(['genero' => 'Drama'])
        ->create();
        Category::factory(1)
        ->has(Book::factory()->count(20))
        ->state(['genero' => 'Literatura'])
        ->create();
        Category::factory(1)
        ->has(Book::factory()->count(20))
        ->state(['genero' => 'Juvenil'])
        ->create();
        Category::factory(1)
        ->has(Book::factory()->count(20))
        ->state(['genero' => 'Cuentos'])
        ->create();
        Category::factory(1)
        ->has(Book::factory()->count(20))
        ->state(['genero' => 'Accion'])
        ->create();

    }
}
