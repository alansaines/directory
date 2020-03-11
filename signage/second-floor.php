    <!-- bootstrap for spacing of columns -->
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="css/small-signage.css">
    <!-- all gotham not italics fonts -->
    <link rel="stylesheet" href="css/font-faces.css">

    <div class="container-fluid tight">
        <?php
            include("regular-blocks/regular-functions.php"); //calls functions used in this page: topheader, banner, block, footer
            topheader(); //header with CON img
            banner("Second Floor"); //red banner with floor name
        ?>
        <div class="row body tight">
            <div class="col-6 tight" style="float: left; margin-top: 10px;">
                <?php
                    block("Faculty","CON","2nd");
                    block("Student Success","CON","2nd");
                    block("COPH","CON","2nd");
                ?>
            </div>
            <div class="col-6 tight" style="float: left; margin-top: 10px;">
                <?php
                    block("Education Team","CON","2nd");
                    block("IT Services","CON","2nd");
                    block("NMNEC","CON","2nd");
                    block("Practice Team","CON","2nd");
                    block("Student Services","CON","2nd");
                ?>
            </div>
        </div>
    </div>
    <?php footer(); //footer (for more info see 1st floor)?>
