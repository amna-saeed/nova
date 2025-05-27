@extends('layout.main')
@section('content')
    <section class="inner-header-digital">
        <div class="complete-bnr-txt">
            <h1 class="red-hdctv">Experience Seamless Connectivity with <br /> <span class="changes-new">Our Advanced Digital Box</span></h1>
        </div>
    </section>

    <div class="tab-nav">
        <div class="tabs">
            <a href="#pkg" class="tab-link active">Packages</a>
              <a href="#feature" class="tab-link">Features</a>
            <a href="#pkges" class="tab-link" data-toggle="modal" data-target="#termsModal1">Terms & Conditions</a>
        </div>
        <div class="mdz-right">
          <a href="https://api.whatsapp.com/send/?phone=51111111872&text=Hello&app_absent=0" target="_blank">
              <img src="{{asset('assets/images/webImg/img-contactus.png')}}" class="call-new" alt="" />
          </a>
        </div>
    </div>
    <div class="container">
        <video class="vdeo-pkgz-desk" autoplay="" loop="" muted="" poster="">
            <source src="{{asset('assets/images/webImg/digitalboxgif.mp4')}}" type="video/mp4" class="video-pkg-inner">
        </video>
    </div>
    <section id="pkg">
      @include('components.digitalPkg')
    </section>

    <section id="feature">
      <div class="container">
          <div class="manage-secnd-boxes">
              <div class="box-fea">
                  <img src="{{asset('assets/images/webImg/television-record(2).png')}}" class="fea-100" alt="" />
                  <div class="box-fea-100">
                      <h2>Record live TV</h2>
                      <p>Capture live TV instantly on a flash drive.</p>
                  </div>
              </div>
              <div class="box-fea">
                  <img src="{{asset('assets/images/webImg/facetime-button.png')}}" class="fea-100" alt="" />
                  <div class="box-fea-100">
                      <h2>wide channel selection </h2>
                      <p>Choose from an extensive range of digital channels.</p>
                  </div>
              </div>
              <div class="box-fea">
                  <img src="{{asset('assets/images/webImg/hd-film.png')}}" class="fea-100" alt="" />
                  <div class="box-fea-100">
                      <h2> Crystal clear picture quality</h2>
                      <p>Experience high-definition visuals and superior sound quality. </p>
                  </div>
              </div>
              <div class="box-fea">
                  <img src="{{asset('assets/images/webImg/clapper.png')}}" class="fea-100" alt="" />
                  <div class="box-fea-100">
                      <h2>Media player</h2>
                      <p>Play videos, music, and view photos directly from your USB drive in full HD.</p>
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
                    <li class="fntz-red-100 bd-200">RF ONT is mandatory to subscribe to the Digital Box service.</li>
                    <li class="fntz-red-100 bd-200">Subscription to Basic Cable TV service is required in order to avail the Digital Box.</li>
                    <li class="fntz-red-100 bd-200">One Digital Box can be provided per TV set at the customer’s premises.</li>
                    <li class="fntz-red-100 bd-200">A standard one-year warranty is applicable on the Digital Box.</li>
                    <li class="fntz-red-100 bd-200">Channels are subject to availability and may change without prior notice.</li>
                    <li class="fntz-red-100 bd-200">Billing will commence as soon as the Digital Box plan is assigned.</li>
                    <li class="fntz-red-100 bd-200">Any additional cabling or hardware required will be charged as per actual cost.</li>
                    <li class="fntz-red-100 bd-200">8.TO view channels in HD resolution, your TV must have an HDMI port.</li>
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
    background: linear-gradient(rgb(30 30 30 / 84%), #da00002e), url(/assets/images/resources/digitaltv3.png) center center no-repeat !important;
    background-size: cover !important;
}
li.fntz-red-100.bd-200 {
    font-size: 16px;
}
/*  */
h1.red-hdctv {
    font-size: 35px;
    line-height: 61px;
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
@media (min-width: 320px) and (max-width: 525px) {
  h1.red-hdctv {
    font-size: 22px;
    line-height: 26px;
  }
  span.changes-new {
    font-size: 19px;
  }
  video.vdeo-pkgz-desk {
    width: 100%;
    margin: 29px 0px 0px;
    border-radius: 6px;
  }
  .horizontal-slider{
    justify-content: start;
  }
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

