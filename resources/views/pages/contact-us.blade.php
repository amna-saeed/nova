@extends('layout.main')
@section('content')

    {{-- <section class="inner-header-contact">
    </section> --}}
    <section class="contact-content sec-padding">
        <div class="bg-card-bnner-100">
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
                                                    <h1>Email</h1>
                                                    <p>sales@nova.net.pk</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-box">
                                                    <div class="inner">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                                <div class="content-box">
                                                    <h1>Contact Number</h1>
                                                    <p>051-111-111-872</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-box">
                                                    <div class="inner">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                </div>
                                                <div class="content-box">
                                                    <h1>ISLAMAD ADDRESS</h1>
                                                    <p>suit no.1 & 2, floor 2nd, Muhammadi plaza nazim ud-din rd F-6/4 Blue Area, Islamabad, Islamabad Capital Territory 46000, Pakistan</p>
                                                    <h1>LAHORE ADDRESS</h1>
                                                    <p>office #10 1st floor Askari Mall Sector B Askari 11 Lahore</p>
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
                                            <button class="thm-btn mrg-btn-100" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>
 
  
    <style>
/* .calculate input, .contact-content .contact-form textarea, .contact-content .contact-form input {
    width: 100%;
    height: 58px;
    border: 1px solid #a3a1a1 !important;
    background-color: #bdb9b9 !important;
    color: black !important;
    outline: none;
    padding-left: 14px;
    line-height: 58px;
    margin-bottom: 20px;
    border-radius: 6px;
} */
.calculate input, .contact-content .contact-form textarea, .contact-content .contact-form input {
    width: 100%;
    height: 58px;
    border: 1px solid #c9c4c4 !important;
    background-color: #fafafa !important;
    color: #474747 !important;
    outline: none;
    padding-left: 14px;
    line-height: 58px;
    margin-bottom: 20px;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 600;
}
::placeholder{
    color:#474747 !important;
}
h3.touch-contz {
    font-size: 43px;
    color: #da0000;
    font-family: "Unbounded", Sans-serif !important;
    margin-bottom: 16px;
    text-align: left;
    margin: 55px 20px 7px;
    line-height: 39px;
}
p.hearing-sson {
    text-align: left;
    font-size: 25px;
    text-transform: capitalize;
    color: #2c2c2c;
    font-weight: 600;
    margin: 0px 20px 40px;
}
.contact-content .contact-info li .content-box h1 {
    margin: 0;
    font-size: 17px;
    text-transform: uppercase;
    color: #000;
    font-weight: 800;
    margin-bottom: 2px;
    padding-top: 0px;
}
.contact-content .contact-info li .icon-box .inner {
    width: 47px;
    height: 64px;
    border-radius: 0%;
    text-align: center;
    line-height: 0px;
    color:#da0000;
    font-size: 20px;
    margin-right: 0px;
    margin-left: 15px;
}
.inner-soclz li a {
    color: #da0000;
}
.mrg-btn-100:hover {
    padding: 12px 43px !important;
    border-radius: 7px !important;
    font-size: 14px !important;
    margin-right: 17px !important;
    background: linear-gradient(45deg, #e11313, #e8e3e370) !important;
    margin-bottom: 35px;
    color: #fff !important;
}

    </style>
    
@endsection


