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
    <link rel="icon" type="image/png" sizes="192x192"  href="img/fav-icon/android-icon-192x192.png">
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
<!--Start header area-->
 <x-Header/>
<!--End header area--> 


@section('container')
@show
 
    
<!--Start footer bottom area-->
 <x-Footerarea/> 
<!--End footer bottom area-->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    
<!-- main jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<!-- appear -->
<script src="js/jquery.appear.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="js/validate.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- fancybox -->
<script src="js/jquery.fancybox.pack.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap script -->
<script src="js/maplace.js"></script>
<!-- gmap helper -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- Language change script -->
<script src="js/jquery.polyglot.language.switcher.js"></script>
    
<script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
    
<!-- revolution scripts -->
<script src="js/revolution.min.js"></script>
    
<!-- thm custom script -->
<script src="js/custom.js"></script>



</body>
</html>