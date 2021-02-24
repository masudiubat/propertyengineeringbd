@extends('layouts.landing')

@section('title', 'Home')

@push('css')

@endpush

@section('content')
<!-- =====  BANNER STRAT  ===== -->
<div class="banner">
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <div>
                        <h1 class="light">WAY IN BUILDING</h1>
                        <h3 class="mt_30 light">Contractors & construction managers since 1989</h3>
                    </div>
                    <button class="custom-btn btn-12 light mt_30">See Our Recent Projects</button>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">
                    <div>
                        <h1 class="light">COMPLEX PROJECTS</h1>
                        <h3 class="mt_30 light">Becomes a piece of art when meets with inspiration</h3>
                    </div>
                    <button class="custom-btn btn-12 light mt_30">See Our Recent Projects</button>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-3"></div>
                <div class="hero">
                    <div>
                        <h1 class="light">BUILD THE FUTURE</h1>
                        <h3 class="mt_30 light">Implementing cutting-edge technologies in construction</h3>
                    </div>
                    <button class="custom-btn btn-12 light mt_30">See Our Recent Projects</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =====  BANNER END  ===== -->

<!-- =====  SERVICES STRAT  ===== -->
<section id="service" class="pt_100 pb_50">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-part ">
                    <h2 class="main_title mb_20">Introducing Our Features</h2>
                    <p class="mb_50">We understand the importance of innovation and professionalism and work with the best people to achieve this..</p>
                </div>
            </div>
        </div>
        <!-- Services  -->
        <div class="row">
            <div class="col-md-4 col-xs-6 mb_50">
                <div class="service">
                    <div class="icon-top"><img src="{{asset('assets/images/serviceicon/service-1.png')}}" alt="#"></div>
                    <h4 class="text-bold mtb_20">Professional Team</h4>
                    <p>It is a long established fact that reader by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 mb_50">
                <div class="service">
                    <div class="icon-top"><img src="{{asset('assets/images/serviceicon/service-2.png')}}" alt="#"></div>
                    <h4 class="text-bold mtb_20">24/7 support</h4>
                    <p>It is a long established fact that reader distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 mb_50">
                <div class="service">
                    <div class="icon-top"><img src="{{asset('assets/images/serviceicon/service-3.png')}}" alt="#"></div>
                    <h4 class="text-bold mtb_20">Affordable Price</h4>
                    <p>It is a long established fact that reader by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 mb_50">
                <div class="service">
                    <div class="icon-top"><img src="{{asset('assets/images/serviceicon/service-4.png')}}" alt="#"></div>
                    <h4 class="text-bold mtb_20">Construction </h4>
                    <p>It is a long established fact that reader distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 mb_50">
                <div class="service">
                    <div class="icon-top"><img src="{{asset('assets/images/serviceicon/service-5.png')}}" alt="#"></div>
                    <h4 class="text-bold mtb_20">Building </h4>
                    <p>It is a long established fact that reader distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 mb_50">
                <div class="service">
                    <div class="icon-top"><img src="{{asset('assets/images/serviceicon/service-6.png')}}" alt="#"></div>
                    <h4 class="text-bold mtb_20">Engineering</h4>
                    <p>It is a long established fact that reader distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <!-- Services -->
    </div>
</section>
<!-- =====  SERVICES END  ===== -->
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
                            <button type="button" class="custom-btn btn-12 mt_30 wow fadeInUp" data-wow-delay=".4s">View Protfolio</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====  ABOUT END  ===== -->
<!-- =====  PROGRESS START  ===== -->
<div class="Progress bg-yellow ptb_100">
    <div class="container">
        <!-- Progress Bar  -->
        <div class="row">
            <div class="skils-circle light">
                <div class="col-md-2 col-sm-4 skill wow fadeInUp" data-wow-delay=".2s">
                    <div class="first circle text-bold"> <strong></strong> <span>Physical </span> </div>
                </div>
                <div class="col-md-2 col-sm-4 skill wow fadeInUp" data-wow-delay=".3s">
                    <div class="second circle text-bold"> <strong></strong> <span>Technology</span> </div>
                </div>
                <div class="col-md-2 col-sm-4 skill wow fadeInUp" data-wow-delay=".4s">
                    <div class="third circle text-bold"> <strong></strong> <span>Management</span> </div>
                </div>
                <div class="col-md-2 col-sm-4 skill wow fadeInUp" data-wow-delay=".5s">
                    <div class="fourth circle text-bold"> <strong></strong> <span>Design</span> </div>
                </div>
                <div class="col-md-2 col-sm-4 skill wow fadeInUp" data-wow-delay=".6s">
                    <div class="fifth circle text-bold"> <strong></strong> <span>Planning</span> </div>
                </div>
                <div class="col-md-2 col-sm-4 skill wow fadeInUp" data-wow-delay=".7s">
                    <div class="sixth circle text-bold"> <strong></strong> <span>Regulations</span> </div>
                </div>
            </div>
        </div>
        <!--Progress Bar -->
    </div>
