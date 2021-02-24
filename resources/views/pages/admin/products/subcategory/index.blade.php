@extends('layouts.backend')

@section('title', 'Product Sub Categories')

@push('css')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->

@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <span>Product Sub Categories</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp;
                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                    <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a id="sample_editable_1_new" class="btn sbold green" data-toggle="modal" href="#newSubCategory"> Add New
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            <th> SL </th>
                            <th> Sub Category Name </th>
                            <th> Slug </th>
                            <th> Category Name </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productSubCategories as $key=>$category)
                        <tr>
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> {{ $key+1 }}</td>
                            <td> {{ $category->name }} </td>
                            <td> {{ $category->slug }} </td>
                            <td>
                                @if(!is_null($category->product_category))
                                {{$category->product_category->name}}
                                @endif
                            </td>
                            <td>
                                <a href="#" onclick="event.preventDefault(); updateProductSubCategory('{{ $category->id }}');" title="Edit" data-placement="top" data-toggle="tooltip" data-original-title="Edit" class="btn btn-success btn-xs tooltips">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <a href="" onclick="event.preventDefault(); deleteProductSubCategory('{{ $category->id }}');" title="Delete Category" data-placement="top" data-toggle="tooltip" data-original-title="Delete Category" class="btn btn-danger btn-xs tooltips">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                                <form id="delete-product-subcategory-{{ $category->id }}" action="{{route('admin.product.sub.category.destroy',$category->id)}}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.modal for new sub category -->
<div class="modal fade bs-modal-sm" id="newSubCategory" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">New Sub Category</h4>
            </div>
            <form role="form" action="{{route('admin.product.sub.category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Sub Category Name</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left">
                                <i class="fa fa-tag"></i>
                            </span>
                            <input class="form-control input-circle-right" placeholder="Category Name" type="text" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Select Category Name</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left">
                                <i class="fa fa-tag"></i>
                            </span>
                            <select name="category" class="form-control input-circle-right" required>
                                <option value="">Select Category</option>
                                @foreach($mainCategories as $mainCategory)
                                <option value="{{$mainCategory->id}}">{{$mainCategory->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn green">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal for new sub category -->

<!-- /.modal for update sub category -->
<div class="modal fade bs-modal-sm" id="updateSubCategory" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">New Sub Category</h4>
            </div>
            <form role="form" action="{{route('admin.product.sub.category.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="catId" id="catId"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Sub Category Name</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left">
                                <i class="fa fa-tag"></i>
                            </span>
                            <div class="subCategoryName" id="subCategoryName"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Select Category Name</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left">
                                <i class="fa fa-tag"></i>
                            </span>
                            <select name="category" id="category" class="form-control input-circle-right" required>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn green">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal for update sub category -->

@endsection
@push('js')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/ui-modals.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="{{asset('js/sweetalert2.min.js')}}"></script>
<script type="text/javascript">
    function updateProductSubCategory(id) {
        var url = "{{url('admin/product/sub/category/search')}}/" + id;
        $.ajax({
            url: url,
            method: "GET",
        }).done(function(data) {
            $('#updateSubCategory').modal('show');

            var $subCategoryName = $('#subCategoryName');
            $subCategoryName.empty();
            $subCategoryName.append('<input class="form-control input-circle-right" placeholder="Sub Category Name" type="text" name="name" value="' + data.productSubCategory["name"] + '" required>');

            var $category = $('#category');
            $category.empty();
            if (data.productSubCategory.product_category == null) {
                $category.append('<option value="">Select Category</option>');
                for (var i = 0; i < data.productCategories.length; i++) {
                    $category.append('<option value=' + data.productCategories[i]['id'] + '>' + data.productCategories[i]['name'] + '</option>');
                }
            } else {
                for (var i = 0; i < data.productCategories.length; i++) {
                    if (data.productCategories[i]['id'] == data.productSubCategory.product_category.id) {
                        $category.append('<option selected value=' + data.productCategories[i]['id'] + '>' + data.productCategories[i]['name'] + '</option>');
                    } else {
                        $category.append('<option value=' + data.productCategories[i]['id'] + '>' + data.productCategories[i]['name'] + '</option>');
                    }
                }
            }

            var $categoryId = $('#catId');
            $categoryId.empty();
            $categoryId.append('<input class="form-control input-circle-right" type="hidden" name="catId" value="' + data.productSubCategory["id"] + '">');
        });

    }

    function deleteProductSubCategory(id) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                document.getElementById('delete-product-subcategory-' + id).submit();
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }
</script>

@endpush