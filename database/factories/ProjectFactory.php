<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'description' => $faker->paragraph(4),
        'notes' => 'Foobar notes',
        'owner_id' => factory(App\User::class)
    ];
});
