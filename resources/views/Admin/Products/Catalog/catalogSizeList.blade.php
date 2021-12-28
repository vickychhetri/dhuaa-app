@extends('Admin.layoutadmin')
@section('title','Admin Dashboard - Add Model Option Size| Dhuaa.com')

@section('metaheadercontainer')
@endsection

@section('headercontainer')
<!-- PAGE LEVEL STYLES -->
<link href="/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<!-- END PAGE LEVEL  STYLES -->
@endsection

@section('container')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Catalog</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons"><i class="icon-edit"></i></div>
                <h5>Listing Product in Catalog {{$SIZE}}</h5>
                <div class="toolbar">
                    <ul class="nav">
                        <li>
                            <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#div-1">
                                <i class="icon-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </header>
            <div id="div-1" class="accordion-body collapse in body">
                <div class="row">
                    <div class="col-md-6">

                        <table class="table">
                            <tr>
                                <th> Product Not Listed in Catalog</th>
                            </tr>
                            @foreach($notListedProducts as $product)
                            <tr>
                                <td>
                                    <div style="border: 1px solid black;background-color:#eaf0e6;padding:5px;">
                                        <span> {{$product->productName}} </span>
                                        <a href="#" class="btn btn-success" style="float: right;"> Move</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th> Product Listed Under Catalog {{$SIZE}}</th>
                            </tr>
                            @foreach($listedProducts as $productNot)
                            <tr>
                                <div style="border: 1px solid black;background-color:#f9fceb;padding:5px;">
                                    <span> {{$productNot->productName}} </span>
                                    <a href="#" class="btn btn-danger" style="float: right;"> Remove</a>

                                </div>
                            </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr />

@endsection
@section('footercontainebelow')
<!-- PAGE LEVEL SCRIPTS -->
<script src="/assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- PAGE LEVEL SCRIPTS -->
<script src="/assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
<script>
$(document).ready(function() {
    $('#dataTables-example').dataTable();
});
</script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection