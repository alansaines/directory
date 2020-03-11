<?php
function block($team, $building, $floor){
                    $database = mysqli_connect('mysql.unm.edu','nursingapps','N3wm3x!c0','nursingapps_signage') or die('Error connecting to MySQL server.');
                    echo '<div class="row tight">';
                        echo '<div class="container-fluid tight">';
                            echo '<div class="row tight">';
                                echo '<div class="col-12 tight"><p class="text-team text-left">&nbsp;&nbsp;'.$team.'</p></div>';
                            echo '</div>';
                            echo '<div class="row text-body tight">';
                                
                                $query = "SELECT * FROM `Employees` WHERE `Floor` = '$floor' AND `Team` = '$team' AND `Building` = '$building' ORDER BY `Employees`.`LastName` ASC;";
                                mysqli_query($database, $query) or die('Error querying database.');
                                $result = mysqli_query($database, $query);
                                echo '<div class="col-9 tight" style="float: left;">';
                                    while ($row = mysqli_fetch_array($result)){
                                        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['LastName'].', <span class="gotham-light">'.substr($row['FirstName'],0,1).'</span><br />';
                                    }
                                    echo '<br>';
                                echo '</div>';

                                $query2 = "SELECT * FROM `Employees` WHERE `Floor` = '$floor' AND `Team` = '$team' AND `Building` = '$building' ORDER BY `Employees`.`LastName` ASC;";
                                mysqli_query($database, $query2) or die('Error querying database.');
                                $result2 = mysqli_query($database, $query2);
                                echo '<div class="col-3 tight text-right" style="float: left;">';
                                    while ($row2 = mysqli_fetch_array($result2)){
                                        echo $row2['Room'].'&nbsp;&nbsp;<br />';
                                    }
                                    echo '<br>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                   mysqli_close($database); 
                }

function banner($text){
    echo    '<div class="row tight">
                <div class="col-12 bg-unm tight" style="float: left; height: 40px;">
                    <p class="text-line text-white gotham-book text-center">'.$text.'</p>
                </div>
            </div>';
}
function topheader(){
    echo    '<div class="row tight bg-hsc">
                <div class="col-12 bg-hsc tight" style="float: left; height: 150px;">
                    <img src="UNM_CollegeOfFineNursing_Horizontal_White.png" class="mx-auto d-block" style="height: inherit;">
                </div>
            </div>';
}

function footer(){
    echo    '<div class="row tight fixed-row-bottom">
                <div class="col-12 tight bg-hsc" style="float: left;">
                    <p class="text-line text-white text-center">For full directory, please see first floor.</p>
                </div>
            </div>';
}

?>
