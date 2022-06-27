@extends('front.layouts.master')
@section('title','Moral-Values Ages 8-9')
@section('content')

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="navbar navbar-light border-0 navbar-expand">
                    <div class="container page__container">
                        <div class="media flex-nowrap">
                            <div class="media-left mr-8pt">
                                <a href="#"><img src="{{asset('front/')}}/public/images/story.png""
                                         width="60"
                                         alt="Responsibility"
                                         class="rounded"></a>
                            </div>
                            <div class="media-body">
                                <a href="#"
                                   class="card-title text-body mb-24 mt-8pt"">Responsibility</a>
                                <p class="lh-1 d-flex align-items-center mb-0">
                                    <span class="text-50 small font-weight-bold mr-0pt">Importance of Responsibility</span>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background-color: #539cb5" class="pb-lg-64pt py-32pt">
                   
                   
                    <div class="container page__container">
                        <div class="row">
                            <div class="col-lg-8 bd-example bd-example-tabs">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="btn btn-white flex-auto mb-8pt mb-sm-0 mr-sm-16pt active show" id="pills-video1-tab" data-toggle="pill" href="#pills-video1" role="tab" aria-controls="pills-home" aria-selected="true">Video 1</a>
                                    </li>
                                <li class="nav-item">
                                        <a class="btn btn-warning flex-auto mb-8pt mb-sm-0 mr-sm-16pt" id="pills-profile-tab" data-toggle="pill" href="#pills-video2" role="tab" aria-controls="pills-profile" aria-selected="false">Video 2</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-video1">
                                        <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt" >
                                            <div class="player embed-responsive-item">
                                                <div class="player__embed">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7VUnBJ8bU98" allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-end mb-16pt">
                                            <h2 class="text-white flex m-0">Moral of the Video</h2>
                                        </div>    
                                        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                            <p class="hero__lead measure-hero-lead text-white mb-24pt">
                                                Your friend always sees the brighter side of you! No matter what your friend will always come to rescue you be it any circumstance!
                                            </p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-video2">
                                        <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt">
                                            <div class="player embed-responsive-item">
                                                <div class="player__embed">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IzEYos5En_k" allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-end mb-16pt">
                                            <h2 class="text-white flex m-0">Moral of the Video 2</h2>
                                        </div>    
                                        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                            <p class="hero__lead measure-hero-lead text-white mb-24pt">
                                                Your friend always sees the brighter side of you! No matter what your friend will always come to rescue you be it any circumstance!
                                            </p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            
                            <div class="col-lg-4 ">
                                <div class="page-section">
                                    <div class="page-nav__content">
                                      <br>
                                        <div class="row align-items-stretch">
                                            <div class="col-lg-12 d-flex align-items-stretch justify-content-strech">
                                            <div class="card w-100 bg-light border-light">
                                                <div class="card-body">
                                                <h4 class="card-title ">Resources</h4>
                                                <table class="table browser mt-4 no-border">
                                                    <tbody>
                                                    <tr>
                                                        <td style="width: 40px">
                                                        <a target="_blank" href="https://drive.google.com/file/d/1R2eQnnqOCh3Rd7pawJ9t85YtF7FO_Nc2/view?usp=sharing">
                                                        <img src="{{asset('front/')}}/public/images/files/file-1.png" alt="logo"></a>
                                                        </td>
                                                        <td class="">Banner</td>
                                                        <td align="right">
                                                        <span class="badge badge-success">6 Pages</span>
                                                        </td></a>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40px">
                                                        <img src="{{asset('front/')}}/public/images/files/file-2.png" alt="logo">
                                                        </td>
                                                        <td class="">Stories</td>
                                                        <td align="right">
                                                        <span class="badge badge-info">6 Pages</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40px">
                                                        <img src="{{asset('front/')}}/public/images/files/file-3.png" alt="logo">
                                                        </td>
                                                        <td class="">Presentation</td>
                                                        <td align="right">
                                                        <span class="badge badge-primary">6 Pages</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40px">
                                                        <img src="{{asset('front/')}}/public/images/files/file-4.png" alt="logo">
                                                        </td>
                                                        <td class="">Pictures</td>
                                                        <td align="right">
                                                        <span class="badge badge-warning">6 Pages</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40px">
                                                        <img src="{{asset('front/')}}/public/images/files/file-5.png" alt="logo">
                                                        </td>
                                                        <td class="">Music</td>
                                                        <td align="right">
                                                        <span class="badge badge-dark">6 Pages</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                            </div>
                                        
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </div>            
                        </div>
                    </div>

                

                </div>
                <div class="pb-lg-64pt py-32pt">
                    <div class="container page__container">
                        <div class="d-flex flex-wrap align-items-end mb-16pt">
                            <h2 class="text-dark flex m-0">Stories about Responsibility</h2>
                        </div>
                        <div class="bd-example bd-example-tabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="btn btn-primary flex-auto mb-8pt mb-sm-0 mr-sm-16pt active show" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Story 1</a>
                                </li>
                               <!-- <li class="nav-item">
                                    <a class="btn btn-warning flex-auto mb-8pt mb-sm-0 mr-sm-16pt" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Story 2</a>
                                </li>-->
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            There once was a farmer who grew the most excellent wheat. Every season he won the award for the best wheat in his county.

                                            A wise woman came to him to ask him about his success.
                                            
                                            He told her that the key was to share his best seed with his neighbors so they could plant the seed as well.
                                            
                                            The wise woman asked, “How can you share your best wheat seed with your neighbors when they compete with you every year?”
                                            
                                            “That’s simple,” the farmer replied. “The wind spreads the pollen from everyone’s wheat and carries it from field to field. If my neighbors grew inferior wheat, cross-pollination would degrade everyone’s wheat, including mine. If I’m to grow the best wheat, I must help my neighbors grow the best wheat as well.”
                                                                
                                        </p>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            This is not only excellent advice for growing the best crops, but also great advice for how to live your life.

                                         <br>   If you want to live a meaningful and happy life, help others find happiness.
                                            
                                          <br>  Remember: The value of your life is measured by the lives you touch with love, kindness, respect, and hope.                                        </p>
                                    </div>                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            
                                        </p>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            We should think before judging others. Always be polite and learn to see things from others point of view.                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- // END Header Layout Content -->

 
            @endsection