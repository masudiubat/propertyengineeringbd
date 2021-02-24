@extends('layouts.landing')

@section('title', 'Blog')

@push('css')

@endpush
@section('content')
<!-- =====  HEADER END  ===== -->
<!-- =====  BREADCRUMB STRAT  ===== -->
<div class="breadcrumb pt_100 pb_50">
    <div class="container mt_50">
        <h1 class="mb_20">Blog</h1>
        <ul class="right">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Blog</li>
        </ul>
    </div>
</div>
<!-- =====  BREADCRUMB END===== -->
<!-- =====  CONTAINER START  ===== -->
<!--Blog  -->
<section class="text-center ptb_80">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="heading-part ">
                    <h2 class="main_title mb_20">Blogs</h2>
                    <p class="mb_50">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                </div>
            </div>
        </div>
        <!-- Blog items  -->
        <div class="blog  row">
            <div class="three-col-blog text-left">
                <div class="blog-item col-md-6 mb_50">
                    <div class="box-holder">
                        <div class="post-format">
                            <div class="thumb post-img"><a href="{{route('blog.show')}}" title="Beautiful Lady"> <img src="{{asset('assets/images/blog/blog_img_01.jpg')}}" alt="Civil Engineer"></a></div>
                            <div class="post-type"><i class="fa fa-music" aria-hidden="true"></i></div>
                        </div>
                        <div class="post-info mtb_20 ">
                            <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                            <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                            <div class="details mtb_20">
                                <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                                <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item col-md-6">
                    <div class="box-holder">
                        <div class="post-format">
                            <div class="thumb post-img"><a href="{{route('blog.show')}}" title="Beautiful Lady"> <img src="{{asset('assets/images/blog/blog_img_03.jpg')}}" alt="Civil Engineer"></a></div>
                            <div class="post-type"><i class="fa fa-music" aria-hidden="true"></i></div>
                        </div>
                        <div class="post-info mtb_20 ">
                            <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                            <p>Aliquam egestas pellentesque est. Etiam a orci volutpat, luctus felis sed, porta mi. Aliquam eu lacinia leo. Integer tincidunt lorem sed magna iaculis, quis ullamcorper urna fermentum. Aenean erat ipsum, ultrices at tempus vel, mollis nec velit. Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                            <div class="details mtb_20">
                                <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                                <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item col-md-6 mb_50">
                    <div class="box-holder">
                        <div class="post-format">
                            <div class="thumb post-img"><a href="{{route('blog.show')}}" title="Beautiful Lady"> <img src="{{asset('assets/images/blog/blog_img_04.jpg')}}" alt="Civil Engineer"></a></div>
                            <div class="post-type"><i class="fa fa-video-camera" aria-hidden="true"></i></div>
                        </div>
                        <div class="post-info mtb_20 ">
                            <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                            <p>Aliquam egestas pellentesque est. Etiam a orci volutpat, luctus felis sed, porta mi. Aliquam eu lacinia leo. Integer tincidunt lorem sed magna iaculis, quis ullamcorper urna fermentum. Aenean erat ipsum, ultrices at tempus vel, mollis nec velit. Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                            <div class="details mtb_20">
                                <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                                <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item col-md-6 mb_50">
                    <div class="box-holder">
                        <div class="post-format">
                            <div class="thumb post-img"><a href="#" title="Beautiful Lady"> <img src="{{asset('assets/images/blog/blog_img_05.jpg')}}" alt="Civil Engineer"></a></div>
                            <div class="post-type"><i class="fa fa-soundcloud" aria-hidden="true"></i></div>
                        </div>
                        <div class="post-info mtb_20 ">
                            <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                            <p>Aliquam egestas pellentesque est. Etiam a orci volutpat, luctus felis sed, porta mi. Aliquam eu lacinia leo. Integer tincidunt lorem sed magna iaculis, quis ullamcorper urna fermentum. Aenean erat ipsum, ultrices at tempus vel, mollis nec velit. Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                            <div class="details mtb_20">
                                <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                                <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item col-md-6 mb_50">
                    <div class="box-holder">
                        <div class="post-format">
                            <div class="thumb post-img"><a href="#" title="Beautiful Lady"> <img src="{{asset('assets/images/blog/blog_img_06.jpg')}}" alt="Civil Engineer"></a></div>
                            <div class="post-type"><i class="fa fa-link" aria-hidden="true"></i></div>
                        </div>
                        <div class="post-info mtb_20 ">
                            <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                            <p>Aliquam egestas pellentesque est. Etiam a orci volutpat, luctus felis sed, porta mi. Aliquam eu lacinia leo. Integer tincidunt lorem sed magna iaculis, quis ullamcorper urna fermentum. Aenean erat ipsum, ultrices at tempus vel, mollis nec velit. Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                            <div class="details mtb_20">
                                <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                                <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item col-md-6 mb_50">
                    <div class="box-holder">
                        <div class="post-format">
                            <div class="thumb post-img"><a href="#" title="Beautiful Lady"> <img src="{{asset('assets/images/blog/blog_img_07.jpg')}}" alt="Civil Engineer"></a></div>
                            <div class="post-type"> <i class="fa fa-picture-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="post-info mtb_20 ">
                            <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                            <p>Aliquam egestas pellentesque est. Etiam a orci volutpat, luctus felis sed, porta mi. Aliquam eu lacinia leo. Integer tincidunt lorem sed magna iaculis, quis ullamcorper urna fermentum. Aenean erat ipsum, ultrices at tempus vel, mollis nec velit. Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                            <div class="details mtb_20">
                                <div class="date pull-left"><i class="fa fa-file-image-o" aria-hidden="true"></i>11 May 2017 </div>
                                <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item col-md-6 mb_50">
                    <div class="box-holder">
                        <div class="post-format">
                            <div class="thumb post-img"><a href="#" title="Beautiful Lady"> <img src="{{asset('assets/images/blog/blog_img_08.jpg')}}" alt="Civil Engineer"></a></div>
                            <div class="post-type"> <i class="fa fa-picture-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="post-info mtb_20 ">
                            <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                            <p>Aliquam egestas pellentesque est. Etiam a orci volutpat, luctus felis sed, porta mi. Aliquam eu lacinia leo. Integer tincidunt lorem sed magna iaculis, quis ullamcorper urna fermentum. Aenean erat ipsum, ultrices at tempus vel, mollis nec velit. Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                            <div class="details mtb_20">
                                <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                                <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
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
</section>
<!-- End Blog   -->
<!-- =====  CONTAINER END  ===== -->
@endsection
@push('js')

@endpush