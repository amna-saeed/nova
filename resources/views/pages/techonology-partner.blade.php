@extends('layout.main')
@section('content')



    <section class="inner-header-tchno">
        <div class="complete-bnr-txt">
            <h1 class="red">Techonology <br /> Partner</h1>
        </div>
    </section>

    <div class="tab-nav">
        <div class="tabs">
            <a href="#overview" class="tab-link active">Our Partners</a>
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
                <h2 class="agree-head-bullet"><span class="bullet"></span>Huawei</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            As proud partners with Huawei, a global leader in telecommunications and technology, Nova Communication’s certified Huawei experts deliver excellence by providing and integrating Huawei solutions tailored to our clients’ unique needs — ensuring unmatched service delivery for Nova’s customers.
                        </li>
                    </ul>
                </p>
                <h2 class="agree-head-bullet"><span class="bullet"></span>Cisco</h2>
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            Nova Communication proudly hosts one of the largest teams of Cisco Certified Experts in Pakistan as a Cisco Gold Partner.
                        </li>
                        <li class="fntz-red-100">
                            As industry leaders in delivering Cisco solutions, we offer a comprehensive range of services tailored to meet your specific needs. 
                        </li>
                        <li class="fntz-red-100">
                            Our experts not only provide cutting-edge Cisco technologies but also integrate them seamlessly to ensure optimal performance and value.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </section>
  

<style>
section {
    min-height: 300px;
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

