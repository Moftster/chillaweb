@extends('layout')

@section('title', 'Home')

@section('header')
    @parent
@endsection

@section('content')

<h1>Login</h1>

<form action="userlogin" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username">    
    @error('username')
    <div>{{$message}}</div>
    @enderror
    <br><br>
    <input type="text" name="email" placeholder="Email">  
    @error('email')
    <div>{{$message}}</div>
    @enderror  
    <br><br>
    <button type="submit">Submit</button>
</form>

@endsection

@section('footer')
    @parent
@endsection

