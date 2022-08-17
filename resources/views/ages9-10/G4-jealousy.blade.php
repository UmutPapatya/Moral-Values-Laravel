@extends('front.layouts.master')
@section('title','Moral-Values Ages 9-10')
@section('content')

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="navbar navbar-light border-0 navbar-expand">
                    <div class="container page__container">
                        <div class="media flex-nowrap">
                            <div class="media-left mr-8pt">
                                <a href="#"><img src="{{asset('front/')}}/public/images/story.png""
                                         width="60"
                                         alt="Jealousy"
                                         class="rounded"></a>
                            </div>
                            <div class="media-body">
                                <a href="#"
                                   class="card-title text-body mb-24 mt-8pt"">Jealousy</a>
                                <p class="lh-1 d-flex align-items-center mb-0">
                                    <span class="text-50 small font-weight-bold mr-0pt">Causes and Effects of Jealousy</span>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background-color: #539cb5" class="pb-lg-64pt py-32pt">
                    <div class="container page__container">
                        <div class="row">
                            <div class="col-lg-9 bd-example bd-example-tabs">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="btn btn-white flex-auto mb-8pt mb-sm-0 mr-sm-16pt active show" id="pills-video1-tab" data-toggle="pill" href="#pills-video1" role="tab" aria-controls="pills-home" aria-selected="true">Video 1</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="btn btn-warning flex-auto mb-8pt mb-sm-0 mr-sm-16pt" id="pills-profile-tab" data-toggle="pill" href="#pills-video2" role="tab" aria-controls="pills-profile" aria-selected="false">Video 2</a>
                                    </li>-->
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-video1">
                                        <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt" >
                                            <div class="player embed-responsive-item">
                                                <div class="player__embed">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hQGYqZUJNJI" allowfullscreen=""></iframe>
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
                            
                            <div class="col-lg-3">
                       
                            </div>            
                        </div>
                    </div>
                </div>
      <div class="pb-lg-64pt py-32pt">
        <div class="container page__container">
            <div class="d-flex flex-wrap align-items-end mb-16pt">
                <h2 class="text-dark flex m-0">Stories about Jealousy</h2>
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
                                Ramu and Somu are brothers. Ramu is a very honest and hardworking person. He speaks gently and maintains a healthy relationship with everyone. While Somu is a greedy and cunning person. He is always jealous of Ramu.<br>
                                Once Ramu and Somu decided to keep idli(type of cake made by rice) shops separately. Since Ramu is a very hardworking man and he maintains a good relationship with everyone, his customers started increasing day by day. Since Somu is a very arrogant man, he was unable to get even one customer as well.<br>

                                One day, Somu got jealous of seeing Ramu's success. He started to bad mouth about Ramu. He started spreading a word saying Ramu doesn't use the fresh batter to sell idli. By listening to this everyone started afraid and stopped buying idlis from there. They now started coming to Somu's idli shop.<br>

                                Ramu felt sad. He now thought to prove his innocence. The next day he invited a food collector to his shop and asked to investigate the quality of idlis.  The food collector examined everything and gave a certificate saying the quality is very premium. Hence there is no problem eating over there. <br>

                                The food collector thought of visiting Somu's shop as well. He observed how Somu uses very cheap quality batter for making idlis and there is no kitchen maintenance and no hygiene as well. The food collector got very angry and asked to close the shop immediately. All the people got very angry at Somu and then left for Ramu's shop.<br>

                                Somu felt very bad thinking that he thought of making bad to Ramu's shop but now his shop is only getting closed.   
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
                        </div>         
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
             <!--// END Header Layout Content -->

            @endsection