<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name', 'slug', 'details', 'price', 'description', 'updated_at', 'created_at'
    ];

    public function categories(){

        return $this->belongsToMany(Category::class, 'category_product');
    }

    public function presentPrice()
    {
        return money_format('$%i', $this->price);
    }

    public  function getImage()
    {
        if($this->image != null) {
            return '/commerce/upload/'.$this->image;
        }
    }

    public static function sortByProducts($sort)
    {
        if($sort == 'new product'){
            return self::orderBy('date', 'desc')->paginate(5);
        } elseif ($sort == 'popular') {
            return self::orderBy('views', 'desc')->paginate(5);
        } elseif($sort == 'cheap') {
            return self::orderBy('price')->paginate(5);
        } elseif($sort == 'expensive') {
            return self::orderBy('price', 'desc')->paginate(5);
        }
    }
}
