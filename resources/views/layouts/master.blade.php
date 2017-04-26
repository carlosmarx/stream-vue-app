<!DOCTYPE html><!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
<html>
<head>
  <!-- Scripts -->
  <script>
    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
    ]) !!};
  </script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css">
</head>
<body>
  <section class="hero is-primary is-fullheight"">
  
  <!-- Hero header: will stick at the top -->
  <div id="app">
    @include('layouts.partials.nav')

    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
      <div class="container">

        <router-view></router-view>

      </div>
    </div>

    <!-- Hero footer: will stick at the bottom -->
    @include('layouts.partials.footer')

  </div>

</section>
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>