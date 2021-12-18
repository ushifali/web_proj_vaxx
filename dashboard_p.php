<?php

session_start();

$con = mysqli_connect("localhost", "root", "", "vaxx");

if (!$con) {
    die(" Connection failed. Please try again: Error: " . mysqli_connect_error());
}

$query = "SELECT count(*) as count_of_not_vaxx from user_data where vacc_status='no'; ";
$query_not_vaccinated = mysqli_query($con, $query);

$query_result_not_vaccinated = mysqli_fetch_array($query_not_vaccinated);

$x = $query_result_not_vaccinated['count_of_not_vaxx'];



$query = "SELECT count(*) as count_of_not_vaxx from user_data U, user_vaxx_details UD where U.usn=UD.usn and vacc_status='yes' and second_status='yes';";
$query_fully_vaccinated = mysqli_query($con, $query);

$query_result_fully_vaccinated = mysqli_fetch_array($query_fully_vaccinated);

$y = $query_result_fully_vaccinated['count_of_not_vaxx'];


$query = "SELECT count(*) as count_of_not_vaxx from user_data U, user_vaxx_details UD where U.usn=UD.usn and vacc_status='yes' and second_status='no';";
$query_p_vaccinated = mysqli_query($con, $query);

$query_result_p_vaccinated = mysqli_fetch_array($query_p_vaccinated);

$z = $query_result_p_vaccinated['count_of_not_vaxx'];



$query = "SELECT count(*) as count_of_not_vaxx from user_data where test_taken='yes' and test_status='yes';";
$query_test= mysqli_query($con, $query);

$query_result_test = mysqli_fetch_array($query_test);

$a = $query_result_test['count_of_not_vaxx'];

mysqli_close($con);

?>