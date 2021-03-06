@extends('Admin.layoutadmin')
@section('title','Admin Dashboard - Add Product Category | Dhuaa.com')
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
        <h1 class="page-header">Add Product Category</h1>
    </div>
</div>





<div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons"><i class="icon-edit"></i></div>
                <h5>Add New Product Category </h5>
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
                <form class="form-horizontal" action="/Admin/Edit-ProductCategory" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4"> Category of the Product</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Type of the Product:  Tyre, Accessories"
                                class="form-control" name="TypeCategory"  value="{{$categorydata->category}}"/>
                             <input type="hidden" id="text1" placeholder="Type of the Product:  Tyre, Accessories"
                                class="form-control" name="id" value="{{$categorydata->id}}"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Description of the Product Type (if
                            any)</label>

                        <div class="col-lg-8">
                            <textarea id="text4" class="form-control" name="Description">{{$categorydata->description}}</textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="tags" class="control-label col-lg-4"> Save Record</label>

                        <div class="col-lg-8">
                            <input type="submit" class="btn btn-block btn-primary" />
                        </div>
                    </div>
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
                </form>
            </div>
        </div>
    </div>
</div>
<hr />

 
<x-Administrator.Product.Listcategory/>
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