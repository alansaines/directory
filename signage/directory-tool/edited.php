<html>

<head>
    <!-- bootstrap for spacing of columns -->
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        .bg-hsc {
            background-color: rgb(0, 122, 134);
        }

    </style>
</head>

<body class="bg-light">
    <?php include("header.php") ?>
    <div class="container bg-white">
        <div class="row justify-content-center">
            <div class="col-10">
                <?
    if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
                            $fname = $_POST['input-fname'];
                            $lname = $_POST['input-lname'];
                            $credentials = $_POST['input-credentials'];
                            $jobTitle = $_POST['input-title'];
                            $room = $_POST['input-room'];
                            $phone = $_POST['input-phone'];
                            $hscnetid = $_POST['input-hscnetid'];
                            $role = $_POST['input-facultystaff'];
                            $team = $_POST['input-team'];
                            $building = $_POST['input-building'];
                            $floor = $_POST['input-floor'];
                            if ($floor == "1650 (3rd)"){
                                $floor = "";
                            }
    }
                            $PrimaryKey = $_GET['PrimaryKey'];
                            $query = "UPDATE `Employees`
                                        SET FirstName = '$fname',
                                        FirstName = '$fname',
                                        LastName = '$lname',
                                        Credentials = '$credentials',
                                        Room = '$room',
                                        Phone = '$phone',
                                        HSCNetID = '$hscnetid',
                                        FacultyStaff = '$role',
                                        Team = '$team',
                                        Building = '$building',
                                        Floor = '$floor'
                                    WHERE PrimaryKey = $PrimaryKey";
                            $database = mysqli_connect('','','','nursingapps_signage') or die('Error connecting to MySQL server.');
                            if (mysqli_query($database, $query)){
                            echo "<h2 class=\"text-center\">The following ".strtolower($role)." member was edited.</h2>";
                                echo 'First Name: '.$fname;
                                echo '<br>';
                                echo 'Last Name: '.$lname;
                                echo '<br>';
                                echo 'Credentials: '.$credentials;
                                echo '<br>';
                                echo 'Job Title: '.$jobTitle;
                                echo '<br>';
                                echo "Email: ".$hscnetid."@salud.unm.edu";
                                echo '<br>';
                                echo "Office: ".$building." ".$room;
                                echo '<br>';
                                echo 'Phone: '.$phone;
                            }
                            else{
                                echo $query;
                                echo 'Failed';
                            }
                            mysqli_close($database);
        ?>
                <br>
                <p class="text-center">You can now logout and close this window or</p>
                <a class="btn btn-primary btn-block" href="edits.php">Go to Edits</a><br>
                <a class="btn btn-success btn-block" href="index.php">Add new</a>
                <br>
            </div>
        </div>
    </div>


</body>
