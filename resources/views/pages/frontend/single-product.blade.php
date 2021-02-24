@extends('layouts.single-item')

@section('title', 'Product Details')
@push('css')

@endpush
@section('content')
<!-- =====  BREADCRUMB STRAT  ===== -->
<div class="breadcrumb pt_100 pb_50">
    <div class="container mt_50">
        <h1 class="mb_20">Product Details</h1>
        <ul class="right">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{route('product')}}">Product</a></li>
            <li class="active">Project Details</li>
        </ul>
    </div>
</div>
<!-- =====  BREADCRUMB END===== -->
<!-- =====  CONTAINER START  ===== -->
<section id="shop">
    <div class="container">
        <div class="row mt_100 sc-product-item">
            <div class="col-sm-5">
                <div><a class="thumbnails"> <img data-name="product_image" src="{{asset('assets/images/product/product1.jpg')}}" alt="" /></a></div>
                <div id="product-thumbnail" class="owl-carousel">
                    <div class="item">
                        <div class="image-additional"><a class="thumbnail" href="{{asset('assets/images/product/product1.jpg')}}" data-fancybox="group1"> <img src="{{asset('assets/images/product/product1.jpg')}}" alt="" /></a></div>
                    </div>
                    <div class="item">
                        <div class="image-additional"><a class="thumbnail" href="{{asset('assets/images/product/product2.jpg')}}" data-fancybox="group1"> <img src="{{asset('assets/images/product/product2.jpg')}}" alt="" /></a></div>
                    </div>
                    <div class="item">
                        <div class="image-additional"><a class="thumbnail" href="{{asset('assets/images/product/product3.jpg')}}" data-fancybox="group1"> <img src="{{asset('assets/images/product/product3.jpg')}}" alt="" /></a></div>
                    </div>
                    <div class="item">
                        <div class="image-additional"><a class="thumbnail" href="{{asset('assets/images/product/product4.jpg')}}" data-fancybox="group1"> <img src="{{asset('assets/images/product/product4.jpg')}}" alt="" /></a></div>
                    </div>
                    <div class="item">
                        <div class="image-additional"><a class="thumbnail" href="{{asset('assets/images/product/product5.jpg')}}" data-fancybox="group1"> <img src="{{asset('assets/images/product/product5.jpg')}}" alt="" /></a></div>
                    </div>
                    <div class="item">
                        <div class="image-additional"><a class="thumbnail" href="{{asset('assets/images/product/product6.jpg')}}" data-fancybox="group1"> <img src="{{asset('assets/images/product/product6.jpg')}}" alt="" /></a></div>
                    </div>
                    <div class="item">
                        <div class="image-additional"><a class="thumbnail" href="{{asset('assets/images/product/product7.jpg')}}" data-fancybox="group1"> <img src="{{asset('assets/images/product/product7.jpg')}}" alt="" /></a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 prodetail caption">
                <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h5>

                <input name="product_price" value="2990.50" type="hidden" />
                <span class="price mb_40"><span class="amount"><span class="currencySymbol">$</span>2990.50</span>
                </span>
                <hr>
                <ul class="list-unstyled product_info mtb_30">
                    <li>
                        <label>Brand:</label>
                        <span> <a href="#">Apple</a></span>
                    </li>
                    <li>
                        <label>Product Code:</label>
                        <span> product 20</span>
                    </li>
                    <li>
                        <label>Availability:</label>
                        <span> In Stock</span>
                    </li>
                </ul>
                <hr>
                <p class="product-desc mtb_30"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go. Cover Flow. Browse through your music collection by flipping..</p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="heading-part text-center">
                    <h2 class="main_title mt_50 mb_30">Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-layout  product-grid related-pro  owl-carousel mb_50">
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock"> <a href="shop_detail.html"> <img data-name="product_image" src="{{asset('assets/images/product/Pro-03.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{asset('assets/images/product/Pro-03-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                        <div class="caption product-detail text-center">
                            <div class="rating mtb_10"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> </div>
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                            <input name="product_price" value="70.00" type="hidden" />
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                            <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                            <div class="form-group">
                                <label>Size: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Small"> S </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Medium"> M </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Large"> L </label>
                                <br>
                                <label>Color: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="red"> red </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="blue"> blue </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="green"> green </label>
                            </div>
                            <div class="button-group text-center">
                                <div class="wishlist"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i><span>wishlist</span></a></div>
                                <div class="quickview"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a></div>
                                <div class="compare"><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i><span>Compare</span></a></div>
                                <div class="add-to-cart sc-add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Add to cart</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock"> <a href="shop_detail.html"> <img data-name="product_image" src="{{asset('assets/images/product/Pro-03.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{asset('assets/images/product/Pro-03-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                        <div class="caption product-detail text-center">
                            <div class="rating mtb_10"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> </div>
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem321</a></h5>
                            <input name="product_price" value="70.00" type="hidden" />
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                            <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                            <div class="form-group">
                                <label>Size: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Small"> S </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Medium"> M </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Large"> L </label>
                                <br>
                                <label>Color: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="red"> red </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="blue"> blue </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="green"> green </label>
                            </div>
                            <div class="button-group text-center">
                                <div class="wishlist"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i><span>wishlist</span></a></div>
                                <div class="quickview"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a></div>
                                <div class="compare"><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i><span>Compare</span></a></div>
                                <div class="add-to-cart sc-add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Add to cart</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock"> <a href="shop_detail.html"> <img data-name="product_image" src="{{asset('assets/images/product/Pro-03.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{asset('assets/images/product/Pro-03-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                        <div class="caption product-detail text-center">
                            <div class="rating mtb_10"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> </div>
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                            <input name="product_price" value="75.00" type="hidden" />
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>75.00</span>
                            </span>
                            <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                            <div class="form-group">
                                <label>Size: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Small"> S </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Medium"> M </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Large"> L </label>
                                <br>
                                <label>Color: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="red"> red </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="blue"> blue </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="green"> green </label>
                            </div>
                            <div class="button-group text-center">
                                <div class="wishlist"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i><span>wishlist</span></a></div>
                                <div class="quickview"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a></div>
                                <div class="compare"><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i><span>Compare</span></a></div>
                                <div class="add-to-cart sc-add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Add to cart</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock"> <a href="shop_detail.html"> <img data-name="product_image" src="{{asset('assets/images/product/Pro-03.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{asset('assets/images/product/Pro-03-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                        <div class="caption product-detail text-center">
                            <div class="rating mtb_10"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> </div>
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                            <input name="product_price" value="80.00" type="hidden" />
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>80.00</span>
                            </span>
                            <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                            <div class="form-group">
                                <label>Size: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Small"> S </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Medium"> M </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Large"> L </label>
                                <br>
                                <label>Color: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="red"> red </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="blue"> blue </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="green"> green </label>
                            </div>
                            <div class="button-group text-center">
                                <div class="wishlist"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i><span>wishlist</span></a></div>
                                <div class="quickview"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a></div>
                                <div class="compare"><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i><span>Compare</span></a></div>
                                <div class="add-to-cart sc-add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Add to cart</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock"> <a href="shop_detail.html"> <img data-name="product_image" src="{{asset('assets/images/product/Pro-03.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{asset('assets/images/product/Pro-03-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                        <div class="caption product-detail text-center">
                            <div class="rating mtb_10"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> </div>
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                            <input name="product_price" value="90.00" type="hidden" />
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>90.00</span>
                            </span>
                            <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                            <div class="form-group">
                                <label>Size: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Small"> S </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Medium"> M </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Large"> L </label>
                                <br>
                                <label>Color: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="red"> red </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="blue"> blue </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="green"> green </label>
                            </div>
                            <div class="button-group text-center">
                                <div class="wishlist"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i><span>wishlist</span></a></div>
                                <div class="quickview"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a></div>
                                <div class="compare"><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i><span>Compare</span></a></div>
                                <div class="add-to-cart sc-add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Add to cart</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock"> <a href="shop_detail.html"> <img data-name="product_image" src="{{asset('assets/images/product/Pro-03.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{asset('assets/images/product/Pro-03-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                        <div class="caption product-detail text-center">
                            <div class="rating mtb_10"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> </div>
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem321</a></h5>
                            <input name="product_price" value="50.00" type="hidden" />
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>50.00</span>
                            </span>
                            <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                            <div class="form-group">
                                <label>Size: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Small"> S </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Medium"> M </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Large"> L </label>
                                <br>
                                <label>Color: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="red"> red </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="blue"> blue </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="green"> green </label>
                            </div>
                            <div class="button-group text-center">
                                <div class="wishlist"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i><span>wishlist</span></a></div>
                                <div class="quickview"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a></div>
                                <div class="compare"><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i><span>Compare</span></a></div>
                                <div class="add-to-cart sc-add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Add to cart</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock"> <a href="shop_detail.html"> <img data-name="product_image" src="{{asset('assets/images/product/Pro-03.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{asset('assets/images/product/Pro-03-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                        <div class="caption product-detail text-center">
                            <div class="rating mtb_10"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> </div>
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem</a></h5>
                            <input name="product_price" value="36.00" type="hidden" />
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>36.00</span>
                            </span>
                            <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                            <div class="form-group">
                                <label>Size: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Small"> S </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Medium"> M </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Large"> L </label>
                                <br>
                                <label>Color: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="red"> red </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="blue"> blue </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="green"> green </label>
                            </div>
                            <div class="button-group text-center">
                                <div class="wishlist"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i><span>wishlist</span></a></div>
                                <div class="quickview"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a></div>
                                <div class="compare"><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i><span>Compare</span></a></div>
                                <div class="add-to-cart sc-add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Add to cart</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock"> <a href="shop_detail.html"> <img data-name="product_image" src="{{asset('assets/images/product/Pro-03.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{asset('assets/images/product/Pro-03-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                        <div class="caption product-detail text-center">
                            <div class="rating mtb_10"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> </div>
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle</a></h5>
                            <input name="product_price" value="70.00" type="hidden" />
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                            <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                            <div class="form-group">
                                <label>Size: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Small"> S </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Medium"> M </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Large"> L </label>
                                <br>
                                <label>Color: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="red"> red </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="blue"> blue </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="green"> green </label>
                            </div>
                            <div class="button-group text-center">
                                <div class="wishlist"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i><span>wishlist</span></a></div>
                                <div class="quickview"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a></div>
                                <div class="compare"><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i><span>Compare</span></a></div>
                                <div class="add-to-cart sc-add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Add to cart</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-thumb sc-product-item mb_30">
                        <div class="image product-imageblock"> <a href="shop_detail.html"> <img data-name="product_image" src="{{asset('assets/images/product/Pro-03.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{asset('assets/images/product/Pro-03-1.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                        <div class="caption product-detail text-center">
                            <div class="rating mtb_10"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> </div>
                            <h5 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Shirt With Ruffle Hem321</a></h5>
                            <input name="product_price" value="55.00" type="hidden" />
                            <span class="price mtb_10"><span class="amount"><span class="currencySymbol">$</span>55.00</span>
                            </span>
                            <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                            <div class="form-group">
                                <label>Size: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Small"> S </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Medium"> M </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_size" value="Large"> L </label>
                                <br>
                                <label>Color: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="red"> red </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="blue"> blue </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_color" value="green"> green </label>
                            </div>
                            <div class="button-group text-center">
                                <div class="wishlist"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i><span>wishlist</span></a></div>
                                <div class="quickview"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a></div>
                                <div class="compare"><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i><span>Compare</span></a></div>
                                <div class="add-to-cart sc-add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Add to cart</span></a></div>
                            </div>
                        </div>
                    </div>
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