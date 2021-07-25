@extends('layouts.app')

@section('content')
<div class="container">
    <div style="display: grid; grid-template-columns: 30% 70%; gap: 40px; ">
        <div style="width: 200px; height:200px; background-position:center; border-radius: 50%; overflow:hidden; background-image: url({{$user->profile->profileImage()}}); background-size:cover;"> </div>
        <div style="display: flex; gap: 8px; flex-direction:column">
            <div><span><h1>{{$user->profile->title ?? title}}</h1></span> <span></span></div>

            @can('update', $user->profile)
                <div><a href="/p/create">Add new Post</a></div>
                <div> <a href="/profile/{{$user->id}}/edit">Edit Profile</a></div>
            @endcan

            <div style="display: flex; justify-content:space-between; ;"> <span>{{$user->posts->count()}} posts</span> <span>23k followers</span> <span>212 following</span></div>
            <div><h4>{{$user->profile->url ?? "www.example.com"}} </h4></div>
            <div>{{$user->profile->description}}</div>
        </div>
    </div>
    <br>
    
    <div style="display: grid; grid-template-columns: 33.33% 33.33% 33.33%; gap: 20px;">

        @foreach ($user->posts as $post)
        <a href="/p/{{$post->id}}"><div style=" height:300px; background-position:center;  overflow:hidden; background-size:cover; background-repeat: no-repeat; background-image: url('/storage/{{$post->image}}')"></div> </a>
         
        @endforeach
        
       
    </div>
    
</div>
@endsection
