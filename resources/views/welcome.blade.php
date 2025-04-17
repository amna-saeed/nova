@extends('layout.main')
@section('content')
   
    @include('components.home-slider')
    @include('components.packages')

    @include('components.services')

    {{-- follow us --}}
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="footer-call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 sm-text-center text-center">
                            <h3>Follow Us</h3>
                            <h3 class="stay-100">Stay connected for the latest updates, offers, and <br/>
                                behind-the-scenes content</h3>
                                <h3 class="follow-fnt-100">Follow us and be part of the journey!</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="linez-same">
                                <div class="bg-outer-100">
                                    <a href="#"> <img src="{{asset('assets/images/webImg/fbicon.png')}}" class="follow-scl" /></a>
                                    <a href="#"><img src="{{asset('assets/images/webImg/instgramicon.png')}}" class="follow-scl" /></a>
                                    <a href="#"><img src="{{asset('assets/images/webImg/LinkedInIcon.png')}}" class="follow-scl" /></a>
                                    <a href="#"><img src="{{asset('assets/images/webImg/xicon.png')}}" class="follow-scl" /></a>
                                    <a href="#"><img src="{{asset('assets/images/webImg/whatsappicon.png')}}" class="follow-scl" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
   

    @include('components.coverage')

    @include('components.who-we')

    {{-- @include('components.novaApp') --}}

    <!-- Pricing Table -->
    {{-- <section class="pricingTable-1 pt-20 pb-30">
        <div class="container">
            <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                <span class="double-line"></span> &ensp;
                <h2>Budget Friendly Packages</h2>
                &ensp; <span class="double-line"></span>
            </div>
            <div class="sec-content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="2500ms">
                        <div class="tab-package">
                            <div class="tag-line">
                                <h4>20 – 100<small> Mbps</small></h4>
                            </div>
                            <h5>SME Pro Connection</h5>
                            <h6>PKR 10,000 <small class="d-block">+Tax</small></h6>
                            <div class="mbps">
                                <h6><span class="head-h6">Dedicated bandwidth</span></h6>
                                <h6><span class="head-h6">24/7 support</span></h6>
                                <h6><span class="head-h6">secure connection</span></h6>
                            </div>
                            <a href="https://transworld-home.com/order-now?internet=150" class="btn-order" tabindex="0">Order Now</a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 wow slideInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                        <div class="tab-package">
                            <div class="tag-line">
                                <h4>Up to 1<small>Gbps</small></h4>
                            </div>
                            <h5>Enterprise Connect</h5>
                            <h6>Custom Pricing <small class="d-block"></small></h6>
                            <div class="mbps">
                                <h6><span class="head-h6">Fully tailored solutions</span></h6>
                                <h6><span class="head-h6">managed IT & cloud services</span></h6>
                                <h6><span class="head-h6">24/7 support</span></h6>
                            </div>
                            <a href="https://transworld-home.com/order-now?internet=150" class="btn-order" tabindex="0">Order Now</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow slideInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                        <div class="tab-package">
                            <div class="tag-line">
                                <h4>Up to 100 <small> Mbps</small></h4>
                            </div>
                            <h5>Platinum Nova</h5>
                            <h6>PKR 5,799 <small class="d-block"> +Tax</small></h6>
                            <div class="mbps">
                                <h6><span class="head-h6">Unlimited downloads</span></h6>
                                <h6><span class="head-h6">seamless streaming</span></h6>
                                <h6><span class="head-h6">24/7 support</span></h6>
                            </div>
                            <a href="https://transworld-home.com/order-now?internet=150" class="btn-order" tabindex="0">Order Now</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="tab-package">
                            <div class="tag-line">
                                <h4>Up to 150 <small> Mbps</small></h4>
                            </div>
                            <h5>Ultra Nova</h5>
                            <h6>PKR 8,099  <small class="d-block">+Tax</small></h6>
                            <div class="mbps">
                                <h6><span class="head-h6">Unlimited downloads</span></h6>
                                <h6><span class="head-h6">superior connectivity</span></h6>
                                <h6><span class="head-h6">24/7 support</span></h6>
                            </div>
                            <a href="https://transworld-home.com/order-now?internet=150" class="btn-order" tabindex="0">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <div class="container-half-100 pt-20 pb-30">
        <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
            <span class="double-line"></span> &ensp;
            <h2>Our Services</h2>
            &ensp; <span class="double-line"></span>
        </div>
        <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
            <div class="row uk-padding">
                <div class="col-md-7 col-sm-4 uk-first-column">
                    <a href="">
                        <div class="single_thumb fade_anim uk-scrollspy-inview" style="">
                            <div class="img UH_ProjectContentImage">
                                <img src="{{asset('assets/images/hosting/580.png')}}" class="uk-srvce" alt="" />
                            </div>
                            <div class="uk-srvce-txt">
                                <h4>Voice & Telephony Services</h4>
                                <div class="srvce-box-200">
                                    <p>Crystal-Clear Voice</p>
                                    <p>Competitive Calling Plans</p>
                                    <p>Customizable Residential & Business Plans</p>
                                </div>
                                
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-5 col-sm-4">
                    <div class="single_thumb">
                        <div class="uk-child-width-1-1 uk-grid uk-grid-stack">
                            <div class="fade_anim uk-scrollspy-inview uk-first-column" style="">
                                <a href="">
                                    <div class="uk-position-relative">
                                        <div class="img UH_ProjectContentImage">
                                        <img src="{{asset('assets/images/hosting/909-ezgif.com-png.webp')}}" class="uk-srvce2" alt="" />
                                        </div>
                                        <div class="uk-srvce-2-txt">
                                            <h4>High-Speed Internet</h4>
                                            <div class="srvce-box-200">
                                                <p>Fiber-to-the-Home</p>
                                                <p>Advanced GPON Technology</p>
                                                <p>Customizable Residential & Business Plans</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-margin-small-top fade_anim uk-grid-margin uk-first-column uk-scrollspy-inview">
                                <a href="https://stormfiber.com/products/hdtv/">
                                    <div class="uk-position-relative">
                                        <div class="img UH_ProjectContentImage">
                                            <img src="{{asset('assets/images/hosting/022.webp')}}" class="uk-srvce2" alt="" />
                                        </div>
                                        <div class="uk-srvce-2-txt">
                                            <h4>Digital TV & Entertainment</h4>
                                            <div class="srvce-box-200">
                                                <p>NovaTV App</p>
                                                <p>Interactive Entertainment</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- @include('components.speed') --}}

    

    
    <!-- End about area -->

    {{-- <section class="discount-bnr">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pt-15 pb-40 text-center wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <img src="{{asset('assets/images/hosting/p2.webp')}}" class="disc-100" alt="" />
                </div>
                <div class="col-md-6 pt-15 pb-40 text-center wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <img src="{{asset('assets/images/hosting/p1.webp')}}" class="disc-100" alt="" />
                </div>
            </div>
        </div>
    </section>  --}}

   
  
    <!--Blog Section-->
    <section class="blog-section pt-15 pb-30">
        <div class="container">
            <div class="sec-title">
                <span class="double-line"></span> &ensp;
                <h2>Blogs</h2>
                &ensp; <span class="double-line"></span>
            </div>
            <div class="sec-content">
                <div class="row clearfix">
                    <!--Blog Post-->
                    <div class="col-xs-12 col-sm-6 col-md-4 featured-blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <article class="inner-box hvr-float-shadow">
                            <figure class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/images/webImg/phone-2.webp')}}" alt="" /></a>
                            </figure>
                            <div class="post-lower">
                                <div class="post-header">
                                    <div class="date">
                                        <span class="day">28</span> 
                                        APR
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Digital Marketing</a></h3>
                                </div>
                                <div class="post-desc">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era...</p>
                                    <div class="text-right">
                                        <a href="blog-details.html" class="text-thm fs-14">Read more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--Blog Post-->
                    <div class="col-xs-12 col-sm-6 col-md-4 featured-blog-post wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <article class="inner-box hvr-float-shadow">
                            <figure class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/images/webImg/ONT1.webp')}}" alt="" /></a>
                            </figure>
                            <div class="post-lower">
                                <div class="post-header">
                                    <div class="date">
                                        <span class="day">15</span> 
                                        APR
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Digital Photography</a></h3>
                                </div>
                                <div class="post-desc">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era...</p>
                                    <div class="text-right">
                                        <a href="blog-details.html" class="text-thm fs-14">Read more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--Blog Post-->
                    <div class="col-xs-12 col-sm-6 col-md-4 featured-blog-post wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <article class="inner-box hvr-float-shadow">
                            <figure class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/images/webImg/TV1.webp')}}" alt="" /></a>
                            </figure>
                            <div class="post-lower">
                                <div class="post-header">
                                    <div class="date">
                                        <span class="day">09</span> 
                                        APR
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Outsourcing Tips</a></h3>
                                </div>
                                <div class="post-desc">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era...</p>
                                    <div class="text-right">
                                        <a href="blog-details.html" class="text-thm fs-14">Read more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

@stop
@section('js')
   

@endsection