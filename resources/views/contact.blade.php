@extends('layout')

@section('title', 'Contact')

@section('header')
    @parent
@endsection

@section('content')

<br>

<div class="text-center">
    <h5>Need a new website?</h5>
    <h1>Send us a message!</h1>
</div>

<form>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="nameInput">Name</label>
            <input type="text" class="form-control" id="nameInput" placeholder="Joe Bloggs">
        </div>
        <div class="col-md-6">
            <label for="emailInput">Email</label>
            <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
        </div>
    </div>
    <div class="form-group row">
       <div class="col-md-12">
            <label for="messageInput">Message</label>
            <textarea class="form-control" id="messageInput" rows="3"></textarea>
       </div>
    </div>
  </form>

@endsection


@section('footer')
    @parent
@endsection