@extends('layout.main')
@section('content')

    <section class="inner-header-career11">
        <div class="complete-bnr-txt">
            <h1 class="ai-head">Find the best<br /><span class="red-ai">Job Offer</span></h1>  
        </div>
    </section>

    {{-- <section class="contact-content sec-padding">
        <div class="outer-bg-gray-100">
            <div class="container">
                <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                    <h2 class="carres-head">Career</h2>
                </div>
                <div class="sec-content 500">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cntnt-cntrl">
                                <div class="boxing-outer">
                                    <div class="contact-info">
                                       <p class="career-100">At Nova Communication, we harness advanced GPON (Gigabit Passive Optical Network) technology—the same industry-standard used by some of the 
                                            world’s leading internet, TV, and telephone service providers. Our state-of-the-art fiber-optic infrastructure delivers unparalleled speed, reliability, and 
                                            performance, ensuring that every digital experience—whether streaming, gaming, or communicating—is seamless and superior. Experience the difference 
                                            that expert GPON technology can make.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="hiring-process">
        <h2><strong>Hiring</strong> <span class="gradient-text">process</span></h2>
        <div class="steps">
          <div class="step">
            <img src="{{asset('assets/images/webImg/01s.png')}}" alt="CV Icon">
            <p>CV Shortlisting</p>
          </div>
          <div class="step">
            <img src="{{asset('assets/images/webImg/02s.png')}}" alt="Group Icon">
            <p>Group<br>presentation session</p>
          </div>
          <div class="step">
            <img src="{{asset('assets/images/webImg/03s.png')}}" alt="Test Icon">
            <p>Written test<br>based on technical/IQ questions</p>
          </div>
          <div class="step">
            <img src="{{asset('assets/images/webImg/04s.png')}}" alt="Personality Icon">
            <p>Personality test</p>
          </div>
          <div class="step">
            <img src="{{asset('assets/images/webImg/05s.png')}}" alt="Interview Icon">
            <p>Final interview</p>
          </div>
          <div class="step">
            <img src="{{asset('assets/images/webImg/06s.png')}}" alt="Hiring Icon">
            <p>Hiring</p>
          </div>
        </div>
      </section>


      <section class="vacant-section">
        <h2><strong>Vacant</strong> <span class="gradient-text">positions</span></h2>
        <p class="description">
          Join Nayatel's passionate team of 2000 who has transformed Islamabad, Rawalpindi, Faisalabad and Peshawar
          into world’s top optical fiber connected cities. With continuous learning and development, excellent rewards and
          no nonsense culture, Nayatel offers best career for those who dare.
        </p>
    
        <div class="cards-container">
          <!-- Card 1 -->
          <div class="job-card">
            <div class="icon-circle">📊</div>
            <h4>Assistant Account Manager( Sales )</h4>
            <p class="deadline">Deadline: 2025-06-30</p>
            <div class="tags">
              <span class="tag selected">Full Time/Permanent</span>
              <span class="tag">Day Shift</span>
            </div>
            <hr>
            <div class="card-footer">
              <span>📍 Gujranwala</span>
              <span>👥 2 positions</span>
              <button>View details</button>
            </div>
          </div>
    
          <!-- Card 2 -->
          <div class="job-card">
            <div class="icon-circle">📊</div>
            <h4>Assistant Account Manager( Sales )</h4>
            <p class="deadline">Deadline: 2025-08-31</p>
            <div class="tags">
              <span class="tag selected">Full Time/Permanent</span>
              <span class="tag">Day Shift</span>
            </div>
            <hr>
            <div class="card-footer">
              <span>📍 Sialkot</span>
              <span>👥 3 positions</span>
              <button>View details</button>
            </div>
          </div>
    
          <!-- Card 3 -->
          <div class="job-card">
            <div class="icon-circle">📊</div>
            <h4>Assistant Account Manager( Sales )</h4>
            <p class="deadline">Deadline: 2025-08-31</p>
            <div class="tags">
              <span class="tag selected">Full Time/Permanent</span>
              <span class="tag">Day Shift</span>
            </div>
            <hr>
            <div class="card-footer">
              <span>📍 Faisalabad</span>
              <span>👥 6 positions</span>
              <button>View details</button>
            </div>
          </div>
        </div>
      </section>


<style>
.job-card:hover {
    box-shadow: 0 5px 15px #00000059;
    transform: scale(1.01);
}
.vacant-section h2 {
    font-size: 36px;
    margin-bottom: 17px;
    text-align: center;
    color: black;
}

.gradient-text {
  background: linear-gradient(90deg, #4e5cf3, #f79d00);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
section {
    min-height: auto !important;
}
.description {
    font-size: 19px;
    max-width: 800px;
    margin: 0 auto 40px;
    color: #212121;
    line-height: 29px;
    text-align: center;
}

.cards-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 25px;
  margin-bottom: 40px;
}

.job-card {
    background: #fff;
    border: 1px solid #c8c6c6;
    border-radius: 16px;
    padding: 20px;
    width: 350px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    text-align: left;
}

.icon-circle {
  background-color: #c2f1e8;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  font-size: 24px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 10px;
}

.job-card h4 {
    font-size: 18px;
    font-weight: 600;
    color: black;
    font-family: system-ui;
}

.deadline {
    font-size: 14px;
    color: #393838;
    margin: 5px 0 10px;
}

.tags {
  display: flex;
  gap: 10px;
  margin-bottom: 10px;
}

.tag {
    padding: 4px 6px;
    border-radius: 6px;
    font-size: 14px;
    background-color: #eee;
    color: #444;
}

.tag.selected {
    border: 1px solid #4e5cf3;
    background-color: transparent;
}

hr {
    border-top: 1px dashed #706e6e;
    margin: 10px 0;
}

.card-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 13px;
}

.card-footer button {
  background-color: #4e5cf3;
  color: white;
  border: none;
  padding: 6px 12px;
  border-radius: 6px;
  font-size: 13px;
  cursor: pointer;
}



/*  */
.hiring-process h2 {
    font-size: 40px;
    margin-bottom: 20px;
    text-align: center;
    color: black;
    text-transform: capitalize;
}
.gradient-text {
    background: linear-gradient(90deg, #da0000, #0f0f0f);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.steps {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 30px;
}

.step {
  width: 150px;
  text-align: center;
}

.step img {
    width: 89px;
    margin: 10px 0;
}
.step p {
    margin-top: 5px;
    font-size: 15px;
    color: #242323;
    font-weight: 500;
}




/*  */
.complete-bnr-txt {
    margin: 92px 57px;
}
.complete-bnr-txt h1 {
    font-size: 67px;
    margin: 0px;
    line-height: 67px;
    text-transform: capitalize;
    color: #043f71;
}
span.red-ai {
    color: #da0000;
    font-size: 65px;
    font-weight: 800;
}
    </style>
    @stop
@section('js')
   

@endsection