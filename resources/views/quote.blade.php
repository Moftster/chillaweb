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
<br>
<br>

<form action="/" id="quote-form">
    <h5 class="text-center"><strong>What is the purpose of your site?</strong></h5>
    <p class="text-center">(Select all that apply)</p>
<div class="row text-center icons-center">
    <ul>
        <li><input type="checkbox" name="site-purpose" value="sales-marketing" id="cb-sales-marketing" />
          <label for="cb-sales-marketing"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Sales & Marketing </div>
        </li>
        <li><input type="checkbox" name="site-purpose" value="information-source" id="cb-information-source" />
          <label for="cb-information-source"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Information source</div>
        </li>
        <li><input type="checkbox" name="site-purpose" value="lead-generation" id="cb-lead-generation" />
          <label for="cb-lead-generation"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Lead generation</div>
        </li>
        <li><input type="checkbox" name="site-purpose" value="e-commerce" id="cb-e-commerce" />
          <label for="cb-e-commerce"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">E-commerce</div>
        </li>
        <li><input type="checkbox" name="site-purpose" value="bookings-reservations" id="cb-bookings-reservations" />
          <label for="cb-bookings-reservations"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Bookings & Reservations</div>
        </li>
    </ul>
</div>

<br><br><br>

<h5 class="text-center"><strong>What functionality to you require?</strong></h5>
<p class="text-center">(Select all that apply)</p>
<div class="row text-center icons-center">
<ul>
    <li><input type="checkbox" name="site-functionality" value="sales-marketing" id="cb-login-registration" />
      <label for="cb-login-registration"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">User login & registration</div>
    </li>
    <li><input type="checkbox" name="site-functionality" value="sales-marketing" id="cb-shopping-cart" />
      <label for="cb-shopping-cart"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Shopping cart</div>
    </li>
    <li><input type="checkbox" name="site-functionality" value="sales-marketing" id="cb-live-chat" />
      <label for="cb-live-chat"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Live chat</div>
    </li>
    <li><input type="checkbox" name="site-functionality" value="sales-marketing" id="cb-blog" />
      <label for="cb-blog"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Blog</div>
    </li>
    <li><input type="checkbox" name="site-functionality" value="sales-marketing" id="cb-forum" />
      <label for="cb-forum"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Forum</div>
    </li>
    <li><input type="checkbox" name="site-functionality" value="sales-marketing" id="cb-online-bookings" />
      <label for="cb-online-bookings"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Online bookings</div>
    </li>
    <li><input type="checkbox" name="site-functionality" value="sales-marketing" id="cb-calendar" />
      <label for="cb-calendar"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Calendar</div>
    </li>
</ul>
</div>



    <br><br>
    <button class="btn btn-primary btn-lg btn-block" type="submit" onclick="calculateWebsitePrice()">Submit</button>
</form>

@endsection

<script src="{{ asset('js/quote.js') }}"><script>

@section('footer')
    @parent
@endsection
