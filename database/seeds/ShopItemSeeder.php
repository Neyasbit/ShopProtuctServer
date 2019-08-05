<?php

use App\Models\ItemProperty;
use App\Models\ShopItem\ShopItem;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ShopItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var ShopItem[] $shopItems */
        $shopItems = factory(ShopItem::class, 10)->create();

        foreach ($shopItems as $shopItem) {
            if ($shopItem->type == ShopItem::ITEM_TYPE_CD) {
                $this->createPropertiesForCD($shopItem);
            }

            if ($shopItem->type == ShopItem::ITEM_TYPE_BOOK) {
                $this->createPropertiesForBook($shopItem);
            }
        }
    }

    private function createPropertiesForCD(ShopItem $shopItem)
    {
        $faker = Factory::create();

        $shopItem->additionalProperties()->create([
            'type' => ItemProperty::TYPE_CD_TYPE,
            'value' => $faker->randomElement([
                'cd',
                'dvd',
            ]),
        ]);

        $shopItem->additionalProperties()->create([
            'type' => ItemProperty::TYPE_CD_CONTENT,
            'value' => $faker->randomElement([
                'музыка',
                'видео',
                'по',
            ]),
        ]);
    }

    private function createPropertiesForBook(ShopItem $shopItem)
    {
        $faker = Factory::create();

        $shopItem->additionalProperties()->create([
            'type' => ItemProperty::TYPE_PAGES_COUNT,
            'value' => $faker->numberBetween(30, 400),
        ]);

        if ($shopItem->bookCategory->name == 'Кулинария') {
            $shopItem->additionalProperties()->create([
                'type' => ItemProperty::TYPE_MAIN_INGREDIENT,
                'value' => $faker->word,
            ]);
        }

        if ($shopItem->bookCategory->name == 'Программирование') {
            $shopItem->additionalProperties()->create([
                'type' => ItemProperty::TYPE_PROGRAMMING_LANGUAGE,
                'value' => $faker->randomElement([
                    'JavaScript',
                    'PHP',
                    'Java',
                    'C++',
                    'Python',
                    'Swift',
                    'Kotlin',
                ]),
            ]);
        }

        if ($shopItem->bookCategory->name == 'Эзотерика') {
            $shopItem->additionalProperties()->create([
                'type' => ItemProperty::TYPE_READER_MIN_AGE,
                'value' => $faker->numberBetween(5, 18),
            ]);
        }
    }
}
