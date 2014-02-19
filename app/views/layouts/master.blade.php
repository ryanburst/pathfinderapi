<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pathfinder API</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pathfinder API">
  <meta name="author" content="Ryan Burst">

  @include('layouts.styles')
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
  <![endif]-->
</head>
<body>
  <div id="notifications"></div><!-- /notifications -->

  <?php if( Request::is('/')) : ?>
  <div class="pa-masthead jumbotron">
    <div class="container">
      <h1>Pathfinder API</h1>
      <p class="lead">Bend data to your will</p>
      <p class="call-to">
        <a href="/" class="btn btn-info btn-lg btn-get-started" role="button">Get Started</a>
        <a href="/docs" class="btn btn-info btn-lg" role="button">Documentation</a>
      </p>
    </div>
  </div><!-- /pa-masthead -->
  <?php endif; ?>

  <header class="navbar navbar-default pa-navbar" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="/" class="navbar-brand">Pathfinder API</a>
      </div>
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
        <ul class="nav navbar-nav navbar-right">
          <li <?php echo Request::is('/') ? ' class="active"' : '' ?>><a href="/">Get Started</a></li>
          <li <?php echo (Request::is('docs*') ? ' class="active"' : '') ?>><a href="/docs">Documentation</a></li>
          <li <?php echo Request::is('contribute*') ? ' class="active"' : '' ?>><a href="#">Contribute</a></li>
        </ul>
      </nav>
    </div>
  </header><!-- /header -->

  <div class="container" role="main">
    @yield('content')
  </div> <!-- /container -->

  <!-- Placed at the end of the document so the pages load faster -->
  @include('layouts.scripts')
</body>
</html>