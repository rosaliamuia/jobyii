<?php

use frontend\models\Jobpost;
use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\helpers\Url;

$jobs = Jobpost::find()->all();
$total =JobPost::find()->asArray()->all();
?>


<div class="container ct">
        <h6 class="font-monospace">Found <?=count($total)?> jobs</h6>
        <div class="row">
            <div class="col-md-12">
            <?php foreach($jobs as $post) { ?>
                <div class="card mb-3">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= Yii::$app->request->baseUrl; ?>/uploads/<?=$post->image?>" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                        <h5 class="card-title fx"><?=$post->jobTitle?></h5>
                        <h5 class="card-title">Rockfields</h5>
                            <p class="card-text">Nairobi City. <br> Via Dream Jobs<p>
                            <p class="card-text"><small class="text-muted">Last updated 15 days ago</small></p>
                        </div>
                    </div>
                    <div class="col-md-2 mt-5">
                        <a href="<?=Url::to(['site/addtocart'])?>"><button type="button" val="<?=$post->jobPostId?>" class="btn btn-block btn-info addtocart">APPLY HERE</button></a>
                        <a href="<?=Url::to(['products/index', 'id'=>$post->jobPostId])?>">View Product </a>
                        <button type="button" val="<?=$post->jobPostId?>" class="btn btn-block btn-success addtocart ">Add to cart</button>
                    </div>
                    </div>
                </div>
                <?php } ?>
                
                
                
                
            </div>
        </div>
    </div>

    <?php
        Modal::begin([
            'title'=>'<h4>My Cart</h4>',
            'id'=>'addtocart',
            'size'=>'modal-lg'
            ]);
        echo "<div id='addtocartContent'></div>";
        Modal::end();
      ?> 


