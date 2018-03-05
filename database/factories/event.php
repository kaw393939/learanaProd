<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->catchPhrase,
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'eventType_id' => $faker->randomElement($array = array(1, 2, 3)),
        'registrationOpen' => $faker->dateTimeInInterval($startDate = '-2 years', $interval = '+ 5 days', $timezone = null),
        'registrationClose' => $faker->dateTimeInInterval($startDate = '-2 years', $interval = '+ 5 days', $timezone = null),
        'publish' => $faker->randomElement($array = array(1, 0)),

    ];
});