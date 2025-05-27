@extends('layout.main')
@section('content')
    <section class="inner-header-hd">
        <div class="complete-bnr-txt">
            <h1 class="red-hdctv">Upgrade Your CABLE <br /> <span class="changes-new">TV with Fiber</span></h1>
        </div>
    </section>

    <div class="tab-nav">
        <div class="tabs">
            <a href="#overview" class="tab-link active">Overview</a>
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
            <source src="{{asset('assets/images/webImg/Comp2.mp4')}}" type="video/mp4" class="video-pkg-inner">
        </video>
    </div>


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
                    <li class="fntz-red-100 bd-200">RF ONT is mandatory for subscribing to Nova Communication’s Cable TV service.</li>
                    <li class="fntz-red-100 bd-200">Only PEMRA-approved channels are available on our network.</li>
                    <li class="fntz-red-100 bd-200">Channel availability is subject to change and may be replaced depending on availability.</li>
                    <li class="fntz-red-100 bd-200">Your TV/LED/LCD must support the PAL color system and B/G sound system to ensure compatibility and proper signal reception.</li>
                    <li class="fntz-red-100 bd-200">Nova Communication will not be responsible for poor picture quality if third-party TV devices (e.g., tuners, converters) are used.</li>
                    <li class="fntz-red-100 bd-200">Cable TV service can be used on up to four (4) TV sets simultaneously under standard charges.</li>
                    <li class="fntz-red-100 bd-200">An additional charge of Rs. 200 per month will apply for a 5th TV connection.</li>
                    <li class="fntz-red-100 bd-200">Billing begins as soon as a Cable TV plan is assigned to your account.</li>
                    <li class="fntz-red-100 bd-200">Any additional cabling or hardware required will be charged based on actual cost.</li>
                    <li class="fntz-red-100 bd-200">Please note that channel quality is not in HD.</li>
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
    background: linear-gradient(rgb(30 30 30 / 84%), #da00002e), url(/assets/images/resources/terms-backgrnd.png) center center no-repeat !important;
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
@media (min-width: 320px) and (max-width: 525px) {
  .inner-header-hd{
        height: 172px;
    }
    h1.red-hdctv {
        font-size: 18px;
        line-height: 28px;
    }
    span.changes-new {
        font-size: 25px;
        text-shadow: rgb(44 44 44) 5px 0px 1px;
    }
    video.vdeo-pkgz-desk {
        width: 100%;
        margin: 16px 0px 0px;
        border-radius: 2px;
    }

    /* terms */
    .terms-box h2 {
      font-size: 19px;
    }
    .modal-header .close.new-termz{
        font-size: 45px;
    }
    li.fntz-red-100.bd-200 {
      font-size: 14px;
    }
    .roundz-red li {
      padding-left: 25px;
      font-size: 14px;
      margin-bottom: 10px;
      line-height: 21px;
    }
    .footer-widget.latest-post {
      display: none;
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

