@extends('layout.main')
@section('content')

    <section class="inner-header-contact">
    </section>
    <section class="contact-content sec-padding">
        <div class="container">
            <div class="sec-content">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('assets/images/webImg/tna-t3-img-2.jpg')}}" class="contact-200" alt="Happy Customers">
                    </div>
                    <div class="col-md-6 border-curve">
                        <div class="border-curve-inner-100">
                            <h3 class="touch-contz">Get In Touch With Us</h3>
                            <div class="boxing-outer">
                                <div class="contact-info">
                                    <li>
                                        <div class="icon-box">
                                            <div class="inner">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <h4>Email</h4>
                                            <p>info@example.com</p>
                                        </div>
                                    </li>
                                </div>
                            </div>
                            <div class="boxing-outer">
                                <div class="contact-info">
                                    <li>
                                        <div class="icon-box">
                                            <div class="inner">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <h4>Phone</h4>
                                            <p>051-111-111-872</p>
                                        </div>
                                    </li>
                                </div>
                            </div>
                            <div class="boxing-outer">
                                <div class="contact-info"> 
                                    <li>
                                        <div class="icon-box">
                                            <div class="inner">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <h4>Address</h4>
                                            <p>00 Monroe Ave, Roseland,
                                             NJ, 07068</p>
                                        </div> 
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                            <span class="double-line"></span> &ensp;
                            <h2>Contact Form</h2>
                            &ensp; <span class="double-line"></span>
                        </div>
                        <form action="#" class="contact-form row" id="contact-page-contact-form">
                            <div class="col-sm-6">
                                <input type="text" name="name" placeholder="Name">
                                <input type="text" name="email" placeholder="Email">
                                <input type="text" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-sm-6">
                                <textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="thm-btn mrg-btn" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="google-map" id="contact-page-google-map" data-icon-path="images/resources/map-marker.png" data-map-lat="-37.812802" data-map-lng="144.956981" data-map-zoom="10" data-map-title="Spidertrix Cons"></div>
            </div>
        </div>
    </section>
 
    @stop
@section('js')
   

@endsection