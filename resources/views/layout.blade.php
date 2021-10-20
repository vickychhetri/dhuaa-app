<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> @yield('title')</title>
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('metaheadercontainer')
    @show
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/fav-icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/fav-icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/fav-icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/fav-icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/fav-icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/fav-icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/fav-icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/fav-icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav-icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/fav-icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav-icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/fav-icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav-icon/favicon-16x16.png">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- CUSTOM CSS FILE -->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="css/skin/color1.css">

    @section('headercontainer')
    @show
</head>

<body>
    <x-Header />
    @section('container')
    @show

    <!--Start footer bottom area-->
    <x-Footerarea />
    <!--End footer bottom area-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <!--Start footer bottom script area-->
    <x-Footerscript />
    <!--End footer bottom script area-->



</body>

</html>