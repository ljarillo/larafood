<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Table;
use Faker\Generator as Faker;

$factory->define(Table::class, function (Faker $faker) {
    return [
        'tenant_id' => factory(\App\Models\Tenant::class),
        'identify' => Str::random(5).uniqid(),
        'description' => $faker->sentence,
    ];
});
