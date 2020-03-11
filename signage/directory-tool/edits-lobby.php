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

<body>
    <?php include("header.php") ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <br>
                <h1 class="text-center">College of Nursing: Lobby List</h1>
                <h6 class="text-center">List is sorted by location and then priority order.</h6>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Location</th>
                            <th scope="col">Order</th>
                            <th scope="col">Team</th>
                            <th scope="col">Name</th>
                            <th scope="col">Room</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
    $database = mysqli_connect('','','','nursingapps_signage') or die('Error connecting to MySQL server.');
    $query = "SELECT * FROM `Lobby` ORDER BY `Lobby`.`Location` ASC, `Lobby`.`PriorityOrder` ASC;";
                                mysqli_query($database, $query) or die('Error querying database.');
                                $result = mysqli_query($database, $query);
                                    while ($row = mysqli_fetch_array($result)){
                                        echo '<tr>';
                                            echo '<td>'.$row['Location'].'</td>';
                                            echo '<td>'.$row['PriorityOrder'].'</td>';
                                            echo '<td>'.$row['Text1'].'</td>';
                                            echo '<td>'.$row['Text2'].'</td>';
                                            echo '<td>'.$row['Room'].'</td>';
                                            echo '<td><a class="btn btn-primary" href="employee-lobby.php?PrimaryKey='.$row['PrimaryKey'].'">Edit</a></td>';
                                            echo '<td><a class="btn btn-danger" href="delete-lobby.php?PrimaryKey='.$row['PrimaryKey'].'">Delete</a></td>';
                                        echo '</tr>';
                                    }
        mysqli_close($database);?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
