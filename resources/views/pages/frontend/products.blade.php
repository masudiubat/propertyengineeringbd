@extends('layouts.landing')

@section('title', 'Products')

@push('css')

@endpush

@section('content')
<!-- =====  BREADCRUMB STRAT  ===== -->
<div class="breadcrumb pt_100 pb_50">
    <div class="container mt_50">
        <h1 class="mb_20">Products</h1>
        <ul class="right">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Products</li>
        </ul>
    </div>
</div>
<!-- =====  BREADCRUMB END===== -->
<!-- =====  CONTAINER START  ===== -->
<section id="shop">
    <div class="container">
        <div class="row mtb_100">
            <div id="column-left" class="col-sm-3 hidden-xs column-left">
                <div class="Categories left-sidebar-widget mb_40">
                    <h3 class="mb_20">Top Categories</h3>
                    <div class="category_block">
                        <ul class="box-category">
                            <li><a href="#">Desktops</a></li>
                            <li><a href="#">Laptops &amp; Notebooks</a></li>
                            <li><a href="#">Components</a></li>
                            <li><a href="#">Tablets</a></li>
                            <li><a href="#">Software</a></li>
                            <li><a href="#">Phones & PDAs</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">MP3 Players</a></li>
                        </ul>
                    </div>
                </div>

                <div class="special left-sidebar-widget mb_40">
                    <h3 class="mb_20">Special Product</h3>
                    <ul class="row ">
                        <li class="product-layout-left mb_20">
                            <div class="product-list col-xs-4">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="shop_detail.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{asset('assets/images/product/Pro-01.jpg')}}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{asset('assets/images/product/Pro-01-1.jpg')}}"> </a> </div>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="caption product-detail">
                                    <h5 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt With Ruffle Hem</a></h5>
                                    <span class="price mt_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                    </span>
                                    <div class="button-group">
                                        <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Add to cart</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-layout-left mb_20">
                            <div class="product-list col-xs-4">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="shop_detail.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{asset('assets/images/product/Pro-02.jpg')}}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{asset('assets/images/product/Pro-02-1.jpg')}}"> </a> </div>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="caption product-detail">
                                    <h5 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt With Ruffle Hem</a></h5>
                                    <span class="price mt_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                    </span>
                                    <div class="button-group">
                                        <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Add to cart</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-layout-left mb_20">
                            <div class="product-list col-xs-4">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="shop_detail.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{asset('assets/images/product/Pro-03.jpg')}}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{asset('assets/images/product/Pro-03-1.jpg')}}"> </a> </div>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="caption product-detail">
                                    <h5 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt With Ruffle Hem</a></h5>
                                    <span class="price mt_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                    </span>
                                    <div class="button-group">
                                        <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Add to cart</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="category-page-wrapper mb_50">
                    <div class="col-md-6 col-md-offset-6 text-right list-grid-wrapper">
                        <div class="search"><a href="#"><i class="fa fa-search"></i></a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="product-layout  product-grid  col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                        <div class="item">
                            <div class="product-thumb sc-product-item mb_30">
                                <div class="image product-imageblock">
                                    <a href="{{route('product.show')}}">
                                        <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="caption product-detail text-center">

                                    <h5 data-name="product_name" class="product-name">
                                        <a href="{{route('product.show')}}" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a>
                                    </h5>
                                    <input name="product_price" value="70.00" type="hidden" />
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
                                        <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                </div>
                                <div class="caption product-detail text-center">

                                    <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                                    <input name="product_price" value="70.00" type="hidden" />
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
                                        <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                </div>
                                <div class="caption product-detail text-center">

                                    <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                                    <input name="product_price" value="70.00" type="hidden" />
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
                                        <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                </div>
                                <div class="caption product-detail text-center">

                                    <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                                    <input name="product_price" value="70.00" type="hidden" />
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
                                        <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                </div>
                                <div class="caption product-detail text-center">

                                    <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                                    <input name="product_price" value="70.00" type="hidden" />
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
                                        <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                </div>
                                <div class="caption product-detail text-center">

                                    <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                                    <input name="product_price" value="70.00" type="hidden" />
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
                                        <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                </div>
                                <div class="caption product-detail text-center">

                                    <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                                    <input name="product_price" value="70.00" type="hidden" />
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
                                        <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                </div>
                                <div class="caption product-detail text-center">

                                    <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                                    <input name="product_price" value="70.00" type="hidden" />
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
                                        <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        <img src="{{asset('assets/images/product/product1-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                </div>
                                <div class="caption product-detail text-center">

                                    <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                                    <input name="product_price" value="70.00" type="hidden" />
                                    <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                                    </span>
                                </div>
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
    </div>
</section>
<div id="brand_carouse" class="ptb_100 text-center bg-gray">
    <div class="container">
        <div class="type-01">
            <div class="row">
                <div class="col-sm-12">
                    <div class="brand owl-carousel">
                        <div class="item text-center"> <a href="#"><img src="{{asset('assets/images/brand/brand1.png')}}" alt="Disney" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{asset('assets/images/brand/brand2.png')}}" alt="Dell" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{asset('assets/images/brand/brand3.png')}}" alt="Harley" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{asset('assets/images/brand/brand4.png')}}" alt="Canon" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{asset('assets/images/brand/brand5.png')}}" alt="Canon" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{asset('assets/images/brand/brand6.png')}}" alt="Canon" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{asset('assets/images/brand/brand7.png')}}" alt="Canon" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{asset('assets/images/brand/brand8.png')}}" alt="Canon" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="{{asset('assets/images/brand/brand9.png')}}" alt="Canon" class="img-responsive" /></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =====  CONTAINER END  ===== -->
@endsection

@push('js')

@endpush