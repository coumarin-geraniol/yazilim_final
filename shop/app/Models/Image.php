<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';
    protected $guarded = false;

    public function item() {
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->path);
    }
}
