@extends('Admin.layoutadmin')
@section('title','Admin Dashboard - Add Product Category | Dhuaa.com')
@section('metaheadercontainer')
@endsection
@section('headercontainer')
<!-- PAGE LEVEL STYLES -->
<link href="/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<!-- END PAGE LEVEL  STYLES -->
<!-- END PAGE LEVEL  STYLES -->
<script src="https://cdn.tiny.cloud/1/5bbhlc3k3lmxp3vgmgt8pa034des9qnkfr1jdcb2ws588n5l/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
@endsection
@section('container')


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Features and Benifits</h1>
    </div>
</div>





<div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons"><i class="icon-edit"></i></div>
                <h5>Add New Features and Benifits</h5>
                <div class="toolbar">
                    <ul class="nav">

                        <li>
                            <a class="accordion-toggle minimize-box" data-toggle="collapse"
                             href="#div-1">
                                <i class="icon-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </header>
            <div id="div-1" class="accordion-body collapse in body">
            @if(isset($features))
            <form class="form-horizontal" action="/Admin/Product/FeaturesBenifits"
                 method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="text3" class="control-label col-lg-4"> Features </label>

                        <div class="col-lg-8">
                            <input type="hidden" name="productId" value="{{$features->productId}}"/>
                                <textarea id="text3" class="form-control"
                                 name="Features" >{{$features->features}}</textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="text6" class="control-label col-lg-4">  Benifits </label>

                        <div class="col-lg-8">
                            <textarea  id="text6" class="form-control" 
                            name="Benifits">{{$features->benefits}}</textarea>
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
                <form class="form-horizontal" action="/Admin/Product/FeaturesBenifits"
                 method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4"> Features </label>

                        <div class="col-lg-8">
                            <input type="hidden" name="productId" value="{{$productId}}"/>
                                <textarea id="text1" class="form-control"
                                 name="Features" ></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="text4" class="control-label col-lg-4">  Benifits </label>

                        <div class="col-lg-8">
                            <textarea  id="text4" class="form-control" 
                            name="Benifits"></textarea>
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
<!-- END PAGE LEVEL SCRIPTS -->
<script src="https://cdn.tiny.cloud/1/5bbhlc3k3lmxp3vgmgt8pa034des9qnkfr1jdcb2ws588n5l/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: 'textarea',
    plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    image_class_list: [
            {title: 'img-responsive', value: 'img-responsive'},
            ],
            height: 500,
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
            },
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/upload',
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            }
        });
</script>
@endsection