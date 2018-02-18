<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public function getPosts()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function newPost()
    {
        $post = new Post();
        $post->author = Request::get('author');
        $post->title = Request::get('tilte');
        $post->text = Request::get('text');
        $post->category = Request::get('category');
        $post->save();
        return response()->json($post, 201);
    }


    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public
    function getPost($id)
    {
        $post = Post::where('id', '=', $id)->first();
        return response()->json($post);
    }
}
