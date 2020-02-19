@extends('layout')

@section('title', 'Home')

@section('header')
    @parent
@endsection

@section('content')

<div class="jumbotron">
    <div class="row">
        <div class="col-md-6">
            <p class="lead">UK Website Design and Development</p>
            <h4 class="display-4">Custom websites from £999</h4>
            <hr class="my-4">
            <p class="lead">Quality design   |   UK-based studio</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Pricing</a>
            <a class="btn btn-outline-primary btn-lg" href="#" role="button">Portfolio</a>
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/server-woman.png') }}" class="img-responsive fit-image" alt="Woman coding">
        </div>
    </div>
</div>

@endsection


@section('footer')
    @parent
@endsection