<style>
  @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,500;0,600;1,300&family=Poppins:wght@100;200&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
  }

  .resume_container {
    width: 210mm;
    min-height: 296.5mm;
    background-color: aliceblue;
    position: relative;
    transform: translatey(70px);
    margin: auto;

  }

  .top_img img {
    width: 210mm;
    position: absolute;
    top: 0;
    z-index: 1;
    height: 200px;

  }

  .main_container {
    display: grid;
    grid-template-columns: 90mm 120mm;
    position: relative;
  }

  .circle {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    position: absolute;
    z-index: 2;
    top: 50px;
    left: 80px;
    border: 6px solid #1abc9c;
    background-color: azure;
  }

  .title {
    background-color: #222f3e;
    width: 100%;
    height: 40px;
    border-radius: 30px;

  }

  .bottom_img img {
    position: absolute;
    bottom: 0;
    z-index: 3;


  }

  .inner_container {
    width: 90%;
    margin: auto;
    margin-top: 280px;
    height: 600px;

  }
</style>

<div id="content">
  <div class="resume_container">
    <div class="top_img">
      <img src="./templates/tem-design-image/Top.png" alt="" />
    </div>
    <div class="bottom_img">
      <img src="./templates/tem-design-image/Bottom.png " alt="" style="width: 210mm; height: 150px;" />
    </div>

    <div class="main_container">
      <!-- COLUMN FIRST -->
      <div>
        <?php
        if ($data->per_info->user_img) {
        ?>
          <div class="circle">
            <img style="height: 100%; width:100%;   border-radius:50%" src="./uploads/images/<?= $data->per_info->user_img ?>" alt="image">

          </div>
        <?php
        }
        ?>
        <div class="inner_container">
          <!-- Name div -->
          <div style="text-align: center">
            <div>
              <h2 style="text-transform: uppercase"><?= ucfirst($data->per_info->fname) ?> <?= ucfirst($data->per_info->lname) ?></h2>
            </div>
            <div>
              <span style="text-transform: uppercase; font-size: 14px"><?= ucwords($data->per_info->profession) ?></span>
            </div>
          </div>
          <!-- end -->
          <!-- profile div -->
          <div style="margin-top: 30px">
            <div style="
                  background-color: #2d3436;
                  width: 90%;
                  margin: 0 auto;
                  border-radius: 30px;
                  color: white;
                  display: flex;
                  padding: 10px;
                  gap: 50px;
                ">
              <div>
                <i class="fa-solid fa-user" style="font-size: 24px;margin-left:20px"></i>
              </div>
              <div>
                <h2 style="text-transform: uppercase"><?= $translations['Profile'] ?></h2>
              </div>
            </div>
            <div>
              <p style="
                    text-align: justify;
                    font-size: 13px;
                    padding: 5px;
                    color: gray;
                  ">
                <?= ucfirst($data->per_info->about_us) ?>
              </p>
            </div>
          </div>
          <!-- profile end -->
          <!-- contact -->
          <div style="margin-top: 20px">
            <div style="
                  background-color: #2d3436;
                  width: 90%;
                  margin: 0 auto;
                  border-radius: 30px;
                  color: white;
                  display: flex;
                  padding: 10px;
                  gap: 50px;
                ">
              <div>
                <i class="fa-solid fa-phone" style="font-size: 30px"></i>
              </div>
              <div>
                <h1 style="text-transform: uppercase"><?= $translations['contact'] ?></h1>
              </div>
            </div>
          </div>
          <!-- ,,,,,,,,,,,,,,,,, -->
          <div style="
                display: grid;
                grid-template-columns: 70px auto;
                gap: 20px;
                padding: 10px;
                
              ">
            <div style="
                  text-transform: uppercase;
                  font-size: 12px;
                  display: flex;
                  flex-direction: column;
                  gap: 20px;
                ">
              <h3><?= $translations['Gender'] ?></h3>
              <h3><?= $translations['phone'] ?></h3>
              <h3><?= $translations['email'] ?></h3>
              <h3><?= $translations['Adress'] ?></h3>
            </div>
            <div style="
                  display: flex;
                  flex-direction: column;
                  gap: 20px;
                  font-size: 12px;
                  color: gray;
                ">
              <h3><?= ucfirst($data->per_info->gender) ?></h3>
              <h3><?= ucfirst($data->per_info->per_no) ?></h3>
              <h3><?= ucfirst($data->per_info->email) ?></h3>
              <h3><?= ucfirst($data->per_info->country) ?>
                <?= ucfirst($data->per_info->city) ?></h3>
            </div>
          </div>
          <!--  -->


          <div style="margin-top: 31px">
            <div style="
                  background-color: #2d3436;
                  width: 90%;
                  margin: 0 auto;
                  border-radius: 30px;
                  color: white;
                  display: flex;
                  padding: 10px;
                  gap: 50px;
                  
                ">
              <div>
                <i class="fa-solid fa-phone" style="font-size: 24px; margin-left:20px"></i>
              </div>
              <div>
                <h2 style="text-transform: uppercase"><?= $translations['Hobbies'] ?></h2>
              </div>

            </div>
            <div>
              <ul style="margin-top:20px">
                <?php
                for ($i = 0; $i < count($data->hobbies); $i++) {
                ?>
                  <li style="font-size:18px;margin:10px 0 0  40px"><?= ucfirst($data->hobbies[$i]->hobby) ?></li>
                <?php
                }
                ?>

              </ul>
            </div>
          </div>


          <!-- conatact end -->
        </div>
        <!-- skills  -->







      </div>
      <!-- COULMN SECOND -->
      <div>
        <div class="second_main_container" style="
        
              width: 90%;
              margin: 150px auto;
              height: 700px;
            ">
          <!-- Education.............. -->

          <div style="margin-top: 40px">
            <div style="
                  background-color: #2d3436;
                  width: 90%;
                  margin: 0 auto;
                  border-radius: 30px;
                  color: white;
                  display: flex;
                  padding: 10px;
                  gap: 70px;
                ">
              <div>
                <i class="fa-solid fa-graduation-cap" style="font-size: 24px; color: aquamarine;margin-left:20px;"></i>
              </div>
              <div>
                <h2 style="text-transform: uppercase"><?= $translations['Education'] ?></h2>
              </div>
            </div>
          </div>

          <!-- .................... -->
          <div>
            <div style="display: grid; grid-template-columns: 20px auto; margin-top: 20px;">

              <div style="display: flex; flex-direction: column; gap: 107px; align-items: center;"></div>
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
                <div style=" display: flex; flex-direction: column; gap: 20px; ">
                  <div style="display: flex; flex-direction: column; gap: 5px;">
                    <div>
                      <h3 style="text-transform: uppercase; font-size: 12px;"><?= ucwords($data->education[$i]->dagree) ?> / <?= date("M Y", strtotime($data->education[$i]->deg_st_date)) ?> - <?= $newFormat ?></h3>
                    </div>
                    <div>
                      <h2 style="text-transform: uppercase; font-size: 12px;"><?= ucwords($data->education[$i]->instutute_name) ?> </h2>
                    </div>
                    <div>
                      <p style="text-align: justify; font-size: 12px;"><?= ucfirst($data->education[$i]->field) ?></p>
                    </div>



                  </div>

                <?php
              }
                ?>




                </div>


            </div>

          </div>


          <!--  -->
          <div style="margin-top: 20px">
            <div style="
                  background-color: #2d3436;
                  width: 90%;
                  margin: 0 auto;
                  border-radius: 30px;
                  color: white;
                  display: flex;
                  padding: 10px;
                  gap: 70px;
                ">
              <div>
                <i class="fa-solid fa-graduation-cap" style="font-size: 24px; color: aquamarine; margin-left:20px"></i>
              </div>
              <div>
                <h2 style="text-transform: uppercase"><?= $translations['experience'] ?></h2>
              </div>
            </div>
          </div>

          <!--  -->

          <div>
            <div style="display: grid; grid-template-columns: 20px auto; margin-top: 20px;">

              <div style="  display: flex; flex-direction: column; gap: 107px; align-items: center;">
              </div>
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
                <div style=" display: flex; flex-direction: column; gap: 15px; ">
                  <div style="display: flex; flex-direction: column;gap: 5px;">
                    <div>
                      <h3 style="text-transform: uppercase; font-size: 12px;"><?= ucwords($data->work_exp[$i]->role) ?> / <?= date(" M Y ", strtotime($data->work_exp[$i]->work_st_data)) ?> - <?= $wenddata ?> </h3>
                    </div>
                    <div>
                      <h2 style="text-transform: uppercase; font-size: 12px;"><?= ucfirst($data->work_exp[$i]->company_name) ?></h2>
                    </div>
                    <div>
                      <p style="text-align: justify; font-size: 12px;"> <?= ucfirst($data->work_exp[$i]->city_country) ?></p>
                    </div>



                  </div>


                <?php
              }
                ?>




                </div>


            </div>

          </div>

          <!--  -->
          <div style="margin-top: 30px">
            <div style="
            background-color: #2d3436;
            width: 90%;
            margin: 0 auto;
            border-radius: 30px;
            color: white;
            display: flex;
            padding: 10px;
            gap: 50px;
          ">
              <div>
                <i class="fa-solid fa-phone" style="font-size: 24px; font-size: 24px; color: aquamarine; margin-left:20px;"></i>
              </div>
              <div>
                <h2 style="text-transform: uppercase"><?= $translations['Skills'] ?></h2>
              </div>
            </div>
          </div>
          <!-- ,,,,,,,,,,,,,,,,, -->
          <div style="   display: grid;   grid-template-columns: 170px auto; gap: 10px;  padding: 10px;  margin-top: 10px; ">
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
              <div>
                <h4><?= ucfirst($data->skills[$i]->skill) ?></h4>
              </div>
              <div style="width: 100%; height: 10px; background-color: #2d3436;align-self:center">
                <div style="width: <?= $val . "%" ?>; height: 10px; background-color: #1abc9c;"></div>
              </div>

            <?php
            }
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>