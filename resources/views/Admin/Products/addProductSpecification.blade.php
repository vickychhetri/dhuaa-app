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
        <h1 class="page-header">Add Product Addtional Specification</h1>
    </div>
</div>





<div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons"><i class="icon-edit"></i></div>
                <h5>Add New Product Addtional Specification </h5>

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
                @if(isset($spcifications))
                <!-- Edit Product -->
                <form class="form-horizontal" action="/Admin/Product/EAddtional-Specification" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4"> Diameter</label>
                        <div class="col-lg-8">
                            <input type="hidden" id="text1" class="form-control" 
                            name="productIdentification"
                                value="{{$productId}}" />
                            <input type="text" id="text1" placeholder="Diameter"
                             class="form-control" name="diameter" value="{{$spcifications->diameter}}" />
                            <span style="color:red;">
                                @error('diameter')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Max Inflation </label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Max Inflation" class="form-control"
                                name="maxInflation" value="{{$spcifications->maxInflation}}"/>
                            <span style="color:red;">
                                @error('maxInflation')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Max LoadDual</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Max LoadDual" 
                            class="form-control"
                                name="maxLoadDual" value="{{$spcifications->maxLoadDual}}"/>
                            <span style="color:red;">
                                @error('maxLoadDual')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Revs Per Mile</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Revs Per Mile" 
                            class="form-control"
                                name="revsPerMile"  value="{{$spcifications->revsPerMile}}"/>
                            <span style="color:red;">
                                @error('revsPerMile')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Tread Depth</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Tread Depth" 
                            class="form-control"
                                name="treadDepth"  value="{{$spcifications->treadDepth}}" />
                            <span style="color:red;">
                                @error('treadDepth')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Weight</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Weight"
                             class="form-control" name="weight" 
                             value="{{$spcifications->weight}}" />
                            <span style="color:red;">
                                @error('weight')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Ply Rating</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Ply Rating" 
                            class="form-control"
                                name="plyRating"  value="{{$spcifications->plyRating}}" />
                            <span style="color:red;">
                                @error('plyRating')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Rim Width</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Rim Width" 
                            class="form-control"
                                name="rimWidth" value="{{$spcifications->rimWidth}}"/>
                            <span style="color:red;">
                                @error('rimWidth')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Section Width </label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Section Width" 
                            class="form-control"
                                name="sectionWidth"  value="{{$spcifications->sectionWidth}}"/>
                            <span style="color:red;">
                                @error('sectionWidth')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Tread Width </label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Tread Width" 
                            class="form-control"
                                name="treadWidth" value="{{$spcifications->treadWidth}}" />
                            <span style="color:red;">
                                @error('treadWidth')
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
                @else
                <!-- Add Product  -->
                <form class="form-horizontal" action="/Admin/Product/AAddtional-Specification" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4"> Diameter</label>
                        <div class="col-lg-8">
                            <input type="hidden" id="text1" class="form-control" name="productIdentification"
                                value="{{$productId}}" />
                            <input type="text" id="text1" placeholder="Diameter" class="form-control" name="diameter" />
                            <span style="color:red;">
                                @error('diameter')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Max Inflation </label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Max Inflation" class="form-control"
                                name="maxInflation" />
                            <span style="color:red;">
                                @error('maxInflation')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Max LoadDual</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Max LoadDual" class="form-control"
                                name="maxLoadDual" />
                            <span style="color:red;">
                                @error('maxLoadDual')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Revs Per Mile</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Revs Per Mile" class="form-control"
                                name="revsPerMile" />
                            <span style="color:red;">
                                @error('revsPerMile')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Tread Depth</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Tread Depth" class="form-control"
                                name="treadDepth" />
                            <span style="color:red;">
                                @error('treadDepth')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Weight</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Weight" class="form-control" name="weight" />
                            <span style="color:red;">
                                @error('weight')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Ply Rating</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Ply Rating" class="form-control"
                                name="plyRating" />
                            <span style="color:red;">
                                @error('plyRating')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Rim Width</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Rim Width" class="form-control"
                                name="rimWidth" />
                            <span style="color:red;">
                                @error('rimWidth')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Section Width </label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Section Width" class="form-control"
                                name="sectionWidth" />
                            <span style="color:red;">
                                @error('sectionWidth')
                                {{$message}}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Tread Width </label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Tread Width" class="form-control"
                                name="treadWidth" />
                            <span style="color:red;">
                                @error('treadWidth')
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
                @endif
            </div>
        </div>
    </div>
</div>
<hr />

<x-Administrator.Product.Listspecification/>
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