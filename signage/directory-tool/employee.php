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
        <div class="row justify-content-center">
            <div class="col-10 bg-white">
                <br>
                <h1 class="text-center">Edit Employee</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>HSC NetID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Credentials</th>
                            <th>Job Title</th>
                            <th>Faculty/Staff</th>
                            <th>Team</th>
                            <th>Building</th>
                            <th>Floor</th>
                            <th>Room</th>
                            <th>Phone</th>
                        </tr>
                        <?php
                        $database = mysqli_connect('','','','nursingapps_signage') or die('Error connecting to MySQL server.');
                        $PrimaryKey = $_GET['PrimaryKey'];
                        $query = "SELECT * FROM `Employees` WHERE `PrimaryKey` = '$PrimaryKey'";
                        mysqli_query($database, $query) or die('Error querying database.');
                        $result = mysqli_query($database, $query);
                        while ($row = mysqli_fetch_array($result)){
                            echo '<tr>';
                            echo '<td>'.$row['HSCNetID'].'</td>';
                            echo '<td>'.$row['FirstName'].'</td>';
                            echo '<td>'.$row['LastName'].'</td>';
                            echo '<td>'.$row['Credentials'].'</td>';
                            echo '<td>'.$row['JobTitle'].'</td>';
                            echo '<td>'.$row['FacultyStaff'].'</td>';
                            echo '<td>'.$row['Team'].'</td>';
                            echo '<td>'.$row['Building'].'</td>';
                            echo '<td>'.$row['Floor'].'</td>';
                            echo '<td>'.$row['Room'].'</td>';
                            echo '<td>'.$row['Phone'].'</td>';
                            echo '</tr>';
                        ?>
                        <form action="edited.php?PrimaryKey=<?php echo $row['PrimaryKey']; ?>" method="post" id="my_form">
                            <tr>
                                <td><input form="my_form" type="text" class="form-control" id="input-hscnetid" name="input-hscnetid" value="<?php echo $row['HSCNetID']; ?>"></td>
                                <td><input form="my_form" type="text" class="form-control" id="input-fname" name="input-fname" value="<?php echo $row['FirstName']; ?>"></td>
                                <td><input form="my_form" type="text" class="form-control" id="input-lname" name="input-lname" value="<?php echo $row['LastName']; ?>"></td>
                                <td><input form="my_form" type="text" class="form-control" id="input-credentials" name="input-credentials" value="<?php echo $row['Credentials']; ?>"></td>
                                <td><input form="my_form" type="text" class="form-control" id="input-title" name="input-title" value="<?php echo $row['JobTitle']; ?>"></td>
                                <td><select form="my_form" type="text" class="form-control" id="input-facultystaff" name="input-facultystaff">
                                        <option selected><?php echo $row['FacultyStaff']; ?></option>
                                        <option>Faculty</option>
                                        <option>Staff</option>
                                    </select>
                                </td>
                                <td><select form="my_form" type="text" class="form-control" id="input-team" name="input-team">
                                        <option selected><?php echo $row['Team']; ?></option>
                                        <option>1650 Staff</option>
                                        <option>Clinical Affairs</option>
                                        <option>COPH</option>
                                        <option>Development Team</option>
                                        <option>Education Team</option>
                                        <option>Education & Innovation</option>
                                        <option>Faculty</option>
                                        <option>NMNEC</option>
                                        <option>Org. Services</option>
                                        <option>Practice Team</option>
                                        <option>Strategic Support</option>
                                        <option>Student Services</option>
                                        <option>IT Services</option>
                                    </select>
                                </td>
                                <td><select form="my_form" type="text" class="form-control" id="input-building" name="input-building">
                                        <option selected><?php echo $row['Building']; ?></option>
                                        <option>N/A</option>
                                        <option>1650</option>
                                        <option>CON</option>
                                        <option>Domenici North</option>
                                        <option>HSLIC</option>
                                        <option>HSRR</option>
                                        <option>Surge Bldg</option>
                                    </select>
                                </td>
                                <td><select form="my_form" type="text" class="form-control" id="input-floor" name="input-floor">
                                        <option selected><?php echo $row['Floor']; ?></option>
                                        <option>1st</option>
                                        <option>2nd</option>
                                        <option>3rd</option>
                                    </select>
                                </td>
                                <td><input form="my_form" type="text" class="form-control" id="input-room" name="input-room" value="<?php echo $row['Room']; ?>"></td>
                                <td><input form="my_form" type="text" class="form-control" id="input-phone" name="input-phone" maxlength="14" value="<?php echo $row['Phone']; ?>"></td>
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
<script>
    //this script will format a phone number into "(xxx) xxx-xxxx"
    $('#input-phone')

        .keydown(function(e) {
            var key = e.which || e.charCode || e.keyCode || 0;
            $phone = $(this);

            // Don't let them remove the starting '('
            if ($phone.val().length === 1 && (key === 8 || key === 46)) {
                $phone.val('(');
                return false;
            }
            // Reset if they highlight and type over first char.
            else if ($phone.val().charAt(0) !== '(') {
                $phone.val('(' + String.fromCharCode(e.keyCode) + '');
            }

            // Auto-format- do not expose the mask as the user begins to type
            if (key !== 8 && key !== 9) {
                if ($phone.val().length === 4) {
                    $phone.val($phone.val() + ')');
                }
                if ($phone.val().length === 5) {
                    $phone.val($phone.val() + ' ');
                }
                if ($phone.val().length === 9) {
                    $phone.val($phone.val() + '-');
                }
            }

            // Allow numeric (and tab, backspace, delete) keys only
            return (key == 8 ||
                key == 9 ||
                key == 46 ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        })

        .bind('focus click', function() {
            $phone = $(this);

            if ($phone.val().length === 0) {
                $phone.val('(');
            } else {
                var val = $phone.val();
                $phone.val('').val(val); // Ensure cursor remains at the end
            }
        })

        .blur(function() {
            $phone = $(this);

            if ($phone.val() === '(') {
                $phone.val('');
            }
        });

</script>
