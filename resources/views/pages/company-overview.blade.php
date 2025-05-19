@extends('layout.main')
@section('content')
  
<style>
    .nav-pills .nav-link {
      background-color: #f1f1ff;
      color: #4b4bff;
      border-radius: 30px;
      margin: 0 8px;
      font-weight: 500;
    }

    .nav-pills .nav-link.active {
      background-color: #4b4bff;
      color: white;
    }

    .tab-content {
      margin-top: 30px;
    }

    .description-text {
      font-size: 1.1rem;
      color: #555;
      line-height: 1.8;
      text-align: justify;
      margin-bottom: 30px;
    }

    .img-wrapper img {
      width: 100%;
      height: auto;
      border-radius: 20px;
    }
</style>


<ul class="nav nav-pills justify-content-center" id="tabMenu">
  <li class="nav-item">
    <a class="nav-link active" id="trainings-tab" data-toggle="pill" href="#trainings" role="tab">Trainings</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="presentation-tab" data-toggle="pill" href="#presentation" role="tab">Presentation session</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="events-tab" data-toggle="pill" href="#events" role="tab">Events</a>
  </li>
</ul>


  <!-- Tab Content -->
  <div class="tab-content container" id="tabContent">

    <!-- Trainings -->
    <div class="tab-pane fade show active" id="trainings" role="tabpanel">
      <p class="description-text">Trainings content goes here...</p>
    </div>

    <!-- Presentation Session -->
    <div class="tab-pane fade" id="presentation" role="tabpanel">
      <p class="description-text">
        Nayatel, a renowned telecommunications company, recently conducted an enriching and inspiring presentation
        session led by its esteemed executives. The session aimed to groom and enhance the skills of employees,
        providing them with valuable insights and knowledge to excel in their careers. With a focus on personal and
        professional growth, the executives delivered an engaging and thought-provoking presentation, equipping the
        team with practical tools, strategies, and best practices to thrive in their respective roles. Nayatel's
        commitment to employee development and empowerment shines through such initiatives, fostering a dynamic and
        vibrant work environment that encourages continuous learning and advancement.
      </p>

      <div class="row">
        <div class="col-md-6 img-wrapper">
          <img src="https://via.placeholder.com/500x300.png?text=Presentation+1" alt="Presentation 1">
        </div>
        <div class="col-md-6 img-wrapper">
          <img src="https://via.placeholder.com/500x300.png?text=Presentation+2" alt="Presentation 2">
        </div>
      </div>
    </div>

    <!-- Events -->
    <div class="tab-pane fade" id="events" role="tabpanel">
      <p class="description-text">Events content goes here...</p>
    </div>

  </div>

  <!-- Bootstrap 4 JS + jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


  @stop
  @section('js')
     
  
  @endsection
  