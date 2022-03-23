<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Aprentice cloud';
?>
<div class="">


    <!-- Hero -->
    <section class="hero p-5">
        <div class="container h-c">
            <h1 class="h-1 pb-4">Ours is a bridge... <br>
                Bridging Skills Gap! </h1>
            <p class="h-2 pb-4">Whether you are a fresh graduate entering the work market or an experienced professional in the workplace, the skills gap remains a great threat to your growth.</p>
            <a href="https://forms.gle/zzAKsTdFQnFrNWw79" class="mybtn btn rounded-pill ">
                Admission
            </a>
        </div>
    </section>
    <section class="course mx-auto text-center">
        <div class="container p-5">
            <div class="row justify-content-center">
                <div class="alert alert-info" role="alert">
                    <h5 class="course-title">Digital Apprenticeship Masterclass (DAM)</h5><br />
                    <p>The Digital Apprenticeship MasterClass (DAM) equips aspiring developers with practical app and web programming skills needed for employability in the current and future marketplaces.
                        It bridges the skills gap between classroom training, which is mostly theoretical, and workplace requirements,
                        which are practical and dynamic.</p>
                    <hr>
                    <p class="mb-0">It provides the young professionals with an opportunity to work on real workplace projects as part of cross functional project teams,
                        get mentored by experienced technical mentors and join a certified pool of market-ready software development workforce. </p>
                </div>
            </div>
        </div>

        <h5 class="course-title">What is in the BOX?</h5>
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-md-6  mb-3 mycont">
                    <a href="<?= Url::to(['site/course']) ?>">
                        <div class="card">
                            <img class="card-img" src="https://images.unsplash.com/photo-1512149673953-1e251807ec7c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Bologna">
                            <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                                <h6 class="card-subtitle mb-2">SOFTWARE DEVELEPMENT FUNDAMENTAL</h6>
                                <h4 class="card-title">DAM Foundation-6 weeks</h4>

                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-3 mycont">
                    <a href="<?= Url::to(['site/course']) ?>">
                        <div class="card">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80"
                                alt="Bologna">
                            <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                                <h6 class="card-subtitle mb-2">INTERMEDIATE</h6>
                                <h4 class="card-title">DAM Intermediate-10 weeks</h4>

                            </div>
                        </div>
                    </a>
                </div> -->
                <div class="col-12 col-md-6 mb-3 mycont">
                    <a href="<?= Url::to(['site/advance']) ?>">
                        <div class="card">
                            <img class="card-img" src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Bologna">
                            <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                                <h6 class="card-subtitle mb-2">FULL STACK WEB AND MOBILE DEVELOPMENT</h6>
                                <h4 class="card-title">DAM Advanced-20 weeks</h4>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="p-5">
            <a href="https://forms.gle/zzAKsTdFQnFrNWw79" class="mybtn btn btn-outline rounded-pill ">Admission</a>
        </div>
        <!-- <div class="mybtn btn rounded-pill mb-3">
            Admission
        </div> -->
    </section>
    <!-- <section class="courses mx-auto text-center pb-5 pt-5">
        <h5 class="course-title pb-4">Recent Blogs</h5>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 ">
                    <div class="card mcard shadow">
                        <img class="card-img" src="https://source.unsplash.com/1600x900/?green,dark,table"
                            alt="succulent">

                        <div class="card-body blog-home">
                            <h4 class="card-title">Workforce: our short and certifying training courses at KES 0 overdue
                            </h4>
                            <p class="card-text">Are you an employee or job seeker?
                                Simplon.co offers you short and certifying training courses to acquire the essential
                                skills in a digitized professional environment.
                            </p>
                            <a href="">Learn More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="card shadow">
                        <img class="card-img" src="https://source.unsplash.com/1600x900/?succulent,dark,table"
                            alt="succulent">

                        <div class="card-body blog-home">
                            <h4 class="card-title">Workforce: our short and certifying training courses at KES 0 overdue
                            </h4>
                            <p class="card-text">Are you an employee or job seeker?
                                Simplon.co offers you short and certifying training courses to acquire the essential
                                skills in a digitized professional environment.
                            </p>
                            <a href="">Learn More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section>
        <div class="testimonials">
            <div class="testimonial-inner">
                <h5 class="course-title text-center pt-3">Testimonial</h5>
                <div class="border"></div>
              
              <div class="row">
                <div class="col">
                  <div class="testimonial shadow">
                    <img src="https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                    <div class="name">John Waddrob</div>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque repellat aspernatur temporibus assumenda sint odio minima. Voluptate alias possimus aspernatur voluptates excepturi placeat iusto cupiditate.</p>
                  </div>
                </div>
                
                <div class="col">
                  <div class="testimonial shadow">
                    <img src="https://images.pexels.com/photos/3585325/pexels-photo-3585325.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                    <div class="name">John Waddrob</div>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque repellat aspernatur temporibus assumenda sint odio minima. Voluptate alias possimus aspernatur voluptates excepturi placeat iusto cupiditate.</p>
                  </div>
                </div>
                
                <div class="col">
                  <div class="testimonial shadow">
                    <img src="https://images.pexels.com/photos/2690323/pexels-photo-2690323.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                    <div class="name">John Waddrob</div>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque repellat aspernatur temporibus assumenda sint odio minima. Voluptate alias possimus aspernatur voluptates excepturi placeat iusto cupiditate!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section> -->
    <section class="contact text-center pt-5 pb-5">
        <h1 class="pb-5">Need Some information?</h1>
        <!-- <div class="mybtn-cont btn rounded-pill ">
            Contact Us
        </div> -->
        <a href="<?= Url::to(['site/contact']) ?>" class="mybtn-cont btn rounded-pill ">Contact Us</a>
    </section>
</div>