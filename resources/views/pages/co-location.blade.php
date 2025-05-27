@extends('layout.main')
@section('content')



<section class="inner-header-location-new">
    <div class="complete-bnr-txt">
        <h1>CO-LOCATION </h1><br />
    </div>
</section>

    <div class="tab-nav">
        <div class="tabs">
            <a href="#overview" class="tab-link active">Overview</a>
            <a href="#feature" class="tab-link">Features</a>
            <a href="#benefit" class="tab-link">Benefits</a>
        </div>
        <div class="mdz-right">
            <a href="https://api.whatsapp.com/send/?phone=51111111872&text=Hello&app_absent=0" target="_blank">
                <img src="{{asset('assets/images/webImg/img-contactus.png')}}" class="call-new" alt="" />
            </a>
        </div>
    </div>

    <section id="overview" class="h-srvce-100">
        <div class="container">
            <div class="srvce-cont-box">
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            Managing critical infrastructure can be a challenge for businesses, especially when it comes to ensuring security, scalability, and consistent performance.
                        </li>
                        <li>Our state-of-the-art facilities are equipped to meet the demands of modern business operations, offering indoor space solutions, dependable power supply.</li>
                        <li>This allows you to focus on your core business activities while <strong>Nova Communication</strong> ensures your infrastructure remains protected and fully operational.</li>
                    </ul>
                </p>
            </div>
        </div>
    </section>
    <section id="feature" class="h-srvce-100">
        <div class="container">
            <div class="mange-boxes">
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/security1.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Security</h2>
                        <p>Features such as biometric access, surveillance cameras, and on-site security personnel.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/scalabaility.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Scalability</h2>
                        <p>Options to scale up or down based on your needs without the complexities of managing physical infrastructure.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/coolingsystem.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Cooling Systems</h2>
                        <p>Advanced Cooling and Heating systems to maintain optimal temperature and humidity levels</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/redundancy.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Redundancy and Reliability</h2>
                        <p>Backup power systems like UPS and generators ensure continuous operations.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/networ connectivity.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Network Connectivity</h2>
                        <p>High-speed connections to maintain uptime and performance</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/security.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Improved Security</h2>
                        <p>Enhanced protection through advanced encryption and real-time threat detection.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="benefit" class="h-srvce-100">
        <div class="bg-mix-400">
            <div class="cards-mix">
                <div class="main-three-grip">
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/costefficiency.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Cost <br /> Efficiency</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/operational efficiency.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Operational <br />Efficiency</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/flexibility&growth.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Flexibility & <br />Growth</h2>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<style>

.main-three-grip {
    display: grid;
    grid-template-columns: repeat(3, 2fr);
    text-align: center;
}
#benefit {
  scroll-margin-top: 165px; /* Adjust this to match your fixed header height */
}

#feature {
  scroll-margin-top: 165px; /* Adjust this to match your fixed header height */
}
@media (min-width: 320px) and (max-width: 525px) {
    .footer-widget.latest-post {
        display: none;
    }
    .main-three-grip {
        grid-template-columns: repeat(2, 2fr);
    }
}
</style>
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

