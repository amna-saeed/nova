@extends('layout.main')
@section('content')



<section class="inner-header-network">
    <div class="complete-bnr-txt">
        <h1 class="linez-adj">Networking Solution <br /> In Pakistan</h1>
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
                    <strong>Nova Communication</strong>, in partnership with leading global technology vendors, empowers customers to deploy and manage state-of-the-art technology infrastructures across Pakistan. 
                    <br /><strong>Nova Communication</strong> shared internet plans are crafted to be both cost-effective and reliable—making them an ideal choice for small to medium-sized businesses. Benefit from flexible plans that can be tailored to your evolving needs, ensuring optimal performance within your budget. Even with shared bandwidth, you'll experience consistent and dependable connectivity to keep your operations running smoothly.  
                    <br /> We provide fast installation, transparent pricing with no hidden charges, and expert support to help you get the most out of your internet service.
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>WIRELESS:</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            As the world witnesses a surge in the number of disruptions due to the explosion of IoT and mobile devices, networks need to be more responsive to the unexpected.
                        </li>
                        <li class="fntz-red-100">
                            <strong>Nova Communication</strong> provides solutions that enhance experiences and lessen these interruptions.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Routing:</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            <strong>Nova Communication</strong> offers its enterprise customers routing that enables networking for WAN, LAN, and cloud, allowing them to respond to their unique business needs efficiently.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Switching:</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            <strong>Nova Communication</strong> offers a broad array of deployment options with ever-improving switches helping our customers to generate remarkable results at their data center.
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
                            With the right security solution, <strong>Nova Communication</strong> helps its customers to leverage the intelligence of our wide-ranging network.
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
h1.linez-adj {
    font-size: 56px;
    line-height: 60px;
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

