<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!----------Font awesome css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

   <!-------------------------------------Navbar--------------------------------------------------------------------->
    <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top py-3">
        <div class="container-fluid">  
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=Url::to(['site/index'])?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Url::to(['site/about'])?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Url::to(['site/contact'])?>">Contact</a>
                </li>  
                </ul>
                <div class="col-md-4 mr-2">
                <a class="navbar-brand nav-logo" href="<?=Url::to(['site/index'])?>">
                DREAM JOBS
                <!-- <img class="rounded-circle" style="height:100px; width:100px" src = "images/logoc2.png" alt="logo" > -->
                </a>
            </div>  
                <ul class="navbar-nav ml-auto">
                <?php if(\Yii::$app->user->can('Employee')) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['site/jobpost'])?>">Post Job</a>
                    </li>
                <?php }?>
                <?php if(\Yii::$app->user->can('JobSeeker')) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['site/jobs'])?>">Apply Jobs</a>
                    </li>
                <?php }?>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <?php if(Yii::$app->user->isGuest ) { ?>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-lg"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?=Url::to(['site/signup'])?>">Sign Up</a></li>
                        <li><a class="dropdown-item" href="<?=Url::to(['site/login'])?>">Login</a></li>
                        
                        </ul>
                    </li>  
                    <?php }else if(Yii::$app->user->can('Employee') ) { ?>
                        <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-lg"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?=Url::to(['site/profile'])?>">Co.Profile</a></li>
                        <li><a class="dropdown-item" href="<?=Url::to(['site/dashboard'])?>">Co.Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?=Url::to(['site/logout'])?>">Log Out</a></li>
                        </ul>
                    </li>
                    <?php }else if(Yii::$app->user->can('JobSeeker') ) { ?>
                        <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-lg"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?=Url::to(['jbprofile/create'])?>">My Profile</a></li>
                        <li><a class="dropdown-item" href="<?=Url::to(['site/dashboard'])?>">Dashboard</a></li>
                        <li><a class="dropdown-item" href="<?=Url::to(['site/savedjobs'])?>">Saved Jobs</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?=Url::to(['site/logout'])?>">Log Out</a></li>
                        </ul>
                    </li>
                <?php } ?>
            </div>
        </div>
      </nav> 


    

    
    <!--------x----------------------------Navbar--------------------------------------------------------------x------>


    <!-- <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>  -->

    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!--Footer-->
        
<footer class="pt-4 border-top pt-md-5 ">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus laboriosam repudiandae magnam neque eveniet autem officia similique sunt culpa adipisci.</p>
              </div>
              <div class="col-md-3">
                <h2>NewsLetter</h2>
                <p>Stay Up to Date with our latest</p>
                <div class="form-element">
                  <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>     
              </div>
              <div class="col-md-3 instagram">
                <h2>Instagram</h2>
                <div class="d-flex flex-row">
                  <img src="<?= Yii::$app->request->baseUrl; ?>/images/instagram/thumb-card3.png" alt="insta1">
                  <img src="<?= Yii::$app->request->baseUrl; ?>/images/instagram/thumb-card4.png" alt="insta1">
                  <img src="<?= Yii::$app->request->baseUrl; ?>/images/instagram/thumb-card5.png" alt="insta1">
                </div>
                <div class="d-flex flex-row">
                  <img src="<?= Yii::$app->request->baseUrl; ?>/images/instagram/thumb-card6.png" alt="insta1">
                  <img src="<?= Yii::$app->request->baseUrl; ?>/images/instagram/thumb-card7.png" alt="insta1">
                  <img src="<?= Yii::$app->request->baseUrl; ?>/images/instagram/thumb-card8.png" alt="insta1">
                </div>
              </div>
              <div class="col-md-3 follow">
                <h2>Follow Us</h2>
                <p>Let us be Social.</p>
                <div class="justify-content-around" >               
                    <a href="https://twitter.com/explore" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="https://www.linkedin.com/in/rosalia-muia-6a87821a1/" target="_blank"><i class="fab fa-linkedin fa-lg"></i></a>   
                </div>
              </div>
              <div class="rights d-flex justify-content-center">
                <h5>
                  Copyright &copy;2020 All rights reserved || made by 
                  <a href="https://github.com/rosaliamuia" target="_blank">rosaliamuia<i class="fab fa-github"></i></a>
                </h5>
              </div>
              <!-- <div class="move-up">
                <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
              </div> -->
            </div>
          </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
