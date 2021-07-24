@extends('layouts.app')

@section('content')
<div class="container">
    <div style="display: grid; grid-template-columns: 30% 70%; gap: 40px; ">
        <div style="width: 200px; height:200px; background-position:center; border-radius: 50%; overflow:hidden; background-image: url(https://images.pexels.com/photos/6534617/pexels-photo-6534617.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="img" style="width :100px; height: 100px; display: block;)"> </div>
        <div style="display: flex; gap: 8px; flex-direction:column">
            <div><span><h1>{{$user->profile->title}}</h1></span> <span></span></div>
            <div><a href="/p/create">Add new Post</a></div>
            <div style="display: flex; justify-content:space-between; ;"> <span>{{$user->posts->count()}} posts</span> <span>23k followers</span> <span>212 following</span></div>
            <div><h4>{{$user->profile->url ?? "www.example.com"}} </h4></div>
            <div>{{$user->profile->description}}</div>
        </div>
    </div>
    <br>
    
    <div style="display: grid; grid-template-columns: 33.33% 33.33% 33.33%; gap: 20px;">

        @foreach ($user->posts as $post)
          <div style=" height:300px; background-position:center;  overflow:hidden; background-size:cover; background-repeat: no-repeat;
          background-image: url('/storage/{{$post->image}}')"></div>  
        @endforeach
        
       
    </div>
    
</div>
@endsection
