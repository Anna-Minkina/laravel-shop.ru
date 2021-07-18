<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
       'name'=>$faker->randomElement(['Category1','Category 2', 'Category 3', 'Category 4', 'Category 5'])
    ];
});
