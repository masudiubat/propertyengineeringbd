@extends('layouts.landing')

@section('title', 'About Us')

@push('css')

@endpush

@section('content')
<!-- =====  HEADER END  ===== -->
<!-- =====  BREADCRUMB STRAT  ===== -->
<div class="breadcrumb pt_100 pb_50">
    <div class="container mt_50">
        <h1>About Us</h1>
        <ul class="right">
            <li><a href="index-2.html">Home</a></li>
            <li class="active">About Us</li>
        </ul>
    </div>
</div>
<!-- =====  BREADCRUMB END===== -->
<!-- =====  CONTAINER START  ===== -->
<!-- =====  ABOUT START  ===== -->
<section id="about">
    <div class="about bg-gray ptb_100">
        <div class="container">
            <div class="about-inner ">
                <div class="row">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    </div>
                    <div class="col-md-6">
                        <div class="about-text ">
                            <div class="about-heading-wrap">
                                <h2 class="main_title about-heading mtb_20 pb_20 wow fadeInUp" data-wow-delay=".2s">Providing All Kinds <br> of Construction Services</h2>
                                <h3 class="text-bold mb_20 wow fadeInUp" data-wow-delay=".2s">Our construction company has been founded 10 years ago, at the very peak of the building frenzy in the US…</h3>
                            </div>
                            <p class=" wow fadeInUp" data-wow-delay=".3s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet model.of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, or non-characteristic words etc.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====  ABOUT END  ===== -->

<!-- =====  TEAM START  ===== -->
<section id="team" class="text-center ptb_80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-part ">
                    <h2 class="main_title mt_50 mb_30 wow fadeInUp" data-wow-delay=".2s">Our Creative Team</h2>
                    <p class="mb_50 wow fadeInUp" data-wow-delay=".3s">A wonderful serenity has taken possession of my entire soul, like these sweet mo alone, and feel the charm of existence in this spot.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Team Carousel -->
            <div class="team_grid wow fadeInUp" data-wow-delay=".4s">
                <div class="team3col  owl-carousel">
                    <div class="item team-detail wow fadeInUp" data-wow-delay=".5s">
                        <div class="team-item-img"> <img src="{{asset('assets/images/tm1.jpg')}}" alt="" /> </div>
                        <div class="team-designation text-yellow mt_20">Builder Operation Head</div>
                        <h3 class="team-title text-bold mt_10 mb_20">Benedict Arnold</h3>
                        <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                        <ul class="social mt_20 mb_50">
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="item team-detail wow fadeInUp" data-wow-delay=".6s">
                        <div class="team-item-img"> <img src="{{asset('assets/images/tm2.jpg')}}" alt="" /> </div>
                        <div class="team-designation text-yellow mt_20">Contractors Operation Head</div>
                        <h3 class="team-title text-bold mt_10 mb_20">Loren Maxwell</h3>
                        <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                        <ul class="social mt_20 mb_50">
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="item team-detail wow fadeInUp" data-wow-delay=".7s">
                        <div class="team-item-img"> <img src="{{asset('assets/images/tm3.jpg')}}" alt="" /> </div>
                        <div class="team-designation text-yellow mt_20">Roofer Operation Head</div>
                        <h3 class="team-title text-bold mt_10 mb_20">Max Quagmire</h3>
                        <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                        <ul class="social mt_20 mb_50">
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="item team-detail wow fadeInUp" data-wow-delay=".8s">
                        <div class="team-item-img"> <img src="{{asset('assets/images/tm4.jpg')}}" alt="" /> </div>
                        <div class="team-designation text-yellow mt_20">Operation Head</div>
                        <h3 class="team-title text-bold mt_10 mb_20">joseph Lui</h3>
                        <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                        <ul class="social mt_20 mb_50">
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="item team-detail wow fadeInUp" data-wow-delay=".9s">
                        <div class="team-item-img"> <img src="{{asset('assets/images/tm5.jpg')}}" alt="" /> </div>
                        <div class="team-designation text-yellow mt_20">Operation Head</div>
                        <h3 class="team-title text-bold mt_10 mb_20">Max Quagmire</h3>
                        <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                        <ul class="social mt_20 mb_50">
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Team Carousel -->
        </div>
    </div>
</section>
<!-- =====  TEAM END  ===== -->
<!-- =====  CLIENT START  ===== -->
<section id="client" class="text-center bg-dark parallax" data-source-url="images/Parallax02.jpg">
    <div class="container">
        <div class="type-01 ptb_100 ">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <div class="client owl-carousel">
                        <div class="item client-detail"> <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <h3 class="text-uppercase text-bold light mtb_30">simply of the printing and industry Lorem Ipsum has been</h3>
                            <p>Lorem ipsum dolor sit amet, sea in odio erat, volumus oporteat his at, mei ocurreret vulputate Clitaprodesset Rem ipsum dolor sit amet, sea in odio erat, volumus oporteat his at, mei ocurreret vulputate ex. Clita prodesset oportere patrioque ne nec Duo cu partem omnesque..</p>
                            <div class="client-title  mt_40"><strong class="light">joseph Lui</strong> -
                                <div class="client-designation">php Developer</div>
                            </div>
                        </div>
                        <div class="item client-detail"> <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <h3 class="text-uppercase text-bold light mtb_30">simply text of the and typesetting industry Lorem Ipsum has been</h3>
                            <p>Dolor sit amet, sea in odio erat, volumus oporteat his at, mei ocurreret vulputate ex. Clita prodesset Rem ipsum dolor sit amet, sea in odio erat, volumus oporteat his at, mei ocurreret vulputate ex. Clita prodesset oportere patrioque ne nec Duo cu partem omnesque..</p>
                            <div class="client-title  mt_40"><strong class="light">Mr.joseph Lui</strong> -
                                <div class="client-designation">Developer</div>
                            </div>
                        </div>
                        <div class="item client-detail"> <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <h3 class="text-uppercase text-bold light mtb_30">dummy text of the printing and typesetting industry has been</h3>
                            <p>Sorem ipsum dolor sit amet, sea in odio erat, volumus oporteat his at, mei ocurreret vulputate ex. Clita prodesset Rem ipsum dolor sit amet, sea in odio erat, volumus oporteat his at, mei ocurreret vulputate ex. Clita prodesset oportere patrioque ne nec Duo cu partem omnesque..</p>
                            <div class="client-title mt_40"><strong class="light">Lui joseph </strong>-
                                <div class="client-designation">WordPress</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====  CLIENT END  ===== -->
