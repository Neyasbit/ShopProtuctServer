<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemProperty extends Model
{
    const TYPE_PAGES_COUNT = 'pages_count';
    const TYPE_PROGRAMMING_LANGUAGE = 'programming_language';
    const TYPE_MAIN_INGREDIENT = 'main_ingredient';
    const TYPE_READER_MIN_AGE = 'reader_min_age';
    const TYPE_CD_TYPE = 'cd_type';
    const TYPE_CD_CONTENT = 'cd_content';

    protected $fillable = [
        'type',
        'value',
        'shop_item_id',
    ];

    public $timestamps = false;
}
