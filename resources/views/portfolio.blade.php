@extends('layout')

@section('title', 'Portfolio')

@section('header')
    @parent
@endsection

@section('content')

<br>

<div class="text-center">
    <h5>RECENT PROJECTS</h5>
    <h1>ChillaWeb Recent Projects Portfolio</h1>
</div>

<br><br>

<div class="row section">
    <div class="col-md-6">
    <div class="card card-home" style="">
      <div class="card-header text-center">
        <a class="text-dark" href="http://lowtono.co/">www.lowtono.co</a>
        </div>
        <img class="card-img-top" src="{{ asset('img/lowtono-fnl.jpg') }}" alt="Card image cap">
        <div class="card-body">

            <h5 class="card-title text-center">Low To No</h5>

            <p class="card-text text-center">Low alcohol and alchohol-free beverage review site. Features include:</p>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">User registration and login</li>
                <li class="list-group-item">Content Management System (CMS)</li>
                <li class="list-group-item">Responsive design for mobile and tablet</li>
                <li class="list-group-item">Product search functionality</li>
              </ul>
        </div>

        <div class="card-body text-center">
            <a href="http://lowtono.co/" class="btn btn-outline-secondary">View project</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">

      <div class="card card-home" style="">
              <div class="card-header text-center">
                <a class="text-dark" href="http://www.pioneerproperty.uk/">www.pioneerproperty.uk</a>
                </div>
        <img class="card-img-top" src="{{ asset('img/pioneer-fnl2.jpg') }}" alt="Card image cap">
        <div class="card-body">

          <h5 class="card-title text-center">Pioneer Property</h5>

          <p class="card-text text-center">Letting and property management company brochure site. Features include:</p>

          <ul class="list-group list-group-flush">
              <li class="list-group-item">Integration with Google Maps API</li>
              <li class="list-group-item">Responsive design across devices</li>
              <li class="list-group-item">Graphic design and illustraton</li>
              <li class="list-group-item">Logo design</li>
            </ul>
      </div>

        <div class="card-body text-center">
            <a href="http://www.pioneerproperty.uk/" class="btn btn-outline-secondary">View project</a>
        </div>
      </div>
      </div>
    </div>

<br><br>

<div class="row section">

    <div class="col-md-6">
      <div class="card card-home" style="">
              <div class="card-header text-center">
                <a class="text-dark" href="https://newtodo.today/">www.newtodo.today</a>
                </div>
                <img class="card-img-top" src="{{ asset('img/newtodo-fnl.jpg') }}" alt="Card image cap">
                <div class="card-body">

          <h5 class="card-title text-center">New To Do</h5>

          <p class="card-text text-center">To do list and task managment application. Features include:</p>

          <ul class="list-group list-group-flush">
              <li class="list-group-item">OAuth login with Google API</li>
              <li class="list-group-item">SSL security authentication</li>
              <li class="list-group-item">Custom layout using CSS Grid</li>
              <li class="list-group-item">Responsive design</li>
            </ul>
      </div>

        <div class="card-body text-center">
            <a href="https://newtodo.today/" class="btn btn-outline-secondary">View project</a>
        </div>
      </div>
  </div>

  <div class="col-md-6">
    <div class="card card-home" style="">
            <div class="card-header text-center">
              <a class="text-dark" href="http://politi-bot.com/">www.pioneerproperty.uk</a>
              </div>
              <img class="card-img-top" src="{{ asset('img/politibot-fnl.jpg') }}" alt="Card image cap">
              <div class="card-body">

        <h5 class="card-title text-center">Politi-Bot</h5>

        <p class="card-text text-center">Soundboard application providing stock political responses. Features include:</p>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">Audio integration using JavaScript</li>
            <li class="list-group-item">Clean custom graphic design and illustraton</li>
            <li class="list-group-item">Responsive across mobile and tablet</li>
            <li class="list-group-item">Logo design</li>

          </ul>
    </div>

      <div class="card-body text-center">
          <a href="http://politi-bot.com/" class="btn btn-outline-secondary">View project</a>
      </div>
    </div>
</div>
  
</div>
    
@endsection


@section('footer')
    @parent
@endsection