@extends('layouts.app')

@section('content')
<div class="container"> 
    <h1 style="text-align: center">Add New Post</h1>
    <br>
    <form action="/p" enctype="multipart/form-data" method="post" >
        @csrf
        <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label text-md-right">Caption</label>
    
            <div class="col-md-6">
                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>
    
                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
    
            <div class="col-md-6">
                <input id="image" type="file" class="form-control-file" name="image" required  autofocus>
    
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-4 col-form-label text-md-right">Submition</label>
            <div class="col-md-6"> <button class="btn btn-primary">Add New Post</button></div>
           
        </div>
        
    </form>
    
</div>
@endsection
