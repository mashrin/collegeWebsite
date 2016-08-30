<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "aureole2016");
define("DB_NAME", "fest");

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>
<?php
    if (isset($_POST['submit'])) {
        $fname = mysqli_real_escape_string($conn, htmlspecialchars($_POST['fname']));
        $lname = mysqli_real_escape_string($conn, htmlspecialchars($_POST['lname']));
        $gender = mysqli_real_escape_string($conn, htmlspecialchars($_POST['gender']));
        $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
        $mobno = mysqli_real_escape_string($conn, htmlspecialchars($_POST['mobno']));
        $cname = mysqli_real_escape_string($conn, htmlspecialchars($_POST['cname']));
        $yos = mysqli_real_escape_string($conn, htmlspecialchars($_POST['yos']));
        $ca1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['ca1']));
        $ca2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['ca2']));
        $country = mysqli_real_escape_string($conn, htmlspecialchars($_POST['country']));
        $state = mysqli_real_escape_string($conn, htmlspecialchars($_POST['state']));
        $city = mysqli_real_escape_string($conn, htmlspecialchars($_POST['city']));
        $event = mysqli_real_escape_string($conn, htmlspecialchars($_POST['event']));
        $part = mysqli_real_escape_string($conn, htmlspecialchars($_POST['part']));
        $size = mysqli_real_escape_string($conn, htmlspecialchars($_POST['size']));
        $other = mysqli_real_escape_string($conn, htmlspecialchars($_POST['other']));
        $event2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['event2']));
        $part2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['part2']));
        $size2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['size2']));
        $other2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['other2']));
        $event3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['event3']));
        $part3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['part3']));
        $size3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['size3']));
        $other3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['other3']));
        $event4 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['event4']));
        $part4 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['part4']));
        $size4 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['size4']));
        $other4 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['other4']));
        $event5 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['event5']));
        $part5 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['part5']));
        $size5 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['size5']));
        $other5 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['other5']));
        $event6 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['event6']));
        $part6 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['part6']));
        $size6 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['size6']));
        $other6 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['other6']));
        $hosp = mysqli_real_escape_string($conn, htmlspecialchars($_POST['hosp']));
        $txt = mysqli_real_escape_string($conn, htmlspecialchars($_POST['txt']));
/*        $amt = mysqli_real_escape_string($conn, htmlspecialchars($_POST['amt']));
*/

        $query = "INSERT INTO registrations (fname, lname, gender, email, mobno, cname, yos, ca1, ca2, country, state, city, event, part, size, other, event2, part2, size2, other2, event3, part3, size3, other3, event4, part4, size4, other4, event5, part5, size5, other5, event6, part6, size6, other6, hosp, txt)";
        $query .= " VALUES ('{$fname}', '{$lname}', '{$gender}', '{$email}', '{$mobno}', '{$cname}', '{$yos}', '{$ca1}', '{$ca2}', '{$country}', '{$state}', '{$city}', '{$event}', '{$part}', '{$size}', '{$other}', '{$event2}', '{$part2}', '{$size2}', '{$other2}', '{$event3}', '{$part3}', '{$size3}', '{$other3}', '{$event4}', '{$part4}', '{$size4}', '{$other4}', '{$event5}', '{$part5}', '{$size5}', '{$other5}', '{$event6}', '{$part6}', '{$size6}', '{$other6}', '{$hosp}', '{$txt}')";
        $result = mysqli_query($conn, $query);
    }
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AUREOLE Techno Cultural fest 2016 : Registration</title>
    <!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link href="css/jquery.selectbox.css" type="text/css" rel="stylesheet" /> -->
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->
    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
        <!-- BEGIN MENU -->
        <div class="menu_area">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- LOGO -->
                        <!-- IMG BASED LOGO  -->
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" height="100" width="250"></a>
                        <!-- TEXT BASED LOGO -->
                        <a class="navbar-brand" href="index.html"><span style="color:orange">&nbsp;&nbsp;&nbsp;AUREOLE</span> &nbsp;<span style="color:white">TECHNO </span> <span> CULTURAL <span style="color:white"> FEST</span> <span style="color:green">2016</span></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="megaevent-archive.html">Events</a></li>
                            <li><a href="events-archive.html">Mega Events</a></li>
                            <li><a href="hospitality.html">Hospitality</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li class="active"><a href="reg.php">Registration</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </nav>
        </div>
        <!-- END MENU -->
    </header>
    <!--=========== END HEADER SECTION ================-->
    <script type="text/javascript" src="countries.js"></script>
    <br></br>
</head>

