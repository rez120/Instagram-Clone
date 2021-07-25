@extends('layouts.app')

@section('content')
<div class="container"> 

    <img src="/storage/{{$post->image}}" alt="" style="width: 400px; height:400px;">
    <br>
    <img src="{{$post->user->profile->profileImage()}}" alt="" style="height: 100px; width:100px;">
    <h5><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></h5>
    <p>{{$post->caption}}</p>
    <a href="">Follow</a>
</div>
@endsection
