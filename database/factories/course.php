<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Course::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase,
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'publish' =>  $faker->randomElement($array = array (1,0)),
        'courseType_id' => $faker->randomElement($array = array(1, 2, 3)),
    ];
});
