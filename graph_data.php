<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "vaxx";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}



$covishield_query = "SELECT count(*) as u FROM user_vaxx_details where vacc_type='Covishield';";
$covishield_query_execute = mysqli_query($conn, $covishield_query);
$result_extract = mysqli_fetch_array($covishield_query_execute);
$covishield_count = $result_extract['u'];

$Covaxin_query = "SELECT count(*) as u FROM user_vaxx_details where vacc_type='Covaxin';";
$Covaxin_query_execute = mysqli_query($conn, $Covaxin_query);
$result_extract = mysqli_fetch_array($Covaxin_query_execute);
$Covaxin_count = $result_extract['u'];

$Sputnik_query = "SELECT count(*) as u FROM user_vaxx_details where vacc_type='Sputnik';";
$Sputnik_query_execute = mysqli_query($conn, $Sputnik_query);
$result_extract = mysqli_fetch_array($Sputnik_query_execute);
$Sputnik_count = $result_extract['u'];

$novacc_query = "SELECT count(*) as u FROM user_data where vacc_status='no';";
$novacc_query_execute = mysqli_query($conn, $novacc_query);
$result_extract = mysqli_fetch_array($novacc_query_execute);
$novacc_count = $result_extract['u'];


$CSE_query = "SELECT count(*) as u FROM user_data where branch='CSE';";
$CSE_query_execute = mysqli_query($conn, $CSE_query);
$result_extract = mysqli_fetch_array($CSE_query_execute);
$CSE_count = $result_extract['u'];

$ISE_query = "SELECT count(*) as u FROM user_data where branch='ISE';";
$ISE_query_execute = mysqli_query($conn, $ISE_query);
$result_extract = mysqli_fetch_array($ISE_query_execute);
$ISE_count = $result_extract['u'];


$ME_query = "SELECT count(*) as u FROM user_data where branch='ME';";
$ME_query_execute = mysqli_query($conn, $ME_query);
$result_extract = mysqli_fetch_array($ME_query_execute);
$ME_count = $result_extract['u'];


$BT_query = "SELECT count(*) as u FROM user_data where branch='BT';";
$BT_query_execute = mysqli_query($conn, $BT_query);
$result_extract = mysqli_fetch_array($BT_query_execute);
$BT_count = $result_extract['u'];


$ECE_query = "SELECT count(*) as u FROM user_data where branch='ECE';";
$ECE_query_execute = mysqli_query($conn, $ECE_query);
$result_extract = mysqli_fetch_array($ECE_query_execute);
$ECE_count = $result_extract['u'];

$EEE_query = "SELECT count(*) as u FROM user_data where branch='EEE';";
$EEE_query_execute = mysqli_query($conn, $EEE_query);
$result_extract = mysqli_fetch_array($EEE_query_execute);
$EEE_count = $result_extract['u'];


$conn->close();

?>