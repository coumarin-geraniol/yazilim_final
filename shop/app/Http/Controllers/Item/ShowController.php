<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;

class ShowController extends Controller
{
    public function __invoke(Item $item)
    {
        $item->load('images');  // ilişkili 'images' verisini yükler

        return view('item.show', compact('item'));
    }
}
