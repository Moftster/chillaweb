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

            <h5 class="card-title">Low To No</h5>

            <p class="card-text">Low alcohol and alchohol-free beverages review site. Features include:</p>

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

          <h5 class="card-title">Pioneer Property</h5>

          <p class="card-text">Letting and property management company brochure site. Features include:</p>

          <ul class="list-group list-group-flush">
              <li class="list-group-item">Integration with Google Maps API</li>
              <li class="list-group-item">Responsive design across devices</li>
              <li class="list-group-item">Logo design</li>
              <li class="list-group-item">Graphic design and illustraton</li>
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

    <div class="col-md-6 card-home">
      <div class="card" style="">
        <a href="https://newtodo.today/" target="_blank" class="text-dark"><div class="card-header">
                newtodo.today
        </div></a>
        <img class="card-img-top" src="{{ asset('img/newtodo-fnl.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Bespoke layout using CSS Grid</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
        </div>
        <div class="text-center card-body">
          <a href="https://newtodo.today/" class="btn btn-outline-secondary">View project</a>

        </div>
      </div>
    </div>
    <div class="col-md-6 card-home">
      <div class="card" style="">
        <a href="https://newtodo.today/" target="_blank" class="text-dark"><div class="card-header">
                newtodo.today
        </div></a>
        <img class="card-img-top" src="{{ asset('img/politibot-fnl.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">New To Do</h5>
          <p class="card-text">New To Do is a simple to do list focussing users on getting things done here and now.</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Clean design</li>
            <li class="list-group-item">Sound board integration</li>
            <li class="list-group-item">Responsive web design</li>
          </ul>
        </div>
        <div class="text-center card-body">
          <a href="https://newtodo.today/" class="btn btn-outline-secondary">View project</a>

        </div>
      </div>
    </div>
</div>

@endsection


@section('footer')
    @parent
@endsection