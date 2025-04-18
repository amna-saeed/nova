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

    {{-- @include('components.speed') --}}

  
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