<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
            ['id' => 1, 'name' => 'Hombre'],
            ['id' => 2, 'name' => 'Mujer'],
            ['id' => 3, 'name' => 'Niño'],
            ['id' => 4, 'name' => 'Deportivo'],
            ['id' => 5, 'name' => 'Otro'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
