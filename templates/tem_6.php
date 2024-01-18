    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,500;0,600;1,300&family=Poppins:wght@100;200&display=swap");

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
      }

      /* .resume_container {
  background-color: whitesmoke;
  width: 210mm;
  height: 296.5mm;
  margin: 0 auto;
} */

      .main_container {
        display: grid;
        grid-template-columns: 270px 1fr;
        width: 210mm;
        min-height: 296.5mm;
        margin: auto;
        background-color: whitesmoke;

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
        content: 'contact';
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
        content: 'education';
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
    </head>

    <body>
      <div class="resume_container">
        <div class="main_container">
          <section style="position: relative;">
            <div class="img_container">
              <img src="https://img.freepik.com/free-photo/portrait-beautiful-young-fashion-designer-studio_23-2147874968.jpg?w=996&t=st=1703750048~exp=1703750648~hmac=86b5dd8b74d41787c2922f7305da2a1d7ab2f062a418b471c932c2d6096f6ac4" alt="" />
            </div>
            <!-- ... -->

            <div style="background-color: #d1ccc0; min-height: 830px; width: 95%; position: absolute; left: 20px;">

              <div style="width: 90%; margin: 10px auto;" class="items">
                <p style="text-align: justify; font-size: 12px; margin-top: 80px; font-weight: 300;">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto vitae deserunt perspiciatis cupiditate praesentium. Necessitatibus hic aliquid officia corrupti quae nulla, molestias architecto nihil quo similique, sit quisquam ex distinctio?
                </p>
              </div>

              <!--  -->
              <div style="width: 90%; margin: 30px auto;" class="contact">
                <div>
                  <h3 style="text-align: justify; font-size: 12px;  font-weight: 300; padding-top: 70px;">
                    usmanmirza@gmail.com
                  </h3>
                  <h3 style="font-size: 12px; font-weight: 300;">+8137171929719</h3>
                </div>
                <div style="margin-top: 10px;">
                  <h3 style="text-align: justify; font-size: 12px;  font-weight: 300; ">
                    your adress: 123 road
                  </h3>
                  <h3 style="font-size: 12px; font-weight: 300;">postcode 451 state</h3>
                </div>
              </div>

              <!--  -->
              <div style="width: 90%; margin: 30px auto;" class="education">
                <div>
                  <h3 style="text-align: justify; font-size: 12px;  font-weight: 300; padding-top: 70px; text-transform: uppercase;">
                    enter your degree / major
                  </h3>
                  <h3 style="font-size: 12px; font-weight: 300; text-transform: capitalize;">university / years</h3>
                </div>
                <div style="margin-top: 10px;">
                  <h3 style="text-align: justify; font-size: 12px;  font-weight: 300;  text-transform: uppercase;">
                    enter your degree / major
                  </h3>
                  <h3 style="font-size: 12px; font-weight: 300; text-transform: capitalize;">university / years</h3>

                </div>
                <div style="margin-top: 10px;">
                  <h3 style="text-align: justify; font-size: 12px;  font-weight: 300;  text-transform: uppercase;">
                    enter your degree / major
                  </h3>
                  <h3 style="font-size: 12px; font-weight: 300; text-transform: capitalize;">university / years</h3>

                </div>
              </div>





            </div>
          </section>
          <section style="position: relative;">

            <div style="width: 90%; margin:  0 auto; margin-top: 40px;">
              <div>
                <h1 style="text-transform: capitalize; color: #e58e26; font-size: 30px;">ashley kok</h1>
              </div>
              <div style="display: flex; gap: 10px;  align-items: center; margin-top: 12px;">
                <div class="dot"></div>
                <div style="background-color: #e58e26; width: 100%; height: 2px;"></div>

              </div>

            </div>

            <!--  -->
            <div style="width: 90%; margin: 20px auto;">
              <div>
                <h2 style="text-transform: capitalize; font-size: 18px; font-weight: 300;">i' am <span style="font-weight: 900;">ashley</span></h2>
                <h3 style="text-transform: capitalize; font-weight: 300; font-size: 17px;">graphic designer</h3>
              </div>
              <div style="display: flex; justify-content: space-between;">
                <h3 style="text-transform: capitalize; font-size: 18px; font-weight: 300;">cum interactive designer</h3>
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
                <h1 style="text-transform: uppercase; font-size: 20px;"> experience</h1>

              </div>


            </div>
            <!--  -->

            <div style="width: 90%; margin: 0 auto;border-left: #e58e26 1px solid; padding-left: 20px;  display: flex; flex-direction: column; gap: 10px; ">
              <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 10px;">
                <div>
                  <span style="text-transform: capitalize;">web designer</span>
                  <h3 style="text-transform: uppercase; font-size: 12px; font-weight: 300;">copmany location / year</h3>
                </div>
                <div>
                  <p style="text-align: justify; font-size: 12px; font-weight: 300; ">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci harum sunt consequatur, in perferendis molestias.
                  </p>
                </div>


              </div>
              <!-- 2nd -->
              <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 10px;">
                <div>
                  <span style="text-transform: capitalize;">web designer</span>
                  <h3 style="text-transform: uppercase; font-size: 12px; font-weight: 300;">copmany location / year</h3>
                </div>
                <div>
                  <p style="text-align: justify; font-size: 12px; font-weight: 300; ">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci harum sunt consequatur, in perferendis molestias.
                  </p>
                </div>


              </div>
              <!-- 3rd -->
              <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 10px;">
                <div>
                  <span style="text-transform: capitalize;">web designer</span>
                  <h3 style="text-transform: uppercase; font-size: 12px; font-weight: 300;">copmany location / year</h3>
                </div>
                <div>
                  <p style="text-align: justify; font-size: 12px; font-weight: 300; ">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci harum sunt consequatur, in perferendis molestias.
                  </p>
                </div>


              </div>


            </div>

            <!--  -->
            <div style=" width: 90%; margin: 0 auto; margin-top: 70px;  padding-left: 20px;">
              <div class="heading">
                <h1 style="text-transform: uppercase; font-size: 20px;">languages</h1>

              </div>


            </div>

            <!--  -->

            <div style="width: 90%; margin:  10px auto; border-left: #e58e26 1px solid; padding-left: 20px; display: flex; flex-direction: column; gap: 10px;">
              <div style="display: flex;justify-content: space-between;">
                <div style="text-transform: uppercase; font-size: 12px;">english</div>
                <div>
                  <div style="width: 200px; height: 10px; background-color: #d1ccc0;">
                    <div style="width: 30%; height: 10px; background-color:#e58e26 ;">

                    </div>

                  </div>

                </div>
              </div>
              <!--  -->
              <div style="display: flex;justify-content: space-between;">
                <div style="text-transform: uppercase; font-size: 12px;">urdu</div>
                <div>
                  <div style="width: 200px; height: 10px; background-color: #d1ccc0;">
                    <div style="width: 30%; height: 10px; background-color:#e58e26 ;">

                    </div>

                  </div>


                </div>
              </div>
              <!--  -->
              <div style="display: flex;justify-content: space-between;">
                <div style="text-transform: uppercase; font-size: 12px;">punjabi</div>
                <div>
                  <div style="width: 200px; height: 10px; background-color: #d1ccc0;">
                    <div style="width: 30%; height: 10px; background-color:#e58e26 ;">

                    </div>

                  </div>

                </div>
              </div>


            </div>
            <!--  -->

            <div style=" width: 90%; margin: 0 auto; margin-top: 70px;  padding-left: 20px;">
              <div class="heading">
                <h1 style="text-transform: uppercase; font-size: 20px;">skills</h1>

              </div>


            </div>
            <!--  -->
            <div style="width: 90%; margin:  10px auto; border-left: #e58e26 1px solid; padding-left: 20px; display: flex; flex-direction: column; gap: 10px;">
              <div style="display: flex;justify-content: space-between;">
                <div style="text-transform: uppercase; font-size: 12px;">photography</div>
                <div>
                  <div style="width: 200px; height: 10px; background-color: #d1ccc0;">
                    <div style="width: 30%; height: 10px; background-color:#e58e26 ;">

                    </div>

                  </div>

                </div>
              </div>
              <!--  -->
              <div style="display: flex;justify-content: space-between;">
                <div style="text-transform: uppercase; font-size: 12px;">didgital marketing</div>
                <div>
                  <div style="width: 200px; height: 10px; background-color: #d1ccc0;">
                    <div style="width: 30%; height: 10px; background-color:#e58e26 ;">

                    </div>

                  </div>


                </div>
              </div>
              <!--  -->
              <div style="display: flex;justify-content: space-between;">
                <div style="text-transform: uppercase; font-size: 12px;">social media</div>
                <div>
                  <div style="width: 200px; height: 10px; background-color: #d1ccc0;">
                    <div style="width: 30%; height: 10px; background-color:#e58e26 ;">

                    </div>

                  </div>


                </div>
              </div>


            </div>





          </section>
        </div>


      </div>


      </div>