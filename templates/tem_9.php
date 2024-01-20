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
    grid-template-columns: 245px 1fr;
    background-color: aliceblue;
    width: 210mm;
    min-height: 296.5mm;
    margin: 0 auto;


  }

  .left {
    background-color: #2d3436;
    min-height: 296.5mm;

  }

  .circle {
    background-color: #c0392b;
    width: 250px;
    height: 250px;
    border-radius: 50%;
    position: absolute;
    top: 20px;
    left: 50px;

  }

  .left_innerContainer {
    margin-top: 30px;

  }

  hr {
    height: 1px;
    background-color: #c0392b;
    border: none;
    width: 80%;
    margin: 5px auto;
  }



  .item::before {
    content: '1';
    background-color: #ac291a;
    width: 30px;
    height: 30px;
    position: absolute;
    left: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
  }

  .items::before {
    content: '';
    background-color: #2d3436;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    position: absolute;
    left: -10px;

  }
</style>
<div id="content">

  <div class="resume_container">
    <div class="main_container">
      <section class="left">
        <div class="left_innerContainer">
          <div style="
                display: flex;
                align-items: center;
                justify-content: center;
              ">
            <h1 style="text-transform: uppercase; color: white; font-size: 18px">
            <?= $translations['Contact Me'] ?>
            </h1>
          </div>
          <hr />
          <!-- contact container -->
          <div style="width: 80%; margin: 20px auto; color: white ; display: flex; flex-direction: column; gap: 10px;">
            <div style="display: flex; gap: 20px">
              <div style="
                    color: brown;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  ">
                <i class="fa-solid fa-location-dot" style="font-size: 30px"></i>
              </div>
              <div>
                <h4 style="text-transform: uppercase"><?= $translations['Adress'] ?></h4>
                <p style="text-align: justify; text-transform: capitalize; font-weight: 300; margin-top:4px; font-size:14px">
                  <?= ucfirst($data->per_info->country) ?> <?= ucfirst($data->per_info->city) ?>
                </p>
              </div>
            </div>
            <!-- 2nd -->
            <div style="display: flex; gap: 20px">
              <div style="
                    color: brown;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  ">
                <i class="fa-solid fa-phone" style="font-size: 25px"></i>
              </div>
              <div>
                <h4 style="text-transform: uppercase"><?= $translations['Phone No'] ?></h4>
                <p style="text-align: justify; text-transform: capitalize; font-weight: 300; margin-top:4px; font-size:14px">
                  <span><?= ucfirst($data->per_info->per_no) ?></span>
                </p>
              </div>
            </div>
            <!-- 3rd -->
            <div style="display: flex; gap: 20px">
              <div style="
                    color: brown;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  ">
                <i class="fa-solid fa-globe" style="font-size: 25px"></i>
              </div>
              <div>
                <h4 style="text-transform: uppercase"><?= $translations['Email'] ?></h4>
                <p style="text-align: justify; text-transform: capitalize; font-weight: 300; margin-top:4px; font-size:14px;word-break: break-all; padding-right:5px">
                  <?= ucfirst($data->per_info->email) ?>
                </p>
              </div>
            </div>
          </div>
          <!-- pro skills -->
          <div style="
              display: flex;
              align-items: center;
              justify-content: center;
              margin-top: 50px;
            ">
            <h1 style="text-transform: uppercase; color: white; font-size: 18px">
              <?= $translations['Skills'] ?>
            </h1>
          </div>
          <hr />
          <!-- skills bars -->
          <div style="width: 70%; margin: 0 auto; display: flex; flex-direction: column; gap: 10px;margin-top:10px">
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
              <label for="file" style=" text-transform: uppercase; color: white; font-size:14px;margin-top:5px"><?= ucfirst($data->skills[$i]->skill) ?></label>
              <div style="width: 100%; height: 10px; background-color:#ecf0f1 ;">
                <div style="width: <?= $val . "%" ?>; height: 10px; background-color: #741b11;">

                </div>

              </div>
            <?php
            }
            ?>



          </div>

          <!--  -->

          <div style="
              display: flex;
              align-items: center;
              justify-content: center;
              margin-top: 50px;
            ">
            <h1 style="text-transform: uppercase; color: white; font-size: 18px">
              <?= $translations['Hobbies'] ?>
            </h1>
          </div>
          <hr />
          <!-- skills bars -->
          <div style="width: 70%; margin: 0 auto; display: flex; flex-direction: column; gap: 10px;margin-top:10px">
            <?php
            for ($i = 0; $i < count($data->hobbies); $i++) {
            ?>
              <label for="file" style=" text-transform: uppercase; color: white;font-size:14px;margin-top:5px"><?= ucfirst($data->hobbies[$i]->hobby) ?></label>

            <?php
            }
            ?>



          </div>






        </div>
      </section>
      <section class="right">
        <div class="rightinner_Container">

          <div style="width: 90%; margin: 20px auto; display: flex; gap: 20px; justify-content: end; color: white;">
            <div style="background-color: brown; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
              <i class="fa-brands fa-instagram"></i>
            </div>
            <!-- 2nd -->
            <div style="background-color: brown; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
              <i class="fa-brands fa-twitter"></i>
            </div>
            <!-- 3rd -->
            <div style="background-color: brown; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
              <i class="fa-brands fa-whatsapp"></i>
            </div>
          </div>
          <!-- profile name -->

          <div style="width: 100%; background-color: #2d3436; ">
            <div style="width: 70%;margin: 0 auto; padding: 40px 0;">
              <h1 style="text-transform: uppercase; color: white; font-size: 30px;"> <?= ucfirst($data->per_info->fname) ?> <?= ucfirst($data->per_info->lname) ?></h1>
              <h3 style="text-transform: uppercase; color: white; font-weight: 300;"><?= ucwords($data->per_info->profession) ?></h3>

            </div>

          </div>
          <!-- education -->

          <div style="width: 90%; margin: 30px auto;">
            <div class="item" style="position: relative;">
              <h1 style="text-transform: uppercase; padding-left: 80px;"><?= $translations['Education'] ?></h1>
            </div>
            <hr>
          </div>

          <!-- education container -->

          <div style="width: 80%; margin: 0 auto; position: relative; border-left: 1px solid #d63031; padding-left: 5px;">
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
              <div style="display: flex; margin-top:10px ">
                <div class="items" style="flex: 2; text-transform: uppercase; font-size: 14px; display: flex; justify-content: center;">
                  <div>
                    <span style="font-size: 13px; margin-left:2px"><?= date("M Y", strtotime($data->education[$i]->deg_st_date)) ?> - <?= $newFormat ?></span>
                    <p style="font-size:12px;word-break:break-all;"> <?= ucwords($data->education[$i]->dagree) ?></p>
                  </div>

                </div>
                <div style="flex: 3;">
                  <h1 style="text-transform: uppercase; font-size: 14px;"><?= ucwords($data->education[$i]->instutute_name) ?></strong> l</h1>
                  <p style="font-size: 12px; color: gray; text-align: justify;"><?= ucfirst($data->education[$i]->field) ?></p>

                </div>
              </div>
            <?php
            }
            ?>

          </div>
          <!--  -->
          <div style="width: 90%; margin: 30px auto;">
            <div class="item" style="position: relative;">
              <h1 style="text-transform: uppercase; padding-left: 80px;"><?= $translations['experience'] ?></h1>
            </div>
            <hr>
          </div>

          <!-- ..... -->
          <div style="width: 80%; margin: 0 auto; position: relative; border-left: 1px solid #d63031; padding-left: 5px;">
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
              <div style="display: flex; ">
                <div class="items" style="flex: 2; text-transform: uppercase; font-size: 14px; display: flex; justify-content: center;">
                  <div>
                    <span style="font-size: 13px; margin-left:2px"> <?= date(" M Y ", strtotime($data->work_exp[$i]->work_st_data)) ?> - <?= $wenddata ?></span>
                    <p style="font-size:12px;word-break:break-all;"><?= ucwords($data->work_exp[$i]->role) ?></p>
                  </div>

                </div>
                <div style="flex: 3;">
                  <h1 style="text-transform: uppercase; font-size: 14px;"><?= ucfirst($data->work_exp[$i]->company_name) ?></h1>
                  <p style="font-size: 12px; color: gray; text-align: justify;"><?= ucfirst($data->work_exp[$i]->city_country) ?></p>

                </div>
              </div>
            <?php
            }
            ?>


          </div>

        </div>



      </section>
    </div>
  </div>

</div>