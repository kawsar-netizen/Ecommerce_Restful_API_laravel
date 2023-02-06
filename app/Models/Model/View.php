<?php

namespace App\Models\Model;

use App\Models\Model\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class View extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer','position','city',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

}
