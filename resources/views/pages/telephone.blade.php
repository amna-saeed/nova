@extends('layout.main')
@section('content')

<section class="inner-header-telephone-bnr">
    <div class="complete-bnr-txt">
        <h1 class="red">Telephone</h1>
    </div>
</section>

    <div class="tab-nav">
        <div class="tabs">
            <a href="#overview" class="tab-link">Overview</a>
        </div>
        <a href="{{route ('payment')}}">
            <button class="callback-btn">
                Order Now
            </button>
        </a>
    </div>

    <section id="overview">
        <div class="container">
            <div class="srvce-cont-box">
                <h2 class="agree-head-bullet"><span class="bullet"></span>Voice Services</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            Clear and effortless communication is the foundation of a thriving business. 
                        </li>
                        <li class="fntz-red-100">
                            nova communication Telephony Solutions offer a comprehensive suite of voice services designed to strengthen your communication infrastructure, ensuring your team connects and collaborates with ease.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Trunking Solutions</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            nova communication supports multiple PBX interfaces to ensure flexible and scalable telephony solutions for businesses of all sizes. 
                        </li>
                    </ul>
                </p>
                <p class="internet-para">
                    Our supported interfaces include:
                </p>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            SIP (Session Initiation Protocol)
                        </li>
                        <li class="fntz-red-100">
                            PRI (Primary Rate Interface)
                        </li>
                        <li class="fntz-red-100">
                            POTS (Plain Old Telephone System)
                        </li>
                        <li class="fntz-red-100">
                            VoIP (Voice-only IP)
                        </li>
                        <li>Universal Access Number (UAN)</li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Universal Access Number (UAN)</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            nova communication enables businesses to maintain geographically distributed sites and offices while operating under a single Universal Access Number, making it easy for customers to reach you through one memorable, non-geographic number.
                        </li>
                        <li class="fntz-red-100">
                            These services are delivered through PRI, SIP, and POTS trunking interfaces, allowing businesses to handle multiple simultaneous calls seamlessly and efficiently.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Direct Inward/Outward Dial Numbers</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            nova communication offers fast, reliable, and cost-effective Direct Inward Dialing (DID) and Direct Outward Dialing (DOD) solutions.
                        </li>
                        <li class="fntz-red-100">
                            These services help your business establish a high-quality digital telephony system at a reduced cost, improving communication flow both internally and externally.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Toll-Free Services</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            With nova communication  Toll-Free Services, you can enhance customer engagement and support by offering your clients an easy, cost-free way to reach your business.   
                        </li>
                        <li class="fntz-red-100">
                            This service strengthens customer relationships and reinforces your brand’s commitment to accessible and responsive service.
                        </li>
                    </ul>
                </p>
               
            </div>
        </div>
    </section>

<style>
section {
    min-height: 220px;
}
h1.red {
    color: #da0000;
    font-size: 56px;
    line-height: 68px;
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

