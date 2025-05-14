@extends('layout.main')
@section('content')
    <video class="vdeo-pkgz-desk" autoplay="" loop="" muted="" poster="">
        <source src="{{asset('assets/images/webImg/Comp2_1.mp4')}}" type="video/mp4" class="video-bnr">
    </video>
    <div class="about-content-padding">
        <div class="container">
            <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                <h2 class="headings-care">Great Service Starts With Great Support</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="support-box d-flex flex-wrap justify-content-between text-start">
            <div class="col-md-3 support-item">
                <i class="fas fa-phone sizing"></i>
                <div>
                    <h5>051 111 111 872</h5>
                    <p>HelpLine Number</p>
                </div>
            </div>
            <div class="col-md-3 support-item support-divider">
                <i class="fas fa-envelope sizing"></i>
                <div>
                    <h5>sales@nova.net.pk</h5>
                    <p>Email our support team. Available 9:00 to 5:00</p>
                </div>
            </div>
            <div class="col-md-3 support-item support-divider">
                <i class="fas fa-envelope sizing"></i>
                <div>
                    <h5>billing@nova.net.pk </h5>
                    <p>Email our support team. Available 9:00 to 5:00</p>
                </div>
            </div>

            <div class="col-md-3 support-item support-divider">
                <i class="fas fa-envelope sizing"></i>
                <div>
                    <h5>complaints@nova.net.pk</h5>
                    <p>Email our support team. Available 24 hours.</p>
                </div>
            </div>
            {{--  --}}
            <div class="pd-tp-x">
                <div class="col-md-3 support-item">
                    <i class="fas fa-map-marker-alt sizing"></i>
                    <div>
                        <h5>Islamabad</h5>
                            <a 
                                href="https://maps.app.goo.gl/cRQXmxzxSBMB26CR7" 
                                target="_blank" 
                                rel="noopener noreferrer">
                                <p>Suit No. 1 & 2, Floor 2nd, Muhammadi Plaza, Nazim ud Din Road, F-6/4, Blue Area, Islamabad</p>
                            </a>
                        </p>
                    </div>
                    
                </div>

                <div class="col-md-3 support-item support-divider">
                    <i class="fas fa-map-marker-alt sizing"></i>
                    <div>
                        <h5>Lahore </h5>
                        <a 
                            href="https://maps.app.goo.gl/iPRjUAcBxrUFdt7N6" 
                            target="_blank" 
                            rel="noopener noreferrer">
                            <p>Office # 10 1st floor Askari Mall Sector B Askari 11 Lahore</p></a>
                    </div>
                </div>

                <div class="col-md-3 support-item support-divider">
                    <i class="fas fa-map-marker-alt sizing"></i>
                    <div>
                        <h5>Risalpur</h5>
                        <a 
                            href="https://maps.app.goo.gl/dSzuoeQGDQuqnPbc9" 
                            target="_blank" 
                            rel="noopener noreferrer">
                        <p>Eagle Market, PAF Academy Risalpur, Nowshera KPK</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    .pd-tp-x {
        padding: 25px 0px 0px;
    }    
    .support-box {
        color: #fff;
        border-radius: 10px;
        padding: 40px 20px;
        display: flex;
        flex-wrap: wrap;
        margin: 0 0 30px;
        background: linear-gradient(45deg, #000, #da0000);
    }
    .sizing {
        font-size: 22px;
        margin-top: 10px;
    }
    .support-item {
        flex: 1 1 25%;
        display: flex;
        gap: 15px;
        align-items: flex-start;
        padding: 20px;
        box-sizing: border-box;
        min-height: 180px; /* Equal height across columns */
    }
    
    .support-item i {
        font-size: 28px;
        color: #8bc34a;
        margin-top: 5px;
    }
    
    .support-item h5 {
        font-weight: 500;
        margin-bottom: 6px;
        font-size: 18px;
    }
    
    .support-item p {
        margin: 0;
        font-size: 15px;
        color: #ccc;
    }
    
    .support-divider {
        border-left: 1px solid #ffff;
    }
    
    @media (max-width: 767px) {
        .support-item {
        flex: 1 1 100%;
        min-height: auto;
        border-left: none;
        border-top: 1px solid #333;
        }
        .support-item:first-child {
        border-top: none;
        }
    }
        
    h2.headings-care {
        color: #141414 !important;
        font-size: 36px !important;
        margin: 40px 0px 22px;
    }
    video.vdeo-pkgz-desk {
        border: none;
        width: 100%;
    }    
    i.fas.fa-map-marker-alt{
            display: block;
        height: 1em;
        position: relative;
        width: 1em;
    }
    .elementor-icon i:before, .elementor-icon svg:before {
        left: 50%;
        position: absolute;
        transform: translateX(-50%);
    }
    .fa-map-marker-alt:before {
        content: "\f3c5";
    }
</style>

@stop
@section('js')
   

@endsection
