<?php

use Illuminate\Database\Seeder;
use App\Clientes;
class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Clientes::class, 10)->create();
    }
}
