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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 bg-white">
                <br>
                <h1 class="text-center">Edit Employee</h1>
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
                        mysqli_query($database, $query) or die('Error querying database.');
                        $result = mysqli_query($database, $query);
                        while ($row = mysqli_fetch_array($result)){
                            echo '<tr>';
                            echo '<td>'.$row['Location'].'</td>';
                            echo '<td>'.$row['PriorityOrder'].'</td>';
                            echo '<td>'.$row['Text1'].'</td>';
                            echo '<td>'.$row['Text2'].'</td>';
                            echo '<td>'.$row['Room'].'</td>';
                            echo '</tr>';
                        ?>
                        <form action="edited-lobby.php?PrimaryKey=<?php echo $row['PrimaryKey']; ?>" method="post" id="my_form">
                            <tr>
                                <td><select form="my_form" type="text" class="form-control" id="input-location" name="input-location">
                                        <option selected><?php echo $row['Location']; ?></option>
                                        <option>1650</option>
                                        <option>CON 1st</option>
                                        <option>CON 2nd</option>
                                        <option>CON 3rd</option>
                                        <option>DOM</option>
                                        <option>HSLIC</option>
                                        <option>HSSB</option>
                                        <option>Surge</option>
                                    </select>
                                </td>
                                <td><input form="my_form" type="text" class="form-control" id="input-order" name="input-order" value="<?php echo $row['PriorityOrder']; ?>"></td>
                                <td><input form="my_form" type="text" class="form-control" id="input-team" name="input-team" value="<?php echo $row['Text1']; ?>"></td>
                                <td><input form="my_form" type="text" class="form-control" id="input-name" name="input-name" value="<?php echo $row['Text2']; ?>"></td>
                                <td><input form="my_form" type="text" class="form-control" id="input-room" name="input-room" value="<?php echo $row['Room']; ?>"></td>
                            </tr>
                        </form>
                        <?php } mysqli_close($database); ?>
                    </tbody>
                </table>
                <button form="my_form" type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
            </div>
        </div>
    </div>
</body>
