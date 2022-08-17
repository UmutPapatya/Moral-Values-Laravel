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
                                         alt="honesty"
                                         class="rounded"></a>
                            </div>
                            <div class="media-body">
                                <a href="#"
                                   class="card-title text-body mb-24 mt-8pt"">Honesty</a>
                                <p class="lh-1 d-flex align-items-center mb-0">
                                    <span class="text-50 small font-weight-bold mr-0pt">Importance of Honesty</span>

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
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gKZZLlkfTDw" allowfullscreen=""></iframe>
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
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/F_F8vTUApHk" allowfullscreen=""></iframe>
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
                        <h2 class="text-dark flex m-0">Stories about Honesty</h2>
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
                                        Once upon a time, while flying through the air, a stork noticed the sparkle of a ring. It belonged to a rabbit who was getting married that day. The rabbit went inside its burrow leaving the ring outside, and the stork decided to try it on quickly without asking. However, when she tried to take the ring off again, it got stuck on her finger and she thought:<br>

                                        "Oh no! They’re going to catch me. I’ll have to think of something!"<br>
                                        Taking advantage of the fact that nobody had seen her, she flew off thinking she could return the ring when she eventually got it off her finger.<br>

                                        The rabbit was very annoyed to find that the ring had been stolen. But he was a good detective and very quickly everyone in the forest was looking for a bird with a ring. When the stork found out, she thought to herself:<br>

                                        "How embarrassing! They’re going to catch me. I’ll have to think of something!"<br>
                                        And she quickly decided to hide the ring by dipping her feet in a bucket of black paint that she found near to where they were setting up the wedding.<br>

                                        However, as she flew away lots of the paint dripped off onto the tablecloths and onto the bride’s dress, ruining them! When the rabbit arrived and saw the disaster, he was furious. Forgetting about the ring, he sent everybody off to look for a bird with feet painted black. When the stork found out, she thought to herself:<br>

                                        "How embarrassing! They’re going to catch me. I’ll have to think of something!"<br>

                                        And so she decided to bandage her feet and pretend that she’d had an accident. The stork thought that she had solved the problem, but shortly after she bumped into the rabbit himself who, seeing the stork was hurt felt sorry for her and insisted on taking her to the hospital for an X-ray.<br>

                                        The stork just couldn’t say no. But she knew that if they did an X-ray they would find the ring and if they took off the bandage they would see the paint, so she said to herself:<br>
                                        “How embarrassing! They’re going to catch me. I’ll have to think of something!"<br>

                                        Given that her house was on the way to the hospital, she asked the rabbit to wait for a moment while she went to fetch a few things. Once inside her house, the stork took off the bandages and wrapped her feet in lead plates so the ring would not show up in the X-ray. She then put the bandages back on with loads of glue, making it impossible to take them off. The stork thought that by doing this she could go to the doctor without being found out and, later on, would find a way to return the ring to the rabbit.<br>

                                        Feeling more relaxed, the stork flew off to meet up with the rabbit, not realising that she wouldn’t be able to fly with so much weight attached to her feet. As soon as she left her nest, she began to fall like a heavy stone and could do nothing to stop herself from crashing to the ground.<br>

                                        However, she didn’t land on the ground. Instead, she landed on the poor rabbit, who had no time to get out of the way.<br>
                                        Ambulances, police, doctors and hundreds of animals rushed to the scene and asked the stork how she had come to fall on the rabbit. When they found the bandages, the lead, the paint and the ring, they all thought the fall was the final part of the storks’ cruel plan to ruin the rabbit’s wedding. In one single morning, the stork had become the most hated animal in the whole forest and lost all her friends.<br>

                                        Only after a long time did the rabbit dare visit the stork and he still couldn’t understand why she had insisted on ruining his wedding. Full of remorse, the stork begged the rabbit for forgiveness and told him the story of the ring and everything that had happened afterwards.<br>

                                        “I would never have imagined that all this could happen just because you tried the ring on without permission”, said the rabbit laughing.<br>

                                        “It wasn’t even because of that” the embarrassed stork replied. “It was everything I had to do to hide the ring over and over again. You wouldn’t have been as annoyed if you had found me trying it on and had to help me take it off.”<br>

                                        Seeing that the stork had learned her lesson, the rabbit publicly forgave her so she could get her friends back and tell her story, which helped everyone understand that the truly worst thing about telling little lies are the bigger lies that have to be invented to cover them up.<br>
                                    </p>
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
                                    <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                        One day, Taufiq’s father gave him a little axe. This little axe was very beautiful. It was sharp edged and had a wooden handle. Taufiq was very eager to try his axe on something. So, he went straight to the garden of his home and started cutting plants. He cut down many flowers and branches. Then, his eye fell on the young apple tree. He soon cut off its many branches. The tree was almost cut down.<br>
                                        In the evening, TAUFIQ’S father went to water the plants. To his great shock, he saw the destruction in the garden. The apple tree was almost lying on the ground. He called out Taufiq and asked him angrily, “Have you done this,?” what do you think the answer Taufiq gave? Did he tell a lie? Did he lay blame on somebody else? No, with tears in his eyes, he said, “Dad, I did this with the little axe you gave me. I am really sorry.”
                                        On hearing this reply, his father’s anger cooled off. He patted him and said, “I am happy you have spoken the truth and did not make any excuses. I am glad that you have the courage to admit your mistake. I would rather lose all the trees in my garden than hear my son tell a lie.                                            
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

            <!-- // END Header Layout Content -->

   @endsection