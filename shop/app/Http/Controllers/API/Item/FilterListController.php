<?php

namespace App\Http\Controllers\API\Item;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\OrderResource;
use App\Http\Resources\Item\ItemResource;
use App\Http\Resources\Seller\SellerResource;
use App\Http\Resources\Tag\TagResource;
use App\Models\Category;
use App\Models\Item;
use App\Models\Seller;
use App\Models\Tag;
use Product;

class FilterListController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $sellers = Seller::all();
        $tags = Tag::all();

        $maxPrice = Item::max('price');
        $minPrice = Item::min('price');

        $result = [
            'categories' => $categories,
            'sellers' => $sellers,
            'tags' => $tags,
            'price' => [
                'max' => $maxPrice,
                'min' => $minPrice
            ],
        ];

        return response()->json($result);
    }
}
