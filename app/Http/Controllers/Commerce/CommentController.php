<?php

namespace App\Http\Controllers\Commerce;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $comment->parent_id = $request->get('parent_id');
        $product = Product::find($request->get('product_id'));
        $product->comments()->save($comment);

        return back();

    }
}
