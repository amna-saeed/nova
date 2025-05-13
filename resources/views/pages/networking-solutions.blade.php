@extends('layout.main')
@section('content')



<section class="inner-header-vpn">
    <div class="complete-bnr-txt">
        <h1>Networking Solution In<br /> Pakistan</h1>
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
                    Nova Communication, in partnership with leading global technology vendors, empowers customers to deploy and manage state-of-the-art technology infrastructures across Pakistan. 
                    <br />nova communication shared internet plans are crafted to be both cost-effective and reliable—making them an ideal choice for small to medium-sized businesses. Benefit from flexible plans that can be tailored to your evolving needs, ensuring optimal performance within your budget. Even with shared bandwidth, you'll experience consistent and dependable connectivity to keep your operations running smoothly.  
                    <br /> We provide fast installation, transparent pricing with no hidden charges, and expert support to help you get the most out of your internet service.
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>WIRELESS:</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            As the world witnesses a surge in the number of disruptions due to the explosion of IoT and mobile devices, networks need to be more responsive to the unexpected.
                        </li>
                        <li class="fntz-red-100">
                            nova communication provides solutions that enhance experiences and lessen these interruptions.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Routing:</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            nova communication offers its enterprise customers routing that enables networking for WAN, LAN, and cloud, allowing them to respond to their unique business needs efficiently.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Switching:</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            nova communication offers a broad array of deployment options with ever-improving switches helping our customers to generate remarkable results at their data center.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Storage:</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            The appropriate storage solutions support high-performance infrastructure and help enterprise customers in improving resilience as well as having control over power consumption.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Network Security:</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            With the right security solution, nova communication helps its customers to leverage the intelligence of our wide-ranging network.
                        </li>
                        <li class="fntz-red-100">
                            Unifying access allows reduced vulnerabilities and enhances visibility. 
                        </li>
                        <li class="fntz-red-100">
                            We help customers mitigate Distributed Denial of Service (DDoS) attacks by leveraging the power of cloud-based security solutions like domain protection, available through local data centers of our technology partner, Cloudflare.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </section>

<style>
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

