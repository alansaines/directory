<?php
    //will build a title block 
    function title($title){
        echo '<div class="row tight gotham-medium">';
        echo '<div class="col-12 tight bg-silver shadow" style="float: left;">';
        echo '<p class="text-title">&nbsp;&nbsp;'.$title.'</p>';
        echo '</div>';
        echo '</div>';
    }
    
    function body($location){
        $database = mysqli_connect('mysql.unm.edu','nursingapps','N3wm3x!c0','nursingapps_signage') or die('Error connecting to MySQL server.');
        $query = "SELECT * FROM `Lobby` WHERE `Location` = '$location' ORDER BY `Lobby`.`PriorityOrder` ASC;";
        mysqli_query($database, $query) or die('Error querying database.');
        $result = mysqli_query($database, $query);
        while ($row = mysqli_fetch_array($result)){
        echo '<div class="row tight text-body text-gray gotham-medium">';
        echo '<div class="col-11 tight" style="float: left;">';
        echo '<p>&nbsp;&nbsp;&nbsp;&nbsp;'.$row['Text1'];
            if($row['Text2'] != ""){
                echo ':<span class="gotham-light"> '.$row['Text2'].'</span>';
        }
        echo '</p></div>';
        echo '<div class="col-1 tight" style="float: left;">';
        echo '<p class="text-right">'.$row['Room'].'&nbsp;&nbsp;</p>';
        echo '</div>';
        echo '</div>';
        }
        mysqli_close($database);
    }
    
    function block($place){
        if ($place == "CON 1st"){
            $title = "First Floor: Administration";
        }
        if ($place == "CON 2nd"){
            $title = "Second Floor";
        }
        if ($place == "CON 3rd"){
            $title = "Third Floor";
        }
        if ($place == "HSLIC"){
            $title = "Health Sciences Library & Informatics Center: Lower Plaza";
        }
        if ($place == "HSSB"){
            $title = "Health Sciences & Services Building: Third Floor";
        }
        if ($place == "DOM"){
            $title = "Domenici Center for Health Sciences Education: North Wing";
        }
        if ($place == "SURGE"){
            $title = "Surge Building: 2701 Frontier Ave NE";
        }
        if ($place == "1650"){
            $title = "Business Communications Building: 1650 University NE";
        }
        title($title);
        body($place);
    }

    function faculty_con($length){
                    echo '<div class="row tight justify-content-center">';
                    echo '<p class="text-center text-big">Faculty Offices (2nd & 3rd Floors)</p>';
                    echo '</div>';
                    $database = mysqli_connect('mysql.unm.edu','nursingapps','N3wm3x!c0','nursingapps_signage') or die('Error connecting to MySQL server.');
                    $query = "SELECT *  FROM `Employees` WHERE `Floor` IN ('2nd','3rd') AND `FacultyStaff` = 'Faculty' ORDER BY `Employees`.`LastName` ASC;";
                    mysqli_query($database, $query) or die('Error querying database.');
                    $result = mysqli_query($database, $query);
                    $counter = 1;
                    echo '<div class="row tight text-body">';
                    while ($row = mysqli_fetch_array($result)){
                        //open column
                        if($counter == 1 || $counter%$length==1){
                            echo '<div class="col-3 tight" style="float: left;">';
                            echo '<div class="row tight">';
                        }
                        
                        
                        echo '<div class="col-9 tight" style="float: left;">';
                        echo '<p>&nbsp;&nbsp;&nbsp;'.$row['LastName'].', <span class="gotham-light">'.substr($row['FirstName'],0,1).'</span></p>';
                        echo '</div>';
                        echo '<div class="col-3 tight" style="float: left;">';
                        echo '<p class="text-right">'.$row['Room'].'&nbsp;&nbsp;</p>';
                        echo '</div>';
                        
                        //close column
                        if($counter == $legnth || $counter%$length==0){
                            echo '</div>';
                            echo '</div>';
                        }
                        $counter++;
                    }
                    echo '</div>';
                    mysqli_close($database);
                }

                function faculty_1650($length){
                    echo '<div class="row tight justify-content-center">';
                    echo '<p class="text-center text-big">Faculty Offices (1650 University NE)</p>';
                    echo '</div>';
                    $database = mysqli_connect('mysql.unm.edu','nursingapps','N3wm3x!c0','nursingapps_signage') or die('Error connecting to MySQL server.');
                    $query = "SELECT *  FROM `Employees` WHERE `Building` = '1650' AND `FacultyStaff` = 'Faculty' ORDER BY `Employees`.`LastName` ASC;";
                    mysqli_query($database, $query) or die('Error querying database.');
                    $result = mysqli_query($database, $query);
                    $counter = 1;
                    echo '<div class="row tight text-body">';
                    while ($row = mysqli_fetch_array($result)){
                        //open column
                        if($counter == 1 || $counter%$length==1){
                            echo '<div class="col-3 tight" style="float: left;">';
                            echo '<div class="row tight">';
                        }
                        
                        
                        echo '<div class="col-9 tight" style="float: left;">';
                        echo '<p>&nbsp;&nbsp;&nbsp;'.$row['LastName'].', <span class="gotham-light">'.substr($row['FirstName'],0,1).'</span></p>';
                        echo '</div>';
                        echo '<div class="col-3 tight" style="float: left;">';
                        echo '<p class="text-right">'.$row['Room'].'&nbsp;&nbsp;</p>';
                        echo '</div>';
                        
                        //close column
                        if($counter == $length || $counter%$length==0){
                            echo '</div>';
                            echo '</div>';
                        }
                        $counter++;
                    }
                    echo '</div>';
                    mysqli_close($database);
                }
?>
