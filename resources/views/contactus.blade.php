@extends('layout2')
@section('title','Dhuaa.com |Contact Us')
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
                    <h1>Contact us - {{env('APPLICATION_NAME')}}</h1>
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
                    <li>Contact us</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-7 col-sm-7">
                <p>We are here to provide 100% services to our customers</p>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb bottom area-->


<!--Start contact area-->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="getin-touch">
                    <div class="sec-title text-left">
                        <h1>Get In Touch</h1>
                        <span class="decor"></span>
                    </div>
                    <p>
                        {{env('APPLICATION_NAME')}} is {{env('APPLICATION_LOCATION')}} City’s premier service & repair facility for
                        truck owners who desire the fastest turnaround time, the best rates
                        and one-on-one personal service. Getting you
                        back on the road fast, affordable and with the job done right is our specialty.

                    </p>
                    <ul class="contact-info">
                        <li class="address">
                            <div class="icon-holder">
                                <span class="flaticon-map"></span>
                            </div>
                            <div class="content">
                                <h4>Address :</h4>
                                <p>501/7, Guru Nanak Pura West,<br>Jalandhar, Punjab 144001 India</p>
                            </div>
                        </li>
                        <li class="email">
                            <div class="icon-holder">
                                <span class="flaticon-note"></span>
                            </div>
                            <div class="content">
                                <h4>Ask Anything Here :</h4>
                                <p>support@dhuaa.com</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-telephone"></span>
                            </div>
                            <div class="content">
                                <h4>Call Us:</h4>
                                <p>+91 (97791) 390-67</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <div class="sec-title text-left">
                        <h1>Send Message Us</h1>
                        <span class="decor"></span>
                    </div>
                    <form action="/Contact-us" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Your Name*">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" placeholder="Email Address*">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="subject" placeholder="Subject*">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Message*"></textarea>

                                <!-- Login failed  message-->
                                @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                                @endif
                                <!-- Login failed  message-->
                                @if (session('Error'))
                                <div class="alert alert-danger">
                                    {{ session('Error') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End contact area-->





@endsection