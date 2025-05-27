@extends('layout.main')
@section('content')



<section class="inner-header-voice">
    <div class="complete-bnr-txt">
        <h1 class="red">Voice Services</h1>
    </div>
</section>

    <div class="tab-nav">
        <div class="tabs">
            <a href="#overview" class="tab-link active">Overview</a>
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
                    Clear and effortless communication is the foundation of a thriving business. <strong>Nova Communication</strong> Telephony Solutions offer a comprehensive suite of voice services designed to strengthen your communication infrastructure, ensuring your team connects and collaborates with ease.
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Trunking Solutions</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            <strong>Nova Communication</strong> supports multiple PBX interfaces to ensure flexible and scalable telephony solutions for businesses of all sizes.Our supported interfaces include:
                        </li>
                        <li class="fntz-red-100">
                            SIP (Session Initiation Protocol)
                        </li>
                        <li>PRI (Primary Rate Interface)</li>
                        <li>POTS (Plain Old Telephone System)</li>
                        <li>VoIP (Voice-only IP)</li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Universal Access Number (UAN)</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            <strong>Nova Communication</strong> enables businesses to maintain geographically distributed sites and offices while operating under a single Universal Access Number, making it easy for customers to reach you through one memorable, non-geographic number.
                        </li>
                    </ul>
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
                <h2 class="agree-head-bullet"><span class="bullet"></span>Direct Inward/Outward Dial Numbers</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100"><strong>Nova Communication</strong> offers fast, reliable, and cost-effective Direct Inward Dialing (DID) and Direct Outward Dialing (DOD) solutions</li>
                        <li class="fntz-red-100">These services help your business establish a high-quality digital telephony system at a reduced cost, improving communication flow both internally and externally.</li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Toll-Free Services</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">With <strong>Nova Communication</strong>  Toll-Free Services, you can enhance customer engagement and support by offering your clients an easy, cost-free way to reach your business.</li>
                        <li class="fntz-red-100">This service strengthens customer relationships and reinforces your brand’s commitment to accessible and responsive service.</li>
                    </ul>
                </p>
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
            .footer-widget.latest-post {
                display: none;
            }
        }
    </style>
@stop
@section('js')
@endsection

