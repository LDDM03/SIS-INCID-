<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::Create([

            'name'=> 'Categoria A1',
            'description'=> '',
            'project_id'=> '1'
        ]);

        Category::Create([

            'name'=> 'Categoria A2',
            'description'=> '',
            'project_id'=> '1'
        ]);

        Category::Create([

            'name'=> 'Categotia B1',
            'description'=> '',
            'project_id'=> '2'
        ]);

        Category::Create([

            'name'=> 'Categotia B2',
            'description'=> '',
            'project_id'=> '2'
        ]);
    }
}
