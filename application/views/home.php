<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Mohit Choudhary</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
		<!--=============== css  ===============-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/fonts.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/color.css">
        <!--=============== favicons ===============-->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico">
		<!-- <script src="https://kit.fontawesome.com/42a9d7eb53.js" crossorigin="anonymous"></script> -->
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            <header class="main-header">
                <a class="logo-holder" href="index.html">
                <img src="<?php echo base_url(); ?>images/logo.png"  alt="">
                </a>
                <!-- nav-button-wrap-->
                <div class="nav-button but-hol">
                    <span  class="nos"></span>
                    <span class="ncs"></span>
                    <span class="nbs"></span>
                    <div class="menu-button-text">Menu</div>
                </div>
                <!-- nav-button-wrap end-->
                <div class="header-social">
                    <ul >
                        <li><a href="https://www.facebook.com/mohitchoudhary23" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/mohitchoudhary__/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/mohitc23" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/mohit-choudhary/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        
                    </ul>
                </div>
                <!--  showshare -->  
                <div class="show-share showshare">
                    <i class="fal fa-retweet"></i>
                    <span>Share This</span>
                </div>
                <!--  showshare end -->
            </header>
            <!--  header end -->
            <!--  navigation bar -->
            <div class="nav-overlay">
                <div class="tooltip color-bg">Close Menu</div>
            </div>
            <div class="nav-holder">
                <a class="header-logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/logo2.png" alt=""></a> 
                <div class="nav-title"><span>Menu</span></div>
                <div class="nav-inner-wrap">
                    <nav class="nav-inner sound-nav" id="menu">
                        <ul>
                            <li>
                                <a href="<?php echo base_url(); ?>" class="act-link">Home</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--  navigation bar end -->
            <!-- wrapper-->
            <div id="wrapper">
                <!-- scroll-nav-wrap-->
                <div class="scroll-nav-wrap fl-wrap">
                    <div class="scroll-down-wrap">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                        <span>Scroll Down</span>
                    </div>
                    <nav class="scroll-nav scroll-init">
                        <ul>
                            <li><a class="scroll-link act-link" href="#sec1">Hero</a></li>
                            <li><a class="scroll-link" href="#sec2">About</a></li>
                            <li><a class="scroll-link" href="#sec3">Resume</a></li>
                            <li><a class="scroll-link" href="#sec4">Skills</a></li>
                            <!-- <li><a class="scroll-link" href="#sec5">Projects</a></li> -->
                            <li><a class="scroll-link" href="#sec6">Testimonials</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- scroll-nav-wrap end-->
                <!-- hero-wrap-->
                <div class="hero-wrap no-hidden" id="sec1" data-scrollax-parent="true">
                    <!-- impulse-wrap-->
                    <div class="impulse-wrap">
                        <div class="mm-parallax">
                            <div class="half-hero-wrap section-entry">
                                <h1>Hey there!<br>I'm  Mohit Choudhary<br>Technophile, <span> Software Engineer & <i class="fas fa-camera-retro"></i> </span></h1>
                                <h4>I write code, drink <span class="strike-text">caffeine</span> green tea & shoot<i class="fas fa-camera-retro"></i> people.</h4>
                                <div class="clearfix"></div>
                                <a href="#sec2" class="custom-scroll-link btn float-btn flat-btn color-btn mar-top">Let's Start</a> 
                            </div>
                            <div class="half-bg">
                                <div class="bg"  data-bg="<?php echo base_url(); ?>images/bg/1.jpg" data-scrollax="properties: { translateY: '250px' }"></div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                    <!-- impulse-wrap end-->
                    <!--hero dec-->
                    <div class="hero-decor-let">
                        <div>Mobile App Dev</div>
                        <div>Web App Dev</div>
                        <div><span>Ui/Ux Design</span></div>
                        <div>Branding</div>
                        <div>Cloud Services</div>
                        <div><span>IT Consultancy</span></div>
                    </div>
                    <div class="hero-decor-numb"><span>18.5204°N  </span><span>73.8567°E </span> <a href="https://www.google.com.ua/maps/" target="_blank" class="hero-decor-numb-tooltip">Based In India</a></div>
                    <div class="hero-line-dec imp-her-line"></div>
                    <div class="pattern-bg"></div>
                    <div class="half-bg-dec" data-ran="12"></div>
                    <!--hero dec end-->
                </div>
                <!-- hero-wrap end-->
                <!-- Content-->
                <div class="content">
                    <!-- section-->
                    <section data-scrollax-parent="true" id="sec2">
                        <div class="section-subtitle"  data-scrollax="properties: { translateY: '-250px' }" > <span>//</span>Words About  </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="collage-image fl-wrap">
                                        <div class="collage-image-title" data-scrollax="properties: { translateY: '150px' }">Mohit Choudhary</div>
                                        <img src="<?php echo base_url(); ?>images/all/1.jpg" class="respimg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="main-about fl-wrap">
                                        <h5>Welcome to the world of</h5>
                                        <h2>Innovative solutions<br>to boost <span> your creative </span>  ideas</h2>
                                        <p>Being a technophile, I am very passionate about constantly experimenting with new technologies and techniques, and also strive to better myself as a software professional, and the development community as a whole. </p>
                                        <!-- features-box-container --> 
                                        <div class="features-box-container fl-wrap">
                                            <div class="row">
                                                <!--features-box --> 
                                                <div class="features-box col-md-6">
                                                    <div class="time-line-icon">
                                                    <i class="fal fa-mobile-android"></i>
                                                    </div>
                                                    <h3>Mobile Apps</h3>
                                                    <p>High-end experties in developing solutions for iOS & Android platform.</p>
                                                </div>
                                                <!-- features-box end  --> 
                                                <!--features-box --> 
                                                <div class="features-box col-md-6">
                                                    <div class="time-line-icon">
                                                        <i class="fal fa-desktop"></i>
                                                    </div>
                                                    <h3>Web Apps</h3>
                                                    <p>Vast experience in building web apps using modern web frameworks.</p>
                                                </div>
                                                <!-- features-box end  --> 
                                                <!--features-box --> 
                                                <div class="features-box col-md-6">
                                                    <div class="time-line-icon">
                                                        <i class="fab fa-pagelines"></i>
                                                    </div>
                                                    <h3>Ui/Ux Design & Branding</h3>
                                                    <p>Insightful knowledge of delivering intuitive and user-centered solutions.</p>
                                                </div>
                                                <!-- features-box end  -->                                
                                                <!--features-box --> 
                                                <div class="features-box col-md-6">
                                                    <div class="time-line-icon">
                                                    <i class="fal fa-clouds"></i>
                                                    </div>
                                                    <h3>Cloud Services</h3>
                                                    <p>Good Experience in managing systems using AWS and GCP services.</p>
                                                </div>
                                                <!-- features-box end  -->  
                                            </div>
                                        </div>
                                        <!-- features-box-container end  -->
                                        <a href="portfolio.html" class="btn float-btn flat-btn color-btn">My Portfolio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-parallax-module" data-position-top="90"  data-position-left="25" data-scrollax="properties: { translateY: '-250px' }"></div>
                        <div class="bg-parallax-module" data-position-top="70"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
                        <div class="sec-lines"></div>
                    </section>
                    <!-- section end-->
                    <!-- section-->
                    <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
                        <div class="bg par-elem"  data-bg="<?php echo base_url(); ?>images/bg/1-numbers.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title">
                                <h2>Some Interisting <span>Facts </span> <br> About Me</h2>
                                <p> We have a wide range of pneumatic and vacuum components and conveyor belts and systems specifically suiting the precise needs of the print and packaging industry.  </p>
                                <div class="horizonral-subtitle"><span>Numbers</span></div>
                            </div>
                            <div class="fl-wrap facts-holder">
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts1">
                                        <div class="milestone-counter1">
                                            <div class="animaper">
                                                <div class="fact-label" >So many</div>
                                            </div>
                                        </div>
                                        <h6>Finished projects</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="animaper">
                                                <div class="fact-label" >A lot of</div>
                                            </div>
                                        </div>
                                        <h6>Happy customers</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="84">0</div>
                                            </div>
                                        </div>
                                        <h6>Working months</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->                              
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="2301">0</div>
                                            </div>
                                        </div>
                                        <h6>Tea Cups</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->                             
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
                    <!-- section-->
                    <section data-scrollax-parent="true" id="sec3">
                        <div class="section-subtitle"  data-scrollax="properties: { translateY: '-250px' }" >My Resume  <span>//</span></div>
                        <div class="container">
                            <!-- section-title -->
                            <div class="section-title fl-wrap">
                                <h3>Some Words About Me</h3>
                                <h2>My Awesome <span> Story</span></h2>
                                <p>
                                “It’s not who I am underneath, but what I do that defines me.”
                                </p>
                                <p>
                                Let me explain <i class="fas fa-hand-point-up"></i>, Actions speak louder than words. It’s incredibly easy to say what kind of person you are. However, all the talking and speeches in the world stating what a great person you are is useless unless you can actually back it up.
                                </p>
                            </div>
                            <!-- section-title end -->
                            <!-- custom-inner-holder -->
                            <div class="custom-inner-holder">
                                <!-- custom-inner -->	
                                <div class="custom-inner">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="custom-inner-header workres">
                                                <i class="fa fa-briefcase"></i>
                                                <h3> Working in Particle41 LLP</h3>
                                                <span>  since 2018 </span>
                                            </div>
                                            <div class="ci-num"><span>01. -</span></div>
                                        </div>
                                        <div class="col-md-4"><img src="<?php echo base_url(); ?>images/all/3.jpg" class="respimg" data-scrollax="properties: { translateY: '-170px' }" alt=""></div>
                                        <div class="col-md-4">
                                            <div class="custom-inner-content fl-wrap">
                                                <h4>Sr. Software Developer</h4>
                                                <p>Working with excellent team of technology enthisiasts. Exploring various technologies and developing high-quality systems providing the real-world solution.</p>
                                                <ul>
                                                    <li>Researching, designing, implementing and managing software programs</li>
                                                    <li>Deploying and maintaining software solutions</li>
                                                    <li>Working closely with other developers and guide them</li>
                                                </ul>
                                                <a href="#" class="cus-inner-head-link color-bg">Details + </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- custom-inner end -->
                                <!-- custom-inner -->	
                                <!-- <div class="custom-inner">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="custom-inner-header educ">
                                                <i class="fal fa-university"></i>
                                                <h3> Company</h3>
                                                <span>  2011-2013 </span>
                                            </div>
                                            <div class="ci-num"><span>02. - </span></div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="custom-inner-content fl-wrap">
                                                <h4>Title</h4>
                                                <p>Desc</p>
                                                <a href="#" class="cus-inner-head-link color-bg">Details + </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3"><img src="<?php echo base_url(); ?>images/all/2.jpg" class="respimg" data-scrollax="properties: { translateY: '270px' }" alt=""></div>
                                    </div>
                                </div> -->
                                <!-- custom-inner end -->
                                <!-- custom-inner -->
                                <div class="custom-inner">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="custom-inner-header workres">
                                                <i class="fa fa-briefcase"></i>
                                                <h3> Worked in smartData Enterprises (I) Ltd.</h3>
                                                <span>  2013-2018 </span>
                                            </div>
                                            <div class="ci-num"><span>02. - </span></div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="custom-inner-content fl-wrap">
                                                <h4>Software Developer</h4>
                                                <p>Started my professional career here and worked with amazing people from the industry. I made most out of the opportunities and enhance my technological understanding with various tools and technology. </p>
                                                <ul>
                                                    <li>Developing high end software solutions</li>
                                                    <li>Writing and implementing efficient code</li>
                                                    <li>Maintaining and upgrading existing systems</li>
                                                </ul>
                                                <p> “The Way Get Started Is To Quit Talking And Begin Doing.” – Walt Disney</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- custom-inner end -->
                                <!-- custom-inner -->
                                <div class="custom-inner">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="custom-inner-header workres">
                                                <i class="fa fa-briefcase"></i>
                                                <h3> B. E. - Computer Technology</h3>
                                                <span>  2009-2013 </span>
                                            </div>
                                            <div class="ci-num"><span>03. - </span></div>
                                        </div>
                                        <!-- <div class="col-md-4"><img src="<?php// echo base_url(); ?>images/all/1.jpg" class="respimg" data-scrollax="properties: { translateY: '100px' }" alt=""></div> -->
                                        <div class="col-md-8">
                                            <div class="custom-inner-content fl-wrap">
                                                <h4>RTMN University</h4>
                                                <p>I had a great inclination towards the field of computer sciences and it is one of my favorite subjects including Physics and Chemistry.It is so satisfactory being a computer science major and building a professional career as a software engineer. It has given me a solid platform to becoming a technocrat and entrepreneur. </p>
                                                
                                                <p> “Education is the passport to the future, for tomorrow belongs to those who prepare for it today.”</p>
                                                <a href="#" class="cus-inner-head-link color-bg">Details + </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- custom-inner end -->
                            </div>
                            <!-- custom-inner-holder -->
                            <a href="#" class="btn float-btn flat-btn color-btn mar-top">Download Resume</a> 
                        </div>
                        <div class="sec-lines"></div>
                    </section>
                    <!-- section end-->
                    <!-- section  -->
                    <section class="dark-bg sinsec-dec sinsec-dec2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="video-box fl-wrap">
                                        <img src="<?php echo base_url(); ?>images/all/photography.jpg" class="respimg" alt="">
                                        <a class="video-box-btn color-bg" href="https://www.flickr.com/photos/mohitchoudharymoments/" target="_blank"><i class="fal fa-play" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="video-promo-text fl-wrap mar-top">
                                        <h3>My Photography Portfolio </h3>
                                        <p> In my opinion Photography is a powerful medium of expression and communications, offers an infinite variety of perception, interpretation and execution. </p>
                                        <a href="https://www.flickr.com/photos/mohitchoudharymoments/" class="btn float-btn flat-btn color-btn mar-top">See Photos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="half-bg-dec single-half-bg-dec" data-ran="12"></div>
                        <div class="sec-lines"></div>
                    </section>
                    <!-- sectio endn-->                              
                    <!-- section-->
                    <section  data-scrollax-parent="true">
                        <div class="section-subtitle"  data-scrollax="properties: { translateY: '-250px' }"><span>//</span>How I Work</div>
                        <div class="container">
                            <!-- section-title -->
                            <div class="section-title fl-wrap">
                                <h3>How I Work</h3>
                                <h2>My   Working   <span>Process</span></h2>
                                <p>“Write the masterpiece that has not been written. Sing the masterpiece that has not been sung. Paint the masterpiece that has not been painted. Create the masterpiece that has not been created.”  </p>
                            </div>
                            <!-- section-title end -->
                            <!--process-wrap  -->
                            <div class="process-wrap fl-wrap">
                                <ul>
                                    <li>
                                        <div class="time-line-icon">
                                            <i class="fab fa-slideshare"></i>
                                        </div>
                                        <h4>Discuss the project</h4>
                                        <div class="process-details">
                                            <h6>Communication is the key.</h6>
                                            <p>Understand the problem statement and collect all the necessary domain related info.</p>
                                            <a href="#">More Details</a>
                                        </div>
                                        <span class="process-numder">01.</span>
                                    </li>
                                    <li>
                                        <div class="time-line-icon">
                                            <i class="fal fa-laptop"></i>
                                        </div>
                                        <h4>Develop & elaborate</h4>
                                        <div class="process-details">
                                            <h6>Get into your creative zone & build a masterpiece. </h6>
                                            <p>Work with the most stable and suitable tools and technologies to provide better stability in the longer run.</p>
                                            <a href="#">More Details</a>
                                        </div>
                                        <span class="process-numder">02.</span>
                                    </li>
                                    <li>
                                        <div class="time-line-icon">
                                            <i class="fal fa-flag-checkered"></i>
                                        </div>
                                        <h4>Final Quality Check</h4>
                                        <div class="process-details">
                                            <h6>Assess on quality metrics</h6>
                                            <p>Make sure business solution meets the industry standards.</p>
                                            <a href="#">More Details</a>
                                        </div>
                                        <span class="process-numder">03.</span>
                                    </li>
                                </ul>
                            </div>
                            <!--process-wrap   end-->
                            <div class="fl-wrap mar-top">
                                <div class="srv-link-text">
                                    <h4>Looking forward to work with you.</h4>
                                    <a href="#contact-me" class="btn float-btn flat-btn color-btn">Get In Touch</a> 
                                </div>
                            </div>
                        </div>
                        <div class="bg-parallax-module" data-position-top="90"  data-position-left="30" data-scrollax="properties: { translateY: '-150px' }"></div>
                        <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
                        <div class="sec-lines"></div>
                    </section>
                    <!-- section end -->
                    <!-- section-->
                    <section class="parallax-section dark-bg sec-half parallax-sec-half-left" data-scrollax-parent="true" id="sec4">
                        <div class="bg par-elem"  data-bg="<?php echo base_url(); ?>images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title">
                                <h2>My   Own <span> Developer's </span> and <br> Design   Skills  </h2>
                                <p>Never cease yourself to learn new things. We keep moving forward, opening new doors, and doing new things, because we're curious and curiosity keeps leading us down new paths. </p>
                                <div class="horizonral-subtitle"><span>Power</span></div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!-- section -->
                    <section data-scrollax-parent="true">
                        <div class="section-subtitle right-pos"  data-scrollax="properties: { translateY: '-250px' }" ><span>//</span>attainments</div>
                        <div class="container">
                            <!-- Skills-->
                            <div class="fl-wrap mar-bottom skill-wrap">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="pr-title fl-wrap">
                                            <h3>Design Skills</h3>
                                            <span>"Make it simple, but significant."</span>
                                        </div>
                                        <div class="ci-num"><span>01. - </span></div>
                                    </div>
                                    <div class="col-md-8">
                                        <!-- skills  -->
                                        <div class="piechart-holder animaper" data-skcolor="#FAC921">
                                            <div class="row">
                                                <!-- 1  -->
                                                <div class="piechart">
                                                    <span class="chart" data-percent="85">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <h4>UI</h4>
                                                </div>
                                                <!-- 1 end -->
                                                <!-- 2  -->
                                                <div class="piechart">
                                                    <span class="chart" data-percent="90">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <h4>UX</h4>
                                                </div>
                                                <!-- 2 end  -->
                                                <!-- 3  -->
                                                <div class="piechart">
                                                    <span class="chart" data-percent="75">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <div class="clearfix"></div>
                                                    <h4>Branding</h4>
                                                </div>
                                                <!-- 3  end-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- skills  end-->
                                </div>
                            </div>
                            <!--  Skills  end-->
                            <!--  Skills-->
                            <div class="fl-wrap mar-bottom   mar-top skill-wrap">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <div class="pr-title fl-wrap">
                                            <h3>Developer Skills</h3>
                                            <span>"Skill is the unified force of experience, intellect and passion."</span>
                                        </div>
                                        <div class="ci-num"><span>02. - </span></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="skillbar-box animaper">
                                            <!-- skill 1-->
                                            <div class="custom-skillbar-title"><span>Mobile App Development</span></div>
                                            <div class="skill-bar-percent">95%</div>
                                            <div class="skillbar-bg" data-percent="95%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                            <!-- skill 2-->
                                            <div class="custom-skillbar-title"><span>Web App development</span></div>
                                            <div class="skill-bar-percent">95%</div>
                                            <div class="skillbar-bg" data-percent="95%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                            <!-- skill 3-->
                                            <div class="custom-skillbar-title"><span>Web API Development</span></div>
                                            <div class="skill-bar-percent">88%</div>
                                            <div class="skillbar-bg" data-percent="85%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                            <!-- skill 1-->
                                            <div class="custom-skillbar-title"><span>Cloud Services</span></div>
                                            <div class="skill-bar-percent">65%</div>
                                            <div class="skillbar-bg" data-percent="65%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Skills  end-->
                            <!--  Skills-->
                            <div class="fl-wrap   mar-top skill-wrap">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="pr-title fl-wrap">
                                            <h3>Language Skills</h3>
                                            <span>"Language provides capacity for preservation and communication of intellectual life."</span>
                                        </div>
                                        <div class="ci-num"><span>03. - </span></div>
                                    </div>
                                    <div class="col-md-8">
                                        <!-- skills  -->
                                        <div class="piechart-holder animaper" data-skcolor="#FAC921">
                                            <div class="row">
                                                <!-- 1  -->
                                                <div class="piechart" >
                                                    <span class="chart" data-percent="100">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <h4>Hindi</h4>
                                                </div>
                                                <!-- 1 end -->
                                                <!-- 2  -->
                                                <div class="piechart">
                                                    <span class="chart" data-percent="95">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <h4>English</h4>
                                                </div>
                                                <!-- 2 end  -->
                                                <!-- 3  -->
                                                <div class="piechart">
                                                    <span class="chart" data-percent="60">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <div class="clearfix"></div>
                                                    <h4>Assamese & Bengali</h4>
                                                </div>
                                                <!-- 3  end-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- skills  end-->
                                </div>
                            </div>
                            <!-- Skills  end-->
                        </div>
                        <div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
                        <div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
                        <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
                        <div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
                        <div class="sec-lines"></div>
                    </section>
                    <section  data-scrollax-parent="true" id="sec6">
                        <div class="section-subtitle"  data-scrollax="properties: { translateY: '-250px' }" >Testimonials<span>//</span></div>
                        <div class="container">
                            <div class="section-title fl-wrap">
                                <h3>Reviews</h3>
                                <h2>Recommendations and <span>Testimonials</span></h2>
                                <p>“We should be grateful to the people who make us happy; they are the charming gardeners who make our souls blossom.” </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!--slider-carousel-wrap -->
                        <div class="slider-carousel-wrap text-carousel-wrap fl-wrap">
                            <div class="text-carousel-controls fl-wrap">
                                <div class="container">
                                    <div class="sp-cont  sp-cont-prev"><i class="fal fa-long-arrow-left"></i></div>
                                    <div class="sp-cont   sp-cont-next"><i class="fal fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <div class="text-carousel cur_carousel-slider-container fl-wrap">
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item">
                                        <div class="popup-avatar"><img src="<?php echo base_url(); ?>images/avatar/linkedin.png" alt=""></div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <div class="review-owner fl-wrap">Manas Thakur  - <span>Asst. Professor, IIT Mandi</span></div>
                                        <p> "Mohit is an extremely passionate programmer, designer, and crafter. He rides at the pinnacle of a rare talent -- creativity. I have been with Mohit through my childhood and graduation, and can confidently claim that he would be a valuable asset to any organization where he works with passion. You can challenge him and he will pleasantly surprise you in return."</p>
                                        <a href="https://www.linkedin.com/in/mohit-choudhary/" class="testim-link">Via LinkedIn</a>
                                    </div>
                                </div>
                                <!--slick-item end -->
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item">
                                        <div class="popup-avatar"><img src="<?php echo base_url(); ?>images/avatar/linkedin.png" alt=""></div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <div class="review-owner fl-wrap">Keshav Jha  - <span>Technologist, AI + ML Full Stack Engineer</span></div>
                                        <p> "Very few people have the capacity of understanding other's requirements. Mohit does not need an explanation of anything, you narrating your thought and the next morning you will find that it will be converted into a beautiful model or workable solution. I enjoyed working with him during my college club days. He is a very polite and flexible friend of mine. he has very good photography skills and a lovely smile. I wish him good fortune and healthy life."</p>
                                        <a href="https://www.linkedin.com/in/mohit-choudhary/" class="testim-link">Via LinkedIn</a>
                                    </div>
                                </div>
                                <!--slick-item end -->
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item">
                                        <div class="popup-avatar"><img src="<?php echo base_url(); ?>images/avatar/linkedin.png" alt=""></div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <div class="review-owner fl-wrap">Alok Dubey  - <span>Mobile Technical Lead</span></div>
                                        <p> "With his brilliant creative capabilities, Mohit is actually an artist while performing assigned tasks. His wonderful attitude towards his assignments and his management skills with timely completion make him a team player. I always have loved the thorough explanation he provides during team discussions. I would like to recommend Mohit as one of the sound technical personas worked with me."</p>
                                        <a href="https://www.linkedin.com/in/mohit-choudhary/" class="testim-link">Via LinkedIn</a>
                                    </div>
                                </div>
                                <!--slick-item end -->                                                         
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item">
                                        <div class="popup-avatar"><img src="<?php echo base_url(); ?>images/avatar/linkedin.png" alt=""></div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <div class="review-owner fl-wrap">Akhil Soni  - <span>Senior Technical Staff</span></div>
                                        <p> "Mohit has very strong knowledge in web development and IOS application development. He is always passionate in his work and excellent team player. I have always found him solving technical issues with great interest and innovation.He is a very valuable resource to the company and his expertise would mean a lot to the Team and the company.I’m sure he will scale new heights in the corporate world."</p>
                                        <a href="https://www.linkedin.com/in/mohit-choudhary/" class="testim-link">Via LinkedIn</a>
                                    </div>
                                </div>
                                <!--slick-item end -->                                   
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item">
                                        <div class="popup-avatar"><img src="<?php echo base_url(); ?>images/avatar/linkedin.png" alt=""></div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <div class="review-owner fl-wrap">Sarvesh Dwivedi  - <span>Sr. Software Engineer</span></div>
                                        <p> "Mohit is knowledgeable, dedicated and most of all helpful team member and an absolute pleasure to work with. Not only were his skills invaluable to the team his approachability and pleasant demeanor were a boost to team morale. Mohit is highly creative and a very easy-going person to work with. His expertise in multiple technologies helps the team to understand scenarios in an effective way. I would recommend him to anybody."</p>
                                        <a href="https://www.linkedin.com/in/mohit-choudhary/" class="testim-link">Via LinkedIn</a>
                                    </div>
                                </div>
                                <!--slick-item end -->                                   
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item">
                                        <div class="popup-avatar"><img src="<?php echo base_url(); ?>images/avatar/linkedin.png" alt=""></div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <div class="review-owner fl-wrap">Pawan Khadgi  - <span>Team Lead</span></div>
                                        <p> "Mohit is very passionate and has a great vision for his work. His focus keeps everything moving smoothly, he makes sure all the deadlines are met and makes sure that whatever project he is working on meets the highest standards. I highly recommend Mohit."</p>
                                        <a href="https://www.linkedin.com/in/mohit-choudhary/" class="testim-link">Via LinkedIn</a>
                                    </div>
                                </div>
                                <!--slick-item end --> 
                                 <!--slick-item -->
                                 <div class="slick-item">
                                    <div class="text-carousel-item">
                                        <div class="popup-avatar"><img src="<?php echo base_url(); ?>images/avatar/linkedin.png" alt=""></div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <div class="review-owner fl-wrap">Alok Dubey  - <span>Mobile Technical Lead</span></div>
                                        <p> "With his brilliant creative capabilities, Mohit is actually an artist while performing assigned tasks. His wonderful attitude towards his assignments and his management skills with timely completion make him a team player. I always have loved the thorough explanation he provides during team discussions. I would like to recommend Mohit as one of the sound technical personas worked with me."</p>
                                        <a href="https://www.linkedin.com/in/mohit-choudhary/" class="testim-link">Via LinkedIn</a>
                                    </div>
                                </div>
                                <!--slick-item end -->                                   
                            </div>
                        </div>
                        <!--slider-carousel-wrap end-->
                        <!-- client-list -->
                        <!-- <div class="fl-wrap">
                            <div class="container">
                                <ul class="client-list client-list-white">
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>images/clients/1.png" alt=""></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>images/clients/1.png" alt=""></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>images/clients/1.png" alt=""></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>images/clients/1.png" alt=""></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>images/clients/1.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="sec-lines"></div>
                    </section>
                    <!-- section end -->                    
                    <!-- section-->
                    <section class="dark-bg2 small-padding order-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>Ready To Collaborate?</h3>
                                </div>
                                <div class="col-md-4"><a href="#contact-me" class="btn flat-btn color-btn">Get In Touch</a> </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
                </div>
                <!-- Content end -->
                <!-- footer-->
                <div class="height-emulator fl-wrap" id="contact-me"></div>
                <footer class="main-footer fixed-footer">
                    <!--footer-inner--> 
                    <div class="footer-inner fl-wrap">
                        <div class="container">
                            <div class="partcile-dec" data-parcount="90"></div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="footer-title fl-wrap">
                                        <span>Contacts</span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="footer-header fl-wrap"><span>01.</span>Last Twitts</div>
                                    <div class="footer-box fl-wrap">
                                        <div class="twitter-swiper-container fl-wrap" id="twitts-container"></div>
                                        <a href="https://twitter.com/mohitc23" class="btn float-btn trsp-btn">Follow</a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="footer-header fl-wrap"><span>01.</span> Subscribe / Contacts</div>
                                    <!-- footer-box--> 
                                    <div class="footer-box fl-wrap">
                                        <p>Want to be notified when I start any activity. Just sign up and I'll notify you by email.</p>
                                        <div class="subcribe-form fl-wrap">
                                            <form id="subscribe" class="fl-wrap">
                                                <input class="enteremail" name="email" id="subscribe-email" placeholder="email" spellcheck="false" type="text">
                                                <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fal fa-paper-plane"></i> Send </button>
                                                <label for="subscribe-email" class="subscribe-message"></label>
                                            </form>
                                        </div>
                                        <!-- footer-contacts-->                    
                                        <div class="footer-contacts fl-wrap">
                                            <ul>
                                                <li><i class="fal fa-phone"></i><span>Phone :</span><a href="#">+919765961997</a></li>
                                                <li><i class="fal fa-envelope"></i><span>Email :</span><a href="#">mailmohitc@yahoo.in</a></li>
                                                <li><i class="fal fa-map-marker"></i><span>Address</span><a href="#">Pune, India</a></li>
                                            </ul>
                                        </div>
                                        <!-- footer end -->                                        
                                        <!-- footer-socilal -->            
                                        <div class="footer-socilal fl-wrap">
                                            <ul >
                                                <li><a href="https://www.facebook.com/mohitchoudhary23" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://www.instagram.com/mohitchoudhary__/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="https://twitter.com/mohitc23" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://www.linkedin.com/in/mohit-choudhary/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- footer-socilal end -->       
                                    </div>
                                    <!-- footer-box end--> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--footer-inne endr--> 
                    <!--subfooter--> 
                    <div class="subfooter fl-wrap">
                        <div class="container">
                            <!-- policy-box-->
                            <div class="policy-box">
                                <span>&#169; MohitChoudhary 2020  /  All rights reserved. </span>
                            </div>
                            <!-- policy-box end-->
                            <a href="#" class="to-top color-bg"><i class="fal fa-angle-up"></i><span></span></a>
                        </div>
                    </div>
                    <!--subfooter end--> 
                </footer>
                <!-- footer end-->
                <!-- contact-btn -->	
                <a class="contact-btn color-bg" href="#contact-me"><i class="fal fa-envelope"></i><span>Get in Touch</span></a>  
                <!-- contact-btn end -->	      
            </div>
            <!--   content end -->
            <!-- share-wrapper -->                       
            <div class="share-wrapper isShare">
                <div class="share-title"><span>Share</span></div>
                <div class="close-share soa"><span>Close</span><i class="fal fa-times"></i></div>
                <div class="share-inner soa">
                    <div class="share-container"></div>
                </div>
            </div>
            <!-- share-wrapper end -->	
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/plugins.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/scripts.js"></script>
    </body>
</html>