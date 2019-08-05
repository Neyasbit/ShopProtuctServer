<?php

/* @var $factory Factory */

use App\Models\BookCategory;
use App\Models\ShopItem\ShopItem;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(ShopItem::class, function (Faker $faker) {
    $type = $faker->randomElement([
        ShopItem::ITEM_TYPE_BOOK,
        ShopItem::ITEM_TYPE_CD,
    ]);

    $bookCategoryId = $type == ShopItem::ITEM_TYPE_BOOK ? BookCategory::inRandomOrder()->first()->getKey() : null;

    return [
        'name' => $faker->word,
        'price' => $faker->randomFloat(2, 0, 100000),
        'bar_code' => $faker->randomNumber(6),
        'book_category_id' => $bookCategoryId,
        'type' => $type,
    ];
});
