    <!--Start call to action Area-->
    <div class="footer-call-to-action">
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
    </div>   
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
                            <li>
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
                            </li>
                            <li>
                                <span class="border"></span>
                                <div class="content">
                                    <a href="classes-list.html">Careers</a>
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
                                    <a href="classes-list.html">Privacy Policy </a>
                                </div>
                            </li>
                            <li>
                                <span class="border"></span>
                                <div class="content">
                                    <a href="classes-list.html">Terms & Conditions </a>
                                </div>
                            </li>
                            <li>
                                <span class="border"></span>
                                <div class="content">
                                    <a href="classes-list.html">Refund Policy</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="footer-widget contact-widget">
                        <h3 class="title">Contact Form</h3>
                        <form action="https://html.spidertrixcons.com/pixxles/submit.php" class="contact-form" id="footer-cf">
                            <input type="text" name="name" placeholder="Full Name">
                            <input type="text" name="email" placeholder="Email Address">
                            <textarea name="message" placeholder="Your Message"></textarea>
                            <button type="submit">Send</button>
                        </form>
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>