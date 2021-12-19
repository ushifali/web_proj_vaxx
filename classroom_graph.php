<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <?php

    if (isset($_GET['a']))
        $a = $_GET['a'];
    else {
        $a = "CSE";
    }

    if (isset($_GET['b']))
        $b = $_GET['b'];
    else {
        $b = 1;
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "vaxx";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql_covishield = "select count(*)  as u  from user_data u,user_vaxx_details d  where vacc_type='Covishield' and branch='$a' and uyear=$b and d.usn = u.usn;";
    $sql_Covaxin = "select count(*) as u  from user_data u  ,user_vaxx_details d  where vacc_type='Covaxin'  and branch='$a' and uyear=$b and d.usn = u.usn;";
    $sql_Sputnik = "select count(*)  as u from user_data u,user_vaxx_details d where vacc_type='Sputnik'  and branch='$a' and uyear=$b and d.usn = u.usn;";
    $sql_none = "select count(*)  as u from user_data u ,user_vaxx_details d where vacc_status='no'  and branch='$a' and uyear=$b and d.usn = u.usn;";

    $executed_query1 = mysqli_query($conn, $sql_covishield);
    $executed_query2 = mysqli_query($conn, $sql_Covaxin);
    $executed_query3 = mysqli_query($conn, $sql_Sputnik);
    $executed_query4 = mysqli_query($conn, $sql_none);

    $query_array1 = mysqli_fetch_array($executed_query1);
    $query_array2 = mysqli_fetch_array($executed_query2);
    $query_array3 = mysqli_fetch_array($executed_query3);
    $query_array4 = mysqli_fetch_array($executed_query4);


    $p = $query_array1['u'];
    $q = $query_array2['u'];
    $r = $query_array3['u'];
    $s = $query_array4['u'];

    echo "$p";
    echo "$q";
    echo "$r";
    echo "$s";
    ?>
    <?php
    mysqli_close($conn);

    ?>

</body>

</html>