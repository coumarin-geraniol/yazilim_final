<?php

namespace App\Http\Controllers\API\Item;

use App\Http\Controllers\Controller;
use App\Http\Filters\ItemFilter;
use App\Http\Requests\API\Item\IndexRequest;
use App\Http\Resources\Item\ItemResource;
use App\Http\Resources\Item\ItemShowResource;
use App\Models\Category;
use App\Models\Item;
use App\Models\Seller;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Item $item)
    {
        $tagItems = Item::whereHas('tags', function ($query) use ($item) {
            $query->whereIn('tag_id', $item->tags->pluck('id'));
        })->where('id', '!=', $item->id)->take(3)->get();

        $categoryItems = Item::where('category_id', $item->category_id)
            ->where('id', '!=', $item->id)
            ->take(3)
            ->get();

        $relatedItems = $tagItems->concat($categoryItems)->unique('id');

        if ($relatedItems->count() < 6) {
            $remainingItems = Item::where('id', '!=', $item->id)->whereNotIn('id', $relatedItems->pluck('id'))->take(6 - $relatedItems->count())->get();
            $relatedItems = $relatedItems->concat($remainingItems);
        }

        $item->relatedItems = $relatedItems;

        return new ItemShowResource($item);

    }
}
