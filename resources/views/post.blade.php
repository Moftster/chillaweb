@extends('layout')

@section('title', 'Post')

@section('header')
    @parent
@endsection

@section('content')

{{-- @foreach($errors->all() as $e)
<p>{{$e}}</p>
@endforeach --}}

<form enctype="multipart/form-data" action="upload" method="POST" name="postForm">
    @csrf
    <input type="text" name="title" placeholder="Post title"> 
    @error('title')   
    <div>{{$message}}</div>
    @enderror
    <br><br>
    <textarea placeholder="Enter your post here" rows="5" name="body"></textarea>
    @error('body')   
    <div>{{$message}}</div>
    @enderror
    <br><br>
    <input type="file" name="image" placeholder="Image">
    @error('image')   
    <div>{{$message}}</div>
    @enderror
    <br><br>
    <button type="submit">Submit</button>
</form>

@endsection


@section('footer')
    @parent
@endsection
