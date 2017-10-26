<!DOCTYPE html>
<html lang="en">
<head>



<?php
include('config.php');

$sql = "SELECT * FROM personal";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $dp = $row['profile_picture'];
        $city = $row['city'];
        $email = $row['email'];
        $dob = $row['dob'];
        $contact = $row['contact'];
        $about = $row['about'];
        $university = $row['university'];
        $resumeLink = $row['resume_link'];
        $githubLink = $row['github_link'];
        $facebookLink = $row['facebook_link'];
        $linkedinLink = $row['linkedin_link'];
    }
} else {
    echo "0 results";
}
//$conn->close();
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

<!--hero section-->
<section id="home" class="hero_section_three">
    <div class="hero_section_inner" style="background-image: url('assets/img/team/cover.jpg')">
        <div class="overlay" ></div>
    </div>
    <div class="small_container panel_white">
        <div class="about_intro">
            <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <img alt="profile" class="img-responsive img-rounded" src="assets/img/team/profile.JPG">
                </div>
                <div class="col-sm-7 col-xs-12">
                    <h4>
                        <span>Hello,</span> I'm <?php echo $name; ?>
                    </h4>
                    <h5>
                        Web Developer specializing in front end development
                    </h5>
                    <ul class="border_bottom_list">

                        <li><strong class="list_title">Role: </strong> Frontend developer</li>
                        <li><strong class="list_title">Current City: </strong> <?php echo $city; ?> </li>
                        <li><strong class="list_title">Date of birth: </strong> <?php echo $dob; ?> </li>
                        <li><strong class="list_title">Email: </strong><a href="#"><?php echo $email; ?></a></li>
                        <li><strong class="list_title">University: </strong><a href="#">VIT University</a></li>
                        <!-- <li><strong class="list_title">phone : </strong> +2 0128 812 8420</li> -->
                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>
<!--hero section end-->

<!--about me  section-->
<section class="bg-light pt70 pb70">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
               <div class="text-left">
                   <h5  class="mb25 text-capitalize fadeInDown animated wow" data-wow-delay=".1s" >
                       About Me
                   </h5>
                   <p  class="fadeInDown animated wow" data-wow-delay=".2s" >
                       Hello, I'm a UI/UX Designer & Frontend Developer from Saudi. I have had a chance to work on a number of projects under <b>ACM</b>, <b>ISOI</b> and <b>Winuall</b>, <b>Facebook Developer Circle: Vellore</b>.
                   </p>
                   <p class="fadeInDown animated wow" data-wow-delay=".2s" >
                       I've keen interest in Web development and latest technologies like Javascript, NodeJS, ReactJS etc.
                       I want to build my career in the field of <b>Full Stack Web Development</b>
                   </p>
                   <a href="<?php echo $resumeLink; ?>" class="btn btn_main_border btn-medium mt25 mb50 fadeInDown animated wow" data-wow-delay=".2s" >download resume</a>
               </div>
            </div>
            <div class="col-md-6 col-sm-12 col-md-offset-1  col-xs-12  fadeInDown animated wow" data-wow-delay=".1s" >
                <h5 class="mb25  text-capitalize">
                    My Skills
                </h5>
                <div class="skills_container">
                    <!-- START SINGLE PROGRESS -->
                    <div class="single_progressbar progress_bar_two">
                        <div class="skill_text">
                            <span>PHP</span>
                            <span class="pull-right skill_bar">84%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-transitiongoal="84"></div>
                        </div>
                    </div>
                    <!-- END SINGLE PROGRESS -->

                    <!-- START SINGLE PROGRESS -->
                    <div class="single_progressbar progress_bar_two">
                        <div class="skill_text">
                            <span>HTML</span>
                            <span class="pull-right skill_bar">90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-transitiongoal="90"></div>
                        </div>
                    </div>
                    <!-- END SINGLE PROGRESS -->

                    <!-- START SINGLE PROGRESS -->
                    <div class="single_progressbar progress_bar_two">
                        <div class="skill_text">
                            <span>css</span>
                            <span class="pull-right skill_bar">80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                    </div>
                    <!-- END SINGLE PROGRESS -->

                    <!-- START SINGLE PROGRESS -->
                    <div class="single_progressbar progress_bar_two">
                        <div class="skill_text">
                            <span>Jquery</span>
                            <span class="pull-right skill_bar">75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-transitiongoal="75"></div>
                        </div>
                    </div>
                    <!-- END SINGLE PROGRESS -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--about me section end -->


