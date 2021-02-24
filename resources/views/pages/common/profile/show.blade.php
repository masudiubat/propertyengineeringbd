@extends('layouts.backend')

@section('title', 'My Profile')

@push('css')
<!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/pages/css/profile-2.min.css')}}" rel="stylesheet" type="text/css" />
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
                <li>
                    <a href="#tab_1_3" data-toggle="tab"> Account </a>
                </li>                
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1_1">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="list-unstyled profile-nav">
                                <li>
                                    <img src="{{asset('assets/images/users/'.Auth::user()->image )}}" class="img-responsive pic-bordered" alt="" />
                                    <a class="profile-edit" data-toggle="modal" href="#changeImage"> change </a>
                                    
                                </li>
                                <li>
                                    <a href="javascript:;"> Posts
                                        <span> 3 </span>    
                                    </a>
                                        
                                </li>
                                <li>
                                    <a href="javascript:;"> Comments
                                        <span> 3 </span>
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
                                
                            </div>
                            <!--end row-->
                            <div class="tabbable-line tabbable-custom-profile">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_11" data-toggle="tab"> Latest Customers </a>
                                    </li>                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_11">
                                        <div class="portlet-body">
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <i class="fa fa-briefcase"></i> Company </th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-question"></i> Descrition </th>
                                                        <th>
                                                            <i class="fa fa-bookmark"></i> Amount </th>
                                                        <th> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:;"> Pixel Ltd </a>
                                                        </td>
                                                        <td class="hidden-xs"> Server hardware purchase </td>
                                                        <td> 52560.10$
                                                            <span class="label label-success label-sm"> Paid </span>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:;"> Smart House </a>
                                                        </td>
                                                        <td class="hidden-xs"> Office furniture purchase </td>
                                                        <td> 5760.00$
                                                            <span class="label label-warning label-sm"> Pending </span>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:;"> FoodMaster Ltd </a>
                                                        </td>
                                                        <td class="hidden-xs"> Company Anual Dinner Catering </td>
                                                        <td> 12400.00$
                                                            <span class="label label-success label-sm"> Paid </span>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:;"> WaterPure Ltd </a>
                                                        </td>
                                                        <td class="hidden-xs"> Payment for Jan 2013 </td>
                                                        <td> 610.50$
                                                            <span class="label label-danger label-sm"> Overdue </span>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:;"> Pixel Ltd </a>
                                                        </td>
                                                        <td class="hidden-xs"> Server hardware purchase </td>
                                                        <td> 52560.10$
                                                            <span class="label label-success label-sm"> Paid </span>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:;"> Smart House </a>
                                                        </td>
                                                        <td class="hidden-xs"> Office furniture purchase </td>
                                                        <td> 5760.00$
                                                            <span class="label label-warning label-sm"> Pending </span>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:;"> FoodMaster Ltd </a>
                                                        </td>
                                                        <td class="hidden-xs"> Company Anual Dinner Catering </td>
                                                        <td> 12400.00$
                                                            <span class="label label-success label-sm"> Paid </span>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                        </td>
                                                    </tr>
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
                <!--tab_1_2-->
                <div class="tab-pane" id="tab_1_3">
                    <div class="row profile-account">
                        <div class="col-md-3">
                            <ul class="ver-inline-menu tabbable margin-bottom-10">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab_1-1">
                                        <i class="fa fa-cog"></i> Personal info </a>
                                    <span class="after"> </span>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_2-2">
                                        <i class="fa fa-picture-o"></i> Change Avatar </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_3-3">
                                        <i class="fa fa-lock"></i> Change Password </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_4-4">
                                        <i class="fa fa-eye"></i> Privacity Settings </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div id="tab_1-1" class="tab-pane active">
                                    <form role="form" action="#">
                                        <div class="form-group">
                                            <label class="control-label">First Name</label>
                                            <input type="text" placeholder="John" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" placeholder="Doe" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Mobile Number</label>
                                            <input type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Interests</label>
                                            <input type="text" placeholder="Design, Web etc." class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Occupation</label>
                                            <input type="text" placeholder="Web Developer" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">About</label>
                                            <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Website Url</label>
                                            <input type="text" placeholder="http://www.mywebsite.com" class="form-control" /> </div>
                                        <div class="margiv-top-10">
                                            <a href="javascript:;" class="btn green"> Save Changes </a>
                                            <a href="javascript:;" class="btn default"> Cancel </a>
                                        </div>
                                    </form>
                                </div>
                                <div id="tab_2-2" class="tab-pane">
                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. </p>
                                    <form action="#" role="form">
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                <div>
                                                    <span class="btn default btn-file">
                                                        <span class="fileinput-new"> Select image </span>
                                                        <span class="fileinput-exists"> Change </span>
                                                        <input type="file" name="..."> </span>
                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                </div>
                                            </div>
                                            <div class="clearfix margin-top-10">
                                                <span class="label label-danger"> NOTE! </span>
                                                <span> Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                            </div>
                                        </div>
                                        <div class="margin-top-10">
                                            <a href="javascript:;" class="btn green"> Submit </a>
                                            <a href="javascript:;" class="btn default"> Cancel </a>
                                        </div>
                                    </form>
                                </div>
                                <div id="tab_3-3" class="tab-pane">
                                    <form action="#">
                                        <div class="form-group">
                                            <label class="control-label">Current Password</label>
                                            <input type="password" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">New Password</label>
                                            <input type="password" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Re-type New Password</label>
                                            <input type="password" class="form-control" /> </div>
                                        <div class="margin-top-10">
                                            <a href="javascript:;" class="btn green"> Change Password </a>
                                            <a href="javascript:;" class="btn default"> Cancel </a>
                                        </div>
                                    </form>
                                </div>
                                <div id="tab_4-4" class="tab-pane">
                                    <form action="#">
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                                <td>
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios1" value="option1" /> Yes
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios1" value="option2" checked/> No
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                <td>
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios21" value="option1" /> Yes
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios21" value="option2" checked/> No
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                <td>
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios31" value="option1" /> Yes
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios31" value="option2" checked/> No
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                <td>
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios41" value="option1" /> Yes
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios41" value="option2" checked/> No
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--end profile-settings-->
                                        <div class="margin-top-10">
                                            <a href="javascript:;" class="btn green"> Save Changes </a>
                                            <a href="javascript:;" class="btn default"> Cancel </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end col-md-9-->
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
@endsection

@push('js')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/gmaps/gmaps.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<script>
    var loadFile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endpush
