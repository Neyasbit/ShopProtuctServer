<?php

namespace App\Http\Resources\ShopItem;

use App\Http\Resources\BookCategory\BookCategory;
use App\Http\Resources\ItemProperty\ItemProperty;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopItem extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var \App\Models\ShopItem\ShopItem $shopItem */
        $shopItem = $this->resource;

        return [
            'id' => $shopItem->getKey(),
            'name' => $shopItem->name,
            'price' => $shopItem->price,
            'bar_code' => $shopItem->bar_code,
            'book_category' => new BookCategory($shopItem->bookCategory),
            'type' => $shopItem->type,
            'properties' => ItemProperty::collection($shopItem->additionalProperties),
        ];
    }
}
