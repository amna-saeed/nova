@extends('layout.main')
@section('content')

<section class="inner-header-center">
    <div class="complete-bnr-txt">
        <h1>DATA CENTER </h1>
    </div>
</section>

    <div class="tab-nav">
        <div class="tabs">
            <a href="#overview" class="tab-link active">Overview</a>
        </div>
        <a href="{{route ('payment')}}">
        <button class="callback-btn">
        Order Now
        </button></a>
    </div>

    <section id="overview">
        <div class="container">
            <div class="srvce-cont-box">
                <h2 class="agree-head-bullet"><span class="bullet"></span>Computer/Hyper Converged Infrastructure</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            Cisco Unified Computing System™ (Cisco UCS®) is an integrated computing infrastructure with intent-based management to automate and accelerate the deployment of all your applications.
                        </li>
                        <li class="fntz-red-100">
                            Virtualization
                        </li>
                        <li>Cloud Computing</li>
                        <li>Scale-Out</li>
                        <li>Bare-Metal Workloads</li>
                        <li>In-memory Analytics</li>
                        <li>Edge Computing</li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>nova communication's Integrated IT Solutions</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            At nova communication, we transform how businesses manage their IT infrastructure by partnering with leading technologies like Cisco UCS. This platform unifies industry-standard servers with networking and storage access, enabling a consolidated system that boosts productivity and reduces total cost of ownership for our clients.
                        </li>
                        <li>Our offerings also include Dell EMC’s Hyper-Converged Infrastructure (HCI) Portfolio, which accelerates IT outcomes by streamlining operations with integrated systems. nova communication helps you simplify the management of complex workloads with scalable, efficient solutions tailored to your enterprise needs.
                        </li>
                        <li>Additionally, with Huawei’s Hyper-Converged Infrastructure, nova communication empowers organizations to build robust IT environments — from core data centers to edge deployments. We deliver dependable and high-performance infrastructure capable of handling mission-critical workloads with reliability and efficiency.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Cisco ACI With nova communication</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            At nova communication, we help businesses enhance the efficiency of their data center operations with Cisco Application Centric Infrastructure (ACI). 
                        </li>
                        <li class="fntz-red-100">
                            By leveraging Cisco ACI, our clients benefit from increased automation and consistent policy enforcement across both on-premise and cloud environments. 
                        </li>
                        <li class="fntz-red-100">
                            This unified approach simplifies management, improves agility, and drives operational excellence.
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

