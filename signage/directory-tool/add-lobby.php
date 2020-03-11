<html>

<head>
    <!-- bootstrap for spacing of columns -->
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
    </style>
</head>

<body class="bg-light">
    <?php include("header.php") ?>
    <div class="container bg-white">
        <h1 class="text-center">Add to Lobby</h1><br>
        <div class="row justify-content-center">
            <form action="new-lobby.php" method="post">
                <div class="form-row">
                    <div class="form-group col-2">
                        <label for="input-location">Location</label>
                        <select form="my_form" type="text" class="form-control" id="input-location" name="input-location">
                            <option>1650</option>
                            <option>CON 1st</option>
                            <option>CON 2nd</option>
                            <option>CON 3rd</option>
                            <option>DOM</option>
                            <option>HSLIC</option>
                            <option>HSSB</option>
                            <option>Surge</option>
                        </select>
                    </div>
                    <div class="form-group col-1">
                        <label for="input-order">Order</label>
                        <input type="text" class="form-control" id="input-order" name="input-order" placeholder="">
                    </div>
                    <div class="form-group col-4">
                        <label for="input-fname">Team</label>
                        <input type="text" class="form-control" id="input-fname" name="input-team" placeholder="">
                    </div>
                    <div class="form-group col-4">
                        <label for="input-lname">Name (Optional)</label>
                        <input type="text" class="form-control" id="input-lname" name="input-name" placeholder="">
                    </div>
                    <div class="form-group col-1">
                        <label for="input-room">Room</label>
                        <input type="text" class="form-control" id="input-room" name="input-room">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
