@extends('layouts.backend')

@section('title', 'Show Post')

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
                        <span class="caption-subject font-blue-sharp bold uppercase">Post</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn btn-primary" href="{{route('admin.post.index')}}">
                            <i class="fa fa-arrow-circle-left"></i> Back
                        </a>
                        <a class="btn btn btn-info" href="{{route('admin.post.edit',$post->id)}}">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        @if($post->is_approved == 0)
                        <a class="btn btn btn-info" data-toggle="modal" href="#publication">
                            <i class="fa fa-eye"></i> Approval Pending
                        </a>
                        @elseif($post->is_approved == 1)
                        <a class="btn btn btn-success">
                            <i class="fa fa-eye"></i> Approved
                        </a>
                        @else
                        <a class="btn btn btn-warning" data-toggle="modal" href="#publication">
                            <i class="fa fa-eye"></i> Denay
                        </a>
                        @endif

                        <a href="" onclick="event.preventDefault(); deletePost('{{ $post->id }}');" title="Delete Post" data-placement="top" data-toggle="tooltip" data-original-title="Delete Post" class="btn btn btn-danger tooltips">
                            <i class="fa fa-trash"></i> Delete
                        </a>
                        <form id="delete-post-{{ $post->id }}" action="{{route('admin.post.destroy',$post->id)}}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject font-blue-sharp">{{ $post->title }}</span>
                        <h6>By: {{ $post->user->name }}</h6>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            {!! $post->body !!}
                        </div>
                    </div>
                </div>
                <br />
                <div class="portlet-footer">
                    <div class="blog-post-content">
                        <div class="blog-post-foot pull-right">
                            <div class="blog-post-meta">
                                <i class="icon-calendar font-blue"></i>
                                <a href="javascript:;">{{ date("M d, Y", strtotime($post->created_at)) }}</a> &nbsp;
                                <i class="icon-bubble font-blue"></i>
                                <a href="javascript:;">{{ $post->comments->count() }} Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>
        <!-- END GENERAL PORTLET-->



        <!-- Start comment Section -->
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-bubble font-blue"></i>
                    <span class="caption-subject bold font-green uppercase"> Comments ({{ $post->comments->count() }})</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="timeline">

                    @foreach($post->comments as $comment)
                    <!-- TIMELINE ITEM -->
                    <div class="timeline-item">
                        <div class="timeline-badge">
                            <img class="timeline-badge-userpic" src="{{ asset('assets/images/users/'.$comment->user->image)}}">
                        </div>
                        <div class="timeline-body">
                            <div class="timeline-body-arrow"> </div>
                            <div class="timeline-body-head">
                                <div class="timeline-body-head-caption">
                                    <a href="javascript:;" class="timeline-body-title font-blue-madison">{{ $comment->user->name }}</a>
                                    <span class="timeline-body-time font-grey-cascade"> {{ date("M d, Y", strtotime($comment->created_at)) }}</span>
                                </div>

                            </div>
                            <div class="timeline-body-content">
                                <span class="font-grey-cascade"> {{ $comment->comment }} </span>
                            </div>
                        </div>
                    </div>
                    <!-- END TIMELINE ITEM -->
                    @endforeach

                </div>
            </div>
        </div>
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
                <img id="showImage" src="{{asset('assets/images/posts/'.$post->image)}}" height="180px" width="100%" />
            </div>
        </div>
        <!-- END UNORDERED LISTS PORTLET-->
        <!-- BEGIN ORDERED LISTS PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-tag"></i>Tags
                </div>
            </div>
            <div class="portlet-body">
                @foreach($post->tags as $tag)
                <div class="label bg-green"> {{ $tag->name }}</div>
                @endforeach
            </div>
        </div>
        <!-- END ORDERED LISTS PORTLET-->
        <!-- BEGIN UNSTYLED LISTS PORTLET-->
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Categories
                </div>
            </div>
            <div class="portlet-body">
                @foreach($post->categories as $category)
                <div class="label bg-green"> {{ $category->name }}</div>
                @endforeach
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
                <input type="hidden" name="post_id" value="{{ $post->id }}" />
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
@endpush