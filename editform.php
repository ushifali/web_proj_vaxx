<?php
// Start the session
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="signup.css" />
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="colors.css">
    <link rel="stylesheet" href="inputform.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- linking jquery by cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="jquery-3.5.1.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>



<body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


    <nav class="sidebar close">
        <div class="logo-details">
            <a href="homepage.php"><i class="fas fa-solid fa-virus"></i></a>
            <span class="logo_name" id="logo">VaXx</span>
            <i class='bx bx-menu' id="nav_btn"></i>
        </div>



        <ul class="nav-links">

            <li>
                <a href=" dashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php">Dashboard</a></li>
                </ul>
            </li>


            <li>
                <a href="homepage.php">
                    <i class="fas fa-user"></i>
                    <span class="link_name">Homepage</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="Homepage.php">Homepage</a></li>
                </ul>
            </li>

            <li>
                <a href="classroom.php">
                    <i class="fas fa-chalkboard"></i>
                    <span class="link_name">Classroom</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="classroom">Classroom</a></li>
                </ul>
            </li>



            <li>
                <a href="signup.php">
                    <i class="fas fa-sign-in-alt"></i>
                    <span class="link_name">Sign Up</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="signup.php">Sign Up</a></li>
                </ul>
            </li>

            <li id="active">
                <a href="inputform.php">
                    <i class="far fa-sticky-note"></i>
                    <span class="link_name">Fill Data </span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="inputform.php">Fill Data</a></li>
                </ul>
            </li>




            <li>
                <a href="contact.php">
                    <i class="fas fa-address-book"></i>
                    <span class="link_name">Contact Us</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="contact.php">Contact Us</a></li>
                </ul>
            </li>


            <li>
            </li>
        </ul>
    </nav>

    <a id="button"></a>
    <?php
    if (isset($_SESSION['usn'])) {
        include 'editform_p.php';
    ?>
        <section class="home-section">
            <div class="home-content">
                <i class='bx bx-menu' id="nav_bar1"></i>
                <span class="text">Form</span>
                <span id="welcome_txt"> Welcome,
                    <?php
                    // echo $_SESSION['usn'];
                    // Start the session
                    $welcome_name = $_SESSION['usn'];
                    echo  "$welcome_name &nbsp; &nbsp;";
                    echo "<button><a href=\"logout.php\">LOG OUT</a></button>";

                    ?>


                </span>
            </div>

            

            <div id="login_content">

                    <!-- image as a link. on clicking image it will lead to the link in the tag -->
                    <!-- <a href="dashboard.php"><img id="go_back_btn" src="https://img.icons8.com/bubbles/50/000000/back.png"></a> -->


                    <div id="login_page">


                        <form id="login_info" method="POST" action="">

                            <h1>Edit the form</h1>

                            <form id="inputsection">

                                <label for="username">USN:</label>
                                <input type="text" id="username" name="username" required autocomplete="on" readonly value="<?php echo $_SESSION['usn']; ?>"><br><br>

                                <label for="name">Name:</label>
                                <input type="text" id="name" name="uname" required autocomplete="on" ><br><br>

                                <label for="email">Email-id:</label>
                                <input type="email" id="name" name="email" required autocomplete="on"><br><br>

                                <label for="branch">Branch:</label><br>

                                <select id="branch" name="branch" required>
                                    <option value="none" selected disabled none>Select a branch</option>
                                    <option value="CSE">Computer Science and Engineering</option>
                                    <option value="ISE">Information Science and Engineering</option>
                                    <option value="ECE">Electronics and Communications Engineering</option>
                                    <option value="EEE">Electrical and Electronics Engineering</option>
                                    <option value="BT">Biotechnology Engineering</option>
                                    <option value="ME">Mechanical Engineering</option>
                                </select>
                                <br><br>

                                <label for="year">Year:</label><br>

                                <select id="year" name="years">
                                    <option value="none" selected disabled none>Select a year</option>
                                    <option value="1">1st Year</option>
                                    <option value="2">2nd Year</option>
                                    <option value="3">3rd Year</option>
                                    <option value="4">4th Year</option>
                                </select>
                                <br><br>

                                <label for="vacc" name="vacc">Have you been vaccinated?</label>
                                <input id="vacc_yes" type="radio" name="vacc" value="yes">Yes
                                <input id="vacc_no" type="radio" name="vacc" value="no">No



                                <div id="option_block_1">
                                    <label for="vaccination">You are vaccinated with?</label><br>

                                    <select id="vaccination" name="vacc_type">
                                        <option value="none" selected disabled none>Select a vaccination</option>
                                        <option value="Covishield">Covishield</option>
                                        <option value="Covaxin">Covaxin</option>
                                        <option value="Sputnik">Sputnik</option>
                                    </select><br><br>

                                    <label for="dose1">When was your first dose?</label>
                                    <input type="date" id="dose1" name="fdate" placeholder="1st Dose"><br><br>

                                    <label for="vacc_2" name="vacc_2">Have you taken second dose?</label>
                                    <input id="vacc_2_yes" type="radio" name="vacc_2" value="yes">Yes
                                    <input id="vacc_2_no" type="radio" name="vacc_2" value="no">No

                                    <div id="option_block_3">
                                        <label for="dose2">When was your second dose?</label>
                                        <input type="date" id="dose1" name="sdate" placeholder="2nd Dose"><br><br>
                                    </div>

                                </div>


                                <div id="option_block_2">
                                    <label for="reason">If not vaccinated, Reason:</label>
                                    <input type="text" id="reason" placeholder="Why?"><br><br>
                                </div>

                                <div id="test_block">
                                    <label for="test" name="vacc_2">Have you taken a covid test recently?</label>
                                    <input id="test_yes" type="radio" name="test" value="yes">Yes
                                    <input id="test_no" type="radio" name="test" value="no">No
                                </div>

                                <div id="test_block_if_yes">
                                    <label for="stest" name="vacc_2">IF test results are negative select yes-</label>
                                    <input id="stest_yes" type="radio" name="stest" value="yes">Yes
                                    <input id="stest_no" type="radio" name="stest" value="no">No
                                </div>



                                <div class="sub_butt">
                                    <button type="submit" id="login_submit" form="login_info" value="Submit">Submit</button>
                                </div>


                            </form>


                    </div>

                </div>
            



            <footer>
                <div class="content">
                    <div class="left box">
                        <div class="upper">
                            <div class="topic">About us</div>
                            <p> &nbsp;VaXx is a website that helps track the vaccination status of the students in NMAMIT.</p>

                            <div>

                                <a href="http://www.instagram.com/u_shifali"><i class="fab fa-instagram contact_us_icon"></i></a>&nbsp;
                                <a href="https://github.com/ushifali"><i class="fab fa-github contact_us_icon"></i></a>&nbsp;
                                <a href="https://www.linkedin.com/in/shifali-u-055748192/"><i class="fab fa-linkedin contact_us_icon"></i></a>&nbsp;
                                : SHIFALI U
                            </div>

                            <div>


                                <a href="http://www.instagram.com/shivani_.karkera"><i class="fab fa-instagram contact_us_icon"></i></a>&nbsp;
                                <a href="https://github.com/shivanikarkera"><i class="fab fa-github contact_us_icon"></i></a>&nbsp;
                                <a href="https://www.linkedin.com/in/shivani-girish-karkera-71842a19b/"><i class="fab fa-linkedin contact_us_icon"></i></a>&nbsp;
                                : SHIVANI GIRISH KARKERA
                            </div>
                        </div>

                    </div>

                    <div class="right box">

                        <div class="topic">Contact us</div>
                        <div class="phone">
                            <a href="#"><i class="fas fa-phone-volume"></i>&nbsp;+91 80958 13777</a>
                        </div>
                        <div class="email">
                            <a href="#"><i class="fas fa-envelope"></i>&nbsp;4nm19cs176@nmamit.in</a>
                        </div>
                        <br>
                        <div class="phone">

                            <a href="#"><i class="fas fa-phone-volume"></i>&nbsp;+91 94810 17173</a>
                        </div>
                        <div class="email">
                            <a href="#"><i class="fas fa-envelope"></i>&nbsp;4nm19cs178@nmamit.in</a>

                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <p>Copyright ?? 2020 <a href="#">VaXx</a> All rights reserved</p>
                </div>
            </footer>
        </section>
    <?php

    } else {
    ?>

        <section class="home-section" id="center_inside_this">
            <h2>
                Please Login to continue.</h2><br>
            <button id="login_butn"><a href="login.php">LOG IN</a></button>
        </section>

    <?php
    } ?>

    <script type="text/javascript" src="inputform.js"></script>
    <script type="text/javascript" src="signup.js"></script>
    <script type="text/javascript" src="navigation.js"></script>
    <script type="text/javascript" src="dashboard.js"></script>
</body>

</html>