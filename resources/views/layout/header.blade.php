<nav class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-9 col-sm-12 col-xs-12">
                <a href="/">
                    <div class="logo">
                        <img src="{{asset('assets/images/webImg/final-logo.png')}}" alt="Awesome Image" />
                    </div>
                </a>
            </div>
            <div class="col-lg-5 col-md-9 col-sm-12 col-xs-12 pr-0">
                <div class="navigation">
                    <div class="nav-header pull-left">
                        <ul>
                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                <a href="/">Home</a>
                            </li>
                        
                            <!-- Residential Menu -->
                            <li class="nav-item {{ Request::is('internet*') || Request::is('hd-catv*') || Request::is('telephone*') ? 'active' : '' }}">
                                <a href="#">Residential</a>
                                <ul class="dropz full-width-dropdown">
                                    <li class="dropz-content">
                                        <div class="row btm-roz"> 
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('internet*') ? 'active' : '' }}">
                                                        <a href="{{ route('internet') }}">
                                                            Internet
                                                            <img src="{{ asset('assets/images/webImg/blackinternet (1).png') }}" class="head-icnz" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 position-relative">
                                                <ul>
                                                    <li class="drop-txt dropdown-wrapper {{ Request::is('hd-catv*') ? 'active' : '' }}">
                                                        <a href="{{ route('hd-catv') }}" class="dropdown-toggle">
                                                            HD/Catv 
                                                            <img src="{{ asset('assets/images/webImg/TVBlack (1).png') }}" class="head-icnz" />
                                                            <img src="{{ asset('assets/images/webImg/dropdown-red.png') }}" class="arrow-hover" />
                                                            <img src="{{ asset('assets/images/webImg/dropdownblack.png') }}" class="arrow-black" />
                                                            {{-- <span class="arrow">&#9662;</span> --}}
                                                        </a>
                                            
                                                        <!-- Full-width dropdown -->
                                                        <div class="custom-dropdown-box container-fluid">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-4 dropdown-item">
                                                                        <a href="{{ route('hd-catv') }}"
                                                                           class="dropdown-toggle {{ Request::is('hd-catv*') ? 'active' : '' }}">
                                                                            <img src="{{ asset('assets/images/webImg/cableicon.png') }}" class="dropdown-icon" />
                                                                            <span class="drop-txt">Cable</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-md-4 dropdown-item">
                                                                        <a href="{{ route('hd-catv') }}"
                                                                           class="dropdown-toggle {{ Request::is('hd-catv*') ? 'active' : '' }}">
                                                                            <img src="{{ asset('assets/images/webImg/iplayicon.png') }}" class="dropdown-icon" />
                                                                            <span class="drop-txt">IPlay Service</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-md-4 dropdown-item">
                                                                        <a href="{{ route('hd-catv') }}"
                                                                           class="dropdown-toggle {{ Request::is('hd-catv*') ? 'active' : '' }}">
                                                                            <img src="{{ asset('assets/images/webImg/digitalboxicon.png') }}" class="dropdown-icon" />
                                                                            <span class="drop-txt">Digital Box</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('telephone*') ? 'active' : '' }}">
                                                        <a href="{{ route('telephone') }}">
                                                            Telephone
                                                            <img src="{{ asset('assets/images/webImg/phoneblack (1).png') }}" class="head-icnz" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        
                            <!-- Business Menu -->
                            <li class="nav-item {{ Request::is('bisiness-internet*') || Request::is('voice-services*') || Request::is('sme-services*') || Request::is('networking-solutions*') || Request::is('business-partner*') ? 'active' : '' }}">
                                <a href="#">Business</a>
                                <ul class="dropz full-width-dropdown">
                                    <li class="dropz-content">
                                        <div class="row btm-roz"> 
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('bisiness-internet*') ? 'active' : '' }}">
                                                        <a href="{{ route('bisiness-internet') }}">
                                                            Internet Service
                                                            <img src="{{ asset('assets/images/webImg/interneticonblack.png') }}" class="head-icnz" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('voice-services*') ? 'active' : '' }}">
                                                        <a href="{{ route('voice-services') }}">
                                                            Voice Services
                                                            <img src="{{ asset('assets/images/webImg/voiceservices (2).png') }}" class="head-icnz" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('sme-services*') ? 'active' : '' }}">
                                                        <a href="{{ route('sme-services') }}">
                                                            SME Services
                                                            <img src="{{ asset('assets/images/webImg/sme.png') }}" class="head-icnz" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                        
                                        <div class="row btm-roz-space"> 
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('networking-solutions*') ? 'active' : '' }}">
                                                        <a href="{{ route('networking-solutions') }}">
                                                            Networking Solution In Pakistan
                                                            <img src="{{ asset('assets/images/webImg/networking (1).png') }}" class="net-wrk-icnz" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('business-partner*') ? 'active' : '' }}">
                                                        <a href="{{ route('business-partner') }}">
                                                            Our Business Partner
                                                            <img src="{{ asset('assets/images/webImg/businesspartnericon.png') }}" class="business-icnz" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        
                            <!-- Enterprise Services Menu -->
                            <li class="nav-item {{ Request::is('dark-fiber*') || Request::is('co-location*') || Request::is('data-vpn*') || Request::is('data-center*') || Request::is('techonology-partner*') ? 'active' : '' }}">
                                <a href="#">Enterprise Services</a>
                                <ul class="dropz full-width-dropdown">
                                    <li class="dropz-content">
                                        <div class="row mrgnz-t">
                                            <div class="col-md-4">
                                                <ul class="outer-box">
                                                    <li class="drop-txt {{ Request::is('dark-fiber*') ? 'active' : '' }}">
                                                        <a href="{{ route('dark-fiber') }}">
                                                            Dark Fiber
                                                            <img src="{{ asset('assets/images/webImg/fiberopticnetwork.png') }}" class="head-icnz" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('co-location*') ? 'active' : '' }}">
                                                        <a href="{{ route('co-location') }}">
                                                            Co-Location
                                                            <img src="{{ asset('assets/images/webImg/co-locationservices.png') }}" class="head-icnz-location" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('data-vpn*') ? 'active' : '' }}">
                                                        <a href="{{ route('data-vpn') }}">
                                                            Data VPN
                                                            <img src="{{ asset('assets/images/webImg/DataVPN.png') }}" class="head-icnz" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('data-center*') ? 'active' : '' }}">
                                                        <a href="{{ route('data-center') }}">
                                                            Data Center
                                                            <img src="{{ asset('assets/images/webImg/internett(1).png') }}" class="head-icnz" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                        
                                        <div class="row btm-roz-space"> 
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('techonology-partner*') ? 'active' : '' }}">
                                                        <a href="{{ route('techonology-partner') }}">
                                                            Our Technology Partner
                                                            <img src="{{ asset('assets/images/webImg/black (2).png') }}" class="head-icnz" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="donate-col col-xs-12 col-sm-12 col-lg-5 col-md-3 pl-0">
                <div class="donate-btn clearfix">
                    <div class="single-header-info pb-sm-20">
                        <div class="icon-box">
                            <a href="{{ route('payment') }}">
                            <div class="inner-box">
                                <img class="headrz-env" src="{{'assets/images/webImg/paynow.png'}}" />
                            </div></a>
                        </div>
                        <div class="content ">
                            <a href="{{ route('payment') }}">
                            <h3>Pay Now</h3></a>
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
                        </div>
                    </div>
                    <div class="single-header-info">
                        <div class="icon-box">
                            <a href="{{ route('nova-ai') }}">
                                <div class="inner-box">
                                    <img class="headrz-env" src="{{'assets/images/webImg/AINova.png'}}" />
                                </div>
                            </a>
                        </div>
                        {{-- <div class="icon-box">
                            <a href="https://api.whatsapp.com/send/?phone=51111111872&text=Hello&app_absent=0" target="_blank">
                                <div class="inner-box">
                                    <img class="headrz-env" src="{{'assets/images/webImg/AINova.png'}}" />
                                </div>
                            </a>
                        </div> --}}
                        {{-- <div class="content">
                            <a  href="https://api.whatsapp.com/send/?phone=51111111872&text=Hello&app_absent=0" target="_blank" >
                            <h3>Nova AI</h3>
                            </a>
                        </div> --}}
                        <div class="content">
                            <a  href="{{ route('nova-ai') }}">
                            <h3>Nova AI</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>

