<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Seller;
use App\Models\Tag;
use Nette\Utils\Type;

class EditController extends Controller
{
    public function __invoke(Item $item)
    {
        $sellers = Seller::all();
        $tags = Tag::all();
        $categories = Category::all();
        $types = Item::getTypes();
        return view('item.edit', compact('item', 'sellers', 'tags', 'categories', 'types'));
    }
}
