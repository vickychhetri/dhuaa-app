@extends('layout2')
@section('title','Dhuaa.com | 24/7 EMERGENCY ROADSIDE ASSISTANCE')
@section('metaheadercontainer')

@endsection

@section('headercontainer')
@endsection
@section('container')
<!--Start breadcrumb area-->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center">
                    <h1> Roadside Services, Onsite Repair - {{env('APPLICATION_NAME')}}</h1>
                    <h4>Call to Know us Better</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<!--Start breadcrumb bottom area-->
<section class="breadcrumb-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-5 col-sm-5">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Roadside Services, Onsite Repair</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-7 col-sm-7">
                <p>We are here to provide 100% services to our customers</p>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start services single area-->
<section class="services-single-area" style="padding-top: 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
                <div class="services-single-content">
                    <div class="content">
                        <div class="sec-title text-left">
                            <h1>Roadside Services, Onsite Repair</h1>
                            <span class="decor"></span>
                        </div>
                        <p class="top-text">

                            Onsite Truck & Equipment Repair is a leading truck repair
                            shop in
                            {{env('APPLICATION_LOCATION')}}


                            that proudly serves truck and trailer owners
                            with high-quality, emergency roadside repair services.
                            With a team of trained and experienced mobile technicians,
                            we are committed to make our clients happy by being there quickly when they are in need.


                        </p>
                        <p>



                        </p>
                        <div class="caption">
                            <p>Our mission is 100% customer satisfaction. Every time. Our technicians stay updated
                                with the latest improvements in the automotive technology
                                to deliver quick and quality repairs. </p>
                            <h5>- Aman Dhillon (Service Manager)</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="working-topics-video-preview">
                                <!-- <a href="https://www.youtube.com/watch?v=9hglQGw1fNw" class="video-fancybox"> -->
                                <img src="img/services-single-v1/working-topics-video-preview.jpg" alt="">
                                <!-- </a> -->
                            </div>
                        </div>
                        <div class="col-lg-5 working-topics-content">
                            <div class="sec-title text-left">
                                <h2>24/7 EMERGENCY ROADSIDE ASSISTANCE</h2>
                                <span class="decor"></span>
                            </div>
                            <p>We are a family owned and operated company. We specialize in servicing
                                light, medium, and heavy
                                trucks in {{env('APPLICATION_LOCATION')}} . If you can’t come to us,
                                just call our Emergency Hotline and let our team of mechanics
                                come to you.</p>
                            <ul>
                                <li><span class="flaticon-mark-1"></span>Air System Inspection
                                </li>
                                <li><span class="flaticon-mark-1"></span>Brakes: Air & Hydraulic
                                </li>
                                <li><span class="flaticon-mark-1"></span>Cooling System Repairs
                                </li>
                                <li><span class="flaticon-mark-1"></span> Engine Diagnostics</li>
                                <li><span class="flaticon-mark-1"></span> Wheel End Service </li>

                                <li><span class="flaticon-mark-1"></span>Mobile Trailer Repair
                                </li>
                                <li><span class="flaticon-mark-1"></span> Tire Replacement</li>
                                <li><span class="flaticon-mark-1"></span> Heater Trip Inspection </li>
                            </ul>
                        </div>
                    </div>






                    <div class="row">
                        <div class="col-md-12">
                            <div class="pricing-plan-area">
                                <div class="sec-title text-left">
                                    <h2>CUSTOMER SATISFACTION IS OUR BIGGEST PRIORITY</h2>
                                    <span class="decor"></span>
                                </div>
                                <div class="pricing-plan">
                                    <p>

                                        We do our best efforts to repair your trailer at a low cost, without proving you much of inconvenience. Our goal is to get you back on the road with minimal downtime. With fully equipped mobile repair trucks and vans,
                                        our experts are capable of performing simple to complex on-site repairs and replacements.
                                    </p>
                                    <b> Some of the things that make us unique are: </b>
                                    <ul>
                                        <li><span class="flaticon-mark-2"> Professional & family owned company.</li>
                                        <li><span class="flaticon-mark-2"> 24 hours roadside assistance service. </li>
                                        <li><span class="flaticon-mark-2"> Fully equipped fleet of repair vans.</li>
                                        <li><span class="flaticon-mark-2"> Full service, one stop truck repair shop. </li>
                                        
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <x-Small.Parts.Contactbutton />
                </div>
            </div>


        </div>
    </div>
</section>
<!--End services single area-->



@endsection