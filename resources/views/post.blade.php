@include('partials/header')

<h1>Post</h1>

<form action="blogpostcontroller" method="POST">
    @csrf
    <input type="text" name="post-title" placeholder="Post title">    
    <br><br>
    <input type="text" name="post-body" placeholder="Post body">    
    <br><br>
    <input type="text" name="post-email" placeholder="Email">    
    <br><br>
    <button type="submit">Submit</button>
</form>

@include('partials/footer')