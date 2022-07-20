<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::Create([

            'name'=> 'Proyecto A',
            'description'=> 'El proyecto A consiste en el desarrollo web'
        ]);
        
        Project::Create([

            'name'=> 'Proyecto B',
            'description'=> 'El proyecto B consiste en el desarrollo de una app de andrid'
        ]);
    }
}
