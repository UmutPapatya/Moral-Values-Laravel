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
                         <img class="navbar-brand-icon" src="{{asset('front/')}}/public/images/logo/logo_3@0.5x.png" width="80px" alt="Moral Values">
                         <!-- <img width="150" src="Public/images/logo/logo2.png" alt="">-->
                        </a>
 
                         <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                             <li class="nav-item active" >
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
                                     <a class="dropdown-item" href="categories">Categories</a> 
                                     <a class="dropdown-item" href="about">About</a> 
                                     <a class="dropdown-item" href="contact">Contact</a>
                                    </div>
                                </div>
                    </div>

                    <div class="hero container page__container text-center text-md-left py-112pt">
                        <p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-0">
                            Education, is not a name of any degree or certificate that can be shown to others as a proof. Education is the name of our Attitude, Actions, Language & Behavior with others in real Life.
                        </p>
                        <br><p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-0">
                            “Learning What Matters”</p>
                    </div>
                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="page-section bg-alt border-bottom-2">
                    <div class="container page__container">
                        <div class="page-heading">
                            <h4>Ages</h4>
                        </div>

                        <div class="row card-group-row">
                            
                            <!-- // Ages 4-5
                            <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">
                            
                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="overlay">

                                    <a href="student-course.html" class="card-img-top js-image" data-position="center" data-height="140" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url(&quot;file:///Users/MIQDAD/Desktop/UMUTT/luma-v1.3.0%202/public/images/paths/angular_430x168.png&quot;); background-size: cover; background-position: center center; height: 180px;">
                                        <img src="public/images/paths/angular_430x168.png" alt="course" style="visibility: hidden;">
                                        <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="student-course.html">Ages 4-5</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- // Ages 6-7 
                            <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="overlay">

                                    <a href="student-course.html" class="card-img-top js-image" data-position="center" data-height="140" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url(&quot;file:///Users/MIQDAD/Desktop/UMUTT/luma-v1.3.0%202/public/images/paths/ages_430x168.png&quot;); background-size: cover; background-position: center center; height: 180px;">
                                        <img src="public/images/paths/ages_430x168.png" alt="course" style="visibility: hidden;">
                                        <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="student-course.html">Ages 6-7</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  -->
                            <!-- // Ages 6-7 -->
                             <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay js-overlay card-group-row__card" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="overlay">

                                    <a href="{{ url('/ages8-9') }}" class="card-img-top js-image" data-position="center" data-height="140" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url({{asset('front/')}}/public/images/ages6-7.jpg); background-size: cover; background-position: center center; height: 180px;">
                                        <img src="{{asset('front/')}}/public/images/ages6-7.jpg" alt="course" style="visibility: hidden;">
                                        <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="{{ url('/ages8-9') }}">Ages 8-9</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>1 hour</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 topics</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- // Ages 8-9 -->
                            <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay js-overlay card-group-row__card" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="overlay">

                                    <a href="{{ url('/ages9-10') }}" class="card-img-top js-image" data-position="center" data-height="140" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url({{asset('front/')}}/public/images/ages8-9.jpg); background-size: cover; background-position: center center; height: 180px;">
                                        <img src="{{asset('front/')}}/public/images/ages8-9.jpg" alt="course" style="visibility: hidden;">
                                        <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="{{ url('/ages9-10') }}">Ages 9-10</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>1 hour</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 topics</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- // Ages 10-11-->
                            <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay js-overlay card-group-row__card" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="overlay">

                                    <a href="{{ url('/ages10-11') }}" class="card-img-top js-image" data-position="center" data-height="140" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url({{asset('front/')}}/public/images/ages10-11.jpg); background-size: cover; background-position: center center; height: 180px;">
                                        <img src="{{asset('front/')}}/public/images/ages10-11.jpg" alt="course" style="visibility: hidden;">
                                        <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="{{ url('/ages10-11') }}">Ages 10-11</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>1 hours</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 topics</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> 
                            <!-- Ages 12-13 -->
                            <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay js-overlay card-group-row__card" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="overlay">

                                    <a href="{{ url('/ages11-12') }}" class="card-img-top js-image" data-position="center" data-height="140" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url({{asset('front/')}}/public/images/ages12-13.jpg); background-size: cover; background-position: center center; height: 180px;">
                                        <img src="{{asset('front/')}}/public/images/ages12-13.jpg" alt="course" style="visibility: hidden;">
                                        <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="{{ url('/ages11-12') }}">Ages 11-12</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>1 hours</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 topics</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> 
                            <!-- // Ages 14-15 
                            <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="overlay">

                                    <a href="student-course.html" class="card-img-top js-image" data-position="center" data-height="140" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url(&quot;file:///Users/MIQDAD/Desktop/UMUTT/luma-v1.3.0%202/public/images/paths/angular_430x168.png&quot;); background-size: cover; background-position: center center; height: 180px;">
                                        <img src="public/images/paths/angular_430x168.png" alt="course" style="visibility: hidden;">
                                        <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="student-course.html">Ages 14-15</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- // Ages 16-17 
                            <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="overlay">

                                    <a href="student-course.html" class="card-img-top js-image" data-position="center" data-height="140" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url(&quot;file:///Users/MIQDAD/Desktop/UMUTT/luma-v1.3.0%202/public/images/paths/angular_430x168.png&quot;); background-size: cover; background-position: center center; height: 180px;">
                                        <img src="public/images/paths/angular_430x168.png" alt="course" style="visibility: hidden;">
                                        <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="student-course.html">Ages 16-17</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- // Age 18 
                            <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="overlay">

                                    <a href="student-course.html" class="card-img-top js-image" data-position="center" data-height="140" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url(&quot;file:///Users/MIQDAD/Desktop/UMUTT/luma-v1.3.0%202/public/images/paths/angular_430x168.png&quot;); background-size: cover; background-position: center center; height: 180px;">
                                        <img src="public/images/paths/angular_430x168.png" alt="course" style="visibility: hidden;">
                                        <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="student-course.html">Age 18</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>

                    </div>
                </div>
            </div>
            <div class="navbar navbar-expand-sm navbar-light bg-white border-bottom-2 navbar-list p-0 m-0 align-items-center">
                <div class="container page__container">
                    <ul class="nav navbar-nav flex align-items-sm-center">

                        <li class="nav-item ml-sm-auto text-sm-center flex-column navbar-list__item">
                            <p class="lh-1 mb-0" style="font-size: 16px;">Follow us</p>
                        </li>
                        <li class="nav-item flex-column navbar-list__item">
                            <!-- Facebook -->
                            <i class="fab fa-2x fa-facebook-f" style="color: #3b5998;"></i>   
                        </li>
                        <li class="nav-item flex-column navbar-list__item">
                            <!-- Facebook -->
                            <i class="fab fa-2x fa-twitter" style="color: #55acee;"></i>
                        </li>
                        <li class="nav-item flex-column navbar-list__item">
                        <!-- Instagram -->
                        <i class="fab fa-2x fa-instagram" style="color: #ac2bac;"></i>
                    </li>
                    </ul>
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
                    <a href="{{ url('/about') }}"
                       class="text-70 text-underline mr-8pt small">About us</a>
                    <a href="{{ url('/contact') }}"
                       class="text-70 text-underline small">Contact us</a>
                </p>
                <p class="text-50 small mt-n1 mb-0">Copyright 2021 &copy; All rights reserved.</p>
            </div>
        </div>
        <a
        class="btn btn-primary btn-rounded floatt"
        style="background-color: #25d366;"
        href="https://wa.me/+9647500556437"
        target="_blank"
        role="button"><i class="fab fa-whatsapp"></i
    ></a>

  <!--   <a class="btn btn-light floatt2 " style="background-color: #25d366;" href="https://wa.me/+9647500556437" target="_blank" role="button">
        <i class="fab fa-2x fa-whatsapp pr-1"></i>Contact us</a>-->
    
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