<body>
    <br> </br>
    <br> </br>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="title_area">
                        <h2 class="title_two" style="color:green" ;> <b> REGISTRATIONS </b> </h2>
                        <h2 class="title_two">AUREOLE TECHNO CULTURAL FEST 2016</h2>
                        <br>
                        <h2 class="title_two">OFFLINE PAYMENT MODE</h2>
                        <h3 class="title_two">Upto 6 events can be registered at once</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="contact_form wow fadeInLeft">
                        <form class="submitphoto_form" method="post" name="reg" action="reg.php">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="First name" id="first" name="fname" required>
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Last name" name="lname" required>
                            <select  class="wp-form-control wpcf7-email" id="gender" tabindex="1" name="gender" required>
                                <option value="">Gender</option>
                                <option value="female"><a href="#">Female </a></option>
                                <option value="male"><a href="#">Male</a></option>
                                <option value="other"><a href="#">Others</a></option>
                            </select>
                            <input type="email" class="wp-form-control wpcf7-email" placeholder="Email address" name="email" required>
                            <input type="text" maxlength="10" class="wp-form-control wpcf7-text" value="" onkeypress="return isNumber(event)" placeholder="Mobile number" name="mobno" required>
                            <br>
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="College name" name="cname" required>
                            <select class="wp-form-control wpcf7-email" id="yearofstudy" tabindex="1" name="yos" required>
                                <option value="">Year of Study</option>
                                <option value="First year"><a href="#">First Year </a></option>
                                <option value="Second year"><a href="#">Second Year</a></option>
                                <option value="Third year"><a href="#">Third Year</a></option>
                                <option value="Fourth Year"><a href="#">Fourth Year</a></option>
                                <option value="Fifth Year"><a href="#">Fifth Year</a></option>
                            </select>
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Current Address line 1" name="ca1" required>
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Current Address line 2   (Optional)" name="ca2">
                            <br>
                            <select class="countries" id="countryId" name="country" required>
                                <option value="">Select Country</option>
                            </select>
                            <select class="states" id="stateId" name="state" required>
                                <option value="">Select State</option>
                            </select>
                            <br>
                            <br>
                            <select class="cities" id="cityId" name="city" required>
                                <option value="">Select City</option>
                            </select>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                            <script src="http://lab.iamrohit.in/js/location.js"></script>
                            <br>
                            <br>
                            <select class="wp-form-control wpcf7-email" id="events" tabindex="1" name="event" required>
                                <option value="" disabled selected>Event Registration</option>
                                <option value="Youth Parliament"><a href="#">Youth Parliament</a></option>
                                <option value="Alumni Meet"><a href="#">Alumni Meet</a></option>
                                <option value="Sixth Gear"><a href="#">Sixth Gear</a></option>
                                <option value="E-cell"><a href="#">E Cell</a></option>
                                <option value="Guidance Session"><a href="#">Guidance Session</a></option>
                                <option value="Talks"><a href="#">Talks</a></option>
                                <option value="Roadies"><a href="#">Roadies Jec O</a></option>
                                <option value="LAN CS"><a href="#">LAN Gaming- Counter Strike CZ</a></option>
                                <option value="LAN NFS"><a href="#">LAN Gaming- NFS Most Wanted</a></option>
                                <option value="Programming Quiz"><a href="#">Programming Quiz</a></option>
                                <option value="Blank Coding"><a href="#">Blank Coding</a></option>
                                <option value="Debugging"><a href="#">Debugging</a></option>
                                <option value="Massive Online Open Course"><a href="#">Massive Online Open Course</a></option>
                                <option value="Costume Designing"><a href="#">Costume Designing</a></option>
                                <option value="Tees Painting"><a href="#">Tees Painting</a></option>
                                <option value="Rangoli"><a href="#">Rangoli</a></option>
                                <option value="Mehandi"><a href="#">Mehandi</a></option>
                                <option value="Best out of waste"><a href="#">Best out of waste</a></option>
                                <option value="Face Painting"><a href="#">Face Painting</a></option>
                                <option value="Glass Painting"><a href="#">Glass Painting</a></option>
                                <option value="Clay Modelling"><a href="#">Clay Modelling</a></option>
                                <option value="Painting"><a href="#">Painting</a></option>
                                <option value="Tatoo"><a href="#">Tatoo</a></option>
                                <option value="Technical Rangoli"><a href="#">Technical Rangoli</a></option>
                                <option value="Photo Gallery"><a href="#">Photo Gallery</a></option>
                                <option value="Dubsmash"><a href="#">Dubsmash</a></option>
                                <option value="Ad Mad"><a href="#">Ad Mad</a></option>
                                <option value="One act"><a href="#">One act</a></option>
                                <option value="Mono act"><a href="#">Mono act</a></option>
                                <option value="Nukkad"><a href="#">Nukkad</a></option>
                                <option value="Mime act"><a href="#">Mime act</a></option>
                                <option value="Seconds to fame"><a href="#">Seconds to fame</a></option>
                                <option value="Solo Dance"><a href="#">Solo Dance</a></option>
                                <option value="Street Dance"><a href="#">Street Dance</a></option>
                                <option value="Duet Dance"><a href="#">Duet Dance</a></option>
                                <option value="Group Dance"><a href="#">Group Dance</a></option>
                                <option value="Flash Mob"><a href="#">Flash Mob</a></option>
                                <option value="Room DJ"><a href="#">Room DJ</a></option>
                                <option value="Dance Battle"><a href="#">Dance Battle</a></option>
                                <option value="Singing (Solo)"><a href="#">Singing (Solo)</a></option>
                                <option value="Singing (Duet)"><a href="#">Singing (Duet)</a></option>
                                <option value="Instrument"><a href="#">Instrument</a></option>
                                <option value="War of Bands"><a href="#">War of Bands</a></option>
                                <option value="Western Singing"><a href="#">Western Singing</a></option>
                                <option value="Rapping"><a href="#">Rapping</a></option>
                                <option value="Beat Boxing"><a href="#">Beat Boxing</a></option>
                                <option value="Poetry(English)"><a href="#">Poetry(English)</a></option>
                                <option value="Poetry(Hindi)"><a href="#">Poetry(Hindi)</a></option>
                                <option value="Group Discussion"><a href="#">Group Discussion</a></option>
                                <option value="Slogan Writing"><a href="#">Slogan Writing</a></option>
                                <option value="Elocution"><a href="#">Elocution</a></option>
                                <option value="Speech Hindi"><a href="#">Speech Hindi</a></option>
                                <option value="Speech English"><a href="#">Speech English</a></option>
                                <option value="Spell Bee"><a href="#">Spell Bee</a></option>
                                <option value="Quiz"><a href="#">Quiz</a></option>
                                <option value="Creative Writing"><a href="#">Creative Writing</a></option>
                                <option value="Case Study"><a href="#">Case Study</a></option>
                                <option value="Just a minute"><a href="#">Just a minute</a></option>
                                <option value="B- Plan"><a href="#">B- Plan</a></option>
                                <option value="Extempore"><a href="#">Extempore</a></option>
                                <option value="Tech Quiz"><a href="#">Tech Quiz</a></option>
                                <option value="Robo War"><a href="#">Robo War</a></option>
                                <option value="Robo Race"><a href="#">Robo Race</a></option>
                                <option value="Line Follower"><a href="#">Line Follower</a></option>
                                <option value="HYDROBRUKE"><a href="#">HYDROBRUKE</a></option>
                                <option value="TRUSSMANIA"><a href="#">TRUSSMANIA</a></option>
                                <option value="CATIAMANIA"><a href="#">CATIAMANIA</a></option>
                                <option value="CANTILEVER"><a href="#">CANTILEVER</a></option>
                                <option value="Debugging"><a href="#">Debugging</a></option>
                                <option value="Circuit Designing"><a href="#">Circuit Designing</a></option>
                                <option value="Pirates of C"><a href="#">Pirates of C</a></option>
                                <option value="Loose Circuiting"><a href="#">Loose Circuiting</a></option>
                                <option value="Tug of War"><a href="#">Tug of War</a></option>
                                <option value="Photography"><a href="#">Photography</a></option>
                                <option value="Cooking"><a href="#">Cooking</a></option>
                                <option value="Rubic Cube"><a href="#">Rubic Cube</a></option>
                                <option value="Marathon"><a href="#">Marathon</a></option>
                                <option value="Mesmerize"><a href="#">Mesmerize</a></option>
                                <option value="Off the Cuff"><a href="#">Off the Cuff</a></option>
                                <option value="Slow Cycle Racing"><a href="#">Slow Cycle Racing</a></option>
                            </select>
                             <select class="wp-form-control wpcf7-email" id="part" name="part" onChange="calculatePrice()" tabindex="1" required>
                                <option value="0" disabled selected>Individual or Team</option>
                                <option value="30"><a href="#">Individual- Rs 30 </a></option>
                                <option value="100"><a href="#">Team- Rs 100</a></option>
                            </select>  

                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Team Size (Only if participating as Team)" name="size">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Other Team Members (Only if participating as Team)" name="other">


                            <select class="wp-form-control wpcf7-email" id="events2" tabindex="1" name="event2">
                                <option value="">Event Registration 2</option>
                                <option value="Youth Parliament"><a href="#">Youth Parliament</a></option>
                                <option value="Alumni Meet"><a href="#">Alumni Meet</a></option>
                                <option value="Sixth Gear"><a href="#">Sixth Gear</a></option>
                                <option value="E-cell"><a href="#">E Cell</a></option>
                                <option value="Guidance Session"><a href="#">Guidance Session</a></option>
                                <option value="Talks"><a href="#">Talks</a></option>
                                <option value="Roadies"><a href="#">Roadies Jec O</a></option>
                                <option value="LAN CS"><a href="#">LAN Gaming- Counter Strike CZ</a></option>
                                <option value="LAN NFS"><a href="#">LAN Gaming- NFS Most Wanted</a></option>
                                <option value="Programming Quiz"><a href="#">Programming Quiz</a></option>
                                <option value="Blank Coding"><a href="#">Blank Coding</a></option>
                                <option value="Debugging"><a href="#">Debugging</a></option>
                                <option value="Massive Online Open Course"><a href="#">Massive Online Open Course</a></option>
                                <option value="Costume Designing"><a href="#">Costume Designing</a></option>
                                <option value="Tees Painting"><a href="#">Tees Painting</a></option>
                                <option value="Rangoli"><a href="#">Rangoli</a></option>
                                <option value="Mehandi"><a href="#">Mehandi</a></option>
                                <option value="Best out of waste"><a href="#">Best out of waste</a></option>
                                <option value="Face Painting"><a href="#">Face Painting</a></option>
                                <option value="Glass Painting"><a href="#">Glass Painting</a></option>
                                <option value="Clay Modelling"><a href="#">Clay Modelling</a></option>
                                <option value="Painting"><a href="#">Painting</a></option>
                                <option value="Tatoo"><a href="#">Tatoo</a></option>
                                <option value="Technical Rangoli"><a href="#">Technical Rangoli</a></option>
                                <option value="Photo Gallery"><a href="#">Photo Gallery</a></option>
                                <option value="Dubsmash"><a href="#">Dubsmash</a></option>
                                <option value="Ad Mad"><a href="#">Ad Mad</a></option>
                                <option value="One act"><a href="#">One act</a></option>
                                <option value="Mono act"><a href="#">Mono act</a></option>
                                <option value="Nukkad"><a href="#">Nukkad</a></option>
                                <option value="Mime act"><a href="#">Mime act</a></option>
                                <option value="Seconds to fame"><a href="#">Seconds to fame</a></option>
                                <option value="Solo Dance"><a href="#">Solo Dance</a></option>
                                <option value="Street Dance"><a href="#">Street Dance</a></option>
                                <option value="Duet Dance"><a href="#">Duet Dance</a></option>
                                <option value="Group Dance"><a href="#">Group Dance</a></option>
                                <option value="Flash Mob"><a href="#">Flash Mob</a></option>
                                <option value="Room DJ"><a href="#">Room DJ</a></option>
                                <option value="Dance Battle"><a href="#">Dance Battle</a></option>
                                <option value="Singing (Solo)"><a href="#">Singing (Solo)</a></option>
                                <option value="Singing (Duet)"><a href="#">Singing (Duet)</a></option>
                                <option value="Instrument"><a href="#">Instrument</a></option>
                                <option value="War of Bands"><a href="#">War of Bands</a></option>
                                <option value="Western Singing"><a href="#">Western Singing</a></option>
                                <option value="Rapping"><a href="#">Rapping</a></option>
                                <option value="Beat Boxing"><a href="#">Beat Boxing</a></option>
                                <option value="Poetry(English)"><a href="#">Poetry(English)</a></option>
                                <option value="Poetry(Hindi)"><a href="#">Poetry(Hindi)</a></option>
                                <option value="Group Discussion"><a href="#">Group Discussion</a></option>
                                <option value="Slogan Writing"><a href="#">Slogan Writing</a></option>
                                <option value="Elocution"><a href="#">Elocution</a></option>
                                <option value="Speech Hindi"><a href="#">Speech Hindi</a></option>
                                <option value="Speech English"><a href="#">Speech English</a></option>
                                <option value="Spell Bee"><a href="#">Spell Bee</a></option>
                                <option value="Quiz"><a href="#">Quiz</a></option>
                                <option value="Creative Writing"><a href="#">Creative Writing</a></option>
                                <option value="Case Study"><a href="#">Case Study</a></option>
                                <option value="Just a minute"><a href="#">Just a minute</a></option>
                                <option value="B- Plan"><a href="#">B- Plan</a></option>
                                <option value="Extempore"><a href="#">Extempore</a></option>
                                <option value="Tech Quiz"><a href="#">Tech Quiz</a></option>
                                <option value="Robo War"><a href="#">Robo War</a></option>
                                <option value="Robo Race"><a href="#">Robo Race</a></option>
                                <option value="Line Follower"><a href="#">Line Follower</a></option>
                                <option value="HYDROBRUKE"><a href="#">HYDROBRUKE</a></option>
                                <option value="TRUSSMANIA"><a href="#">TRUSSMANIA</a></option>
                                <option value="CATIAMANIA"><a href="#">CATIAMANIA</a></option>
                                <option value="CANTILEVER"><a href="#">CANTILEVER</a></option>
                                <option value="Debugging"><a href="#">Debugging</a></option>
                                <option value="Circuit Designing"><a href="#">Circuit Designing</a></option>
                                <option value="Pirates of C"><a href="#">Pirates of C</a></option>
                                <option value="Loose Circuiting"><a href="#">Loose Circuiting</a></option>
                                <option value="Tug of War"><a href="#">Tug of War</a></option>
                                <option value="Photography"><a href="#">Photography</a></option>
                                <option value="Cooking"><a href="#">Cooking</a></option>
                                <option value="Rubic Cube"><a href="#">Rubic Cube</a></option>
                                <option value="Marathon"><a href="#">Marathon</a></option>
                                <option value="Mesmerize"><a href="#">Mesmerize</a></option>
                                <option value="Off the Cuff"><a href="#">Off the Cuff</a></option>
                                <option value="Slow Cycle Racing"><a href="#">Slow Cycle Racing</a></option>
                            </select>
                             <select class="wp-form-control wpcf7-email" id="part2" name="part2" onChange="calculatePrice()" tabindex="1">
                                <option value="0" disabled selected>Individual or Team</option>
                                <option value="30"><a href="#">Individual- Rs 30 </a></option>
                                <option value="100"><a href="#">Team- Rs 100</a></option>
                            </select>  


                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Team Size (Only if participating as Team)" name="size2">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Other Team Members (Only if participating as Team)" name="other2">

                            <select class="wp-form-control wpcf7-email" id="events3" tabindex="1" name="event3">
                                <option value="">Event Registration 3</option>
                                <option value="Youth Parliament"><a href="#">Youth Parliament</a></option>
                                <option value="Alumni Meet"><a href="#">Alumni Meet</a></option>
                                <option value="Sixth Gear"><a href="#">Sixth Gear</a></option>
                                <option value="E-cell"><a href="#">E Cell</a></option>
                                <option value="Guidance Session"><a href="#">Guidance Session</a></option>
                                <option value="Talks"><a href="#">Talks</a></option>
                                <option value="Roadies"><a href="#">Roadies Jec O</a></option>
                                <option value="LAN CS"><a href="#">LAN Gaming- Counter Strike CZ</a></option>
                                <option value="LAN NFS"><a href="#">LAN Gaming- NFS Most Wanted</a></option>
                                <option value="Programming Quiz"><a href="#">Programming Quiz</a></option>
                                <option value="Blank Coding"><a href="#">Blank Coding</a></option>
                                <option value="Debugging"><a href="#">Debugging</a></option>
                                <option value="Massive Online Open Course"><a href="#">Massive Online Open Course</a></option>
                                <option value="Costume Designing"><a href="#">Costume Designing</a></option>
                                <option value="Tees Painting"><a href="#">Tees Painting</a></option>
                                <option value="Rangoli"><a href="#">Rangoli</a></option>
                                <option value="Mehandi"><a href="#">Mehandi</a></option>
                                <option value="Best out of waste"><a href="#">Best out of waste</a></option>
                                <option value="Face Painting"><a href="#">Face Painting</a></option>
                                <option value="Glass Painting"><a href="#">Glass Painting</a></option>
                                <option value="Clay Modelling"><a href="#">Clay Modelling</a></option>
                                <option value="Painting"><a href="#">Painting</a></option>
                                <option value="Tatoo"><a href="#">Tatoo</a></option>
                                <option value="Technical Rangoli"><a href="#">Technical Rangoli</a></option>
                                <option value="Photo Gallery"><a href="#">Photo Gallery</a></option>
                                <option value="Dubsmash"><a href="#">Dubsmash</a></option>
                                <option value="Ad Mad"><a href="#">Ad Mad</a></option>
                                <option value="One act"><a href="#">One act</a></option>
                                <option value="Mono act"><a href="#">Mono act</a></option>
                                <option value="Nukkad"><a href="#">Nukkad</a></option>
                                <option value="Mime act"><a href="#">Mime act</a></option>
                                <option value="Seconds to fame"><a href="#">Seconds to fame</a></option>
                                <option value="Solo Dance"><a href="#">Solo Dance</a></option>
                                <option value="Street Dance"><a href="#">Street Dance</a></option>
                                <option value="Duet Dance"><a href="#">Duet Dance</a></option>
                                <option value="Group Dance"><a href="#">Group Dance</a></option>
                                <option value="Flash Mob"><a href="#">Flash Mob</a></option>
                                <option value="Room DJ"><a href="#">Room DJ</a></option>
                                <option value="Dance Battle"><a href="#">Dance Battle</a></option>
                                <option value="Singing (Solo)"><a href="#">Singing (Solo)</a></option>
                                <option value="Singing (Duet)"><a href="#">Singing (Duet)</a></option>
                                <option value="Instrument"><a href="#">Instrument</a></option>
                                <option value="War of Bands"><a href="#">War of Bands</a></option>
                                <option value="Western Singing"><a href="#">Western Singing</a></option>
                                <option value="Rapping"><a href="#">Rapping</a></option>
                                <option value="Beat Boxing"><a href="#">Beat Boxing</a></option>
                                <option value="Poetry(English)"><a href="#">Poetry(English)</a></option>
                                <option value="Poetry(Hindi)"><a href="#">Poetry(Hindi)</a></option>
                                <option value="Group Discussion"><a href="#">Group Discussion</a></option>
                                <option value="Slogan Writing"><a href="#">Slogan Writing</a></option>
                                <option value="Elocution"><a href="#">Elocution</a></option>
                                <option value="Speech Hindi"><a href="#">Speech Hindi</a></option>
                                <option value="Speech English"><a href="#">Speech English</a></option>
                                <option value="Spell Bee"><a href="#">Spell Bee</a></option>
                                <option value="Quiz"><a href="#">Quiz</a></option>
                                <option value="Creative Writing"><a href="#">Creative Writing</a></option>
                                <option value="Case Study"><a href="#">Case Study</a></option>
                                <option value="Just a minute"><a href="#">Just a minute</a></option>
                                <option value="B- Plan"><a href="#">B- Plan</a></option>
                                <option value="Extempore"><a href="#">Extempore</a></option>
                                <option value="Tech Quiz"><a href="#">Tech Quiz</a></option>
                                <option value="Robo War"><a href="#">Robo War</a></option>
                                <option value="Robo Race"><a href="#">Robo Race</a></option>
                                <option value="Line Follower"><a href="#">Line Follower</a></option>
                                <option value="HYDROBRUKE"><a href="#">HYDROBRUKE</a></option>
                                <option value="TRUSSMANIA"><a href="#">TRUSSMANIA</a></option>
                                <option value="CATIAMANIA"><a href="#">CATIAMANIA</a></option>
                                <option value="CANTILEVER"><a href="#">CANTILEVER</a></option>
                                <option value="Debugging"><a href="#">Debugging</a></option>
                                <option value="Circuit Designing"><a href="#">Circuit Designing</a></option>
                                <option value="Pirates of C"><a href="#">Pirates of C</a></option>
                                <option value="Loose Circuiting"><a href="#">Loose Circuiting</a></option>
                                <option value="Tug of War"><a href="#">Tug of War</a></option>
                                <option value="Photography"><a href="#">Photography</a></option>
                                <option value="Cooking"><a href="#">Cooking</a></option>
                                <option value="Rubic Cube"><a href="#">Rubic Cube</a></option>
                                <option value="Marathon"><a href="#">Marathon</a></option>
                                <option value="Mesmerize"><a href="#">Mesmerize</a></option>
                                <option value="Off the Cuff"><a href="#">Off the Cuff</a></option>
                                <option value="Slow Cycle Racing"><a href="#">Slow Cycle Racing</a></option>
                            </select>
                             <select class="wp-form-control wpcf7-email" id="part3" onChange="calculatePrice()" name="part3" tabindex="1">
                                <option value="0" disabled selected>Individual or Team</option>
                                <option value="30"><a href="#">Individual- Rs 30 </a></option>
                                <option value="100"><a href="#">Team- Rs 100</a></option>
                            </select>  

                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Team Size (Only if participating as Team)" name="size3">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Other Team Members (Only if participating as Team)" name="other3">
                            <select class="wp-form-control wpcf7-email" id="events4" tabindex="1" name="event4">
                                <option value="">Event Registration 4</option>
                                <option value="Youth Parliament"><a href="#">Youth Parliament</a></option>
                                <option value="Alumni Meet"><a href="#">Alumni Meet</a></option>
                                <option value="Sixth Gear"><a href="#">Sixth Gear</a></option>
                                <option value="E-cell"><a href="#">E Cell</a></option>
                                <option value="Guidance Session"><a href="#">Guidance Session</a></option>
                                <option value="Talks"><a href="#">Talks</a></option>
                                <option value="Roadies"><a href="#">Roadies Jec O</a></option>
                                <option value="LAN CS"><a href="#">LAN Gaming- Counter Strike CZ</a></option>
                                <option value="LAN NFS"><a href="#">LAN Gaming- NFS Most Wanted</a></option>
                                <option value="Programming Quiz"><a href="#">Programming Quiz</a></option>
                                <option value="Blank Coding"><a href="#">Blank Coding</a></option>
                                <option value="Debugging"><a href="#">Debugging</a></option>
                                <option value="Massive Online Open Course"><a href="#">Massive Online Open Course</a></option>
                                <option value="Costume Designing"><a href="#">Costume Designing</a></option>
                                <option value="Tees Painting"><a href="#">Tees Painting</a></option>
                                <option value="Rangoli"><a href="#">Rangoli</a></option>
                                <option value="Mehandi"><a href="#">Mehandi</a></option>
                                <option value="Best out of waste"><a href="#">Best out of waste</a></option>
                                <option value="Face Painting"><a href="#">Face Painting</a></option>
                                <option value="Glass Painting"><a href="#">Glass Painting</a></option>
                                <option value="Clay Modelling"><a href="#">Clay Modelling</a></option>
                                <option value="Painting"><a href="#">Painting</a></option>
                                <option value="Tatoo"><a href="#">Tatoo</a></option>
                                <option value="Technical Rangoli"><a href="#">Technical Rangoli</a></option>
                                <option value="Photo Gallery"><a href="#">Photo Gallery</a></option>
                                <option value="Dubsmash"><a href="#">Dubsmash</a></option>
                                <option value="Ad Mad"><a href="#">Ad Mad</a></option>
                                <option value="One act"><a href="#">One act</a></option>
                                <option value="Mono act"><a href="#">Mono act</a></option>
                                <option value="Nukkad"><a href="#">Nukkad</a></option>
                                <option value="Mime act"><a href="#">Mime act</a></option>
                                <option value="Seconds to fame"><a href="#">Seconds to fame</a></option>
                                <option value="Solo Dance"><a href="#">Solo Dance</a></option>
                                <option value="Street Dance"><a href="#">Street Dance</a></option>
                                <option value="Duet Dance"><a href="#">Duet Dance</a></option>
                                <option value="Group Dance"><a href="#">Group Dance</a></option>
                                <option value="Flash Mob"><a href="#">Flash Mob</a></option>
                                <option value="Room DJ"><a href="#">Room DJ</a></option>
                                <option value="Dance Battle"><a href="#">Dance Battle</a></option>
                                <option value="Singing (Solo)"><a href="#">Singing (Solo)</a></option>
                                <option value="Singing (Duet)"><a href="#">Singing (Duet)</a></option>
                                <option value="Instrument"><a href="#">Instrument</a></option>
                                <option value="War of Bands"><a href="#">War of Bands</a></option>
                                <option value="Western Singing"><a href="#">Western Singing</a></option>
                                <option value="Rapping"><a href="#">Rapping</a></option>
                                <option value="Beat Boxing"><a href="#">Beat Boxing</a></option>
                                <option value="Poetry(English)"><a href="#">Poetry(English)</a></option>
                                <option value="Poetry(Hindi)"><a href="#">Poetry(Hindi)</a></option>
                                <option value="Group Discussion"><a href="#">Group Discussion</a></option>
                                <option value="Slogan Writing"><a href="#">Slogan Writing</a></option>
                                <option value="Elocution"><a href="#">Elocution</a></option>
                                <option value="Speech Hindi"><a href="#">Speech Hindi</a></option>
                                <option value="Speech English"><a href="#">Speech English</a></option>
                                <option value="Spell Bee"><a href="#">Spell Bee</a></option>
                                <option value="Quiz"><a href="#">Quiz</a></option>
                                <option value="Creative Writing"><a href="#">Creative Writing</a></option>
                                <option value="Case Study"><a href="#">Case Study</a></option>
                                <option value="Just a minute"><a href="#">Just a minute</a></option>
                                <option value="B- Plan"><a href="#">B- Plan</a></option>
                                <option value="Extempore"><a href="#">Extempore</a></option>
                                <option value="Tech Quiz"><a href="#">Tech Quiz</a></option>
                                <option value="Robo War"><a href="#">Robo War</a></option>
                                <option value="Robo Race"><a href="#">Robo Race</a></option>
                                <option value="Line Follower"><a href="#">Line Follower</a></option>
                                <option value="HYDROBRUKE"><a href="#">HYDROBRUKE</a></option>
                                <option value="TRUSSMANIA"><a href="#">TRUSSMANIA</a></option>
                                <option value="CATIAMANIA"><a href="#">CATIAMANIA</a></option>
                                <option value="CANTILEVER"><a href="#">CANTILEVER</a></option>
                                <option value="Debugging"><a href="#">Debugging</a></option>
                                <option value="Circuit Designing"><a href="#">Circuit Designing</a></option>
                                <option value="Pirates of C"><a href="#">Pirates of C</a></option>
                                <option value="Loose Circuiting"><a href="#">Loose Circuiting</a></option>
                                <option value="Tug of War"><a href="#">Tug of War</a></option>
                                <option value="Photography"><a href="#">Photography</a></option>
                                <option value="Cooking"><a href="#">Cooking</a></option>
                                <option value="Rubic Cube"><a href="#">Rubic Cube</a></option>
                                <option value="Marathon"><a href="#">Marathon</a></option>
                                <option value="Mesmerize"><a href="#">Mesmerize</a></option>
                                <option value="Off the Cuff"><a href="#">Off the Cuff</a></option>
                                <option value="Slow Cycle Racing"><a href="#">Slow Cycle Racing</a></option>
                            </select>
                             <select class="wp-form-control wpcf7-email" id="part4" onChange="calculatePrice()" name="part4" tabindex="1">
                                <option value="0" disabled selected>Individual or Team</option>
                                <option value="30"><a href="#">Individual- Rs 30 </a></option>
                                <option value="100"><a href="#">Team- Rs 100</a></option>
                            </select>  
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Team Size (Only if participating as Team)" name="size4">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Other Team Members (Only if participating as Team)" name="other4">



                            <select class="wp-form-control wpcf7-email" id="events5" tabindex="1" name="event5">
                                <option value="">Event Registration 5</option>
                                <option value="Youth Parliament"><a href="#">Youth Parliament</a></option>
                                <option value="Alumni Meet"><a href="#">Alumni Meet</a></option>
                                <option value="Sixth Gear"><a href="#">Sixth Gear</a></option>
                                <option value="E-cell"><a href="#">E Cell</a></option>
                                <option value="Guidance Session"><a href="#">Guidance Session</a></option>
                                <option value="Talks"><a href="#">Talks</a></option>
                                <option value="Roadies"><a href="#">Roadies Jec O</a></option>
                                <option value="LAN CS"><a href="#">LAN Gaming- Counter Strike CZ</a></option>
                                <option value="LAN NFS"><a href="#">LAN Gaming- NFS Most Wanted</a></option>
                                <option value="Programming Quiz"><a href="#">Programming Quiz</a></option>
                                <option value="Blank Coding"><a href="#">Blank Coding</a></option>
                                <option value="Debugging"><a href="#">Debugging</a></option>
                                <option value="Massive Online Open Course"><a href="#">Massive Online Open Course</a></option>
                                <option value="Costume Designing"><a href="#">Costume Designing</a></option>
                                <option value="Tees Painting"><a href="#">Tees Painting</a></option>
                                <option value="Rangoli"><a href="#">Rangoli</a></option>
                                <option value="Mehandi"><a href="#">Mehandi</a></option>
                                <option value="Best out of waste"><a href="#">Best out of waste</a></option>
                                <option value="Face Painting"><a href="#">Face Painting</a></option>
                                <option value="Glass Painting"><a href="#">Glass Painting</a></option>
                                <option value="Clay Modelling"><a href="#">Clay Modelling</a></option>
                                <option value="Painting"><a href="#">Painting</a></option>
                                <option value="Tatoo"><a href="#">Tatoo</a></option>
                                <option value="Technical Rangoli"><a href="#">Technical Rangoli</a></option>
                                <option value="Photo Gallery"><a href="#">Photo Gallery</a></option>
                                <option value="Dubsmash"><a href="#">Dubsmash</a></option>
                                <option value="Ad Mad"><a href="#">Ad Mad</a></option>
                                <option value="One act"><a href="#">One act</a></option>
                                <option value="Mono act"><a href="#">Mono act</a></option>
                                <option value="Nukkad"><a href="#">Nukkad</a></option>
                                <option value="Mime act"><a href="#">Mime act</a></option>
                                <option value="Seconds to fame"><a href="#">Seconds to fame</a></option>
                                <option value="Solo Dance"><a href="#">Solo Dance</a></option>
                                <option value="Street Dance"><a href="#">Street Dance</a></option>
                                <option value="Duet Dance"><a href="#">Duet Dance</a></option>
                                <option value="Group Dance"><a href="#">Group Dance</a></option>
                                <option value="Flash Mob"><a href="#">Flash Mob</a></option>
                                <option value="Room DJ"><a href="#">Room DJ</a></option>
                                <option value="Dance Battle"><a href="#">Dance Battle</a></option>
                                <option value="Singing (Solo)"><a href="#">Singing (Solo)</a></option>
                                <option value="Singing (Duet)"><a href="#">Singing (Duet)</a></option>
                                <option value="Instrument"><a href="#">Instrument</a></option>
                                <option value="War of Bands"><a href="#">War of Bands</a></option>
                                <option value="Western Singing"><a href="#">Western Singing</a></option>
                                <option value="Rapping"><a href="#">Rapping</a></option>
                                <option value="Beat Boxing"><a href="#">Beat Boxing</a></option>
                                <option value="Poetry(English)"><a href="#">Poetry(English)</a></option>
                                <option value="Poetry(Hindi)"><a href="#">Poetry(Hindi)</a></option>
                                <option value="Group Discussion"><a href="#">Group Discussion</a></option>
                                <option value="Slogan Writing"><a href="#">Slogan Writing</a></option>
                                <option value="Elocution"><a href="#">Elocution</a></option>
                                <option value="Speech Hindi"><a href="#">Speech Hindi</a></option>
                                <option value="Speech English"><a href="#">Speech English</a></option>
                                <option value="Spell Bee"><a href="#">Spell Bee</a></option>
                                <option value="Quiz"><a href="#">Quiz</a></option>
                                <option value="Creative Writing"><a href="#">Creative Writing</a></option>
                                <option value="Case Study"><a href="#">Case Study</a></option>
                                <option value="Just a minute"><a href="#">Just a minute</a></option>
                                <option value="B- Plan"><a href="#">B- Plan</a></option>
                                <option value="Extempore"><a href="#">Extempore</a></option>
                                <option value="Tech Quiz"><a href="#">Tech Quiz</a></option>
                                <option value="Robo War"><a href="#">Robo War</a></option>
                                <option value="Robo Race"><a href="#">Robo Race</a></option>
                                <option value="Line Follower"><a href="#">Line Follower</a></option>
                                <option value="HYDROBRUKE"><a href="#">HYDROBRUKE</a></option>
                                <option value="TRUSSMANIA"><a href="#">TRUSSMANIA</a></option>
                                <option value="CATIAMANIA"><a href="#">CATIAMANIA</a></option>
                                <option value="CANTILEVER"><a href="#">CANTILEVER</a></option>
                                <option value="Debugging"><a href="#">Debugging</a></option>
                                <option value="Circuit Designing"><a href="#">Circuit Designing</a></option>
                                <option value="Pirates of C"><a href="#">Pirates of C</a></option>
                                <option value="Loose Circuiting"><a href="#">Loose Circuiting</a></option>
                                <option value="Tug of War"><a href="#">Tug of War</a></option>
                                <option value="Photography"><a href="#">Photography</a></option>
                                <option value="Cooking"><a href="#">Cooking</a></option>
                                <option value="Rubic Cube"><a href="#">Rubic Cube</a></option>
                                <option value="Marathon"><a href="#">Marathon</a></option>
                                <option value="Mesmerize"><a href="#">Mesmerize</a></option>
                                <option value="Off the Cuff"><a href="#">Off the Cuff</a></option>
                                <option value="Slow Cycle Racing"><a href="#">Slow Cycle Racing</a></option>
                            </select>
                             <select class="wp-form-control wpcf7-email" id="part6" name="part5" onChange="calculatePrice()" tabindex="1">
                                <option value="0" disabled selected>Individual or Team</option>
                                <option value="30"><a href="#">Individual- Rs 30 </a></option>
                                <option value="100"><a href="#">Team- Rs 100</a></option>
                            </select>  
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Team Size (Only if participating as Team)" name="size5">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Other Team Members (Only if participating as Team)" name="other5">
                            <select class="wp-form-control wpcf7-email" id="events6" tabindex="1" name="event6" required>
                                <option value="">Event Registration 6</option>
                                <option value="Youth Parliament"><a href="#">Youth Parliament</a></option>
                                <option value="Alumni Meet"><a href="#">Alumni Meet</a></option>
                                <option value="Sixth Gear"><a href="#">Sixth Gear</a></option>
                                <option value="E-cell"><a href="#">E Cell</a></option>
                                <option value="Guidance Session"><a href="#">Guidance Session</a></option>
                                <option value="Talks"><a href="#">Talks</a></option>
                                <option value="Roadies"><a href="#">Roadies Jec O</a></option>
                                <option value="LAN CS"><a href="#">LAN Gaming- Counter Strike CZ</a></option>
                                <option value="LAN NFS"><a href="#">LAN Gaming- NFS Most Wanted</a></option>
                                <option value="Programming Quiz"><a href="#">Programming Quiz</a></option>
                                <option value="Blank Coding"><a href="#">Blank Coding</a></option>
                                <option value="Debugging"><a href="#">Debugging</a></option>
                                <option value="Massive Online Open Course"><a href="#">Massive Online Open Course</a></option>
                                <option value="Costume Designing"><a href="#">Costume Designing</a></option>
                                <option value="Tees Painting"><a href="#">Tees Painting</a></option>
                                <option value="Rangoli"><a href="#">Rangoli</a></option>
                                <option value="Mehandi"><a href="#">Mehandi</a></option>
                                <option value="Best out of waste"><a href="#">Best out of waste</a></option>
                                <option value="Face Painting"><a href="#">Face Painting</a></option>
                                <option value="Glass Painting"><a href="#">Glass Painting</a></option>
                                <option value="Clay Modelling"><a href="#">Clay Modelling</a></option>
                                <option value="Painting"><a href="#">Painting</a></option>
                                <option value="Tatoo"><a href="#">Tatoo</a></option>
                                <option value="Technical Rangoli"><a href="#">Technical Rangoli</a></option>
                                <option value="Photo Gallery"><a href="#">Photo Gallery</a></option>
                                <option value="Dubsmash"><a href="#">Dubsmash</a></option>
                                <option value="Ad Mad"><a href="#">Ad Mad</a></option>
                                <option value="One act"><a href="#">One act</a></option>
                                <option value="Mono act"><a href="#">Mono act</a></option>
                                <option value="Nukkad"><a href="#">Nukkad</a></option>
                                <option value="Mime act"><a href="#">Mime act</a></option>
                                <option value="Seconds to fame"><a href="#">Seconds to fame</a></option>
                                <option value="Solo Dance"><a href="#">Solo Dance</a></option>
                                <option value="Street Dance"><a href="#">Street Dance</a></option>
                                <option value="Duet Dance"><a href="#">Duet Dance</a></option>
                                <option value="Group Dance"><a href="#">Group Dance</a></option>
                                <option value="Flash Mob"><a href="#">Flash Mob</a></option>
                                <option value="Room DJ"><a href="#">Room DJ</a></option>
                                <option value="Dance Battle"><a href="#">Dance Battle</a></option>
                                <option value="Singing (Solo)"><a href="#">Singing (Solo)</a></option>
                                <option value="Singing (Duet)"><a href="#">Singing (Duet)</a></option>
                                <option value="Instrument"><a href="#">Instrument</a></option>
                                <option value="War of Bands"><a href="#">War of Bands</a></option>
                                <option value="Western Singing"><a href="#">Western Singing</a></option>
                                <option value="Rapping"><a href="#">Rapping</a></option>
                                <option value="Beat Boxing"><a href="#">Beat Boxing</a></option>
                                <option value="Poetry(English)"><a href="#">Poetry(English)</a></option>
                                <option value="Poetry(Hindi)"><a href="#">Poetry(Hindi)</a></option>
                                <option value="Group Discussion"><a href="#">Group Discussion</a></option>
                                <option value="Slogan Writing"><a href="#">Slogan Writing</a></option>
                                <option value="Elocution"><a href="#">Elocution</a></option>
                                <option value="Speech Hindi"><a href="#">Speech Hindi</a></option>
                                <option value="Speech English"><a href="#">Speech English</a></option>
                                <option value="Spell Bee"><a href="#">Spell Bee</a></option>
                                <option value="Quiz"><a href="#">Quiz</a></option>
                                <option value="Creative Writing"><a href="#">Creative Writing</a></option>
                                <option value="Case Study"><a href="#">Case Study</a></option>
                                <option value="Just a minute"><a href="#">Just a minute</a></option>
                                <option value="B- Plan"><a href="#">B- Plan</a></option>
                                <option value="Extempore"><a href="#">Extempore</a></option>
                                <option value="Tech Quiz"><a href="#">Tech Quiz</a></option>
                                <option value="Robo War"><a href="#">Robo War</a></option>
                                <option value="Robo Race"><a href="#">Robo Race</a></option>
                                <option value="Line Follower"><a href="#">Line Follower</a></option>
                                <option value="HYDROBRUKE"><a href="#">HYDROBRUKE</a></option>
                                <option value="TRUSSMANIA"><a href="#">TRUSSMANIA</a></option>
                                <option value="CATIAMANIA"><a href="#">CATIAMANIA</a></option>
                                <option value="CANTILEVER"><a href="#">CANTILEVER</a></option>
                                <option value="Debugging"><a href="#">Debugging</a></option>
                                <option value="Circuit Designing"><a href="#">Circuit Designing</a></option>
                                <option value="Pirates of C"><a href="#">Pirates of C</a></option>
                                <option value="Loose Circuiting"><a href="#">Loose Circuiting</a></option>
                                <option value="Tug of War"><a href="#">Tug of War</a></option>
                                <option value="Photography"><a href="#">Photography</a></option>
                                <option value="Cooking"><a href="#">Cooking</a></option>
                                <option value="Rubic Cube"><a href="#">Rubic Cube</a></option>
                                <option value="Marathon"><a href="#">Marathon</a></option>
                                <option value="Mesmerize"><a href="#">Mesmerize</a></option>
                                <option value="Off the Cuff"><a href="#">Off the Cuff</a></option>
                                <option value="Slow Cycle Racing"><a href="#">Slow Cycle Racing</a></option>
                            </select>
                            <select class="wp-form-control wpcf7-email" onChange="calculatePrice()" id="part6" name="part6" tabindex="1">
                                <option value="0" disabled selected>Individual or Team</option>
                                <option value="30"><a href="#">Individual- Rs 30 </a></option>
                                <option value="100"><a href="#">Team- Rs 100</a></option>
                            </select>           

                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Team Size (Only if participating as Team)" name="size6">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Other Team Members (Only if participating as Team)" name="other6">


                            <select class="wp-form-control wpcf7-email" id="hospitality" name="hosp" tabindex="1" required>
                                <option value="" disabled selected>Hospitality Required</option>
                                <option value="Yes"><a href="#">Yes </a></option>
                                <option value="No"><a href="#">No</a></option>
                            </select>
                            <textarea class="wp-form-control wpcf7-textarea" cols="10" rows="10" placeholder="Any special assistance required (Optional)" name="txt"></textarea>
                            <br> </br>
                            <input type="submit" value="Submit" name="submit" class="wpcf7-submit">
                        </form>
