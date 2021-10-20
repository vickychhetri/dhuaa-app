@extends('layout2')
@section('title','Dhuaa.com | About Us')
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
                    <h1>About  {{env('APPLICATION_NAME')}}</h1>
                    <h4>Get to Know us Better</h4>
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
                    <li>About</li> 
                </ul>
            </div>
            <div class="col-lg-4 col-md-7 col-sm-7">
                <p>We are here to provide 100% services to our customers</p>
            </div>
        </div>
    </div>
</section>    
<!--End breadcrumb bottom area-->
<x-Customerarea/>

<x-Yearstab/>
<x-Factcounter/>
  

@endsection