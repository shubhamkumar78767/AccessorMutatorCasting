<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','price','is_active'];

    protected $casts = [
        'price' => MoneyCast::class, 
    ];

    // public function setPriceAttribute($value)
    // {
    //     return $this->attributes['price'] = ($value * 100);
    // }

    public function setSlugAttribute($value)
    {
        return $this->attributes['slug'] = Str::slug($value);
    }

    public function getTitleAttribute($value)
    {
        return Str::title($value);
    }
}
