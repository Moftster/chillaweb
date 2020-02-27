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
            <h4 class="display-4">Custom websites from £299</h4>
            <hr class="my-4">
            <p class="lead">Quality design | Advanced development | UK studio</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Pricing</a>
            <a class="btn btn-outline-primary btn-lg" href="/portfolio" role="button">Portfolio</a>
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/server-woman-bw.png') }}" class="img-responsive fit-image" alt="Woman coding">
        </div>
    </div>
</div>

<br>
<br>

<div class="row section">

    <div class="col-md-5">
        <img src="{{ asset('img/fullstack-bw.png') }}" class="img-responsive fit-image" alt="Full stack man">
    </div>
    <div class="col-md-7">
        <h3>What you get with ChillaWeb</h3>
        <hr class="my-4">
        <p class="h5"><strong>Quick and straightforward process</strong></p>
        <p>Your new website can be up and running in as little as a few days with our simple, streamlined processes.</p>
        <hr class="my-4">
        <p class="h5"><strong>Focus on your project</strong></p>
        <p>You will have a single point of contact whose focus will be solely on delivering your project.</p>
        <hr class="my-4">
        <p class="h5"><strong>Affordable pricing</strong></p>
        <p>Our packages are designed for individuals, startups and small busineses with prices from £299.</p>
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
        <a href="http://www.pioneerproperty.uk/" target="_blank" class="text-dark text-center"><div class="card-header">
            www.pioneerproperty.uk
        </div></a>
        <img class="card-img-top" src="{{ asset('img/pioneer-fnl2.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Pioneer Property Management</h5>
          <p class="card-text">Professional corporate site showcasing letting and property management services.</p>
        </div>

        <div class="card-body text-center">
            <a href="http://www.pioneerproperty.uk/" class="btn btn-outline-secondary">View project</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">

      <div class="card card-home" style="">
        
        <a href="http://lowtono.co/" target="_blank" class="text-dark">
            <div class="card-header text-center">www.lowtono.co
          </div></a>
        <img class="card-img-top" src="{{ asset('img/lowtono-fnl.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Low To No</h5>
          <p class="card-text">Conetent Managment System and review site for low alcohol and alchohol-free beverages.</p>
        </div>

        <div class="card-body text-center">
            <a href="http://lowtono.co/" class="btn btn-outline-secondary">View project</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 card-home">
      <div class="card" style="">
        <a href="https://newtodo.today/" target="_blank" class="text-dark text-center"><div class="card-header">
                www.newtodo.today
        </div></a>
        <img class="card-img-top" src="{{ asset('img/newtodo-fnl.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">New To Do</h5>
          <p class="card-text">To do list and task management application focussing users on immediate priorities.</p>
        </div>
        <div class="text-center card-body">
          <a href="https://newtodo.today/" class="btn btn-outline-secondary">View project</a>

        </div>
      </div>
    </div>
</div>

<br>

<div class="text-center">
    <a href="/portfolio" class="btn btn-primary btn-lg">View full portfolio</a>
</div>
<br>
<hr>
<br>
<br>

    <div class="card section text-center">
        <div class="card-body">
          <h5 class="card-title">Get your project off the ground</h5>
          <p class="card-text">Click below for a free quote for the cost of turning your idea into reality.</p>
          <a href="#" class="btn btn-success btn-lg">Get a free quote</a>
          
        </div>
      </div>

      <br>
      <br>


@endsection


@section('footer')
    @parent
@endsection