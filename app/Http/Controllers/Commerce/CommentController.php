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
        Comment::createComments($request);
        return back();

    }
}
