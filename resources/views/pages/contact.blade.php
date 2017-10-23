@extends('layouts.layout-master')

@section('keywords')
@endsection

@section('title')
  <title>Contact me</title>
@endsection

@section('navigation')
  <div class="row"><div class="col-xs-12">@include('partials.navigation.nav-bar')</div>
@endsection

@section('content')
  @include('partials.forms.frm_contact')
@endsection

@section('footer')
  <div class="row">
    <div class="col-xs-12">
      @include('partials.footers.footer')
    </div>
  </div>
@endsection
