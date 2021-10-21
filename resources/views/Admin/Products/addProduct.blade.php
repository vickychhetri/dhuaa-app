@extends('Admin.layoutadmin')
@section('title','Admin Dashboard - Add New Product | Dhuaa.com')
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
        <h1 class="page-header">Add New Product </h1>
    </div>
</div>





<div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons"><i class="icon-edit"></i></div>
                <h5>Add New Product </h5>
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
                <form class="form-horizontal" action="/Admin/Add-Product-Info" method="post"
                    enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Name of the Product</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Product Name to display customer"
                                class="form-control" name="ProductName" />
                            <span style="color:red;">
                                @error('ProductName')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Company/Brand </label>

                        <div class="col-lg-8">
                            <select id="text4" class="form-control" name="CompanyId">
                                <option value="">-</option>
                                @foreach($companyData as $company)
                                <option value="{{$company->id}}"> {{$company->companyName}} </option>
                                @endforeach
                            </select>
                            <span style="color:red;">
                                @error('CompanyId')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Product Type </label>

                        <div class="col-lg-8">
                            <select id="text4" class="form-control" name="ProductTypeId">
                                <option value=""> - </option>
                                @foreach($categoryData as $catgory)
                                <option value="{{$catgory->id}}"> {{$catgory->category}} </option>
                                @endforeach
                            </select>
                            <span style="color:red;">
                                @error('ProductTypeId')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Category of the product </label>

                        <div class="col-lg-8">
                            <select id="text4" class="form-control" name="ProductCategoryId">
                                <option value=""> - </option>
                                @foreach($productTypeData as $productType)
                                <option value="{{$productType->id}}"> {{$productType->typeName}} </option>
                                @endforeach
                            </select>
                            <span style="color:red;">
                                @error('ProductCategoryId')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Image of the Product</label>

                        <div class="col-lg-8">
                            <input type="file" id="text1" class="form-control" name="ProductImage" />
                            <span style="color:red;">
                                @error('ProductImage')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Size(e.g Tyre)</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="size" class="form-control" name="Size" />
                            <span style="color:red;">
                                @error('Size')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Serv. Desc</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Serv. Desc" class="form-control"
                                name="ServDesc" />
                            <span style="color:red;">
                                @error('ServDesc')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">UTQG</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="utqg" class="form-control" name="Utqg" />
                            <span style="color:red;">
                                @error('Utqg')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Side Wall</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="sideWall" class="form-control" name="Sidewall" />
                            <span style="color:red;">
                                @error('Sidewall')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Max. Load</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="max load" class="form-control" name="Maxload" />
                            <span style="color:red;">
                                @error('Maxload')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">SKU</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="sku" class="form-control" name="Sku" />
                            <span style="color:red;">
                                @error('Sku')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Waranty Mi</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="warantyMi" class="form-control"
                                name="WarantyMi" />
                            <span style="color:red;">
                                @error('WarantyMi')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Speed Rating</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="speedRating" class="form-control"
                                name="SpeedRating" />
                            <span style="color:red;">
                                @error('SpeedRating')
                                {{$message}}
                                @enderror
                            </span>
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