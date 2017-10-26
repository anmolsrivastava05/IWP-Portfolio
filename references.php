<!DOCTYPE html>
<html lang="en">
<head>



<?php
include('config.php');
?>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Anmol Srivastava - Frontend Developer Portfolio">
    <meta name="keywords" content="resume, Landing page ">
    <meta name="author" content="Anmol Srivastava">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>My Portfolio</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="assets/css/all.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body class="bg-gray" data-spy="scroll" data-target="header">


<!--page loader start  -->
<div class="page-loader" >
    <div class="loader" >Loading...</div>
</div>
<!--page loader end -->



<!--header start -->
<header class="header navbar header_white navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header_collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="#">
                resume
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="header_collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">home</a></li>
                <li><a href="#experience">experience</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#work">my work</a></li>
                <li><a href="#contact">hire me </a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</header>
<!--header end -->


<!--EXPERIENCE section-->
<section id="experience" class="bg-gray pt70 pb70">
    <div class="container">
        <div class="sectio_title_three fadeInDown animated wow" data-wow-delay=".1s" >
            <h4>Admin Panel</h4>
            <div></div>
            <p>Welcome Anmol to the Admin Panel</p>
            <p>Click to edit references</p>
        </div>
        <div class="row">
            <?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM refer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="col-sm-offset-1 col-sm-10 ">
                <div class="timeline_three timeline_three_light  fadeInDown animated wow" data-wow-delay=".1s" >
                    <div class="timeline-content">
                        <h5>'.$row["person"].'</h5>
                        <span><strong>'.$row["position"].'</strong></span>
                        <p>'.$row["body"].'</p>
                        <form action="remove.php" method="post">
                        <input type="hidden" name="ref_id" value="'.$row["id"].'">
                        <input type="hidden" name="type" value="ref">
                        <button type="submit"><i class="fa fa-remove"></i></button>
                        </form>
                        <br>
                        <form action="edit.php" method="post">
                        <input type="hidden" name="ref_id" value="'.$row["id"].'">
                        <input type="hidden" name="type" value="ref">
                        <button type="submit"><i class="fa fa-edit"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        ';

    }
} else {
    echo "0 results";
}
$conn->close();
?>
            
           
        </div>
    </div>
</section>
<!--EXPERIENCE  section end -->



<!--footer -->
<!--footer end-->

<!-- jquery -->
<script src="assets/js/jquery.js"></script>
<script src="assets/plugins.js"></script>
<script type="text/javascript">
    
    var person = prompt("Enter Passcode", "Harry Potter");

if (person==="bro") {
    alert("Passcode matched");
}
else {
    window.history.back();
}
</script>
<!-- Custom js -->
<script src="assets/js/app.js"></script>
</body>
</html>
