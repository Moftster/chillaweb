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

<form action="/sendemail">
    <div class="form-group row">
        <div class="col-md-6">
            <label for="nameInput">Name</label>
            <input type="text" class="form-control" id="nameInput" name="contactName" placeholder="Joe Bloggs">
        </div>
        <div class="col-md-6">
            <label for="emailInput">Email</label>
            <input type="email" class="form-control" id="emailInput" name="contactEmail" placeholder="name@example.com">
        </div>
    </div>
    <div class="form-group row">
       <div class="col-md-12">
            <label for="messageInput">Message</label>
            <textarea class="form-control" id="messageInput" rows="3" name="contactMessage"></textarea>
       </div>
    </div>

    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>


  </form>

@endsection


@section('footer')
    @parent
@endsection