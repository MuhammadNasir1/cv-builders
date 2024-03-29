<!-- =================== Navbar-Start =================== -->
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <div class="logo">
      <a href="./index"><img src="./image/Cv-Builder-Logo.svg" alt="logo"></a>
    </div>
    <span class="nav_collapse navbar-toggler">
      <i data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class='bx bx-menu'></i>
    </span>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
        <!-- ================phone-screen-collapse===================== -->
        <div class="nav_sm_drop p-3">
          <p>
            <a class="" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <?= $translations['CV'] ?> <span class="float-end"><i class='bx bx-chevron-down'></i></span>
            </a>
          </p>
          <div class="collapse ph_dropdown" id="collapseExample">
            <div class="mt-2">
              <?php
              if (@$_SESSION["loginemail"]) {
              ?>
                <a href="./personal_info"><?= $translations['Create cv'] ?></a>
                <a href="./showtemplates"><?= $translations['Show cv templates'] ?></a>
                <a href="./guide"><?= $translations['How to create CV'] ?></a>
              <?php
              } else {

              ?>
                <a href="./sign_up"><?= $translations['Create cv'] ?></a>
                <a href="./sign_up"><?= $translations['Show cv templates'] ?></a>
                <a href="./guide"><?= $translations['How to create CV'] ?></a>

              <?php

              }
              ?>
            </div>
          </div>
        </div>

        <!-- ================phone-screen-collapse===================== -->
        <!-- ================phone-screen-collapse===================== -->
        <div class="nav_sm_drop pe-3 ps-3">
          <p>
            <a class="" data-bs-toggle="collapse" href="#collaps" role="button" aria-expanded="false" aria-controls="collapseExample">
              <?= $translations['Resume'] ?> <span class="float-end"><i class='bx bx-chevron-down'></i></span>
            </a>
          </p>
          <div class="collapse ph_dropdown" id="collaps">
            <div class="mt-2">
              <?php
              if (@$_SESSION["loginemail"]) {
              ?>
                <a href="./personal_info"><?= $translations['Create Resume'] ?></a>
                <a href="./showtemplates"><?= $translations['Show resume templates'] ?></a>
                <a href="./guide"><?= $translations['How to create resume'] ?></a>


              <?php

              } else {
              ?>

                <a href="./sign_up"><?= $translations['Create Resume'] ?></a>
                <a href="./sign_up"><?= $translations['Show resume templates'] ?></a>
                <a href="./guide"><?= $translations['How to create resume'] ?></a>

              <?php

              }

              ?>
            </div>
          </div>
        </div>

        <div class="nav_sm_drop pe-3 ps-3 pt-4">
          <p>
            <a class="" data-bs-toggle="collapse" href="#colla" role="button" aria-expanded="false" aria-controls="collapseExample">
              <?= $translations['Others'] ?> <span class="float-end"><i class='bx bx-chevron-down'></i></span>
            </a>
          </p>
          <div class="collapse ph_dropdown" id="colla">
            <div class="mt-2">
              <a href="./blog"><?= $translations['blogs'] ?></a>
              <a href="./blog"><?= $translations['Contact Us'] ?></a>
              <a href="./privacypolicy"><?= $translations['Privacy & Policy'] ?></a>
            </div>
          </div>
        </div>
        <!-- ================phone-screen-collapse===================== -->

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?= $translations['CV'] ?>
          </a>
          <?php
          if (@$_SESSION["loginemail"]) {
          ?>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="./personal_info"><?= $translations['Create'] ?></a></li>
              <li><a class="dropdown-item" href="./showtemplates"><?= $translations['Templates'] ?></a></li>
              <li><a class="dropdown-item" href="./guide"><?= $translations['How to create CV'] ?></a></li>
            </ul>
          <?php

          } else {
          ?>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="./sign_up"><?= $translations['Create'] ?></a></li>
              <li><a class="dropdown-item" href="./sign_up"><?= $translations['Templates'] ?></a></li>
              <li><a class="dropdown-item" href="./guide"><?= $translations['How to create CV'] ?></a></li>
            </ul>
          <?php
          }
          ?>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?= $translations['Resume'] ?>
          </a>
          <?php
          if (@$_SESSION["loginemail"]) {
          ?>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="./personal_info"><?= $translations['Create'] ?></a></li>
              <li><a class="dropdown-item" href="./showtemplates"><?= $translations['Templates'] ?></a></li>
              <li><a class="dropdown-item" href="./guide"><?= $translations['How to create Resume'] ?></a></li>
            </ul>
          <?php

          } else {
          ?>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="./sign_up"><?= $translations['Create'] ?></a></li>
              <li><a class="dropdown-item" href="./sign_up"><?= $translations['Templates'] ?></a></li>
              <li><a class="dropdown-item" href="./guide"><?= $translations['How to create resume'] ?></a></li>
            </ul>

          <?php
          }
          ?>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Others
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./blog"><?= $translations['blogs'] ?></a></li>
            <li><a class="dropdown-item" href="./contact"><?= $translations['Contact Us'] ?></a></li>
            <li><a class="dropdown-item" href="./privacypolicy"><?= $translations['Privacy & Policy'] ?></a></li>
          </ul>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="contact"><?= $translations['Contact Us'] ?></a>
        </li>

        <div class="nav_sm_drop pe-3 ps-3 pt-4">
          <p>
            <a href="./contact">
            <?= $translations['Contact Us'] ?></span>
            </a>
          </p>
      </ul>
      <div style="display: flex;justify-content: flex-end;">
        <div class="lan_dropdown" style="cursor: pointer;">
          <div class="btn-group dropstart">
            <img class="flag_img" id="navbarflag" src="./image/usa.svg" data-bs-toggle="dropdown" aria-expanded="false">

            <ul class="dropdown-menu">
              <li>
                <a href="?lang=en" class="text-decoration-none">
                  <p class="lan_flag" flag="en"><img style="width:25px" src="./image/usa.svg"><span>English</span></p>
                </a>
              </li>
              <li>
                <a href="?lang=es" class="text-decoration-none">
                  <p class="lan_flag" flag="es"><img style="width:30px" src="./image/spain-flag-icon.svg"><span>Spanish</span></p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <?php


        if (@!$_SESSION["loginemail"]) {

          echo '  <a href="./sign_in" ><button class="sign_in_btn">Sign in</button></a>';
        } else {
          echo '<div class="user_details_dropdown">' . @$_SESSION["loginemail"] . '  </div> ';
        }

        ?>


      </div>
    </div>
  </div>
</nav>

<!-- =================== Navbar-End ===================== -->