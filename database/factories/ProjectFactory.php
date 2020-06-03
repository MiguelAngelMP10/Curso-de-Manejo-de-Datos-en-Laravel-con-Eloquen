<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'city_id' => App\City::all()->random()->city_id,
        'company_id' => App\Company::all()->random()->company_id,
        'user_id' => App\User::all()->random()->user_id,
        'name' => 'projecto test',
        'execution_date' => $faker->dateTime(),
        'is_active' => $faker->boolean,
    ];
});