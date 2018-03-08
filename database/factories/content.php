<?php

use Faker\Generator as Faker;
use Faker\Provider\Youtube as Youtube;

$factory->define(\App\Content::class, function (Faker $faker) {
    $faker->addProvider(new Youtube($faker));
    return [
        //
        'title' => $faker->catchPhrase,
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'type' => $faker->randomElement($array = array(1, 0)),
        'uri' => $faker->youtubeUri(),
        'durration' => $faker->time($format = 'H:i:s', $max = 'now'),
        'publish' => $faker->randomElement($array = array(1, 0)),
    ];
});
