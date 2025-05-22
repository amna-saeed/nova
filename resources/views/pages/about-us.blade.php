@extends('layout.main')
@section('content')
    <section class="inner-header">
        <div class="container">
            <div class="complete-bnr-txt">
                <h1 class="red-hdctv">Your Gateway to Seamless  <br /> <span class="changes-new">Connectivity</span></h1>
            </div>
        </div>
    </section>
    
    <section class="about-content-padding">
        <div class="container">
            <h1 class="wlcm-head">Welcome to NOVA!</h1>
            <p class="about-content-100">
               The Professional Communications Pvt. Ltd operates under the brand name of <span class="red-400">NOVA in Pakistan</span>
               as a trusted name in digital connectivity since 2004. At <span class="red-400">NOVA,</span> we are committed to revolutionizing Pakistan’s digital landscape by providing innovative Internet and ICT solutions that drive businesses and empower individuals.
               Whether you’re looking for high-speed internet, cloud services, or advanced telecom solutions, we offer reliable, secure, and cutting-edge services to meet the evolving needs of the digital world.
               As technology evolves, so do we. Our solutions are designed to help our customers stay ahead of the curve in today’s fast-paced digital world.Whether you need high-speed internet, enterprise-level telecom systems, or cloud-based IT services, NOVAs is your trusted partner.
            </p>
            
            <p class="about-content-100">
                <span class="red-400">Our vision</span> is to bridge the digital divide and accelerate Pakistan's technological progress, providing scalable and tailored solutions for every sector—from homes and businesses to enterprises and government sectors..
               </p>
           
            <p class="about-content-100">
                <span class="red-400">Our mission</span>, is to deliver world-class internet and ICT services that contribute to Pakistan’s growth and technological advancement, while keeping the customer experience at the forefront of everything we do.</p>
            <h2 class="ofrz-100">Our Core Services:</h2>
            <p class="about-content-100">
                 <ul class="terms-ul">
                    <li>Connecting Pakistan to the Future</li>
                    <li>High-Speed Internet Connectivity</li>
                    <li>Unlock the power of seamless, uninterrupted browsing with our fiber-optic internet solutions that deliver fast, reliable speeds.</li>
                    <li>ICT Solutions for Businesses</li>
                    <li>From VoIP systems to secure cloud infrastructure, we provide end-to-end communication and technology solutions that optimize business operations.</li>
                    <li>Managed IT Services</li>
                    <li>Enhance your IT infrastructure with managed services that provide proactive monitoring, support, and maintenance for your business’s critical systems.</li>
                    <li>Dedicated Hosting and Cloud Solutions</li>
                    <li>Empower your business with secure, scalable cloud hosting services that guarantee uptime and performance.</li>
                    <li>Smart City Solutions</li>
                    <li>Transform urban infrastructure with integrated digital technologies, helping cities achieve greater efficiency, sustainability, and connectivity.</li>
                </ul>   
            </p>
        </div>
    </section>

    @include('components.coverage')
    
    <section class="about-content-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="border-plan">
                        <img src="{{asset('assets/images/webImg/sale (1).png')}}" class="sprt-about-100" alt="" />
                        <div class="box-para">
                            <h2>Affordable & Scalable Plans</h2>
                            <p>Packages designed to meet diverse needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="border-plan">
                        <img src="{{asset('assets/images/webImg/technical-support.png')}}" class="sprt-about-100" alt="" />
                        <div class="box-para">
                            <h2>24/7 Customer Support</h2>
                            <p>Our dedicated team is here to assist you anytime.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="border-plan">
                        <img src="{{asset('assets/images/webImg/global-connection.png')}}" class="sprt-about-100" alt="" />
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
