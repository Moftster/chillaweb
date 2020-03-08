@extends('layout')

@section('title', 'Blog')

@section('header')
    @parent
@endsection

@section('content')

@foreach($data as $post)

    <br>

    <h2 class="display-4">{{ $post->postname }}</h2>

    <img style="max-width: 300px;" src="/uploads/{{ $post->postimage }}" alt="">

    <p>{{ $post->created_at->format('d M Y') }}</p>

    {{!! nl2br(e($post->postcontent)) !!}}

<br>

@endforeach

@endsection

@section('footer')
    @parent
@endsection
