<html>

<head>
    <!-- bootstrap for spacing of columns -->
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="css/large-signage.css">
    <!-- font faces -->
    <link rel="stylesheet" href="css/font-faces.css">
</head>

<body>
    <div class="container-fluid tight">
        <?php 
                include("lobby-blocks/header.php");
                include("lobby-blocks/lobby-functions.php");
                block("CON 1st");
                block("CON 2nd");
                block("CON 3rd");
                faculty_con(13);
        ?>
    </div>
</body>

</html>
