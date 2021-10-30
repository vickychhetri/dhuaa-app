<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD-->

<head>

    <meta charset="UTF-8" />
    <title> @yield('title')</title>
    @section('metaheadercontainer')
    @show
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="Dhuaa Adfmin area" />
    <meta content="" name="vicky chhetri" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/theme.css" />
    <link rel="stylesheet" href="/assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="/assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL  STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    @section('headercontainer')
    @show
</head>
<!-- END  HEAD-->
<!-- BEGIN BODY-->

<body class="padTop53 ">

    <!-- MAIN WRAPPER -->
    <div id="wrap">


        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top bg-dark" style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                        <img src="/img/resources/adminlogo-removebg.png" alt="" />

                    </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">







                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        <div id="left">
            <div class="media user-media well-small">
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> {{session()->get('firstname') }} {{session()->get('lastname') }}</h5>
                    <ul class="list-unstyled user-info">

                        <li>
                            <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Active

                        </li>

                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">


                <li class="panel">
                    <a href="/dashboard">
                        <i class="icon-table"></i> Dashboard


                    </a>
                </li>

<!-- 

                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class=" icon-folder-open-alt"></i> Reviews

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>

                    </a>
                    <ul class="collapse" id="component-nav">
                        <li class=""><a href="#'"><i class="icon-angle-right"></i> Approved reviews </a></li>
                        <li class=""><a href="#'"><i class="icon-angle-right"></i> Inactive reviews </a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" 
                    data-target="#component-nav-2">
                        <i class=" icon-folder-open-alt"></i>   News

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>

                    </a>
                    <ul class="collapse" id="component-nav-2">
                        <li class=""><a href="#'"><i class="icon-angle-right"></i> Active News </a></li>
                        <li class=""><a href="#'"><i class="icon-angle-right"></i> Inactive News </a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" 
                    data-target="#component-nav-3">
                        <i class=" icon-folder-open-alt"></i>   Gallery

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>

                    </a>
                    <ul class="collapse" id="component-nav-3">
                        <li class=""><a href="#'"><i class="icon-angle-right"></i> Create Album </a></li>
                        <li class=""><a href="#'"><i class="icon-angle-right"></i> Upload Image </a></li>
                        <li class=""><a href="#'"><i class="icon-angle-right"></i> Delete Image </a></li>
                        <li class=""><a href="#'"><i class="icon-angle-right"></i> Delete Album </a></li>
                    </ul>
                </li> -->
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" 
                    data-target="#component-nav-4">
                        <i class=" icon-folder-open-alt"></i>   Products

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>

                    </a>
                    <ul class="collapse" id="component-nav-4">
                        
                        <li class=""><a href="/Admin/Add-ProductType"><i class="icon-angle-right"></i> Product Category </a></li>
                        <li class=""><a href="/Admin/Add-Company"><i class="icon-angle-right"></i> Add Company </a></li>
                        <li class=""><a href="/Admin/Add-ProductCategory"><i class="icon-angle-right"></i> Type Category </a></li>
                        <li class=""><a href="/Admin/Add-Product-Info"><i class="icon-angle-right"></i> Product Info </a></li>
                        <li class=""><a href="/Admin/List-Product-Info"><i class="icon-angle-right"></i> List Product </a></li>
                        <li class=""><a href="/Admin/List-Product-Info"><i class="icon-angle-right"></i> List InActive Product </a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" 
                    data-target="#component-nav-5">
                        <i class=" icon-folder-open-alt"></i>   Pages

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>

                    </a>
                    <ul class="collapse" id="component-nav-5">
                        
                        <li class=""><a href="/Admin/Add-New-Pages"><i class="icon-angle-right"></i> Add New Page </a></li>
                        <li class=""><a href="/Admin/List-Pages"><i class="icon-angle-right"></i> List Page </a></li>
                         
                    </ul>
                </li>
                <li><a href="#"> <i class=" icon-folder-open-alt"></i>Schedule Service </a></li>
                <li><a href="#"> <i class=" icon-folder-open-alt"></i>Contact List </a></li>
                <li><a href="#"> <i class=" icon-folder-open-alt"></i>Subscribe List </a></li>
                <li><a href="/noaccess"><i class="icon-signin"></i>Exit </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content" style="height:100%;">

            <div class="inner" >
                <div class="row">
                    <div class="col-lg-12">

                        @section('container')
                        @show




                    </div>
                </div>

                <hr />




            </div>




        </div>
        <!--END PAGE CONTENT -->


    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy; Vicky Chhetri &nbsp;2021 &nbsp;</p>
    </div>
    <!--END FOOTER -->
    <!-- GLOBAL SCRIPTS -->
    <script src="/assets/plugins/jquery-2.0.3.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
    @section('footercontainebelow')
     @show
</body>
<!-- END BODY-->

</html>