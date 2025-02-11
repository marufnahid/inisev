<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Web;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function store(Request $request, Web $web)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'web_id' => 'required|exists:webs,id',
        ]);

//        dd($request->all());

        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->web_id = $request->input('web_id');
        $post->save();

        return response()->json("Post Created to inisev test" . $post, 201);
    }
}
