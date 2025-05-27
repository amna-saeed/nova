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
                            <li class="nav-item {{ Request::is('internet*') || Request::is('hd-catv*') || Request::is('iplay-service*') || Request::is('digital-box*') || Request::is('telephone*') ? 'active' : '' }}">
                                <a href="#">Residential</a>
                                <ul class="dropz full-width-dropdown">
                                    <li class="dropz-content">
                                        <div class="row btm-roz"> 
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('internet*') ? 'active' : '' }}">
                                                        <a href="{{ route('internet') }}">
                                                            Internet
                                                            <img src="{{ asset('assets/images/webImg/blackinternet (1).png') }}" class="head-icnz black-icon" />
                                                            <img src="{{ asset('assets/images/webImg/internet-red.png') }}" class="head-icnz red-icon" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 position-relative">
                                                <ul>
                                                    <li class="drop-txt dropdown-wrapper {{ Request::is('hd-catv*') || Request::is('iplay-service*') || Request::is('digital-box*') ? 'active' : '' }}">
                                                        <a href="{{ route('hd-catv') }}" class="dropdown-toggle">
                                                           Video
                                                            <img src="{{ asset('assets/images/webImg/video-black.png') }}" class="head-icnz black-icon" />
                                                            <img src="{{ asset('assets/images/webImg/video-red.png') }}" class="head-icnz red-icon" />
                                                            <img src="{{ asset('assets/images/webImg/dropdown-red.png') }}" class="arrow-hover" />
                                                            <img src="{{ asset('assets/images/webImg/dropdownblack.png') }}" class="arrow-black" />
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
                                                                        <a href="{{ route('iplay-service') }}"
                                                                           class="dropdown-toggle {{ Request::is('iplay-service*') ? 'active' : '' }}">
                                                                            <img src="{{ asset('assets/images/webImg/iplayicon.png') }}" class="dropdown-icon" />
                                                                            <span class="drop-txt">IPlay Service</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-md-4 dropdown-item">
                                                                        <a href="{{ route('digital-box') }}"
                                                                           class="dropdown-toggle {{ Request::is('digital-box*') ? 'active' : '' }}">
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
                                                            <img src="{{ asset('assets/images/webImg/phoneblack (1).png') }}" class="head-icnz black-icon" />
                                                            <img src="{{ asset('assets/images/webImg/phone-red.png') }}" class="head-icnz red-icon" />
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
                                                            <img src="{{ asset('assets/images/webImg/interneticonblack.png') }}" class="head-icnz black-icon" />
                                                            <img src="{{ asset('assets/images/webImg/internet-data-red.png') }}" class="head-icnz red-icon" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('voice-services*') ? 'active' : '' }}">
                                                        <a href="{{ route('voice-services') }}">
                                                            Voice Services
                                                            <img src="{{ asset('assets/images/webImg/voiceservices (2).png') }}" class="head-icnz black-icon" />
                                                            <img src="{{ asset('assets/images/webImg/voiceservices-red.png') }}" class="head-icnz red-icon" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('sme-services*') ? 'active' : '' }}">
                                                        <a href="{{ route('sme-services') }}">
                                                            SME Services
                                                            <img src="{{ asset('assets/images/webImg/sme.png') }}" class="head-icnz black-icon" />
                                                            <img src="{{ asset('assets/images/webImg/sme-red.png') }}" class="head-icnz red-icon" />
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
                                                            <img src="{{ asset('assets/images/webImg/networking (1).png') }}" class="net-wrk-icnz black-icon" />
                                                            <img src="{{ asset('assets/images/webImg/networking-red.png') }}" class="head-icnz red-icon" style="width: 27px;"/>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('business-partner*') ? 'active' : '' }}">
                                                        <a href="{{ route('business-partner') }}">
                                                            Our Business Partner
                                                            <img src="{{ asset('assets/images/webImg/businesspartnericon.png') }}" class="business-icnz black-icon" />
                                                            <img src="{{ asset('assets/images/webImg/red-partner.png') }}" class="head-icnz red-icon" style="width: 27px;"/>
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
                                                            <img src="{{ asset('assets/images/webImg/fiberopticnetwork.png') }}" class="head-icnz black-icon" />
                                                            <img src="{{ asset('assets/images/webImg/red-darkfiber.png') }}" class="head-icnz red-icon" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt {{ Request::is('co-location*') ? 'active' : '' }}">
                                                        <a href="{{ route('co-location') }}">
                                                            Co-Location
                                                            <img src="{{ asset('assets/images/webImg/co-locationservices.png') }}" class="head-icnz-location black-icon" />
                                                            <img src="{{ asset('assets/images/webImg/colocation-red.png') }}" class="head-icnz red-icon" style="width: 14px;" />
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
                                                            <img src="{{ asset('assets/images/webImg/internett(1).png') }}" class="head-icnz black-icon" />
                                                            <img src="{{ asset('assets/images/webImg/internet-data-red.png') }}" class="head-icnz red-icon" />
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
                                                            <img src="{{ asset('assets/images/webImg/black (2).png') }}" class="head-icnz black-icon" />
                                                            <img src="{{ asset('assets/images/webImg/technologypartnerred(2).png') }}" class="head-icnz red-icon" />
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
                    {{-- Pay Now --}}
                    <div class="single-header-info pb-sm-20 {{ Request::is('payment*') ? 'active' : '' }}">
                        <div class="icon-box">
                            <a href="{{ route('payment') }}">
                                <div class="inner-box">
                                    <img class="headrz-env black-icon" src="{{ asset('assets/images/webImg/paynow.png') }}" />
                                    <img class="headrz-env red-icon" src="{{ asset('assets/images/webImg/red-wallet.png') }}" />
                                </div>
                            </a>
                        </div>
                        <div class="content">
                            <a href="{{ route('payment') }}">
                                <h3 class="{{ Request::is('payment*') ? 'active' : '' }}">Pay Now</h3>
                            </a>
                        </div>
                    </div>

                    {{-- Contact Us --}}
                    <div class="single-header-info {{ Request::is('contact-us*') ? 'active' : '' }}">
                        <div class="icon-box">
                            <a href="{{ route('contact-us') }}">
                                <div class="inner-box">
                                    <img class="headrz-env black-icon" src="{{ asset('assets/images/webImg/phoneblack (1).png') }}" />
                                    <img class="headrz-env red-icon" src="{{ asset('assets/images/webImg/phone-red.png') }}" />
                                </div>
                            </a>
                        </div>
                        <div class="content">
                            <a href="{{ route('contact-us') }}">
                                <h3 class="{{ Request::is('contact-us*') ? 'active' : '' }}">Contact Us</h3>
                            </a>
                        </div>
                    </div>

                    {{-- Nova AI --}}
                    <div class="single-header-info {{ Request::is('nova-ai*') ? 'active' : '' }}">
                        <div class="icon-box">
                            <a href="{{ route('nova-ai') }}">
                                <div class="inner-box">
                                    <img class="headrz-env black-icon" src="{{ asset('assets/images/webImg/AINova.png') }}" />
                                    <img class="headrz-env red-icon" src="{{ asset('assets/images/webImg/red-ai-help.png') }}" />
                                </div>
                            </a>
                        </div>
                        <div class="content">
                            <a href="{{ route('nova-ai') }}">
                                <h3 class="{{ Request::is('nova-ai*') ? 'active' : '' }}">Nova AI</h3>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>
   
