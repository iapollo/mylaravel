<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    //
    public function index()
    {
        // $posts = DB::table('posts')->get();
        $posts = Post::all();
        
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
    	return $post;
    }

    // public function show($postId)
    // {
    // 	$post = DB::table('posts')->find($postId);
    // 	// $post = Post::find($postId);
    // 	return $post;
    // }
}
