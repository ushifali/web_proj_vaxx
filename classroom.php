<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="colors.css">
    <link rel="stylesheet" href="classroom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- linking jquery by cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- link to aos git library -->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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

            <li id="active">
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
            <span class="text">Classroom Dashboard</span>

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
                    echo "
                    <button><a href=\"login.php\">LOG IN</a></button>";
                } ?>
            </span>
        </div>

        <div class="main_content">
            <div id="main_content_text">
                Here you can check the vaccination status of students based on year and semester.
                <br>
                Check it out !
            </div>

            <form action="" id="classroom_submit">
                <div>
                    <label for="branch">Branch:</label>

                    <select id="branch">
                        <option value="none" selected disabled none>Select a branch</option>
                        <option value="CSE">Computer Science and Engineering</option>
                        <option value="ISE">Information Science and Engineering</option>
                        <option value="ECE">Electronics and Communications Engineering</option>
                        <option value="EEE">Electrical and Electronics Engineering</option>
                        <option value="BT">Biotechnology Engineering</option>
                    </select>
                </div>

                <div>
                    <label for="year">Year:</label>
                    <select id="year">
                        <option value="none" selected disabled none>Select a year</option>
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4th Year</option>
                    </select>
                </div>
                <!-- please put an image-> in go -->
                <button type="submit" id="classroom_submit_btn">Go</button>
            </form>


            <div id="main_content_text">Graphs have been designed based on the data and here are the results:
            </div>

            <div id="content_arrange">

                <div id="graph_analysis" data-aos="fade-right">
                    <div id="pie_chat_for_vaccines_taken">
                        <canvas id="piechart"></canvas>
                    </div>

                    <div id="branch_wise_vaccinated_bar_chart " data-aos="fade-right">
                        <canvas id="barchart"></canvas>
                    </div>

                </div>


            </div>

            <?php
            if (isset($_SESSION['usn'])) {
            ?>

                <div id="main_content_text">The vaccination status of every student is as below:
                </div>

                <div class="container table-responsive py-5" data-aos="zoom-out">
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">USN</th>
                                <th scope="col">NAME</th>
                                <th scope="col">STATUS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>NO</td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>YES</td>

                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>NO</td>

                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Larry</td>
                                <td>YES</td>

                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Larry</td>
                                <td>NO</td>

                            </tr>
                        </tbody>
                    </table>
                </div>

            <?php

            } else {
            ?>
                <section class="home-section" id="center_inside_this">
                    <h3>
                        Please Login to view individual status.</h3><br>
                    <button id="login_butn"><a href="login.php">LOG IN</a></button>
                </section>

            <?php
            } ?>




        </div>

        <footer>
            <div class="content">
                <div class="left box">
                    <div class="upper">
                        <div class="topic">About us</div>
                        <p>VaXx is a website that helps track the vaccination status of the students in NMAMIT.</p>
                    </div>
                    <div class="lower">
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

                <div class="right box">
                    <div class="topic">Subscribe to us</div>
                    <form action="#">
                        <input type="text" placeholder="Enter email address">
                        <input type="submit" name="" value="Send">
                        <div class="media-icons">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            &nbsp; &nbsp; &nbsp; &nbsp;
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bottom">
                <p>Copyright © 2020 <a href="#">VaXx</a> All rights reserved</p>
            </div>
        </footer>

    </section>


    <script type="text/javascript" src="navigation.js"></script>
    <script type="text/javascript" src="dashboard.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>
</body>

</html>