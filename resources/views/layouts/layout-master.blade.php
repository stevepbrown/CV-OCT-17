<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- Javascript --}}
  {{ Html::script('js/app.js') }}
  {{-- CSS --}}
  {{ Html::style('css/app.css') }}
  {{ Html::style('css/boostrap-template.css') }}
  {{ Html::style('css/custom.css') }}
  @yield('title')
  <noscript>
    This site uses javascript. To get the best from ths site, please ensure that javascript is enabled.
  </noscript>
  @yield('keywords')
</head>
<body>
  <!-- Container for bootstrap -->
  <div id="div-bootstrap-container" class="container-fluid">
    <div id="div-navigation" class="row">
      @yield('navigation')
    </div>
    <div id="div-content" class="row">
      @yield('content')
    </div>
    <div id="div-footer" class="row">
      @yield('footer')
    </div>
  </div>



</body>
</html>
