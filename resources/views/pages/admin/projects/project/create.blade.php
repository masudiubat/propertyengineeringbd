@extends('layouts.backend')

@section('title', 'Create Project')

@push('css')
<link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css" />
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
                    <span>Projects</span>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>New Project</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Project's Basic</div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{route('admin.project.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label class="control-label">Project Name <span class="text-danger"> * </span></label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
                                    <label for="multi-append" class="control-label">Select Categories <span class="text-danger"> * </span></label>
                                    <div class="input-group select2-bootstrap-append">
                                        <select name="categories[]" id="multi-append" class="form-control select2 select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" required>
                                            @foreach($projectCategories as $category)
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
                                    <label class="control-label">Client Name</label>
                                    <input type="text" name="client_name" class="form-control" placeholder="Client Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Client Mobile</label>
                                    <input type="text" name="client_mobile" class="form-control" placeholder="Client Mobile">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Project Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Land Area (Square Feet)</label>
                                    <input type="text" name="area" class="form-control" placeholder="Area">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Cost (BDT)</label>
                                    <input type="text" name="cost" class="form-control" placeholder="Cost">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <input type="text" name="status" class="form-control" placeholder="Status">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Start Date</label>
                                    <div class="input-group">
                                        <input type="text" name="start_date" id="start_date" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="Start Date">
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                                <i class="fa fa-calendar"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="control-label">Finish Date</label>
                                    <div class="input-group">
                                        <input type="text" name="finish_date" id="finish_date" class="form-control" data-date-format="yyyy-mm-dd" placeholder="Finish Date">
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                                <i class="fa fa-calendar"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="mt-checkbox mt-checkbox-outline"> Featured
                                        <input value="1" name="featured" type="checkbox">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="mt-checkbox mt-checkbox-outline"> Published
                                        <input value="1" name="published" type="checkbox">
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
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">Project's Description</div>
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
<script src="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/clockface/js/clockface.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        var start_date = $('input[name="start_date"]'); //our date input has the name "date"
        start_date.datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true,
        })
        var finish_date = $('input[name="finish_date"]'); //our date input has the name "date"
        finish_date.datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true,
        })

    })
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