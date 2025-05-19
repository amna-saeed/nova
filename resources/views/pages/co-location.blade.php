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
        <a href="{{route ('payment')}}">
        <button class="callback-btn">
            Order Now
        </button></a>
    </div>

    {{-- <section id="pkges">
        @include('components.packages')
    </section>     --}}

    <section id="overview">
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
    <section id="feature">
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
    <section id="benefit">
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

.cards-mix{
    border-radius: 17px;
    border: 1px solid #fff;
    padding: 60px;
    width: 100%;
    max-width: 1100px;
    margin: 0 auto;
    background: radial-gradient(circle at center, #ead1fa 0%, #f59a9a63 50%, #dae6fe 100%);
}
.box-img-200{
    width: 23%;
}
.box-cards-white {
    background: #ffff;
    margin: 5px;
    padding: 25px;
}
.main-three-grip {
    display: grid;
    grid-template-columns: repeat(3, 2fr);
    text-align: center;
}
#benefit {
  scroll-margin-top: 165px; /* Adjust this to match your fixed header height */
}
.bg-mix-400{
    background: #f1ebee;
    padding: 50px;
    margin: 0px 0px 30px;
}

img.fea-100 {
    width: 10%;
}
#feature {
  scroll-margin-top: 165px; /* Adjust this to match your fixed header height */
}

.box-fea-100 {
    color: #ffff;
    margin: 0px;
}
.box-fea-100 h2 {
    margin: 10px;
    font-size: 22px;
    font-weight: 600;
    color: #da0000;
}

.box-fea {
    box-shadow: rgb(229 169 169) 0px -1px 7px 0px;
    text-align: center;
    padding: 19px;
    margin: 6px;
    border-radius: 13px;
    background: linear-gradient(45deg, #ffffff, rgb(194 172 183));
}
.mange-boxes {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    margin-top: 25px;
    margin-bottom: 25px;
}
.srvce-cont-box {
    padding-left: 30px;
    padding-top: 45px;
    width: 94%;
}

section {
    min-height: 300px;
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

