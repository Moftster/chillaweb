@extends('layout')

@section('title', 'Blog')

@section('header')
    @parent
@endsection

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="container">
            <h2 class="display-4">The ChillaWeb Blog</h2>
            <p class="h3 text-justify">Thoughts, opinion, advice and guidance on all things web design and development.</p>
            </div>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('icons/Chillalogo4.png') }}" class="img-responsive blog-header-image" alt="ChillaWeb logo">
        </div>
    </div>
    </div>

    <div class="container">
    <div class="row">
        @foreach($data as $post)

        <br>
        
        <div class="blog-posts col-lg-4">

        <h2 class="text-center">{{ $post->postname }}</h2>

        <div class="img-center">

        <img class="blog-post-img" style="" src="/uploads/{{ $post->postimage }}" alt="">

        </div>
    
        <p>{{ $post->created_at->format('d M Y') }}</p>

        <p class="lead">{{ substr($post->postcontent, 0, 150) }}...</p>

        <p class="text-center"><a href='{{url("/view/{$post->id}")}}' class="btn btn-primary">Read post</a></p>
        
        </div>

        <br>

        @endforeach

    </div>
</div>

@endsection


@section('footer')
    @parent
@endsection