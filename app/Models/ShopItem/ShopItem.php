<?php

namespace App\Models\ShopItem;

use App\Models\BookCategory;
use App\Models\ItemProperty;
use Illuminate\Database\Eloquent\Model;

class ShopItem extends Model
{
    const ITEM_TYPE_BOOK = 'book';
    const ITEM_TYPE_CD = 'cd';

    protected $fillable = [
        'name',
        'price',
        'bar_code',
        'book_category_id',
        'type',
    ];

    protected $casts = [
        'name' => 'string',
        'price' => 'float',
        'bar_code' => 'string',
        'book_category_id' => 'integer',
        'type' => 'string',
    ];

    public function bookCategory()
    {
        return $this->belongsTo(BookCategory::class);
    }

    public function additionalProperties()
    {
        return $this->hasMany(ItemProperty::class, 'shop_item_id', 'id');
    }
}
