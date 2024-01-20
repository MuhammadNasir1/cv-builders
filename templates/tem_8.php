<style>
  @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,500;0,600;1,300&family=Poppins:wght@100;200&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
  }



  .main_container {
    display: grid;
    grid-template-columns: 140mm 1fr;
    height: 296.5mm;
    background-color: #dfe6e9;
    width: 210mm;
    height: 296.5mm;
    margin: 0 auto;
  }

  .cricle {
    background-color: white;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 2px #dfe6e9 solid;
    border-top: 3px solid #f1c40f;
    position: relative;



  }

  .cricle img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    position: absolute;
    top: 22px;
    left: 22px;
  }

  .line {
    width: 2px;
    height: 30px;
    border-radius: 50%;
    position: absolute;
  }

  .dot {
    background-color: #e4a510;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    position: absolute;
    top: 80%;
    left: 17px;


  }
</style>
</head>

<body>

  <div id="content">
    <div class="resume_container">
      <div class="main_container">
        <section style="background-color: aliceblue; display: flex; flex-direction: column; gap: 10px;">
          <div style="width: 90%; margin: 20px auto;">
            <h1 style="text-transform: uppercase; font-size: 30px;"><?= ucfirst($data->per_info->fname) ?> <span style="color: #fbc531;"><?= ucfirst($data->per_info->lname) ?></span></h1>
            <h4 style="text-transform: uppercase; letter-spacing: .3em; font-weight: 300;"><?= ucwords($data->per_info->profession) ?></h4>

            <!--  -->

            <div style="width: 99%; margin: 40px auto; display: flex; flex-direction: column; gap: 10px;">
              <div style="display: flex; gap: 10px;">
                <div><i class="fa-solid fa-phone" style="color: #fbc531;"></i></div>
                <div style="font-weight: 300; font-size: 14px;"><?= ucfirst($data->per_info->per_no) ?></div>
              </div>
              <!-- 2nd -->
              <div style="display: flex; gap: 10px;">
                <div><i class="fa-solid fa-envelope" style="color: #fbc531;"></i></div>
                <div style="font-weight: 300; font-size: 14px;"><?= ucfirst($data->per_info->email) ?></div>
              </div>
              <!-- 3rd -->
              <div style="display: flex; gap: 10px;">
                <div><i class="fa-solid fa-home" style="color: #fbc531;"></i></div>
                <div style="font-weight: 300; font-size: 14px;">><?= ucfirst($data->per_info->country) ?>
                  <?= ucfirst($data->per_info->city) ?></div>
              </div>

            </div>

          </div>
          <!--  -->

          <div style="width: 90%; margin: 20px auto; display: flex; flex-direction: column; gap: 10px;">
            <h1 style="text-transform: uppercase; color: #fbc531;"><?= $translations['Profile'] ?></h1>
            <p style="text-align: justify; font-size: 12px; font-weight: 300;"> <?= ucfirst($data->per_info->about_us) ?></p>


          </div>

          <!--  -->
          <div style="width: 90%; margin: 30px auto;">
            <h1 style="text-transform: uppercase; color: #fbc531;"><?= $translations['experience'] ?></h1>
          </div>
          <!--  -->
          <?php
          for ($i = 0; $i < count($data->work_exp); $i++) {
            $pre = $data->work_exp[$i]->present;
            if ($pre == 0) {
              $pre = $data->work_exp[$i]->work_end_date;
              $wenddata = date("M Y", strtotime($pre));
            } else {
              $wenddata = "Present";
            };
          ?>
            <div style="width: 90%; margin: 0 auto; display: flex; flex-direction: column; gap: 5px;">
              <h4 style="text-transform: uppercase; font-size: 12px; font-weight: 400;"><?= ucwords($data->work_exp[$i]->role) ?> / <?= date(" M Y ", strtotime($data->work_exp[$i]->work_st_data)) ?> - <?= $wenddata ?></h4>
              <h4 style="text-transform: uppercase; font-size: 12px; font-weight: 400;"><?= ucfirst($data->work_exp[$i]->company_name) ?></h4>
              <p style="text-align: justify; font-size: 12px; font-weight: 300;"><?= ucfirst($data->work_exp[$i]->city_country) ?></p>

            </div>

          <?php
          }
          ?>








        </section>
        <section style="background-color: white; display: flex; flex-direction: column; gap: 10px;">
          <?php
          if ($data->per_info->user_img) {
          ?>
            <div style="width: 90%; margin: 20px auto;">
              <div class="cricle">
                <img src="./uploads/images/<?= $data->per_info->user_img ?>" alt="image">
                <div class="line"></div>
                <div class="dot"> </div>
              </div>


            </div>
          <?php
          }
          ?>
          <!--  -->
          <div style="width: 80%; margin: 30px auto;">
            <h1 style="text-transform: uppercase; color: #fbc531;"><?= $translations['Education'] ?></h1>
          </div>
          <?php
          for ($i = 0; $i < count($data->education); $i++) {
            $edupre =  $data->education[$i]->edu_present;
            if ($edupre == 0) {
              $edupre = $data->education[$i]->deg_end_date;
              $newFormat = date("M Y", strtotime($edupre));
            } else {
              $newFormat = "Present";
            }

          ?>
            <div style="width: 80%; margin: 10px auto;">
              <span style="font-size: 14px; font-weight: 300;"><?= date("M Y", strtotime($data->education[$i]->deg_st_date)) ?> - <?= $newFormat ?></span>
              <h4 style="font-weight: 500; text-transform: capitalize; font-size: 14px;  margin-top:4px"><?= ucwords($data->education[$i]->dagree) ?> </h4>
              <h4 style="font-weight: 300; font-size: 14px; text-transform: capitalize;  margin-top:4px"><?= ucfirst($data->education[$i]->field) ?></h4>


            </div>

          <?php
          }
          ?>
          <div style="width: 80%; margin: 30px auto;">
            <h1 style="text-transform: uppercase; color: #fbc531;"><?= $translations['languages'] ?></h1>
          </div>
          <!--  -->
          <div style="width: 70%; margin: 0 auto;">
            <ul style="display: flex; flex-direction: column; font-size: 14px; gap: 10px;  text-transform: capitalize;">
              <?php
              for ($i = 0; $i < count($data->languages); $i++) {
              ?>
                <li> <?= ucwords($data->languages[$i]->language) ?></li>
              <?php
              }
              ?>
            </ul>
          </div>
          <!--  -->

          <div style="width: 80%; margin: 30px auto;">
            <h1 style="text-transform: uppercase; color: #fbc531;"><?= $translations['Skills'] ?></h1>
          </div>
          <!--  -->
          <div style="width: 70%; margin: 0 auto;">
            <ul style="display: flex; flex-direction: column; font-size: 14px; gap: 10px;  text-transform: capitalize;">
              <?php
              for ($i = 0; $i < count($data->skills); $i++) {

              ?>
                <li><?= ucfirst($data->skills[$i]->skill) ?></li>
              <?php
              }
              ?>
            </ul>
          </div>





        </section>
      </div>
    </div>
  </div>