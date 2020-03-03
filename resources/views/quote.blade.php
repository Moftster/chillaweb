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
<form enctype="multipart/form-data" action="quotesummary" id="quote-form" method="POST" name="quoteForm">
  @csrf  
  <h5 class="text-center"><strong>What is the purpose of your site?</strong></h5>
    <p class="text-center">(Select all that apply)</p>
<div class="row text-center icons-center">
  <div class="col-md-8">
    <ul>
        <li><input type="checkbox" name="site_purpose[]" value="sales-marketing" id="cb-sales-marketing" onclick="calculateSalesCost()" />
          <label for="cb-sales-marketing"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Sales & Marketing </div>
        </li>
        <li><input type="checkbox" name="site_purpose[]" value="information-source" id="cb-information-source" />
          <label for="cb-information-source"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Information source</div>
        </li>
        <li><input type="checkbox" name="site_purpose[]" value="lead-generation" id="cb-lead-generation"/>
          <label for="cb-lead-generation"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Lead generation</div>
        </li>
        <li><input class="cb" type="checkbox" name="site_purpose[]" value="e-commerce" id="cb-e-commerce" onclick="calculateECommerceCost()"/>
          <label for="cb-e-commerce"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">E-commerce</div>
        </li>
        <li><input class="booking" type="checkbox" name="site_purpose[]" value="bookings-reservations" id="cb-bookings-reservations" onclick="calculateBookingsReservationsCost()" />
          <label for="cb-bookings-reservations"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Bookings & Reservations</div>
        </li>
        <li><input type="checkbox" name="site_purpose[]" value="social-network" id="cb-social-network" onclick="calculateSocialNetworkCost()" />
          <label for="cb-social-network"><img src="{{ asset('icons/showcase2.png') }}" /></label>
          <div class="label-text text-center">Social network</div>
        </li>
    </ul>
  </div>
</div>

<br><br><br>

<h5 class="text-center"><strong>What functionality to you require?</strong></h5>
<p class="text-center">(Select all that apply)</p>
<div class="row text-center icons-center">
  <div class="col-md-8">
<ul>
    <li><input type="checkbox" name="site_functionality[]" value="login-registration" id="cb-login-registration" onclick="calculateLoginRegistrationCost()"/>
      <label for="cb-login-registration"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">User login & registration</div>
    </li>
    <li><input class="cb" type="checkbox" name="site_functionality[]" value="shopping-cart" id="cb-shopping-cart" onclick="calculateShoppingCartCost()"/>
      <label for="cb-shopping-cart"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Shopping cart</div>
    </li>
    <li><input type="checkbox" name="site_functionality[]" value="live-chat" id="cb-live-chat" onclick="calculateChatCost()"/>
      <label for="cb-live-chat"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Live chat</div>
    </li>
    <li><input type="checkbox" name="site_functionality[]" value="blog" id="cb-blog" onclick="calculateBlogCost()"/>
      <label for="cb-blog"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Blog</div>
    </li>
    <li><input type="checkbox" name="site_functionality[]" value="forum" id="cb-forum" onclick="calculateForumCost()"/>
      <label for="cb-forum"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Forum</div>
    </li>
    <li><input class="booking" type="checkbox" name="site_functionality[]" value="online-booking" id="cb-online-bookings" onclick="calculateOnlineBookingsCost()"/>
      <label for="cb-online-bookings"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Online bookings</div>
    </li>
    <li><input type="checkbox" name="site_functionality[]" value="event-calendar" id="cb-calendar" onclick="calculateCalendarCost()"/>
      <label for="cb-calendar"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Events calendar</div>
    </li>
    <li><input type="checkbox" name="site_functionality[]" value="directory-contact" id="cb-directory-contact" />
      <label for="cb-directory-contact"><img src="{{ asset('icons/showcase2.png') }}" /></label>
      <div class="label-text text-center">Directory & Contact</div>
    </li>
</ul>
</div>
</div>

<br><br><br>

<h5 class="text-center"><strong>How would you describe your brand and the desired style of your site?</strong></h5>
<div class="row text-center icons-center">
  <div class="col-md-8">
    <ul>
      <li><input type="radio" name="site_style" value="bold-innovative" id="cb-bold-innovative"/>
        <label for="cb-bold-innovative"><img src="{{ asset('icons/showcase2.png') }}" /></label>
        <div class="label-text text-center">Bold & Innovative</div>
      </li>
      <li><input type="radio" name="site_style" value="clean-contemporary" id="cb-clean-contemporary"/>
        <label for="cb-clean-contemporary"><img src="{{ asset('icons/showcase2.png') }}" /></label>
        <div class="label-text text-center">Clean & Contemporary</div>
      </li>
      <li><input type="radio" name="site_style" value="corporate-traditional" id="cb-corporate-traditional">
              <label for="cb-corporate-traditional"><img src="{{ asset('icons/showcase2.png') }}" /></label>
        <div class="label-text text-center">Corporate & Traditional</div>
      </li>
    </ul>  
  </div>
</div>

<br><br><br>

<h5 class="text-center"><strong>What is the timescale for completion of your project?</strong></h5>
<div class="row text-center icons-center">
  <div class="col-md-8">
    <ul>
      <li><input type="radio" name="site_timescale" value="one-month" id="cb-one-month" onclick="calculateTimescaleCost()"/>
        <label for="cb-one-month"><img src="{{ asset('icons/showcase2.png') }}" /></label>
        <div class="label-text text-center">1 month</div>
      </li>
      <li><input type="radio" name="site_timescale" value="three-months" id="cb-three-months" onclick="calculateTimescaleCost()"/>
        <label for="cb-three-months"><img src="{{ asset('icons/showcase2.png') }}" /></label>
        <div class="label-text text-center">3 months</div>
      </li>
      <li><input type="radio" name="site_timescale" value="six-months" id="cb-six-months" onclick="calculateTimescaleCost()">
              <label for="cb-six-months"><img src="{{ asset('icons/showcase2.png') }}" /></label>
        <div class="label-text text-center">6 months</div>
      </li>
    </ul>  
  </div>
</div>
<br><br><br>

  <h5 class="text-center">Based on your responses the estimated cost of your site is in the region of...</h5>
  <h3 class="text-center" name="estimated_price" id="websiteDisplayPrice"></h3>

<br><br><br>

<h5 class="text-center">If you wish to discuss further please enter your details below and we will be in contact.</h5>

  <div class="justify-content-md-center">
    <div class="row justify-content-md-center">
      <div class="col-md-7">
          <label for="nameInput">Name</label>
          <input type="text" class="form-control" id="nameInput" name="contactName" >
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md-7">
          <label for="emailInput">Email</label>
          <input type="email" class="form-control" id="emailInput" name="contactEmail">
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md-7">
          <label for="phoneInput">Telephone</label>
          <input type="tel" class="form-control" id="phoneInput" name="contactPhone">
      </div>
    </div>
</div>

<br><br>

<button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>

</form>


@endsection

<script src="{{ asset('js/quote.js') }}"><script>


@section('footer')
    @parent
@endsection
