<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Personaggi;
use Faker\Generator as Faker;

$factory->define(Personaggi::class, function (Faker $faker) {
    return [
        'src' => $faker -> imageUrl($width = 640, $height = 480),
        'titolo' => $faker -> lastName(),
        'tipo' => $faker -> streetName(),
        'descrizione' => $faker -> paragraph()
    ];
});
