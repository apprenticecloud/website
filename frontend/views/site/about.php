<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Why Aprentice';
?>
<div class="">
    <section class="why-bunner">
        <h1 class="text-center why-t">About Aprentice Cloud</h1>
    </section>

    <!-- <section class=" container text-center mx-auto ">
        <h1 class="course-title pt-5 text-center pb-5">Comming Soon</h1>    
    </section> -->
    <section class="about" id="about">
        <div class="container">
            <div class="heading text-center">
                <h2>About
                    <span>Us</span>
                </h2>
                <p>Apprentice Cloud exists to create a market ready workforce. We apply a project based learning approach to challenge learners to acquire in demand skills to solve problems in today and future workplace. 
                    Whether you are a fresh graduate entering the work market or an experienced professional in the workplace, the skills gap remains a great threat to your growth. 
                    Systemic challenges, to learners' detriment, have created a mismatch of classroom training and workplace expectations. On the other hand, the volatility of the 21st century workplace requires a well rounded, future ready professional with dynamic skill sets to thrive in an ever changing work environment. 
                    Our programs are tailored for transitions, we work with training organizations and business entities in providing value to our students who are transiting from one level of training to the next. 
                    Ours is a bridge. 
                </p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= Yii::$app->request->baseUrl ?>/img/bunner.jpeg" alt="about" class="img-fluid" width="100%">
                </div>
                <div class="col-lg-6">
                    <h3>Digital Apprenticeship Masterclass (DAM)</h3>
                    <p>The Digital Apprenticeship MasterClass (DAM) equips aspiring developers with practical app and web programming skills needed for employability in the current and future marketplaces. 
                    It bridges the skills gap between classroom training, which is mostly theoretical, and workplace requirements, which are practical and dynamic. 
                    It provides the young professionals with an opportunity to work on real workplace projects as part of cross functional project teams, get mentored by experienced technical mentors and join a certified pool of market-ready software development workforce. </p>

                    <div class="text-center m-5">
                        <a href="<?= Url::to(['site/contact']) ?>" class="btn mybtn btn rounded-pill mb-3">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="">
        <div class="testimonials courses">
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
</div>