<!--EXPERIENCE section-->
<section id="experience" class="bg-gray pt70 pb70">
    <div class="container">
        <div class="sectio_title_three fadeInDown animated wow" data-wow-delay=".1s" >
            <h4>my  experience</h4>
            <div></div>
            <p>previous associations thay helped to gather experience </p>
        </div>
        <div class="row">
            <?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM experience";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="col-sm-offset-1 col-sm-10 ">
                <div class="timeline_three timeline_three_light  fadeInDown animated wow" data-wow-delay=".1s" >
                    <div class="timeline-content">
                        <h5>'.$row["company"].'</h5>
                        <span><strong>'.$row["job_title"].'</strong>'.$row["duration"].'</span>
                        <p>'.$row["job_description"].'</p>
                    </div>
                </div>
            </div>
        ';

    }
} else {
    echo "0 results";
}
?>
            
           
        </div>
    </div>
</section>
<!--EXPERIENCE  section end -->

<!--education section -->
<section class="pt70 pb70 bg-light">
    <div class=" container ">
        <div class="sectio_title_three fadeInDown animated wow" data-wow-delay=".1s" >
            <h4>my  education</h4>
            <div></div>
            <p> the roots of education are bitter but the fruit is sweet </p>
        </div>
        <div class="row">
           <?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM education";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="col-sm-offset-1 col-sm-10 ">
                <div class="timeline_three timeline_three_light  fadeInDown animated wow" data-wow-delay=".1s" >
                    <div class="timeline-content">
                        <h5>'.$row["title"].'</h5>
                        <span><strong>'.$row["school"].'</strong>'.$row["location"].'</span>
                    </div>
                </div>
            </div>
        ';

    }
} else {
    echo "0 results";
}

?>
            
        </div>
    </div>
</section>
<!--education section end -->

<!--counter section -->
<section class="bg-black pt90 pb90">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-xs-12">
                <div class="conter_box_one fadeInLeft animated wow" data-wow-delay=".1s" >
                    <i class="icon-pictures"></i>
                    <h6 class="counter">
                        50
                    </h6>
                    <h5>
                        Courses Completed
                    </h5>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-xs-12">
                <div class="conter_box_one fadeInLeft animated wow" data-wow-delay=".2s" >
                    <i class="icon-beaker"></i>
                    <h6 class="counter">
                        10
                    </h6>
                    <h5>
                        Projects Done
                    </h5>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-xs-12">
                <div class="conter_box_one  fadeInLeft animated wow" data-wow-delay=".3s" >
                    <i class=" icon-trophy"></i>
                    <h6 class="counter">
                        2
                    </h6>
                    <h5>
                        Accomplishments
                    </h5>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-xs-12">
                <div class="conter_box_one fadeInLeft animated wow" data-wow-delay=".4s" >
                    <i class=" icon-happy"></i>
                    <h6 class="counter">
                        10
                    </h6>
                    <h5>
                        Recommendations
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--counter section end -->

