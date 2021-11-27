<!DOCTYPE html>

<head>
   
</head>
<body>

<?php

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


// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql= "INSERT INTO user_data (usn, uname, email, branch, uyear, vacc_status) 
VALUES ('$username', '$uname', '$email', '$branch', '$year','$vacc_status');";

if (mysqli_query($conn, $sql)) {
    echo "successfully inserted";
}
else{
    echo "Error insert: " . mysqli_error($conn);
}

$conn->close();


?>
    
</body>
</html>