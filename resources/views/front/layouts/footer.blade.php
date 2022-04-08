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
    