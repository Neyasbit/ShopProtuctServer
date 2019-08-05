<?php

namespace App\Models;

use App\Models\ShopItem\Book;
use App\Models\ShopItem\CD;
use App\Models\ShopItem\ShopItem;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    public function shopItems()
    {
        return $this->hasMany(ShopItem::class);
    }

    public function CDs()
    {
        return $this->hasMany(CD::class, 'category_id', 'id');
    }

    public function books()
    {
        return $this->hasMany(Book::class, 'category_id', 'id');
    }
}
