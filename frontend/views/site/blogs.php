<?php
use yii\helpers\Url;

?>

<section class=" ">
    <h5 class="course-title pt-5 text-center">Aprentice <span class="span">Blogs</span> </h5>
    <p class="text-center pb-2">Browse through our informational blogs</p>
    <div class="container">
        <div class="row  mx-auto">
            <div class="col-md-8 justify-content-center ">
                <div class="card mb-3" style="max-width: 100%; max-height: 300px;">
                    <div class="">
                        <div class="row g-0">
                            <div class="col-md-4 img-blog">
                                <img
                                 src="https://source.unsplash.com/1600x900/?books,book,desk,shelf" 
                                 class="img-fluid rounded-4" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title blog-t">This is a wider card with supporting</h5>
                                    <div class="card-p">
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                            I want it to be longer to see if it dissappers. text below as a natural
                                            lead-in to additional content. This content is a little bit longer. I want
                                            it to be longer to see if it dissappers</p>
                                    </div>
                                    <div class="link pt-2 pb-1">
                                        <a href="<?= Url::to(['site/blog-details']) ?>" class="">Learn More...</a>
                                    </div>
                                    <p class="card-text"><small class="text-muted">Posted 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 100%; max-height: 300px;">
                    <div class="">
                        <div class="row g-0">
                            <div class="col-md-4 img-blog">
                                <img src="https://source.unsplash.com/1600x900/?coding,books" class="img-fluid rounded-4" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title blog-t">This is a wider card with supporting</h5>
                                    <div class="card-p">
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                            I want it to be longer to see if it dissappers. text below as a natural
                                            lead-in to additional content. This content is a little bit longer. I want
                                            it to be longer to see if it dissappers</p>
                                    </div>
                                    <div class="link pt-2 pb-1">
                                        <a href="" class="">Learn More...</a>
                                    </div>
                                    <p class="card-text"><small class="text-muted">Posted 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 100%; max-height: 300px;">
                    <div class="">
                        <div class="row g-0">
                            <div class="col-md-4 img-blog">
                                <img src="https://source.unsplash.com/1600x900/?compuer,monitor,desk" class="img-fluid rounded-4" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title blog-t">This is a wider card with supporting</h5>
                                    <div class="card-p">
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                            I want it to be longer to see if it dissappers. text below as a natural
                                            lead-in to additional content. This content is a little bit longer. I want
                                            it to be longer to see if it dissappers</p>
                                    </div>
                                    <div class="link pt-2 pb-1">
                                        <a href="" class="">Learn More...</a>
                                    </div>
                                    <p class="card-text"><small class="text-muted">Posted 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center m-5">
                    <a href="#" class="btn mybtn btn rounded-pill mb-3">Load More</a>
                </div>
            </div>
            <div class="col-md-4 search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search blogs">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <h5 class="card-title blog-t">Our recent blog</h5>

                <div class="card mb-3" style="max-width: 540px; max-height: 100px;">
                    <div class="row g-0">
                        <div class="col-md-4 img-blog">
                            <img src="https://source.unsplash.com/1600x900/?coding, web" class="img-fluid rounded-4" alt="...">
                        </div>
                        <div class="col-md-8" style="min-height: 100%;">
                            <div class="pt-2">
                                <p class="card-text"><small class="text-muted">Posted 3 mins ago</small></p>
                                <h5 class="card-title why-t1">This is a wider card with supporting .</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: 540px; max-height: 100px;">
                    <div class="row g-0">
                        <div class="col-md-4 img-blog">
                            <img src="https://source.unsplash.com/1600x900/?android" class="img-fluid rounded-4" alt="...">
                        </div>
                        <div class="col-md-8" style="min-height: 100%;">
                            <div class="pt-2">
                                <p class="card-text"><small class="text-muted">Posted 3 mins ago</small></p>
                                <h5 class="card-title why-t1">This is a wider card with supporting .</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: 540px; max-height: 100px;">
                    <div class="row g-0">
                        <div class="col-md-4 img-blog">
                            <img src="https://source.unsplash.com/1600x900/?computer, web" class="img-fluid rounded-4" alt="...">
                        </div>
                        <div class="col-md-8" style="min-height: 100%;">
                            <div class="pt-2">
                                <p class="card-text"><small class="text-muted">Posted 3 mins ago</small></p>
                                <h5 class="card-title why-t1">This is a wider card with supporting .</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</section>