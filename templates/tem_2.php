    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;

        }

        :root {
            --primary-color: #323B4C;
            --light-color: #ffffff;
            --dark-color: black;

        }

        .container {
            display: grid;
            width: 21cm;
            min-height: 296.5mm;
            margin: 0 auto;
            grid-template-columns: 250px 1fr;
        }

        .left-column {
            padding: 0 20px 20px 20px;
            background: linear-gradient(to right, #1d1c1c, #474545);
            color: white;

        }

        .right-column {

            padding: 20px;
            width: 100%;
            background-color: #ffffff;

        }

        .sectionright {
            text-align: justify;
        }

        table {

            border-collapse: collapse;

        }

        .imge {
            background-color: orange;
            margin: 0px auto;
            width: 159px;
            border-radius: 0px 0px 400px 400px;
            height: 213px;
            text-align: center;

        }

        .imge img {
            height: 150px;
            width: 150px;
            object-fit: cover;
        }

        .content {
            margin-top: 1rem
        }

        .content .heading {
            padding: 8px 0;
            border-bottom: 2px solid orange;
        }

        .content .heading h5 {

            color: var(--light-color);
            font-size: 17px;
            font-weight: bold;

        }

        .content .heading i {
            margin-right: 8px;
        }

        .per-info .icon-sec {
            margin-top: 16px;
            display: grid;
            grid-template-columns: 2rem 1fr;
            color: var(--light-color);
            align-content: center;

        }

        .per-info .icon-sec p {
            font-size: 13px;
            word-break: break-all;
        }

        .per-info .icon-sec i {
            font-size: 15px;
            color: orange;
        }

        skill .content {
            margin: 0;
        }


        .skill .content ul {
            line-height: 26px;
            margin-top: 10px;
            margin-left: 18px;
        }

        .skill .content li {
            color: orange;
            font-size: 13px;
        }

        .skill .content li span {
            color: var(--light-color);
        }

        .edu-sec {
            margin-top: 40px;
        }

        .sec-heading {
            margin-top: 10px;
        }

        .sec-heading .heading h3 {
            color: var(--primary-color);
            border-bottom: 2px solid orange;
            margin-top: 40px;
            padding: 5px 0;
            ;

        }

        .sec-heading .heading i {
            margin-right: 5px;
            color: orange;
        }

        .ab-info p {
            font-size: 14px;
            margin-top: 10px;
            line-height: 20px;
            text-align: justify;
            width: 100%;
        }

        .right-column {
            width: 100%;
        }

        .edu-section {
            margin-top: 40px;
        }

        .edu-section .main-sec {
            display: grid;
            grid-template-columns: 160px 1fr;
            width: 100%;
            margin-top: 18px;

        }

        .edu-section .date-sec {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .edu-section .date-sec p {
            font-size: 14px;
            font-weight: 500;
        }

        .edu-section .det-sec p {
            font-size: 14px;
            font-weight: 500;
            margin-top: 5px;
        }

        .det-para {
            margin-left: 10px;
        }
    </style>
    <div id="content">
        <div class="container">
            <div class="left-column">
                <?php
                if ($data->per_info->user_img) {
                ?>
                    <div class="imge">
                        <img src="./uploads/images/<?= $data->per_info->user_img ?>" alt="" style="border: 2px solid #f7f4fa; border-radius: 100% ;margin-top:60px;  ">
                    </div>
                <?php
                }
                ?>
                <div class="content">
                    <div>
                        <div class="heading">
                            <h5><i class="fa-solid fa-address-book"></i> <?= $translations['Contact'] ?></h5>
                        </div>
                        <div class="per-info">
                            <div class="icon-sec">
                                <h5><i  class="fa-solid fa-user"></i></h5>
                                <p><?= $data->per_info->gender ?> </p>
                            </div>
                            <div class="icon-sec">
                                <h5><i class="fa-solid fa-envelope"></i></h5>
                                <p><?= $data->per_info->email ?> </p>
                            </div>
                            <div class="icon-sec">
                                <h5><i class="fa-solid fa-phone"></i></h5>
                                <p><?= $data->per_info->per_no ?></p>
                            </div>
                            <div class="icon-sec">
                                <h5><i class="fa-solid fa-location-dot"></i></h5>
                                <p><?= ucfirst($data->per_info->country) ?>
                                    <?= ucwords($data->per_info->city) ?></p>
                            </div>
                            <?php
                            if (isset($data->per_info->website) && !empty($data->per_info->website)) {
                            ?>
                                <div class="icon-sec">
                                    <h5><i class="fa-solid fa-globe"></i></h5>
                                    <p><?= $data->per_info->website ?></p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="edu-sec">
                        <div class="heading">
                            <h5><i class="fa-solid fa-person-digging"></i><?= $translations['Skills'] ?></h5>
                        </div>

                        <div class="skill">
                            <div class="content">
                                <ul>
                                    <?php
                                    for ($i = 0; $i < count($data->skills); $i++) {
                                    ?>
                                        <li> <span><?= ucfirst($data->skills[$i]->skill) ?></span></li>
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="edu-sec">
                        <div class="heading">
                            <h5><i class="fa-solid fa-language"></i><?= $translations['Language'] ?></h5>
                        </div>

                        <div class="skill">
                            <div class="content">
                                <ul>
                                    <?php
                                    for ($i = 0; $i < count($data->languages); $i++) {
                                    ?>
                                        <li> <span><?= ucwords($data->languages[$i]->language) ?></span></li>
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="edu-sec">
                        <div class="heading">
                            <h5><i class="fa-solid fa-people-robbery"></i><?= $translations['Hobbies'] ?></h5>
                        </div>

                        <div class="skill">
                            <div class="content">
                                <ul>
                                    <?php
                                    for ($i = 0; $i < count($data->hobbies); $i++) {
                                    ?>
                                        <li> <span><?= ucfirst($data->hobbies[$i]->hobby) ?></span></li>
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (isset($data->user_references) && !empty($data->user_references)) {
                    ?>
                        <div class="edu-sec">
                            <div class="heading">
                                <h5><i class="fa-solid fa-person-rays"></i><?= $translations['Reference'] ?></h5>
                            </div>

                            <div class="skill">
                                <div class="content">
                                    <ul>
                                        <?php
                                        for ($i = 0; $i < count($data->user_references); $i++) {
                                        ?>
                                            <li> <span><?= ucfirst($data->user_references[$i]->user_reference) ?></span></li>
                                        <?php
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>

            <div class="right-column">
                <div>
                    <div class="section">
                        <div>
                            <h1 style="font-size:40px">
                                <span style="color:orange">
                                    <?= ucfirst($data->per_info->fname) ?>
                                </span>
                                <?= ucfirst($data->per_info->lname) ?>
                            </h1>
                            <h4 style="line-height:10px">
                                <p style="font-size:16px; margin:10px 0">
                                    <?= ucwords($data->per_info->profession) ?>
                                </p>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="sec-heading">
                    <div>
                        <div class="heading">
                            <h3><i class="fa-solid fa-user"></i> <?= $translations['About Me'] ?></h3>
                        </div>
                        <div class="ab-info">
                            <p> <?= ucfirst($data->per_info->about_us) ?></p>
                        </div>
                    </div>

                    <div class="edu-section">
                        <div class="heading">
                            <h3><i class="fa-solid fa-graduation-cap"></i> <?= $translations['Education'] ?></h3>
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
                            <div class="main-sec">
                                <div class="date-sec">
                                    <p><?= date("M Y", strtotime($data->education[$i]->deg_st_date)) ?> - <?= $newFormat ?></p>
                                </div>
                                <div class="det-sec">
                                    <h4><?= ucwords($data->education[$i]->dagree) ?> / <?= ucwords($data->education[$i]->instutute_name) ?></h4>
                                    <p class="det-para"><?= ucfirst($data->education[$i]->field) ?></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>

                    <div class="edu-section">
                        <div class="heading">
                            <h3><i class="fa-solid fa-briefcase"></i>  <?= $translations['Work Experience'] ?></h3>
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
                            <div class="main-sec">
                                <div class="date-sec">
                                    <p><?= date(" M Y ", strtotime($data->work_exp[$i]->work_st_data)) ?> - <?= $wenddata ?></p>
                                </div>
                                <div class="det-sec">
                                    <h4><?= ucwords($data->work_exp[$i]->role) ?> / <?= ucwords($data->work_exp[$i]->company_name) ?></h4>
                                    <p class="det-para"><?= ucfirst($data->work_exp[$i]->city_country) ?></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>