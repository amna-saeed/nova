@extends('layout.main')
@section('content')

    <section class="inner-header-hd">
        <div class="complete-bnr-txt">
            <h1 class="red-hdctv">Upgrade Your CABLE <br /> <span class="changes-new">TV with Fiber</span></h1>
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

    <section class="terms">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blocks-img">
                      
                    </div>
                    <div class="accordion" id="faqAccordion">
                        <!-- Item 1 -->
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false">
                                        Why is my internet speed slower on some devices compared to others?
                                    <i class="fas fa-plus icon"></i>
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Device hardware matters — older Wi-Fi adapters or outdated software can limit speed. Ensure your device is up to date and close to the TPC ONT. Interference from electronics or high usage on other devices can also affect speed.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
/*  */

/*  */
h1.red-hdctv {
    font-size: 43px;
    line-height: 62px;
}
span.changes-new {
    font-size: 43px;
    text-shadow: rgb(44 44 44) 5px 0px 1px;
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.querySelectorAll(".accordion-button").forEach(button => {
        button.addEventListener("click", function() {
            let icon = this.querySelector(".icon");
            document.querySelectorAll(".icon").forEach(i => {
                if (i !== icon) {
                    i.classList.replace("fa-minus", "fa-plus");
                }
            });
            icon.classList.toggle("fa-plus");
            icon.classList.toggle("fa-minus");
        });
    });
</script>

@stop
@section('js')
@endsection

