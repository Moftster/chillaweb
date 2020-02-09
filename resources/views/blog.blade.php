@extends('layout')

@section('title', 'Blog')

@section('header')
    @parent
@endsection

@section('content')

<h1>This is the blog page</h1>
<div>

        @foreach($data as $post)

<img src="/uploads/{{ $post->postimage }}" alt="">
        
            <h1>{{ $post->postname }}</h1>

            <p>{{ $post->postcontent }}</p>

        @endforeach
    </ul>

</div>

@endsection


@section('footer')
    @parent
@endsection