<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Logoeezy') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Logoeezy') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="container ">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand logo-category">
                    {{ config('app.name', 'Logoeezy') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse1">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav ">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Dropdown 1<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href=""> sample1</a>
                            </li>
                            <li>
                                <a href=""> sample2</a>
                            </li>
                            <li>
                                <a href=""> sample3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Dropdown 2<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href=""> sample1</a>
                            </li>
                            <li>
                                <a href=""> sample2</a>
                            </li>
                            <li>
                                <a href=""> sample3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Dropdown 3<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href=""> sample1</a>
                            </li>
                            <li>
                                <a href=""> sample2</a>
                            </li>
                            <li>
                                <a href=""> sample3</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
      @yield('content')
    </div>
    <section class="footer-section  blackbg-light footer">
      <div class="container-fluid footer-container">
        <div class="row">
          <div class=" col-md-4  col-sm-4 text-center">
            <img src="favicon.ico" style="height: 50px;width: 50px;background-color: white;" />
            <p class="font-size-15">LOGOEEZY is a site where you can find any logo or t-shirt design on convert image to vectot if you want </p>
            <br/>
            <ul class="footer-links">
              <li>
                <a target="_blank" href="#">
                  <i class="fa fa-facebook fb"></i>
                </a>
              </li>
              <li>
                <a target="_blank" href="#">
                  <i class="fa fa-twitter twt"></i>
                </a>
              </li>
              <li>
                <a target="_blank" href="#">
                  <i class="fa fa-linkedin ln"></i>
                </a>
              </li>
            </ul>
          </div>
          <div >
            <div class="col-md-8 col-sm-8">
              <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="clearfix">
                  <h4> TShirts</h4>
                </div>
                <div class="clearfix padding-left-0">
                  <div class="col-md-12 padding-left-0">
                    sample1
                  </div>
                  <div class="col-md-12 padding-left-0">
                    sample2
                  </div>
                  <div class="col-md-12 padding-left-0">
                    sample3
                  </div>
                  <div class="col-md-12 padding-left-0">
                    sample4
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="clearfix">
                  <h4> TShirts</h4>
                </div>
                <div class="clearfix padding-left-0">
                  <div class="col-md-12 padding-left-0">
                    sample1
                  </div>
                  <div class="col-md-12 padding-left-0">
                    sample2
                  </div>
                  <div class="col-md-12 padding-left-0">
                    sample3
                  </div>
                  <div class="col-md-12 padding-left-0">
                    sample4
                  </div>
                </div>
              </div><div class="col-xs-12 col-sm-4 col-md-3">
                <div class="clearfix">
                  <h4> TShirts</h4>
                </div>
                <div class="clearfix padding-left-0">
                  <div class="col-md-12 padding-left-0">
                    sample1
                  </div>
                  <div class="col-md-12 padding-left-0">
                    sample2
                  </div>
                  <div class="col-md-12 padding-left-0">
                    sample3
                  </div>
                  <div class="col-md-12 padding-left-0">
                    sample4
                  </div>
                </div>
              </div><div class="col-xs-12 col-sm-4 col-md-3">
                <div class="clearfix">
                  <h4> TShirts</h4>
                </div>
                <div class="clearfix padding-left-0">
                  <div class="col-md-12 padding-left-0">
                    sample1
                  </div>
                  <div class="col-md-12 padding-left-0 ">
                    sample2
                  </div>
                  <div class="col-md-12 padding-left-0">
                    sample3
                  </div>
                  <div class="col-md-12 padding-left-0">
                    sample4
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix end-bg">
        <div class="col-md-4 col-sm-4">
          <p>Copyright Logoeezy 2016.All Rights Reserved.</p>
        </div>
        <div class="col-md-8 col-sm-8 text-right">
          <ul class="end-footer">
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Terms & Condition</a></li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  <!-- Scripts -->
  <script src="/js/app.js"></script>
</body>
</html>
