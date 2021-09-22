<?php

use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        'name' => 'esau',
        'apellido' => 'zelaya',
        'fecha_nacimiento' => '16/01/2001',
        'direccion' => 'colonia san luis',
        'genero' => 'M',
        'telefono' => '7664430988',
        'email' => 'esau123@gmail.com',
        'password' => bcrypt('Esau123')
    ];
});
