@extends('layouts.landing')

@section('title', 'Gallery')

@push('css')

@endpush

@section('content')
<!-- =====  BREADCRUMB STRAT  ===== -->
<div class="breadcrumb pt_100 pb_50">
    <div class="container mt_50">
        <h1 class="mb_20">Gallery</h1>
        <ul class="right">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Gallery</li>
        </ul>
    </div>
</div>
<!-- =====  BREADCRUMB END===== -->
<!-- =====  CONTAINER START  ===== -->
<section class="bg-gray text-center ptb_80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-part ">
                    <h2 class="main_title mt_50 mb_30">Some memorable moment</h2>
                    <p class="mb_50">A wonderful serenity has taken possession of my entire soul, like these sweet mo alone, and feel the charm of existence in this spot.</p>
                </div>
            </div>
        </div>
        <!--Team Grid -->
        <div class="row">
            <div class="team_grid ">
                <div class="col-md-4 team-detail">
                    <div class="team-item-img"> <img src="{{asset('assets/images/tm1.jpg')}}" alt="" /> </div>
                    <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                </div>
                <div class="col-md-4 team-detail">
                    <div class="team-item-img"> <img src="{{asset('assets/images/tm2.jpg')}}" alt="" /> </div>
                    <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                </div>
                <div class="col-md-4 team-detail">
                    <div class="team-item-img"> <img src="{{asset('assets/images/tm3.jpg')}}" alt="" /> </div>
                    <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                </div>
                <div class="col-md-4 team-detail">
                    <div class="team-item-img"> <img src="{{asset('assets/images/tm4.jpg')}}" alt="" /> </div>
                    <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                </div>
                <div class="col-md-4 team-detail">
                    <div class="team-item-img"> <img src="{{asset('assets/images/tm5.jpg')}}" alt="" /> </div>
                    <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                </div>
                <div class="col-md-4 team-detail">
                    <div class="team-item-img"> <img src="{{asset('assets/images/tm6.jpg')}}" alt="" /> </div>
                    <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                </div>
                <div class="col-md-4 team-detail">
                    <div class="team-item-img"> <img src="{{asset('assets/images/tm1.jpg')}}" alt="" /> </div>
                    <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                </div>
                <div class="col-md-4 team-detail">
                    <div class="team-item-img"> <img src="{{asset('assets/images/tm2.jpg')}}" alt="" /> </div>
                    <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                </div>
                <div class="col-md-4 team-detail">
                    <div class="team-item-img"> <img src="{{asset('assets/images/tm3.jpg')}}" alt="" /> </div>
                    <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                </div>
            </div>

        </div>
        <!--End Team Grid - -->
        <div class="pagination-nav text-center mt_50">
            <ul>
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- =====  CONTAINER END  ===== -->
@endsection

@push('js')

@endpush