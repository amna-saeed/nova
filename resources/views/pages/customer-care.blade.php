@extends('layout.main')
@section('content')
    <section class="inner-header-complaint">
    </section>
    <section class="about-content-padding">
        <div class="container">
            <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                <span class="double-line"></span> &ensp;
                <h2>Always Here for You!</h2>
                &ensp; <span class="double-line"></span>
            </div>
            <p class="reach-100">
                Reach out <span class="reach-bold">anytime </span> via our dedicated hotline for <span class="reach-bold">technical support</span> and <span class="reach-bold">service inquiries</span>
            </p>
            <div class="box-hoisting">
                <h4 class="hosting-tmngs">Customer Hotspot Timings:</h4>
                <p class="hoistng-txt">Monday to Thursday and Saturday: 9:00 AM to 6:00 PM <br />
                    Friday: 09:00 AM to 01:00 PM – 2:30 PM till 6:00 PM</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="border-center">
                        <div class="outer-sec">
                            <h4 class="isb-head">Islamabad</h4>
                            <div class="flex-box">
                                <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                <div class="box-one">
                                    <h3 class="map-head">Address</h3>
                                    <p class="loc-address"> 138, Sector C Phase 5 D.H.A, Lahore,Punjab, Pakistan </p>
                                  </div>
                            </div>
                            <div class="flex-box">
                                <i class="fa fa-phone czl" aria-hidden="true"></i>
                                <div class="box-one">
                                    <h3 class="map-head">Call</h3>
                                    <p class="loc-address"> 051-111-111-872</p>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="border-center">
                        <div class="outer-sec">
                            <h4 class="isb-head">Lahore</h4>
                            <div class="flex-box">
                                <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                <div class="box-one">
                                    <h3 class="map-head">Address</h3>
                                    <p class="loc-address"> 138, Sector C Phase 5 D.H.A, Lahore,Punjab, Pakistan </p>
                                </div>
                            </div>
                            <div class="flex-box">
                                <i class="fa fa-phone czl" aria-hidden="true"></i>
                                <div class="box-one">
                                    <h3 class="map-head">Call</h3>
                                    <p class="loc-address"> 051-111-111-872</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- icons --}}
            <section  class="home-serivce sec-padding pb-40 pt-35">
                <div class="container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="clients-carousel owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="border-slider">
                                            <div class="img-box">
                                                <img src="{{asset('assets/images/webImg/6220940.webp')}}" class="care-wd" alt="" />
                                            </div>
                                            <p class="hedz-care">24/7 Helpline</p>
                                            <p class="care-para">Reach out anytime via our dedicated hotline for technical support and service inquiries.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="border-slider">
                                            <div class="img-box">
                                                <img src="{{asset('assets/images/webImg/6220940.webp')}}" class="care-wd" alt="" />
                                            </div>
                                            <p class="hedz-care">Live Chat</p>
                                            <p class="care-para">Instant assistance through our online chat feature available on both desktop and mobile.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="border-slider">
                                            <div class="img-box">
                                                <img src="{{asset('assets/images/webImg/6220940.webp')}}" class="care-wd" alt="" />
                                            </div>
                                            <p class="hedz-care">Complaint & Feedback Portal</p>
                                            <p class="care-para">Submit and track your support tickets through our user-friendly portal.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
 
    @stop
@section('js')
   

@endsection
<style>
i.fas.fa-map-marker-alt{
     display: block;
    height: 1em;
    position: relative;
    width: 1em;
}
.elementor-icon i:before, .elementor-icon svg:before {
    left: 50%;
    position: absolute;
    transform: translateX(-50%);
}
.fa-map-marker-alt:before {
    content: "\f3c5";
}
</style>