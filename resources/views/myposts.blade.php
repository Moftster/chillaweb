@extends('layout')

@section('title', 'My Posts')

@section('header')
    @parent
@endsection

@section('content')

<h1>My Posts</h1>
<div>

        @foreach($data as $post)
       
            <h1>{{ $post->postname }}</h1>

            <a href='{{url("/view/{$post->id}")}}' class="btn btn-primary">View</a>     

            <a href='{{url("/edit/{$post->id}")}}' class="btn btn-warning">Edit</a>     

            <a href='{{url("/delete/{$post->id}")}}' class="btn btn-danger">Delete</a>     

        @endforeach

</div>

@endsection

@section('footer')
    @parent
@endsection