<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = mysqli_connect("localhost", "root", "", "vaxx");

    if (!$con) {
       die( " Connection failed. Please try again: Error: " . mysqli_connect_error() );
    }

    //to check if the username already exists in the database

    $username_existance_query = "SELECT upassword from login where username = '".$username."';";
    $query = mysqli_query($con, $username_existance_query);

$query_result = mysqli_fetch_array($query);

    // echo "$query_result[upassword] ";

    if($query_result['upassword']  == $password)
    {
        echo "login successfully";
        
    }
    else {
        echo "Login failed. Please try again: Error: ";
    }

    mysqli_close($con);
    ?>
