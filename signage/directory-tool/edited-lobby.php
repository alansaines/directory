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
                            $location = $_POST['input-location'];
                            $order = $_POST['input-order'];
                            $team = $_POST['input-team'];
                            $name = $_POST['input-name'];
                            $room = $_POST['input-room'];
    }
                            $PrimaryKey = $_GET['PrimaryKey'];
                            $query = "UPDATE `Lobby`
                                        SET Location = '$location',
                                        PriorityOrder = '$order',
                                        Text1 = '$team',
                                        Text2 = '$name',
                                        Room = '$room'
                                    WHERE PrimaryKey = $PrimaryKey";
                            $database = mysqli_connect('','','','nursingapps_signage') or die('Error connecting to MySQL server.');
                            if (mysqli_query($database, $query)){
                            echo "<h2 class=\"text-center\">The following lobby entry was edited.</h2>";
                                echo 'Location: '.$location;
                                echo '<br>';
                                echo 'Order: '.$order;
                                echo '<br>';
                                echo 'Team: '.$team;
                                echo '<br>';
                                echo 'Name: '.$name;
                                echo '<br>';
                                echo 'Room: '.$room;
                            }
                            else{
                                echo $query;
                                echo 'Failed';
                            }
                            mysqli_close($database);
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
