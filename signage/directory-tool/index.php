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
        <h1 class="text-center">Add employee to database</h1><br>
        <div class="row justify-content-center">
            <form action="new.php" method="post">
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="input-fname">First Name</label>
                        <input type="text" class="form-control" id="input-fname" name="input-fname" placeholder="">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-lname">Last Name</label>
                        <input type="text" class="form-control" id="input-lname" name="input-lname" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-credentials">Credentials</label>
                    <input type="text" class="form-control" id="input-credentials" name="input-credentials" placeholder="Example: PhD, RN, FNP">
                </div>
                <div class="form-group">
                    <label for="input-title">Job Title</label>
                    <input type="text" class="form-control" id="input-title" name="input-title" placeholder="Example: Associate Professor, Clinician Educator">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="input-building">Building</label>
                        <select id="input-building" name="input-building" class="form-control">
                            <option selected>Choose...</option>
                            <option>N/A</option>
                            <option>1650</option>
                            <option>CON</option>
                            <option>Domenici North</option>
                            <option>HSLIC</option>
                            <option>HSRR</option>
                            <option>Surge Bldg</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="input-floor">Floor</label>
                        <select id="input-floor" name="input-floor" class="form-control">
                            <option selected>Choose...</option>
                            <option>N/A</option>
                            <option>1st</option>
                            <option>2nd</option>
                            <option>3rd</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="input-room">Room</label>
                        <input type="text" class="form-control" id="input-room" name="input-room">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-phone">Office Phone</label>
                        <input type="text" class="form-control" id="input-phone" name="input-phone" maxlength="14">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="input-hscnetid">HSC NetID</label>
                        <input type="text" class="form-control" id="input-hscnetid" name="input-hscnetid">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="input-role">Faculty or Staff</label>
                        <select id="input-role" class="form-control" name="input-role">
                            <option selected>Choose...</option>
                            <option>Faculty</option>
                            <option>Staff</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="input-team">Team</label>
                        <select id="input-team" class="form-control" name="input-team">
                            <option selected>Choose...</option>
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
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
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
