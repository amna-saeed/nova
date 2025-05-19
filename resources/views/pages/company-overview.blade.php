@extends('layout.main')

@section('content')

<style>
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
    padding: 10px 20px;
    font-weight: 500;
  }
  .nav-pills .nav-link.active {
    background-color: #4c63ff;
    color: white;
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
      <p class="description-text">
        This is the default content for Trainings. You can describe employee training sessions, workshops, or skill development activities here.
      </p>
      <div class="row">
        <div class="col-md-6">
          <img src="/images/training1.jpg" alt="Training 1" class="tab-image">
        </div>
        <div class="col-md-6">
          <img src="/images/training2.jpg" alt="Training 2" class="tab-image">
        </div>
      </div>
    </div>

    <!-- Presentation Tab -->
    <div class="tab-pane fade" id="presentation" role="tabpanel" aria-labelledby="presentation-tab">
      <p class="description-text">
        Nayatel, a renowned telecommunications company, recently conducted an enriching and inspiring presentation session led by its esteemed executives...
      </p>
      <div class="row">
        <div class="col-md-6">
          <img src="/images/presentation1.jpg" alt="Presentation 1" class="tab-image">
        </div>
        <div class="col-md-6">
          <img src="/images/presentation2.jpg" alt="Presentation 2" class="tab-image">
        </div>
      </div>
    </div>

    <!-- Events Tab -->
    <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
      <p class="description-text">
        Join Nayatel's passionate team of 2000 who has transformed cities into world-class fiber-connected zones. Our events celebrate collaboration, innovation, and performance.
      </p>
      <div class="row">
        <div class="col-md-6">
          <img src="/images/event1.jpg" alt="Event 1" class="tab-image">
        </div>
        <div class="col-md-6">
          <img src="/images/event2.jpg" alt="Event 2" class="tab-image">
        </div>
      </div>
    </div>

  </div>
</div>

@endsection

@section('js')
<!-- jQuery and Bootstrap JS (ensure correct order) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