.dropdown-wrapper {
    position: relative;
}
/*  */
/* Hide red arrow by default, show black */
.arrow-hover {
    display: none;
    width: 20px;
    margin-left: 32px;
}
span.drops-text {
    font-size: 17px;
    color: #1a1919;
    font-weight: 600;
}
.arrow-black {
    display: inline;
    width: 20px;
    margin-left: 32px;
}

/* On hover or active, toggle visibility */
.dropdown-wrapper:hover .arrow-hover,
.dropdown-wrapper.active .arrow-hover {
    display: inline;
}

.dropdown-wrapper:hover .arrow-black,
.dropdown-wrapper.active .arrow-black {
    display: none;
}



.dropdown-wrapper:hover .arrow {
    transform: rotate(180deg);
}

.custom-dropdown-box {
    position: absolute;
    top: 160%;
    left: 30%;
    width: 100vw;
    background: #ffffff;
    border-top: 1px solid #ddd;
    padding:31px 176px 17px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    opacity: 0;
    visibility: hidden;
    transform: translateX(-45%) translateY(10px) scale(0.95); 
    transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out, visibility 0.5s;
    z-index: 9999;
}

.dropdown-wrapper:hover .custom-dropdown-box {
    opacity: 1;
    visibility: visible;
    transform: translateX(-45%) translateY(0) scale(1);
}


