<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=0.6"> -->
    <meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=1.0, user-scalable=no" />

    <!-- Twitter card: Summary Card with Large Image -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AntonBergenudd">
    <meta name="twitter:creator" content="@a_bergenudd">
    <meta name="twitter:title" content="Anton Bergenudd's online CV">
    <meta name="twitter:description" content="Easy cooperation to simple crafts. Anton Bergenudd is a Swedish 20 years old web developer.">
    <meta name="twitter:image" content="../images/background/bakgrund2.jpg">

    <!-- Facebook Open Graph Protocol -->
    <meta property="og:description" content="Easy cooperation to simple crafts. Anton Bergenudd is a Swedish 20 years old web developer." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Anton Bergenudds's online CV" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="http://antonbergenudd.se/" />
    <meta property="og:image" content="../images/background/bakgrund2.jpg" />

    <!-- Windows 8/Windows phone -->
    <meta name="application-name" content="Anton Bergenudd's online CV"/>
    <meta name="msapplication-TileColor" content="#424242"/>
    <meta name="msapplication-square70x70logo" content="tiny.png"/>
    <meta name="msapplication-square150x150logo" content="square.png"/>
    <meta name="msapplication-wide310x150logo" content="wide.png"/>
    <meta name="msapplication-square310x310logo" content="large.png"/>

    <!-- Apple iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Statusbar appearance -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon" href="../images/background/bakgrund2.jpg">







    <title>| Portfolio</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="images/icon.png">

    <!-- CSS -->

    <!-- <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="css/main.min.css">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./fonter/font-awesome/css/font-awesome.css">

    <!-- Bower library -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-rc.2/angular.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script> 
    <script type="text/javascript" src="scripts/malarkey.min.js"></script> 

