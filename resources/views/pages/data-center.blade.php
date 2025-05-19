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
                <h2 class="agree-head-bullet"><span class="bullet"></span><strong>Nova Communication</strong>'s Integrated IT Solutions</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            At <strong>Nova Communication</strong>, we transform how businesses manage their IT infrastructure by partnering with leading technologies like Cisco UCS. This platform unifies industry-standard servers with networking and storage access, enabling a consolidated system that boosts productivity and reduces total cost of ownership for our clients.
                        </li>
                        <li>Our offerings also include Dell EMC’s Hyper-Converged Infrastructure (HCI) Portfolio, which accelerates IT outcomes by streamlining operations with integrated systems. <strong>Nova Communication</strong> helps you simplify the management of complex workloads with scalable, efficient solutions tailored to your enterprise needs.
                        </li>
                        <li>Additionally, with Huawei’s Hyper-Converged Infrastructure, <strong>Nova Communication</strong> empowers organizations to build robust IT environments — from core data centers to edge deployments. We deliver dependable and high-performance infrastructure capable of handling mission-critical workloads with reliability and efficiency.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Cisco ACI With <strong>Nova Communication</strong></h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            At <strong>Nova Communication</strong>, we help businesses enhance the efficiency of their data center operations with Cisco Application Centric Infrastructure (ACI). 
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

#feature {
  scroll-margin-top: 165px; /* Adjust this to match your fixed header height */
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

