<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

?>
<section class="why-bunner text-left pl-5" style="">
  <h1 class=" why-t ">Software Development Course</h1>
</section>
<section class="course container mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="shadow ">
        <div class="container card course-top ">
          <div class="row">
            <div class="col-md-4 text-center  ">
              <i class="far fa-clock mb-3"></i>
              <p>Course Duration</p>
              <h5>20 weeks</h5>
            </div>
            <div class="col-md-4 text-center top-icon">
              <i class="fas fa-calendar-week mb-3 "></i>
              <p>Course Start</p>
              <h5>22nd MAY 2022</h5>
            </div>
            <div class="col-md-4 text-center ">
              <i class="fas fa-money-check mb-3"></i>
              <p>Course Fee</p>
              <h5>Kes 99 900</h5>
            </div>

          </div>
        </div>
        <div class="course-desc container acco-card">
          <div class="course-desc container pl-5 pr-5 pt-5">
            <h5 class="pb-2">Description</h5>
            <p>At Apprentice Cloud, we aim to engage our students as much as possible in their training and to encourage them to take active responsibility for their learning, thanks to a specific pedagogical approach. Our goal is to train digital professionals who are competent in the workplace. We let our students engage in real-life projects. Just like a flight simulator, we let our students develop the right reflexes. </p>
          </div>
          <div class="course-desc container card-body pl-5 pr-5 ">
            <h5>Areas of specialization in DAM </h5>
            <ol>
              <li>
                DAM Full stack web Development
              </li>
              <li>
                DAM Full Stack Mobile Development
              </li>
            </ol>
          </div>

          <div class="container p-5">
            <h5>DAM Full stack web Development</h5>
            <div>
              <p>In this class, you’ll learn how to build complex websites and web applications. You’ll have understood web app design, project management, and coding.
                By the end of this course you’ll be proficient in;</p>
            </div>
            <div class="row">
              <div class="col-3">
                <img src="https://logos-world.net/wp-content/uploads/2021/10/Python-Symbol.png" alt="python" style="width: 100% ; height: 100%">
              </div>
              <div class="col-3">
                <img src="https://miro.medium.com/max/351/1*qHErF6dRKxFCDTtgpQk9hQ.png" alt="python" style="width: 100%; height: 100%">
              </div>
              <div class="col-3">
                <img src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/104647991/original/713f5097b5d34cd41d807bf8b16b08950a2df875/do-web-development-using-python-django.png" alt="python" style="width: 100%; height: 100%">
              </div>
              <div class="col-3">
                <img src="https://www.pngitem.com/pimgs/m/664-6644509_icon-react-js-logo-hd-png-download.png" alt="python" style="width: 100%; height: 100%">
              </div>
            </div>
            <div class="text-center m-5">
              <a href="https://forms.gle/zzAKsTdFQnFrNWw79" class="btn mybtn btn rounded-pill mb-3">Join Us</a>
            </div>
          </div>
          <div class="container p-5">
            <h5>. DAM Full Stack Mobile Development </h5>
            <div>
              <p>n this track, you will learn how to build apps for Android devices, these include smartphones, tablets, and smartwatches. At the end of the course, you will have built and deployed Android apps.
                By the end of this course you’ll be proficient in;</p>
            </div>
            <div class="row">
              <div class="col-3">
                <img src="https://cdn.freebiesupply.com/logos/large/2x/java-logo-png-transparent.png" alt="python" style="width: 100%; height: 100%">
              </div>
              <div class="col-3">
                <img src="https://cdn.freebiesupply.com/logos/thumbs/2x/kotlin-2-logo.png" alt="python" style="width: 100%; height: 100%">
              </div>
              <div class="col-3">
                <img src="data:image/png;base64,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" alt="python" style="width: 100%; height: 100%">
              </div>
              <div class="col-3">
                <img src="https://www.pngitem.com/pimgs/m/664-6644509_icon-react-js-logo-hd-png-download.png" alt="python" style="width: 100%; height: 100%">
              </div>
            </div>
            <div class="text-center m-5">
              <a href="https://forms.gle/zzAKsTdFQnFrNWw79" class="btn mybtn btn rounded-pill mb-3">Join Us</a>
            </div>
          </div>
          <h2 class="accordion-header headings">
            <a style="color: red; font-weight:bold" href="<?= Yii::$app->request->baseUrl ?>/img/course.pdf" download="Curriculum.pdf" class="accordion-button collapsed d-flex align-items-center justify-content-between btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Download Pdf
              <span class="fa-stack fa-sm">
                <i class="fas fa-download 5x"></i>
                <i class="fas fa-minus fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </h2>
          <!-- <div class="course-desc container">
              <div id="" class="myaccordion">
                <h5 class="mb-4">Programme</h5>
                <div class="card card-accordion pb-3">
                  <div class="accordion-item myaccordion accordion">
                    <h2 class="accordion-header headings" id="headingTwo">
                      <button class="accordion-button collapsed d-flex align-items-center justify-content-between btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        WEEK 1 (Introduction, HTML, CSS,GIT & GITHUB)
                        <span class="fa-stack fa-sm">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-minus fa-stack-1x fa-inverse"></i>
                        </span>
                      </button>
                    </h2>

                    <div id="collapseTwo" class="accordion-collapse collapse-r" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body-r">
                        <div class="card-body red m-auto">
                          <p>We use this week to onboard you and lay a foundation. You get introduced to software development, project management, collaboration and web design tools. You also get to learn more about active pedagogy which is our approach to learning. </p>
                          <div class="row">
                            <ul class="col-md-6">
                              <li>Command Line</li>
                              <li>Text Editors & IDE’s</li>
                              <li>Version Control & GIT</li>
                              <li>Basic HTML & HTML5</li>
                              <li>Basic CSS</li>
                              <li>Debugging HTML & CSS</li>
                            </ul>
                            <ul class="col-md-6">
                              <li>Applied Visual Design & Applied Accessibility</li>
                              <li>Responsive Web Design Principles</li>
                              <li>CSS Flexbox & CSS Grid</li>
                              <li>GitHub Pages</li>
                              <li>Project
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item myaccordion accordion">
                    <h2 class="accordion-header headings" id="headingTwo">
                      <button class="accordion-button collapsed d-flex align-items-center justify-content-between btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        WEEK 2 (Introduction to JavaScript)
                        <span class="fa-stack fa-sm">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-minus fa-stack-1x fa-inverse"></i>
                        </span>
                      </button>
                    </h2>

                    <div id="collapseTwo" class="accordion-collapse-r collapse-r" aria-labelledby="collapseTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body-r">
                        <div class="card-body red m-auto">
                          <p>At this point the foundation is well laid and you have an idea of what web design entails. So it's time to build on the already acquired skills and perfect them as you learn other skills as well.
                          </p>
                          <div class="row">
                            <ul class="col-md-6">
                              <li>Introduction to JavaScript</li>
                              <li>JavaScript console </li>
                              <li>Fundamental JavaScript</li>
                              <li>Javascript functions</li>
                              <li>Business vs User interface logic</li>
                            </ul>
                            <ul class="col-md-6">
                              <li>Control flows</li>
                              <li>Logical operators</li>
                              <li>Arrays</li>
                              <li>Looping</li>
                              <li>Project</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item myaccordion accordion">
                    <h2 class="accordion-header headings" id="headingTwo">
                      <button class="accordion-button collapsed d-flex align-items-center justify-content-between btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        WEEK 3 (JavaScript For Web & Frontend Development) <span class="fa-stack fa-sm">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-minus fa-stack-1x fa-inverse"></i>
                        </span>
                      </button>
                    </h2>

                    <div id="collapseTwo" class="accordion-collapse-r collapse-r" aria-labelledby="collapseTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body-r">
                        <div class="card-body red m-auto">
                          <p>Adding fuctionality to your website.
                          </p>
                          <div class="row">
                            <ul class="col-md-6">
                              <li>Bootstrap & Bootstrap documentation</li>
                              <li>JQuery</li>
                              <li>jQuery effects</li>
                              <li>DOM manipulation and traversal</li>
                              <li>Variable Scope</li>
                            </ul>
                            <ul class="col-md-6">
                              <li>Forms</li>
                              <li>Debugging in JavaScript</li>
                              <li>Figma for UI & UX Design</li>
                              <li>Project</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item myaccordion accordion">
                    <h2 class="accordion-header headings" id="headingTwo">
                      <button class="accordion-button collapsed d-flex align-items-center justify-content-between btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        WEEK 5 (Data Modeling, JavaScript Algorithms and Data Structures) <span class="fa-stack fa-sm">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-minus fa-stack-1x fa-inverse"></i>
                        </span>
                      </button>
                    </h2>

                    <div id="collapseTwo" class="accordion-collapse-r collapse-r" aria-labelledby="collapseTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body-r">
                        <div class="card-body red m-auto">
                          <p>Dealing with data web Development.
                          </p>
                          <div class="row">
                            <ul class="col-md-6">
                              <li>ntermediate Algorithm Scripting</li>
                              <li>Introduction to databases & Data modeling</li>
                              <li>SQL Essential Training, Data Modeling</li>
                            </ul>
                            <ul class="col-md-6">
                              <li>NoSQL Essential Training</li>
                              <li>Project</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item myaccordion accordion">
                    <h2 class="accordion-header headings" id="headingTwo">
                      <button class="accordion-button collapsed d-flex align-items-center justify-content-between btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        WEEK 6 (Masterpiece project)
                        <span class="fa-stack fa-sm">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-minus fa-stack-1x fa-inverse"></i>
                        </span>
                      </button>
                    </h2>

                    <div id="collapseTwo" class="accordion-collapse-r collapse-r" aria-labelledby="collapseTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body-r">
                        <div class="card-body red m-auto">
                          <p>Project Phase.
                          </p>
                          <div class="row">
                            <ul class="col-md-6">
                              <li>Designs & mockups</li>
                              <li>Frontend design and development</li>
                              <li>Data Modeling, Dynamic Web development</li>
                              <li>Data Structures & Algorithm Scripting</li>
                            </ul>
                            <ul class="col-md-6">
                              <li>Team formation & Git Collaboration </li>
                              <li>Agile, project management </li>
                              <li>User requirements gathering</li>
                              <li>Presentation Skills</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h2 class="accordion-header headings" id="headingTwo">
                    <a href="<?= Yii::$app->request->baseUrl ?>/img/course.pdf" download="Curriculum.pdf" class="accordion-button collapsed d-flex align-items-center justify-content-between btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Download Pdf
                      <span class="fa-stack fa-sm">
                        <i class="fas fa-download 3x"></i>
                        <i class="fas fa-minus fa-stack-1x fa-inverse"></i>
                      </span>
                    </a>
                  </h2>
                </div>
              </div>  
            </div> -->
        </div>
      </div>

    </div>
    <!-- <div class="col-md-4">
      <div class="">
        <h5 class="text-center">Contact us</h5>
        <form>
          <ul>
            <li>
              <label for="name"><span>Name <span class="required-star">*</span></span></label>
              <input type="text" id="name" name="user_name">
            </li>
            <li>
              <label for="mail"><span>Email <span class="required-star">*</span></span></label>
              <input type="email" id="mail" name="user_email">
            </li>
            <li>
                <label for="mail"><span>Course intested <span class="required-star">*</span></span></label>
                <select name="cars" id="cars">
                  <option value="web">Web Development</option>
                  <option value="app">Mobile development</option>
                  <option value="ux">UX/UI design</option>
                </select>
              </li> 
            <li>
              <label for="msg"><span>Message</span></label>
              <textarea rows="4" cols="50"></textarea>
            </li>
            <li>
              <input type="submit">
            </li>
          </ul>
        </form>
      </div>

    </div> -->

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
    </section>  -->