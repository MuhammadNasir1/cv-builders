<?php
$title = "Home";
include('includes/header.php');
include('includes/db.php');
include('includes/navbar.php')


?>


<!-- ================Hero-section-Start ================ -->
<div class="container-fluid ">
  <div class="main-heading">
    <div class="row">
      <div class="col-lg-6  col-md-7">
        <div class="heading">
          <h2><?= $translations['We deliver a professional'] ?></h2>
          <h1>
            <span class="typewrite" data-period="2000" data-type='[ " <?= $translations['CV'] ?>", " <?= $translations['Resume'] ?>" ]'>
              <span class="wrap"></span>
            </span> <?= $translations['For Free'] ?>
          </h1>
          <p><?= $translations['Create your CV with different types of templates , color '] ?> <span class="heading_br"><br></span>
            <?= $translations['combinations and customization'] ?></p>
          <div>
            <a href="./showtemplates"> <button> <?= $translations['Show templates'] ?></button></a>
            <?php


            if (@$_SESSION["loginemail"]) {
            ?>
              <a href="./personal_info"> <button class="cv-btn"> <?= $translations['Create Here'] ?></button></a>
            <?php
            } else {
            ?>
              <a href="./sign_up"> <button class="cv-btn"><?= $translations['Create Here'] ?></button></a>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-5">
        <div class="header-image">
          <div class="image">
            <img src="./image/cv.svg" alt="cv">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ================Hero-section-End ================== -->

<!-- ================datails-section-Start ================== -->
<!-- =========== heading-start ===========  -->

<div class="contianer-fluid ">

  <!-- =========== heading-Start ============  -->
  <div class="datails-sec">
    <h3> <?= $translations['Create professional Resume or CV with'] ?> <span>100+</span> <span class="remove"><br></span> <?= $translations['templates and customize the'] ?> <span class="remove"><br></span> <?= $translations['colors and fonts'] ?></h3>

    <!-- =========== heading-End =============  -->
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-md-6">

          <!-- =========== Image-Start =============  -->
          <div class="datails-img">
            <div class="image">
              <img src="./image/cv (1).svg" alt="">
            </div>
          </div>

          <!-- =========== Image-End =============  -->
        </div>
        <div class="col-md-6">
          <div class="details-boxes">
            <div class="details-box">

              <!-- =========== details-box-1-Start =============  -->
              <div class="box-1">
                <div class="text">
                  <i class='bx bxs-download'></i>
                  <h2> <?= $translations['Easy to Download'] ?></h2>
                </div>
              </div>

              <!-- =========== details-box-1-End ===============  -->

              <!-- =========== details-box-2-Start =============  -->
              <div class="box-1 mt-4">
                <div class="text">
                  <i class='bx bxs-file-blank'></i>
                  <h2><?= $translations['Best Premium template'] ?> </h2>
                </div>
              </div>
              <!-- =========== details-box-2-End ===============  -->

              <!-- =========== details-box-3-Start =============  -->
              <div class="box-1 mt-4">
                <div class="text">
                  <i class='bx bxs-edit'></i>
                  <h2><?= $translations['Fully Customization'] ?></h2>
                </div>
              </div>
              <!-- =========== details-box-3-End ===============  -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ================ datails-section-End ==================== -->

<!-- ================ Fixed-img-Start ==================== -->
<div class="container-fluid p-0 mt-4">
  <div class="fix-bg">
    <div class="txt">
      <h1>"<?= $translations['Select your favourite template and create your'] ?>
        <span class="remove"><br></span><?= $translations['professional CV or Resume.'] ?>
      </h1>
      <?php
      if (@$_SESSION["loginemail"]) {
      ?>
        <a href="./personal_info"> <button class="btn mt-3"><?= $translations['Create'] ?></button></a>

      <?php
      } else {
      ?>
        <a href="./sign_up"> <button class="btn mt-3"><?= $translations['Create'] ?></button></a>
      <?php
      }
      ?>
    </div>
  </div>
</div>
<!-- ================ Fixed-img-End =====================-->


<!-- ================ Templates-start ==================== -->
<div class="container-fluid mt-5 p-0">
  <div class="template-heading">
    <h1><?= $translations['Our Famous Recommendation'] ?></h1>
    <div id="myCarousel" class="carousel slide container-fluid" data-bs-ride="carousel">
      <div class="carousel-inner w-100">
        <div class="carousel-item active">
          <div class="col-md-3">
            <div class="card card-body card_body_cv">
              <img class="img-fluid" src="./image/cv-image.png">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col-md-3">
            <div class="card card-body card_body_cv">
              <div class="template-img">
                <img class=" img-fluid" src="./image/cv-image-2.png">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col-md-3">
            <div class="card card-body card_body_cv">
              <!-- <a href="#"><button class="">USe This Template</button></a> -->
              <img class="img-fluid" src="./image/cv-image.png">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col-md-3">
            <div class="card card-body card_body_cv">
              <img class="img-fluid" src="./image/cv-image-2.png">
            </div>
          </div>
        </div>
      </div>
      <button style="width:80px" class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">

        <span style="color:red;"><i style="font-size:40px" class='bx bx-chevron-left'></i></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button style="width: 80px; " class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
        <span style="color:red;"><i style="font-size:40px" class='bx bx-chevron-right'></i></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
<!-- ================ Template-End ======================- -->

<!-- ================ number-animation-Start==================== -->
<div class="container-fluid p-0 mt-5 mb-5">
  <div class="num-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="downloads-number">
            <h1><span class="num" data-val="35">0</span>K+</h1>
            <h3><?= $translations['Downloads'] ?></h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="downloads-number">
            <h1><span class="num" data-val="20">0</span>K+</h1>
            <h3><?= $translations['Users'] ?></h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="downloads-number">
            <h1><span class="num" data-val="100">0</span>K+</h1>
            <h3><?= $translations['Templete'] ?></h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="downloads-number">
            <h1><span class="num" data-val="100">0</span>K+</h1>
            <h3><?= $translations['Download'] ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ================ number-animation-End ===================== -->

<!-- ================ Tips-Text-Start ========  ============= -->
<div class="container-fluid">
  <div class="tips-content">
    <div class="tip-sec-txt">
      <h1> <?= $translations['Recommendation to create a professional'] ?><br> <span> <?= $translations['Resume or CV'] ?> </span></h1>
      <p><?= $translations['Use premium templates for free with a lot of color schemes'] ?></p>
      <div class="list">
        <ul>
          <li><strong><?= $translations['Proofread carefully'] ?>:</strong><?= $translations['Check your resume for spelling and grammar errors, and have someone else review it as well.'] ?> </li>
          <li><?= $translations['homelist1'] ?></li>

          <li><strong><?= $translations['Be honest'] ?>:</strong> <?= $translations['homelist2'] ?></li>

          <li><strong><?= $translations['Make it easy to contact you'] ?>:</strong><?= $translations['homelist3'] ?> </li>

          <li><strong><?= $translations['Keep it concise and well-organized'] ?></strong>: <?= $translations['homelist4'] ?></li>

          <li><strong><?= $translations['Use a professional format'] ?>:</strong> <?= $translations['homelist5'] ?></li>

          <li><strong><?= $translations['Customize your resume for each job'] ?></strong>: <?= $translations['homelist6'] ?></li>

        </ul>
      </div>
    </div>
  </div>
</div>
<!-- ================ Tips-Text-End ======================= -->

<!-- ================ animation-cv-sec-start ======================= -->
<div class="animation-cv-sec">
  <div class="container-fluid mt-4 mb-4">
    <div class="row">
      <div class="col-md-6">
        <div class="anim-sec-txt">
          <div>
            <h1><?= $translations['Create your professional Resume or CV with'] ?><span class="remove"><br></span><span>CV Builders</span></h1>
            <p> <?= $translations['Follow the simple steps and create a professional and'] ?><span class="remove"><br></span> <?= $translations['polished cv or resume in minutes.'] ?></p>

            <?php
            if (@$_SESSION["loginemail"]) {
            ?>
              <a href="./personal_info"> <button class=""><?= $translations['Create your Cv'] ?></button></a>

            <?php
            } else {

            ?>
              <a href="./sign_up"> <button class=""><?= $translations['Create your Cv'] ?></button></a>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-md-6">

        <div class="animated-img">
          <div class="images">
            <div class="animation">
              <img src="./image/cv-image.png" alt="">
              <img src="./image/cv-image-2.png" alt="">
              <img src="./image/cv-image.png" alt="">
              <img src="./image/cv-image-2.png" alt="">
            </div>

          </div>
        </div>
      </div>
      <div class="col-12" style="background-color: white ;">
        <div class="animated-img-ph">
          <div class="images img2">
            <img class="img" src="./image/cv-image-2.png" alt="">
            <img class="img" src="./image/cv-image.png" alt="">
            <img class="img" src="./image/cv-image-2.png" alt="">
            <img class="img" src="./image/cv-image.png" alt="">
            <img class="img" src="./image/cv-image-2.png" alt="">
            <img class="img" src="./image/cv-image.png" alt="">

          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<?php
if (@$_SESSION["loginemail"]) {
?>
  <button style="display: none;"></button>
<?php
} else {
?>
  <button style="display: none;" id="myButton" type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop"></button>
<?php
}
?>


<!-- Modal -->
<div class="modal sign_in_modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">

      <div class="modal-body ">
        <h1 style=" cursor: pointer;" class="float-end text-gray" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></h1>
        <h2 class="mt-4"><?= $translations['SIGN UP'] ?><span style="color:black"><?= $translations['Free'] ?></span></h2>
        <p class="mt-2"><?= $translations['Sign in or Sign up now and create your professional CV or Resume in an easy way.'] ?></p>
        <center><a href="./sign_in "><button><?= $translations['SIGN IN'] ?></button></a></center>
      </div>

    </div>
  </div>
</div>
</div>
<script>
  function autoClickButton() {
    var button = document.getElementById('myButton');
    setTimeout(function() {
      button.click();
    }, 6000);
  }

  window.addEventListener('load', autoClickButton);
</script>

<?php
include('includes/footer.php');
include('includes/end_links.php')


?>