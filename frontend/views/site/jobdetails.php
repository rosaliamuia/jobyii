<?php

use frontend\models\Jobpost;


$jobs = Jobpost::find()->asArray()->One();
?>

 <!--------------------------------------------Beggining Secttion------------------------------->
 
 <div id="team-carousel" class="owl-carousel owl-theme ct">
        <div class="slide slide-3">
            <div class="slide-content d-flex justify-content-center">
                <button class="down">Home > Job Details</button>
            </div>
        </div>
    </div>

      <!---------------------x----------------------Beggining Secttion-------------x----------------->

    <!--------------------------------Profile------------------------------------------------------->

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                <?php foreach($jobs as $post) { ?>
                    <div class="card" style="width: 23rem;">
                        <img src="<?= Yii::$app->request->baseUrl; ?>/uploads/<?=$post->image?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">JOB DETAILS</h5>
                            <p class="card-text"><i class="fas fa-thumbtack"></i><strong>&nbsp;Address</strong><br class="mx-3">Gigiri, Nairobi</p>
                            <p class="card-text"><i class="fas fa-dollar-sign"></i><strong>&nbsp;Salary</strong><br> 120,000-170,000</p>
                            <p class="card-text"><i class="fas fa-business-time"></i><strong>&nbsp;Experience</strong><br>3 years Experience</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-md-6">
                    <h3>Software Developer</h3>
                    <div class="d-flex justify-content-between"> 
                        <p><strong>Education</strong><span class="mx-2">Training</span></p>
                        <p><strong>Deadline</strong><span class="mx-2">31 Dec 2020</span></p>
                        <p><strong><i class="fas fa-thumbtack"></i></strong><span class="mx-2">Gigiri, Nairobi</span></p>
                    </div>
                    <h4>Job Description</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam quod minima quam eaque velit at temporibus, dolor assumenda dignissimos error? Assumenda eius sequi omnis hic adipisci iure eum, odit, obcaecati ducimus dolorum autem corporis quis dolorem earum sit saepe.</p>
                    <h4>How To Apply</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam quod minima quam eaque velit at temporibus, dolor assumenda dignissimos error? Assumenda eius sequi omnis hic adipisci iure eum, odit, obcaecati ducimus dolorum autem corporis quis dolorem earum sit saepe.</p>
                    <h4>Job Requirements</h4>
                        <p> 1. Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                            2. Dolorum nam quod minima quam eaque velit at temporibus <br>
                            3. Dolor assumenda dignissimos error? <br>
                            4. Assumenda eius sequi omnis hic adipisci iure eum, odit, <br>
                            5. Obcaecati ducimus dolorum autem corporis quis dolorem earum sit saepe.
                        </p>
                    <a href="savedjobs.html" class="btn btn-info">APPLY THIS JOB</a>
                </div>
            </div>
        </div>
   

    <!--------------------------------------------------------------------------------------------------->