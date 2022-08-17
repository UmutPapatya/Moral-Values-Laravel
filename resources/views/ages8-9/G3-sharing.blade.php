@extends('front.layouts.master')
@section('title','Moral-Values Ages 6-7')
@section('content')

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="navbar navbar-light border-0 navbar-expand">
                    <div class="container page__container">
                        <div class="media flex-nowrap">
                            <div class="media-left mr-8pt">
                                <a href="#"><img src="{{asset('front/')}}/public/images/story.png""
                                         width="60"
                                         alt="sharing"
                                         class="rounded"></a>
                            </div>
                            <div class="media-body">
                                <a href="#"
                                   class="card-title text-body mb-24 mt-8pt"">Sharing & Helping</a>
                                <p class="lh-1 d-flex align-items-center mb-0">
                                    <span class="text-50 small font-weight-bold mr-0pt">Importance of Sharing & Helping</span>

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
                               <!-- <li class="nav-item">
                                        <a class="btn btn-warning flex-auto mb-8pt mb-sm-0 mr-sm-16pt" id="pills-profile-tab" data-toggle="pill" href="#pills-video2" role="tab" aria-controls="pills-profile" aria-selected="false">Video 2</a>
                                    </li>-->
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-video1">
                                        <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt" >
                                            <div class="player embed-responsive-item">
                                                <div class="player__embed">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GxcGVCEEdcU" allowfullscreen=""></iframe>
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
                                                    <iframe class="embed-responsive-item" src="#" allowfullscreen=""></iframe>
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
                       
                            </div>            
                        </div>
                    </div>
                </div>
                <div class="pb-lg-64pt py-32pt">
                    <div class="container page__container">
                        <div class="d-flex flex-wrap align-items-end mb-16pt">
                            <h2 class="text-dark flex m-0">Stories about Sharing & Helping</h2>
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
                                            Once there were two brothers who were great friends and always played together. However, one day they had a huge argument about one of their toys. In the end, they decided that from then on they would only be allowed to play with their own individual toys.<br>

                                            They had so many toys and things that they agreed to spend the next day sorting out which toy belonged to whom. So the next day each brother got to work, making a pile of his own things. When they had finished doing the big toys it was time to sort the little stuff. However, they had already taken so long that it was time for bed, so they left the small toys for the next day. The same thing happened the next day, because they had started dividing up parts of the house.<br>  
                                            Day after day it was the same story. They were spending their whole time deciding what, among all kinds of things, belonged to either one of them.
                                            Anything would set them off: seeing an animal, a tree, or even a stone. In the end, they had accumulated two complete mountains of stuff which had to be kept out in front of the house.<br>
                                            
                                            As the years passed, nothing changed: every morning they would meet up to argue about which things belonged to whom. They were getting older, and everyone now knew them as "the grumpy old men". No one had ever seen them smile.<br>
                                            That was, until one morning they went out and found that their two mountains of stuff had been totally mixed up together. Someone had been there, mixing their things up! After all that time and effort they had spent to separate everything!<br>

                                            Furious, the brothers tried to find who had done it. Soon they found a pair of children playing on the other side of the mountains of stuff. They were happily playing together, picking everything up, careless of whether they were mixing it all together. They looked really happy, enjoying themselves to the max.<br>

                                            Seeing the children so happy, the two grumpy old brothers realised how foolish they had been for so many years. They had given up playing with anything, instead spending their whole lives arguing over what was theirs to play with. How sad they felt, for spending their lives in anger. At the same time, though, they were happy to have finally realised their foolishness.<br>

                                            They spent that day, and the rest of their days, playing together with those two children, mixing everything up, and sharing it all. People even stopped calling them the grumpy old men. Now people called them the 'Big Kids'.<br>                    
                                        </p>
                                    </div>
                                   <!-- <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            The importance of cleanliness in our lives cannot be denied. Maintaining a clean environment is for the health of all humans, as their health completely depends on the atmosphere. A bad environment is solely responsible for spoiling the health of the people around. Dirt and disease go together.                                        </p>
                                    </div>        --> 
                                                       </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            There was once a boy who was very rich and clever. He had practically everything a boy could ever want, so he was only interested in the most rare and curious of objects. This happened to him in relation to a very old mirror, and he convinced his parents to buy it from a mysterious old man. When the mirror arrived home, the boy went to see his reflection in it. His face looked very sad indeed. He tried smiling and making funny faces, but his reflection continued with its sad expression.<br>

                                            Surprised, the boy went off to buy sweets. He came home as happy as can be, to look in the mirror, but his image was still sad-looking. He bought all kinds of toys and old junk, but forever looked sad in that mirror. Fed up, the boy stuck the mirror off in a corner.<br>
                                            "Crikey, what a terrible mirror! It's the first time I've seen a mirror that didn't work properly!"

                                            That same afternoon he went into the street to play and to buy a few toys, but on his way to the park he saw a little boy who was crying his heart out. The boy was crying so much, and looked so lonely, that the rich boy went over to help him and to see what had happened. The little one told him that he had lost his parents.<br>
                                            Together the two boys set off in search of them. As the little boy wouldn't stop crying, our boy spent his money on buying him sweets to cheer him up. Finally, after much walking, they found his parents who were out looking for him, very worried.<br>

                                            The rich boy said goodbye, and walked off towards the park. But, seeing the time, he decided to turn round and head for home, without having been able to play, without toys, and without money. At home, he went to his room, and noticed a shining light in the corner; the same corner he had left the mirror in. Seeing this, he went over to the mirror, and realised that the light was coming from his own body, so radiant with happiness he had become.<br>

                                            And so he understood the mystery of that mirror, the only mirror which could faithfully reflect the true joy of its owner. He realised it was true; he felt genuinely happy at having helped that little boy.<br>

                                            And since then, each morning when he looked in that mirror and failed to see a special shine, he already knew what he had to do to bring it back.<br>
                                        </p>
                                    </div>
                                   <!-- <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            yazilacak
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