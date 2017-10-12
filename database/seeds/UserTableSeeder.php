<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
            'name' =>"Administrador" ,
            'email' => "admin@admin.com",
            'password' => bcrypt('123456'),
        	'tipoUser' => "Fisico_Quimico",
            'rol' => "admin"

        ]);

    }
}