.dropdown-item {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
}

.dropdown-icon {
    width: 40px;
    height: 40px;
}

/*  */
.active > a {
    color: #da0000 !important; 
}
.mainmenu-area {
    background: #ffffff;
    border-bottom: 4px solid #000000;
    height: 95px;
    padding: 10px 0px;
}
.logo img {
    width: 56%;
}
.navigation .nav-header > ul{
    padding-left: 0px;
}
.single-header-info .icon-box, .single-header-info .content {
    display: table-cell;
    vertical-align: sub !important;
}
.donate-btn.clearfix{
    text-align: right;
    float: right;
}
.row.btm-roz-space{
    margin-top: 17px;
}
.single-header-info .content h3 {
    font-size: 14px;
    text-transform: uppercase;
    color: #000000;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    margin: 0;
    margin-bottom: 0px;
}
.single-header-info {
    float: left;
    padding-right: 8px !important;
    padding-top: 9px !important;
    padding-left: 0px;
}

.single-header-info .icon-box .inner-box {
    width: 50px;
    height: 52px;
    line-height: 53px;
    margin-right: 5px;
    border: 1px solid #ffffff !important;
    text-align: right !important;
}
.single-header-info .icon-box .inner-box i:before {
    font-size: 20px;
    color: #000000;
}
img.headrz-env {
    width: 20px;
}
.navigation .nav-header > ul > li > a{
    margin:26px 12px;
}
.navigation .nav-header > ul > li > ul.dropz {
    position: absolute;
    top: 118%;
    left: 65%;
    width: 100vw;
    background: #ffffff;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease-in-out;
    text-align: center;
    box-shadow: rgb(73 70 70 / 62%) 0px 2px 8px 0px;
    z-index: 999;
    padding: 9px 0;
    display: flex;
    justify-content: center;
    transform: translateX(50%);
    transform: translateX(-45%);
}
</style>