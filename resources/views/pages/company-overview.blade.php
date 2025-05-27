@extends('layout.main')

@section('content')

<style>
  img.tabs-img-w {
    width: 100%;
    border-radius: 14px;
    text-align: center;
    justify-content: center;
    align-items: center;
    height: 243px;
  }
  img.tabs-img-e {
    width: 100%;
    border-radius: 14px;
    text-align: center;
    justify-content: center;
    align-items: center;
    height: 500px;
  }

  .row.box-full-500{
        width: 100%;
      max-width: 1052px;
      margin: 0 auto;
      text-align: center;
  }
  .tab-image {
    width: 100%;
    border-radius: 15px;
    margin-bottom: 20px;
  }
  .description-text {
    font-size: 1rem;
    color: #444;
    margin: 20px 0;
  }
  .nav-pills .nav-link {
      border-radius: 50px;
      margin: 0 5px;
      padding: 7px 28px;
      font-weight: 550;
      font-size: 17px;
      font-family: system-ui;
      line-height: 27px;
  }
  .nav-pills .nav-link.active {
     background-color: #da0000;
    color: #fff !important;
  }
  .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
        color: #fff;
        background-color: #da0000;
        color: #fff !important;
  }
  ul#tabMenu {
      margin: 35px;
  }
  .image-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    max-width: 870px;
    margin: 26px auto;
  }

@media (min-width: 320px) and (max-width: 525px) {
  ul#tabMenu {
    margin: 22px 1px;
    flex-wrap: wrap;
  }
  .nav-pills .nav-link {
      border-radius: 50px;
      margin: 0 0px;
      padding: 2px 20px;
      font-weight: 550;
      font-size: 12px;
      font-family: system-ui;
      line-height: 27px;
  }
  img.tabs-img-w {
    width: 100%;
    border-radius: 8px;
    text-align: center;
    justify-content: center;
    align-items: center;
    height: 75px;
  }
  .footer-widget.latest-post {
      display: none;
  }
  img.tabs-img-e {
      width: 100%;
      border-radius: 14px;
      text-align: center;
      justify-content: center;
      align-items: center;
      height: 200px;
  }
}
</style>

<div class="container my-5">
  <!-- Pills Navigation -->
  <ul class="nav nav-pills justify-content-center mb-4" id="tabMenu" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="trainings-tab" data-toggle="pill" href="#trainings" role="tab" aria-controls="trainings" aria-selected="true">Trainings</a>
    
    </li>
    <li class="nav-item">
      <a class="nav-link" id="presentation-tab" data-toggle="pill" href="#presentation" role="tab" aria-controls="presentation" aria-selected="false">Presentation session</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="events-tab" data-toggle="pill" href="#events" role="tab" aria-controls="events" aria-selected="false">Events</a>
    </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content" id="tabContent">

    <!-- Trainings Tab -->
    <div class="tab-pane fade show active" id="trainings" role="tabpanel" aria-labelledby="trainings-tab">
      <p class="internet-para">
        <ul class="roundz-red">
            <li class="fntz-red-100">
               <strong>Nova Communication</strong> cultivates a dynamic learning culture that empowers its employees to achieve professional growth and excellence.
            </li>
            <li class="fntz-red-100">
                Through a robust framework of continuous training programs and targeted workshops, team members are encouraged to acquire new competencies and broaden their knowledge base.
            </li>
            <li class="fntz-red-100">
               The organization places a strong emphasis on innovation, actively promoting the exploration of new ideas and methodologies.
            </li>
            <li class="fntz-red-100">
               Open channels of communication and a collaborative work environment further enrich the learning process, fostering knowledge sharing and peer-to-peer development.
            </li>
            <li class="fntz-red-100">
               <strong>Nova Communication's</strong> unwavering commitment to continuous learning and professional development creates a culture of growth, resulting in a highly skilled, engaged, and motivated workforce.
            </li>
            <li class="fntz-red-100">
                This strategic focus positions the company at the forefront of the industry, enabling it to consistently deliver innovative, cutting-edge solutions to its clients.
            </li>
        </ul>
      </p>
      <div class="image-grid">
        <img src="{{ asset('assets/images/webImg/20250523_113733.jpg') }}" class="tabs-img-w" />
        <img src="{{ asset('assets/images/webImg/working-ofce.png') }}" class="tabs-img-w" />
        <img src="{{ asset('assets/images/webImg/mtngs2-emply.jpeg') }}" class="tabs-img-w" />
        <img src="{{ asset('assets/images/webImg/new-04.png') }}" class="tabs-img-w" />
      </div>
    </div>

    <!-- Presentation Tab -->
    <div class="tab-pane fade" id="presentation" role="tabpanel" aria-labelledby="presentation-tab">
      <p class="internet-para">
        <ul class="roundz-red">
            <li class="fntz-red-100">
               <strong>Nova Communication</strong>  a leading name in the telecommunications sector, recently hosted a series of insightful and impactful presentation sessions led by its senior executives.
            </li>
            <li>These sessions were designed to cultivate employee development by providing strategic guidance and actionable insights to support both personal and professional growth.</li>
            <li>With a strong emphasis on skill enhancement and career advancement, the executives delivered thought-provoking presentations that offered practical tools, effective strategies, and industry best practices.</li>
            <li>These initiatives reflect Nova Communication’s ongoing commitment to empowering its workforce and fostering a culture of continuous learning, innovation, and excellence.</li>
            <li>Through such programs, <strong>Nova Communication</strong> continues to nurture a dynamic workplace environment that inspires growth, collaboration, and high performance across all levels of the organization.</li>
          </ul>
      </p>
      <div class="image-grid">
        <img src="{{ asset('assets/images/webImg/20250520_111551.jpg') }}" class="tabs-img-w" />
        <img src="{{ asset('assets/images/webImg/20250520_112708.jpg') }}" class="tabs-img-w" />
      </div>
        
    </div>

    <!-- Events Tab -->
    <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
      <p class="internet-para">
        <ul class="roundz-red">
            <li class="fntz-red-100">
              Join <strong>Nova Communication</strong> passionate team of professionals who have transformed Islamabad,Lahore, Risalpur, and Nowshera into some of the world’s top optical fiber connected cities.</li>
            <li>
              Since 2004, <strong>Nova Communication</strong> has been at the forefront of innovation in fiber optics.
            </li>
            <li>With a strong culture of continuous learning and development, excellent rewards, and a no-nonsense work environment, <strong>Nova Communication</strong> offers the best career path for those who dare to make a difference.</li>
        </ul>
      </p>
      <div class="image-grid">
        <img src="{{ asset('assets/images/webImg/events-1.jpeg') }}" class="tabs-img-e" />
        <img src="{{ asset('assets/images/webImg/events-2.jpeg') }}" class="tabs-img-e" />
        <img src="{{ asset('assets/images/webImg/events-3.png') }}" class="tabs-img-e" />
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  $(document).ready(function () {
    
    setTimeout(function () {
      $('#tabMenu a.nav-link.active').tab('show');
    }, 100);
  });
</script>

@stop
@section('js')
@endsection

