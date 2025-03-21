@extends('layout.main')
@section('content')



<section class="inner-header-internet">
</section>

{{-- purchase --}}
<div class="container">
    <div class="bg-purshaing-100 position-relative">
        <div class="bg-overlay"></div>
        <div class="banner-content">
            <p id="banner-subtitle">Digital Experience</p>
            <h2 id="banner-title">Your Internet <br> Pack By Speed</h2>
            <p class="tx-price">$<span id="banner-price">250</span> / Per Month</p>
            <p class="snce-para">Since 1985 Reed has pioneered specialist reaching
                Worship An Online Family</p>
                <button class="btn btn-red">Get Started</button>

            <!-- ✅ Bootstrap 5 Tabs -->
            <ul class="nav nav-tabs justify-content-center custom-tabs mt-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1" data-bs-toggle="tab" data-bs-target="#content1" type="button" role="tab">10 MBPS</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2" data-bs-toggle="tab" data-bs-target="#content2" type="button" role="tab">20 MBPS</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab3" data-bs-toggle="tab" data-bs-target="#content3" type="button" role="tab">30 MBPS</button>
                </li>
            </ul>

            <!-- ✅ Tab Content -->
            <div class="tab-content mt-4" id="myTabContent">
                <div class="tab-pane fade show active" id="content1" role="tabpanel">
                    <p>Get stable 10 MBPS internet speed with reliable connection.</p>
                </div>
                <div class="tab-pane fade" id="content2" role="tabpanel">
                    <p>Upgrade to 20 MBPS for faster downloads and seamless browsing.</p>
                </div>
                <div class="tab-pane fade" id="content3" role="tabpanel">
                    <p>Experience ultra-fast 30 MBPS internet for gaming and streaming.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{--  --}}

<section class="srvce-content-padding">
    <div class="container">
        <div class="back-srve-img">
            <div class="srvce-cont-box">
                <h3 class="fastest-net-100">Ultra-Fast Fiber Internet</h3>
                <p class="internet-para">Experience blazing-fast GPON-based fiber internet that caters to your digital lifestyle</p>
                <ul class="roundz-red">
                    <li class="fntz-red-100">Enjoy lag-free streaming</li>
                    <li class="fntz-red-100">online gaming</li>
                    <li class="fntz-red-100">smooth remote work </li>
                    <li class="fntz-red-100">unlimited data </li>
                    <li class="fntz-red-100">99.9% uptime guarantee.</li>
                </ul>
                <div class="elementor-widget-container">
                    <div class="tna-progress-item-1-wrap">
                    <h5 class="tna-heading-1 title">Clients Satisfactions</h5>
                        <div class="tna-progress-item-1 txa-class-add active">
                            <span class="tna-heading-1 percent">80%</span>
                            <span class="progress-line"></span>
                        </div>
                    </div>		
                </div>		
            </div>
        </div>
    </div>
</section>

<div class="row">
    <div class="bg-red-provided">
        <div class="box-red">
            <div class="box-full-100">
                <div class="tna-project-count-1-item">
                    <div class="pro-icon">
                        <img src="{{asset('assets/images/webImg/expandingcoverage.png')}}" class="iconz-200" alt="Happy Customers">
                    </div>
                    <div class="content-wrap">
                        <h3>480</h3>
                        <p>PHONE USERS</p>
                    </div>
                </div>
            </div>
            <div class="box-full-100">
                <div class="tna-project-count-1-item">
                    <div class="pro-icon">
                        <img src="{{asset('assets/images/webImg/expandingcoverage.png')}}" class="iconz-200" alt="Happy Customers">
                    </div>
                    <div class="content-wrap">
                        <h3>480</h3>
                        <p>PHONE USERS</p>
                    </div>
                </div>
            </div>
            <div class="box-full-100">
                <div class="tna-project-count-1-item">
                    <div class="pro-icon">
                        <img src="{{asset('assets/images/webImg/expandingcoverage.png')}}" class="iconz-200" alt="Happy Customers">
                    </div>
                    <div class="content-wrap">
                        <h3>626</h3>
                        <p>TV CHANNELS</p>
                    </div>
                </div>
            </div>
            <div class="box-full-100">
                <div class="tna-project-count-1-item">
                    <div class="pro-icon">
                        <img src="{{asset('assets/images/webImg/customersupport.png')}}" class="iconz-200" alt="Happy Customers">
                    </div>
                    <div class="content-wrap">
                        <h3>500+</h3>
                        <p>HAPPY CUSTOMERS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="speed-bnr">
    <div class="box-speed-200">
        <h4 class="speed-conecton">Try New 6G <br /> SpeedInternet <br /> Connection</h4>
    </div>
</div>

<section class="about-content-padding">
    <div class="container-fluid p-0">
        <div class="row">
            <h2 class="terms-faqs">Terms & Conditions</h2>
            <div class="col-lg-6">
                <img src="{{asset('assets/images/webImg/banner-19.png')}}" class="pkggg-100" alt="" />
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="faqAccordion">
                    <!-- Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false">
                                What is your return policy?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can return any product within 30 days of purchase with a valid receipt.
                            </div>
                        </div>
                    </div>
            
                    <!-- Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false">
                                Do you offer free shipping?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer free shipping on orders over $50.
                            </div>
                        </div>
                    </div>
            
                    <!-- Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
                                How can I contact customer support?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can contact us via email at support@example.com or call us at (123) 456-7890.
                            </div>
                        </div>
                    </div>
            
                </div>
                {{--  --}}
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.querySelectorAll(".accordion-button").forEach(button => {
        button.addEventListener("click", function() {
            let icon = this.querySelector(".icon");
            document.querySelectorAll(".icon").forEach(i => {
                if (i !== icon) {
                    i.classList.replace("fa-minus", "fa-plus");
                }
            });
            icon.classList.toggle("fa-plus");
            icon.classList.toggle("fa-minus");
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabs = document.querySelectorAll(".nav-link");
        const bannerTitle = document.getElementById("banner-title");
        const bannerSubtitle = document.getElementById("banner-subtitle");
        const bannerPrice = document.getElementById("banner-price");
    
        // Tab data (Changes dynamically)
        const tabData = {
            "tab1": { title: "Your Internet <br> Pack By Speed", subtitle: "Digital Experience", price: "250" },
            "tab2": { title: "Enjoy Faster <br> Speed Connection", subtitle: "Supercharged Network", price: "350" },
            "tab3": { title: "Next-Level <br> Internet Experience", subtitle: "Unlimited Streaming", price: "450" }
        };
    
        tabs.forEach(tab => {
            tab.addEventListener("click", function () {
                const tabId = this.id;
                if (tabData[tabId]) {
                    bannerTitle.innerHTML = tabData[tabId].title;
                    bannerSubtitle.textContent = tabData[tabId].subtitle;
                    bannerPrice.textContent = tabData[tabId].price;
                }
            });
        });
    });
</script>


@stop
@section('js')
@endsection

