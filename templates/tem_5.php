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
        <div class="circle">
          <img style="height: 100%; width:100%;   border-radius:50%" src="./uploads/images/<?= $data->per_info->user_img ?>" alt="">

        </div>
        <div class="inner_container">
          <!-- Name div -->
          <div style="text-align: center">
            <div>
              <h1 style="text-transform: uppercase">carloss mias</h1>
            </div>
            <div>
              <span style="text-transform: uppercase; font-size: 14px">graphic designer</span>
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
                <i class="fa-solid fa-user" style="font-size: 30px"></i>
              </div>
              <div>
                <h1 style="text-transform: uppercase">Profile</h1>
              </div>
            </div>
            <div>
              <p style="
                    text-align: justify;
                    font-size: 13px;
                    padding: 5px;
                    color: gray;
                  ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Beatae blanditiis alias suscipit tempora ratione excepturi
                libero distinctio, incidunt veritatis ad, consequatur
                repellendus at perferendis cum sed deleniti aliquid quidem
                obcaecati.
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
                <h1 style="text-transform: uppercase">contact</h1>
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
              <h3>Name</h3>
              <h3>phone</h3>
              <h3>email</h3>
              <h3>website</h3>
            </div>
            <div style="
                  display: flex;
                  flex-direction: column;
                  gap: 20px;
                  font-size: 12px;
                  color: gray;
                ">
              <h3>Usman mirza</h3>
              <h3>03166614344</h3>
              <h3>test@gmail.com</h3>
              <h3>www.clorasmiass.com</h3>
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
                <i class="fa-solid fa-phone" style="font-size: 30px"></i>
              </div>
              <div>
                <h1 style="text-transform: uppercase">hobbies</h1>
              </div>
            </div>
          </div>
          <!-- ,,,,,,,,,,,,,,,,, -->
          <div style="
                display: grid;
                grid-template-columns: 130px auto;
                gap: 10px;
                padding: 10px;
                margin-top: 10px;
                
              ">
            <div style="
                  text-transform: uppercase;
                  font-size: 12px;
                  display: flex;
                  flex-direction: column;
                  gap: 20px;
                ">
              <h3>cricket</h3>
              <h3>hockey</h3>
              <h3>football</h3>
              <h3>watch movies</h3>
            </div>
            <div style="
                  display: flex;
                  flex-direction: column;
                  gap: 29px;
                  font-size: 12px;
                  color: gray;
                ">
              <div style="width: 100%; height: 10px; background-color: #2d3436;">
                <div style="width: 30%; height: 10px; background-color: #1abc9c;"></div>
              </div>
              <!--  -->
              <div style="width: 100%; height: 10px; background-color: #2d3436;">
                <div style="width: 30%; height: 10px; background-color: #1abc9c;"></div>
              </div>
              <!--  -->
              <div style="width: 100%; height: 10px; background-color: #2d3436;">
                <div style="width: 30%; height: 10px; background-color: #1abc9c;"></div>
              </div>
              <!--  -->
              <div style="width: 100%; height: 10px; background-color: #2d3436;">
                <div style="width: 30%; height: 10px; background-color: #1abc9c;"></div>
              </div>
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
                <i class="fa-solid fa-graduation-cap" style="font-size: 30px; color: aquamarine"></i>
              </div>
              <div>
                <h1 style="text-transform: uppercase">education</h1>
              </div>
            </div>
          </div>

          <!-- .................... -->
          <div>
            <div style="display: grid; grid-template-columns: 20px auto; margin-top: 20px;">

              <div style="display: flex; flex-direction: column; gap: 107px; align-items: center;">
                <div style="background-color: #2d3436; width: 10px; height: 10px;border-radius: 50%;"></div>
                <div style="background-color: #2d3436; width: 10px; height: 10px;border-radius: 50%;"></div>

              </div>
              <div style=" display: flex; flex-direction: column; gap: 20px; ">
                <div style="display: flex; flex-direction: column; gap: 5px;">
                  <div>
                    <h3 style="text-transform: uppercase; font-size: 12px;">lorem//may2017-july2016</h3>
                  </div>
                  <div>
                    <h2 style="text-transform: uppercase; font-size: 12px;">lorem ipsum dollar</h2>
                  </div>
                  <div>
                    <p style="text-align: justify; font-size: 12px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga quia qui quaerat temporibus, earum odio? Rem minima libero, et ipsa quas minus explicabo nulla dicta nostrum tempora reprehenderit illo. Modi.</p>
                  </div>



                </div>
                <!-- ... -->
                <div style="display: flex; flex-direction: column; gap: 5px;">
                  <div>
                    <h3 style="text-transform: uppercase; font-size: 12px;">lorem//may2017-july2016</h3>
                  </div>
                  <div>
                    <h2 style="text-transform: uppercase; font-size: 12px;">lorem ipsum dollar</h2>
                  </div>
                  <div>
                    <p style="text-align: justify; font-size: 12px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga quia qui quaerat temporibus, earum odio? Rem minima libero, et ipsa quas minus explicabo nulla dicta nostrum tempora reprehenderit illo. Modi.</p>
                  </div>



                </div>
                <!-- ... -->





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
                <i class="fa-solid fa-graduation-cap" style="font-size: 30px; color: aquamarine"></i>
              </div>
              <div>
                <h1 style="text-transform: uppercase">experience</h1>
              </div>
            </div>
          </div>

          <!--  -->

          <div>
            <div style="display: grid; grid-template-columns: 20px auto; margin-top: 20px;">

              <div style="  display: flex; flex-direction: column; gap: 107px; align-items: center;">
                <div style="background-color: #2d3436; width: 10px; height: 10px;border-radius: 50%;"></div>
                <div style="background-color: #2d3436; width: 10px; height: 10px;border-radius: 50%;"></div>

              </div>
              <div style=" display: flex; flex-direction: column; gap: 15px; ">
                <div style="display: flex; flex-direction: column;gap: 5px;">
                  <div>
                    <h3 style="text-transform: uppercase; font-size: 12px;">lorem//may2017-july2016</h3>
                  </div>
                  <div>
                    <h2 style="text-transform: uppercase; font-size: 12px;">lorem ipsum dollar</h2>
                  </div>
                  <div>
                    <p style="text-align: justify; font-size: 12px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga quia qui quaerat temporibus, earum odio? Rem minima libero, et ipsa quas minus explicabo nulla dicta nostrum tempora reprehenderit illo. Modi.</p>
                  </div>



                </div>
                <!-- ... -->
                <div style="display: flex; flex-direction: column; gap: 5px;">
                  <div>
                    <h3 style="text-transform: uppercase; font-size: 14px;">lorem//may2017-july2016</h3>
                  </div>
                  <div>
                    <h2 style="text-transform: uppercase; font-size: 15px;">lorem ipsum dollar</h2>
                  </div>
                  <div>
                    <p style="text-align: justify; font-size: 12px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga quia qui quaerat temporibus, earum odio? Rem minima libero, et ipsa quas minus explicabo nulla dicta nostrum tempora reprehenderit illo. Modi.</p>
                  </div>



                </div>
                <!-- ... -->





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
            gap: 50px;
          ">
              <div>
                <i class="fa-solid fa-phone" style="font-size: 30px"></i>
              </div>
              <div>
                <h1 style="text-transform: uppercase">skills</h1>
              </div>
            </div>
          </div>
          <!-- ,,,,,,,,,,,,,,,,, -->
          <div style="
          display: grid;
          grid-template-columns: 170px auto;
          gap: 10px;
          padding: 10px;
          margin-top: 10px;
          
        ">
            <div style="
            text-transform: uppercase;
            font-size: 12px;
            display: flex;
            flex-direction: column;
            gap: 20px;
          ">
              <h3>photoshop</h3>
              <h3>didgital marketing</h3>
              <h3>java</h3>
              <h3>php</h3>
            </div>
            <div style="
            display: flex;
            flex-direction: column;
            gap: 29px;
            font-size: 12px;
            color: gray;
          ">
              <div style="width: 100%; height: 10px; background-color: #2d3436;">
                <div style="width: 30%; height: 10px; background-color: #1abc9c;"></div>
              </div>
              <!--  -->
              <div style="width: 100%; height: 10px; background-color: #2d3436;">
                <div style="width: 30%; height: 10px; background-color: #1abc9c;"></div>
              </div>
              <!--  -->
              <div style="width: 100%; height: 10px; background-color: #2d3436;">
                <div style="width: 30%; height: 10px; background-color: #1abc9c;"></div>
              </div>
              <!--  -->
              <div style="width: 100%; height: 10px; background-color: #2d3436;">
                <div style="width: 30%; height: 10px; background-color: #1abc9c;"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>