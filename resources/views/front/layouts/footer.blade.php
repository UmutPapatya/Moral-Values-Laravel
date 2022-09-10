<div class="navbar navbar-expand-sm navbar-light bg-white border-bottom-2 navbar-list p-0 m-0 align-items-center d-none d-xl-block">
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
    
            <!-- // END Footer -->
            <a
            class="btn btn-primary btn-rounded floatt"
            style="background-color: #25d366;"
            href="https://wa.me/+9647500556437"
            target="_blank"
            role="button"><i class="fab fa-whatsapp"></i
        ></a>

      <!--   <a class="btn btn-light floatt2 " style="background-color: #25d366;" href="https://wa.me/+9647500556437" target="_blank" role="button">
            <i class="fab fa-2x fa-whatsapp pr-1"></i>Contact us</a>-->
    
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
    