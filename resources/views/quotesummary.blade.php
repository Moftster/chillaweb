@extends('layout')

@section('title', 'Quote')

@section('header')
    @parent
@endsection

@section('content')

<br>

<div class="text-center">
    <h5>FREE QUOTE</h5>
    <h1>Your free quote!</h1>
</div>

<br>
<br>
<br>

<p>Based on the information you have provided, the...</p>

@endsection

<script src="{{ asset('js/quote.js') }}"><script>

@section('footer')
    @parent
@endsection
