<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = mysqli_connect("localhost", "root", "", "vaxx");

    if (!$con) {
       die( " Connection failed. Please try again: Error: " . mysqli_connect_error() );
    }

    //to check if the username already exists in the database

    $username_existance_query = "SELECT username from login where username = '".$username."';";
    $query = mysqli_query($con, $username_existance_query);

    if(mysqli_num_rows($query) != 0)
    {
        die ("Username already exists");
        
    }

    mysqli_close($con);
?>
