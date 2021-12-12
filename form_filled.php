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

$query_form_filled = "SELECT count(*) as u FROM user_data where usn='".$_SESSION['usn']."';";
$result = mysqli_query($conn, $query_form_filled);
$result_extract = mysqli_fetch_array($result);
$form_filled_status = $result_extract['u'];
$conn->close();

?>
