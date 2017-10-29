@extends('layouts.layout-master')

@section('keywords')
@endsection

@section('title')
  <title>Education</title>
@endsection

@section('navigation')
  <div class="row"><div class="col-xs-12">@include('partials.navigation.nav-bar')</div>
@endsection


@section('content')
  <div id="div-content-txt" class="col-xs-12 rtb">
    <div id="div-content-txt-inner" class="container">
    <h2>Certificate IV in Web Technologies (Equivalent to UK Higher National
      Certficate) , North Metropolitan TAFE - Perth, Western Australia.
    </h2>
    <h3>Awarded December 2016</h3>
    <ul class="bullet-list">
      <li>HTML5 / CSS3</li>
      <li>PHP</li>
      <li>MySQL</li>
      <li>Development Methodologies</li>
      <li>SEO</li>
      <li>Accessibility / standards compliance</li>
      <li>Responsive Web Design</li>
      <li>Accelerated Mobile Pages</li>
    </ul>

    <h2>Bachelor of Arts (2-1 with honours), University of Central Lanacashire - Preston, UK</h2>
    <h3>Awarded June 1995</h3>
    <ul class="bullet-list">
      <li>History (major)</li>
      <li>Business Economics</li>
      <li>Marketing</li>
      <li>International Relations</li>
    </ul>

    <h2>GCE A-Level, Winstanley 6 th Form College, Billinge, Wigan, UK</h2>
    <h3>Awarded June 1995</h3>
    <ul class="bullet-list">
      <li>Economics (A)</li>
      <li>Biology (B)</li>
      <li>History (C)</li>
    </ul>

    <h2>GCSE, The Byrchall High School - Ashton-in-Makerfield, UK</h2>
    <h3>Awarded June 1988</h3>
    <ul class="bullet-list">
      <li>8 subjects (A-C) including Maths & English Language.</li>
    @endsection
    @section('footer')
      <div class="row">
        <div class="col-xs-12">
          @include('partials.footers.footer')
        </div>
      </div>
    </div>
  </div>
  @endsection
