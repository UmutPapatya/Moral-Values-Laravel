@extends('front.layouts.master')
@section('title','Moral-Values Ages 10-11')
@section('content')

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="navbar navbar-light border-0 navbar-expand">
                    <div class="container page__container">
                        <div class="media flex-nowrap">
                            <div class="media-left mr-8pt">
                                <a href="#"><img src="{{asset('front/')}}/public/images/story.png""
                                         width="60"
                                         alt="Justice"
                                         class="rounded"></a>
                            </div>
                            <div class="media-body">
                                <a href="#"
                                   class="card-title text-body mb-24 mt-8pt"">Justice and Equality</a>
                                <p class="lh-1 d-flex align-items-center mb-0">
                                    <span class="text-50 small font-weight-bold mr-0pt">2 Videos</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background-color: #5567ff" class="pb-lg-64pt py-32pt">
                    <div class="container page__container">

                        <div class="bd-example bd-example-tabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="btn btn-white flex-auto mb-8pt mb-sm-0 mr-sm-16pt active show" id="pills-video1-tab" data-toggle="pill" href="#pills-video1" role="tab" aria-controls="pills-home" aria-selected="true">Video 1</a>
                                </li>
                               <li class="nav-item">
                                    <a class="btn btn-warning flex-auto mb-8pt mb-sm-0 mr-sm-16pt" id="pills-profile-tab" data-toggle="pill" href="#pills-video2" role="tab" aria-controls="pills-profile" aria-selected="false">Video 2</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show embed-responsive embed-responsive-16by9" id="pills-video1" role="tabpanel" aria-labelledby="pills-video1-tab">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oRnSdwCnxZo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br> <br>
                                    <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-white flex m-0">Moral of the Video</h2>
                                    </div>

                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-white mb-24pt">
                                            Your friend always sees the brighter side of you! No matter what your friend will always come to rescue you be it any circumstance!
                                        </p>
                                    </div>
                                </div>
                            
                    
                                <div class="tab-pane fade embed-responsive embed-responsive-16by9" id="pills-video2" role="tabpanel" aria-labelledby="pills-video2-tab">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6qrEyjVMajY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-white flex m-0">Moral of the Video</h2>
                                    </div>

                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-white mb-24pt">
                                            Your friend always sees the brighter side of you! No matter what your friend will always come to rescue you be it any circumstance!
                                        </p>
                                    </div>
                                </div>
                             
                            </div>

                        </div>

                    </div>
                </div>
    <!--  <div class="pb-lg-64pt py-32pt">


                <div class="navbar navbar-expand-sm navbar-light bg-white border-bottom-2 navbar-list p-0 m-0 align-items-center">
                    <div class="container page__container">
                        <ul class="nav navbar-nav flex align-items-sm-center">
                            <li class="nav-item navbar-list__item">
                                <i class="material-icons text-muted icon--left">schedule</i>
                                6m 05s
                            </li>
                            <li class="nav-item navbar-list__item">
                                <i class="material-icons text-muted icon--left">assessment</i>
                                Ages 8-9
                            </li>
                            <li class="nav-item ml-sm-auto text-sm-center flex-column navbar-list__item">
                                <div class="rating rating-24">
                                    <div class="rating__item"><i class="material-icons">star</i></div>
                                    <div class="rating__item"><i class="material-icons">star</i></div>
                                    <div class="rating__item"><i class="material-icons">star</i></div>
                                    <div class="rating__item"><i class="material-icons">star</i></div>
                                    <div class="rating__item"><i class="material-icons">star_border</i></div>
                                </div>
                                <p class="lh-1 mb-0"><small class="text-muted">20 ratings</small></p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- // END Header Layout Content -->

   
            @endsection