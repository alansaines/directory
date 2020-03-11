<html>

<head>
    <!-- bootstrap for spacing of columns -->
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
    </style>
</head>
<?php include("header.php") ?>

<body class="bg-light">
    <div class="container bg-white">
        <div class="row justify-content-center">
            <div class="col-12">
                <?php
                        $database = mysqli_connect('','','','nursingapps_signage') or die('Error connecting to MySQL server.');
                        if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
                            $fname = $_POST['input-fname'];
                            $lname = $_POST['input-lname'];
                            $credentials = $_POST['input-credentials'];
                            $jobTitle = $_POST['input-title'];
                            $building = $_POST['input-building'];
                            $floor = $_POST['input-floor'];
                            $room = $_POST['input-room'];
                            $phone = $_POST['input-phone'];
                            $hscnetid = $_POST['input-hscnetid'];
                            $role = $_POST['input-role'];
                            $team = $_POST['input-team'];
                            $query = "INSERT INTO Employees (PrimaryKey, Building, Floor, Room, LastName, FirstName, Credentials, JobTitle, FacultyStaff, Team, Phone, HSCNetID, IgnoreSignage, IgnoreWebDirectory) VALUES (NULL,'$building','$floor','$room','$lname','$fname','$credentials','$jobTitle','$role','$team','$phone','$hscnetid','','')";
                        }
                        if (mysqli_query($database, $query)){
                            echo "<h2 class=\"text-center\">The following ".strtolower($role)." member was added to the database.</h2>";
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
                            echo "Building: ".$building;
                            echo '<br>';
                            echo "Floor: ".$floor;
                            echo '<br>';
                            echo 'Phone: '.$phone;
                        }
                        else{
                            echo $query;
                            echo 'Failed';
                        }
                        mysqli_close($database); // Closing Connection with Server
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

</html>
