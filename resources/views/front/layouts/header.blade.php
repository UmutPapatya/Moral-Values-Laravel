<!DOCTYPE html>
<html lang="en"
      dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','Moral-Values')</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots"
          content="noindex">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
          rel="stylesheet">


    <!-- Perfect Scrollbar -->
    <link type="text/css"
          href="{{asset('front/')}}/public/vendor/perfect-scrollbar.css"
          rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css"
          href="{{asset('front/')}}/public/css/material-icons.css"
          rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css"
          href="{{asset('front/')}}/public/css/fontawesome.css"
          rel="stylesheet">


    <!-- App CSS -->
    <link type="text/css"
          href="{{asset('front/')}}/public/css/app.css"
          rel="stylesheet">

    <!-- default CSS -->
    <link type="text/css"
          href="{{asset('front/')}}/public/css/default.css"
          rel="stylesheet">

    </head>

    <body class="layout-sticky-subnav layout-default ">


            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header js-mdk-header mb-0"
                 data-fixed
                 data-effects="">
                <div class="mdk-header__content">

                    <div class="navbar navbar-expand navbar-dark-pickled-bluewood navbar-shadow"
                         id="default-navbar"
                         data-primary>

                        <!-- Navbar Brand -->
                        <a href="/"
                           class="navbar-brand mr-16pt">
                           <img class="navbar-brand-icon" src="{{asset('front/')}}/public/images/logo/logo_3@0.5x.png" width="80px" alt="Moral Values">
                           <!-- <img width="150" src="../public/images/logo/logo2.png" alt="">-->
                        </a>

                        <ul class="nav navbar-nav d-sm-flex flex justify-content-start ml-8pt d-none d-sm-block">
                            <li class="nav-item active">
                                <a href="/"
                                   class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/categories') }}"
                                   class="nav-link">Categories</a>
                            </li>
                             <li class="nav-item">
                                <a href="{{ url('/about') }}"
                                   class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                            <a href="{{ url('/contact') }}"
                               class="nav-link">Contact</a>
                          </li>
                        </ul>
                         <div class="d-block d-sm-none ml-auto">
                            <button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                <span class="navbar-toggler-icon "></span>
                            </button>
                                <div class="dropdown-menu dropdown-menu-right mt-3">
                                    <a class="dropdown-item" href="/">Home</a>
                                     <a class="dropdown-item" href="{{ url('/about') }}">Categories</a> 
                                     <a class="dropdown-item" href="{{ url('/about') }}">About</a> 
                                     <a class="dropdown-item" href="{{ url('/about') }}">Contact</a>
                                    </div>
                                </div>
                    
                    </div>

                </div>
            </div>

            <!-- // END Header -->