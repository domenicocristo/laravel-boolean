<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Postcard;
use Faker\Generator as Faker;
use phpDocumentor\Reflection\Types\Nullable;

$factory->define(Postcard::class, function (Faker $faker) {
    return [
        'sender' => $faker -> name(),
        'address' => $faker -> address(),
        'text' => $faker -> words(10, true),
        'image' => null,
    ];
});