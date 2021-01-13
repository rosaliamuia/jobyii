<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <!-------------------------------------Front-Image----------------------------------------------------------------->
  

    <div class="site-title ct">
          <div class="slide slide-3">
            <div class="explore">
              <h1 style="color: black;">Find Your Dream Job</h1>
            </div>
           <!-----------------------Search Section------------------------------>
              <div class="container mx-auto " style= "width:1000px;">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-3">
                    <form class="d-flex justify-content-center">
                      <input type="text" class="form-control search-slt3 inputlg" placeholder="Job Title, Keyword Or Phrase">
                      <input type="text" class="form-control inputlg" placeholder="City">
                      <select class="form-control search-slt inputlg" id="exampleFormControlSelect1">
                        <option>Category</option>
                        <option>Full Time</option>
                        <option>Part Time</option>
                        <option>Internship</option>
                        <option>Contract</option>
                        <option>Casual</option>
                      </select>
                      <button type="button" onclick="location.href='browseJobs.html'" class="wrn-btn2">Search <i class="fas fa-search"></i></button>
                    </form>
                  </div>
                </div>
                <!-- <button class="down">Explore All Jobs</button> -->
              </div>     
          </div>
             <!------------x-------- Search Section--------------------x--------->      
        </div>
        

              <!--------------------------------Find--------------------------->

            

      <!--------x----------------------------Front-Image-----------------------------------------------------------x------>

      <!---------------------------------------------Popular Categories 1------------------------------------------------->
      <div class="container-fluid padding mt-5">
        <div class="row top text-left">
            <div class="col-12">
                <h2 class="cl">Popular Categories</h2>
            </div>
        </div>
    </div>
      
      <div class="container-fluid mt-5">
        <div class="row categories"> 
            <div class="col-md-3">
              <a href="jobs.html" style="color:black; text-decoration:none" > 
              <div class="card card-category" style="width: 18rem pr-2; ">
                <div class="card-body">
                  <p class="card-text"> <img src="<?= Yii::$app->request->baseUrl; ?>/images/svgs/budget.svg" style="height:100px; width: 150px; color: #ADEFD1FF;" ></i></p>
                  <h5 class="card-title fw-bold">ACCOUNTING</h5>
                </div>
              </div>
              </a>
            </div>
       

          <div class="col-md-3">
            <a href="jobs.html" style="color:black; text-decoration:none" >
              <div class="card card-category" style="width: 18rem pr-2;">
                <div class="card-body">
                  <p class="card-text"> <img src="<?= Yii::$app->request->baseUrl; ?>/images/engineering.svg" style="height:100px; width: 150px" ></i></p>
                  <h5 class="card-title fw-bold">ENGINEERING</h5>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3">
            <div class="card card-category" style="width: 18rem pr-2;">
              <div class="card-body">
                <p class="card-text"> <img src="<?= Yii::$app->request->baseUrl; ?>/images/coding.svg" style="height:100px; width: 150px" ></i></p>
                <h5 class="card-title fw-bold">I.T</h5>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-category" style="width: 18rem pr-2;">
              <div class="card-body">
                <p class="card-text"> <img src="<?= Yii::$app->request->baseUrl; ?>/images/market-analysis.svg" style="height:100px; width: 150px" ></i></p>
                <h5 class="card-title fw-bold">MARKETTING</h5>
              </div>
            </div>
          </div>
      </div>
    </div>

      <!-------------------x--------------------------Popular Categories 1---------------x-------------------------------->
      
      <!---------------------------------------------Popular Categories 2-----------------------------------------------> 
      <div class="container-fluid mt-5">
        <div class="row categories">
          <div class="col-md-3">
            <div class="card card-category" style="width: 18rem pr-2;">
              <div class="card-body">
                <p class="card-text"> <img src="<?= Yii::$app->request->baseUrl; ?>/images/group.svg" style="height:100px; width: 150px" ></i></p>
                <h5 class="card-title fw-bold">HUMAN RESOURCES</h5>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-category" style="width: 18rem pr-2;">
              <div class="card-body">
                <p class="card-text"> <img src="<?= Yii::$app->request->baseUrl; ?>/images/coaching.svg" style="height:100px; width: 150px" ></i></p>
                <h5 class="card-title fw-bold">TEACHING</h5>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-category" style="width: 18rem pr-2;">
              <div class="card-body">
                <p class="card-text"> <img src="<?= Yii::$app->request->baseUrl; ?>/images/healthcare.svg" style="height:100px; width: 150px" ></i></p>
                <h5 class="card-title fw-bold">HEALTH</h5>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-category" style="width: 18rem pr-2;">
              <div class="card-body">
                <p class="card-text"> <img src="<?= Yii::$app->request->baseUrl; ?>/images/volunteer.svg" style="height:100px; width: 150px" ></i></p>
                <h5 class="card-title fw-bold">VOLUNTEER</h5>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- <div class=" cart ct mt-5">
      <button>Categories</button>
    </div> -->

      <!-------------------x--------------------------Popular Categories 2---------------x-------------------------------->

      <!-------------------x--------------------------Popular Cities---------------x-------------------------------->

      <div class="container-fluid padding mt-5">
        <div class="row top text-left">
            <div class="col-12">
                <h2>Featured Cities</h2>
            </div>
        </div>
    </div>


    <section>
      <div class="container-fluid mt-5">
            <div id="works-carousel" class="owl-carousel owl-theme">
                <a href="jobs.html" style="color:black; text-decoration:none" > 
                    <div class="card shadow-lg bg-grey-rounded" style="width: 18rem;">
                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/city/Kisumu.jpg" class="card-img-top cch" alt="...">
                    <div class="card-body">
                        <h5 class="card-title cl">Kisumu</h5>
                    </div>
                    </div>
                </a>
                <div class="card shadow-lg bg-grey-rounded" style="width: 18rem;">
                  <img src="<?= Yii::$app->request->baseUrl; ?>/images/city/mombasa.jpg" class="card-img-top cch" alt="...">
                  <div class="card-body">
                    <h5 class="card-title cl">Mombasa</h5>
                  </div>
                </div>
                <div class="card shadow-lg bg-grey-rounded" style="width: 18rem;">
                  <img src="<?= Yii::$app->request->baseUrl; ?>/images/city/nairobi.jpg" class="card-img-top cch" alt="...">
                  <div class="card-body">
                    <h5 class="card-title cl">Nairobi</h5>
                  </div>
                </div>
          </div>
      </div>
  </section>
  
    <!-- <div class=" cart ct mt-5">
      <button class="cart">All cities</button>
    </div> -->

      <!-------------------x--------------------------Popular Cities---------------x-------------------------------->

      <!-------------------x--------------------------Recent Jobs---------------x--------------------------------> 
      <div class="container-fluid padding mt-5">
        <div class="row top text-left">
            <div class="col-12">
                <h2 class="cl">Featured Jobs</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <a href="jobDetail.html" style="color:black; text-decoration:none" > 
          <div class="card-body">
            <div class="d-flex justify-content-between fx">
                <img src="<?= Yii::$app->request->baseUrl; ?>/images/Company/cool2.jpg" class="rounded-circle" width="50px"; height="50px"><h5 class="fw-bold cl">Front End Developer</h5>
                <i class="fas fa-heart fa-lg heart"></i>
            </div>
            <div class= "d-flex justify-content-between">
                <p class="mb-1 cl"><i class="fas fa-search-location"></i>Gigiri, Nairobi</p>
                <p class="mb-1 cl"><i class="fas fa-sticky-note pl-5"></i>Part Time</p>
                <p class="mb-1 cl"><i class="fas fa-clock"></i>4 weeks ago</p>
            </div>
          </div>
          </a>
          <hr>
          <div class="card-body">
            <div class="d-flex justify-content-between fx">
                <img src="<?= Yii::$app->request->baseUrl; ?>/images/Company/cool2.jpg" class="rounded-circle" width="50px"; height="50px"><h5 class="fw-bold cl">Front End Developer</h5>
                <i class="fas fa-heart fa-lg "></i>
            </div>
            <div class= "d-flex justify-content-between">
                <p class="mb-1"><i class="fas fa-search-location"></i>Gigiri, Nairobi</p>
                <p class="mb-1"><i class="fa fa-sticky-note pl-5"></i>Part Time</p>
                <p class="mb-1 "><i class="fas fa-clock"></i>4 weeks ago</p>
            </div>
          </div>
          <hr>
          <div class="card-body">
            <div class="d-flex justify-content-between">
                <img src="<?= Yii::$app->request->baseUrl; ?>/images/Company/cool2.jpg" class="rounded-circle" width="50px"; height="50px"><h5 class="fw-bold cl">Front End Developer</h5>
                <i class="fas fa-heart fa-lg"></i>
            </div>
            <div class= "d-flex justify-content-between fx">
                <p class="mb-1"><i class="fas fa-search-location"></i>Gigiri, Nairobi</p>
                <p class="mb-1"><i class="fas fa-sticky-note fx-2 pl-5"></i>Part Time</p>
                <p class="mb-1 "><i class="fas fa-clock"></i>4 weeks ago</p>
            </div>
          </div>
          
        </div>
        <div class="col-md-3 mlr">
          <div class="card" style="width: 18rem;">
             <img src="<?= Yii::$app->request->baseUrl; ?>/images/avat2.jpg" class="rounded-circle mx-auto d-block" style="height:100px; width:100px" alt="Cinque Terre">
            <div class="card-body cl">
              <p class="card-text text-center">I just got a job, I used this site.</p>
              <h6 class=" text-center">FirstName SecondName</h6>
              <h6 class="text-center">Location</h6>
            </div>
          </div> 
        </div>
      </div>
    </div>
     

      
  
      <!-------------------x--------------------------Recent Jobs---------------x--------------------------------> 


    
</div>
