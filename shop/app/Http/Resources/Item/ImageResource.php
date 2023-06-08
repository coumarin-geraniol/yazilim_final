<?php

namespace App\Http\Resources\Item;

use App\Http\Resources\Category\OrderResource;
use App\Http\Resources\Seller\SellerResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id,
            'item_id' => $this->item_id,
            'path' => $this->imageUrl,

        ];
    }
}
