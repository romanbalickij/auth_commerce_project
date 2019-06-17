<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'product_id', 'parent_id', 'body'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public static function createComments($value)
    {
        $comment =  new static;
        $comment->body = $value->comment_body;
        $comment->user()->associate($value->user());
        $comment->parent_id = $value->parent_id;
        $product = Product::find($value->product_id);
        $product->comments()->save($comment);
    }


}
