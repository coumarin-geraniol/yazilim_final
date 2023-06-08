<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    protected $table = 'buyers';
    protected $guarded = false;

    static function getGenders()
    {
        return [
            self::GENDER_MALE => 'Erkek',
            self::GENDER_FEMALE => 'Kadın',
        ];
    }

    public function getGenderTitleAttribute()
    {
        $genders = self::getGenders();
        return array_key_exists($this->gender, $genders) ? $genders[$this->gender] : null;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'order_id', 'id');
    }
}
