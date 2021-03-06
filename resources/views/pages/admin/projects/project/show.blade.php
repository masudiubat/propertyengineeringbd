@extends('layouts.backend')

@section('title', 'Project Details')

@push('css')
<link href="{{asset('assets/pages/css/blog.min.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-8">
        <div>
            <!-- BEGIN GENERAL PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-blue-sharp"></i>
                        <span class="caption-subject font-blue-sharp bold uppercase">Project</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn btn-primary" href="{{route('admin.project.index')}}">
                            <i class="fa fa-arrow-circle-left"></i> Back
                        </a>
                        <a class="btn btn btn-info" href="{{route('admin.project.edit',$project->id)}}">
                            <i class="fa fa-edit"></i> Edit
                        </a>

                        <a href="" onclick="event.preventDefault(); deleteProject('{{ $project->id }}');" title="Delete Project" data-placement="top" data-toggle="tooltip" data-original-title="Delete Project" class="btn btn btn-danger tooltips">
                            <i class="fa fa-trash"></i> Delete
                        </a>
                        <form id="delete-project-{{ $project->id }}" action="{{route('admin.project.destroy',$project->id)}}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject font-blue-sharp">{{ $project->name }}</span>
                        <h6>Owner: {{ $project->client_name }}</h6>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">

                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-comments"></i>Basic Info
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                                <tr class="active">
                                                    <th> Project Name </th>
                                                    <td> {{$project->name }} </td>
                                                </tr>
                                                <tr class="success">
                                                    <th> Client Name </th>
                                                    <td> {{$project->client_name}} </td>
                                                </tr>
                                                <tr class="warning">
                                                    <th> Client Mobile </th>
                                                    <td> {{$project->client_mobile}} </td>
                                                </tr>
                                                <tr class="danger">
                                                    <th> Address </th>
                                                    <td> {{$project->address}} </td>
                                                </tr>

                                                <tr class="active">
                                                    <th> Land Area </th>
                                                    <td> {{$project->area }} </td>
                                                </tr>
                                                <tr class="success">
                                                    <th> Cost </th>
                                                    <td> {{$project->cost}} </td>
                                                </tr>
                                                <tr class="warning">
                                                    <th> Status </th>
                                                    <td> {{$project->status}} </td>
                                                </tr>
                                                <tr class="danger">
                                                    <th> Start Date </th>
                                                    <td> @if(!is_null($project->start_date)){{ date("M d, Y", strtotime($project->start_date)) }} @endif</td>
                                                </tr>
                                                <tr class="success">
                                                    <th> Finish Date </th>
                                                    <td> @if(!is_null($project->finish_date)){{ date("M d, Y", strtotime($project->finish_date)) }} @endif</td>
                                                </tr>
                                                <tr class="danger">
                                                    <th> Featured </th>
                                                    <td>
                                                        @if($project->is_featured == 0)
                                                        No
                                                        @else
                                                        Yes
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr class="success">
                                                    <th> Published </th>
                                                    <td>
                                                        @if($project->is_published == 0)
                                                        No
                                                        @else
                                                        Yes
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr class="active">
                                                    <td colspan="2"> <strong>Short Description:</strong><br />{{$project->description }} </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END GENERAL PORTLET-->

        <!-- Start comment Section -->
        <!--
        Comment section will sit here
        -->
        <!-- End comment Section -->

    </div>
    <div class="col-md-4">
        <!-- BEGIN UNORDERED LISTS PORTLET-->
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Featured Image
                </div>
            </div>
            <div class="portlet-body">
                <img id="showImage" src="{{asset('storage/images/project-featured/'.$project->featured_image)}}" height="180px" width="100%" />
            </div>
        </div>
        <!-- END UNORDERED LISTS PORTLET-->


        <!-- BEGIN UNORDERED LISTS PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Project Image
                </div>
            </div>
            <div class="portlet-body text-center">
                @foreach($project->project_galleries as $gallery)
                <img id="showImage" src="{{asset('storage/images/project-gallery/'.$gallery->name)}}" height="180px" width="80%" style="margin-bottom:10px;" />
                @endforeach
            </div>
        </div>
        <!-- END UNORDERED LISTS PORTLET-->

        <!-- BEGIN UNSTYLED LISTS PORTLET-->
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Categories
                </div>
            </div>
            <div class="portlet-body">
                <ul>
                    @foreach($project->project_categories as $category)
                    <li style="margin:10px;">
                        <div class="label bg-green"> {{ $category->name }}</div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- END UNSTYLED LISTS PORTLET-->
    </div>
</div>

<!-- /.modal for new category -->
<div class="modal fade" id="publication" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Admin Decision</h4>
            </div>
            <form role="form" action="{{route('admin.post.publication')}}" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{ $project->id }}" />
                <div class="modal-body">
                    <div class="portlet-body form">
                        <div class="form-group form-md-radios">
                            <div class="md-radio-list">
                                <div class="md-radio has-success">
                                    <input id="radio9" name="is_approved" value="approved" class="md-radiobtn" type="radio">
                                    <label for="radio9">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Approved </label>
                                </div>
                                <div class="md-radio has-error">
                                    <input id="radio10" name="is_approved" value="denied" class="md-radiobtn" type="radio">
                                    <label for="radio10">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Denay </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input form-md-floating-label" id="recomendation">
                            <textarea name="recommendation" class="form-control" rows="3"></textarea>
                            <label for="form_control_1">Any recommendation to author on Denay</label>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn green">Send</button>
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
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/gmaps/gmaps.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/apps/scripts/timeline.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="{{asset('js/sweetalert2.min.js')}}"></script>
<script type="text/javascript">
    function deleteProject(id) {
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
                document.getElementById('delete-project-' + id).submit();
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