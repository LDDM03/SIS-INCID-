<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Users;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        users::Create([
            
            //Admin

            'name'=> 'Luis',
            'email'=> 'luisdiaz@gmail.com',
            'password'=> bcrypt('123321'),
            'role'=> '0'

        ]);


            //Soporte

            users::Create([

            'name'=> 'Jesus',
            'email'=> 'soporte@gmail.com',
            'password'=> bcrypt('123321'),
            'role'=> '1'

        ]);

        users::Create([

            //Cliente
             
            'name'=> 'Andrea',
            'email'=> 'andrea@gmail.com',
            'password'=> bcrypt('123321'),
            'role'=> '2'
        ]);

    }
}
