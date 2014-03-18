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
  <div class="wrapper">
    <div id="notifications"></div><!-- /notifications -->
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
            <li <?php echo Request::is('/get-started') ? ' class="active"' : '' ?>><a href="/get-started">Get Started</a></li>
            <li <?php echo (Request::is('docs*') ? ' class="active"' : '') ?>>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documentation <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/authorization">Authorization</a></li>
                <li><a href="/endpoints">API Docs / Endpoints</a></li>
                <li><a href="/rate-limits">Rate Limits</a></li>
                <li><a href="/community-use">Community Use</a></li>
              </ul>
            </li>
            <?php if( Auth::check() ) : ?>
            <li><a href="/account">Your Account</a></li>
            <?php else : ?>
            <li><a href="/register">Get a Key</a></li>
            <?php endif; ?>
            <li><a href="/help">Help</a></li>
            <?php if( Auth::check() ) : ?>
            <li>
              <button type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-cog"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="/logout">Logout</a></li>
              </ul>
            </li>
            <?php else: ?>
            <li><p><a href="/login"><button class="btn btn-primary navbar-btn">Login</button></a></p></li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </header><!-- /header -->

    <?php if( Request::is('/')) : ?>
    <div class="pa-masthead jumbotron">
      <div class="pa-masthead-wrapper character-<?php echo rand(1,5); ?>">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 pa-masthead-content">
              <div class="skew-box"></div>
              <div class="pa-masthead-copy">
                <h2>Unleash the Power of Pathfinder</h2>
                <p class="lead">Forget csv files, scraping pages, and all that other nonsense. Access Pathfinder information in a way that gives <strong>you</strong> the power to build new and exciting tools!</p>
                <p class="call-to">
                  <a href="/get-started" class="btn btn-info btn-lg btn-get-started" role="button">Get Started</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /pa-masthead -->
    <?php endif; ?>

    <div class="main-content" role="main">
      @yield('content')
    </div> <!-- /container -->
  </div>

  <footer class="footer" roll="footer">
    <div class="container">
      <ul class="list-unstyled pull-left">
        <li><a href="/">Pathfinder API</a></li>
        <li>Copyright &copy; Ryan Burst 2014</li>
      </ul>
      <ul class="list-inline pull-right">
        <li><a href="/community-use">Community Use</a></li>
        <li><a href="/buglist">Buglist</a></li>
        <li><a href="/submit-issue">Submit an Issue</a></li>
      </ul>
    </div>
  </footer>

  <!-- Placed at the end of the document so the pages load faster -->
  @include('layouts.scripts')
</body>
</html>