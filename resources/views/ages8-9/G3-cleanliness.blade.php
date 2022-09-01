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
                                         alt="cleanliness"
                                         class="rounded"></a>
                            </div>
                            <div class="media-body">
                                <a href="#"
                                   class="card-title text-body mb-24 mt-8pt"">Cleanliness</a>
                                <p class="lh-1 d-flex align-items-center mb-0">
                                    <span class="text-50 small font-weight-bold mr-0pt">Importance of Cleanliness</span>

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
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ENOL1RJ1u4s" allowfullscreen=""></iframe>
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
                                                        <a target="_blank" href="https://docs.google.com/presentation/d/1_alJWcNmlH4c-uaeiKCx0lVDsv2tTSId/edit?usp=sharing&ouid=100744614925055123462&rtpof=true&sd=true">
                                                        <img src="{{asset('front/')}}/public/images/files/pptfile.png" alt="logo"></a>
                                                        </td>
                                                        <td class="">Keep your school clean & tidy</td>
                                                        <td align="right">
                                                        <span class="badge badge-success">6 slides</span>
                                                        </td></a>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40px">
                                                        <a target="_blank" href="https://drive.google.com/file/d/1HjJaLE1k4PpjqiKIE59U4BVmTHY8SKNy/view?usp=sharing">
                                                        <img src="{{asset('front/')}}/public/images/files/pdffile.png" alt="logo"></a>
                                                        </td>
                                                        <td class="">Cleaning Poster</td>
                                                        <td align="right">
                                                        <span class="badge badge-info">1 page</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40px">
                                                        <a target="_blank" href="https://drive.google.com/file/d/1ewMjD8_6SW-Ips6F5JmTEB-wVAFSMAJ5/view?usp=sharing">
                                                        <img src="{{asset('front/')}}/public/images/files/zipfile.png" alt="logo"></a>
                                                        </td>
                                                        <td class="">Cleaning Poster_Package</td>
                                                        <td align="right">
                                                        <span class="badge badge-success">1 Page</span>
                                                        </td></a>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40px">
                                                        <a target="_blank" href="https://docs.google.com/document/d/103evFvF3_IDTMWYYE0wdAjwtpWLc4on8/edit?usp=sharing&ouid=100744614925055123462&rtpof=true&sd=true">

                                                        <img src="{{asset('front/')}}/public/images/files/wordfile.png" alt="logo">
                                                        </td>
                                                        <td class="">Instructions</td>
                                                        <td align="right">
                                                        <span class="badge badge-warning">4 Pages</span>
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
                            <h2 class="text-dark flex m-0">Stories about Cleanliness</h2>
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
                                            Once upon a time there was a boy named Roy, he was very good at sports in school and used to play for school team. Roy’ s mother was very proud of him but she was only worried about one habbit of his - staying dirty. Even though after reminding several tines, Roy never bothered to brush teeth twice, take bath and wear clean clothes. He just used to pick watever he saw first and wear it, even though he had worn it yersterday and played in it.<br>

Today was a big day for Roy as cricket team selection committe was coming to select team for state level from their school. Roy had practised late yesterday so got up a bit late in the morning. As soon as he got up he rushed to school in the same clothes he was practising yesterday and had slept. He did not even update his mother just ran out of the house rushing to school. His mother kept calling from behind but he did not listen.<br>

He reached on time to join the line that was made to pick the teams. Roy’s turn came and as scheduled like others he started giving his introduction explaining his experience around cricket he had played. Roy’s sports teacher started praising him infront of selection committe. Roy was really feeling proud and sure that he will be selected. The committe was moving selected students in the right and others to left, they moved Roy to the left. He was shocked and could not believe the decision.<br>

Storming towards the committe he questioned, “There is a mistake, i am the best in team here sir!”<br>

One of the members calmly replied,” Person who does not respect the importance of the game to dress according to it cannot be part of our team. Cricket is a gentleman’s game and a gentleman is always clean and presentable”.<br>

Roy stood there speechless, learning the lesson for his life.   
                                        </p>
                                    </div>
                                 <!--   <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            Do not malignant or blame anyone without knowing the fact or a truth. Your words may ruin someone’s reputation without any fault of theirs.
                                        </p>
                                    </div>-->
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            Once upon a time, there lived a small boy named Sachin. Sachin is a very naughty boy in the classroom. He always throws bits of paper and packets everywhere in the classroom. He makes his surroundings messy.<br>
                                            Everyone in the classroom asked Sachin not to throw bits of paper everywhere and maintain cleanliness but Sachin never listened to anyone in the classroom. Everyone started complaining about Sachin for not maintaining cleanliness in the classroom to Miss Mary who was in charge of the class.<br>

                                            Miss Mary then decided to change the behavior of Sachin. She called Sachin and tried to explain to Sachin the importance of cleanliness. But it was of no use. So Miss Mary thought of another plan to teach Sachin the importance of cleanliness.<br>

                                            The next day, Miss Mary announced that she would give a star to everyone who spends 5 mins a day cleaning their surroundings. She announced that the place to clean can be anywhere. She also announced that a special gift will be given at the month end to the student who gets more stars.<br>

                                            Every student got excited. Sachin's friends started spending 5 mins a day cleaning their surroundings to get stars at the end of the day.<br>

                                            Sachin used to observe this every day. One day he decided to spend time cleaning his surroundings. He then started cleaning his surroundings and forgot about the time and cleaned everything like his bag, books, table, etc. <br>
                                            Within no time, everything was looking clean and tidy. Sachin felt much happy looking at the result. On that day, Miss Mary saw this and felt much happy. She called Sachin and asked everyone to clap for Sachin as he started to keep his surroundings clean and tidy. <br>

                                            Miss Mary gave a star to Sachin. Sachin felt very happy about taking the star for the first time. From that day, he started keeping everything clean and tidy. Soon cleanliness became his routine and he started liking to keep everything tidy. <br>

                                            After a month, Miss Mary announced a special gift to Sachin and asked everyone to take Sachin as inspiration. Sachin felt very happy and thanked Miss Mary for showing him the importance of cleanliness.<br>

                                            So, friends, Cleanliness is very important in our life. Make a habit of cleaning for only 5 minutes a day. You will be surprised to see how that 5 mins can make you to a habit of maintaining cleanliness. Make sure you try this and comment to us with the results.
                                        </p>
                                    </div>
                                 <!--   <div class="d-flex flex-wrap align-items-end mb-16pt">
                                        <h2 class="text-dark flex m-0">Moral of the Story</h2>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <p class="hero__lead measure-hero-lead text-dark mb-24pt">
                                            We should think before judging others. Always be polite and learn to see things from others point of view.                                        </p>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- // END Header Layout Content -->
        
 
            @endsection