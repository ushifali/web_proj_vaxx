<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <?php

    $first = 'CSE';
    $second = '1';

    if (isset($_REQUEST['q']))
        $first = $_REQUEST['q'];

    if (isset($_REQUEST['x']))
        $second = $_REQUEST['x'];

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

    $sql_covishield = "select count(*)  as u  from user_data ,user_vaxx_details where vacc_type='Covishield' and branch='" . $first . "' and uyear='" . $second . "';";
    $sql_Covaxin = "select count(*) as u  from user_data ,user_vaxx_details where vacc_type='Covaxin' and branch='" . $first . "' and uyear='" . $second . "';";
    $sql_Sputnik = "select count(*)  as u from user_data ,user_vaxx_details where vacc_type='Sputnik' and branch='" . $first . "' and uyear='" . $second . "';";
    $sql_none = "select count(*)  as u from user_data ,user_vaxx_details where vacc_status='no' and branch='" . $first . "' and uyear='" . $second . "';";

    $executed_query1 = mysqli_query($conn, $sql_covishield);
    $executed_query2 = mysqli_query($conn, $sql_Covaxin);
    $executed_query3 = mysqli_query($conn, $sql_Sputnik);
    $executed_query4 = mysqli_query($conn, $sql_none);

    $query_array1 = mysqli_fetch_array($executed_query1);
    $query_array2 = mysqli_fetch_array($executed_query2);
    $query_array3 = mysqli_fetch_array($executed_query3);
    $query_array4 = mysqli_fetch_array($executed_query4);


    $a = $query_array1['u'];
    $b = $query_array2['u'];
    $c = $query_array3['u'];
    $d = $query_array4['u'];

    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <?php echo "
    <div id=\"pie_chat_for_vaccines_taken\" data-aos=\"fade-right\">
        <canvas id=\"piechart\"></canvas>
    </div>" ?>

    
    <script type="text/javascript">
        Chart.defaults.global.defaultFontColor = "#fff";
        // for pie chart
        var xValues = ["COVISHIELD", "COVAXIN", "SPUTNIK V", "NONE"];
        var yValues = [<?php echo $a ?>, <?php echo $b ?>, <?php echo $c ?>, <?php echo $d ?>];

        console.log(<?php echo $a?>);
        console.log(yValues);
        var barColors = [
            "#abfc7c",
            "#00aba9",
            "#2b5797",
            "#13474A",
        ];

        new Chart("piechart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Types of Vaccine taken by Students"
                }
            }


        });
    </script>


    <?php
    mysqli_close($conn);

    ?>

</body>

</html>