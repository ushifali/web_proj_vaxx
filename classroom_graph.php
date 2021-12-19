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

    // $query = "SELECT count(*) as u from user_data where branch='$a' and uyear=$b;";
    // $query_not_vaccinated = mysqli_query($conn, $query);

    // $query_result_not_vaccinated = mysqli_fetch_array($query_not_vaccinated);

    // $x = $query_result_not_vaccinated['u'];


    $sql_covishield = "select count(*)  as u  from user_data ,user_vaxx_details where vacc_type='Covishield' and branch='$a' and uyear=$b;";
    $sql_Covaxin = "select count(*) as u  from user_data ,user_vaxx_details where vacc_type='Covaxin'  and branch='$a' and uyear=$b;";
    $sql_Sputnik = "select count(*)  as u from user_data ,user_vaxx_details where vacc_type='Sputnik'  and branch='$a' and uyear=$b;";
    $sql_none = "select count(*)  as u from user_data ,user_vaxx_details where vacc_status='no'  and branch='$a' and uyear=$b;";

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

    // echo "
    // // <div id=\"pie_chat_for_vaccines_taken\" data-aos=\"fade-right\">

    // // <h2>" $p","$q","$r","$s"</h2>;
    // //     <canvas id=\"piechart\"></canvas>
    // // </div>";

    
    


    mysqli_close($conn);

    ?>

</body>

</html>
<!-- 
 <
                        script type = "text/javascript" >
                            Chart.defaults.global.defaultFontColor = "#fff";
                        // for pie chart
                        var xValues = ["COVISHIELD", "COVAXIN", "SPUTNIK V", "NONE"];
                        // var yValues = [<?php echo $p ?>, <?php echo $q ?>, <?php echo $r ?>, <?php echo $s ?>];

                        console.log(<?php echo $p ?>);
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
    </> -->