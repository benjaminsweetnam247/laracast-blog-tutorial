<?php

namespace Blog\Http\Controllers;

use Blog\Comment;
use Blog\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post)
    {

    	$this->validate(request(), ['body' => 'required|min:2']);

    	$post->addComment(request('body'));

    	return back();
    }
}
