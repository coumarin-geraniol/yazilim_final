<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Http\Requests\Item\StoreRequest;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $images = $data['images'];

        $tag_ids = $data['tag_ids'];
        unset($data['tag_ids'], $data['images']);

        $item = Item::firstOrCreate($data);
        $item->tags()->attach($tag_ids);

        foreach ($images as $image) {

            $path = Storage::disk('public')->put('/images', $image);
            $item->images()->create([
                'path' => $path,
            ]);
        }

        return redirect()->route('item.index');
    }
}
