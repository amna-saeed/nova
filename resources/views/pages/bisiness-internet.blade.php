@extends('layout.main')
@section('content')

    <section class="inner-header-location">
        <div class="complete-bnr-txt">
            <h1>Business </h1><br />
        </div>
    </section>

    <div class="tab-nav">
        <div class="tabs">
            <a href="#overview" class="tab-link active">Overview</a>
            <a href="#feature" class="tab-link">Features</a>
            <a href="#benefit" class="tab-link">Benefits</a>
        </div>
        <a href="{{route ('payment')}}">
        <button class="callback-btn">
            Order Now
        </button></a>
    </div>

    <section id="overview">
        <div class="container">
            <div class="srvce-cont-box">
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            Your business’s internet connection is the backbone of your organization, and inefficiencies or limitations in this connection can disrupt business processes, causing workflow interruptions that affect productivity and, ultimately, your bottom line.
                        </li>
                        <li class="fntz-red-100">
                            Whether you're a small startup or a large corporation, TPC offers customized internet solutions designed to match your specific business needs. 
                        </li>
                        <li>
                            Our tailored packages deliver the ideal combination of speed, bandwidth, and dedicated support to ensure optimal performance and satisfaction.
                        </li>
                        <li>We understand how critical it is to keep your business online at all times.</li>
                        <li>That’s why our 24/7 Enterprise Network Operations Center (ENOC), staffed by seasoned professionals, actively monitors and manages your network to reduce downtime and enhance productivity.</li>
                        <li>
                            Partner with TPC to future-proof your internet connection—because when it comes to staying ahead, your business deserves nothing less than the best.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </section>
    <section id="feature">
        <div class="container">
            <div class="manage-secnd-boxes">
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/internett(1).png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Blazing-Fast & Uninterrupted Internet</h2>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/networ connectivity.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Extensive Network Coverage</h2>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/DPLC.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Custom Solutions</h2>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/24x7.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>24/7 ENOC</h2>
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
                        <img src="{{asset('assets/images/webImg/improved productivity.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Enhanced  <br /> Productivity</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/scalability.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Scalability</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/improved compliance.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Improved & <br />Revenue</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/network security.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Future-Proof<br />Connectivity</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/coolingsystem.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Peace of <br />Mind</h2>
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
@stop
@section('js')
@endsection

