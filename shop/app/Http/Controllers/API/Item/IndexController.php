<?php

namespace App\Http\Controllers\API\Item;

use App\Http\Controllers\Controller;
use App\Http\Filters\ItemFilter;
use App\Http\Requests\API\Item\IndexRequest;
use App\Http\Resources\Item\ItemResource;
use App\Models\Category;
use App\Models\Item;
use App\Models\Seller;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(ItemFilter::class, ['queryParams' => array_filter($data)]);

        $items = Item::filter($filter)->paginate(9, ['*'], 'page', $data['page']);
        return ItemResource::collection($items);
    }
}
