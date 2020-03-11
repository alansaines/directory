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
    <div class="container-fluid">
        <h1 class="text-center">Lobby entry deleted</h1>
        <div class="row justify-content-center">
            <div class="col-10 bg-white">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Location</th>
                            <th>Order</th>
                            <th>Team</th>
                            <th>Name (Optional)</th>
                            <th>Room</th>
                        </tr>
                        <?php
                        $database = mysqli_connect('','','','nursingapps_signage') or die('Error connecting to MySQL server.');
                        $PrimaryKey = $_GET['PrimaryKey'];
                        $query = "SELECT * FROM `Lobby` WHERE `PrimaryKey` = '$PrimaryKey'";
                        mysqli_query($database, $query) or die('Error querying database 1.');
                        $result = mysqli_query($database, $query);
                        while ($row = mysqli_fetch_array($result)){
                            echo '<tr>';
                            echo '<td>'.$row['Location'].'</td>';
                            echo '<td>'.$row['PriorityOrder'].'</td>';
                            echo '<td>'.$row['Text1'].'</td>';
                            echo '<td>'.$row['Text2'].'</td>';
                            echo '<td>'.$row['Room'].'</td>';
                            echo '</tr>';
                        }
                        mysqli_close($database);
                        $database = mysqli_connect('','','','nursingapps_signage') or die('Error connecting to MySQL server.');
                        $queryadd = "INSERT INTO `DeletedLobby` SELECT * FROM `Lobby` WHERE `PrimaryKey` = $PrimaryKey";
                        mysqli_query($database, $queryadd) or die('Error querying database 2.');
                        mysqli_close($database);
                        
                        $database = mysqli_connect('','','','nursingapps_signage') or die('Error connecting to MySQL server.');
                        $querydelete = "DELETE FROM `Lobby` WHERE `PrimaryKey` = $PrimaryKey";
                        mysqli_query($database, $querydelete) or die('Error querying database 3.');
                        mysqli_close($database);
                        ?>
                    </tbody>
                </table>
                <p class="text-center">You can now logout and close this window or</p>
                <a class="btn btn-primary btn-block" href="edits-lobby.php">Go to Edits</a><br>
                <a class="btn btn-success btn-block" href="add-lobby.php">Add new</a>
            </div>
        </div>
    </div>
</body>
