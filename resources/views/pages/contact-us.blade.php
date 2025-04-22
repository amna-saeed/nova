@extends('layout.main')
@section('content')

    <section class="inner-header-contact">
    </section>
    <section class="contact-content sec-padding">
        <div class="container">
            <div class="sec-content pt-0">
                <h3 class="touch-contz">Contact Us</h3>
                <p class="hearing-sson">We are looking forward to hearing from you soon</p>
                <div class="spaces-content-100">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="border-curve">
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
                                        <div class="icon-box">
                                            <div class="inner-soclz">
                                                <li><a href="#"  ><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"  ><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"  ><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"  ><i class="fa-brands fa-x-twitter"></i></a></li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form action="#" class="contact-form row" id="contact-page-contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="name" placeholder="Name" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="phone" placeholder="Phone" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="address" placeholder="Address" class="form-control">
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="Message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-12  text-right">
                                        <button class="thm-btn mrg-btn-100" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
 
  
    <style>
        .contact-content {
            background-color: #2b2b2d; 
            color: #fff;
            padding: 100px 20px;
            clip-path: polygon(0 20%, 100% 0, 100% 100%, 0% 100%);
        }

    </style>
    
@endsection


