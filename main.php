<?php 
if(isset($_POST['submit'])){
    $to = "sn.pksharma@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    // $phone = $_POST['phone'];
    $subject2 = "Copy of your form submission";
    $message = "Name : " . $name . " . \n" ."Email : " . $email . "\n" ."Phone : " . $phone . "\n\n". "Requirements : " . "\n" . $_POST['message'];
    $message2 = "Thanks for contact me. I will contact you shortly." . "\n\n" . "Here is a copy of your message : " . "\n\n" . "Name : ". $name . "\n\n" . "Requirements : " . "\n" . $_POST['message'] . "\n\n" . "Thanks & Regards" . "\n" . "Pawan Sharma" . "\n" . "Mob : 9461630681";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    /*echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";*/
    echo '<script>alert("Thanks for Contact Me!\nI will contact you shortly.")</script>';

    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Pawan Sharma - Web Designer, UI/UX Developer, Graphic Artist.</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="description" content="Pawan Sharma Web Designer, UI/UX Developer, Graphic Artist.">
        <meta name="keywords" content="Web Designer, Web Developer, UI/UX Designer, UI/UX Developer, Graphic Designer">
    
        <!-- Favicon -->
        <link href="img/fevicon.png" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
            .lb-outerContainer {width: 1000px !important; height: auto!important;}
            .lb-image {width: 100%!important; height: auto!important;}
            .lightbox {position: fixed!important; top: 10px!important; height: calc(100vh - 10px); overflow-y: auto;}
            .navbar-dark .navbar-toggler {border-color: rgb(255 255 255 / 50%);}
            @media screen and (max-width: 425px) {
                .sidebar {margin-top: -25px!important;} 
                .header h1 {color: #ff6f61; font-weight: bold;}
                .header h2 {color: #ff6f61; font-weight: bold;}
                .lb-outerContainer {width: 100%!important;}
                }
                html, body {
                    position: relative;
                    overflow: auto;
                    background: linear-gradient(#123, #123);
                }
        </style>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">

        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>
        <div class="snowflake"></div>

        <div class="wrapper">
            <div class="sidebar"><br>
                <div class="sidebar-header">
                    <img src="img/profile-3.png" alt="Image">
                </div>
                <div class="sidebar-content">
                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <a href="#" class="navbar-brand" style="font-family: cursive; font-size: 1.75rem;">Pawan Sharma</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#header">Home<i class="fa fa-home"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About<i class="fa fa-address-card"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#experience">Experience<i class="fa fa-star"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Skills<i class="fa fa-tasks"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#portfolio">Portfolio<i class="fa fa-file-archive"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact<i class="fa fa-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="sidebar-footer">
                    <a href="https://twitter.com/PawanRadhe" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/pkpawansharma2" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/in/pawanwebdesigner/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="content">
                <!-- Header Start -->
                <div class="header" id="header">
                    <div class="content-inner">
                        <p>I'm</p>
                        <h1>Pawan Sharma</h1>
                        <h2></h2>
                        <div class="typed-text">Web Designer, Web Developer, Front End Developer, UI/UX Developer, Graphic Designer</div>
                    </div>
                </div>
                <!-- Header End -->
                
                <!-- Large Button Start -->
                <div class="large-btn">
                    <div class="content-inner">
                        <a class="btn" href="#"><i class="fa fa-download"></i>Resume</a>
                        <a class="btn" href="#"><i class="fa fa-hands-helping"></i>Hire Me</a>
                    </div>
                </div>
                <!-- Large Button End -->
                
                <!-- About Start -->
                <div class="about" id="about">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>About Me</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-5">
                                <img src="img/about-4.png" alt="Image">
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <p>
                                    Welcome to my website. My Name is Pawan Sharma. A Professional UI/UX Designer, Creative web designer, Front End Developer & Graphic artist. I design & develop beautiful websites & templates. Designing engaging and responsive landing pages. Optimising sites for maximum speed and scalability.
                                </p>
                                <a class="btn" href="#">Hire Me</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>HTML</p><p>90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>Bootstrap</p><p>80%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>CSS</p><p>85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>Photoshop</p><p>90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->
                
                <!-- Education Start -->
                <div class="education" id="education">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Education</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <span>01-jun-2012 <i>to</i> 31-Aug-2012</span>
                                    <h3>Certificate in Web Design</h3>
                                    <p>45 Day's Institutional Training certificate.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <span>1-Sept-2009 <i>to</i> 31-May-2013</span>
                                    <h3>Bachelor Degree</h3>
                                    <p>B.Tech in Computer Science Engineering.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <span>01-Jul-2008 <i>to</i> 31-Mar-2009</span>
                                    <h3>Senior Class</h3>
                                    <p>12<sup>th</sup> in PCM from RBSE Board Rajastahn.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <span>01-Jul-2007 <i>to</i> 31-Mar-2008</span>
                                    <h3>Secondary Class</h3>
                                    <p>10<sup>th</sup> in General Subjects from RBSE Board.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Education Start -->
                
                <!-- Experience Start -->
                <div class="experience" id="experience">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Experience</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="exp-col">
                                    <span>10-Sep-2020 <i>to</i> Present</span>
                                    <h3>Precise Automation</h3>
                                    <h4>C-Scheme - Jaipur, Rajasthan</h4>
                                    <h5>Web Designer</h5>
                                    <p>Currently work as a Web Designer at Precise Automation. Skills used are mention below : <br> HTML5, CSS3, Java Script, JQuery, Bootstrap, Photoshop.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="exp-col">
                                    <span>01-Sept-2019 <i>to</i> 31-Aug-2020</span>
                                    <h3>College Funda Pvt. Ltd.</h3>
                                    <h4>Mansarover - Jaipur, Rajasthan</h4>
                                    <h5>Career Counsellor</h5>
                                    <p>Worked as a Career Counselor at College Funda Services. Skills used are mention below : Explore Colleges, Career Counseling, GD-PI Updates.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="exp-col">
                                    <span>01-Nov-2016 <i>to</i> 31-Dec-2017</span>
                                    <h3>The Vision House</h3>
                                    <h4>Banipark - Jaipur, Rajasthan</h4>
                                    <h5>Web Designer</h5>
                                    <p>One & Half Year work experience as a Web Designer.
                                    Skills used are mention below : <br> HTML5, CSS3, js, jquery, Bootstrap, Photoshop, Dreamweaver, Visiual studio 2013. </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="exp-col">
                                    <span>01-Sept-2014 <i>to</i> 31-Mar-2016</span>
                                    <h3>Ministry of Home Affairs</h3>
                                    <h4>Pushpa Bhawan - New Delhi</h4>
                                    <h5>Consultant Cum Designer</h5>
                                    <p>Jr. Web Designer with Shri Ram New Horizons Pvt. Ltd. Skills used are mention below :<br>
                                    eOffice (NIC), DCHB, SQL, HTML, CSS, Microsoft Office Excel Worksheet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Experience Start -->
                
                <!-- Service Start -->
                <div class="service" id="service">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Skills</h2>
                        </div>  
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fa fa-desktop"></i> 
                                    <span style="font-size: 24px; font-weight: bold; padding-left: 10px;"> HTML5</span>
                                     <p>HTML is the standard markup language for Web pages. HTML Tables, Lists, Classes, Id, Block & Inline,  Iframes & HTML Responsive Layout.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fab fa-css3"></i>
                                    <span style="font-size: 24px; font-weight: bold; padding-left: 10px;"> CSS3</span>
                                    <!-- <h3>Graphic Design</h3>-->
                                    <p>CSS describes how HTML elements are to be displayed on screen, paper, or in other media. CSS stands for Cascading Style Sheets.</p> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fa fa-code"></i>
                                    <span style="font-size: 24px; font-weight: bold; padding-left: 10px;"> Java Script</span>
                                    <!-- <h3>Web Development</h3>-->
                                    <p>JavaScript is the programming language of the Web. JavaScript Can Change HTML Content. JavaScript Can Change HTML Styles (CSS).</p> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fa fa-envelope-open-text"></i>
                                    <span style="font-size: 24px; font-weight: bold; padding-left: 10px;"> JQuery</span>
                                    <!-- <h3>Digital Marketing</h3> -->
                                    <p>JQuery is a Java Script Library. jQuery greatly simplifies JS programming. jQuery is a lightweight, "write less, do more", JavaScript library.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fab fa-bootstrap"></i>
                                    <span style="font-size: 24px; font-weight: bold; padding-left: 10px;"> Bootstrap</span>
                                    <!-- <h3>Web Development</h3>-->
                                    <p>Bootstrap is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites. Bootstrap Version 3,4 & 5.</p> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fa fa-edit"></i>
                                    <span style="font-size: 24px; font-weight: bold; padding-left: 10px;"> Photoshop</span>
                                    <!-- <h3>Digital Marketing</h3> -->
                                    <p>Adobe Photoshop is a raster graphics editor Software. A sidebar with a variety of tools functions appears to the left of the screen.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fa fa-compass"></i>
                                    <span style="font-size: 24px; font-weight: bold; padding-left: 10px;"> Illustrator</span>
                                    <!-- <h3>Web Development</h3>-->
                                    <p>The industry-standard vector graphics software lets create everything from web and mobile graphics to logos, icons & illustrations.</p> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fab fa-wordpress"></i>
                                    <span style="font-size: 24px; font-weight: bold; padding-left: 10px;"> Wordpress</span>
                                    <!-- <h3>Digital Marketing</h3> -->
                                    <p>WordPress is open source software lets can use to create a beautiful website, blog, or app. 41% of the web is built on WordPress.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Start -->
                
                <!-- Portfolio Start -->
                <div class="portfolio" id="portfolio">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Portfolio</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <li data-filter=".web-des">Design</li>
                                    <li data-filter=".web-dev">Development</li>
                                    <li data-filter=".dig-mar">Marketing</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row portfolio-container">
                            <div class="col-lg-4 col-md-6 portfolio-item web-des">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/Allysofttech-1.jpg" class="img-fluid img-thumbnail" alt="">
                                        <a href="img/Allysofttech-2.png" data-lightbox="portfolio" data-title="Ally Softtech" class="link-preview" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="http://allysofttech.com/" target="_blank" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="img/Allysofttech-2.png" data-lightbox="portfolio">Ally Softtech <span>www.allysofttech.com</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item web-des">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/mnbuilder-1.jpg" class="img-fluid img-thumbnail" alt="">
                                        <a href="img/mnbuilder-2.jpg" class="link-preview" data-lightbox="portfolio" data-title="MN Builder" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="http://mnbuilder.co.in/" target="_blank" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="img/mnbuilder-2.jpg" data-lightbox="portfolio">MN Bulder <span>www.mnbuilder.co.in</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item web-dev">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/ORGI-1.jpg" class="img-fluid img-thumbnail" alt="">
                                        <a href="img/ORGI-2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Census of India" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="https://censusindia.gov.in/" target="_blank" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="img/ORGI-2.jpg" data-lightbox="portfolio">Census of India <span>www.censusindia.gov.in</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item web-dev">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/visionfarm-1.jpg" class="img-fluid img-thumbnail" alt="">
                                        <a href="img/visionfarm-2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Vision Farms" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="http://visionfarms.in/" target="_blank" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="img/visionfarm-2.jpg" data-lightbox="portfolio">Vision Farms <span>www.visionfarms.in</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item dig-mar">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/visionfresh-1.jpg" class="img-fluid img-thumbnail" alt="">
                                        <a href="img/visionfresh-2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Vision Fresh" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="https://www.visionfresh.in/" target="_blank" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="img/visionfresh-2.jpg" data-lightbox="portfolio">Vision Fresh <span>www.visionfresh.in</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item dig-mar">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/CP-1.jpg" class="img-fluid img-thumbnail" alt="">
                                        <a href="img/CP-2.jpg" class="link-preview" data-lightbox="portfolio" data-title="CP Sharma" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="http://cpsharma.com/" target="_blank" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="img/CP-2.jpg" data-lightbox="portfolio">CP Sharma <span>Career Counsellor</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item web-des">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/CP-11.jpg" class="img-fluid img-thumbnail" alt="">
                                        <a href="img/CP-12.jpg" class="link-preview" data-lightbox="portfolio" data-title="CP Sharma" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="http://cpsharma.com/" target="_blank" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="img/CP-12.jpg" data-lightbox="portfolio">CP Sharma <span>www.cpsharma.com</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item web-des">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/rahul-1.png" class="img-fluid img-thumbnail" alt="">
                                        <a href="img/rahul-2.png" class="link-preview" data-lightbox="portfolio" data-title="Bhai Rahul Dwivedi" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="http://bhairahuldwivedi.com" target="_blank" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="img/rahul-2.png" data-lightbox="portfolio">Bhai Rahul Dwivedi <span>www.bhairahuldwivedi.com</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item web-des">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="img/krishnaweb-1.jpg" class="img-fluid img-thumbnail" alt="">
                                        <a href="img/krishnaweb-2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Krishna Web" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="http://krishnaweb.co.in/" target="_blank" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="img/krishnaweb-2.jpg" data-lightbox="portfolio">Krishna Web <span>www.krishnaweb.co.in</span></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Start -->
                
                <!-- Review Start -->
                <div class="review" id="review">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Quotes</h2>
                        </div>
                        <div class="row align-items-center review-slider">
                            <div class="col-md-12">
                                <div class="review-slider-item">
                                    <div class="review-text">
                                        <p>
                                            “Many of life’s failures are people who did not realize how close they were to success when they gave up.”
                                        </p>
                                    </div>
                                    <div class="review-img">
                                        <!-- <img src="img/review-1.jpg" alt="Image"> -->
                                        <div class="review-name">
                                            <h3>Author</h3>
                                            <p>Thomas A. Edison</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="review-slider-item">
                                    <div class="review-text">
                                        <p>
                                            “You have brains in your head. You have feet in your shoes. You can steer yourself any direction you choose.” 
                                        </p>
                                    </div>
                                    <div class="review-img">
                                        <!-- <img src="img/review-2.jpg" alt="Image"> -->
                                        <div class="review-name">
                                            <h3>Author</h3>
                                            <p>Dr. Seuss</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="review-slider-item">
                                    <div class="review-text">
                                        <p>
                                            “When it is obvious that goals can’t be reached, don’t adjust the goals, but adjust the action steps.”
                                        </p>
                                    </div>
                                    <div class="review-img">
                                        <!-- <img src="img/review-3.jpg" alt="Image"> -->
                                        <div class="review-name">
                                            <h3>Author</h3>
                                            <p>Dr. Confucius</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Review End -->
                
                <!-- Contact Start -->
                <div class="contact" id="contact">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Contact</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <p><i class="fa fa-user"></i>Pawan Sharma</p>
                                    <p><i class="fa fa-tag"></i>Web Designer & Developer</p>
                                    <p><i class="fa fa-envelope"></i><a href="mailto:info@example.com">sn.pksharma@gmail.com</a></p>
                                    <p><i class="fa fa-phone"></i><a href="tel:9461630681">+91 9461630681,</a></p>
                                    <p><i class="fa fa-map-marker"></i>F-75, Mangalam City, Jaipur.</p>
                                    <div class="social">
                                        <a class="btn" href="https://twitter.com/PawanRadhe" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="btn" href="https://www.facebook.com/pkpawansharma2" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn" href="https://www.linkedin.com/in/pawanwebdesigner/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <form action="" method="post">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="name" class="form-control" placeholder="Your Name" required />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" name="email" class="form-control" placeholder="Your Email" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject" required />
                                        </div>
                             <!--            <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone" required />
                                        </div>-->
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                        </div>
                                        <div><button class="btn" type="submit" name="submit">Send Message</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact End -->
                
                <!-- Footer Start -->
                <div class="footer">
                    <div class="content-inner">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <p style="color: #ffffff">&copy; Copyright <a href="#">2021</a>. All Rights Reserved</p>
                            </div>
                            <div class="col-md-6">
                                <p style="color: #ffffff">Designed by <a href="#">pawan@radhe</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Start -->
            </div>
        </div>
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
