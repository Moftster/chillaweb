@extends('layout')

@section('title', 'Blog')

@section('header')
    @parent
@endsection

@section('content')

<h1>This is the blog page</h1>
<div>

        @foreach($data as $post)

            <img style="max-height: 200px;" src="/uploads/{{ $post->postimage }}" alt="">
        
            <h1>{{ $post->postname }}</h1>

            <p>{{ $post->created_at->format('d M Y') }}</p>

            <p>{{ substr($post->postcontent, 0, 150) }}...</p>

            <a href='{{url("/view/{$post->id}")}}' class="btn btn-success">Read post</a>     

            <br>

            @endforeach

</div>

@endsection


@section('footer')
    @parent
@endsection