<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="{{ mix('/css/ported-sass.css') }}">

        <!-- Font -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="./fonter/font-awesome/css/font-awesome.css">

        <!-- Bower library -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="{{ mix('/js/main.js') }}"></script>

    </head>
    <body>
        @yield('content')
    </body>
</html>
