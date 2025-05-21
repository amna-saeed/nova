@extends('layout.main')
@section('content')
    <section class="inner-header-iplay">
        <div class="complete-bnr-txt">
            <h1 class="red-hdctv">Watch Your TV Your Way</h1>
        </div>
    </section>

    <div class="tab-nav">
        <div class="tabs">
          <a href="#overview" class="tab-link">Overview</a>
          <a href="#pkg" class="tab-link active">Package</a>
          <a href="#feature" class="tab-link">Features</a>
          <a class="tab-link" data-toggle="modal" data-target="#termsModal1">Terms & Conditions</a>
        </div>
        <div class="mdz-right">
          <a href="https://api.whatsapp.com/send/?phone=51111111872&text=Hello&app_absent=0" target="_blank">
              <img src="{{asset('assets/images/webImg/img-contactus.png')}}" class="call-new" alt="" />
          </a>
      </div>
    </div>
    <div class="container">
        <video class="vdeo-pkgz-desk" autoplay="" loop="" muted="" poster="">
            <source src="{{asset('assets/images/webImg/Comp2.mp4')}}" type="video/mp4" class="video-pkg-inner">
        </video>
    </div>

    <section id="pkg">
      @include('components.iplayPkg')
    </section>
    <section id="overview">
        <div class="container">
            <div class="srvce-cont-box">
                <p class="internet-para">
                    <ul class="roundz-red">
                        <li class="fntz-red-100">
                           Unlock smart TV capabilities with Joy Box, transforming your standard TV into a high-tech entertainment hub with intuitive features and seamless connectivity.
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
                    <img src="{{asset('assets/images/webImg/scalability.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Ease of use</h2>
                        <p>Designed with user-friendly features that make setup and operation straightforward for everyone</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/scalability.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>On-demand content</h2>
                        <p>Access a variety of on-demand movies, shows, and videos, turning your TV into an entertainment hub..
                          High-definition viewing</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/scalability.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Affordable entertainment</h2>
                        <p>With easy installments and ongoing offers, enjoy your favorite content without putting a dent in your pocket.
                          Recording and playback</p>
                    </div>
                </div>
                <div class="box-fea">
                    <img src="{{asset('assets/images/webImg/scalability.png')}}" class="fea-100" alt="" />
                    <div class="box-fea-100">
                        <h2>Parental controls</h2>
                        <p>Streaming movies, music, games, and social media offer endless options.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal --}}
    <div class="modal fade" id="termsModal1" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close new-termz" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body termz-100">
              <div class="row">
                <div class="col-lg-12">
                  <div class="terms-box">
                    <h2>Terms & Condition</h2>
                  </div>
                  <ul class="roundz-red internet-para termzz-mdl">
                    <li class="fntz-red-100 bd-200">Only one iPlay Box can be used per TV.</li>
                    <li class="fntz-red-100 bd-200">There is no return policy for the iPlay Box.</li>
                    <li class="fntz-red-100 bd-200">Channels available on the iPlay Box are subject to change based on availability.</li>
                    <li class="fntz-red-100 bd-200">The TV must have an HDMI port to view channels in HD resolution.</li>
                    <li class="fntz-red-100 bd-200">Nova Communication Internet is mandatory to subscribe to the iPlay Box for accessing Live Channels and VOD.</li>
                    <li class="fntz-red-100 bd-200">To use YouTube or other Android applications on the iPlay Box, the customer must have an active Nova Communication Internet package.</li>
                    <li class="fntz-red-100 bd-200">Support for third-party apps will not be provided.</li>
                    <li class="fntz-red-100 bd-200">iPlay Box-supported apps  will function only if an Internet package is active.</li>
                    <li class="fntz-red-100 bd-200">The VOD (Video On Demand) service is complimentary with the iPlay Box subscription.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const modal = document.getElementById('termsModal1');
        modal.addEventListener('hidden.bs.modal', function () {
          document.body.classList.remove('modal-open');
          document.body.style.paddingRight = '';
            const backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) backdrop.remove();
          });
      </script>
      
<style>
body{
    padding-right: 0px !important;
} 
a.tab-link.active {
    cursor: pointer !important;
}

.modal-header {
  border: none;
  padding: 0px;
  margin: 0px;
  min-height: 0px;
}

.modal-body.termz-100 {
    position: relative;
    padding: 0px 20px 0px 0px;
    border-radius: 20px !important;
}

.modal-content {
  border-radius: 15px !important;
}

.modal-header .close.new-termz{
    margin-top: 0px;
    position: absolute;
    color: #da0000;
    right: 5px;
    font-size: 52px;
    font-weight: 500;
    box-shadow: none;
    border: red !important;
    top: -3px;
    opacity: 1;
    z-index: 11;
}
.terms-box h2 {
    text-align: center;
    font-size: 26px;
    color: #da0000;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 770px !important;
    margin: 60px auto;
  }
}
div#termsModal1 {
    padding: 0px !important;
}
.modal-content {
  position: relative;
  overflow: hidden;
  border-radius: 15px;
}

.modal {
  background: none !important;
}
.modal.show {
    background: linear-gradient(rgb(30 30 30 / 84%), #da00002e), url(/assets/images/resources/i-playtv1.png) center center no-repeat !important;
    background-size: cover !important;
}
li.fntz-red-100.bd-200 {
    font-size: 16px;
}
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

@stop
@section('js')
@endsection

