@extends('layout.main')
@section('content')
    <section class="inner-header">
        <div class="container">
        </div>
    </section>
    
  

    <section class="about-content-bordz">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="box-radius">
                        <img src="{{asset('assets/images/webImg/service-10-1.webp')}}" class="speed-100" alt="" />
                    </div>
                    <div class="btmz-img">
                        <img src="{{asset('assets/images/webImg/4.png')}}" class="speed-10011" alt="" />
                        <p class="sevz-200">Ultra-speed <br/>
                            Connection</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-radius">
                        <img src="{{asset('assets/images/webImg/service-9-1.webp')}}" class="speed-100" alt="" />
                    </div>
                    <div class="btmz-img">
                        <img src="{{asset('assets/images/webImg/4.png')}}" class="speed-10011" alt="" />
                        <p class="sevz-200">250+ World
                             <br/>
                             Channels</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-radius">
                        <img src="{{asset('assets/images/webImg/home-2-slide-2.webp')}}" class="speed-100" alt="" />
                    </div>
                    <div class="btmz-img">
                        <img src="{{asset('assets/images/webImg/4.png')}}" class="speed-10011" alt="" />
                        <p class="sevz-200">4K and 8K <br/>
                            Quality</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-radius">
                        <img src="{{asset('assets/images/webImg/service-12-1.webp')}}" class="speed-100" alt="" />
                    </div>
                    <div class="btmz-img">
                        <img src="{{asset('assets/images/webImg/4.png')}}" class="speed-10011" alt="" />
                        <p class="sevz-200">Flexible Tariff <br/>
                            Plans</p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>

    <section class="about-content-padding">
        <div class="container">
            <p class="about-content-100">
                Nova Communication is a leading <span class="red-400">ICT provider </span>
                delivering high-speed internet, <span class="red-400">iPlay (interactive TV)</span>, and <span class="red-400">telephone services</span> to homes and businesses. 
                We are committed to keeping you connected with reliable, innovative, and customer-focused solutions designed 
                to meet the demands of both personal and corporate users.
            </p>
            {{-- <div class="row mrgnz-down">
                <div class="col-lg-6">
                    <img src="{{asset('assets/images/webImg/ONT1.webp')}}" class="disc-100" alt="" />
                </div>
                <div class="col-lg-6">
                    <h1 class="choose-head">About Us</h1>
                    <ul class="choose-bulets">
                        <li> Nova Communication is a premier provider of <span class="bold-about"> Fiber Internet, Digital TV, IPTV, Telephone, Cloud,</span> and <span class="bold-about">ICT services </span> Pakistan.</li>
                        <li> With our robust fiber-optic network and cutting-edge solutions, we deliver <span class="bold-about">unmatched digital experiences</span> homes and businesses.</li>
                        <li> Our commitment to reliability, innovation, and customer satisfaction has earned us a reputation as a trusted leader in the digital space.</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="choose-head">Why Choose Nova</h1>
                    <ul class="choose-bulets">
                        <li><span class="chosse-bold">Industry-Leading GPON Network: </span>  <span class="bold-about"> Our 300+ km buried GPON infrastructure</span> ensures uninterrupted service and blazing-fast connectivity</li>
                        <li><span class="chosse-bold">Next-Gen IPTV Experience</span> Enjoy personalized, flexible streaming across <span class="bold-about">  multiple devices</span>.</li>
                        <li><span class="chosse-bold">Comprehensive Cloud & ICT Solutions: </span>Tailored for both  <span class="bold-about"> home users and enterprises.</span></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('assets/images/webImg/TV1.webp')}}" class="disc-100" alt="" />
                </div>
            </div> --}}
        </div>
    </section>

    @include('components.coverage')
    
    <section class="about-content-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="border-plan">
                        <img src="{{asset('assets/images/webImg/addordableplan.png')}}" class="sprt-about-100" alt="" />
                        <div class="box-para">
                            <h2>Affordable & Scalable Plans</h2>
                            <p>Packages designed to meet diverse needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="border-plan">
                        <img src="{{asset('assets/images/webImg/customersupport.png')}}" class="sprt-about-100" alt="" />
                        <div class="box-para">
                            <h2>24/7 Customer Support</h2>
                            <p>Our dedicated team is here to assist you anytime.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="border-plan">
                        <img src="{{asset('assets/images/webImg/expandingcoverage.png')}}" class="sprt-about-100" alt="" />
                        <div class="box-para">
                            <h2>Expanding Coverage</h2>
                            <p>Proudly serving Islamabad, Lahore, KPK, and beyond.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    @stop
@section('js')
@endsection

<style>

.box-radius {
    position: relative;
    width: 280px;
    height: 280px;
    border-radius: 50%;
    overflow: hidden;
}

section.about-content-bordz {
    padding-top: 40px;
    padding-bottom: 100px;
}
.box-radius img.speed-100 {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
}
.speed-10011 {
    width: 165px;
    height: auto;
}
.sevz-200 {
    margin-top: 12px;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    color: rgb(86 87 89);
    line-height: 23px;
}
.btmz-img {
    z-index: 11;
    position: absolute;
    margin-top: -40px;
    left: 22.7%;
}
.box-radius::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(255, 0, 0, 0.5);
    clip-path: polygon(0 0, 63% 53%, 0 127%);
    z-index: 2;
    transform: rotate(276deg);
}
</style>