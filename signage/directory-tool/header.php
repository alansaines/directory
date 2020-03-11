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
    <div class="container my-1">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-hsc rounded">
                    <a class="navbar-brand" href="index.php">CON IT Directory Tool</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php">Add Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="edits.php">Employee List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="add-lobby.php">Add to Lobby</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="edits-lobby.php">Lobby List</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Live Signage
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="http://nursing-apps.unm.edu/signage/1650.php" target="_blank">1650</a>
                                    <a class="dropdown-item" href="http://nursing-apps.unm.edu/signage/firstFloor1.php" target="_blank">CON 1st Floor 1</a>
                                    <a class="dropdown-item" href="http://nursing-apps.unm.edu/signage/firstFloor2.php" target="_blank">CON 1st Floor 2</a>
                                    <a class="dropdown-item" href="http://nursing-apps.unm.edu/signage/secondFloor.php" target="_blank">CON 2nd Floor</a>
                                    <a class="dropdown-item" href="http://nursing-apps.unm.edu/signage/thirdFloor.php" target="_blank">CON 3rd Floor</a>
                                </div>
                            </li>
                        </ul>
                        <span class="ml-auto navbar-text"><a class="btn btn-danger" href="https://login.unm.edu/cas/logout">logout</a></span>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</body>
<script>
    $(function() {
        $('.dropdown-menu a').click(function(e) {
            $('.active').removeClass('active');
        });
    });

</script>
