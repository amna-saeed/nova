@extends('layout.main')
@section('content')

    <section class="inner-header-career11">
    </section>

    <section class="contact-content sec-padding">
        <div class="outer-bg-gray-100">
            <div class="container">
                <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                    <span class="double-line"></span> &ensp;
                    <h2 class="carres-head">Career</h2>
                    &ensp; <span class="double-line"></span>
                </div>
                <div class="sec-content 500">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cntnt-cntrl">
                                <div class="boxing-outer">
                                    <div class="contact-info">
                                       <p class="career-100">At Nova Communication, we harness advanced GPON (Gigabit Passive Optical Network) technology—the same industry-standard used by some of the 
                                            world’s leading internet, TV, and telephone service providers. Our state-of-the-art fiber-optic infrastructure delivers unparalleled speed, reliability, and 
                                            performance, ensuring that every digital experience—whether streaming, gaming, or communicating—is seamless and superior. Experience the difference 
                                            that expert GPON technology can make.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-content sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('assets/images/webImg/superspeed.png')}}" class="super-2100" alt="" />
                </div>
                <div class="col-md-6">
                    <div class="box-midx-100">
                        <ul class="choose-bulets">
                            <li><span class="chosse-bold">Industry-Leading GPON Network: </span>  <span class="bold-about"> Our 300+ km buried GPON infrastructure</span> ensures uninterrupted service and blazing-fast connectivity</li>
                            <li><span class="chosse-bold">Next-Gen IPTV Experience</span> Enjoy personalized, flexible streaming across <span class="bold-about">  multiple devices</span>.</li>
                            <li><span class="chosse-bold">Comprehensive Cloud & ICT Solutions: </span>Tailored for both  <span class="bold-about"> home users and enterprises.</span></li>
                            <li><span class="chosse-bold">Comprehensive Cloud & ICT Solutions: </span>Tailored for both  <span class="bold-about"> home users and enterprises.</span></li>
                            <li><span class="chosse-bold">Comprehensive Cloud & ICT Solutions: </span>Tailored for both  <span class="bold-about"> home users and enterprises.</span></li>
                            <li><span class="chosse-bold">Comprehensive Cloud & ICT Solutions: </span>Tailored for both  <span class="bold-about"> home users and enterprises.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.novaApp')
    @stop
@section('js')
   

@endsection