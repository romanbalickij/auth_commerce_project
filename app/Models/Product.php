<?php

namespace App\Models;

use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Product extends Model
{

    protected $casts = [
        'properties' => 'array'
    ];


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
        return $this->belongsToMany(Attribute::class,'product_attributes','product_id','attribute_id')->withPivot('name');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function values()
    {
        return $this->belongsToMany(AttributeValue::class,'product_variant','product_id','attribute_value_id');
    }


    public function presentPrice()
    {
        return money_format('$%i', $this->price);
    }

    public  function getImage()
    {
        if($this->image != null) {
            return '/storage/'.$this->image;
          //  return '/commerce/image/'.$this->image;
        }
    }

    public static function sortByProducts($sort, $min, $max)
    {



        if($sort == 'new product'){
            return self::sortPriceMinMax($min, $max)->orderBy('date', 'desc')->paginate(5);
        } elseif ($sort == 'popular') {
            return self::sortPriceMinMax($min, $max)->orderBy('views', 'desc')->paginate(5);
        } elseif($sort == 'cheap') {
            return self::orderBy('price')->paginate(5);
        } elseif($sort == 'expensive') {
            return self::orderBy('price', 'desc')->paginate(5);
        }

    }


    public static function sortPriceMinMax($min, $max){
        return self::whereBetween('price', [$min, $max]);
    }



    public static function searchProducts($product){
       return self::search($product->search)->paginate(5);
    }

    public static function addToCart($product, $productAttribute){
     return Cart::add(
         [
             'id'      => $product->id,
             'name'    => $product->name,
             'qty'     => 1,
             'price'   => $product->price,
             'options' => ['attributes' => $productAttribute]
         ])->associate('App\Models\Product');
    }

    public static function duplicateProduct($product)
    {
       return Cart::search(function ($cartItem, $rowId) use($product) {
            return $cartItem->id === $product->id;
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
            'amount'     => Coupon::getCouponDiscount(),
            'currency'   => 'USD',
            'source'     => $token,
            'description'   => 'Order',
            'receipt_email' => $email,
            'metadata'   => [
                'contents' => $contents,
                'quantity' => Cart::content()->count(),
            ],
        ]);
    }

    public static function  decreaseQuantities()
    {
        $product = Product::findOrFail(self::getProductInCart()->id);
        $product->update(['quantity' => $product->quantity - self::getProductInCart()->qty]);
    }

    public static function  productsAreNoLongerAvailable(){
        $product = Product::findOrFail(self::getProductInCart()->id);
        $productInCart = self::getProductInCart()->qty;
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

    public static function orderProductOptions()
    {
        foreach (Product::getProductInCart()->options->attributes as $attribute){
            $data[] =
                [
                    'key'  =>$attribute['attributeName'],
                    'value'=>$attribute['attributeValue']
                ];
        }
        return $data;
    }

    public function setPropertiesAttribute($value)
    {
        $properties = [];
        foreach ($value as $array_item) {
            if (!is_null($array_item['key'])) {
                $properties[] = $array_item;
            }
        }
        $this->attributes['properties'] = json_encode($properties);
    }

    public  function addTagsId($tagId)
    {
        $this->tags()->sync($tagId);
    }

    public function hasTag($tagId)
    {
        $tags = $this->tags()->pluck('tags.id');
        return $tags->contains($tagId);
    }



}
