@extends('front.layouts.master')
@section('title','Contact Page')
@section('content')

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="page-section bg-alt border-bottom-2">
                    <div class="container page__container">

                        <div class="container page__container">
                            <div class="page-headline text-left">
                                <h2>Contact Us</h2>
                                <p class="mx-auto text-100" style="font-size: 20px; line-height: 2.0;">
                                  Do you have something you’d like to let us know? <br>
                                  Whether you have a comment or an idea to share, we look forward to hearing from you.<br>

                                  We try our best to use your suggestions to improve our content. Feel free to reach out to us at
                                  <b><a style="color:blue" href="mailto:contact@moral-values.com">contact@mvalues.com </a></b><br>
                                  
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container page__container">
                  <div class="page-section ">
                    <div class="container page__container">
                      
                      <!--      <div class="col-lg-12 p-0">
                                <div class="alert alert-success" style="font-size: 18px">
                                    <strong>Success!</strong> Thank you for submitting a request.
                                </div>
                            </div>-->
                      <div class="page-headline text-left">
                        <h2>Submit a request</h2>
                        <form action="#" method="post"
                              class="col-md-12 p-0 mx-auto">
                            <div class="list-group list-group-form mb-0">
                                <div class="list-group-item">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="col-form-label form-label col-sm-3">Your email address</label>
                                        <div class="col-sm-12">
                                            <input type="text"
                                                   id="email"
                                                   name="email"
                                                   class="form-control"
                                                   placeholder="Your email address comes here" />
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group list-group-form mb-0">
                                    <div class="list-group-item">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="col-form-label form-label col-sm-3">Subject</label>
                                            <div class="col-sm-12">
                                                <input type="text"
                                                       name="subject"
                                                       class="form-control"
                                                       placeholder="Subject" />
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="list-group list-group-form mb-0">
                                <div class="list-group-item">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="col-form-label form-label col-sm-3">Description</label>
                                        <div class="col-sm-12">
                                          <textarea rows="4"
                                                    class="form-control"
                                                    name="description"
                                                    placeholder="Description ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item text-right">
                                    <button type="submit" name="submit"
                                            class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                      </div>
                  </div>
                    </div>
                  </div>
                </div>

                <div class="container page__container">

                    <div class="text-center">
                        <h2>Meet our leadership team</h2>
                        <p class="mx-auto text-100" style="font-size: 20px; line-height: 2.0;">
                            Our talented team of executives have come together with one goal: to help the students or to your child to understand the morals of life.                 
                          
                        </p>
                    </div>

                    <div class="row card-group-row justify-content-center">

                        <div class="col-md-6 col-xl-3 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="card-header d-flex align-items-center">
                                </div>
                                <div class="card-body flex text-center d-flex flex-column align-items-center justify-content-center">
                                    <span class="avatar avatar-xl overlay js-overlay overlay--primary rounded-circle p-relative o-hidden mb-16pt" data-trigger="hover" data-domfactory-upgraded="overlay">
                                        <img src="{{asset('front/')}}/public/images/people/Adem-Photo-2.jpg" alt="teacher" class="avatar-img">
                                        <span class="overlay__content"><i class="overlay__action material-icons icon-40pt">face</i></span>
                                    </span>
                                    <div class="flex">

                                        <h5 class="mb-0">ADEM TEKN</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                                        <br><span class="small text-uppercase text-muted">Project Coordinator</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-8pt">
                                       <!-- Twitter -->
                                        <!-- <a style="color: #55acee;" href="https://twitter.com/ademtkn" target="_blank" class="fab fa-twitter-square font-size-24pt mr-8pt"></a> -->
                                        
                                        <!-- Google -->
                                        <a style="color: #ffffff; background-color: #dd4b39;" href="mailto:adem.tekin@moral-values.com" class="fab fa-google font-size-20pt mr-8pt"></a>
                                        <!-- Instagram -->
                                        <a style="color: #ac2bac;" href="https://www.instagram.com/ademtkn_" class="fab fa-instagram-square font-size-24pt mr-8pt"></a>
                                        <!-- Linkedin -->
                                        <a style="color: #0082ca" href="https://www.linkedin.com/in/ademtkn" class="fab fa-linkedin font-size-24pt"></a>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="card-header d-flex align-items-center">
                                </div>
                                <div class="card-body flex text-center d-flex flex-column align-items-center justify-content-center">
                                    <span class="avatar avatar-xl overlay js-overlay overlay--primary rounded-circle p-relative o-hidden mb-16pt" data-trigger="hover" data-domfactory-upgraded="overlay">
                                        <img src="{{asset('front/')}}/public/images/people/Umut-Photo-1.jpg" alt="teacher" class="avatar-img">
                                        <span class="overlay__content"><i class="overlay__action material-icons icon-40pt">face</i></span>
                                    </span>
                                    <div class="flex">
 

                                        <h5 class="mb-0">UMUT PAPATYA</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                                        <br><span class="small text-uppercase text-muted">Developer</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-8pt">
                                        <!-- Facebook 
                                        <a style="color: #3b5998;" href="https://www.facebook.com/UmutPapatya" class="fab fa-facebook-square font-size-24pt mr-8pt"></a>-->
                                        <!-- Google -->
                                        <a style="color: #ffffff; background-color: #dd4b39;" href="mailto:umut.papatya@moralvalues.com" class="fab fa-google font-size-20pt mr-8pt"></a>
                                        <!-- Linkedin -->
                                        <a style="color: #0082ca" href="" class="fab fa-linkedin font-size-24pt"></a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="card-header d-flex align-items-center">
                                </div>
                                <div class="card-body flex text-center d-flex flex-column align-items-center justify-content-center">
                                    <span class="avatar avatar-xl overlay js-overlay overlay--primary rounded-circle p-relative o-hidden mb-16pt" data-trigger="hover" data-domfactory-upgraded="overlay">
                                        <img src="{{asset('front/')}}/public/images/people/Betul-Photo-1.jpg" alt="teacher" class="avatar-img">
                                        <span class="overlay__content"><i class="overlay__action material-icons icon-40pt">face</i></span>
                                    </span>
                                    <div class="flex">

                                        <h5 class="mb-0">BETUL CIVELEK</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                                        <br><span class="small text-uppercase text-muted">CONTENT EDITOR</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-8pt">
                                         <!-- Google -->
                                        <a style="color: #ffffff; background-color: #dd4b39;" href="mailto:betul.civelek@moral-values.com" class="fab fa-google font-size-20pt mr-8pt"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>

            </div>

            <!-- // END Header Layout Content -->

@endsection