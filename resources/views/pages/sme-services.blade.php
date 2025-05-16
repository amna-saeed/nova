@extends('layout.main')
@section('content')



<section class="inner-header-sme">
    <div class="complete-bnr-txt">
        <h1 class="red">SME Services</h1><br />
    </div>
</section>

    <div class="tab-nav">
        <div class="tabs">
            <a href="#overview" class="tab-link active">Overview</a>
            <a href="#feature" class="tab-link">Features</a>
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
                    nova communication offers a range of internet services tailored to the needs of small and medium-sized businesses, ensuring you have the connectivity and security required for efficient operations.
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Dedicated Internet Services:</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            For businesses demanding top-notch performance, nova communication dedicated internet services deliver unmatched speed and reliability via our robust fiber optic network. 
                        </li>
                        <li class="fntz-red-100">
                            Enjoy uninterrupted connectivity with guaranteed bandwidth and high uptime—perfect for high-definition streaming, large-scale data transfers, or remote work environments.
                        </li>
                        <li class="fntz-red-100">
                            With customizable speed options up to 10 Gbps, you can choose the ideal solution to meet your specific operational requirements.
                        </li>
                        <li class="fntz-red-100">
                            Our dedicated support team ensures rapid issue resolution, while advanced security features safeguard your data against potential threats.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>VPN Services:</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            nova communication Data VPN provides robust encryption to safeguard your business’s digital communications and sensitive information. 
                        </li>
                        <li class="fntz-red-100">
                            Protect login credentials, financial data, and internal communications with our cost-effective VPN solution, ensuring your SME’s digital operations remain secure, private, and fully protected from external threats.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </section>
    <section id="feature">
        <div class="container">
            <div class="mange-boxes">
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/security.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Top-Tier Encryption</h2>
                        <p>Advanced encryption technology to secure your data.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/IPBX.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Safe Remote Access</h2>
                        <p>Access your network safely from any location.</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/DataVPN.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100"> 
                        <h2>Improved Privacy</h2>
                        <p>Keeps your online activities private and protected.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
.box-fea-100 p {
    font-size: 17px;
    color: #464646;
}
h1.red {
    color: #da0000;
    font-size: 56px;
    line-height: 68px;
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

