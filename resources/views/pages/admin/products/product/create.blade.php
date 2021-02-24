@extends('layouts.backend')

@section('title', 'Create Product')

@push('css')
<link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

<style>
    input[type="file"] {
        display: block;
    }

    .imageThumb {
        max-height: 120px;
        border: 1px solid;
        padding: 1px;
        cursor: pointer;
    }

    .pip {
        display: inline-block;
        margin: 10px 10px 0 0;
    }

    .remove {
        display: block;
        border: 1px solid black;
        color: black;
        text-align: center;
        cursor: pointer;
    }

    .remove:hover {
        background: white;
        color: red;
    }
</style>
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <span>Products</span>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>New Product</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">Product's Basic</div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label class="control-label">Product Name <span class="text-danger"> * </span></label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
                                    <label for="multi-append" class="control-label">Select Category <span class="text-danger"> * </span></label>
                                    <div class="input-group select2-bootstrap-append">
                                        <select name="category" id="category" class="form-control select2 select2-hidden-accessible" required>
                                            <option value="">Select Category</option>
                                            @foreach($productCategories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">{{ $errors->first('categories') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Select Sub Category</label>
                                    <select name="sub_categories[]" id="multi-append" class="form-control select2 select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Size</label>
                                    <input type="text" name="size" class="form-control" placeholder="Size">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Price</label>
                                    <input type="text" name="price" class="form-control" placeholder="Price">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Unit</label>
                                    <input type="text" name="unit" class="form-control" placeholder="Unit">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="mt-checkbox mt-checkbox-outline"> Available
                                        <input value="1" name="available" type="checkbox">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="portlet box purple">
            <div class="portlet-title">
                <div class="caption">Featured Image</div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group text-center">
                        <img id="output" height="180px" width="100%" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Featured Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*" onchange="loadFile(event)">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="portlet box purple">
            <div class="portlet-title">
                <div class="caption">Support Images</div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                        <div class="field" align="left">
                            <label>Upload support images</label>
                            <input type="file" id="files" name="support_images[]" multiple />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Product's Description</div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                        <textarea name="description" class="wysihtml5 form-control" rows="10" required="required"></textarea>
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="btn-set pull-right">
                        <button type="submit" name="submit" class="btn green">Submit</button>
                        <a href="{{route('admin.project.index')}}" type="button" class="btn blue">Cancel</a>
                    </div>

                </div>
            </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
</div>
</div>
@endsection

@push('js')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/pages/scripts/form-samples.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/components-select2.min.js')}}" type="text/javascript"></script>


<script src="{{asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>

<script>
    $('#category').change(function() {
        var category = $('#category').val();
        var url = "{{url('/admin/product/subcategory/search')}}/" + category;

        $.ajax({
            url: url,
            method: "GET",
        }).done(function(data) {
            var $subCategory = $('#multi-append');
            $subCategory.empty();
            $subCategory.append('<option value="" > Select Sub Categories</option>');
            for (var i = 0; i < data.subCategories.length; i++) {
                $subCategory.append('<option value=' + data.subCategories[i]['id'] + '>' + data.subCategories[i]['name'] + '</option>');
            }
        });
    });
</script>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>


<script>
    if (window.File && window.FileList && window.FileReader) {
        $("#files").on("change", function(e) {
            var files = e.target.files,
                filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.onload = (function(e) {
                    var file = e.target;
                    $("<span class=\"pip\">" +
                        "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                        "<br/><span class=\"remove\">Remove image</span>" +
                        "</span>").insertAfter("#files");
                    $(".remove").click(function() {
                        $(this).parent(".pip").remove();
                    });
                });
                fileReader.readAsDataURL(f);
            }
            console.log(files);
        });
    } else {
        alert("Your browser doesn't support to File API")
    }
</script>
@endpush