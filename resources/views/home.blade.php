@extends('layouts.app')

@section('content')
<div class="container">
    <div style="display: grid; grid-template-columns: 30% 70%; gap: 40px; ">
        <div style="width: 200px; height:200px; background-position:center; border-radius: 50%; overflow:hidden; background-image: url(https://images.pexels.com/photos/6534617/pexels-photo-6534617.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="img" style="width :100px; height: 100px; display: block;)"> </div>
        <div style="display: flex; gap: 8px; flex-direction:column">
            <div><span><h1>Title</h1></span> <span></span></div>
            <div style="display: flex; justify-content:space-between; ;"> <span>154 posts</span> <span>23k followers</span> <span>212 following</span></div>
            <div><h4>www.example.com</h4></div>
            <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt error illum a cupiditate corporis vero inventore modi recusandae odit est!</div>
        </div>
    </div>
    <br>
    
    <div style="display: grid; grid-template-columns: 33.33% 33.33% 33.33%; gap: 20px;">
        <div style=" height:300px; background-position:center;  overflow:hidden; background-image: url(https://images.pexels.com/photos/4113340/pexels-photo-4113340.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)" alt="img" style="width :100px; height: 100px; display: block;)"> </div>
        <div style=" height:300px; background-position:center;  overflow:hidden; background-image: url(https://images.pexels.com/photos/3225499/pexels-photo-3225499.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)" alt="img" style="width :100px; height: 100px; display: block;)"> </div>
        <div style=" height:300px; background-position:center;  overflow:hidden; background-image: url(https://images.pexels.com/photos/221063/pexels-photo-221063.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)" alt="img" style="width :100px; height: 100px; display: block;)"> </div>
    </div>
    
</div>
@endsection
