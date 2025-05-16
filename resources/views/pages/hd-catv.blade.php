@extends('layout.main')
@section('content')

    <section class="inner-header-hd">
        <div class="complete-bnr-txt">
            <h1 class="red">Upgrade Your CABLE <br /> TV with Fiber</h1>
        </div>
    </section>

    <div class="tab-nav">
        <div class="tabs">
            <a href="#overview" class="tab-link">Overview</a>
            <a href="#pkges" class="tab-link active">Packages</a>
        </div>
        <a href="{{route ('payment')}}">
        <button class="callback-btn">
            Order Now
        </button></a>
    </div>
    <div class="container">
        <video class="vdeo-pkgz-desk" autoplay="" loop="" muted="" poster="">
            <source src="{{asset('assets/images/webImg/Comp2.mp4')}}" type="video/mp4" class="video-pkg-inner">
        </video>
    </div>

    <section id="pkges">
        @include('components.hd-pkg')
    </section>    

    <section id="overview">
        <div class="container">
            <div class="srvce-cont-box">
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                            Enjoy more channels, sharper quality, and faster speeds.
                        </li>
                        <li class="fntz-red-100">
                            From blockbuster movies to live sports, experience it all in ultra-fast quality.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </section>

<style>
h1.red {
    color: #da0000;
    font-size: 49px;
    line-height: 63px;
}
section {
    min-height: 169px;
}
.slide-buttons.text-center.my-3 {
    position: absolute;
    top: 209.5%;
    background: red;
}
video.vdeo-pkgz-desk {
    width: 100%;
    margin: 43px 0px 0px;
    border-radius: 16px;
}
.slide-buttons.text-center.my-3 {
    position: absolute;
    top: 195.5%;
    background: red;
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

