@extends('layouts.landing')

@section('title', 'Project')

@push('css')

@endpush

@section('content')
<!-- =====  BREADCRUMB STRAT  ===== -->
<div class="breadcrumb pt_100 pb_50">
    <div class="container mt_50">
        <h1 class="mb_20">Projects</h1>
        <ul class="right">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Projects</li>
        </ul>
    </div>
</div>
<!-- =====  BREADCRUMB END===== -->
<!-- =====  CONTAINER START  ===== -->
<section>
    <div id="portfolio" class="pb_100 bg-gray">
        <div class="container text-center">
            <div class="heading-part ">
                <h2 class="main_title mt_100 mb_20">Our Creative Work</h2>
            </div>
            <div class="tab-bar mb_30">
                <ul class="portfolio-filter nav navbar-nav">
                    <li class="active"><a data-filter="*">All</a></li>
                    <li><a data-filter=".illustration">Illustration</a></li>
                    <li><a data-filter=".VectorDesign">Vector Design</a></li>
                    <li><a data-filter=".Photography">Photography</a></li>
                    <li><a data-filter=".webdesign">Web Design</a></li>
                </ul>
            </div>
            <div class="grid">
                <div class="isotope three-col-work ">
                    <div class="grid-item listing-effect illustration webdesign"> <a href="{{route('project.show')}}"> <img src="{{asset('assets/images/portfolio-grid/pf_img_01.jpg')}}" alt="Civil Engineer">
                            <div class="work-detail">
                                <h3 class="project-title mb_10">Portfolio Title -1</h3>
                                <div class="meta-title">Photography</div>
                            </div>
                        </a> </div>
                    <div class="grid-item listing-effect VectorDesign Photography"> <a href="{{route('project.show')}}"> <img src="{{asset('assets/images/portfolio-grid/pf_img_02.jpg')}}" alt="Civil Engineer">
                            <div class="work-detail">
                                <h3 class="project-title mb_10">Portfolio Title -2</h3>
                                <div class="meta-title">Photography</div>
                            </div>
                        </a> </div>
                    <div class="grid-item listing-effect illustration webdesign"> <a href="{{route('project.show')}}"> <img src="{{asset('assets/images/portfolio-grid/pf_img_03.jpg')}}" alt="Civil Engineer">
                            <div class="work-detail">
                                <h3 class="project-title mb_10">Portfolio Title -3</h3>
                                <div class="meta-title">Photography</div>
                            </div>
                        </a> </div>
                    <div class="grid-item listing-effect VectorDesign"> <a href="{{route('project.show')}}"> <img src="{{asset('assets/images/portfolio-grid/pf_img_04.jpg')}}" alt="Civil Engineer">
                            <div class="work-detail">
                                <h3 class="project-title mb_10">Portfolio Title -4</h3>
                                <div class="meta-title">Photography</div>
                            </div>
                        </a> </div>
                    <div class="grid-item listing-effect webdesign VectorDesign Photography"> <a href="{{route('project.show')}}"> <img src="{{asset('assets/images/portfolio-grid/pf_img_05.jpg')}}" alt="Civil Engineer">
                            <div class="work-detail">
                                <h3 class="project-title mb_10">Portfolio Title -5</h3>
                                <div class="meta-title">Photography</div>
                            </div>
                        </a> </div>
                    <div class="grid-item listing-effect illustration VectorDesign"> <a href="{{route('project.show')}}"> <img src="{{asset('assets/images/portfolio-grid/pf_img_06.jpg')}}" alt="Civil Engineer">
                            <div class="work-detail">
                                <h3 class="project-title mb_10">Portfolio Title -6</h3>
                                <div class="meta-title">Photography</div>
                            </div>
                        </a> </div>
                    <div class="grid-item listing-effect VectorDesign"> <a href="{{route('project.show')}}"> <img src="{{asset('assets/images/portfolio-grid/pf_img_07.jpg')}}" alt="Civil Engineer">
                            <div class="work-detail">
                                <h3 class="project-title mb_10">Portfolio Title -7</h3>
                                <div class="meta-title">Photography</div>
                            </div>
                        </a> </div>
                    <div class="grid-item listing-effect webdesign illustration Photography"> <a href="{{route('project.show')}}"> <img src="{{asset('assets/images/portfolio-grid/pf_img_08.jpg')}}" alt="Civil Engineer">
                            <div class="work-detail">
                                <h3 class="project-title mb_10">Portfolio Title -8</h3>
                                <div class="meta-title">Photography</div>
                            </div>
                        </a> </div>
                    <div class="grid-item listing-effect webdesign"> <a href="{{route('project.show')}}"> <img src="{{asset('assets/images/portfolio-grid/pf_img_09.jpg')}}" alt="Civil Engineer">
                            <div class="work-detail">
                                <h3 class="project-title mb_10">Portfolio Title -9</h3>
                                <div class="meta-title">Photography</div>
                            </div>
                        </a> </div>
                </div>
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
        </div>
    </div>
</section>
<!-- =====  CONTAINER END  ===== -->
@endsection

@push('js')

@endpush