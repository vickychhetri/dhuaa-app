@extends('layout2')
@section('title',$pageInfo->title)
@section('metaheadercontainer')

@endsection

@section('headercontainer')
<style>
.breadcrumb-area2 {
    background: rgba(0, 0, 0, 0) url("/ArticleImages/{{$pageInfo->thumbnail}}") no-repeat center center;
    -webkit-background-size: cover;
    background-size: cover;
    padding-bottom: 97px;
    padding-top: 230px;
    margin-top: 0 !important;
}
</style>
@endsection
@section('container')
<!--Start breadcrumb area-->
<section class="breadcrumb-area2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center">
                    <h1> {{$pageInfo->title}} - {{env('APPLICATION_NAME')}}</h1>
                    <h4>Call to Know us Better</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<!--Start breadcrumb bottom area-->
<section class="breadcrumb-bottom-area" style="background: ;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-5 col-sm-5">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li> {{$pageInfo->title}}</li>
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
                            <h1> {{$pageInfo->title}} </h1>
                            <span class="decor"></span>
                        </div>

                        <?php 
                          $Datafrom_File=Storage::disk('local')->get("/longDescArticle/".$pageInfo->content);
                            if(isset($Datafrom_File)){
                                echo $Datafrom_File;
                            }    
                            ?>
                    </div>
                    <br />
                    <x-Small.Parts.Contactbutton />
                </div>
            </div>


        </div>
    </div>
</section>
<!--End services single area-->



@endsection