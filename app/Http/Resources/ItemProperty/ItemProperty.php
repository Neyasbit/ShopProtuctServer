<?php

namespace App\Http\Resources\ItemProperty;

use App\Models\ItemProperty as ItemPropertyModel;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemProperty extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var \App\Models\ItemProperty $itemProperty */
        $itemProperty = $this->resource;

        $value = $itemProperty->value;

        if (in_array($itemProperty->type, [ItemPropertyModel::TYPE_PAGES_COUNT, ItemPropertyModel::TYPE_READER_MIN_AGE])) {
            $value = (integer)$value;
        }

        return [
            'id' => $itemProperty->getKey(),
            'name' => $itemProperty->type,
            'value' => $value,
        ];
    }
}
