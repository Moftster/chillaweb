@include('partials/header')

<h1>Login</h1>

@foreach($errors->all() as $e)
<p>{{$e}}</p>
@endforeach

<form action="userlogin" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username">    
    <br><br>
    <input type="text" name="email" placeholder="Email">    
    <br><br>
    <button type="submit">Submit</button>
</form>

@include('partials/footer')