@extends('layouts.backend')

@section('title', 'My Profile')

@push('css')
<!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/pages/css/profile-2.min.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endpush

@section('content')
<!-- END PAGE HEADER-->
<div class="profile">
        <div class="tabbable-line tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_1_1" data-toggle="tab"> Overview </a>
                </li>
                                
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1_1">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="list-unstyled profile-nav">
                                <li>
                                    <img src="{{asset('assets/images/users/'.Auth::user()->image )}}" height="800px" width="737px" class="img-responsive pic-bordered" alt="Profile" />
                                    <a class="profile-edit" data-toggle="modal" href="#changeImage"> change </a>
                                    
                                </li>
                                <li>
                                    <a href="javascript:;"> Posts
                                        <span> {{ $user->posts->count() }} </span>    
                                    </a>
                                        
                                </li>
                                <li>
                                    <a href="javascript:;"> Comments
                                        <span> {{ $user->comments->count() }} </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Views
                                        <span> 3 </span>
                                    </a>
                                </li>                                
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-8 profile-info">
                                    <h1 class="font-green sbold uppercase">{{ Auth::user()->name }}</h1>
                                    <small>
                                        @if( Auth::user()->role_id == '1')
                                            Admin
                                        @elseif(Auth::user()->role_id == '2')
                                            Editor
                                        @else
                                            Author
                                        @endif
                                    </small>                                    
                                    <p> {{ Auth::user()->email }} </p>
                                    <p> {{ Auth::user()->mobile }} </p>
                                    
                                </div>
                                <!--end col-md-8-->
                                <div class="col-md-4 profile-info">
                                    <a href="#updageInfo" title="Update Info" data-placement="top" data-toggle="modal" data-original-title="Update Info" class="btn btn-success btn-xs tooltips pull-right">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                </div>
                                
                            </div>
                            <!--end row-->
                            <div class="tabbable-line tabbable-custom-profile">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_11" data-toggle="tab"> Posts </a>
                                    </li> 
                                    <li>
                                        <a href="#tab_1_2" data-toggle="tab"> Comments </a>
                                    </li>                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_11">
                                        <div class="portlet-body">
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
                                                            <th> Status </th>
                                                            <th> Is Approved </th>
                                                            <th> Created at</th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                       
                                                        @foreach($user->posts as $key => $post)
                                                        <tr>
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>{{ $key+1 }}</td>
                                                            <td>{{ str_limit($post->title, '25') }}</td>                                                            
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
                                                                <a href=""
                                                                    onclick="event.preventDefault(); deletePost({{ $post->id }});"
                                                                    title="Delete Post" data-placement="top" data-toggle="tooltip" data-original-title="Delete Post" class="btn btn-danger btn-xs tooltips">
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
                                    <div class="tab-pane" id="tab_1_2">                                    
                                        <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_2">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                                    <span></span>
                                                                </label>
                                                            </th>                            
                                                            <th> SL </th>
                                                            <th> Comments </th>                                                            
                                                            <th> On </th>
                                                            <th> To </th>                                                            
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                       
                                                        @foreach($user->comments as $key => $comment)
                                                        <tr>
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>{{ $key+1 }}</td>
                                                            <td>{{ str_limit($comment->comment, '30') }}</td>                                                            
                                                            <td>
                                                                    {{ date("M d, Y", strtotime($comment->created_at)) }}
                                                            </td>
                                                            <td>
                                                                    <a href="{{route('admin.post.show',$comment->post->id)}}">{{ str_limit($comment->post->title, '30') }}</a>
                                                            </td>
                                                            
                                                            <td> 
                                                                <a href=""
                                                                    onclick="event.preventDefault(); deleteComment({{ $comment->id }});"
                                                                    title="Delete Comment" data-placement="top" data-toggle="tooltip" data-original-title="Delete Comment" class="btn btn-danger btn-xs tooltips">
                                                                    <i class="fa fa-trash" style="padding-bottom:3px"></i>
                                                                </a>
                                                                <form id="delete-comment-{{ $comment->id }}" action="{{route('admin.comment.destroy',$comment->id)}}" method="POST" style="display: none;">
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
                                    <!--tab-pane-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end tab-pane-->                
            </div>
        </div>
    </div>


<!-- /.modal for change image -->
<div class="modal fade bs-modal-sm" id="changeImage" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Change Image</h4>
                </div>
                <form role="form" action="{{route('admin.profile.change')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">    
                        <div class="form-group text-center">                        
                                <img src="{{asset('assets/images/users/'.Auth::user()->image )}}" id="output" height="160px" width="150px"/>                        
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
    <!-- /.modal for change profile image -->

<!-- /.modal for Update Info -->
<div class="modal fade bs-modal-sm" id="updageInfo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Update Basic Info</h4>
            </div>
            <form role="form" action="{{route('admin.profile.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body"> 
                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                        <input class="form-control" name="name" placeholder="Name" value="{{ $user->name }}" type="text"> </div>
                    </div>   
                    <div class="form-group">
                        <label>Email Address</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                        <input class="form-control" name="email" placeholder="Email Address" value="{{ $user->email }}" type="text"> </div>
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-mobile"></i>
                            </span>
                        <input class="form-control" name="mobile" placeholder="Mobile Number" value="{{ $user->mobile }}" type="text"> </div>
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
<!-- /.modal for change profile image -->
@endsection

@push('js')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/gmaps/gmaps.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/sweetalert2.min.js')}}"></script>
<script type="text/javascript">
    function deleteComment(id){
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
                document.getElementById('delete-comment-'+id).submit();
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
    var loadFile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endpush
