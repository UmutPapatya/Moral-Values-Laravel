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
                <div style="background-color: #5567ff" class="pb-lg-64pt py-32pt">
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
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iQxK-Ah7has" allowfullscreen=""></iframe>
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
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            Andy never wanted to go to bed on time. His parents had explained to him how important it was to go to bed early and get a good rest. But Andy paid no attention to them, and they didn't know what to do. That was, until one weekend when they were visiting Andy´s grandparents.<br>

Grandpa Peter heard all about it and said: "This sounds like a job for Tubby, my pot-bellied cat". They loaded the cat onto the car and returned home. Tubby was a slow, inflated-looking kind of a cat. He wasn't much of a bother because most of the time no one knew where he was.<br>
That night, at bedtime, the same problem arose. Andy had no intention of going to bed, and even though his parents waited a while to see if Tubby would solve the problem, nothing happened.

Hours later, Andy finally decided to go to bed. But what a surprise when he entered his bedroom! Tubby was in his bed, totally sprawled out, pot-belly in the air, and snoring like an express train. Andy tried to shift the cat, but there was no way of moving him an inch. That night he hardly slept a wink, being pushed over into one tiny corner of his bed.<br>
The next day the same thing happened, even though Andy was much more tired from not having slept. When the third day arrived, he had understood that if he wanted to sleep in his bed, he would have to get into it before Tubby did. That night, when his parents merely started hinting at the topic of bedtime, Andy shot upstairs like a bullet, and dived into bed. His parents could not believe it. They knew nothing about Tubby in the bed, nor did they understand why Andy went to bed on time, without complaint. They were so happy about this that they stayed up quite late, celebrating, but...<br>

... can you guess where Tubby slept that night? :-))
                                        </p>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            Your friend always sees the brighter side of you! No matter what your friend will always come to rescue you be it any circumstance!
                                        </p>
                                    </div>                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">Second There were two friends who were walking across a desert. While they were walking they got into an ugly argument and out of anger one of them slapped the other on the face. The one who was slapped, though was hurt he did not said anything and quietly wrote over the sand "I am hurt because today my friend hit me on my face". They resumed walking and kept walking until they came across an oasis. They decided to take bath in the oasis then. While they were taking bath the one who had got slapped started drowning. The other friend came to his rescue and saved him. After he got rescued, he wrote on the stone "Today I was saved by my best friend".

                                            The other friend asked him, "Why did you write on the sand when I slapped you while you wrote on the stone when I saved you?" Upon this, the other friend replied that its better we write on sand when your friend hurts you as it will be gone with the wind but write it on stone when your friend does something good to you so that it could be engraved forever.

                                        </p>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Second Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            Second Your friend always sees the brighter side of you! No matter what your friend will always come to rescue you be it any circumstance!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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