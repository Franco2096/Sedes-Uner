<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];

});
$factory->define(App\Clientes::class, function (Faker\Generator $faker) {

    return [
        'nombre' => $faker->firstName.' '.$faker->lastName,
        'dni' => $faker->unixTime($max = 'now') ,
        'provincia'=>$faker->state,
        'ciudad'=>$faker->city,
        'direccion'=>$faker->address,
        'email'=>$faker->email,
    ];

});

$factory->define(App\Admin::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => "Capo",
        'email' => "cachin@cacho.com",
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});
  $factory->define(App\Determinaciones::class, function (Faker\Generator $faker) {  
 return [    
             //'determinacion' =>"Acidez total" ,
            //'tecnica' => "Tritrimétrico",
            // 'estado' => "habilitado",
//'tipo' => "fisico_quimico",
             
         

                ];
        
        }
    
);
