<?php

use frontend\models\Jobpost;
use frontend\models\Savedjobs;
use yii\helpers\Html;
use yii\bootstrap4\Modal;


$jobss=SavedJobs::find()->all();
$jobPostId = JobPost::find()->one();
$bookStatus = Jobpost::find()->where(['jobPostId'=>$jobPostId->jobPostId])->One();
?>



<!----------------------------------------------------------Table--------------------------------------------------->
<div class="container ct">
        <table class="table table-hover table-responsive-sm">
            <thead>
                <tr class="table-active">
                    <th scope="col">#</th>
                    <th scope="col">Premium Jobs</th>
                    <th scope="col">Company</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">ACTION</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($jobss as $posts) { ?>
                <tr>
                    <!-- <th scope="row"><img class="rounded-circle z-depth-2" alt="50x50" style="height:50px ; width:50px"  src="images/avat.jpg" data-holder-rendered="true"></th> -->
                    <th scope="row"><img class="rounded-circle z-depth-2" alt="50x50" style="height:50px ; width:50px" src="<?= Yii::$app->request->baseUrl; ?>/uploads/<?=$posts->jobPost->image?>" alt="..."></th>
                    <td class="fw-bold font-monospace"><?=$posts->jobPost->jobTitle?></td>
                    <td><p class="fw-bold font-monospace"><?=$posts->jobPost->emailAddress?></p></td>
                    <td><p class="fw-bold font-monospace"><?=$posts->date?></p></td>
                    <td>
                   <?php
                                if($bookStatus->status == 0){
                                    echo  Html::a('Available', [''], ['class' => 'btn btn-info']);
                                    // $button = 'btn btn-info';
                                    // $status = 'Available';
                                }elseif ($bookStatus->status == 1){
                                    echo  Html::a('Applied', ['create'], ['class' => 'btn btn-success']);
                                    // $button = 'btn btn-success';
                                    // $status = 'Issued';
                                }elseif ($bookStatus->status == 2){
                                    echo  Html::a('Pending', ['create'], ['class' => 'btn btn-warning']);
                                    // $button = 'btn btn-warning';
                                    // $status = 'Pending';
                                }
                         
                                ?>
                    </td>
                  <td>
                    <?php
                    if($bookStatus->status == 0){
                              
                                echo Html::a('Apply', ['apply',$posts->jobPostId],['class' => 'btn btn-success']);
                            }
                            
                    ?>
                     <button type="button" val="<?=$posts->jobPostId?>" class="btn btn-block btn-danger applyn ">Now</button>
                    </td>
                    <td><p class="fw-bold font-monospace">
                        <div class="d-flex flex-row">
                            <i class="p-1 far fa-eye"></i></p>
                            <i class="p-1 far fa-trash-alt"></i>
                        </div>
                    </td>  
                </tr>
                <?php } ?>
    
            </tbody>

        </table>
    </div>

    <!-----------------------------------------x----------------Table----------------------x---------------------------->

    <?php
        Modal::begin([
            'title'=>'<h4>Now</h4>',
            'id'=>'applyn',
            'size'=>'modal-lg'
            ]);
        echo "<div id='applynContent'></div>";
        Modal::end();
      ?> 