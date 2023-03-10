<?php

namespace App\Models\Model;

use App\Models\Model\View;
use App\Models\Model\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','detail','price','stock','discount',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function views(){
        return $this->hasMany(View::class);
    }
}
