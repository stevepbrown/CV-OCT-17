@extends('layouts.layout-master')

@section('keywords')
@endsection

@section('title')
  <title>Mail sent</title>
@endsection

@section('navigation')
  <div class="row">
    <div class="col-xs-12">
      @include('partials.navigation.nav-bar-no-contact')
    </div>
  @endsection

  @section('content')
    <div class="container-fluid">
    @include('partials.forms.frm_success')
    </div>
  @endsection

  @section('footer')
    <div class="row">
      <div class="col-xs-12">
        @include('partials.footers.footer')
      </div>
    </div>
  @endsection