{{-- Responsiv --}}
<div class="row">
    <div class="col-lg-12 p-0">
        <div class="resp-bar">
            <header>
            <div class="menu-icon" id="openSidebar">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="logo-res">
                <a href="/">
                <img src="{{asset('assets/images/webImg/final-logo.png')}}" alt="Awesome Image" /></a>
            </div>

            <div class="actions">
                <button class="resp-nova-head">
                    <a href="{{ route('nova-ai') }}">Nova AI</a></button>
                <div class="call-icon">
                    <a href="https://api.whatsapp.com/send/?phone=51111111872&text=Hello&app_absent=0" target="_blank">📞</a>
                </div>
            </div>
            </header>

            <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
            <button class="close-btn" id="closeSidebar">&times;</button>
            <ul class="resp-100-side">
                <li class="main-sctn {{ Request::is('/*') ? 'active' : '' }}"><a href="/" class="resp-linkz">Home</a></li>
                <li  data-box="residential" class="box-200-res {{ Request::is('internet*')  || Request::is('telephone*') ? 'active' : '' }}">
                    <a class="resp-linkz box-toggle" href="#"> 
                        Residential
                        <img src="{{ asset('assets/images/webImg/dropwhite.png') }}" class="arrow-whte whitez-200" />
                    </a>
                    <ul class="open-foldz" style="display: none;">
                        <li class="inr-scn-400 {{ Request::is('internet*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('internet') }}">
                                <img src="{{ asset('assets/images/webImg/blackinternet (1).png') }}" class="resp-icnz white" />
                                <img src="{{ asset('assets/images/webImg/internet-red.png') }}" class="resp-icnz red" />
                                Internet
                            </a>
                        </li>

                        <li class="inr-scn-400 {{ Request::is('telephone*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('telephone') }}">
                                <img src="{{ asset('assets/images/webImg/phoneblack (1).png') }}" class="resp-icnz white" />
                                <img src="{{ asset('assets/images/webImg/phone-red.png') }}" class="resp-icnz red" />
                                Telephone
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- 4rth --}}
                <li  data-box="videos" class="box-200-res {{ Request::is('hd-catv*') || Request::is('iplay-service*') || Request::is('digital-box*') ? 'active' : '' }}">
                    <a class="resp-linkz box-toggle" href="#"> 
                        Video
                        <img src="{{ asset('assets/images/webImg/dropwhite.png') }}" class="arrow-whte whitez-200" />
                    </a>
                    <ul class="open-foldz" style="display: none;">
                        <li class="inr-scn-400 {{ Request::is('hd-catv*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('hd-catv') }}">
                                <img src="{{ asset('assets/images/webImg/cableicon.png') }}" class="resp-icnz" />
                                Cable
                            </a>
                        </li>
                        <li class="inr-scn-400 {{ Request::is('iplay-service*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('iplay-service') }}">
                                <img src="{{ asset('assets/images/webImg/iplayicon.png') }}" class="resp-icnz" />
                                IPlay Service
                            </a>
                        </li>
                        <li class="inr-scn-400 {{ Request::is('digital-box*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('digital-box') }}">
                                <img src="{{ asset('assets/images/webImg/digitalboxicon.png') }}" class="resp-icnz" />
                                    Digital Box
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- second --}}
                <li data-box="business" class="box-200-res {{ Request::is('bisiness-internet*') || Request::is('voice-services*') || Request::is('sme-services*') || Request::is('networking-solutions*') || Request::is('business-partner*') ? 'active' : '' }}">
                    <a class="resp-linkz box-toggle" href="#">
                        Business
                         <img src="{{ asset('assets/images/webImg/dropwhite.png') }}" class="arrow-whte whitez-200" />
                    </a>
                    <ul class="open-foldz" style="display: none;">
                        <li class="inr-scn-400 {{ Request::is('bisiness-internet*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('bisiness-internet') }}">
                                <img src="{{ asset('assets/images/webImg/interneticonblack.png') }}" class="resp-icnz white" />
                                <img src="{{ asset('assets/images/webImg/internet-data-red.png') }}" class="resp-icnz red" />
                                Internet Service
                            </a>
                        </li>
                        <li class="inr-scn-400 {{ Request::is('voice-services*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('voice-services') }}">
                                <img src="{{ asset('assets/images/webImg/voiceservices (2).png') }}" class="resp-icnz white" />
                                <img src="{{ asset('assets/images/webImg/voiceservices-red.png') }}" class="resp-icnz red" />
                                Voice Services
                            </a>
                        </li>
                        <li class="inr-scn-400 {{ Request::is('networking-solutions*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('networking-solutions') }}">
                                 <img src="{{ asset('assets/images/webImg/networking (1).png') }}" class="resp-icnz white" />
                                <img src="{{ asset('assets/images/webImg/networking-red.png') }}" class="resp-icnz red" />
                                Networking Solution In Pakistan
                            </a>
                        </li>
                        <li class="inr-scn-400 {{ Request::is('business-partner*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('business-partner') }}">
                                <img src="{{ asset('assets/images/webImg/businesspartnericon.png') }}" class="resp-icnz white" />
                                <img src="{{ asset('assets/images/webImg/red-partner.png') }}" class="resp-icnz red" />
                                 Our Business Partner
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- end --}}

                 {{-- third --}}
                <li data-box="enterprise" class="box-200-res {{ Request::is('dark-fiber*') || Request::is('co-location*') || Request::is('data-vpn*') || Request::is('data-center*') || Request::is('techonology-partner*') ? 'active' : '' }}">
                    <a class="resp-linkz box-toggle" href="#">
                       Enterprise Services
                        <img src="{{ asset('assets/images/webImg/dropwhite.png') }}" class="arrow-whte whitez-200" />
                    </a>
                    <ul class="open-foldz" style="display: none;">
                        <li class="inr-scn-400 {{ Request::is('dark-fiber*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('dark-fiber') }}">
                                <img src="{{ asset('assets/images/webImg/fiberopticnetwork.png') }}" class="resp-icnz white" />
                                <img src="{{ asset('assets/images/webImg/red-darkfiber.png') }}" class="resp-icnz red" />
                                Dark Fiber
                            </a>
                        </li>
                        <li class="inr-scn-400 {{ Request::is('co-location*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('co-location') }}">
                                <img src="{{ asset('assets/images/webImg/co-locationservices.png') }}" class="resp-icnz white" style="width: 13px;"/>
                                <img src="{{ asset('assets/images/webImg/colocation-red.png') }}" class="resp-icnz red" style="width: 13px;" />
                                Co-Location
                            </a>
                        </li>
                        <li class="inr-scn-400 {{ Request::is('data-center*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('data-center') }}">
                                <img src="{{ asset('assets/images/webImg/internett(1).png') }}" class="resp-icnz white" />
                                <img src="{{ asset('assets/images/webImg/internet-data-red.png') }}" class="resp-icnz red" />
                                Data Center
                            </a>
                        </li>
                        <li class="inr-scn-400 {{ Request::is('techonology-partner*') ? 'active' : '' }}">
                            <a class="dropdown-item" href="{{ route('techonology-partner') }}">
                                <img src="{{ asset('assets/images/webImg/black (2).png') }}" class="resp-icnz white" />
                                <img src="{{ asset('assets/images/webImg/technologypartnerred(2).png') }}" class="resp-icnz red" />
                                Our Technology Partner
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- end --}}
                <li class="main-sctn {{ Request::is('payment*') ? 'active' : '' }}">
                <a href="{{ route('payment') }}" class="resp-linkz">Pay Now</a>
                </li>
                <li class="main-sctn {{ Request::is('contact-us*') ? 'active' : '' }}">
                <a href="{{ route('contact-us') }}" class="resp-linkz">Contact Us</a>
                </li>
                <li class="main-sctn {{ Request::is('nova-ai*') ? 'active' : '' }}">
                <a href="{{ route('nova-ai') }}" class="resp-linkz">Nova AI</a>
                </li>
                <li class="main-sctn {{ Request::is('career*') ? 'active' : '' }}">
                <a href="{{ route('career') }}" class="resp-linkz">CAREERS</a>
                </li>
                <li class="main-sctn {{ Request::is('about-us*') ? 'active' : '' }}">
                <a href="{{ route('about-us') }}" class="resp-linkz">About us</a>
                </li>
                <li class="main-sctn {{ Request::is('terms-condition*') ? 'active' : '' }}">
                <a href="{{ route('terms-condition') }}" class="resp-linkz">Terms & Conditions</a>
                </li>
                <li class="main-sctn {{ Request::is('privacy-policy*') ? 'active' : '' }}">
                <a href="{{ route('privacy-policy') }}" class="resp-linkz">Privacy Policy</a>
                </li>
                <li class="main-sctn {{ Request::is('refund-policy*') ? 'active' : '' }}">
                <a href="{{ route('refund-policy') }}" class="resp-linkz">Refund Policy</a>
                </li>
                <li class="main-sctn {{ Request::is('faqs*') ? 'active' : '' }}">
                <a href="{{ route('faqs') }}" class="resp-linkz">FAQ</a>
                </li>

            </ul>
            </div>      
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    document.addEventListener("click", function (e) {
        const toggle = e.target.closest(".box-toggle");

        if (toggle) {
        e.preventDefault();

        const parentBox = toggle.closest(".box-200-res");
        const dropdown = parentBox.querySelector(".open-foldz");

        // Optional: Close all dropdowns first
        document.querySelectorAll(".box-200-res .open-foldz").forEach(ul => {
            if (ul !== dropdown) ul.style.display = "none";
        });

        // Toggle the current dropdown
        if (dropdown) {
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        }
        }
    });
    });
