<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                font-size: 1.2rem;
            }

            h1 {
                font-size: 4rem;
            }

            p {
                font-size: 2rem;
            }

            .full-height {
                height: 100vh;
            }

            .half-height {
                height: 50vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .header {
                margin-bottom: 4rem;
            }

            .title {
                font-weight: normal;
                margin-bottom: 0;
            }

            .sub-title {
                margin-top: 0;
                margin-left: .5rem;
                text-align: left;
                font-size: 1.3rem;
                opacity: .6;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .block {
                height: 100%;
                float:left;
            }

            .block.half {
                width: 50%;
                overflow: hidden;
            }

            .image {
                height: 100%;
                width: auto;
            }
        </style>
    </head>
    <body>
        <div class="contact" style="position: fixed; right:1rem; top:20rem;">
            Contact
        </div>

        <div class="logo" style="position: fixed; left:3rem; top:3rem;">
            Logo
        </div>

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="header">
                    <h1 class="title">Title</h1>
                    <p class="sub-title">email</p>
                </div>


                <div class="links">
                    <a href="#about">About me</a>
                    <a href="#portfolio">Portfolio</a>
                    <a href="#location">Location</a>
                    <a href="#request">Request work</a>
                </div>
            </div>
        </div>

        <div class="full-height" id="about">
            <div class="flex-center block half">
                <img class="image" src="{{ asset('img/test.png') }}" alt="">
            </div>
            <div class="flex-center block half">
                Text
            </div>
        </div>
        <div class="flex-center full-height" id="portfolio">
            <div class="content">
                Portfolio
            </div>
        </div>
        <div class="flex-center full-height" id="location" style="background-color: rgba(0,0,0,.1)">
            <div class="content">
                Parallax scroll with map
            </div>
        </div>
        <div class="flex-center half-height" id="request">
            <div class="content">
                Send email section
            </div>
        </div>
    </body>
</html>
