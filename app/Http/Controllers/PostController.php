<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $posts = Post::all();
        return $posts;
    }

    public function store(Request $request) {
        $post = Post::create([
            "title" => $request->title,
            "content" => $request->content,
            "author" => $request->author
        ]);
        return $post;
    }

    public function show($id) {
        $post = Post::find($id);

        if ($post) {
            return $post;
        }

        return "introuvable";
    }
    
    public function update($id) {
        $post = Post::find($id);
        
        if ($post) {
            $post->title = "title two";
            return $post;
        }
        return "introuvable";
        
    }

    public function destroy($id) {
        $post = Post::find($id);

        if ($post) {
            $post->delete();
            return "deleted with seccus";
        }
        return "introuvable";
    }
}
