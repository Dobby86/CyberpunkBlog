<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mappa;
use Faker\Generator as Faker;

$factory->define(Mappa::class, function (Faker $faker) {
    return [
        
        'src' => $faker -> imageUrl($width = 640, $height = 480, 'dog'),
        'titolo' => $faker -> company(),
        'tipo' => $faker -> city(),
        'descrizione' => $faker -> word()
    ];
});
