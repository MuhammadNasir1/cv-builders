<?php
$title = "Sign In";
include("./includes/header.php");
include('./includes/db.php')
?>
<?php
if (isset($_REQUEST['submit'])) {

  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password' ";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_num_rows($result);
  if ($row == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION["user_id"] = $row['user_id'];
    $_SESSION["email"] =  $row['email'];
    $_SESSION["username"] =  $row['username'];
    $_SESSION['loginemail'] = ' 
       <div class="btn-group dropstart">
         <img style="border-color:black" src="./image/user_icon_vecter.svg" alt="user" data-bs-toggle="dropdown" aria-expanded="false">
         <ul class="dropdown-menu" style="margin-top:0px">
           <li>
              <p> <img style="border-color:black" src="./image/user_icon_vecter.svg" alt=""><span class="user-name"> ' .    $_SESSION["username"] . '
                 <span class="email">' . $_SESSION["email"] . '</span></span></p>
           </li>
           <li>
             <p><a href="logout"><i class="bx bx-log-out"></i> LOGOUT</a></p>
           </li>

         </ul>
       
     </div>';
    header('location: ./index');
  } else {
    $input_red = 'style="border-color:#C21010"';
    $showerror = $translations['Email not match'] ;
    $showeror = "<i style='color:#C21010; font-size:22px' class='bx bxs-error-circle'></i>";
  }
}

?>


<body style="background-color: #ffffff;">
  <!-- ========logo============ -->
  <div class="container-fluid">
    <div class="row">
      <!-- ==========input-section==== -->
      <div class="col-lg-6">
        <div class="logo">
          <!-- <h3>CRM</h3> -->
          <img style="width:150px;" src="./image/Cv-Builder-Logo.svg" alt="">
        </div>
        <div class="sign-input">
          <div class="sign-txt">
            <h4 class="form-heading"><?=  $translations['Sign in']  ?></h4>
            <h3><?=  $translations["If you Don't have an account"]  ?></h3>
            <h3><?=  $translations['You Can']  ?> <a href="./sign_up"><?=  $translations['Register here']  ?> !</a></h3>
          </div>
          <!-- ==========form-start=========== -->
          <div class="form-section">
            <div class="form">
              <form action="#" method="post">
                <div class="mb-3 position-relative">
                  <img class="input-icons" src="./image/email-icons.svg" alt="Email">
                  <label for="email" class="form-label"><?=  $translations['Sign in']  ?>
                </label>
                  <input name="email" type="email" class="form-control" placeholder="<?=  $translations['Enter your email address']  ?>" <?php echo @$input_red ?>>
                  <span class="" style="margin-left:95%; margin-top:-28px ;  position: absolute;"><?php echo  @$showeror ?></span>
                  <div style="color:#C21010; letter-spacing:0.3px " class="form-text"><b><?php echo  @$showerror ?></b></div>
                </div>
                <div class="mb-3">
                  <img class="input-icons" src="./image/passsword-icons.svg" alt="Pass">
                  <label for="password" class="form-label"><?=  $translations['Password']  ?></label>
                  <input <?php echo @$input_red ?> name="password" type="password" id="pass" class="form-control" id="exampleInputPassword1" placeholder="<?=  $translations['Enter your password']  ?>">
                  <div onclick="showpassword()">
                    <a class="pass-icon" id="pass_hide_icon" href="#"><i class="fa-regular fa-eye-slash"></i></a>
                    <a style="display: none;" class="pass-icon" id="pass_show_icon" href="#"><i class="fa-regular fa-eye"></i></a>
                  </div>
                </div>
                <div class="check-box mb-4">
                  <input class="checkbox" type="checkbox" name="" id=""> <span><?=  $translations['Rememebr me']  ?></span>
                </div>
                <button name="submit" type="submit" class="btn btn-primary"><?=  $translations['Sign in']  ?></button>
              </form>
            </div>
          </div>
          <!-- ==========form-End=========== -->
        </div>
      </div>
      <!-- ==========input-section-End==== -->
      <div class="col-lg-6 col-md-5">
        <div class="header-image cv_image_login">
          <div class="image">
            <img src="./image/cv.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('./includes/end_links.php');
  ?>