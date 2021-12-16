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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- linking jquery by cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- If you're using FontAwesome 4.7 : -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

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
                <a href="dashboard.php">
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





            <li id="active">
                <a href="signup.php">
                    <i class="fas fa-sign-in-alt"></i>
                    <span class="link_name">Sign Up</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="signup.php">Sign Up</a></li>
                </ul>
            </li>

            </li>
            <li>
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

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu' id="nav_bar1"></i>
            <span class="text">Sign Up</span>
            <span id="welcome_txt"> Welcome,
                <?php
                // echo $_SESSION['usn'];
                // Start the session
                if (isset($_SESSION['usn'])) {
                    
                    
                    $welcome_name = $_SESSION['usn'];
                    echo  "$welcome_name &nbsp; &nbsp;";
                    echo "<button><a href=\"logout.php\">LOG OUT</a></button>";
                } else {
                    echo "Guest User &nbsp";
                    echo "<button><a href=\"login.php\">LOG IN</a></button>";
                }?></span>
        </div>

       <?php if (!isset($_SESSION['usn'])) { ?>
        <div id="login_content">

            <!-- image as a link. on clicking image it will lead to the link in the tag -->
            <!-- <a href="dashboard.php"><img id="go_back_btn" src="https://img.icons8.com/bubbles/50/000000/back.png"></a> -->


            <div id="login_page">


                <form id="login_info" method="POST" action="signup_p.php">

                    <h1>Sign Up</h1><br>

                    <p>Welcome to Vaxx <br></p>

                    <div id="inputsection">

                        <label for="username">Username:</label>
                        <input type="text" name="username" required autocomplete="on" onchange="validate_uname(value)"><br>

                        <div id="usn_error">Username must be your USN</div>


                        <label for="password">Password:</label>
                        <input type="password" name="password1" required>
                        <br>

                        <label for="password"> Re-enter Password:</label>
                        <input type="password" name="password2" required onchange="validated()">

                        <div id="pass2_error">Password not matching
                        </div>
                        <div id="pass2_verified">Password matches
                        </div>

                        <br>
                        <button id="login_submit" type="submit">Sign In</button><br>
                        <a href="login.php" id="new_user"> Already have an account? Log in</a>
                    </div>

                </form>


            </div>

        </div>


        <?php } else { ?>
                <div id="already_signed">
                    <h2>You have already logged in </h2>
                </div>
            <?php } ?>


        <footer>
            <div class="content">
                <div class="left box">
                    <div class="upper">
                        <div class="topic">About us</div>
                        <p>VaXx is a website that helps track the vaccination status of the students in NMAMIT.</p>
                    </div>

                </div>

                <div class="right box">

                    <div class="topic">Contact us</div>
                    <div class="phone">

                        <a href="#"><i class="fas fa-phone-volume"></i>+91 80958 13777</a>
                    </div>
                    <div class="email">
                        <a href="#"><i class="fas fa-envelope"></i>4nm19cs176@nmamit.in</a>
                    </div>
                    <br>
                    <div class="phone">

                        <a href="#"><i class="fas fa-phone-volume"></i>+91 94810 17173</a>
                    </div>
                    <div class="email">
                        <a href="#"><i class="fas fa-envelope"></i>4nm19cs178@nmamit.in</a>

                    </div>
                </div>
            </div>
            <div class="bottom">
                <p>Copyright © 2020 <a href="#">VaXx</a> All rights reserved</p>
            </div>
        </footer>
    </section>

    <script type="text/javascript" src="signup.js"></script>
    <script type="text/javascript" src="navigation.js"></script>
    <script type="text/javascript" src="dashboard.js"></script>
</body>

</html>