@extends('layout')

@section('title', 'Edit Post')

@section('header')
    @parent
@endsection

@section('content')

{{-- @foreach($errors->all() as $e)
<p>{{$e}}</p>
@endforeach --}}

@foreach($data as $post)

<form enctype="multipart/form-data" action="{{url('/update', array($post->id)) }}" method="POST" name="postForm">
    @csrf

    <input type="text" name="title" value="{{ $post->postname }}"> 
    @error('title')   
    <div>{{$message}}</div>
    @enderror
    <br><br>
    <textarea rows="5" name="body">{{ $post->postcontent }}</textarea>
    @error('body')   
    <div>{{$message}}</div>
    @enderror
    <br><br>
    <input type="file" name="image" value="{{ $post->postimage }}">
    @error('image')   
    <div>{{$message}}</div>
    @enderror
    <br><br>
    <button type="submit">Submit</button>
</form>

@endforeach

@endsection

@section('footer')
    @parent
@endsection
