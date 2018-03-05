<?php

use Faker\Generator as Faker;

$factory->define(\App\group::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->catchPhrase,
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'groupType_id' => $faker->randomElement($array = array(1, 2, 3)),
        'active' => $faker->randomElement($array = array(1, 0)),
    ];
});
