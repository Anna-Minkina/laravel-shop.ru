<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Gallery;
use Faker\Generator as Faker;

$factory->define(Gallery::class, function (Faker $faker) {
   /* $photos = [
        '0' => 'https://loremflickr.com/640/480/computer',
        '1' => 'https://loremflickr.com/640/480/computer',
        '2' => 'https://loremflickr.com/640/480/computer',
        '3' => 'https://loremflickr.com/640/480/computer',
    ]; массив фоток был нужен для хранения в json формате*/

    return [
        'product_id'=> null,
    ];
});
