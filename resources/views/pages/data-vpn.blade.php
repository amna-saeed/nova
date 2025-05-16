@extends('layout.main')
@section('content')

<section class="inner-header-vpnz">
    <div class="complete-bnr-txt">
        <h1 class="red">DATA VPN</h1><br />
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
                            nova communication Data VPN is your digital guardian. Using industry-leading encryption protocols, we ensure that your data traffic is securely encrypted, keeping your login credentials, financial information, and business communications confidential and protected.
                        </li>
                        <li class="fntz-red-100">
                            Our Data VPN services enable enterprises to seamlessly connect their branch offices via public or private cloud networks, all while minimizing technological complexity, cutting costs, and reducing operational risks.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>L2 DATA VPN</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            nova communication provides Layer 2 VPN or “point-to-point” service, which is ideally suited for customers operating a traditional hub-and-spoke network topology.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>L3 DATA VPN</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            With nova communication Layer 3 Data VPN, customers can connect two or more branches or offices usingnova communication MPLS network.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>ANY-TO-ANY</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            nova communication offers Layer 3 VPNs in both point-to-point and point-to-multipoint configurations. 
                        </li>
                        <li class="fntz-red-100">
                            This enables customers to achieve “any-to-any” connectivity within their network, giving them the flexibility to design VPNs tailored to their specific requirements.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>DUAL-HUB</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            With dual-hub connectivity, you can improve your productivity by providing more frequent links and ensuring that your business runs smoothly and efficiently.
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
                    <img src="{{asset('assets/images/webImg/Industry leading.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Industry-Leading Encryption Protocols</h2>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/security remote access.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Secure Remote Access</h2>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/network security.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Network Security Fortification</h2>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/enhanced user.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Enhanced User Privacy</h2>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section id="benefit">
        <div class="bg-mix-400">
            <div class="cards-mix">
                <div class="main-title-grip">
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/unwavering security.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Unwavering Security</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/improved productivity.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Increased Productivity</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/enhanced.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Enhanced <br />Agility</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/improved compliance.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Improved Compliance</h2>
                        </div>
                    </div>
                </div>
                <div class="main-title-grip">
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/costsaving.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Cost <br />Saving</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/scalability.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Scalability For Growth</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/bandwidth.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>Bandwidth <br />Customization</h2>
                        </div>
                    </div>
                    <div class="box-cards-white">
                        <img src="{{asset('assets/images/webImg/24x7.png')}}" class="box-img-200" alt="" />
                        <div class="box-bene-100">
                            <h2>24×7 Dedicated Support Team</h2>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

<style>
.box-bene-100 h2 {
    font-size: 22px;
    color: #da0000;
    line-height: 25px;
}
h1.red {
    color: #da0000;
    font-size: 56px;
    line-height: 68px;
}
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
.main-title-grip {
    display: grid;
    grid-template-columns: repeat(4, 2fr);
    text-align: center;
}
.bg-mix-400{
    background: #f1ebee;
    padding: 50px;
    margin: 0px 0px 30px;
}
.box-fea-100 p {
    font-size: 17px;
    color: #464646;
}
img.fea-100 {
    width: 10%;
}
#feature {
  scroll-margin-top: 165px; /* Adjust this to match your fixed header height */
}
#benefit {
  scroll-margin-top: 165px; /* Adjust this to match your fixed header height */
}
p.internet-para{
    font-size: 18px;
    color: rgb(81 89 108);
    margin-bottom: 22px;
    line-height: 30px;
}
.sec-title h2.pkg-slidez {
    color: #da0000;
    position: relative;
    display: inline-block;
    font-size: 33px;
    font-weight: 800;
    line-height: 30px;
    margin-top: 45px;
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
.box-fea-100 p {
    font-size: 17px;
    color: #464646;
}
.box-fea {
    box-shadow: rgb(229 169 169) 0px -1px 7px 0px;
    text-align: center;
    padding: 30px 20px;
    margin: 6px;
    border-radius: 13px;
    background: linear-gradient(45deg, #ffffff, rgb(194 172 183));
}
.manage-secnd-boxes {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    margin-top: 25px;
    margin-bottom: 25px;
    padding: 0px 85px;
}
.srvce-cont-box {
    padding-left: 30px;
    padding-top: 45px;
    width: 94%;
}
.roundz-red {
    list-style: none; /* Removes default bullets */
    padding: 0;
    margin-left: 4%;
    text-align: justify;
}

.roundz-red li {
    position: relative;
    padding-left: 25px;
    font-size: 18px;
    color: rgb(81 89 108);
    margin-bottom: 10px;
    font-weight: 500;
}
.roundz-red {
    list-style: none;
    padding: 0;
    gap: 10px; 
    margin-left: 4%;
    text-align: justify;
}
.roundz-red li::before {
    content: "\f00c";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    left: 0;
    top: 13px;
    transform: translateY(-50%);
    background: #da0000;
    color: white;
    width: 15px;
    height: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 9px;
}
.tab-nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 160px;
    border-bottom: 1px solid #ddd;
}
.agree-head-bullet .bullet {
        position: absolute;
        left: 0;
        top: 10px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: linear-gradient(45deg, #452d2d, #da0000);
        display: inline-block;
}
.agree-head-bullet {
    font-size: 23px;
    color: black;
    margin: 0 0 10px;
    position: relative;
    padding-left: 30px;
    text-align: left;
}
.tabs {
    display: flex;
    gap: 30px;
    position: relative;
}
.tabs a {
    text-decoration: none;
    color:#4c4c4c;
    font-weight: 600;
    font-size: 16px;
    position: relative;
    padding: 10px 0;
}
.tabs a.active {
    color: #4c4c4c;
    font-weight: 600;
    font-size: 16px;
}
.tabs a.active::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 3px;
    background: #da0000;
    left: 0;
    bottom: -10px; /* underline appears 21px below the text */
}
.callback-btn {
    border: 1px solid #747474;
    padding: 10px 26px;
    border-radius: 20px;
    color: #faf9f9;
    background: transparent;
    font-weight: bold;
    cursor: pointer;
    background:linear-gradient(45deg, #0a0a0a, #da0000);
    animation: blinkEffect 1s infinite;
    letter-spacing: 1px;
}
@keyframes blinkEffect {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.3;
  }
}
section {
    min-height: 220px;
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

