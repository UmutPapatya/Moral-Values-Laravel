@extends('front.layouts.master')
@section('title','Moral-Values Grade 3')
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
                              <!--  <li class="nav-item">
                                        <a class="btn btn-warning flex-auto mb-8pt mb-sm-0 mr-sm-16pt" id="pills-profile-tab" data-toggle="pill" href="#pills-video2" role="tab" aria-controls="pills-profile" aria-selected="false">Video 2</a>
                                    </li>-->
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-video1">
                                        <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt" >
                                            <div class="player embed-responsive-item">
                                                <div class="player__embed">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IzEYos5En_k" allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                        </div>
                                 <!--       <div class="d-flex flex-wrap align-items-end mb-16pt">
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
                                                    <iframe class="embed-responsive-item" src="#" allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                        </div>
                                       <!-- <div class="d-flex flex-wrap align-items-end mb-16pt">
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
                               <li class="nav-item">
                                    <a class="btn btn-warning flex-auto mb-8pt mb-sm-0 mr-sm-16pt" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Story 2</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            A King had four daughters, he wanted to see what responsibilities he can give to them. So he gave some wheat grains to each one of them and asked them to come back after an year.<br>
                                            After an year he called all the four daughters and inquired about the wheat.<br>
                                            First daughter : On the same day I fed it to sparrows thinking that they were meant for that. King did not give any responsibility to her.<br>
                                            Second daughter : I put them in the store thinking that they are meant for the poor people and so that everyone could have it.<br>
                                            King : Ok you take care of store.<br>
                                            Third daughter: I saved them safely along with my jewellery and here they are.<br>
                                            King : OK you take care of the treasury<br>
                                            Fourth daughter: I need two bulloks and two men to get the wheat.<br>
                                            All of them laughed and asked why ? So she said, "I sowed the grains and now its grown so big that I need to harvest it and get it on carts.<br>
                                            King : Good you are the best. You take care of the whole house and so saying he gave her the keys<br>              
                                        </p>
                                    </div>
                                   <!-- <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            This is not only excellent advice for growing the best crops, but also great advice for how to live your life.

                                         <br>   If you want to live a meaningful and happy life, help others find happiness.
                                            
                                          <br>  Remember: The value of your life is measured by the lives you touch with love, kindness, respect, and hope.                                        </p>
                                    </div>         -->
                                                       </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            There was a girl called Lucy, who lived in a very small town. She had always wanted to have a pet, but her parents didn´t want her to have one because they said it was a big responsibility.<br>

                                            The girl was very sad, and her parents hated to see her like that. They felt great empathy for Lucy and so decided to buy her a pet, but unfortunately they didn´t have enough money.<br>
                                            That afternoon, the girl went out to the park and saw a little toad, she liked him so much that she took him to her house. On the way home she gave him a name: Ronny.<br>
                                            When she arrived home, her parents saw the toad and said:

                                            – “What are you doing with that toad?”<br>

                                            And she said that as they could not buy her a pet, she had decided to take the toad.<br>

                                            Her mum and her dad got a bit annoyed, and told her that they were not going to take care of the toad. They wanted to take him out of the house, but Lucy promised she was would take care of him and that they didn´t have to worry.<br>

                                            Her parents trusted her and let her keep it, on the condition that she would be responsible and take care of him on her own.<br>

                                            After a few weeks, Lucy forgot to give him food and water. Her parents noticed this and warned her to be careful. They preferred her to set the toad free until she was old enough to have a new pet she could take care of better.<br>

                                            Lucy accepted this but the toad waited for her at the same place, and she visited him ever day.<br>
                                        </p>
                                    </div>
                                 <!-- <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            We should think before judging others. Always be polite and learn to see things from others point of view.                                        </p>
                                    </div>->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- // END Header Layout Content -->

 
            @endsection