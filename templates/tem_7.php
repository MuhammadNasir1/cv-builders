<style>
  @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,500;0,600;1,300&family=Poppins:wght@100;200&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: montserrat;
  }



  .main_container {
    width: 210mm;
    min-height: 296.5mm;
    margin: 0 auto;
    background-color: #f1f2f6;
    /* width: 100%; */
    display: grid;
    grid-template-columns: 310px 1fr;

    box-shadow: 0px 0px 30px 5px #25252518;
  }

  .left_mainContainer {
    background-color: #70a1ff;
    height: 296.5mm;
    width: 80%;
    position: absolute;
    left: 20px;



  }

  .circle {
    background-color: white;
    width: 200px;
    height: 200px;
    border-radius: 50%;



  }

  .circle img {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;


  }
</style>



<div id="content">

  <div class="main_container">
    <section class="left" style="position: relative; border-right: 1px solid black;">
      <div class="left_mainContainer">
        <div style="width: 90%; margin: 20px auto; text-align: center">
          <div style="padding: 20px 0">
            <h1 style="text-transform: uppercase"> <?= ucfirst($data->per_info->fname) ?> <?= ucfirst($data->per_info->lname) ?></h1>
            <h3 style="
                    text-transform: uppercase;
                    font-size: 12px;
                    font-weight: 400;
                  ">
              <?= ucwords($data->per_info->profession) ?>
            </h3>
          </div>
          <!-- img -->
          <?php
          if ($data->per_info->user_img) {
          ?>
            <div class="circle_container" style="
                  width: 90%;
                  margin: auto;
                  text-align: center;
                  display: flex;
                  align-items: center;
                ">
              <div class="circle"><img src="./uploads/images/<?= $data->per_info->user_img ?>" alt="image" /></div>
            <?php
          }
            ?>
            </div>
        </div>
        <!-- ............ -->
        <div class="contact" style="
                width: 70%;
                margin: auto;
                display: flex;
                gap: 10px;
                align-items: center;
              ">
          <div style="
                  background-color: aqua;
                  width: 30px;
                  height: 30px;
                  border-radius: 50%;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                ">
            <i class="fa-solid fa-user" style="color: white"></i>
          </div>
          <div>
            <h1 style="text-transform: uppercase; font-size: 18px">
              conatct me
            </h1>
          </div>
        </div>
        <!-- contact content -->

        <div style="
                width: 70%;
                margin: 20px auto;
                display: flex;
                flex-direction: column;
                gap: 10px;
              ">
          <div style="display: flex; gap: 10px">
            <div><i class="fa-solid fa-phone"></i></div>
            <div style="font-size: 12px"><?= ucfirst($data->per_info->per_no) ?></div>
          </div>
          <!-- 2nd -->
          <div style="display: flex; gap: 10px">
            <div><i class="fa-solid fa-globe"></i></div>
            <div style="font-size: 12px"> <?= ucfirst($data->per_info->email) ?></div>
          </div>
          <!-- 3rd -->
          <div style="display: flex; gap: 10px">
            <div><i class="fa-solid fa-location"></i></div>
            <div style="font-size: 12px"> <?= ucfirst($data->per_info->country) ?> <?= ucfirst($data->per_info->city) ?></div>
          </div>
        </div>
        <hr style="border: 1px solid black; width: 70%; margin: auto" />
        <!-- educattion  -->

        <div class="contact" style="
                width: 70%;
                margin: 20px auto;
                display: flex;
                gap: 10px;
                align-items: center;
              ">
          <div style="
                  background-color: aqua;
                  width: 30px;
                  height: 30px;
                  border-radius: 50%;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                ">
            <i class="fa-solid fa-user" style="color: white"></i>
          </div>
          <div>
            <h1 style="text-transform: uppercase; font-size: 18px">
              conatct me
            </h1>
          </div>
        </div>

        <!-- education content -->

        <div style="width: 70%; margin: auto;">
          <div style="display: flex; flex-direction: column; gap: 10px;">
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
              <div style="text-transform: uppercase; text-align: center; display: flex; flex-direction: column; gap: 5px; margin-top:10px">
                <h1 style="font-size: 14px; margin-top:2px"><?= ucwords($data->education[$i]->instutute_name) ?></h1>
                <h4 style="font-size: 12px; font-weight: 400; margin-top:2px"> <?= ucwords($data->education[$i]->dagree) ?></h4>
                <span style="font-weight: 400; font-size: 12px; margin-top:2px"><?= date("M Y", strtotime($data->education[$i]->deg_st_date)) ?> - <?= $newFormat ?></span>
              </div>
            <?php
            }
            ?>

          </div>




        </div>


      </div>
    </section>
    <section class="right">
      <div class="contact" style="
              width: 90%;
              margin: 20px auto;
              display: flex;
              gap: 10px;
              align-items: center;
            ">
        <div style="
                background-color: aqua;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
              ">
          <i class="fa-solid fa-user" style="color: white"></i>
        </div>
        <div>
          <h1 style="text-transform: uppercase; font-size: 18px">
            about me
          </h1>
        </div>
      </div>

      <!--  -->
      <div style="width: 90%; margin: auto; ">

        <p style="text-align: justify; font-size: 12px; line-height: 1.5rem;"><?= ucfirst($data->per_info->about_us) ?></p>
      </div>
      <hr style="width: 90%; margin: 10px auto; border: 1px solid black;">


      <!-- job experience -->
      <div class="contact" style="
            width: 90%;
            margin: 20px auto;
            display: flex;
            gap: 10px;
            align-items: center;
          ">
        <div style="
              background-color: aqua;
              width: 30px;
              height: 30px;
              border-radius: 50%;
              display: flex;
              align-items: center;
              justify-content: center;
            ">
          <i class="fa-solid fa-user" style="color: white"></i>
        </div>
        <div>
          <h1 style="text-transform: uppercase; font-size: 18px">
            job experience
          </h1>
        </div>
      </div>

      <!-- job conetent -->

      <div style="width: 90%; margin:  auto; display: flex; flex-direction: column; gap: 10px;">
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
          <div style="display: flex; justify-content: space-between; ;">
            <div>
              <h1 style="text-transform: uppercase; font-size: 12px;"><?= ucwords($data->work_exp[$i]->role) ?></h1>
              <span style="text-transform: uppercase; font-size: 10px;"><?= ucwords($data->work_exp[$i]->company_name) ?></span>
            </div>
            <div>
              <span><?= date(" M Y ", strtotime($data->work_exp[$i]->work_st_data)) ?> - <?= $wenddata ?></span>
            </div>

          </div>
          <div>
            <p style="text-align: justify; font-size: 12px;"> <?= ucfirst($data->work_exp[$i]->city_country) ?></p>
          </div>
        <?php
        }
        ?>

      </div>



      <hr style="width: 90%; margin: 10px auto; border: 1px solid black;">

      <div class="contact" style="
          width: 90%;
          margin: 20px auto;
          display: flex;
          gap: 10px;
          align-items: center;
        ">
        <div style="
            background-color: aqua;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
          ">
          <i class="fa-solid fa-user" style="color: white"></i>
        </div>
        <div>
          <h1 style="text-transform: uppercase; font-size: 18px">
            skills
          </h1>
        </div>
      </div>
      <!-- skill content -->
      <div style="width: 90%; margin: 0 auto;">

        <div style="display: flex; flex-direction: column; gap: 10px;">
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
            <label for=""><?= ucfirst($data->skills[$i]->skill) ?></label>
            <div style="width: 60%; height: 10px; background-color: #70a1ff;">
              <div style="width: <?= $val . "%" ?>; height: 10px; background-color: gray;"></div>


            </div>

          <?php
          }
          ?>


        </div>


      </div>
      <hr style="width: 90%; margin: 20px auto; border: 1px solid black;">


      <div style="display: grid; grid-template-columns: 1fr 1fr; width: 90%; margin: auto;">

        <div>
          <div class="contact" style="
          width: 90%;
          margin: 20px auto;
          display: flex;
          gap: 10px;
          align-items: center;
        ">
            <div style="
            background-color: aqua;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
          ">
              <i class="fa-solid fa-user" style="color: white"></i>
            </div>
            <div>
              <h1 style="text-transform: uppercase; font-size: 18px">
                language
              </h1>
            </div>
          </div>
          <!-- .................. -->
          <div style="display: flex; width: 90%; margin: auto; justify-content: space-between; text-transform: uppercase; font-size: 13px;">
            <div>
              <ul>
                <?php
                for ($i = 0; $i < count($data->languages); $i++) {
                ?>
                  <li style="margin:10px 0 0 30px"><?= ucwords($data->languages[$i]->language) ?></li>
                <?php
                }
                ?>
              </ul>
            </div>


          </div>


        </div>
        <div>

          <div class="contact" style="
                width: 90%;
                margin: 20px auto;
                display: flex;
                gap: 10px;
                align-items: center;
              ">
            <div style="
                  background-color: aqua;
                  width: 30px;
                  height: 30px;
                  border-radius: 50%;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                ">
              <i class="fa-solid fa-user" style="color: white"></i>
            </div>
            <div>
              <h1 style="text-transform: uppercase; font-size: 18px">
                hobbies
              </h1>
            </div>
          </div>

          <!--  -->

          <div style="display: flex; align-items: center; justify-content: center; text-transform: uppercase; font-size: 12px;">
            <ul>
              <?php
              for ($i = 0; $i < count($data->hobbies); $i++) {
              ?>
                <li style="margin:10px 0 0 30px"><?= ucfirst($data->hobbies[$i]->hobby) ?></li>
              <?php
              }
              ?>

            </ul>
          </div>




        </div>


      </div>




    </section>
  </div>
</div>