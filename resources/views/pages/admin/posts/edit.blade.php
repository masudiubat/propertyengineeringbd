@extends('layouts.backend')

@section('title', 'Edit Post')

@push('css')
<link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="top-button bg-blue bg-font-blue">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="portlet box red">
                <div class="portlet-title">
                    <div class="caption">Post's Basic</div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{route('admin.post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-body">
                            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                <label class="control-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $post->title }}" required="required">
                                <span class="text-danger">{{ $errors->first('title') }}</span>                                
                            </div>    
                            
                            <div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
                                <label for="multi-append" class="control-label">Select Tags</label>
                                <div class="input-group select2-bootstrap-append">
                                    <select name="tags[]" id="multi-append" class="form-control select2 select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                                        @foreach($tags as $tag)                                            
                                            <option 
                                            @foreach($post->tags as $assigntag)
                                                {{$assigntag->id == $tag->id ? 'selected': ''}}
                                            @endforeach
                                            value="{{ $tag->id }}">{{ $tag->name }}</option>                                                
                                        @endforeach
                                        
                                    </select> 
                                    <span class="text-danger">{{ $errors->first('tags') }}</span>                                      
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
                                <label for="multi-append" class="control-label">Select Categories</label>
                                <div class="input-group select2-bootstrap-append">
                                    <select name="categories[]" id="multi-append" class="form-control select2 select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                                            @foreach($categories as $category)
                                                <option 
                                                @foreach($post->categories as $assigncategory)
                                                    {{ $assigncategory->id == $category->id ? 'selected': ''}}
                                                @endforeach
                                                value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                    </select>   
                                    <span class="text-danger">{{ $errors->first('categories') }}</span>                                    
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="mt-checkbox mt-checkbox-outline"> Published
                                    <input value="1" name="status" type="checkbox" {{ $post->status == true ? 'checked' : ''}}>
                                    
                                    <span></span>
                                </label>                              
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">Featured Image</div>
                </div>
                <div class="portlet-body form"> 
                        <div class="form-body">  
                            <div class="form-group text-center">                                
                            <img id="output" src="{{asset('assets/images/posts/'.$post->image)}}" height="180px" width="100%"/>
                            </div>
                        
                            <div class="form-group">
                                <label class="control-label">Featured Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*" onchange="loadFile(event)">                                
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
                    <div class="caption">Post's Body</div>
                </div>
                <div class="portlet-body form">  
                    <div class="form-body">
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">                            
                            <textarea name="body" class="wysihtml5 form-control" rows="20" required="required">
                                    {!! $post->body !!}
                            </textarea>
                            <span class="text-danger">{{ $errors->first('body') }}</span>                             
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="btn-set pull-right">
                            <button type="submit" name="submit" class="btn green">Submit</button>
                        <a href="{{route('admin.post.index')}}" type="button" class="btn blue">Back</a>
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

<script src="{{asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/components-editors.min.js')}}" type="text/javascript"></script>

<script>
    var loadFile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endpush