<!--services section-->
<section id="services" class="bg-light pt70 pb70">
    <div class="container">
        <div class="sectio_title_three fadeInDown animated wow" data-wow-delay=".1s" >
            <h4>services</h4>
            <div></div>
            <p>I work with big and small brands.</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon_box_one fadeInLeft animated wow" data-wow-delay=".1s" >
                    <i class="  icon-laptop"></i>
                    <h5>
                        Web Development
                    </h5>
                    <p>
                        Developed websites using famous frameworks like materiallize, Bootstrap.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon_box_one fadeInLeft animated wow" data-wow-delay=".2s" >
                    <i class=" icon-mobile"></i>
                    <h5>
                        app Development
                    </h5>
                    <p>
                        Necessitatibus iure impedit explicabo minus voluptate est officia quas! Quae fugit, porro quos.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon_box_one fadeInLeft animated wow" data-wow-delay=".3s" >
                    <i class=" icon-cloud"></i>
                    <h5>
                        wordPress
                    </h5>
                    <p>
                        Necessitatibus iure impedit explicabo minus voluptate est officia quas! Quae fugit, porro quos.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon_box_one fadeInLeft animated wow" data-wow-delay=".1s" >
                    <i class=" icon-pencil"></i>
                    <h5>
                        UX Management
                    </h5>
                    <p>
                        Necessitatibus iure impedit explicabo minus voluptate est officia quas! Quae fugit, porro quos.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon_box_one fadeInLeft animated wow" data-wow-delay=".2s" >
                    <i class=" icon-cloud"></i>
                    <h5>
                        wordPress
                    </h5>
                    <p>
                        Necessitatibus iure impedit explicabo minus voluptate est officia quas! Quae fugit, porro quos.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon_box_one fadeInLeft animated wow" data-wow-delay=".3s" >
                    <i class=" icon-pencil"></i>
                    <h5>
                        UX Management
                    </h5>
                    <p>
                        Necessitatibus iure impedit explicabo minus voluptate est officia quas! Quae fugit, porro quos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--skills section end -->

<!--Testimonial section -->
<section class="panel_white mb50"  >
    <div class="container ">
        <div class="sectio_title_three fadeInDown animated wow" data-wow-delay=".1s" >
            <h4>References</h4>
            <div></div>
            <p>I am intersted in Open Source contributions.</p>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="testimonial_carousel owl-carousel owl-theme">
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
        <div class="item">
                        <div class="testimonial_box_two text-center ">
                            <img src="assets/img/team/man.png" class="img-rounded" alt="testimonials-user1">
                            <p><i class="fa fa-quote-left"></i>'.$row["body"].'<i class="fa fa-quote-right"></i></p>
                            <h5>'.$row["person"].'</h5>
                            <h6>'.$row["position"].'</h6>
                        </div>
                    </div>
        ';

    }
} else {
    echo "0 results";
}

?>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!--section customers -->
<section class="pt50 pb90 bg-gray">
    <div class="container">
        <div class="sectio_title_three fadeInDown animated wow" data-wow-delay=".1s" >
            <h4> Organisations I contribute to</h4>
            <div></div>
            <p> Some of the organizations I've worked for </p>
        </div>
        <div class="brand_carousel owl-carousel">
            <?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM organisations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="brand_item text-center">
                <img src="assets/img/organisations/'.$row["org_logo"].'" alt="brand">
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
<!--section customers end -->

<!--contact us -->
<section class="pt90 pb90 bg-light" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="sectio_title_three fadeInDown animated wow" data-wow-delay=".1s" >
                    <h4>Hire Me</h4>
                    <div></div>
                    <p>Want to hire me for your project?</p>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="contactus_one">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control"  placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control"  placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control"  placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea cols="4" class="form-control" placeholder="Your Message"></textarea>
                            </div>
                            <button  class="btn w100 btn_main_color btn-medium btn_center">hire me</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!--contact us end -->

<!--footer -->
<footer class="pt120 pb120 footer_dark  footer_three">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class=" footer_social">
                    <ul>
                        <li>
                            <a href="<?php echo $facebookLink; ?>"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $githubLink; ?>"><i class="fa fa-github"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $linkedinLink; ?>"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12">
                <div class=" text-center copy_right">
                    © 2017 Anmol Srivastava. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!-- jquery -->
<script src="assets/js/jquery.js"></script>
<script src="assets/plugins.js"></script>

<!-- Custom js -->
<script src="assets/js/app.js"></script>
</body>
</html>
