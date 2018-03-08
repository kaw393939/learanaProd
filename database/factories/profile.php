<?php

use Faker\Generator as Faker;

$factory->define(\App\Profile::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase,
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'birthday' => $faker->dateTimeBetween('-80 years', '-10 years'),
        'public' => $faker->randomElement($array = array(1, 0)),
        'email' => $faker->randomElement($array = array(TRUE, FALSE)),

    ];
});
