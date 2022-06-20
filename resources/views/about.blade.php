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
                 class="mdk-header mdk-header--bg-primary bg-dark js-mdk-header mb-0"
                 data-effects="parallax-background waterfall"
                 data-fixed
                 data-condenses>
                <div class="mdk-header__bg">
                    <div class="mdk-header__bg-front"
                    style="background-image: url({{asset('front/')}}/public/images/butterfly3.jpg);"></div>
                </div>
                <div class="mdk-header__content justify-content-center">

                    <div class="navbar navbar-expand navbar-dark-pickled-bluewood bg-transparent will-fade-background"
                         id="default-navbar"
                         data-primary>

                        <!-- Navbar toggler -->


                        <!-- Navbar Brand -->
                        <a href="/"
                        class="navbar-brand mr-16pt">
                        <img class="navbar-brand-icon" src="{{asset('front/')}}/public/images/logo/logo_3@0.5x.png" alt="Moral Values">
                        <!-- <img width="150" src="Public/images/logo/logo2.png" alt="">-->
                        </a>

                        <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                            <li class="nav-item active" >
                                <a href="/"
                                   class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="categories"
                                   class="nav-link">Categories</a>
                            </li>
                             <li class="nav-item">
                                <a href="about"
                                   class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                            <a href="contact"
                               class="nav-link">Contact</a>
                          </li>
                        </ul>

                        <div class="d-block d-sm-none ml-auto">
                            <button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                <span class="navbar-toggler-icon "></span>
                            </button>
                                <div class="dropdown-menu dropdown-menu-right mt-3">
                                    <a class="dropdown-item" href="/">Home</a>
                                     <a class="dropdown-item" href="categories">Categories</a> 
                                     <a class="dropdown-item" href="about">About</a> 
                                     <a class="dropdown-item" href="contact">Contact</a>
                                    </div>
                                </div>
                    </div>

                    <div class="hero container page__container text-center text-md-left py-112pt">
                        <h1 class="text-white text-shadow">About Us</h1>
                        <p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-0">
                            Children and adults can find the videos and stories which can motivate, inspire and educate.</p>
                       <br> <p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-0">
                            “Learning What Matters”</p>
                    </div>
                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="page-section bg-alt border-bottom-2">
                    <div class="container page__container">

                        <div class="container page__container">
                            <div class="page-headline text-left">
                                <h2>About Us</h2>
                                <p class="mx-auto text-100" style="font-size: 20px">At moral values, children and adults can find the videos and stories which can motivate, inspire and educate.  You can read it yourself or to your children and help them to understand morals of life. Our present generation can use such stories and its moral in their life to become a better human.</p>
                                <p class="mx-auto text-100" style="font-size: 20px">We encourage anyone to participate, read and submit any story which complies with terms of this website and can be the inspiration to others.  Also, if anyone would be interested in correcting grammar or spelling errors in user-submitted stories, you are welcome to submit it with corrections.

                                    Thank you for visiting and Keep Reading Moral Stories!</p>

                            </div>
                        </div>
                    </div>
                </div>
            <!-- // END Header Layout Content -->

        <!-- Footer -->
            
        <div class="bg-white border-top-2 mt-auto">
            <div class="container page__container page-section d-flex flex-column">
                <p class="text-70 brand mb-24pt">
                     Moral-Values
                </p>
                <p style="line-height: 2.0">
                    <a href="#termofuse"
                       class="text-70 text-underline mr-8pt small">Terms of use</a>
                    <a href="#privacypolicy"
                       class="text-70 text-underline mr-8pt small">Privacy policy</a>
                    <a href="about.html"
                       class="text-70 text-underline mr-8pt small">About us</a>
                    <a href="contact.html"
                       class="text-70 text-underline small">Contact us</a>
                </p>
                <p class="text-50 small mt-n1 mb-0">Copyright 2021 &copy; All rights reserved.</p>
            </div>
        </div>

        <!-- // END Footer -->

    </div>
    <!-- // END Header Layout -->


    <!-- jQuery -->
    <script src="{{asset('front/')}}/public/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{asset('front/')}}/public/vendor/popper.min.js"></script>
    <script src="{{asset('front/')}}/public/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{asset('front/')}}/public/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="{{asset('front/')}}/public/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="{{asset('front/')}}/public/vendor/material-design-kit.js"></script>

    <!-- App JS -->
    <script src="{{asset('front/')}}/public/js/app.js"></script>

    <!-- Preloader -->
    <script src="{{asset('front/')}}/public/js/preloader.js"></script>

    <script>
        (function() {
            'use strict';
            var headerNode = document.querySelector('.mdk-header')
            var layoutNode = document.querySelector('.mdk-header-layout')
            var componentNode = layoutNode ? layoutNode : headerNode
            componentNode.addEventListener('domfactory-component-upgraded', function() {
                headerNode.mdkHeader.eventTarget.addEventListener('scroll', function() {
                    var progress = headerNode.mdkHeader.getScrollState().progress
                    var navbarNode = headerNode.querySelector('#default-navbar')
                    navbarNode.classList.toggle('bg-transparent', progress <= 0.2)
                })
            })
        })()
    </script>

</body>

</html>