</head>
<body ng-app="webApp" ng-controller="initController" ng-init="initColor()">
<div class="container-fluid" role="main" ng-cloak>

    <div id="loading" class="flex loading_page"><h1>Loading..</h1></div>

    <!-- Slide 1 -->
    <div class="overlay" id="overlay" ng-cloak style="transition: all 0.5s linear;">

        <div class="flex" id="overlay-content-1" style="position:relative; transition:all 1s ease-out; width: 100%; height: 100%;">
            <div style="width:350px; transition: all 1s linear; position: absolute; left:0; right:0; margin:auto; top:30%;" id="animation_wrapper">

                <div class="test">
                    <div class="line1"></div>
                    <div class="line2"></div>
                </div>
                  
                <div id="text">
                    <p>nton</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div id="text-stage-1" style="z-index: 999;">
                <a ng-click="skipIntro()" href="#"style="position: absolute; top:30px; right:30px; color: white; z-index: 9999;">Skip Intro</a>
                <div class="flex" style=" text-align:center; height: 50%; width: 100%; position: absolute; top: 0; left:0;">
                    <div style="display: inline-block; color: white;">
                        <h1 style="font-size: 40pt;">Hey there!</h1>
                        <h3 style="font-size: 20pt;">Welcome to my portfolio!</h3>
                        <p ng-show="!toggle_paragraph">Let me start off by asking, what is your name?</p>
                        <p ng-show="toggle_paragraph">Pleasure to meet you {{name}}</p>
                    </div> 
                </div>
                <div class="flex" style="height: 50%; width: 100%;position: absolute; bottom:0; left:0; color: white;">
                    <form ng-show="!toggle_paragraph" ng-submit="toggle_paragraph = true; toggle_colors();" style="width: 250px;">
                        <input ng-model="name" type="text" class="name" style="width: 70%;">
                        <button class="flex overlay_button" type="submit" style="border:none; font-size: 14pt; width: 50px;">OK</button>
                    </form>

                    <!-- Slide 3 -->
                    <div id="show-colors" style="display:none; color: white; text-align: center;">
                        <p>Perhaps you've got a favourite color?</p>
                        <ul class="color-list">
                            <li class="color_btn" ng-repeat="color in colors" ng-click="init_counting(color.color);" ng-style="{'background-color': color.color}"></li>
                        </ul>
                    </div>
                </div>
            </div>
        
        </div>

        <!-- Slide 4 ( Last ) -->
        <div class="welcome-page" id="welcome-page">
            <p>Great! We're ready to go</p>
            <h1 style="font-size:50pt; padding: 15px;">Welcome in!</h1>
        </div>

    </div>

    <div id="content" class="content">
        
    <!-- Header -->
    <div class="col-xs-12 landing-page m-transition" id="header" ng-cloak>
           
        <!-- Logo + certification -->
        <img style="position: absolute; right:50px; top:25px; z-index: 5;" src="./images/logo-dark.png" width="150" alt="">

        <!-- Text wrapper -->
        <div class="col-md-5"></div>
        <div class="col-md-7 flex landingPage_text_wrapper">
            <div class="landingPage_header">
                <h1><span class="primaryColor-font">Anton</span> Bergenudd</h1> <p style="float: left; margin-left: 5px;">Web developer - </p> <div class="malarkey primaryColor-font" style="float: left; line-height: 30px;font-size: 20pt; margin-left: 5px;"></div>
            </div>
            

            <div class="landingPage_body">
                <!-- Word Carousel -->
               <!--  <p>
                    <span style="font-weight: bold; font-size: 17pt;">Welcome</span><br> to the portfolio of a front-end developer from Sweden. I'm glad you stopped by {{name}}, take your time to look through my portfolio!

                    Right now my biggest focus is to assure my client both <span class="primaryColor-font" id="word_holder_1" style="transition: all 0.2s linear;">expertise</span> and <span class="primaryColor-font" id="word_holder_2" style="transition: all 0.2s linear;">effort</span>

                </p> -->
                <!-- <p style="float: left; font-size: 20pt;">I assure </p> -->
                <!-- <div class="malarkey primaryColor-font" style="float: left; line-height: 59px;font-size: 40pt;"></div> -->
            </div>
        </div>
            

        <!-- Down button -->
       <!--  <a class="medium flex down_btn" href="#about" ng-cloak id="arrow-down">
            <img src="./images/buttons/arrow-down.png" width="40" alt="" style="margin-top: 10px; margin-left: 1px;">
            <i class="glyphicon glyphicon-arrow-down primaryColor-font" style="font-size: 30pt; "></i>
        </a> -->

        <!-- Image -->
        <div class="cover-image"></div>

    </div>
    </div>





    <!-- Progress bar -->
    <div class="progress-line primaryColor"></div>





    <!-- Navbar -->
    <nav class="navbar navbar-default main-nav primaryColor" id="navbar" role="navigation" style="z-index: 10;">
      <div class="container-fluid" style="padding: 0px 30px;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="navbar_logo">
            <div id="main_logo" style="position: absolute; top:0; left:30px;">
              <div class="navbar-line-1"></div>
              <div class="navbar-line-2"></div>
              <div class="navbar-text" style="color: white; padding: 0; margin: 0;">nton</div>
            </div>
          </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right navbar_links" id="navbar">
            <li><a href="#about" class="about_link">About me</a></li>
            <li><a href="#lang" class="lang_link">Coding</a></li>
            <li><a href="#res" class="res_link">Residence</a></li>
            <li><a href="#merits" class="merits_link">Portfolio</a></li>
            <li><a href="#contact" class="contact_link">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <!-- section-about -->
    <div class="row solidColor">

        <div class="col-md-7 large-box flex" id="about">
            <article class="text-box" id="about-text">
                <h2>So <span class="primaryColor-font">{{name}}</span>.. Who am I?</h2>

                <p> My name is Anton Bergenudd and I am a passionate <span class="primaryColor-font">front-end developer</span> who is eager to expand my knowledge within web programming. I currently recite in a small town outside of Lund, Sweden. Everything that I know is <span class="primaryColor-font">self taught</span> and I have already had customers who did not notice the difference between my knowledge and a highly educated developer. I believe in constant learning and I can promise you great products with a lot of passion put in to it, without making your wallet as thin as it would be if you hired a firm. My highest priorities as a developer is to <span class="primaryColor-font">always</span> achieve proficient and fast results as well as making sure my customer is satisfied with the results. I am a big team player and thrive amongst other people with the same goals and interests as myself. If I sound suitable for your task, please contact me through the link on the bottom of the page. </p>
            </article>
        </div>
        <div class="col-md-5 large-box flex">
            <img class="border-bottom primaryColor-border" src="./images/jag.jpg" width="400" alt="">    
        </div>
    </div>

    <!-- Section-langs -->
    <div class="row lang solidColor" id="lang" ng-controller="graphController">

        <div class="col-md-6 large-box flex" style="position:relative;">

            <div class="graph-wrapper" ng-mouseenter="showDescription = true" ng-mouseleave="showDescription = false" style="position: relative;">
                <div class="outer" ng-repeat="bar in bars">
                    <div ng-class="bar.class">
                        <img width="38" class="graph-image" style="position:absolute; bottom:0; z-index:9;" ng-src="images/lang/{{bar.src}}.png" ng-mouseenter="langDescription(bar.src);" ng-mouseleave="showDescription = false" alt="">
                        <div class="inner primaryColor" data-progress="{{bar.knowledge}}">
                        </div>
                    </div>
                </div>
                <div style="position:absolute; bottom: 0; right:-20px; width: 400px; background-color: black; height: 2px;"></div>
            </div>

            <div style="position: absolute; text-align: center; bottom: 50px; left: 0; width: 100%;" ng-show="showDescription">
                <div style="width:100%; text-align:center; position:relative;" class="flex">
                    <img ng-src="images/lang/{{activeLanguage.src}}.png" width="50" height="50" style="float:left; margin-top:10px;" alt="">
                    <p style="float:left; font-size:18pt; margin-left:10px;"><span class="primaryColor-font">{{activeLanguage.name}}</span> <span style="font-size:11pt;">{{activeLanguage.shrt}}</span> {{activeLanguage.knowledge}} </p>
                </div>
            </div>

        </div>

       
        <div class="col-md-6 large-box flex">
            <div class="text-box" id="lang-text">
                <h2>Learn more about my <span class="primaryColor-font">skills</span></h2>
                <p>To the left you see a diagram that shows what languages I know and how much I know about them in comparison to each other. I always strive to learn more and my <span class="primaryColor-font">goal</span> is to know them all. Even if I would to face something that is unfamiliar to me, I would not quit until I have solved the issue and <span class="primaryColor-font">perfected</span> your desired product. As you may see, I have mostly focused on front-end development extensions. Do <span class="primaryColor-font">not</span> let this fool you, I do have knowledge within back-end developing as well. I have created different databases in MySQL, PHP, Parse and Ajax. I also have a fully working server based in LAMP.</p>
            </div>
        </div>

    </div>

    <!-- Design-langs -->
    <div class="row lang solidColor" id="lang" ng-controller="graphController">

        <div class="col-md-6 large-box flex" style="position:relative;">
            <div class="text-box" id="lang-text-2">
                <h2>Learn more about my <span class="primaryColor-font">skills</span></h2>
                <p>I create all my website designs in<a href="http://www.sketchapp.com/" target="_blank" class="primaryColor-font">Sketch 3</a>. I fell in love with the simplicity of the program, as well as the very user friendly & clean environment. Ever since the first day I fired up sketch I've been completely in love with it. I do have some basic knowledge in <a href="http://www.adobe.com/se/products/photoshop.html" target="_blank" class="primaryColor-font">Photoshop</a>, however, those skills usually extends to image tweaking solely.</p>
            </div>
        </div>

       
        <div class="col-md-6 large-box flex">
            <div style="display:inline-block">
                <img src="images/design/PS.png" width="180" style="float:left;">
                <img src="images/design/sketch.png" width="180" style="float:left;">
            </div>
        </div>

    </div>

    <!-- section-residence -->
    <div class="row box-borders" id="res">
        <div class="col-md-10 large-box flex" id="map2">
            <div class="text-box map-text-box" id="residence-text">
                <h2 style="padding: 3%; padding-bottom:0;">From <span class="primaryColor-font">where</span> am I?</h2>
                <p style="padding: 3%; padding-top:0;">I currently reside in a small, quiet village outside of Lund, Sweden. This is where I was born and raised with my three sisters and loving parents. I do have both a car and drivers license so commuting or meetings somewhere other than near me  is no problem. I recently studied for a year in Kansas, USA and I have a big desire to eventually be able to travel and see other parts of the world. I believe that different cultures and people tribute to personal growth and, although it may sound farfetched, make me a better developer with a more colored palette.</p>
            </div>
        </div>
        
        <div class="col-md-2"></div>
        <div class="lang-box"></div>

    </div>

    <!-- section-merits -->
    <div class="row solidColor">
        <div class="col-md-7 s-box flex">
            <h1 style="font-size:60pt; padding-bottom:0; margin-bottom:0;">My <span class="primaryColor-font">Creations</span>!</h1>
        </div>
    </div>

    <div class="row merits solidColor" id="merits">

        <div class="col-md-7 large-box flex">

            <div class="text-box" id="medabort-text">
                <header style="float: left; width: 100%;">
                    <img height="50" style="float: left;" src="images/merit/icon.png" alt="">
                    <h1 style="float: left; padding-left:20px; margin-top:8px;">Medabort</h1>
                </header>

                <div style="float: left; width: 100%;">
                    <p>This is <span class="primaryColor-font">the first</span> application I have created for a customer. The customer was a medical company who in collaboration with the swedish women clinic in Malmö asked for a platform for distributing information to the public. It is designed as a phonegap app which consists of a variety of functions to control various effects. The application was created as a <span class="primaryColor-font">informative app</span> which means that the main focus was on the content and not on the design or the level of programming. This gave me as a programmer more time to focus on the details and to embed new effects. It is compatible with Android +4.0.0 and iOs +7.0.0 and it is built upon HTML, CSS, JS, and AngularJS/Mobile.</p>
                </div>

                <footer style="float:left; width:100%;">
                    <a href="https://geo.itunes.apple.com/se/app/medabort/id1012995584?mt=8" target="_blank">
                        <img width="100" style="float:left; " src="images/merit/iphone.png" alt="">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.alkaloida.medabon" target="_blank">
                        <img width="100" style="float:left; margin-left:10px;" src="images/merit/android.png" alt="">
                    </a>
                </footer>
            </div>

        </div>

        <div class="col-md-5 large-box flex" id="right_phone_box" style="position: relative;">

            <img src="images/merit/medabort-image.png" alt="" width="350">

            <!-- SAVE -->
                <!-- <div id="phone_trigger" style="height:32vw; margin-top: 100px;"></div>

                <img style="height:32vw; max-height:400px; right:10vw; top:100px; position: absolute;" src="images/merit/iphone1.png" id="phone" alt="">

                <img style="height:32vw; max-height:400px; position:absolute; visibility: hidden; transition: all 0.2s linear; right: 100px; z-index: 1;" src="images/merit/iphone3.png" id="image-1" alt="">
                <img style="height:32vw; max-height:400px; position:absolute; visibility: hidden; transition: all 0.2s linear; right: 100px; z-index: 1;" src="images/merit/iphone2.png" id="image-2" alt=""> -->
            <!--  -->
        </div>



        <!-- All of it -->
        <div class="col-md-7 large-box flex">

            <div class="text-box" id="allofit-text">
                <header style="float: left; width: 100%;">
                    <img height="50" style="float: left;" src="images/canweplay/icon.png" alt="">
                    <h1 style="float: left; padding-left:20px; margin-top:8px;">Can We Play?</h1>
                </header>

                <div style="float: left; width: 100%;">
                    <p>When you don't know when or who to play with, <span class="primaryColor-font"><a href="https://play.google.com/store/apps/details?id=com.forgottenapplications.canweplay" target="_blank">Can We Play?</a></span> is the solution. This app I created on my trainee program in cooperation with Sony Mobile Communications. It is available on the google play store, hopefully we will have a release on iOS soon. It is created with the <a href="http://ionicframework.com/" target="_blank" class="primaryColor-font">Ionic Framework</a>, which means that is a hybrid app. I've used the cloud database <a href="https://www.firebase.com/" target="_blank" class="primaryColor-font">Firebase</a> which is a very simple JS implementation for simple back-end solutions.</p>
                </div>

                <footer style="float:left; width:100%;">
                    <a href="https://play.google.com/store/apps/details?id=com.forgottenapplications.canweplay" target="_blank">
                        <img width="100" style="float:left;" src="images/merit/android.png" alt="">
                    </a>
                </footer>
            </div>

        </div>

        <div class="col-md-5 large-box flex" id="right_phone_box" style="position: relative;">
            <img src="./images/canweplay/prototype.jpg" width="300">
        </div>


    </div>


    <div class="row" >
        <div class="col-xs-12 large-box lang-box flex" id="order_project">
            <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.2)">
                <div id="option-menu" style="height: 100%; width: 100%;">
                    <div class="col-md-5 flex order_project_box">
                        <h1 style="display: inline-block; color: white;">Where is your <span class="primaryColor-font">idea</span> targeted?</h1>
                    </div>
                    <div class="col-md-7 flex order_project_box">
                        <div class="test-btn flex primaryColor" style="color:white;" id="app">
                            <i class="fa fa-mobile" style="font-size: 110pt;" id="icon-app"></i>
                            <h1 style="font-size: 0;">App</h1>
                        </div>
                        <div class="test-btn flex moveleft primaryColor" style="color:white;" id="desktop">
                            <i class="fa fa-desktop" style="font-size: 70pt;" id="icon-desktop"></i>
                            <h1 style="font-size: 0;">Website</h1>
                        </div>
                    </div>
                </div>
                
                <div class="row" id="form" style="display: none;">
                  <div class="col-xs-10 col-xs-offset-1">
                    <h1 id="option" class="primaryColor-font"></h1>

                    <form id="project-form" method="post">
                      <div class="form-group">
                        <label for="name" style="color:white;">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your full name">
                      </div>
                      <div class="form-group">
                        <label for="email" style="color:white;">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="example@email.com">
                      </div>
                      <div class="form-group">
                        <label for="body" style="color:white;">Description</label><span class="pull-right">0/500</span>
                        <textarea class="form-control" id="body" placeholder="Describe the project you wish to be created" style="resize: none; height: 200px;"></textarea>
                      </div>
                      <div class="form-group">
                        <button type="submit" style="width: 100px; height: 60px; color: white; border: none; border-radius: 5px;" class="primaryColor">Send</button>
                        <button type="button"style="width: 100px; height: 60px; color: black; border: none; border-radius: 5px; background-color: white;" id="return">Back</button>
                      </div>
                    </form>

                  </div>
                </div>
            </div>

            <div class="req-box"></div>
        </div>
    </div>

    <div class="row solidColor" style="position:relative;">
        <div style="position:absolute; right:20px; top:20px; opacity:0.5;" class="primaryColor-font"><p>05-09-2016</p></div>

        <div class="col-md-6 medium-box flex">
            <img src="./images/business_card/visitkort-skugga.png" width="350">
        </div>
        <div class="col-md-6 flex medium-box">
            <div class="text-box" id="latest-news-text">
                <h1>Latest news!</h1>

                <p>I <span class="primaryColor-font">finally</span> ordered my stack of business cards. Bought 100 of them for around $50 at <a href="http://www.vistaprint.se/vp/welcomeback.aspx?xnav=welcome&rd=1" target="_blank" class="primaryColor-font">Vistaprint</a>. I am super satisfied with how the turned out, and now I can start making a name for myself! I would highly recommend using <a href="http://www.vistaprint.se/vp/welcomeback.aspx?xnav=welcome&rd=1" target="_blank" class="primaryColor-font">Vistaprint</a> for ordering your own business cards, they're fairly cheap and profesionall</p>
            </div>
        </div>

        <div style="width:90%; height:1px; opacity:0.3; position:absolute; left:5%; bottom:0;" class="primaryColor"></div>
    </div>  

    <!-- section-checkin -->
    <div class="row" id="checkin">

        <div class="col-xs-12 large-box flex solidColor" style="flex-direction: column; padding: 0; margin:0;">
            <div style="height: 250px; width: 100%; position: relative;">
                <div class="col-xs-6 flex" style="height: 100%;"><h1>Leave a message!</h1></div>
                <div class="col-xs-6 flex" style="height: 100%;">
                    <form id="project-form" method="post" style="width: 80%; display: inline-block;" ng-submit="sendMessage()">
                        <textarea class="form-control" id="message" placeholder="Say something nice :)" style="resize: none; height: 75px; border-radius: 0;"></textarea>
                        <button type="submit" style="width: 100%; height: 50px; color: white; border: none;" class="primaryColor" id="message_btn">Send</button>
                    </form>
                </div>
            </div>
            <div id="map" style=" width: 100%; height: 350px;"></div>
        </div>
    </div>

    <div class="row solidColor">
        <div class="col-xs-12 flex primaryColor small-box">
            <img style="position: absolute; left:50px; top:25px; z-index: 5;" src="./images/logo-dark-light.png" width="50" alt="">
            <div style="position: absolute; right:50px; top:25px; z-index: 5; color: white;">2015-2016</div>
            <div style="margin-top:60px;">
                <h1 style="color: white; font-size: 20pt; float:left;">Head back up!</h1>
                <a class="medium flex button" href="#header" ng-cloak id="arrow-up" style="float:left;">
                    <i class="glyphicon glyphicon-arrow-up" style="font-size: 30pt; color: white;"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- section-contact -->
    <div class="row" id="contact">

        <div class="col-xs-12 small-box flex primaryColor" style="flex-direction: column; position: relative;">
            <div style="width: 40%; min-width: 300px; display:flex;  font-size: 20pt; height:75px;">
                <div class="flex" style="flex:1;" id="linkedin-trigger">
                    <a href="https://www.linkedin.com/in/anton-bergenudd-713238109?trk=nav_responsive_tab_profile_pic" target="_blank" style="color: white;"><i class="fa fa-linkedin" id="linkedin"></i>
                    <i class="fa fa-linkedin-square" style="font-size: 22pt; display: none;" id="linkedin-square"></i></a>
                </div> 
                <div class="flex" style="flex:1;" id="twitter-trigger">
                    <a href="https://twitter.com/a_bergenudd" target="_blank" style="color: white;"><i class="fa fa-twitter" id="twitter"></i>
                    <i class="fa fa-twitter-square" style="font-size: 22pt; display: none;" id="twitter-square"></i></a>
                </div> 
                <div class="flex" style="flex:1;" id="facebook-trigger">
                    <a href="https://www.facebook.com/anton.bergenudd?ref=bookmarks" target="_blank" style="color: white;"><i class="fa fa-facebook" id="facebook"></i>
                    <i class="fa fa-facebook-square" style="font-size: 22pt; display: none;" id="facebook-square"></i></a>
                </div> 
                <div class="flex" style="flex:1;" id="codepen-trigger">
                    <a href="http://codepen.io/CodingAnton/" target="_blank" style="color: white;"><i class="fa fa-codepen" id="codepen"></i></a>
                </div> 
            </div>          
            <p style="position: absolute; left:0; right:0; margin: auto; text-align: center; bottom: 40px; color: white;">© 2016 Anton Bergenudd. All Rights Reserved</p>
            
        </div>
    </div>


    </div> <!-- ./container-fluid -->

      <!-- Google analytics -->
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-74872148-1', 'auto');
        ga('send', 'pageview');

      </script>

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtuwUeK7l3G-AZPNNC4qV8dgxWFeA8fvk"></script>

      
    <!-- Scripts -->

    <!-- Production -->
    <script type="text/javascript" src="angular/angular.js"></script> 
    <script type="text/javascript" src="scripts/scripts.min.js"></script>

    <!-- App -->
    <!-- <script type="text/javascript" src="angular/app.js"></script>
    <script type="text/javascript" src="angular/controllers/init_controller.js"></script> 
    <script type="text/javascript" src="angular/controllers/graph_controller.js"></script> 
    <script type="text/javascript" src="angular/directives/app_directives.js"></script>
    <script type="text/javascript" src="scripts/animations.js"></script>
    <script type="text/javascript" src="scripts/smoothscroll.js"></script> -->

</div> <!-- ./ Container-fluid -->
</html>