<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Seller;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $types = Item::getTypes();
        $sellers = Seller::all();
        return view('item.create', compact('categories', 'tags', 'types', 'sellers'));
    }
}
