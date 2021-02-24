@extends('layouts.backend')

@section('title', 'Posts')

@push('css')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->

@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a id="sample_editable_1_new" class="btn sbold green" data-toggle="modal" href="{{route('admin.post.create')}}"> Add New
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
                            <th> Title </th>
                            <th> Author </th>
                            <th> Status </th>
                            <th> Is Approved </th>
                            <th> Created at</th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $key => $post)
                        <tr>
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td>{{ $key+1 }}</td>
                            <td>{{ Illuminate\Support\Str::limit($post->title, '25') }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>
                                @if($post->status == true)
                                <div class="badge badge-success">Published</div>
                                @else
                                <div class="badge badge-danger">Unpublished</div>
                                @endif
                            </td>
                            <td>
                                @if($post->is_approved == true)
                                <div class="badge badge-success">Approved</div>
                                @else
                                <div class="badge badge-danger">Not Approved</div>
                                @endif
                            </td>
                            <td>{{ date("M d, Y", strtotime($post->created_at)) }}</td>
                            <td>
                                <a href="{{route('admin.post.show',$post->id)}}" title="Details" data-placement="top" data-toggle="tooltip" data-original-title="Details" class="btn btn-success btn-xs tooltips">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a href="{{route('admin.post.edit',$post->id)}}" title="Edit" data-placement="top" data-toggle="tooltip" data-original-title="Edit" class="btn btn-success btn-xs tooltips">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <a href="" onclick="event.preventDefault(); deletePost('{{ $post->id }}');" title="Delete Post" data-placement="top" data-toggle="tooltip" data-original-title="Delete Post" class="btn btn-danger btn-xs tooltips">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <form id="delete-post-{{ $post->id }}" action="{{route('admin.post.destroy',$post->id)}}" method="POST" style="display: none;">
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
<!-- /.modal for new category -->
<div class="modal fade bs-modal-sm" id="newCategory" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">New Category</h4>
            </div>
            <form role="form" action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Category Name</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left">
                                <i class="fa fa-tag"></i>
                            </span>
                            <input class="form-control input-circle-right" placeholder="Category Name" type="text" name="name">
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <img id="output" height="150px" width="150px" />
                    </div>

                    <div class="form-group">
                        <label>Select Image</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left">
                                <i class="fa fa-image"></i>
                            </span>
                            <input class="form-control input-circle-right" type="file" name="image" accept="image/*" onchange="loadFile(event)">
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
<!-- /.modal for new category -->
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
    function deletePost(id) {
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
                document.getElementById('delete-post-' + id).submit();
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
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

@endpush