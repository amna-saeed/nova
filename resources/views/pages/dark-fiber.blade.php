@extends('layout.main')
@section('content')



<section class="inner-header-fiber">
    <div class="complete-bnr-txt">
        <h1>DARK FIBER</h1><br />
    </div>
</section>

    <div class="tab-nav">
        <div class="tabs">
            <a href="#overview" class="tab-link active">Overview</a>
            <a href="#feature" class="tab-link">Features</a>
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
                    <strong>Nova Communication</strong> Communication offers a fully managed Dark Fiber Connectivity service tailored for a diverse range of clients, including cellular operators, local and international telecom providers, telecom infrastructure and tower companies, government agencies, and other PTA-licensed operators. 
                    <br /><strong>Nova Communication</strong> network is designed with an open architecture that allows seamless interconnection with other networks and supports the integration of advanced technological components that enhance both availability and diversity. 
                    <br /> This approach enables clients to enter new markets swiftly, with minimal effort and reduced capital investments.
                </p>
                
                <h2 class="agree-head-bullet"><span class="bullet"></span>Operation and Maintence</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            <strong>Nova Communication</strong> also extends its expertise in network management through comprehensive operation and maintenance services. 
                        </li>
                       <li>
                        Beyond standard operational support, <strong>Nova Communication</strong> provides proactive and preventive maintenance, along with cable guard services, ensuring that the fiber optic network remains well-maintained and efficiently managed.
                       </li>
                       <li>
                        With a dedicated team deployed nationwide, <strong>Nova Communication</strong> guarantees that its clients’ fiber networks stay in top condition—delivering uninterrupted service and optimal performance.
                       </li>
                    </ul>
                </p>
            </div>
        </div>
    </section>
    <section id="feature" class="h-srvce-100">
        <div class="container">
            <div class="mange-boxes">
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/scalabaility.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Scalability</h2>
                        <p>Options to scale up or down based on your needs without the complexities of managing physical infrastructure.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/improved compliance.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Compliance</h2>
                        <p>Meets the requirements set by the PTA for licensed operators.</p>
                    </div>
                </div>
                
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/flexibility&growth.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Flexibility</h2>
                        <p>Allows for the integration of various technology components and services.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/redundancy.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>High Capacity</h2>
                        <p>Supports high-bandwidth applications and services.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/network security.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Fully Managed Service</h2>
                        <p>High-speed connections to maintain uptime and performanceTPC provides end-to-end management of the Dark Fiber Connectivity, ensuring reliable operation and maintenance.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/networ connectivity.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Extensive Coverage</h2>
                        <p>The network is deployed in all major cities and Long-Haul Routes, offering widespread availability.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>

#feature {
  scroll-margin-top: 165px; /* Adjust this to match your fixed header height */
}
@media (min-width: 320px) and (max-width: 525px) {
    .footer-widget.latest-post {
        display: none;
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

