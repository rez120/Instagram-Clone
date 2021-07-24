<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {   
        // make this class accessable only to authened user
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view("/posts/create");
    }

    public function store()
    {   

        $data = request()->validate([
            "caption" => "required",
            "image" => "required|image"
        ]);


        // give me the auth user, go to its posts and create a data
        

        $imagePath = request('image')->store('/uploads','public');
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image'=> $imagePath
        ]);
        // \App\Post::create($data);
        // dd(request()->all());

        return redirect('/profile/'. auth()->user()->id );
    }
}