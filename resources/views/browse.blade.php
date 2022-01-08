@extends('layout2')
@section('title','Dhuaa.com | 404 page not found')
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
                    <h1> Browse- {{env('APPLICATION_NAME')}}</h1>
                    <h4>Search Below Now</h4>
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
                    <li>404</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-7 col-sm-7">
                <p>We are here to provide 100% services to our customers</p>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start notfound content area-->
<section class="notfound-content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content text-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="Year" class="form-control" id="year">
                                    <option value="">Select Year</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="Make" class="form-control" id="make">
                                    <option value="">Select Make</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="Model" class="form-control" id="model">
                                    <option value="">Select Model</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="Size" class="form-control" id="size">
                                    <option value="">Select Size</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="search-form">
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--End notfound content area-->


@endsection