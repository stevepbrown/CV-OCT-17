@extends('layouts.layout-master')

@section('title')
  <title>Contact me</title>
@endsection

@section('navigation')
  <div class="row"><div class="col-xs-12">@include('partials.navigation.nav-bar')</div>
@endsection

@section('content')
  <div id="div-content-frm" class="col-xs-12 rtb">
    @include('partials.forms.frm_contact')
  </div>
@endsection

@section('footer')
  <div class="row">
    <div class="col-xs-12">
      @include('partials.footers.footer')
    </div>
  </div>
@endsection
