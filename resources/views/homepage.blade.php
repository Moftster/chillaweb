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
            <p class="lead">Quality design | Advanced development | UK studio</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Pricing</a>
            <a class="btn btn-outline-primary btn-lg" href="#" role="button">Portfolio</a>
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/server-woman.png') }}" class="img-responsive fit-image" alt="Woman coding">
        </div>
    </div>
</div>

<br>
<br>

<div class="row section">

    <div class="col-md-5">
        <img src="{{ asset('img/fullstack2.png') }}" class="img-responsive fit-image" alt="Full stack man">
    </div>
    <div class="col-md-7">
        <h3>What you get with ChillaWeb</h3>
        <hr class="my-4">
        <p class="h5"><strong>Quick and straightforward process</strong></p>
        <p>Your new website can be up and running in as little as a few days with our simple, streamlined process.</p>
        <hr class="my-4">
        <p class="h5"><strong>Focus on your project</strong></p>
        <p>You will have a single point of contact whose focus will be solely on delivering your project.</p>
        <hr class="my-4">
        <p class="h5"><strong>Affordable pricing</strong></p>
        <p>Our packages are designed for small busineses and startups with prices from £999.</p>
        <hr class="my-4">
    </div>
</div>

<br>
<br>

<div class="text-center">
<h3>Portfolio</h3>
</div>
<br>
<div class="row section">
    <div class="col-md-4">
    <div class="card card-home" style="">
        <div class="card-header">
            Featured
        </div>
        <img class="card-img-top home-portfolio-img" src="{{ asset('img/screens.png') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>

        <div class="card-body text-center">
            <button type="button" class="btn btn-outline-secondary">View project</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">

      <div class="card card-home" style="">
        <div class="card-header">Lowtono.co
          </div>
        <img class="card-img-top home-portfolio-img" src="{{ asset('img/screens.png') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>

        <div class="card-body text-center">
            <button type="button" class="btn btn-outline-secondary">View project</button>
        </div>
      </div>
    </div>
    <div class="col-md-4 card-home">
      <div class="card" style="">
        <div class="card-header">
            <h5 class="card-title">www.lowtono.co</h5>
          </div>
        <img class="card-img-top home-portfolio-img" src="{{ asset('img/screens.png') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="text-center card-body">
          <button type="button" class="btn btn-outline-secondary">View project</button>
        </div>
      </div>
    </div>
</div>

<br>

<div class="text-center">
    <button type="button" class="btn btn-primary btn-lg">View full portfolio</button>
</div>
<br>
<hr>
<br>
<br>

    <div class="card section text-center">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-success btn-lg">Get a free quote</a>
          
        </div>
      </div>


@endsection


@section('footer')
    @parent
@endsection