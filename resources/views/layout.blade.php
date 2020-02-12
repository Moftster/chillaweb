<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ChillaWeb - @yield('title')</title>
</head>
<body>

@section('header')
<h5>This is the header</h5>
<a href="/">Home</a>
<a href="/services">Services</a>
<a href="/projects">Projects</a>
<a href="/about">About</a>
<a href="/contact">Contact</a>
<a href="/blog">Blog</a>
<a href="/post">Post</a>
<a href="/myposts">My Posts</a>

@show

<div class="container">
    @yield('content')
</div>

@section('footer')
<h5>This is the footer</h5> 
</body>
</html>
@show