</script>

<script>
    const openBtn = document.getElementById('openSidebar');
    const closeBtn = document.getElementById('closeSidebar');
    const sidebar = document.getElementById('sidebar');

    openBtn.addEventListener('click', () => {
        sidebar.classList.add('active');
    });

    closeBtn.addEventListener('click', () => {
        sidebar.classList.remove('active');
    });
</script>

<style>
.black-icon {
    display: inline-block;
}
.resp-bar{
    display: none;
}
.red-icon {
    display: none;
}

/* Show red icon on active OR hover */
.single-header-info.active .black-icon,
.single-header-info:hover .black-icon {
    display: none;
}
.single-header-info.active .red-icon,
.single-header-info:hover .red-icon {
    display: inline-block;
}

.single-header-info.active h3,
.single-header-info h3.active {
    color: #da0000 !important; 
}
a.dropdown-toggle:hover .drop-txt,
a.dropdown-toggle.active .drop-txt {
    color: #da0000 !important; 
}
.drop-txt.active {
    color: #da0000;
}

.dropdown-wrapper {
    position: relative;
}
/*  */
.head-icnz {
    width: 20px;
    margin-left: 10px;
}

/* Default: show black icon, hide red */
.head-icnz.red-icon {
    display: none;
}
.head-icnz.black-icon {
    display: inline;
}

