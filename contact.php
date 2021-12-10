<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="contact.css" />
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="colors.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- linking jquery by cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

            <li ">
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
            <li>
                <a href="inputform.php">
                    <i class="far fa-sticky-note"></i>
                    <span class="link_name">Fill Data </span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="inputform.php">Fill Data</a></li>
                </ul>
            </li>



            <li id="active">
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
            <span class="text">Contact Us</span>
        </div>


        <div class="login_content">
            <div class="container">
                <div class="content">
                    <div class="left-side">
                        <div class="details">
                            <a href="http://www.instagram.com/u_shifali"><i
                                    class="fab fa-instagram contact_us_icon"></i></a>
                            <a href="https://github.com/ushifali"><i class="fab fa-github contact_us_icon"></i></a>
                            <a href="https://www.linkedin.com/in/shifali-u-055748192/"><i
                                    class="fab fa-linkedin contact_us_icon"></i></a>
                            <div class="topic">Shifali U</div>
                            <div class="text-one">+91 80958 13777</div>
                        </div>
                        <div class="details">
                            <a href="http://www.instagram.com/shivani_.karkera"><i
                                    class="fab fa-instagram contact_us_icon"></i></a>
                            <a href="https://github.com/shivanikarkera"><i
                                    class="fab fa-github contact_us_icon"></i></a>
                            <a href=""><i class="fab fa-linkedin contact_us_icon"></i></a>
                            <div class="topic">Shivani Girish Karkera</div>
                            <div class="text-one">+91 94810 17173</div>
                        </div>

                    </div>
                    <div class="right-side">
                        <div class="topic-text">Send us a message</div>
                        <p>If you have any work from us or any types of queries, you can send us a message </p>
                        <form action="#">
                            <div class="input-box">
                                <input type="text" placeholder="Enter your name" required>
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Enter your email" required>
                            </div>

                            <div class="input-box message-box">
                                <input type="text" placeholder="Enter your comments" required>
                            </div>

                            <div class="button">
                                <button type="submit">Send Now</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

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
</body>

</html>