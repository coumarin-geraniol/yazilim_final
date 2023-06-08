<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory, Filterable;

    const TYPE_KG = 1;
    const TYPE_TON = 2;
    const TYPE_M3 = 3;
    const TYPE_PIECES = 4;
    const TYPE_LITER = 5;
    const TYPE_METER = 6;

    protected $table = 'items';
    protected $guarded = false;

    static function getTypes()
    {
        return [
            self::TYPE_KG => 'Kilogram',
            self::TYPE_TON => 'Ton',
            self::TYPE_M3 => 'Metre küp',
            self::TYPE_PIECES => 'Adet',
            self::TYPE_LITER => 'Litre',
            self::TYPE_METER => 'Metre',
        ];
    }

    public function getTypeTitleAttribute()
    {
        $types = self::getTypes();
        return array_key_exists($this->type, $types) ? $types[$this->type] : null;
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'item_tags', 'item_id', 'tag_id');
    }
    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function seller() {
        return $this->belongsTo(Seller::class, 'seller_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'item_id', 'id');
    }

}
