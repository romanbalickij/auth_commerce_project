<?php

namespace App\Models;

use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Product extends Model
{

    protected $table = 'products';
    public $timestamps = false;

    use SearchableTrait;

    protected $fillable = [
        'name', 'slug', 'details', 'price', 'description', 'updated_at', 'created_at','quantity'
    ];

    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.name'    => 10,
            'products.details' => 10,
            'products.price'   => 10,
        ],
    ];

    public function categories(){

        return $this->belongsToMany(Category::class, 'category_product');
    }
    public function tags(){

        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class,'product_variants');
    }


    public function orders()
    {
        return $this->belongsToMany(Order::class);
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

    public static function searchProducts($product){
       return self::search($product->search)->paginate(5);
    }

    public static function addToCart($product, $productAttribute){
     // return  Cart::add($product->id, $product->name, 1 , $product->price)->associate('App\Models\Product');
     return   Cart::add(['id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'options' => ['attributes' => $productAttribute]])->associate('App\Models\Product');
    }

    public static function duplicateProduct($product)
    {
       return  Cart::search(function ($cartItem, $rowId) use($product) {
            return $cartItem->id ===  $product->id;
        });
    }

    public static function getProductInCart()
    {
        foreach (Cart::content() as $product)
        {
            return $product;
        }
    }

    public static function checkoutDetailsCart($token,  $email)
    {
        $contents = Cart::content()->map(function ($item){
            return  $item->model->name .'-Quantity:'.$item->qty;
        })->values()->toJson();;

        $charge = Stripe::charges()->create([
            'amount' => Coupon::getCouponDiscount(),
            'currency' => 'USD',
            'source'   => $token,
            'description'   => 'Order',
            'receipt_email'   => $email,
            'metadata'   => [
                'contents' => $contents,
                'quantity' => Cart::content()->count(),
            ],
        ]);
    }

    public static function  decreaseQuantities()
    {
        $product = Product::findOrFail(self::getproductInCart()->id);
        $product->update(['quantity' => $product->quantity - self::getproductInCart()->qty]);
    }

    public static function  productsAreNoLongerAvailable(){
        $product = Product::findOrFail(self::getproductInCart()->id);
        $productInCart = self::getproductInCart()->qty;
        if($product->quantity < $productInCart) {
           return true;
        }
           return false;
    }

    public function getStock()
    {
        if($this->quantity > 0){
            return 'In Stocks';
        }
            return 'End Stocks';
    }

}
