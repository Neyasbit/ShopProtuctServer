<?php

use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookCategory::create([
            'name' => 'Программирование',
        ]);
        BookCategory::create([
            'name' => 'Кулинария',
        ]);
        BookCategory::create([
            'name' => 'Эзотерика',
        ]);
    }
}
