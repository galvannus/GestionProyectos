<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'project_name' => $faker->realText(random_int(10, 20)),
        'objetive' => $faker->realText(random_int(10, 15)),
        'description' => $faker->realText(random_int(30, 50)),
        'specific_objetive' => $faker->realText(random_int(30, 50)),
        'justification' => $faker->realText(random_int(15, 30)),
        'author' => $faker->realText(random_int(10, 15)),
    ];
});
