<header class="main-header stricky">
    <!--Start header top-->
    <div class="header-top">
        <div class="container">
            <div class="header-top-content">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                        <div class="header-contact-info">
                            <ul>
                                <li><i class="flaticon-telephone"></i>Customer Support: +123-456-7890</li>
                                <li><i class="flaticon-interface-1"></i>Support@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                        <!-- <div id="polyglotLanguageSwitcher">
                                <span class="flaticon-gear"></span>
                                <form action="#">
                                    <select id="polyglot-language-options">
                                        <option id="en" value="en" selected>En</option>
                                        <option id="fr" value="fr">Fr</option>
                                        <option id="de" value="de">De</option>
                                        <option id="it" value="it">It</option>
                                        <option id="es" value="es">Es</option>
                                    </select>
                                </form>
                            </div> -->

                        <!-- <div class="cart-btn">
                                <a class="theme-btn" href="cart.html"><span class="flaticon-icon-1393"></span><span class="item-count">cart<span>(0)</span></span></a>
                            </div> -->
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                                <li><a href="#"><i class="flaticon-google-plus-logo"></i></a></li>
                                <li><a href="#"><i class="flaticon-linkedin-logo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End header top-->

    <nav class="header-lower navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.html"><img src="/img/resources/logo.png" alt="Awesome LOgo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <div class="appoinment navbar-right">
                    <a href="/Schedule-service">Schedule Service</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="index.html">Shop <span class="decor"></span></a></li>
                    <li class="dropdown">
                        <a href="about-us.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="false" aria-expanded="true">About <span class="decor"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/404">Service Manager</a></li>
                            <li><a href="/about-us">About Us</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="false" aria-expanded="true">Services <span class="decor"></span></a>
                        <ul class="dropdown-menu">
                             <li><a href="/Roadside-Services-Onsite-Repair">Roadside Services,Mobile Repair & Onsite
                                    Repair</a></li>
                            <li><a href="/Truck-Trailer-Tire-Repair">Truck, Trailer & Tire Repair</a></li>
                            <li><a href="/New-Used-Recap-Tyre-Available">New, Used & Recap Tyre Available</a></li>
                            @foreach($services as $service)
                            <li><a href="/Service/{{$service->pageName}}"> {{$service->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/404">Reviews <span class="decor"></span></a>

                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="false" aria-expanded="true">Resources <span class="decor"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($resources as $resource)
                            <li><a href="/Resource/{{$resource->pageName}}"> {{$resource->title}}</a></li>
                            @endforeach
                            <li><a href="/Resources"> Show More </a></li>
                        </ul>

                    </li>
                  
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="false" aria-expanded="true">Blog <span class="decor"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($blogs as $blog)
                            <li><a href="/Blog/{{$blog->pageName}}"> {{$blog->title}}</a></li>
                            @endforeach
                            <li><a href="/Blogs"> Show More </a></li>
                        </ul>
                    </li>



                    <li><a href="/Contact-us">Contact <span class="decor"></span></a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</header>