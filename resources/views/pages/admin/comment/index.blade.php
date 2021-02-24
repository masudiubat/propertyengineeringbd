@extends('layouts.backend')

@section('title', 'Comments');

@push('css')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{asset('assets/pages/css/blog.min.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
@endpush

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="top-button bg-blue bg-font-blue">

        </div>
    </div>
</div>

<div class="blog-page blog-content-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="blog-single-content bordered blog-container" style="padding-top: 0px !important">                
                <div class="blog-comments">
                    <h3 class="sbold blog-comments-title">Comments({{ $comments->count() }})</h3>
                    <div class="c-comment-list">
                        @foreach($comments as $comment)
                        <div class="media">
                            <div class="media-left">                                
                                    <img class="media-object" alt="" src="{{asset('assets/images/users/'.$comment->user->image)}}">
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">
                                    <a href="#">{{ $comment->user->name }}</a> <b>on</b>
                                    <span class="c-date">{{ date("M d, Y", strtotime($comment->created_at)) }}</span> <b>To</b> 
                                    <span class="c-date"><a href="{{route('admin.post.show',$comment->post->id)}}">{{ str_limit($comment->post->title, '50') }}</a></span>
                                </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
                                <p style="margin:0;">
                                    <a href="{{route('admin.comment.hide',$comment->id)}}" title="Hide" data-placement="top" data-toggle="tooltip" data-original-title="Hide" class="btn btn-success btn-xs tooltips">
                                        <i class="fa fa-edit" aria-hidden="true" style="padding-bottom:3px"></i>
                                    </a>
                                    <a href=""
                                        onclick="event.preventDefault(); deleteComment({{ $comment->id }});"
                                        title="Delete Comment" data-placement="top" data-toggle="tooltip" data-original-title="Delete Comment" class="btn btn-danger btn-xs tooltips">
                                        <i class="fa fa-trash" style="padding-bottom:3px"></i>
                                    </a>
                                    <form id="delete-comment-{{ $comment->id }}" action="{{route('admin.comment.destroy',$comment->id)}}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </p>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    <ul class="pagination pull-right">                        
                        <li>
                            {{ $comments->links() }}    
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/global/plugins/jquery.pulsate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-bootpag/jquery.bootpag.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/holder.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/pages/scripts/ui-general.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
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
@endpush