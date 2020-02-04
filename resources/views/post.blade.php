@include('partials/header')

<h1>Post</h1>

{{-- @foreach($errors->all() as $e)
<p>{{$e}}</p>
@endforeach --}}

<form action="blogpostcontroller" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Post title"> 
    @error('title')   
    <div>{{$message}}</div>
    @enderror
    <br><br>
    <textarea placeholder="Enter your post here" rows="5" name="body"></textarea>
    @error('body')   
    <div>{{$message}}</div>
    @enderror
    <br><br>
    <input type="file" class="form-control" name="image" placeholder="Image">
    @error('image')   
    <div>{{$message}}</div>
    @enderror
    <br><br>
    <button type="submit">Submit</button>
</form>

@include('partials/footer')