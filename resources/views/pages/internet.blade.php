@extends('layout.main')
@section('content')



    <section class="inner-header-internet-local">
        <div class="complete-bnr-txt">
            <h1>Internet </h1><br />
        </div>
    </section>

    <div class="tab-nav">
        <div class="tabs">
            <a href="#pkges" class="tab-link active">Packages</a>
            <a href="#feature" class="tab-link">Features</a>
            <a href="#benefit" class="tab-link">Benefits</a>
        </div>
        <div class="mdz-right">
            <a href="https://api.whatsapp.com/send/?phone=51111111872&text=Hello&app_absent=0" target="_blank">
                <img src="{{asset('assets/images/webImg/img-contactus.png')}}" class="call-new" alt="" />
            </a>
        </div>
    </div>

    <section id="pkges">
        @include('components.packages')
    </section>    

    <section id="feature">
        <div class="container">
            <div class="mange-boxes">
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/new-wifi.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Instant Communication</h2>
                        <p>Email, messaging apps, and video calls make global communication fast and easy.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/DPLC.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Access to Information</h2>
                        <p>Search engines and websites provide unlimited knowledge on nearly every topic.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/operational efficiency.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>E-Commerce & Online Services</h2>
                        <p>Shop, bank, and access services like food delivery or telemedicine from anywhere.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/bandwidth.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Remote Work & Learning</h2>
                        <p>Enables virtual jobs, online courses, and webinars across the globe.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/IPBX.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Entertainment</h2>
                        <p>Streaming movies, music, games, and social media offer endless options.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/cloud services.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Social Connectivity</h2>
                        <p>Platforms like Facebook, Instagram, and LinkedIn help people stay connected.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="benefit">
        <div class="bg-mix-400">
            <div class="cards-mix">
                <div class="main-three-grip">
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/internet bandwidth.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Global <br /> Reach</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/internett(1).png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Interactivity </h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/fiberopticnetwork.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Multimedia <br />Support</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/co-locationservices.png')}}" class="box-img-300" alt="" />
                        <div class="box-bene-100">
                            <h2>Searchability </h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/cloud services.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Cloud Integration</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/scalabaility.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Scalability</h2>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <script>
        const links = document.querySelectorAll('.tab-link');
        links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            links.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            const section = document.querySelector(this.getAttribute('href'));
            section.scrollIntoView({ behavior: 'smooth' });
        });
        });
    </script>

    <style>
        @media (min-width: 320px) and (max-width: 525px) {
            #cityTabs {
                display: flex;
                flex-direction: row;
                gap: 4px;
                position: absolute;
                top: 4484px;
                left: 8%;
                border: none !important;
            }
            .slide-buttons.text-center.my-3 {
                position: absolute;
                top: 104%;
                background: red;
            }
        }
    </style>
@stop
@section('js')
@endsection

