<?php
//i used both object and procedural functions
// pls change if its not efficient/ confusing

$servername = "localhost";
$username = "root";
$password = "";
$db = "vaxx";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

$username = $_POST['username'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$year = $_POST['years'];
$vacc_status = $_POST['vacc'];
$test_taken = $_POST['test'];
$test_status = $_POST['stest'];


// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql= "INSERT INTO user_data 
VALUES ('$username', '$uname', '$email', '$branch', '$year','$vacc_status','$test_taken', '$test_status');";

if (mysqli_query($conn, $sql)) {
    echo "successfully inserted";
}
else{
    echo "Error insert: " . mysqli_error($conn);
}

$vacc_type = $_POST['vacc_type'];
$fdate = $_POST['fdate'];
$second_status = $_POST['vacc_2'];
$sdate = $_POST['sdate'];


$sql = "INSERT INTO user_vaxx_details values('$username','$vacc_type','$fdate','$second_status','$sdate');";
if (mysqli_query($conn, $sql)) {
    echo "successfully inserted";
} else {
    echo "Error insert: " . mysqli_error($conn);
}


header('Location: dashboard.php');
?>
