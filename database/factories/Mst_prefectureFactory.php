<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Mst_prefecture;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Mst_prefecture::class, function (Faker $faker) {
    return [
        'prefecture_cd'=>$faker->randomNumber($nbDigits = 2),
        'prefecture_name'=>$faker->prefecture,
        'insert_cd'=>$faker->randomNumber($nbDigits = 5),
        'insert_date'=>$faker->dateTimeBetween('-20 years', '-2years')
        ->format('Y-m-d H:i:s')
    ];
});
