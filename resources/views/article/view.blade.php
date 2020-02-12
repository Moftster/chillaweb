@extends('layout')

@section('title', 'Blog')

@section('header')
    @parent
@endsection

@section('content')

@foreach($data as $post)

    <h1>{{ $post->postname }}</h1>

    <img style="max-width: 300px;" src="/uploads/{{ $post->postimage }}" alt="">

    <p>{{ $post->created_at->format('d M Y') }}</p>

    <p>{{ $post->postcontent }}</p>

<br>

@endforeach

@endsection

@section('footer')
    @parent
@endsection
