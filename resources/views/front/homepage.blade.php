
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
                 class="mdk-header mdk-header--bg-dark bg-dark js-mdk-header mb-0"
                 data-effects="parallax-background waterfall"
                 data-fixed
                 data-condenses>
                <div class="mdk-header__bg">
                    <div class="mdk-header__bg-front"
                         style="background-image: url({{asset('front/')}}/public/images/butterfly.jpg);"></div>
                </div>
                <div class="mdk-header__content justify-content-center">

                    <div class="navbar navbar-expand navbar-dark-pickled-bluewood bg-transparent will-fade-background"
                         id="default-navbar"
                         data-primary>

                        <!-- Navbar toggler -->

                        <!-- Navbar Brand -->
                        <a href="/"
                        class="navbar-brand mr-16pt">
                          <img class="navbar-brand-icon" src="{{asset('front/')}}/public/images/logo/logo_2@0.5x.png" width="80px" alt="Moral Values">
                         <!-- <img width="150" src="Public/images/logo/logo2.png" alt="">-->
                         
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
                                     <a class="dropdown-item" href="categories">Categories</a> 
                                     <a class="dropdown-item" href="about">About</a> 
                                     <a class="dropdown-item" href="contact">Contact</a>
                                    </div>
                                </div>

                    </div>

                    <div class=" maintitle text-md-left py-112pt">

                        <h1 class="text-white text-shadow">Guidance for students</h1>
                        <p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-48pt">We are all born as empty vessels which can be shaped by moral values</p>

                    </div>
                </div>
            </div>

            <!-- // END Header -->


            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">
                <div class="border-bottom-2 py-16pt navbar-light bg-white border-bottom-2">
                    <div class="container page__container">
                        <div class="row align-items-center">
                            <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                                <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                    <i class="material-icons text-white">subscriptions</i>
                                </div>
                                <div class="flex">
                                    <div class="card-title mb-4pt">100+ Videos</div>
                                    <p class="card-subtitle text-70">Explore a wide range of videos.</p>
                                </div>
                            </div>
                            <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                                <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                    <i class="material-icons text-white">verified_user</i>
                                </div>
                                <div class="flex">
                                    <div class="card-title mb-4pt">By Expert Educationalist</div>
                                    <p class="card-subtitle text-70">Professional development from the best people.</p>
                                </div>
                            </div>
                            <div class="d-flex col-md align-items-center">
                                <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                    <i class="material-icons text-white">update</i>
                                </div>
                                <div class="flex">
                                    <div class="card-title mb-4pt">Unlimited Access</div>
                                    <p class="card-subtitle text-70">Unlock Library and learn any topic with one subscription.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="arkaplanrengi">
                <div class="container page__container">
                    <div class="row">
                        <div class="col-sm last_added">
                            <h3 style="color: #FFFFFF;">Last Added</h3>
                            <ul class="line">
                                <li>
                                    <a style="color: #FFFFFF;" href="{{asset ('G4-reading')}}"><span>IMPORTANCE OF READING</span><br></a>
                                   <!-- <span>02/02/2021</span>-->
                                    <span class="btn-sm bg-success">Ages 8-9</span>
                                </li>
                                <li>
                                    <a style="color: #FFFFFF;" href="{{asset ('G4-cleanliness1')}}"><span>CLEANLINESS 1</span><br></a>
                                    <!-- <span>02/02/2021</span>-->
                                    <span class="btn-sm bg-success">Ages 8-9</span>
                                </li>
                                <li>
                                    <a style="color: #FFFFFF;" href="{{asset ('G5-friendship')}}"><span>FRIENDSHIP</span><br></a>
                                   <!-- <span>02/02/2021</span>-->
                                    <span class="btn-sm bg-danger">Ages 10-11</span>
                                </li>
                                <li>
                                    <a style="color: #FFFFFF;" href="{{asset ('G5-honesty')}}"><span>HONESTY</span><br></a>
                                  <!-- <span>02/02/2021</span>-->
                                    <span class="btn-sm bg-success">Ages 8-9</span>
                                </li>
                                <li>
                                    <a style="color: #FFFFFF;" href="{{asset ('G5-justice')}}"><span>JUSTICE AND EQUALITY</span><br></a>
                                  <!-- <span>02/02/2021</span>-->
                                    <span class="btn-sm bg-danger">Ages 10-11</span>
                                </li>
                                <li>
                                    <a style="color: #FFFFFF;" href="{{asset ('G5-sharing')}}"><span>SHARING</span><br></a>
                                <!-- <span>02/02/2021</span>-->
                                    <span class="btn-sm bg-danger">Ages 10-11</span>
                                </li>
                                <li>
                                    <a style="color: #FFFFFF;" href="{{asset ('G4-responsibility')}}"><span>RESPONSINILITY</span><br></a>
                                  <!-- <span>02/02/2021</span>-->
                                    <span class="btn-sm bg-success">Ages 8-9</span>
                                </li>
                                <li>
                                    <a style="color: #FFFFFF;" href="{{asset ('G4-wasting')}}"><span>EFFECT OF WASTING</span><br></a>
                                   <!-- <span>02/02/2021</span>-->
                                    <span class="btn-sm bg-danger">Ages 8-9</span>
                                </li>
                                <li>
                                    <a style="color: #FFFFFF;" href="{{asset ('G4-friendship')}}"><span>FRIENDSHIP</span><br></a>
                                    <!-- <span>02/02/2021</span>-->
                                    <span class="btn-sm bg-success">Ages 8-9</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm tow">
                            <div class="card-body flex text-center d-flex flex-column align-items-center justify-content-center">
                                <img src="{{asset('front/')}}/public/images/story.png" style="width:150px;" alt="image" class="card-img-top">
                            </div>
                            <h3 style="color: #FFFFFF;">Story of the Week</h3>
                            <ul class="line">
                                <li>HOLDING ONE’S TOUNGE</li>
                                <p> A man came to a great man of his time and said “That man said this and that about you..”<br>
                                    - How do you know?<br>
                                    - Heard with my own ears.<br>
                                    - Where?<br>
                                    - In his house<br>
                                    - What were you doing there?<br>
                                    - Went to dinner<br>
                                    - What did you eat?<br>
                                    - Soup, steak, rice, salad, dessert, fruits, a lot of stuff...<br>
                                    - You managed to keep all those inside, yet you are unable to keep a few words? Stop carrying words and trying to spoil friendships.<br><br>
                                </p>
                             <!--   <p class="btn btn-outline-white">see more...</p>-->
                            </ul>
                        </div>
                        <div class="col-sm vow">
                            <div class="card-body flex text-center d-flex flex-column align-items-center justify-content-center">
                                <img src="{{asset('front/')}}/public/images/vow.png" style="width:150px;" alt="image" class="card-img-top">
                            </div>
                            <h3 style="color: #FFFFFF;">Video of the Week</h3>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="pills-video1" role="tabpanel" aria-labelledby="pills-video1-tab">
                                    <iframe width="360" height="202" src="https://www.youtube.com/embed/g-a_SBq2ML0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br> <br>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <ul class="line">
                                            <li>Description</li>
                                            <p>
                                                Respect your friends...
                                                how they feel and think
                                                Respect your family...
                                                for all the joys they bring
                                                Respect your teachers...
                                                for they make you wise
                                                Respect your pets...
                                                for they make you smile

                                            </p>
            
                                        </ul>
                                    </div>
                                </div>
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
                                <a href="about.html"
                                   class="text-70 text-underline mr-8pt small">About us</a>
                                <a href="contact.html"
                                   class="text-70 text-underline small">Contact us</a>
                            </p>
                            <p class="text-50 small mt-n1 mb-0">Copyright 2021 &copy; All rights reserved.</p>
                       
                        </div>
                    </div>

                    <a
                    class="btn btn-primary btn-rounded floatt"
                    style="background-color: #25d366;"
                    href="https://wa.me/+9647500556437"
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
            