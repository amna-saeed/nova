<div class="row">
    <div class="col-lg-12 p-0">
        {{-- <div class="footer-call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 sm-text-center text-center">
                        <h3>Follow Us</h3>
                        <p>Connect with us on social media for updates, promotions, and the latest news</p>
                    </div>
                    <div class="col-md-12 text-right sm-text-center">
                        <div class="linez-same">
                            <div class="bg-outer-100">
                            <a href="#"><img src="{{asset('assets/images/webImg/fb.png')}}" class="follow-scl" /></a>
                                <p class="need-txt-10">Follow us on Facebook</p>
                            </div>
                            <div class="bg-outer-100">
                            <a href="#"><img src="{{asset('assets/images/webImg/insta.png')}}" class="follow-scl" /></a>
                                <p class="need-txt-10">Follow us on Instagram</p>
                            </div>
                            <div class="bg-outer-100">
                            <a href="#"><img src="{{asset('assets/images/webImg/LinkedIn.png')}}" class="follow-scl" /></a>
                                <p class="need-txt-10">Follow us on Linkedin</p>
                            </div>
                            <div class="bg-outer-100">
                            <a href="#"><img src="{{asset('assets/images/webImg/headphone.png')}}" class="follow-scl" /></a>
                                <p class="need-txt-10">24/7 Available</p>
                            </div>
                            <div class="bg-outer-100">
                            <a href="#"><img src="{{asset('assets/images/webImg/x.png')}}" class="follow-scl" /></a>
                                <p class="need-txt-10">Follow us on Twitter</p>
                            </div>
                            <div class="bg-outer-100">
                            <a href="#"><img src="{{asset('assets/images/webImg/email.png')}}" class="follow-scl" /></a>
                                <p class="need-txt-10">Follow us on Email</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    --}}
        <!--Footer div-->
        <footer class="footer sec-padding" style=" padding:55px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="footer-widget about-widget">
                            <a href="index-2.html">
                            <img src="{{asset('assets/images/webImg/whiteee.png')}}" alt="Awesome Image" />
                            </a>
                            <ul class="contact">
                                <li><i class="fa fa-map-marker"></i> <span>00 Monroe Ave, Roseland, NJ, 07068 </span></li>
                                <li><i class="fa fa-phone"></i> <span>(973) 226-6181</span></li>
                                <li><i class="fa fa-envelope"></i> <span>info@nova.pk</span></li>
                            </ul>
                            </div>
                    </div>
                    <div class="col-sm-6 latest-post col-md-2">
                        <div class="footer-widget latest-post">
                            <h3 class="title">Quick Links</h3>
                            <ul>
                                <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="/">Home</a>
                                    </div>
                                </li>
                                <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="{{ route('about-us') }}">About Us</a>
                                    </div>
                                </li>
                                {{-- <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="classes-list.html">Services</a>
                                    </div>
                                </li>
                                <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="{{ route('packages') }}">Packages</a>
                                    </div>
                                </li>
                                <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="classes-list.html">Blog </a>
                                    </div>
                                </li> --}}
                                <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="{{route('career')}}">Careers</a>
                                    </div>
                                </li>
                                <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="{{ route('contact-us') }}">Contact</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 latest-post col-md-3">
                        <div class="footer-widget latest-post">
                            <h3 class="title">Legal</h3>
                            <ul>
                               <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="{{route('terms-condition')}}">Terms & Conditions </a>
                                    </div>
                                </li>
                                <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="{{route('privacy-policy')}}">Privacy Policy </a>
                                    </div>
                                </li>
                                <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="{{route('refund-policy')}}">Refund Policy</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 latest-post col-md-3">
                        <div class="footer-widget latest-post">
                            <h3 class="title">Support</h3>
                            <ul>
                                <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="{{route('contact-us')}}">Customer Car</a>
                                    </div>
                                </li>
                                <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="{{route('contact-us')}}">Complaint Center</a>
                                    </div>
                                </li>
                                <li>
                                    <span class="border"></span>
                                    <div class="content">
                                        <a href="{{route('contact-us')}}">FAQ</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
