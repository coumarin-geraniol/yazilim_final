<?php

namespace App\Http\Resources\Item;

use App\Http\Resources\Category\OrderResource;
use App\Http\Resources\Seller\SellerResource;
use App\Http\Resources\Tag\TagResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'type' => $this->type,
            'category' => new OrderResource($this->category),
            'tags' => TagResource::collection($this->tags),
            'images' => ImageResource::collection($this->images),
            'seller' => new SellerResource($this->seller),

        ];
    }
}
