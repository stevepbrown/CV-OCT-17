@extends('layouts.layout-master')

@section('keywords')
@endsection

@section('title')
  <title>Welcome</title>
@endsection

@section('navigation')
  <div class="row"><div class="col-xs-12">@include('partials.navigation.nav-bar')</div>
@endsection

@section('content')
  <div class="row rtb">
    <div id="portrait" class="cols-xs-12 col-md-6 col-lg-4">
      <img src="/img/portrait.jpg" alt="Steve&apos;s picture">
    </div>
    <div id="div-content-txt" class="col-xs-12 col-md-6 col-lg-8">
      <span class="text-center" style="font-size:1.5em">
        <h1>Steve Brown</h1>
        <p>Web Developer</p>
        <p><a href="mailto:steve.p.brown@outlook.com?Subject=Enquiry" target="_blank">steve.p.brown@outlook.com</a></p>
        <p>(07729) 673 542</p>
      </span>
      <p>
        <ul class="bullet-list">
          <li>ICT professional with extensive experience across a range of industries, including clinical research, civil engineering, automotive & petroleum.</li><li>Capable of managing all stages of the Software Development Lifecycle.</li><li>A strong communicator, with a proven track-record of working within multi-disciplinary teams, including Principal (Clinical) Investigators and Chief Engineering Project Managers.</li>
          <li>Recent augmentation of front-end skills through the completion of a CERT-IV in WebTechnologies, at Central TAFE, Western Australia.</li>
          <li>Most recently concluded a contract as a Laravel (PHP) Developer.</li>
          <li>Skills portfolio includes a working knowledge of the LAMP stack, Git, and VMs</li>
        </ul>
      </p>
    </div>
  @endsection

  @section('footer')
    <div class="row">
      <div class="col-xs-12">
        @include('partials.footers.footer')
      </div>
    </div>
  @endsection
