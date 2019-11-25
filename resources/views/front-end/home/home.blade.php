

@extends('front-end.master')

@section('title')
    HOME
@endsection


@section('body')

    <div class="banner-w3">
        <div class="demo-1">
            <div id="example1" class="core-slider core-slider__carousel example_1">
                <div class="core-slider_viewport">
                    <div class="core-slider_list">
                        <div class="core-slider_item">
                            <img src="{{ asset('/') }}/front-end/images/image11.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{ asset('/') }}/front-end/images/image3_.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{ asset('/') }}/front-end/images/image5.png" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{ asset('/') }}/front-end/images/image1.jpg" class="img-responsive" alt="">
                        </div>
                      
                    </div>
                </div>
                <div class="core-slider_nav">
                    <div class="core-slider_arrow core-slider_arrow__right"></div>
                    <div class="core-slider_arrow core-slider_arrow__left"></div>
                </div>
                <div class="core-slider_control-nav"></div>
            </div>
        </div>
        <link href="{{ asset('/') }}/front-end/css/coreSlider.css" rel="stylesheet" type="text/css">
        <script src="{{ asset('/') }}/front-end/js/coreSlider.js"></script>
        <script>
            $('#example1').coreSlider({
                pauseOnHover: false,
                interval: 3000,
                controlNavEnabled: true
            });

        </script>

    </div>
    <!--banner-->
    <!--content-->
    
        <!--banner-bottom-->
        <!--new-arrivals-->
        <div class="new-arrivals-w3agile">
            <div class="container">
                <h2 class="tittle">New Arrivals</h2>
                <div class="arrivals-grids">
                    @foreach($newProducts as $newProduct)
                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                                <figure>
                                    <a href="{{ route('product-details', ['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }}" class="new-gri">
                                        <div class="grid-img">
                                            <img  src="{{ asset($newProduct->product_image) }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{ asset($newProduct->product_image) }}" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                            <div class="ribben1">
                                <p>SALE</p>
                            </div>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="women">
                                <h6><a href="single.html">{{ $newProduct->product_name }}</a></h6>
                              
                                <p><em class="item_price">TK. {{ $newProduct->product_price }}  </em></p>
                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--new-arrivals-->
        <!--accessories-->
        <div class="accessories-w3l">
            <div class="container">
                <h3 class="tittle">20% Discount on</h3>
                <span>TRENDING DESIGNS</span>
                <div class="button">
                    <a href="#" class="button1"> Shop Now</a>
                    <a href="#" class="button1"> Quick View</a>
                </div>
            </div>
        </div>
        <!--accessories-->
        <!--Products-->
        <div class="product-agile">
            <div class="container">
                <h3 class="tittle1"> New Products</h3>
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <div class="caption">
                                    <div class="col-md-3 cap-left simpleCart_shelfItem">
                                        <div class="grid-arr">
                                            <div  class="grid-arrival">
                                                <figure>
                                                    <a href="single.html">
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/cctv.jpg" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/cctv.jpg" class="img-responsive"  alt="">
                                                        </div>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="women">
                                                <h6><a href="single.html">CCTV</a></h6>
                                               
                                               <em class="item_price">TK.1800</em></p>
                                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 cap-left simpleCart_shelfItem">
                                        <div class="grid-arr">
                                            <div  class="grid-arrival">
                                                <figure>
                                                    <a href="single.html">
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/androidtv.jpg" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/androidtv.jpg" class="img-responsive"  alt="">
                                                        </div>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="women">
                                                <h6><a href="single.html">Smart TV</a></h6>
                                                <span class="size">XL / XXL / S </span>
                                                <p ><del>$100.00</del><em class="item_price">TK.80000</em></p>
                                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 cap-left simpleCart_shelfItem">
                                        <div class="grid-arr">
                                            <div  class="grid-arrival">
                                                <figure>
                                                    <a href="single.html">
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/digitalCamera.jpg" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/digitalCamera.jpg" class="img-responsive"  alt="">
                                                        </div>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="ribben1">
                                                <p>NEW</p>
                                            </div>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="women">
                                                <h6><a href="single.html">Digital Camera</a></h6>
                                               
                                               <em class="item_price">TK.120000</em></p>
                                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 cap-left simpleCart_shelfItem">
                                        <div class="grid-arr">
                                            <div  class="grid-arrival">
                                                <figure>
                                                    <a href="single.html">
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/drone.jpg" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/drone.jpg" class="img-responsive"  alt="">
                                                        </div>
                                                    </a>
                                                </figure>
                                                <div class="ribben1">
                                                <p>NEW</p>
                                            </div>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="women">
                                                <h6><a href="single.html">Mini Drone</a></h6>
                                                
                                                <em class="item_price">TK.5000</em></p>
                                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <div class="caption">
                                    <div class="col-md-3 cap-left simpleCart_shelfItem">
                                        <div class="grid-arr">
                                            <div  class="grid-arrival">
                                                <figure>
                                                    <a href="single.html">
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/p21.jpg" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/p22.jpg" class="img-responsive"  alt="">
                                                        </div>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="women">
                                                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                                <span class="size">XL / XXL / S </span>
                                                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 cap-left simpleCart_shelfItem">
                                        <div class="grid-arr">
                                            <div  class="grid-arrival">
                                                <figure>
                                                    <a href="single.html">
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/p24.jpg" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/p23.jpg" class="img-responsive"  alt="">
                                                        </div>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="women">
                                                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                                <span class="size">XL / XXL / S </span>
                                                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 cap-left simpleCart_shelfItem">
                                        <div class="grid-arr">
                                            <div  class="grid-arrival">
                                                <figure>
                                                    <a href="single.html">
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/p26.jpg" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/p25.jpg" class="img-responsive"  alt="">
                                                        </div>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="ribben">
                                                <p>-75%</p>
                                            </div>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="women">
                                                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                                <span class="size">XL / XXL / S </span>
                                                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 cap-left simpleCart_shelfItem">
                                        <div class="grid-arr">
                                            <div  class="grid-arrival">
                                                <figure>
                                                    <a href="single.html">
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/p10.jpg" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="grid-img">
                                                            <img  src="{{ asset('/') }}/front-end/images/p9.jpg" class="img-responsive"  alt="">
                                                        </div>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="women">
                                                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                                <span class="size">XL / XXL / S </span>
                                                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Products-->
        <div class="latest-w3">
            <div class="container">
                <h3 class="tittle1">Latest Product </h3>
                <div class="latest-grids">
                    <div class="col-md-4 latest-grid">
                        <div class="latest-top">
                            <img  src="{{ asset('/') }}/front-end/images/headphone.jpg" class="img-responsive"  alt="">
                            <div class="latest-text">
                                <h4>Headphone</h4>
                            </div>
                            <div class="latest-text2 hvr-sweep-to-top">
                                <h4>-40%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 latest-grid">
                        <div class="latest-top">
                            <img  src="{{ asset('/') }}/front-end/images/microphone.jpg" class="img-responsive"  alt="">
                            <div class="latest-text">
                                <h4>Microphone</h4>
                            </div>
                            <div class="latest-text2 hvr-sweep-to-top">
                                <h4>-20%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 latest-grid">
                        <div class="latest-top">
                            <img  src="{{ asset('/') }}/front-end/images/boot.jpg" class="img-responsive"  alt="">
                            <div class="latest-text">
                                <h4>Shoe</h4>
                            </div>
                            <div class="latest-text2 hvr-sweep-to-top">
                                <h4>-30%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="latest-grids">
                    <div class="col-md-4 latest-grid">
                        <div class="latest-top">
                            <img  src="{{ asset('/') }}/front-end/images/shirt.jpg" class="img-responsive"  alt="">
                            <div class="latest-text">
                                <h4>Shirt</h4>
                            </div>
                            <div class="latest-text2 hvr-sweep-to-top">
                                <h4>-35%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 latest-grid">
                        <div class="latest-top">
                            <img  src="{{ asset('/') }}/front-end/images/l5.jpg" class="img-responsive"  alt="">
                            <div class="latest-text">
                                <h4>Ladies Bag</h4>
                            </div>
                            <div class="latest-text2 hvr-sweep-to-top">
                                <h4>-10%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 latest-grid">
                        <div class="latest-top">
                            <img  src="{{ asset('/') }}/front-end/images/sweater.jpg" class="img-responsive"  alt="">
                            <div class="latest-text">
                                <h4>Sweater</h4>
                            </div>
                            <div class="latest-text2 hvr-sweep-to-top">
                                <h4>-30%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        
        
        <div class="new-arrivals-w3agile">
            <div class="container">
                <h3 class="tittle1">Best Sellers</h3>
                <div class="arrivals-grids">
                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                               
                         
                               
                               
                                <figure>
                                <a href="single.html">
                                    <a href="{{ route('product-details', ['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }}" class="new-gri">
                                        <div class="grid-img">
                                            <img  src="{{ asset('/') }}/front-end/images/HuaweiPro.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{ asset('/') }}/front-end/images/HuaweiPro.jpg" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                            <div class="ribben1">
                                <p>SALE</p>
                            </div>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                           
                            
                           
                           
                            <div class="women">
                                <h6><a href="single.html">HuaweiPro </a></h6>
                  
                                <em class="item_price">TK.30000</em></p>
                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                                <figure>
                                <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{ asset('/') }}/front-end/images/image9.png" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{ asset('/') }}/front-end/images/image9.png" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                            <div class="ribben1">
                                <p>SALE</p>
                            </div>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="women">
                                <h6><a href="single.html">Samsung Tab</a></h6>
                  
                                <em class="item_price">TK.25000</em></p>
                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                                <figure>
                                <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{ asset('/') }}/front-end/images/watch2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{ asset('/') }}/front-end/images/watch2.jpg" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="women">
                                <h6><a href="single.html">Watch</a></h6>
                              
                              <em class="item_price">TK.4000</em></p>
                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                            </div>
                            </div>
                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                                <figure>
                                <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{ asset('/') }}/front-end/images/add1.jpeg" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{ asset('/') }}/front-end/images/add1.jpeg" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="women">
                                <h6><a href="single.html">Lenovo</a></h6>
                              
                              <em class="item_price">Tk.45000</em></p>
                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--new-arrivals-->
    </div>
@endsection















