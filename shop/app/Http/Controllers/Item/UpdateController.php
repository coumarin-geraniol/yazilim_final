<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Http\Requests\Item\UpdateRequest;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Item $item)
    {
        $data = $request->validated();
        $images = $data['images'];

        $tag_ids = $data['tag_ids'];
        unset($data['tag_ids'], $data['images']);

        $item->update($data);
        $item->tags()->sync($tag_ids);

        // Öncelikle, mevcut tüm resimleri silin.
        foreach ($item->images as $image) {
            Storage::disk('public')->delete($image->path);
            $image->delete();
        }

        // Daha sonra, yeni yüklenen resimleri ekleyin.
        foreach ($images as $image) {
            $path = Storage::disk('public')->put('/images', $image);
            $item->images()->create([
                'path' => $path,
            ]);
        }

        return redirect()->route('item.index');
    }
}
