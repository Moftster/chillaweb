@extends('layout')

@section('title', 'Post')

@section('header')
    @parent
@endsection

@section('content')

<br>

<div class="text-center">
    <h1>Create a blog post</h1>
</div>

<br>
<form enctype="multipart/form-data" action="upload" method="POST" name="postForm">
    <div class="col-md-10">
    <div class="form-group">
        @csrf
        <input class="form-control" type="text" name="title" placeholder="Blog post title"> 
        @error('title')   
        <div>{{$message}}</div>
        @enderror
    </div>
        <br>
    <div class="form-group">
        <textarea class="form-control" placeholder="Blog post body" rows="5" name="body"></textarea>
        @error('body')   
        <div>{{$message}}</div>
        @enderror
    </div>
        <br>
    <div class="form-group">
        <input class="form-control-file" type="file" name="image" placeholder="Image">
        @error('image')   
        <div>{{$message}}</div>
        @enderror
    </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection


@section('footer')
    @parent
@endsection
