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
    $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['name']));
    $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
    $subject = mysqli_real_escape_string($conn, htmlspecialchars($_POST['subject']));
    $sugst = mysqli_real_escape_string($conn, htmlspecialchars($_POST['sugst']));    

    $query = "INSERT INTO contacts (name, email, subject, sugst)";
    $query .= " VALUES ('{$name}', '{$email}', '{$subject}', '{$sugst}')";
    $result = mysqli_query($conn, $query);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AUREOLE Techno Cultural fest 2016 : Contact</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/superslides.css">
    
    <link href="css/slick.css" rel="stylesheet">
    
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />
    
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    
    <link href="style.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
</head>

<body>
    
    <a class="scrollToTop" href="#"></a>
    
    
    <header id="header">
        
        <div class="menu_area">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        
                        <a class="navbar-brand" href="index.html"><img src="logo.jpg" alt="logo" height="100" width="250"></a>             
                        
                        <a class="navbar-brand" href="index.html"><span style="color:orange">&nbsp;&nbsp;&nbsp;AUREOLE</span> &nbsp;<span style="color:white">TECHNO </span> <span> CULTURAL <span style="color:white"> FEST</span> <span style="color:green">2016</span></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="megaevent-archive.html">Events</a></li>
                            <li><a href="events-archive.html">Mega Events</a></li>
                            <li><a href="hospitality.html">Hospitality</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            
                            <li><a href="reg.php">Registration</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    
                </div>
            </nav>
        </div>
        
    </header>
    
    
    <br></br>
    <br></br>
    <section id="imgBanner">
        
    </section>
    
    
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="title_area">
                        <h2 class="title_two">Jabalpur Engineering College welcomes you to it's much awaited Fest- Aureole</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="contact_form wow fadeInLeft">
                        <form action="contact.php" method="post" class="submitphoto_form">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name" name="name" required>
                            <input type="email" class="wp-form-control wpcf7-email" placeholder="Email address" name="email" required>
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject" name="subject" required>
                            <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us" name="sugst" required></textarea>
                            <input type="submit" name="submit" value="Submit" class="wpcf7-submit">
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="contact_address wow fadeInRight">
                        <h3>Contact</h3>
                        <div class="address_group">
                            <p>Jabalpur Engineering College</p>
                            <p>Gokulpur, Jabalpur, Madhya Pradesh -482011</p>
                            <p>Phone: 076123 31953</p>
                            <p>Website: jecjabalpur.ac.in</p>
                        </div>
                        <h3>Address</h3>
                        <div class="address_group">
                            <p>Jabalpur Engineering College</p>
                            <p>Gokulpur, Jabalpur, Madhya Pradesh -482011</p>
                            <p>Phone: 076123 31953</p>
                            <p>Website: jecjabalpur.ac.in</p>
                        </div>
                        <div class="address_group">
                            <ul class="footer_social">
                                <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.facebook.com/aureole16/?fref=ts"><i class="fa fa-facebook"></i></a></li>                                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    
    
    <section id="googleMap">
        <<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3667.4059978630294!2d79.9848337!3d23.1918702!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981aedd33095901%3A0xdc3ab3465781aba6!2sJabalpur+Engineering+College!5e0!3m2!1sen!2sin!4v1453575563513" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    
    <br>
    
    <section id="ourTutors">
      <div class="container">
          <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">FEST TEAM</h2>
              <span></span> 
            </div>
          </div>
        </div>
        

        
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourTutors_content">
              
              <ul class="tutors_nav">
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/satyam.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Satyam Patidar</h3>
                      <span>Fest Coordinator</span>
                   </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="https://www.facebook.com/satyam.patidar.10?fref=ts"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/kuldeep.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Kuldeep Singh</h3>
                      <span>Fest Coordinator</span>
                    
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="https://www.facebook.com/karanrajput.kuldeep?fref=ts"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/ruchi.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Ruchi Jain</h3>
                      <span>Public Relations</span>

                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="https://www.facebook.com/ruchi.jain.39566?fref=ts"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/mashrin.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Mashrin Srivastava</h3>
                      <span>Web Developer</span>
                   </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="https://www.facebook.com/profile.php?id=100008354651942"></a></li>
                        <li><a class="fa fa-twitter" href="https://twitter.com/sri_mash"></a></li>
                        <li><a class="fa fa-instagram" href="https://www.instagram.com/mashrinsrivastava/"></a></li>
                        <li><a class="fa fa-google-plus" href="https://plus.google.com/u/1/107287287909123315753/posts"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/saumya.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Saumya Suvarna</h3>
                      <span>Web Developer</span>
                 </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
        

        <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/nikhil.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Nikhil Gupta</h3>
                      <span>Public Relations</span>
                   </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/shaille.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Shaille Jain</h3>
                      <span>Public Relations</span>
                    
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
        <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/kaushal.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Kaushal Sungottra</h3>
                      <span>Event Organiser</span>
                   </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/ankit.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Ankit Shrivastava</h3>
                      <span>Event Organiser</span>
                    
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
        <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/nalin.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Nalin Chinchalwar</h3>
                      <span>Event Organiser</span>
                   </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/virendra.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Virendra Singh Rajpoot</h3>
                      <span>Marketing and Finance</span>
                    
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
        <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/ravikant.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Ravikant Amal</h3>
                      <span>Conveyor</span>
                   </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/disha.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Disha Dinesh Sahni</h3>
                      <span>Content Creator</span>
                    
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
        <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/papiya.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Papiya Banerjee</h3>
                      <span>Content Creator</span>
                    
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
        <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/raghav.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Raghav Agarwal</h3>
                      <span>Web Creator</span>
                    
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
        <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/mayank.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Mayank Patel</h3>
                      <span>Web Creator</span>
                    
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
        <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/front/missing.gif" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Sonakshi Agrawal</h3>
                      <span>Hospitality</span>
                    
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                                                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    
    <footer id="footer">
        
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-ld-6 col-md-6 col-sm-6">
                        <div class="single_footer_widget">
                            <h3>About Us</h3>
                            <p align="justify">Jabalpur Engineering College (JEC), formerly known as Government Engineering College, Jabalpur, is an institute located in Jabalpur, Madhya Pradesh, India. It was established as the Government Engineering College, Jubbulpore during the British rule in India and is the 15th oldest engineering institution of India. It is also the first institute of India to have started Electronics & Telecommunications engineering education in the country and the last educational institution set up by the British in India. The institute offers bachelors, masters and doctoral degrees in engineering and applied sciences. JEC made an announcement in March 2013, that it is starting new courses in engineering, management, design, architecture, town planning, pharmacy, cyber and business laws.</p>
                        </div>
                    </div>
                    <div class="col-ld-3  col-md-3 col-sm-3">
                        <div class="single_footer_widget">
                            <h3>QUICK LINKS</h3>
                            <ul class="footer_widget_nav">
                                <li><a href="megaevent-archive.html">Events</a></li>
                                <li><a href="events-archive.html">Mega Events</a></li>
                                <li><a href="hospitality.html">Hospitality</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="reg.html">Registration</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-ld-3  col-md-3 col-sm-3">
                        <div class="single_footer_widget">
                            <h3>Social Links</h3>
                            <ul class="footer_social">
                                <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.facebook.com/aureole16/?fref=ts"><i class="fa fa-facebook"></i></a></li>                                <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip" href="https://www.youtube.com/results?search_query=aureole+jec"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer_bootomLeft">
                            <p> Copyright &copy; All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer_bootomRight">
                            <p>Designed by Saumya and Mashrin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    
    <script src="js/wow.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/slick.min.js"></script>
    
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
    
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>
    
    <script src="js/custom.js"></script>
</body>

</html>
<?php
  mysqli_close($conn);
?>
