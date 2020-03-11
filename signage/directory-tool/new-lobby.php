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
                            $location = $_POST['input-location'];
                            $order = $_POST['input-order'];
                            $name = $_POST['input-name'];
                            $room = $_POST['input-room'];
                            $team = $_POST['input-team'];
                            $query = "INSERT INTO Lobby (PrimaryKey, Location, PriorityOrder, Text1, Text2, Room) VALUES (NULL,'$location','$order','$team','$name','$room')";
                        }
                        if (mysqli_query($database, $query)){
                            echo "<h2 class=\"text-center\">The following was added to the lobby list.</h2>";
                            echo 'Location: '.$location;
                            echo '<br>';
                            echo 'Order: '.$order;
                            echo '<br>';
                            echo 'Team: '.$team;
                            echo '<br>';
                            echo 'Name: '.$name;
                            echo '<br>';
                            echo "Room: ".$room;
                        }
                        else{
                            echo $query;
                            echo 'Failed';
                        }
                        mysqli_close($database); // Closing Connection with Server
                        ?>
                <br>
                <p class="text-center">You can now logout and close this window or</p>
                <a class="btn btn-primary btn-block" href="edits-lobby.php">Go to Edits</a><br>
                <a class="btn btn-success btn-block" href="add-lobby.php">Add new</a>
                <br>
            </div>
        </div>
    </div>
</body>

</html>
