<?php

use Faker\Generator as Faker;

$factory->define(App\Grocery::class, function (Faker $faker) {
    return [
        'groceryname' => $faker->word,
        'quantity' => $faker->randomDigit,
        'description' => $faker->sentence,
        'user_id' => factory('App\User')->create()->id
    ];
});
