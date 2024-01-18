<?php
$title = "Templates";
include('includes/header.php');
include('includes/db.php');

if (!$_SESSION['user_id']) {
  header("location: index");
}


include('includes/navbar.php');
$userid =  $_SESSION['user_id'];
$sql = "SELECT * FROM `per_info` WHERE user_id = $userid";
$result_tem = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result_tem);

$q = "SELECT * FROM `templetes`";
$r = mysqli_query($conn, $q);

?>
<div class="container-fluid p-0 pt-3">
  <div class="templete_heading_img">
    <div class="heading">
      <h1><span style="color:#C21010; font-weight: 800;" href="" class="typewrite" data-period="2000" data-type='[ "CV", "Resume" ]'>
          <span class="wrap"></span>
        </span><?= $translations['Templates'] ?> </h1>
      <h5><?= $translations['Select your relevant template , create your'] ?> <br> <?= $translations['create your Cv or Resume easily'] ?> </h5>
    </div>
  </div>
</div>
<div class="mt-4 edit-details-btn container-fluid  ">
  <?php
  if ($row < 1) {
  ?>
    <a href="./personal_info" class="text-decoration-none"> <button class=" edit-details-btn me-3"> <i class='bx bxs-pencil'></i> <span class="ms-1">Create Cv</span></button></a>

  <?php
  }
  ?>

</div>

<div class="container-fluid mb-5">
  <div class="row">
    <?php
    $a = 0;
    while ($data = mysqli_fetch_assoc($r)) :
      $a++;

    ?>
      <div class=" col-md-4 col-lg-3">
        <?php
        if ($row < 1) {
        ?>
          <a href="./personal_info">
          <?php
        } else {
          ?>
            <a href="getdata?pre=<?= $a ?>">
            <?php
          }
            ?>

            <div class="cv_templete_img mt-4">
              <div style="width:90%">
                <div class="temp_img ">
                  <img src="./templates/tem-img/<?= $data['templete_img'] ?>" alt="image" loading="lazy">
                  <h2 class="position-absolute"><?= $translations["select"] ?></h2>
                </div>
              </div>
            </div>
            </a>
      </div>
    <?php
    endwhile;
    ?>
  </div>
</div>

<?php
include('includes/footer.php');
include('includes/end_links.php')

?>