<!-- =====  BLOGS START  ===== -->
<section id="blogs" class="text-center ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="heading-part ">
                    <h2 class="main_title mb_20">Our Blogs</h2>
                    <p class="mb_50">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                </div>
            </div>
        </div>
        <!-- Blog items  -->
        <div id="blog-post" class="blog owl-carousel ">
            <div class="blog-item item text-left">
                <div class="box-holder">
                    <div class="post-format">
                        <div class="thumb post-img"> <a href="{{asset('assets/images/blog/blog_img_01.jpg')}}" title="Beautiful Lady" data-source="{{asset('assets/images/blog/blog_img_01.jpg')}}"> <img src="{{asset('assets/images/blog/blog_img_01.jpg')}}" alt="Len.or"></a> </div>
                        <div class="post-type"><i class="fa fa-music" aria-hidden="true"></i></div>
                    </div>
                    <div class="post-info mt_20 ">
                        <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                        <div class="details mt_20">
                            <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-item item text-left">
                <div class="box-holder">
                    <div class="post-format">
                        <div class="thumb post-img"><a href="{{asset('assets/images/blog/blog_img_03.jpg')}}" title="Beautiful Lady" data-source="{{asset('assets/images/blog/blog_img_03.jpg')}}"> <img src="{{asset('assets/images/blog/blog_img_03.jpg')}}" alt="Len.or"></a></div>
                        <div class="post-type"><i class="fa fa-music" aria-hidden="true"></i></div>
                    </div>
                    <div class="post-info mt_20 ">
                        <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                        <div class="details mt_20">
                            <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-item item text-left">
                <div class="box-holder">
                    <div class="post-format">
                        <div class="thumb post-img"><a href="{{asset('assets/images/blog/blog_img_04.jpg')}}" title="Beautiful Lady" data-source="{{asset('assets/images/blog/blog_img_04.jpg')}}"> <img src="{{asset('assets/images/blog/blog_img_04.jpg')}}" alt="Len.or"></a></div>
                        <div class="post-type"><i class="fa fa-video-camera" aria-hidden="true"></i></div>
                    </div>
                    <div class="post-info mt_20 ">
                        <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                        <div class="details mt_20">
                            <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-item item text-left">
                <div class="box-holder">
                    <div class="post-format">
                        <div class="thumb post-img"><a href="{{asset('assets/images/blog/blog_img_05.jpg')}}" title="Beautiful Lady" data-source="{{asset('assets/images/blog/blog_img_05.jpg')}}"> <img src="{{asset('assets/images/blog/blog_img_05.jpg')}}" alt="Len.or"></a></div>
                        <div class="post-type"><i class="fa fa-soundcloud" aria-hidden="true"></i></div>
                    </div>
                    <div class="post-info mt_20 ">
                        <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                        <div class="details mt_20">
                            <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-item item text-left">
                <div class="box-holder">
                    <div class="post-format">
                        <div class="thumb post-img"><a href="{{asset('assets/images/blog/blog_img_06.jpg')}}" title="Beautiful Lady" data-source="{{asset('assets/images/blog/blog_img_06.jpg')}}"> <img src="{{asset('assets/images/blog/blog_img_06.jpg')}}" alt="Len.or"></a></div>
                        <div class="post-type"><i class="fa fa-link" aria-hidden="true"></i></div>
                    </div>
                    <div class="post-info mt_20 ">
                        <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                        <div class="details mt_20">
                            <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-item item text-left">
                <div class="box-holder">
                    <div class="post-format">
                        <div class="thumb post-img"><a href="{{asset('assets/images/blog/blog_img_07.jpg')}}" title="Beautiful Lady" data-source="{{asset('assets/images/blog/blog_img_07.jpg')}}"> <img src="{{asset('assets/images/blog/blog_img_07.jpg')}}" alt="Len.or"></a></div>
                        <div class="post-type"> <i class="fa fa-picture-o" aria-hidden="true"></i> </div>
                    </div>
                    <div class="post-info mt_20 ">
                        <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                        <div class="details mt_20">
                            <div class="date pull-left"><i class="fa fa-file-image-o" aria-hidden="true"></i>11 May 2017 </div>
                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-item item text-left">
                <div class="box-holder">
                    <div class="post-format">
                        <div class="thumb post-img"><a href="{{asset('assets/images/blog/blog_img_08.jpg')}}" title="Beautiful Lady" data-source="{{asset('assets/images/blog/blog_img_08.jpg')}}"> <img src="{{asset('assets/images/blog/blog_img_08.jpg')}}" alt="Len.or"></a></div>
                        <div class="post-type"> <i class="fa fa-picture-o" aria-hidden="true"></i> </div>
                    </div>
                    <div class="post-info mt_20 ">
                        <h3 class="text-bold text-uppercase mb_10"> <a href="#">There are many variations of passages lable</a> </h3>
                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                        <div class="details mt_20">
                            <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====  BLOGS END  ===== -->
<!-- =====  CONTAINER END  ===== -->
@endsection

@push('js')

@endpush