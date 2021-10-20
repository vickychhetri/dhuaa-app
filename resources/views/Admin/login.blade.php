@extends('Admin.layoutadmin2')
@section('title','Admin Login | Dhuaa.com')
@section('metaheadercontainer')
@endsection
@section('headercontainer')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    .loginpage{
        background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
    }
  
</style>
@endsection
@section('container')
<div class="loginpage" style="height:600px;">


<div class="container">
    <div style="background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);border-radius: 50px 50px;">
        <center>
            <img src="/img/resources/logo.png" class="img-responsive" style="height:100px;" />
        </center>
    </div>


</div>

<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
                <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
            </div>

            <div style="padding-top:30px" class="panel-body">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal" role="form" action="/adminLogin" method="post">
                    {{csrf_field()}}
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password"   placeholder="password">
                     
                    </div>
               
                    <div>
                        <!-- Login failed  message-->
                        @if (session('message'))
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
                        @endif
                    </div>



                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                            <input type="checkbox" onclick="myFunction()" class="checkbox">Show Password
                            </label>
                        </div>
                    </div>


                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">

                            <button id="btn-fblogin" href="#" class="btn btn-primary">Login </button>

                        </div>
                    </div>


                </form>



            </div>
        </div>
    </div>
</div>


</div>
@endsection