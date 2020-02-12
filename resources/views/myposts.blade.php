@extends('layout')

@section('title', 'My Posts')

@section('header')
    @parent
@endsection

@section('content')

<h1>My Posts</h1>
<div>

        @foreach($data as $post)

            {{-- <img src="/uploads/{{ $post->postimage }}" alt=""> --}}
        
            <h1>{{ $post->postname }}</h1>

            {{-- <p>{{ $post->postcontent }}</p> --}}
           
            <a href="posts/{{ $post->id }}/view" class="btn btn-default">View</a>     
            
            <a href="posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a>     
            
            <a href="posts/{{ $post->id }}/delete" class="btn btn-warning">Delete</a>   

        @endforeach

</div>

@endsection

@section('footer')
    @parent
@endsection