 <!DOCTYPE html>
 <html>

 <head>
 </head>

 <body>

     <?php

    //  $a="CSE";
    //  $b= 1;

     if(isset($_GET['a']))
        $a = $_GET['a'];
        else {
            $a = "CSE";
        }
    

     if(isset($_GET['b']))
        $b = $_GET['b'];
    else {
        $b =1;
    }

        $con = mysqli_connect("localhost", "root", "", "vaxx");

        if (!$con) {
            die(" Connection failed. Please try again: Error: " . mysqli_connect_error());
        }


        $sql = "SELECT usn,uname,branch FROM user_data WHERE branch='$a' and uyear=$b;";

        
        $result = mysqli_query($con, $sql);     
        

        echo "<thead class=\"thead-dark\">
     <tr>
         <th scope=\"col\">USN</th>
         <th scope=\"col\">NAME</th>
         <th scope=\"col\">STATUS</th>
     </tr>
 </thead>

";
        while ($row = mysqli_fetch_array($result)) {
            
            echo "<tr>";
            echo "<td scope=\"row\">" . $row['usn'] . "</td>";
            echo "<td>" . $row['uname'] . "</td>";

            $sql1 = "SELECT vacc_status from user_data where usn = '" . $row['usn'] ."';";

            $result1 = mysqli_query($con, $sql1);  
            $result_extract = mysqli_fetch_array($result1);

            if($result_extract['vacc_status'] == 'no')
            {
                echo "<td> NOT Vaccinated</td>";
            }

            else {
                $sql2 = "SELECT second_status from user_vaxx_details where usn = '" . $row['usn'] . "';";

                $result2 = mysqli_query($con, $sql2);
                $result_extract2 = mysqli_fetch_array($result2);

                if ($result_extract2['second_status'] == 'no') {
                    echo "<td> Partially Vaccinated</td>";
                }

                else {
                    echo "<td> Fully Vaccinated</td>";
                }
            }
            echo "</tr>";
        }
        
        mysqli_close($con);
        ?>
 </body>

 </html>
