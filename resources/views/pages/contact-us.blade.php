@extends('layout.main')
@section('content')

    
    <section class="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 sec-title colored text-center">
                    <h2>Contact</h2>
                    <ul class="breadcumb">
                        <li><a href="index1.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><span>Contact</span></li>
                    </ul>
                    <span class="decor"><span class="inner"></span></span>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-content sec-padding">
        <div class="container">
            <div class="sec-title text-center">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    <br> the industry's standard dummy text ever since the 1500s, when an unknownto </p>
            </div>
            <div class="sec-content">
                <div class="google-map" id="contact-page-google-map" data-icon-path="images/resources/map-marker.png" data-map-lat="-37.812802" data-map-lng="144.956981" data-map-zoom="10" data-map-title="Spidertrix Cons"></div>
                <div class="row">

                    <div class="col-md-12">
                        <h2>Address</h2>
                    </div>
                    <div class="col-md-4">
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
                                    <br> NJ, 07068</p>
                                </div> 
                            </li>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <li>
                                <div class="icon-box">
                                    <div class="inner">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h4>Phone</h4>
                                    <p>(111) 123-1234</p>
                                </div>
                            </li>
                        </div>
                    </div>
                    <div class="col-md-4">
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
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Contact Form</h2>
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
                                <button class="thm-btn" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-40" data-bg-color="#eee">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="img-box">
                                <img src="images/clients/logo-6.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="images/clients/logo-7.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="images/clients/logo-1.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="images/clients/logo-2.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="images/clients/logo-3.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="images/clients/logo-7.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="images/clients/logo-7.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="images/clients/logo-3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop
@section('js')
   

@endsection