<?php

/* @var $factory Factory */

use App\Models\ItemProperty;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(ItemProperty::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement([
            ItemProperty::TYPE_MAIN_INGREDIENT,
            ItemProperty::TYPE_PAGES_COUNT,
            ItemProperty::TYPE_PROGRAMMING_LANGUAGE,
            ItemProperty::TYPE_READER_MIN_AGE,
        ]),
        'value' => 'TO DO'
    ];
});
