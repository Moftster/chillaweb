@include('partials/header')

<h1>Post</h1>

<form action="blogpostcontroller" method="POST">
    <input type="text" name="post-title" placeholder="Post title">    
    @csrf
    <br><br>
    <input type="text" name="post-body" placeholder="Post body">    
    <br><br>
    <button type="submit">Submit</button>
</form>

@include('partials/footer')