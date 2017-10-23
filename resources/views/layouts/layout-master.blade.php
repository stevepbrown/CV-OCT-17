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
  <div id="div-main-container" class="container-fluid">
    <div class="row">
      @yield('navigation')
    </div>
    <div class="row">
      <div id="content-container"class="container">
        @yield('content')
      </div>
    </div>
    <div class="row">
      <div class="container-fluid">
        @yield('footer')
      </div>
    </div>
  </div>
</body>
</html>