<!--                         The total amount to be paid:<INPUT type="text" name="amt" id="amt" Size=8 readonly> 
                     -->                    </div>
                </div>


                <script type="text/javascript">
                    function calculatePrice(reg){
                      //Get selected data  
                        var elt = document.getElementById("part");
                        var part = elt.options[elt.selectedIndex].value;
    
                        var elt = document.getElementById("part2");
                        var part2 = elt.options[elt.selectedIndex].value;
    
                        var elt = document.getElementById("part3");
                        var part3 = elt.options[elt.selectedIndex].value;

                        var elt = document.getElementById("part4");
                        var part4 = elt.options[elt.selectedIndex].value;
    
                        var elt = document.getElementById("part5");
                        var part5 = elt.options[elt.selectedIndex].value;
    
                        var elt = document.getElementById("part6");
                        var part6 = elt.options[elt.selectedIndex].value;
    
                        //convert data to integers
                        part = parseInt(part);
                        part2 = parseInt(part2);
                        part3 = parseInt(part3);
                        part4 = parseInt(part4);
                        part5 = parseInt(part5);
                        part6 = parseInt(part6);
    
                        //calculate total value  
                        var total = part+part2+part3+part4+part5+part6; 
                        console.log(total)
                        //print value to  PicExtPrice 
                        document.getElementById("amt").value=total;
                    }
                </script>
                
                <script type="text/javascript" src="js/jquery-1.7.2.min.js">
                </script>
                <script type="text/javascript" src="js/jquery.selectbox-0.2.js"></script>
                <script type="text/javascript">
                $(function() {
                    $("#country_id").selectbox();
                });
                </script>
                <script type="text/javascript">
                function isNumber(evt) {
                    evt = (evt) ? evt : window.event;
                    var charCode = (evt.which) ? evt.which : evt.keyCode;
                    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                        return false;
                    }
                    return true;
                }
                </script>
                <script type="text/javascript">
                function isNumber(evt) {
                    evt = (evt) ? evt : window.event;
                    var charCode = (evt.which) ? evt.which : evt.keyCode;
                    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                        return false;
                    }
                    return true;
                }
                </script>
                <!-- Javascript Files
    ================================================== -->
                <!-- initialize jQuery Library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <!-- Preloader js file -->
                <script src="js/queryloader2.min.js" type="text/javascript"></script>
                <!-- For smooth animatin  -->
                <script src="js/wow.min.js"></script>
                <!-- Bootstrap js -->
                <script src="js/bootstrap.min.js"></script>
                <!-- slick slider -->
                <script src="js/slick.min.js"></script>
                <!-- superslides slider -->
                <script src="js/jquery.easing.1.3.js"></script>
                <script src="js/jquery.animate-enhanced.min.js"></script>
                <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
                <!-- for circle counter -->
                <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
                <!-- Gallery slider -->
                <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>
                <!-- Custom js-->
                <script src="js/custom.js"></script>
</body>

</html>
<?php
    mysqli_close($conn);
?>