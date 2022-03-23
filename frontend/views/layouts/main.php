<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" /> -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Custom Css -->
  <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl ?>/fav.ico">
  <title>Aprentice cloud</title>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CXB43WJJKX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CXB43WJJKX');
</script>
  <?php $this->head() ?>
</head>

<body>
  <?php $this->beginBody() ?>

  <div class="wrap">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top  navbar-light" style="background: #ffffff;">
      <div class="container">
        <a class="navbar-brand" href="<?= Url::to(['site/index']) ?>">
          <img src="<?= Yii::$app->request->baseUrl ?>/img/logo1.png" alt="..." height="35">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" style="border: none !important;  outline: none !important;">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= Url::to(['site/index']) ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= Url::to(['site/why']) ?>">Why Apprentice Cloud</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= Url::to(['site/events']) ?>">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= Url::to(['site/about']) ?>">About Us</a>
            </li>
            <!-- <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to(['site/blogs']) ?>">Blogs</a>
                    </li> -->
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="https://forms.gle/zzAKsTdFQnFrNWw79" class="btn rounded-pill ">
                Admission
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="">
      <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
      ]) ?>
      <?= Alert::widget() ?>
      <?= $content ?>
    </div>
  </div>

  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <img src="<?= Yii::$app->request->baseUrl ?>/img/logo2.png" class="mb-3" alt="..." height="60" width="%" style="object-fit: ;">
          <!-- <h6>About</h6> -->
          <p class="text-justify">Apprentice Cloud <i>Digital Apprenticeship MasterClass (DAM)</i> program is designed as the bridge between school and the world of work. Through a project based approach learners acquire in-demand skills that accelerate growth and build capacity to solve problems of today and future workplace.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Our Courses</h6>
          <ul class="footer-links">
            <li><a href="<?= Url::to(['site/course']) ?>">DAM Foundation</a></li>
            <li><a href="<?= Url::to(['site/course']) ?>">DAM Advanced</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="<?= Url::to(['site/index']) ?>">Aprentice Cloud</a></li>
            <li><a href="<?= Url::to(['site/contact']) ?>">Contact Us</a></li>
            <li><a href="<?= Url::to(['site/about']) ?>">About Us</a></li>
            <li><a href="<?= Url::to(['site/why']) ?>">Why Aprentice Cloud</a></li>
            <li><a href="<?= Url::to(['site/events']) ?>">Events</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
            <a href="https://apprenticecloud.com/">Aprentice Cloud</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
            <li><a class="linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <?php $this->endBody() ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>

</html>
<?php $this->endPage() ?>