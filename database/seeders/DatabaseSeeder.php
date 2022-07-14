<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Admin

        DB::table('users')->insert([
            'name' => ('Luis'),
            'email' =>('luisdiaz03022017@gmail.com'),
            'password' => bcrypt('123321'),
            'role' => (0)
            
        ]);

        //Soporte
        
        DB::table('users')->insert([
            'name' => ('Jesus'),
            'email' =>('soporte@gmail.com'),
            'password' => bcrypt('123321'),
            'role' => (1)
            
        ]);

        //Admin
        
        DB::table('users')->insert([
            'name' => ('Andrea'),
            'email' =>('andrea@gmail.com'),
            'password' => bcrypt('123321'),
            'role' => (2)
            
        ]);
    }
}
