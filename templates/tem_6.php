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
        grid-template-columns: 270px 1fr;
        width: 210mm;
        min-height: 296.5mm;
        margin: auto;
        background-color: whitesmoke;
        box-shadow: 0px 0px 30px 5px #25252518;

      }

      .img_container img {
        margin: 20px 0;

        width: 250px;
        height: 250px;
        border-radius: 0 50% 50% 0;
      }

      .items::before {
        content: 'About';
        width: 90px;
        height: 20px;
        border-radius: 0 20px 20px 0;
        background-color: #e58e26;
        position: absolute;
        left: -20px;
        top: 10px;
        padding: 10px;
        color: white;

      }

      .contact::before {
        content: '<?= $translations['contact'] ?>';
        text-transform: uppercase;
        background-color: #e58e26;
        width: 90px;
        height: 20px;
        border-radius: 0 20px 20px 0;
        position: absolute;
        color: white;
        padding: 10px;
        left: -20px;



      }

      .education::before {
        content: '<?= $translations['education'] ?>';
        text-transform: uppercase;
        font-size: 14px;
        background-color: #e58e26;
        width: 90px;
        height: 20px;
        border-radius: 0 20px 20px 0;
        position: absolute;
        color: white;
        padding: 10px;
        left: -20px;
      }
      .hobby::before {
        content: '<?= $translations['Hobbies'] ?>';
        text-transform: uppercase;
        font-size: 14px;
        background-color: #e58e26;
        width: 90px;
        height: 20px;
        border-radius: 0 20px 20px 0;
        position: absolute;
        color: white;
        padding: 10px;
        left: -20px;
      }

      .dot {
        background-color: #e58e26;
        width: 10px;
        height: 10px;
        border-radius: 50%;

      }

      .heading::before {
        content: '';
        background-color: #e58e26;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        position: absolute;
        left: 22px;


      }

      progress {
        accent-color: #e58e26;
        padding: 10px;


      }
    </style>
    <div id="content">
      <div class="resume_container">
        <div class="main_container">
          <section style="position: relative;">
            <?php
            if ($data->per_info->user_img) {
            ?>
              <div class="img_container">
                <img src="./uploads/images/<?= $data->per_info->user_img ?>" alt="image" />
              </div> <?php
                    }
                      ?>
            <!-- ... -->

            <div style="background-color: #d1ccc0; min-height: 830px; width: 95%; position: absolute; left: 20px;">

              <div style="width: 90%; margin: 10px auto;" class="items">
                <p style="text-align: justify; font-size: 12px; margin-top: 80px; font-weight: 400; color: #111111">
                  <?= ucfirst($data->per_info->about_us) ?>
                </p>
              </div>

              <!--  -->
              <div style="width: 90%; margin: 30px auto;" class="contact">
                <div>
                  <h3 style="text-align: justify; font-size: 13px;  font-weight: 400;padding-top: 70px; "><?= $translations['Email'] ?>:</h3>
                  <h3 class="editable" style="text-align: justify; font-size: 12px;  font-weight: 300; margin-top:4px">
                    <?= ucfirst($data->per_info->email) ?>
                  </h3>
                  <h3 style="text-align: justify; font-size: 13px;  font-weight: 400; margin-top:12px"><?= $translations['Phone No'] ?>:</h3>
                  <h3 class="editable" style="font-size: 12px; font-weight: 300; margin-top:4px"><?= ucfirst($data->per_info->per_no) ?></h3>
                </div>
                <div style="margin-top: 12px;">
                  <h3 style="text-align: justify; font-size: 13px;  font-weight: 400;"><?= $translations['Adress'] ?>:</h3>
                  <h3 class="editable" style="text-align: justify; font-size: 12px;  font-weight: 300; margin-top:4px">
                    <?= ucfirst($data->per_info->country) ?> <?= ucfirst($data->per_info->city) ?>
                  </h3>
                </div>
              </div>

              <!--  -->
              <div style="width: 90%; margin: 30px auto;" class="education hobby">
                <div style="padding-top: 50px;">
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
                    <div style="margin-top: 10px;">
                      <h3 style="text-align: justify; font-size: 12px;  font-weight: 400; padding-top: 10px; text-transform: uppercase;">
                        <?= ucwords($data->education[$i]->dagree) ?> /
                      </h3>
                      <h3 style="font-size: 12px; font-weight: 300; text-transform: capitalize; margin-top:8px"><strong><?= ucwords($data->education[$i]->instutute_name) ?></strong> / <?= date("M Y", strtotime($data->education[$i]->deg_st_date)) ?> - <?= $newFormat ?></h3>
                    </div>


                  <?php
                  }
                  ?>
                </div>
              </div>


           <!--  -->
           <div style="width: 90%; margin: 30px auto;" class="hobby">
                <div style="padding-top: 60px;">
                 <ul>
                 <?php
                for ($i = 0; $i < count($data->hobbies); $i++) {
                ?>
                  <li style="font-size:16px;margin:10px 0 0  20px;"><?= ucfirst($data->hobbies[$i]->hobby) ?></li>
                  <?php
                }
                ?>
                 </ul>
                </div>
              </div>
            </div
            >
          </section>
          <section style="position: relative;">

            <div style="width: 90%; margin:  0 auto; margin-top: 40px;">
              <div>
                <h1 style="text-transform: capitalize; color: #e58e26; font-size: 30px;"> <?= ucfirst($data->per_info->fname) ?> <?= ucfirst($data->per_info->lname) ?></h1>
              </div>
              <div style="display: flex; gap: 10px;  align-items: center; margin-top: 12px;">
                <div class="dot"></div>
                <div style="background-color: #e58e26; width: 100%; height: 2px;"></div>

              </div>

            </div>

            <!--  -->
            <div style="width: 90%; margin: 20px auto;">
              <div>
                <h2 style="text-transform: capitalize; font-size: 18px; font-weight: 300;">i' am <span style="font-weight: 900;"> <?= ucfirst($data->per_info->fname) ?></span></h2>
              </div>
              <div style="display: flex; justify-content: space-between;">
                <h3 style="text-transform: capitalize; font-size: 18px; font-weight: 300;"><?= ucwords($data->per_info->profession) ?></h3>
                <div style="display: flex; gap: 20px; font-size: 20px;">
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-linkedin"></i>
                  <i class="fa-brands fa-twitter"></i>
                </div>
              </div>


            </div>
            <!--  -->
            <div style=" width: 90%; margin: 0 auto; margin-top: 70px;  padding-left: 20px;">
              <div class="heading">
                <h1 style="text-transform: uppercase; font-size: 20px;"><?= $translations['experience'] ?> </h1>

              </div>


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
              <div style="width: 90%; margin: 0 auto;border-left: #e58e26 1px solid; padding-left: 20px;  display: flex; flex-direction: column; gap: 10px; ">
                <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 10px;">
                  <div>
                    <span style="text-transform: capitalize;"><?= ucwords($data->work_exp[$i]->role) ?></span>
                    <h3 style="text-transform: uppercase; font-size: 12px; font-weight: 300; margin-top:8px"><?= ucwords($data->work_exp[$i]->company_name) ?> / <span style="font-size:11px"><?= date(" M Y ", strtotime($data->work_exp[$i]->work_st_data)) ?> - <?= $wenddata ?></span></h3>
                  </div>
                  <div>
                    <p style="text-align: justify; font-size: 12px; font-weight: 300; ">
                      <?= ucfirst($data->work_exp[$i]->city_country) ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
            <!--  -->
            <div style=" width: 90%; margin: 0 auto; margin-top: 70px;  padding-left: 20px;">
              <div class="heading">
                <h1 style="text-transform: uppercase; font-size: 20px;"><?= $translations['languages'] ?></h1>

              </div>


            </div>

            <!--  -->

            <div style="width: 90%; margin:  10px auto; border-left: #e58e26 1px solid; padding-left: 20px; display: flex; flex-direction: column; gap: 10px;">

              <?php
              for ($i = 0; $i < count($data->languages); $i++) {
              ?>
                <div style="display: flex;justify-content: space-between;">
                  <div style="text-transform: uppercase; font-size: 12px;"><?= ucwords($data->languages[$i]->language) ?></div>
                  <div>
                    <div style="width: 200px; height: 10px; background-color: #d1ccc0;">
                      <div style="width: 40%; height: 10px; background-color:#e58e26 ;">

                      </div>

                    </div>

                  </div>
                </div>
              <?php
              }
              ?>
            </div>
            <!--  -->

            <div style=" width: 90%; margin: 0 auto; margin-top: 70px;  padding-left: 20px;">
              <div class="heading">
                <h1 style="text-transform: uppercase; font-size: 20px;"><?= $translations['Skills'] ?></h1>

              </div>


            </div>
            <!--  -->
            <div style="width: 90%; margin:  10px auto; border-left: #e58e26 1px solid; padding-left: 20px; display: flex; flex-direction: column; gap: 10px;">
              <?php
              for ($i = 0; $i < count($data->skills); $i++) {
                switch ($data->skills[$i]->skill_per) {
                  case 'Beginner':
                    $val = 25;
                    break;
                  case 'Skillful':
                    $val = 50;
                    break;
                  case 'Experienced':
                    $val = 75;
                    break;
                  case 'Expert':
                    $val = 98;
                    break;
                  default:
                    $val = 10;
                    break;
                }
              ?>
                <div style="display: flex;justify-content: space-between;">
                  <div style="text-transform: uppercase; font-size: 12px;"><?= ucfirst($data->skills[$i]->skill) ?></div>
                  <div>
                    <div style="width: 200px; height: 10px; background-color: #d1ccc0;">
                      <div style="width: <?= $val . "%" ?>; height: 10px; background-color:#e58e26 ;">

                      </div>

                    </div>

                  </div>
                </div>

              <?php
              }
              ?>
            </div>





          </section>
        </div>


      </div>

    </div>
    <script>
      // let content  = document.getElementById('content');
      // content.contentEditable = true;
      // // content.draggable = true;
      // content.addEventListener('focus' , ()=>{
      //   content.border  =  "1px solid red"
      // })
      // let editable = document.querySelectorAll('.editable');
      // editable.forEach(e => {
      //   e.contentEditable = true
      // });
    </script>