/* On hover or active: show red, hide black */
.drop-txt:hover .black-icon,
.drop-txt.active .black-icon {
    display: none;
}
.drop-txt:hover .red-icon,
.drop-txt.active .red-icon {
    display: inline;
}

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

.head-icnz.red-icon,
.arrow-hover {
    display: none;
}

.dropdown-wrapper:hover .red-icon,
.dropdown-wrapper.active .red-icon,
.dropdown-wrapper:hover .arrow-hover,
.dropdown-wrapper.active .arrow-hover {
    display: inline;
}

.dropdown-wrapper:hover .black-icon,
.dropdown-wrapper.active .black-icon,
.dropdown-wrapper:hover .arrow-black,
.dropdown-wrapper.active .arrow-black {
    display: none;
}



.dropdown-wrapper:hover .arrow {
    transform: rotate(180deg);
}

.custom-dropdown-box {
    position: absolute;
    top: 258%;
    left: 30%;
    width: 100vw;
    background: #ffffff;
    border-top: 1px solid #ddd;
    padding: 34px 177px 24px;
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
@media (min-width: 320px) and (max-width: 525px) {
    nav.mainmenu-area.stricky.slideIn.animated {
        display: none;
    }
    .resp-bar{
        display: block;
    }
    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
      background-color: white;
      box-shadow:0 0 5px rgba(0, 0, 0, 0.6);
      position: relative;
      z-index: 1001;
    }

    .menu-icon {
      font-size: 24px;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 18px;
    }

    .menu-icon span {
      height: 2px;
      background: black;
      width: 25px;
      display: block;
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 30px;
      margin-right: 8px;
    }

    .actions {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .resp-nova-head {
      background: #ffffff;
      color: #da0000;
      padding: 6px 20px;
      border: none;
      border-radius: 4px;
      font-size: 14px;
      cursor: pointer;
      border:1px solid #da0000;
    }
    .resp-nova-head a{
        color: #da0000;
    }
    .call-icon {
      font-size: 20px;
      cursor: pointer;
    }
    .sidebar {
      position: fixed;
      top: 0px;
      left: -450px;
      width: 100%;
      height: 100%;
      background: black;
      color: #fff;
      padding: 20px;
      transition: left 0.3s ease;
      z-index: 1000;
    }
    .sidebar.active {
      left: 0;
    }
    .sidebar .close-btn {
        background: none;
        border: none;
        color: #fff;
        font-size: 45px;
        cursor: pointer;
        float: right;
        padding: 0px;
        position: relative;
        top: 40px;
        right: -10px;
    }
    nav.mainmenu-area.stricky {
        display: none;
    }
    .logo-res img{
        margin-right: 57px;
        width: 70px;
    }
    li.box-200-res {
        margin-bottom: 13px;
    }
  
    /*  */
    ul.resp-100-side {
        list-style: none;
        margin: 80px 0px;
        padding: 0px;
    }
    .open-foldz {
        list-style: none;
        margin: 5px 0px;
        padding: 0 0px;
        background: #f1f1f1;
        z-index: 1000;
    }
    .open-foldz li a{
        display: block;
        padding: 12px 10px 12px;
        color: #000000;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        margin: 0px;
        text-transform: uppercase;
    }
    .open-foldz li a:hover {
        background-color: #f1f1f1;
    }
    ul.resp-100-side li.main-sctn {
        margin: 16px 0px;
    }
    a.resp-linkz {
        color: #ffff;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    li.inr-scn-400 {
        margin: 0px 0px;
    }
    /* Default state */
    /* Default: black text, white icon */
    .dropdown-item {
    color: black;
    }

    .resp-icnz.white {
        display: inline;
        width: 20px;
        margin: 0px 6px;
    }
    .resp-icnz.red {
    display: none;
    }

    .inr-scn-400.active .dropdown-item {
    color: red !important;
    }

    .inr-scn-400.active .resp-icnz.white {
    display: none;
    }
    .inr-scn-400.active .resp-icnz.red {
        display: inline;
        width: 20px;
        margin: 0px 6px;
    }
    .main-sctn a.resp-linkz {
    color: #fff;      
    text-decoration: none;
    }

    .main-sctn.active a.resp-linkz {
    color: red;       
    font-weight: 600;   
    }
    .arrow-whte.whitez-200 {
        display: inline;
        width: 11px;
        margin: 0px 6px;
    }
    img.resp-icnz {
        width: 20px;
        margin-right: 5px;
    }
}
   
</style>