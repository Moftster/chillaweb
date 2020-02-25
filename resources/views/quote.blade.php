@extends('layout')

@section('title', 'Post')

@section('header')
    @parent
@endsection

@section('content')

<br>

<div class="text-center">
    <h5>GET A FREE QUOTE</h5>
    <h1>Complete the questions below!</h1>
</div>

<br>

<div></div>



<form action="">
    <h5 class="text-center">What do you need your webiste to do?</h5>
    <p class="text-center">(Select all that apply)</p>
<div class="row text-center icons-center">
    <ul>
        <li><input type="checkbox" id="cb-sales-marketing" />
          <label for="cb-sales-marketing"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Sales & Marketing </div>
        </li>
        <li><input type="checkbox" id="cb-information-source" />
          <label for="cb-information-source"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Information source</div>
        </li>
        <li><input type="checkbox" id="cb-lead-generation" />
          <label for="cb-lead-generation"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Lead generation</div>
        </li>
        <li><input type="checkbox" id="cb-e-commerce" />
          <label for="cb-e-commerce"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">E-commerce</div>
        </li>
        <li><input type="checkbox" id="cb-bookings-reservations" />
          <label for="cb-bookings-reservations"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Bookings & Reservations</div>
        </li>
    </ul>
</div>



    <br><br>
    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
</form>

@endsection


@section('footer')
    @parent
@endsection
