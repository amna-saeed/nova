{{-- <div class="top-bar hidden-xs">
    <div class="container">
        <div class="social-icons pull-left">
            <ul>
                <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                </li>
            </ul>
        </div>
        <!-- /.social-icons -->
        <div class="social-icons pull-right">
            <ul>
                <li>
                    <a href="#"><i class="fa fa-commenting"></i> Live Chat</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-headphones"></i> Support</a>
                </li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div>
        <!-- /.left-text -->
    </div>
</div> --}}
<!-- /.top-bar -->

<!-- /.header -->
 
<nav class="mainmenu-area stricky">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <a href="/">
                        <div class="logo">
                            <img src="{{asset('assets/images/webImg/final-logo.png')}}" alt="Awesome Image" />
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 hidden-xs">
                    <div class="header-right-info pull-right sm-pull-none clearfix">
                        <div class="single-header-info pb-sm-20">
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="flaticon-interface-2"></i>
                                </div>
                            </div>
                            <div class="content">
                                <a href="{{ route('contact-us') }}">
                                <h3>Pay Now</h3></a>
                                {{-- <p>help@nova.net.pk</p> --}}
                            </div>
                        </div>
                        <div class="single-header-info">
                            <div class="icon-box">
                                <a href="{{ route('contact-us') }}">
                                <div class="inner-box">
                                    <i class="flaticon-telephone"></i>
                                </div>
                                </a>
                            </div>
                            <div class="content">
                                <a href="{{ route('contact-us') }}">
                                <h3>Contact Us</h3>
                                </a>
                                {{-- <p><b>051-111-111-872</b></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="navigation">
                    <div class="nav-header pull-left">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="nav-item">
                                <a href="#">Residential</a>
                                <ul class="dropz full-width-dropdown">
                                    <li class="dropz-content">
                                        <div class="row btm-roz"> 
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">Internet</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">TV</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">Telephone</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">Business</a>
                                <ul class="dropz full-width-dropdown">
                                    <li class="dropz-content">
                                        <div class="row btm-roz"> 
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">Data & Internet </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">CIR</a></li>
                                                </ul>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">IPBX</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row btm-roz"> 
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">Networking</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">Managed Wifi</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">Enterprise Services</a>
                                <ul class="dropz full-width-dropdown">
                                    <li class="dropz-content">
                                        <div class="row mrgnz-t">
                                            <div class="row mrgnz-t">
                                                <div class="col-md-4">
                                                    <ul class="outer-box">
                                                        <li class="drop-txt"><a href="{{ route('internet') }}">Cloud Services</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li class="drop-txt"><a href="{{ route('internet') }}">Fiber Optic Networks</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li class="drop-txt"><a href="{{ route('internet') }}">⁠Internet Bandwidth & Data</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row btm-roz"> 
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li class="drop-txt"><a href="{{ route('internet') }}">DPLC & IPLC</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li class="drop-txt"><a href="{{ route('internet') }}">Data VPN</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li class="drop-txt"><a href="{{ route('internet') }}">⁠Co-location Services</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li><a href="{{ route('packages') }}">Packages</a></li> --}}
                            {{-- <li class="dropdown">
                                <a href="#">Blogs</a>
                                <ul class="dropz full-width-dropdown">
                                    <div class="dropz-content">
                                        <div class="column">
                                            <h4>Blog Categories</h4>
                                        </div>
                                    </div>
                                </ul>
                            </li> --}}
                            {{-- <li><a href="{{ route('contact-us') }}">Contact Us</a></li> --}}
                            {{-- <li class="nav-item">
                                <a href="#">Support Us</a>
                                <ul class="dropz full-width-dropdown">
                                    <li class="dropz-content">
                                        <div class="row mrgnz-t">
                                            <div class="col-md-6">
                                                <ul class="outer-box">
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">Customer Care</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">Complaint Center</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row btm-roz"> 
                                            <div class="col-md-6">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">Tax Notification</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">FAQ</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="donate-col col-xs-12 col-sm-12 col-lg-3 col-md-3">
                <div class="donate-btn clearfix">
                    <a class="thm-btn pull-right" href="#">Join Us</a>
                    <div class="nav-footer pull-left">
                        <button><i class="fa fa-bars"></i></button>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</nav>
<!-- /.mainmenu-area -->
