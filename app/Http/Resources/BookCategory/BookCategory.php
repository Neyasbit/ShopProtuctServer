<?php

namespace App\Http\Resources\BookCategory;

use Illuminate\Http\Resources\Json\JsonResource;

class BookCategory extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->getKey(),
            'name' => $this->name,
        ];
    }
}
