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
                                         alt="School Rules"
                                         class="rounded"></a>
                            </div>
                            <div class="media-body">
                                <a href="#"
                                   class="card-title text-body mb-24 mt-8pt"">School Rules</a>
                                <p class="lh-1 d-flex align-items-center mb-0">
                                    <span class="text-50 small font-weight-bold mr-0pt">Importance of School Rules</span>

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
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uWXPCP8t00M" allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                        </div>
                                     <!--  <div class="d-flex flex-wrap align-items-end mb-16pt">
                                            <h2 class="text-white flex m-0">Moral of the Video</h2>
                                        </div>    
                                        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                            <p class="hero__lead measure-hero-lead text-white mb-24pt">
                                                Your friend always sees the brighter side of you! No matter what your friend will always come to rescue you be it any circumstance!
                                            </p>
                                        </div>-->
                                    </div>

                                    <div class="tab-pane fade" id="pills-video2">
                                        <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt">
                                            <div class="player embed-responsive-item">
                                                <div class="player__embed">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iQxK-Ah7has" allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    <!--     <div class="d-flex flex-wrap align-items-end mb-16pt">
                                            <h2 class="text-white flex m-0">Moral of the Video 2</h2>
                                        </div>    
                                        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                            <p class="hero__lead measure-hero-lead text-white mb-24pt">
                                                Your friend always sees the brighter side of you! No matter what your friend will always come to rescue you be it any circumstance!
                                            </p>
                                        </div>-->
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
                                                        <img src="{{asset('front/')}}/public/images/files/pdffile.png" alt="logo"></a>
                                                        </td>
                                                        <td class="">Banner</td>
                                                        <td align="right">
                                                        <span class="badge badge-success">7 Pages</span>
                                                        </td></a>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40px">
                                                        <a target="_blank" href="https://docs.google.com/presentation/d/1_alJWcNmlH4c-uaeiKCx0lVDsv2tTSId/edit?usp=sharing&ouid=100744614925055123462&rtpof=true&sd=true">
                                                        <img src="{{asset('front/')}}/public/images/files/pptfile.png" alt="logo"></a>
                                                        </td>
                                                        <td class="">Keep your school clean & tidy</td>
                                                        <td align="right">
                                                        <span class="badge badge-info">6 Slides</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40px">
                                                        <a target="_blank" href="https://drive.google.com/file/d/1flhdtwGyUy2ej8dOP20raZ0qn-Zn9m7z/view?usp=sharing">
                                                        <img src="{{asset('front/')}}/public/images/files/pdffile.png" alt="logo"></a>
                                                        </td>
                                                        <td class="">Class Rules Poster</td>
                                                        <td align="right">
                                                        <span class="badge badge-success">1 Page</span>
                                                        </td></a>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40px">
                                                        <a target="_blank" href="https://docs.google.com/document/d/1DjlNzv41kVmYLwOgRapQCAf3HZoeUnHK/edit?usp=sharing&ouid=100744614925055123462&rtpof=true&sd=true">

                                                        <img src="{{asset('front/')}}/public/images/files/wordfile.png" alt="logo">
                                                        </td>
                                                        <td class="">Instructions</td>
                                                        <td align="right">
                                                        <span class="badge badge-warning">3 Pages</span>
                                                        </td></a>
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
                            <h2 class="text-dark flex m-0">Stories about Rules</h2>
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
                                        <p></p>
                                    </div>
                              <!--       <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            Your friend always sees the brighter side of you! No matter what your friend will always come to rescue you be it any circumstance!
                                        </p>
                                    </div> -->                               
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">Second There were two friends who were walking across a desert. While they were walking they got into an ugly argument and out of anger one of them slapped the other on the face. The one who was slapped, though was hurt he did not said anything and quietly wrote over the sand "I am hurt because today my friend hit me on my face". They resumed walking and kept walking until they came across an oasis. They decided to take bath in the oasis then. While they were taking bath the one who had got slapped started drowning. The other friend came to his rescue and saved him. After he got rescued, he wrote on the stone "Today I was saved by my best friend".

                                            The other friend asked him, "Why did you write on the sand when I slapped you while you wrote on the stone when I saved you?" Upon this, the other friend replied that its better we write on sand when your friend hurts you as it will be gone with the wind but write it on stone when your friend does something good to you so that it could be engraved forever.

                                        </p>
                                    </div>
                                   <!--  <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Second Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            Second Your friend always sees the brighter side of you! No matter what your friend will always come to rescue you be it any circumstance!
                                        </p>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // END Header Layout Content -->

     
            @endsection