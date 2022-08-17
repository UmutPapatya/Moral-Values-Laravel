@extends('front.layouts.master')
@section('title','Moral-Values Ages 11-12')
@section('content')

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="navbar navbar-light border-0 navbar-expand">
                    <div class="container page__container">
                        <div class="media flex-nowrap">
                            <div class="media-left mr-8pt">
                                <a href="#"><img src="{{asset('front/')}}/public/images/story.png""
                                         width="60"
                                         alt="cleanliness"
                                         class="rounded"></a>
                            </div>
                            <div class="media-body">
                                <a href="#"
                                   class="card-title text-body mb-24 mt-8pt"">Bullying: Be Kind</a>
                                <p class="lh-1 d-flex align-items-center mb-0">
                                    <span class="text-50 small font-weight-bold mr-0pt">Importance of being kind</span>

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
                                <li class="nav-item">
                                        <a class="btn btn-warning flex-auto mb-8pt mb-sm-0 mr-sm-16pt" id="pills-profile-tab" data-toggle="pill" href="#pills-video2" role="tab" aria-controls="pills-profile" aria-selected="false">Video 2</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-video1">
                                        <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt" >
                                            <div class="player embed-responsive-item">
                                                <div class="player__embed">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/quaIbgWuYic" allowfullscreen=""></iframe>
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
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7oKjW1OIjuw" allowfullscreen=""></iframe>
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
                            <h2 class="text-dark flex m-0">Stories about Bullying</h2>
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
                                            Suraj is a mischievous boy. He always does naughty things. He makes fun of others and laughs at them. But he doesn't know how much his words hurt others.<br>
                                            One day, in his school, Suraj made fun of all girls. He started saying that boys are much powerful while girls are useless. They just sit and enjoy while boys do all the hard work. By listening to this, all boys started laughing and made fun of the girls in the classroom. <br>

                                            All girls in the classroom felt very upset and complained to the teacher about Suraj making fun of them. The teacher thought that it is not right and decided to change the attitude of Suraj and his friends.<br>

                                            The next day, the teacher took all the students on a field trip. She took them to a farm. She pointed to a bull and started saying, "Dear students, bulls help farmers to plow the field, to load cart pulling, to grain threshing, etc. The bull is a very hardworking animal." All the students nodded to the teacher.<br>

                                            Now the teacher called Suraj and asked to say the importance of the cow. Suraj said, "We get milk from cows. Through milk we get curd. We can make many sweets with milk. A cow gives birth to Calf. By listening to this, the Teacher praised Suraj.<br>

                                            Now the teacher started saying, "Suraj, I heard you said girls are useless and only boys do the hard work. Then do you know, Cow is female and a bull is male? So do you think that only bull is important to society and only the bull does hard work? Then where do you get milk from?" Now Suraj started feeling ashamed.<br>
                                            The teacher added, "Suraj, your mother is female and I know your mother does lots of hard work to raise you. I hope now you understood. You should never discriminate against anyone on basis of Gender. All boys and girls are equal. No one is superior to anyone. "<br>

                                            By hearing these words, Suraj felt very sorry. Now Suraj and his friends got to know their mistake. They understood men and women all are equal. From that day onwards, Suraj and his friends started respecting everyone.   <br>
                                        </p>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            Never Gender Discriminate. All Girls and boys are equally powerful in society.                                    </div>                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                          bulunacak
                                        </p>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            The importance of cleanliness in our lives cannot be denied. Maintaining a clean environment is for the health of all humans, as their health completely depends on the atmosphere. A bad environment is solely responsible for spoiling the health of the people around. Dirt and disease go together.                                        </p>
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