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
                            <li><a href="/">Home</a></li>
                            <li class="nav-item">
                                <a href="#">Residential</a>
                                <ul class="dropz full-width-dropdown">
                                    <li class="dropz-content">
                                        <div class="row btm-roz"> 
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">Internet
                                                        <img src="{{asset('assets/images/webImg/blackinternet (1).png')}}" class="head-icnz" />
                                                    </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('hd-catv') }}"> HD/Catv 
                                                        <img src="{{asset('assets/images/webImg/TVBlack (1).png')}}" class="head-icnz" /></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('telephone') }}">telephone
                                                        <img src="{{asset('assets/images/webImg/phoneblack (1).png')}}" class="head-icnz" /></a></li>
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
                                                    <li class="drop-txt"><a href="{{ route('internet') }}">Internet</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('voice-services') }}">Voice Services</a></li>
                                                </ul>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('sme-services') }}">SME Services</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row btm-roz"> 
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="drop-txt"><a href="{{ route('networking-solutions') }}">Networking Solution In Pakistan</a></li>
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
                                                        <li class="drop-txt"><a href="{{ route('dark-fiber') }}">Dark Fiber
                                                            <img src="{{asset('assets/images/webImg/fiberopticnetwork.png')}}" class="head-icnz" /></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li class="drop-txt"><a href="{{ route('co-location') }}">Co-Location
                                                            <img src="{{asset('assets/images/webImg/co-locationservices.png')}}" class="head-icnz" /></a></li>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li class="drop-txt"><a href="{{ route('data-vpn') }}">Data VPN
                                                            <img src="{{asset('assets/images/webImg/DataVPN.png')}}" class="head-icnz" /></a></li>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row btm-roz"> 
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li class="drop-txt"><a href="{{ route('data-center') }}">Data Center
                                                            <img src="{{asset('assets/images/webImg/internett(1).png')}}" class="head-icnz" /></a></li>
                                                            </a></li>
                                                    </ul>
                                                </div>
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
                        <div class="content">
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
                            <a href="https://api.whatsapp.com/send/?phone=51111111872&text=Hello&app_absent=0" target="_blank">
                                <div class="inner-box">
                                    <img class="headrz-env" src="{{'assets/images/webImg/AINova.png'}}" />
                                </div>
                            </a>
                        </div>
                        <div class="content">
                            <a  href="https://api.whatsapp.com/send/?phone=51111111872&text=Hello&app_absent=0" target="_blank" >
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
/* .single-header-info .icon-box .inner-box {
    width: 50px;
    height: 52px;
    border: 1px solid #E1E1E1;
    text-align: center;
    line-height: 53px;
    margin-right: 4px;
} */
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