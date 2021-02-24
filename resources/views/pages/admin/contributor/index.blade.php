@extends('layouts.backend')

@section('title', 'Users')

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
                                <a id="sample_editable_1_new" class="btn sbold green" data-toggle="modal" href="#newUser"> Add New
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
                            <th> Name </th>
                            <th> Role </th>
                            <th> Contact </th>
                            <th> Image </th>
                            <th> Posts </th>
                            <th> Comments </th>
                            <th> Joining </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contributors as $key=>$contributor)
                        <tr>
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> {{ $key+1 }}</td>
                            <td> {{ $contributor->name }} </td>
                            <td>
                                @if($contributor->role_id == 1)
                                <span class="badge badge-danger">Admin</span>
                                @elseif($contributor->role_id == 2)
                                <span class="badge badge-warning">Editor</span>
                                @else
                                <span class="badge badge-success">Author</span>
                                @endif
                            </td>
                            <td>
                                <span><i class="fa fa-envelope" style="color: #36c6d3; "></i> {{ $contributor->email }}</span><br />
                                <span><i class="fa fa-mobile" style="color: #508edb; "></i> &nbsp; {{ $contributor->mobile }}</span>
                            </td>

                            <td>
                                <a href="" onclick="event.preventDefault(); changeAvater({{ $contributor->id }});" title="Change Avater" data-placement="top" data-toggle="tooltip" data-original-title="Change Avater" class="tooltips">
                                    @if(!is_null($contributor->image))
                                    <img style='height: 60px; width:50px' src="{{url('assets/images/users')}}/{{$contributor->image}}" />
                                    @else
                                    <img style='height: 60px; width:50px' src="{{url('assets/images/demo.jpg')}}" />
                                    @endif
                                </a>
                            </td>
                            <td class="text-center"><a href="{{route('admin.contributor.posts',$contributor->id)}}" class="btn btn-primary mt-ladda-btn ladda-button">@if(!is_null($contributor->posts)){{ $contributor->posts->count() }}@endif</a></td>
                            <td class="text-center"><a href="{{route('admin.contributor.comments',$contributor->id)}}" class="btn purple mt-ladda-btn ladda-button">@if(!is_null($contributor->comments)){{ $contributor->comments->count() }}@endif</a></td>
                            <td>{{ date("M d, Y", strtotime($contributor->created_at)) }}</td>
                            <td>
                                <a href="{{route('admin.contributor.edit',$contributor->id)}}" onclick="event.preventDefault(); editContributor({{ $contributor->id }});" title="Edit" data-placement="top" data-toggle="tooltip" data-original-title="Edit" class="btn btn-success btn-xs tooltips">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>

                                <a href="" onclick="event.preventDefault(); deleteContributor({{ $contributor->id }});" title="Delete Contributor" data-placement="top" data-toggle="tooltip" data-original-title="Delete Contributor" class="btn btn-danger btn-xs tooltips">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                                <form id="delete-contributor-{{ $contributor->id }}" action="{{route('admin.contributor.destroy',$contributor->id)}}" method="POST" style="display: none;">
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
<!-- /.modal for update contributor -->
<div class="modal fade bs-modal-sm" id="editUser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Update User Info</h4>
            </div>
            <form role="form" action="{{route('admin.contributor.update',0)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div id="idField"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left">
                                <i class="fa fa-tag"></i>
                            </span>
                            <div id="nameField"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <div id="emailField"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left">
                                <i class="fa fa-mobile"></i>
                            </span>
                            <div id="mobileField"></div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn green">Update</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal for update contributor -->
<!-- /.modal for user avater -->
<div class="modal fade bs-modal-sm" id="changeAvater" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Change Avater</h4>
            </div>
            <form role="form" action="{{route('admin.avater.change')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div id="avaterIdField"></div>
                <div class="modal-body">
                    <div class="form-group text-center">
                        <div id="viewAvater"></div>
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
                    <button type="submit" name="submit" class="btn green">Change</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal for change user avater -->



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
    function deleteContributor(id) {
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
                document.getElementById('delete-contributor-' + id).submit();
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

    function editContributor(id) {
        var url = "{{url('/admin/contributor/edit')}}/" + id;
        $.ajax({
            url: url,
            method: "GET",
        }).done(function(data) {
            $('#editUser').modal('show');
            var $nameField = $('#nameField');
            $nameField.empty();
            $nameField.append('<input class="form-control input-circle-right" placeholder="Name" type="text" name="name" value="' + data.contributor.name + '"> ');

            var $emailField = $('#emailField');
            $emailField.empty();
            $emailField.append('<input class="form-control input-circle-right" placeholder="Email" type="text" name="email" value="' + data.contributor.email + '"> ');

            var $mobileField = $('#mobileField');
            $mobileField.empty();
            $mobileField.append('<input class="form-control input-circle-right" placeholder="Mobile" type="text" name="mobile" value="' + data.contributor.mobile + '"> ');

            var $idField = $('#idField');
            $idField.empty();
            $idField.append('<input class="form-control" type="hidden" name="id" value="' + data.contributor.id + '"> ');
        });
    }

    function changeAvater(id) {
        var url = "{{url('/admin/contributor/change-avater')}}/" + id;
        $.ajax({
            url: url,
            method: "GET",
        }).done(function(data) {

            $('#changeAvater').modal('show');
            var $viewAvater = $('#viewAvater');
            $viewAvater.empty();
            if (data.avater.image) {
                $viewAvater.append("<img src='{{asset('assets/images/users')}}/" + data.avater.image + "' id='output' height='160px' width='150px'/>");
            } else {
                $viewAvater.append("<img src='{{asset('assets/images/users/demo.jpg')}}' id='output' height='160px' width='150px'/>");
            }


            var $avaterIdField = $('#avaterIdField');
            $avaterIdField.empty();
            $avaterIdField.append('<input class="form-control" type="hidden" name="id" value="' + data.avater.id + '"> ');
        });
    }
</script>
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

@endpush