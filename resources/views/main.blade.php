@extends('layouts.base')

@section('content')

    @include('initial')

    {{-- Landing page --}}
    <div id="content" class="hidden">

        <!-- Header -->
        <div class="landingpage m-transition" id="header">

            <!-- Logo -->
            <img class="logo" src="images/logo-dark.png" alt="Anton Bergenudd">

            <!-- Text -->
            <div class="flex-center landingpage_text-wrapper">
                <div class="landingpage-text">
                    <h1><span class="primaryColor-font">Anton</span> Bergenudd</h1>
                    <p>Web developer - </p>
                    <div id="malarkey-target" class="malarkey primaryColor-font"></div>
                </div>
            </div>


            <!-- Down button -->
           <a class="flex-center down" href="#about" id="arrow-down">
                <img src="./images/buttons/arrow-down.png" width="40" alt="" style="margin-top: 10px; margin-left: 1px;">
                <i class="glyphicon glyphicon-arrow-down primaryColor-font" style="font-size: 30pt; "></i>
            </a>

            <!-- Image -->
            <div class="cover-image"></div>

        </div>
    </div>
    {{-- ./ landing page --}}





    <!-- Progress bar -->
    <div class="progress-line primaryColor"></div>

    <!-- Navbar -->
    <nav class="navbar primaryColor">
      <a class="navbar-brand" id="navbar_logo">
        <div style="position: absolute; top:0; left:30px;">
          <div class="navbar-line-1"></div>
          <div class="navbar-line-2"></div>
          <div class="navbar-text" style="color: white; padding: 0; margin: 0;">nton</div>
        </div>
      </a>
      <ul class="navbar_links">
        <li><a href="#about" id="about_link">About me</a></li>
        <li><a href="#lang" id="lang_link">Coding</a></li>
        <li><a href="#res" id="res_link">Residence</a></li>
        <li><a href="#merits" id="merits_link">Portfolio</a></li>
        <li><a href="#contact" id="contact_link">Contact</a></li>
      </ul>
    </nav>


    <!-- section-about -->
    <div class="row solidColor">

        <div class="width-50 large-box flex-center" id="about">
            <article class="text-box" id="about-text">
                <h2>So <span class="primaryColor-font">{{ $name }}</span>.. Who am I?</h2>

                <p>My name is Anton Bergenudd and I am a passionate <span class="primaryColor-font">front-end developer</span> who is eager to expand my knowledge within web programming. I currently recite in a small town outside of Lund, Sweden. Everything that I know is <span class="primaryColor-font">self taught</span> and I have already had customers who did not notice the difference between my knowledge and a highly educated developer. I believe in constant learning and I can promise you great products with a lot of passion put in to it, without making your wallet as thin as it would be if you hired a firm. My highest priorities as a developer is to <span class="primaryColor-font">always</span> achieve proficient and fast results as well as making sure my customer is satisfied with the results. I am a big team player and thrive amongst other people with the same goals and interests as myself. If I sound suitable for your task, please contact me through the link on the bottom of the page. </p>
            </article>
        </div>
        <div class="width-50 large-box flex-center">
            <img class="border-bottom primaryColor-border" src="images/jag.jpg" width="400" alt="">
        </div>
    </div>

    <!-- Section-langs -->
    {{-- ng-controller="graphController" --}}
    <div class="row lang solidColor" id="lang">

        <div class="width-50 large-box flex-center" style="position:relative;">

            {{-- ng-mouseenter="showDescription = true" ng-mouseleave="showDescription = false" --}}
            <div class="graph-wrapper" style="position: relative;">

                {{-- ng-mouseenter="langDescription(bar.src);" ng-mouseleave="showDescription = false" --}}
                {{-- @foreach($bars as $bar)
                <div class="outer">
                    <div class="{{ $bar->class }}">
                        <img width="38" class="graph-image" style="position:absolute; bottom:0; z-index:9;" src="images/lang/{{ $bar->src }}.png" alt="">
                        <div class="inner primaryColor" data-progress="{{ $bar->knowledge}}">
                        </div>
                    </div>
                </div>
                @endforeach --}}
                <div style="position:absolute; bottom: 0; right:-20px; width: 400px; background-color: black; height: 2px;"></div>
            </div>

            {{-- <div style="position: absolute; text-align: center; bottom: 50px; left: 0; width: 100%;" ng-show="showDescription">
                <div style="width:100%; text-align:center; position:relative;" class="flex-center">
                    <img ng-src="images/lang/{{activeLanguage.src}}.png" width="50" height="50" style="float:left; margin-top:10px;" alt="">
                    <p style="float:left; font-size:18pt; margin-left:10px;"><span class="primaryColor-font">{{activeLanguage.name}}</span> <span style="font-size:11pt;">{{activeLanguage.shrt}}</span> {{activeLanguage.knowledge}} </p>
                </div>
            </div> --}}

        </div>


        <div class="width-50 large-box flex-center">
            <div class="text-box" id="lang-text">
                <h2>Learn more about my <span class="primaryColor-font">skills</span></h2>
                <p>To the left you see a diagram that shows what languages I know and how much I know about them in comparison to each other. I always strive to learn more and my <span class="primaryColor-font">goal</span> is to know them all. Even if I would to face something that is unfamiliar to me, I would not quit until I have solved the issue and <span class="primaryColor-font">perfected</span> your desired product. As you may see, I have mostly focused on front-end development extensions. Do <span class="primaryColor-font">not</span> let this fool you, I do have knowledge within back-end developing as well. I have created different databases in MySQL, PHP, Parse and Ajax. I also have a fully working server based in LAMP.</p>
            </div>
        </div>

    </div>

    <!-- Design-langs -->
    <div class="row lang solidColor" id="lang" ng-controller="graphController">

        <div class="width-50 large-box flex-center" style="position:relative;">
            <div class="text-box" id="lang-text-2">
                <h2>Learn more about my <span class="primaryColor-font">skills</span></h2>
                <p>I create all my website designs in<a href="http://www.sketchapp.com/" target="_blank" class="primaryColor-font">Sketch 3</a>. I fell in love with the simplicity of the program, as well as the very user friendly & clean environment. Ever since the first day I fired up sketch I've been completely in love with it. I do have some basic knowledge in <a href="http://www.adobe.com/se/products/photoshop.html" target="_blank" class="primaryColor-font">Photoshop</a>, however, those skills usually extends to image tweaking solely.</p>
            </div>
        </div>


        <div class="width-50 large-box flex-center">
            <div style="display:inline-block">
                <img src="images/design/PS.png" width="180" style="float:left;">
                <img src="images/design/sketch.png" width="180" style="float:left;">
            </div>
        </div>

    </div>

    <!-- section-residence -->
    <div class="row map large-box box-borders" id="res">
        <div class="width-75 flex-center" id="map2">
            <div class="text-box map-text-box" id="residence-text">
                <h2 style="padding: 3%; padding-bottom:0;">From <span class="primaryColor-font">where</span> am I?</h2>
                <p style="padding: 3%; padding-top:0;">I currently reside in a small, quiet village outside of Lund, Sweden. This is where I was born and raised with my three sisters and loving parents. I do have both a car and drivers license so commuting or meetings somewhere other than near me  is no problem. I recently studied for a year in Kansas, USA and I have a big desire to eventually be able to travel and see other parts of the world. I believe that different cultures and people tribute to personal growth and, although it may sound farfetched, make me a better developer with a more colored palette.</p>
            </div>
        </div>

        <div class="width-25"></div>

    </div>

    <!-- section-merits -->
    <div class="row solidColor">
        <div class="width-50 s-box flex-center">
            <h1 style="font-size:60pt; padding-bottom:0; margin-bottom:0;">My <span class="primaryColor-font">Creations</span>!</h1>
        </div>
    </div>

    <div class="row merits solidColor" id="merits" style="flex-wrap:wrap;">

        <div class="width-66 large-box flex-center">

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

        <div class="width-33 large-box flex-center" id="right_phone_box" style="position: relative;">

            <img src="images/merit/medabort-image.png" alt="" width="350">

            <!-- SAVE -->
                <!-- <div id="phone_trigger" style="height:32vw; margin-top: 100px;"></div>

                <img style="height:32vw; max-height:400px; right:10vw; top:100px; position: absolute;" src="images/merit/iphone1.png" id="phone" alt="">

                <img style="height:32vw; max-height:400px; position:absolute; visibility: hidden; transition: all 0.2s linear; right: 100px; z-index: 1;" src="images/merit/iphone3.png" id="image-1" alt="">
                <img style="height:32vw; max-height:400px; position:absolute; visibility: hidden; transition: all 0.2s linear; right: 100px; z-index: 1;" src="images/merit/iphone2.png" id="image-2" alt=""> -->
            <!--  -->
        </div>



        <!-- All of it -->
        <div class="width-66 large-box flex-center">

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

        <div class="width-33 large-box flex-center" id="right_phone_box" style="position: relative;">
            <img src="./images/canweplay/prototype.jpg" width="300">
        </div>


    </div>


    <div class="row">
        <div class="width-100 large-box lang-box flex-center" id="order_project">
            <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.2)">
                <div id="option-menu" style="height: 100%; width: 100%;">
                    <div class="width-50 flex-center order_project_box">
                        <h1 style="display: inline-block; color: white;">Where is your <span class="primaryColor-font">idea</span> targeted?</h1>
                    </div>
                    <div class="width-50 flex-center order_project_box">
                        <div class="test-btn flex-center primaryColor" style="color:white;" id="app">
                            <i class="fa fa-mobile" style="font-size: 110pt;" id="icon-app"></i>
                            <h1 style="font-size: 0;">App</h1>
                        </div>
                        <div class="test-btn flex-center moveleft primaryColor" style="color:white;" id="desktop">
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

        <div class="width-50 medium-box flex-center">
            <img src="./images/business_card/visitkort-skugga.png" width="350">
        </div>
        <div class="width-50 flex-center medium-box">
            <div class="text-box" id="latest-news-text">
                <h1>Latest news!</h1>

                <p>I <span class="primaryColor-font">finally</span> ordered my stack of business cards. Bought 100 of them for around $50 at <a href="http://www.vistaprint.se/vp/welcomeback.aspx?xnav=welcome&rd=1" target="_blank" class="primaryColor-font">Vistaprint</a>. I am super satisfied with how the turned out, and now I can start making a name for myself! I would highly recommend using <a href="http://www.vistaprint.se/vp/welcomeback.aspx?xnav=welcome&rd=1" target="_blank" class="primaryColor-font">Vistaprint</a> for ordering your own business cards, they're fairly cheap and profesionall</p>
            </div>
        </div>

        <div style="width:90%; height:1px; opacity:0.3; position:absolute; left:5%; bottom:0;" class="primaryColor"></div>
    </div>

    <!-- section-checkin -->
    {{-- <div class="row" id="checkin">

        <div class="col-xs-12 large-box flex-center solidColor" style="flex-center-direction: column; padding: 0; margin:0;">
            <div style="height: 250px; width: 100%; position: relative;">
                <div class="col-xs-6 flex-center" style="height: 100%;"><h1>Leave a message!</h1></div>
                <div class="col-xs-6 flex-center" style="height: 100%;">
                    <form id="project-form" method="post" style="width: 80%; display: inline-block;" ng-submit="sendMessage()">
                        <textarea class="form-control" id="message" placeholder="Say something nice :)" style="resize: none; height: 75px; border-radius: 0;"></textarea>
                        <button type="submit" style="width: 100%; height: 50px; color: white; border: none;" class="primaryColor" id="message_btn">Send</button>
                    </form>
                </div>
            </div>
            <div id="map" style=" width: 100%; height: 350px;"></div>
        </div>
    </div> --}}

    <div class="row solidColor">
        <div class="width-100 flex-center primaryColor small-box">
            <img style="position: absolute; left:50px; top:25px; z-index: 5;" src="images/logo-dark-light.png" width="50" alt="">
            <div style="position: absolute; right:50px; top:25px; z-index: 5; color: white;">2015-2016</div>
            <div style="margin-top:60px;">
                <h1 style="color: white; font-size: 20pt; float:left;">Head back up!</h1>
                <a class="medium flex-center button" href="#header" ng-cloak id="arrow-up" style="float:left;">
                    <i class="glyphicon glyphicon-arrow-up" style="font-size: 30pt; color: white;"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- section-contact -->
    <div class="row" id="contact">

        <div class="width-100 small-box flex-center primaryColor" style="flex-center-direction: column; position: relative;">
            <div style="width: 40%; min-width: 300px; display:flex-center;  font-size: 20pt; height:75px;">
                <div class="flex-center" style="flex-center:1;" id="linkedin-trigger">
                    <a href="https://www.linkedin.com/in/anton-bergenudd-713238109?trk=nav_responsive_tab_profile_pic" target="_blank" style="color: white;"><i class="fa fa-linkedin" id="linkedin"></i>
                    <i class="fa fa-linkedin-square" style="font-size: 22pt; display: none;" id="linkedin-square"></i></a>
                </div>
                <div class="flex-center" style="flex-center:1;" id="twitter-trigger">
                    <a href="https://twitter.com/a_bergenudd" target="_blank" style="color: white;"><i class="fa fa-twitter" id="twitter"></i>
                    <i class="fa fa-twitter-square" style="font-size: 22pt; display: none;" id="twitter-square"></i></a>
                </div>
                <div class="flex-center" style="flex-center:1;" id="facebook-trigger">
                    <a href="https://www.facebook.com/anton.bergenudd?ref=bookmarks" target="_blank" style="color: white;"><i class="fa fa-facebook" id="facebook"></i>
                    <i class="fa fa-facebook-square" style="font-size: 22pt; display: none;" id="facebook-square"></i></a>
                </div>
                <div class="flex-center" style="flex-center:1;" id="codepen-trigger">
                    <a href="http://codepen.io/CodingAnton/" target="_blank" style="color: white;"><i class="fa fa-codepen" id="codepen"></i></a>
                </div>
            </div>
            <p style="position: absolute; left:0; right:0; margin: auto; text-align: center; bottom: 40px; color: white;">© 2016 Anton Bergenudd. All Rights Reserved</p>

        </div>
    </div>
@endsection
