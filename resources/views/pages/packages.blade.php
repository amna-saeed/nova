@extends('layout.main')
@section('content')
{{-- <section class="inner-header-contact">
</section> --}}
<div class="row">
    <div class="col-lg-12 p-0">
        <img class="gif-pkg" src="{{asset('assets/images/webImg/03gif_.gif')}}" />
    </div>
</div>
<section class="pkg sec-padding">
    <div class="container-pkg">
        <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
            <span class="double-line"></span> &ensp;
            <h2 class="pkgzhead">Residential Packages</h2>
            &ensp; <span class="double-line"></span>
        </div>
        <div class="sec-content">
            <div class="row">
                <div class="col-md-4 col-sm-6 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="2500ms">
                    <div class="tab-package">
                        <div class="tag-line">
                            <h4>Up to 30 <small> Mbps</small></h4>
                        </div>
                        <h5>Starter Nova</h5>
                        <h6>PKR 2,999 <small class="d-block">+ Tax 100</small></h6>
                        <div class="mbps">
                            <h6><span class="head-h6">Mbps boost on peak hours</span></h6>
                            <h6><span class="head-h6">150GB volume</span></h6>
                            <h6><span class="head-h6">secure connection</span></h6>
                        </div>
                        <a href="https://transworld-home.com/order-now?internet=150" class="btn-order" tabindex="0">Order Now</a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow slideInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                    <div class="tab-package">
                        <div class="tag-line">
                            <h4>Up to 40 <small>Mbps</small></h4>
                        </div>
                        <h5>Silver Nova</h5>
                        <h6>PKR 3,299  <small class="d-block">+ Tax	100</small></h6>
                        <div class="mbps">
                            <h6><span class="head-h6">Mbps boost</span></h6>
                            <h6><span class="head-h6">250GB volume</span></h6>
                            <h6><span class="head-h6">HD streaming</span></h6>
                        </div>
                        <a href="https://transworld-home.com/order-now?internet=150" class="btn-order" tabindex="0">Order Now</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow slideInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                    <div class="tab-package">
                        <div class="tag-line">
                            <h4>Up to 75 <small> Mbps</small></h4>
                        </div>
                        <h5>Gold Nova</h5>
                        <h6>PKR 4,099 <small class="d-block">+ Tax 100 </small></h6>
                        <div class="mbps">
                            <h6><span class="head-h6">Mbps boost</span></h6>
                            <h6><span class="head-h6">unlimited downloads</span></h6>
                        </div>
                        <a href="https://transworld-home.com/order-now?internet=150" class="btn-order" tabindex="0">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="tab-package">
                        <div class="tag-line">
                            <h4>Up to 100 <small> Mbps</small></h4>
                        </div>
                        <h5>Platinum Nova</h5>
                        <h6>PKR 5,799 <small class="d-block">+Tax</small></h6>
                        <div class="mbps">
                            <h6><span class="head-h6">Unlimited downloads</span></h6>
                            <h6><span class="head-h6">seamless streaming</span></h6>
                        </div>
                        <a href="https://transworld-home.com/order-now?internet=150" class="btn-order" tabindex="0">Order Now</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="tab-package">
                        <div class="tag-line">
                            <h4>Up to 150<small> Mbps</small></h4>
                        </div>
                        <h5>Ultra Nova</h5>
                        <h6>PKR 8,099 <small class="d-block">+Tax</small></h6>
                        <div class="mbps">
                            <h6><span class="head-h6">Unlimited downloads</span></h6>
                            <h6><span class="head-h6">superior connectivity</span></h6>
                        </div>
                        <a href="https://transworld-home.com/order-now?internet=150" class="btn-order" tabindex="0">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                <span class="double-line"></span> &ensp;
                <h2 class="pkgzhead-busi">Business & Enterprise Packages</h2>
                &ensp; <span class="double-line"></span>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="2500ms">
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

                <div class="col-md-4 col-sm-6 wow slideInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
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
            </div>
        </div>
    </div>
    {{--  --}}
    @include('components.novaApp')
    
</section>
@stop
@section('js')
@endsection