</div>
<!-- =====  PROGRESS END  ===== -->
<!-- =====  CREATIVE WORK START  ===== -->
<section id="work">
    <div id="portfolio" class="mb_100">
        <div class="container text-center">
            <div class="heading-part ">
                <h2 class="main_title mt_100 mb_20 wow fadeInUp" data-wow-delay=".2s">Our Creative Work</h2>
            </div>
            <div class="tab-bar mb_30">
                <ul class="portfolio-filter nav navbar-nav wow fadeInUp" data-wow-delay=".3s">
                    <li class="active"><a data-filter="*">All</a></li>
                    @foreach($projectCategories as $pcategory)
                    <li><a data-filter=".{{$pcategory->slug}}">{{$pcategory->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="grid wow fadeInUp" data-wow-delay=".4s">
                <div class="isotope three-col-work ">
                    @foreach($projects as $project)
                    @if(!is_null($project->project_categories))
                    <?php $categoryArray = []; ?>
                    @foreach($project->project_categories as $category)
                    <?php $categoryArray[] = $category->slug; ?>
                    @endforeach
                    @endif
                    <div class="grid-item listing-effect <?php for ($i = 0; $i < sizeof($categoryArray); $i++) {
                                                                echo " " . $categoryArray[$i];
                                                            } ?>">
                        <a href="{{route('project.show', $project->id)}}" title="Portfolio Title -1">
                            <img src="{{asset('storage/images/project-featured/'.$project->featured_image)}}" alt="Civil Engineer">
                            <div class="work-detail">
                                <h3 class="project-title mb_10">{{$project->name}}</h3>
                                <div class="meta-title">{{$project->address}}</div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <button type="button" class="custom-btn btn-12 mt_30 wow fadeInUp" data-wow-delay=".4s">View More Portfolio</button>
            </div>
        </div>
    </div>
</section>
<!-- =====  CREATIVE WORK END  ===== -->
<!-- =====  PRODUCT DISPLAY SECTION  ===== -->
<section id="shop">
    <div class="container ptb_100 text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-part ">
                    <h2 class="main_title mb_20">Introducing Our Products</h2>
                    <p class="mb_50">We understand the importance of innovation and professionalism and work with the best people to achieve this..</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-layout  product-grid  col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock">
                            <a href="#">
                                <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive">
                                <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive">
                            </a>
                        </div>
                        <div class="caption product-detail text-center">
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                            <input name="product_price" value="70.00" type="hidden">
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-layout  product-grid  col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock">
                            <a href="#">
                                <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive">
                                <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive">
                            </a>
                        </div>
                        <div class="caption product-detail text-center">
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                            <input name="product_price" value="70.00" type="hidden">
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-layout  product-grid  col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock">
                            <a href="#">
                                <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive">
                                <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive">
                            </a>
                        </div>
                        <div class="caption product-detail text-center">
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                            <input name="product_price" value="70.00" type="hidden">
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-layout  product-grid  col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock">
                            <a href="#">
                                <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive">
                                <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive">
                            </a>
                        </div>
                        <div class="caption product-detail text-center">
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                            <input name="product_price" value="70.00" type="hidden">
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-layout  product-grid  col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock">
                            <a href="#">
                                <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive">
                                <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive">
                            </a>
                        </div>
                        <div class="caption product-detail text-center">
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                            <input name="product_price" value="70.00" type="hidden">
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-layout  product-grid  col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock">
                            <a href="#">
                                <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive">
                                <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive">
                            </a>
                        </div>
                        <div class="caption product-detail text-center">
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                            <input name="product_price" value="70.00" type="hidden">
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="custom-btn btn-12 mt_30 wow fadeInUp" data-wow-delay=".4s">View More Portfolio</button>
        </div>
    </div>
</section>
<!-- =====  PRODUCT DISPLAY SECTION  ===== -->
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
                        <h3 class="team-title text-bold mb_20">Benedict Arnold</h3>
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
                        <h3 class="team-title text-bold mb_20">Loren Maxwell</h3>
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
                        <h3 class="team-title text-bold mb_20">Max Quagmire</h3>
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
                        <h3 class="team-title text-bold mb_20">joseph Lui</h3>
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
                        <h3 class="team-title text-bold mb_20">Max Quagmire</h3>
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
<section id="client" class="text-center bg-dark parallax" data-source-url="{{asset('assets/images/Parallax02.jpg')}}">
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
@endsection

@push('js')

@endpush