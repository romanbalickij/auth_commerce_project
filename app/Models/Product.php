<?php

namespace App\Models;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name', 'slug', 'details', 'price', 'description', 'updated_at', 'created_at'
    ];

    public function categories(){

        return $this->belongsToMany(Category::class, 'category_product');
    }
    public function tags(){

        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class);
    }

    public function presentPrice()
    {
        return money_format('$%i', $this->price);
    }

    public  function getImage()
    {
        if($this->image != null) {
            return '/commerce/image/'.$this->image;
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

    public static function addToCart($product){

      return  Cart::add($product->id, $product->name, 1 , $product->price, ['attribute_id' => $product->attribute_id])->associate('App\Models\Product');
    }

    public static function duplicateProduct($product)
    {
       return  Cart::search(function ($cartItem, $rowId) use($product) {
            return $cartItem->id ===  $product->id;
        });


    }

//    public function getAttribute($id)
//    {
//      return self::with(['attributes' => function ($query) {
//          $query->where('id', $id);
//      }])->get();
//    }
}
