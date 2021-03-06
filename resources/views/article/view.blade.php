@extends('layout')

@section('title', 'Blog')

@section('header')
    @parent
@endsection

@section('content')

@foreach($data as $post)


    {{-- <h2 class="display-4">{{ $post->postname }}</h2> --}}

    {{-- <img style="max-width: 300px;" src="/uploads/{{ $post->postimage }}" alt="">

    <p>{{ $post->created_at->format('d M Y') }}</p>

    {{!! nl2br(e($post->postcontent)) !!}} --}}

    <div class="row justify-content-md-center">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $post->postname }}</h1>

        <!-- Author -->
        <p class="lead">
          by {{ $post->user_name }}
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{ $post->created_at->format('d M Y') }}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="/uploads/{{ $post->postimage }}" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead blog-text"> {{!! nl2br(e($post->postcontent)) !!}}</p>

@endforeach

@endsection

@section('footer')
    @parent
@endsection
