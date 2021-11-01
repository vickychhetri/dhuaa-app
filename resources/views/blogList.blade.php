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
                    <h1>Blogs</h1>
                    <h4>View Latest News/Updates From Our Blog</h4>
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
                    <li><a href="#">Blog</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Blogs List </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-7 col-sm-7">
                <p>We are here to provide 100% services to our customers</p>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start blog content area-->
<section class="list-blog-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="list-blog-post">


                    @foreach($Blogs as $blog)
                    <!--Start single blog item-->
                    <div class="single-blog-post">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                <div class="date-and-img-box">
                                    <div class="date-box">
                                        <div class="date">
                                            <?php
                                           echo DateTime::createFromFormat ( "Y-m-d H:i:s", $blog->created_at )->format('d M Y, H:iA');;
                                           ?>
                                        </div>
                                        <!-- <div class="comment">
                                            <p><span class="flaticon-favorite-heart-button"></span>24</p>
                                        </div> -->
                                    </div>
                                    <div class="img-holder">
                                        <img src="/ArticleImages/{{$blog->thumbnail}}" alt="{{$blog->title}}" style="height: 220px;max-width:100%;">
                                        <div class="overlay">
                                            <div class="image-view">
                                                <div class="icon-holder">
                                                    <a href="/Blog/{{$blog->pageName}}"><span
                                                            class="flaticon-cross"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                                <div class="content-box clearfix">
                                    <ul>
                                        <li>Posted By <a href="/about-us">Dhuaa</a></li>
                                        <li><a href="/Blog/{{$blog->pageName}}"><span class="underline">Autobody</span>,
                                                Mechanic,{{$blog->keywords}}</a></li>

                                        <!-- <li> <span class="flaticon-speech-bubbles-comment-option"></span>
                                        <a href="">6
                                                Comments</a></li>
                                             -->

                                    </ul>
                                    <div class="content">
                                        <a href="/Blog/{{$blog->pageName}}">
                                            <h3>

                                                {{$blog->title}}

                                            </h3>
                                        </a>
                                        <p>

                                            {{$blog->description}}
                                        </p>
                                        <a class="readmore" href="/Blog/{{$blog->pageName}}">Read More<i
                                                aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog item-->
                    @endforeach


                    <div class="row">
                        <div class="col-md-12">
                            <div class="paginations text-center">

                                {!! $Blogs->links() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End blog content area-->


@endsection