@extends('layout.main')
@section('content')

    <section class="inner-header-career11">
        <div class="complete-bnr-txt">
            <h1 class="ai-head">Find the best<br /><span class="red-ai">Job Offer</span></h1>  
        </div>
    </section>

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
        Join Nova's passionate team of 2000 who has transformed Islamabad, Rawalpindi, Faisalabad and Peshawar
        into world’s top optical fiber connected cities. With continuous learning and development, excellent rewards and
        no nonsense culture, Nova offers best career for those who dare.
      </p>
  
      <div class="cards-container">
        <!-- Card 1 -->
        <div class="job-card">
          <div class="icon-circle">📊</div>
          <h4>FTTH/GPON (Technician)</h4>
          <p class="deadline">Deadline: 2025-06-30</p>
          <div class="tags">
            <span class="tag selected">Full Time/Permanent</span>
            <span class="tag">Day Shift</span>
          </div>
          <hr>
          <div class="card-footer">
            <span>📍 Islamabad</span>
            <span>👥 2 positions</span>
            <button>View details</button>
          </div>
        </div>
  
        <!-- Card 2 -->
        <div class="job-card">
          <div class="icon-circle">📊</div>
          <h4>Marketing & Sales Manager</h4>
          <p class="deadline">Deadline: 2025-08-31</p>
          <div class="tags">
            <span class="tag selected">Full Time/Permanent</span>
            <span class="tag">Day Shift</span>
          </div>
          <hr>
          <div class="card-footer">
            <span>📍 Lahore</span>
            <span>👥 2 positions</span>
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
      
    <section class="growth-section">
      <div class="images-grid">
        <div class="image-box purple">
          <img src="{{asset('assets/images/webImg/services-img.png')}}" class="box-img-200" alt="" />
          <div class="label">Events ↗</div>
        </div>
        <div class="image-box">
          <img src="{{asset('assets/images/webImg/services-img.png')}}" />
          <div class="label">Trainings ↗</div>
        </div>
        <div class="image-box">
          <img src="{{asset('assets/images/webImg/services-img.png')}}"  />
          <div class="label">Presentation Sessions ↗</div>
        </div>
        <div class="square purple-bg"></div>
        <div class="square orange-bg"></div>
      </div>
      <div class="content">
        <h2><span class="gradient-text">Growth</span> with <strong>Nova</strong></h2>
        <p>
          Are you in search of internships and early career opportunities? Nova offers an exciting and vibrant environment where you can develop your skills, grow professionally, and remain true to yourself. We appreciate the value of your individual experiences, diverse skill sets, and innovative viewpoints.
        </p>
      </div>
    </section>
    <div class="container">
      <section class="why-select">
        <h2><strong>Why Choose</strong> <span class="gradient-text">Nova</span></h2>
        <p>Nova provides you the platform to work and excel in a rewarding environment so that you become a refined professional in your chosen field of interest. As one of the top employers of the country, we enable you to dream big and then achieve it in an environment full of ideas, growth and challenges.</p>
      </section>
      <div class="box-reading">
        <a  href="{{ route('read-more') }}">Read More</a>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="28" viewBox="0 0 27 15" fill="none" style="cursor: pointer;">
          <g clip-path="url(#clip0_87_254)"><path d="M13.2392 17.1522L13.226 7.76336C13.226 7.55208 13.2988 7.37373 13.4442 7.22829C13.5896 7.08286 13.7678 7.01032 13.9787 7.01067C14.19 7.01067 14.3684 7.08339 14.5138 7.22882C14.6592 7.37425 14.7318 7.55243 14.7314 7.76336L14.7182 17.1522L18.7326 13.1378C18.8822 12.9882 19.0585 12.9134 19.2613 12.9134C19.4641 12.9134 19.64 12.9882 19.789 13.1378C19.9386 13.2875 20.0135 13.4637 20.0135 13.6666C20.0135 13.8694 19.9386 14.0453 19.789 14.1942L14.5069 19.4763C14.3573 19.6259 14.181 19.7008 13.9782 19.7008C13.7754 19.7008 13.5995 19.6259 13.4505 19.4763L8.16848 14.1942C8.01883 14.0446 7.944 13.8683 7.944 13.6655C7.944 13.4627 8.01883 13.2868 8.16848 13.1378C8.31814 12.9882 8.49439 12.9134 8.69722 12.9134C8.90005 12.9134 9.07594 12.9882 9.22489 13.1378L13.2392 17.1522Z" fill="#da0000"></path></g></svg>
         
        </div>
        
      <div class="row">
        <div class="col-lg-4">
          <img src="{{asset('assets/images/webImg/services-img.png')}}" class="box-img-300" alt="" />
        </div>
        <div class="col-lg-4">
          <img src="{{asset('assets/images/webImg/services-img.png')}}" class="box-img-300" alt="" />
        </div>
        <div class="col-lg-4">
          <img src="{{asset('assets/images/webImg/services-img.png')}}" class="box-img-300" alt="" />
        </div>
      </div>
    </div>

    <section class="benefits-section">
      <h1>Benefits at <span class="highlight">Nova</span></h1>
      <div class="benefits-grid">
        <div class="benefit-item">
          <img src="{{asset('assets/images/webImg/medical.png')}}" class="box-img-400" alt="" />
          <p>Medical facility</p>
        </div>
        <div class="benefit-item">
          <img src="{{asset('assets/images/webImg/provident.png')}}" class="box-img-400" alt="" />
          <p>Provident fund</p>
        </div>
        <div class="benefit-item">
          <img src="{{asset('assets/images/webImg/bonus.png')}}" class="box-img-400" alt="" />
          <p>Annual bonus</p>
        </div>
        <div class="benefit-item">
          <img src="{{asset('assets/images/webImg/leave encashment.png')}}" class="box-img-400" alt="" />
          <p>Annual & fast track promotions</p>
        </div>
        <div class="benefit-item">
          <img src="{{asset('assets/images/webImg/eobi.png')}}" class="box-img-400" alt="" />
          <p>EOBI</p>
        </div>
        <div class="benefit-item">
          <img src="{{asset('assets/images/webImg/leave encashment.png')}}" class="box-img-400" alt="" />
          <p>Leave encashment</p>
        </div>
      </div>
    </section>
<style>
.benefits-section {
  text-align: center;
}

.benefits-section h1 {
  font-size: 2.5em;
  font-weight: bold;
  color: black;
  margin: 33px 0px 18px;
}
.box-reading {
    text-align: center;
    margin-bottom: 30px;
}
.box-reading a {
    font-size: 19px;
    color: #da0000;
    font-weight: 800;
    font-family: sans-serif;
}
.highlight {
  background: linear-gradient(to right, #da0000, #000);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
h2 {
    font-size: 32px;
    margin-bottom: 20px;
    color: black;
}
.benefits-grid {
  display: grid;
    justify-content: center;
    gap: 14px;
    margin-top: 40px;
    grid-template-columns: repeat(3, 3fr);
    grid-template-columns: repeat(3, 1fr);
    align-items: center;
    width: 100%;
    max-width: 960px;
    margin: 0px auto;
}

.benefit-item {
  display: flex;
    flex-direction: row;
    align-items: center;
    width: 260px;
}

.benefit-item img {
  width: 70px;
  height: 70px;
  margin-bottom: 12px;
}

.benefit-item p {
  font-weight: 700;
    font-size: 18px;
    color: #333;
    text-align: center;
    line-height: 23px;
    font-family: system-ui;
    margin-left: 12px;
}
/*  */
section.why-select {
    text-align: center;
    width: 100%;
}
section.why-select p{
  font-size: 19px;
    max-width: 800px;
    margin: 0 auto 40px;
    color: #212121;
    line-height: 29px;
    text-align: center;
}
.box-img-300 {
    width: 100%;
    border-radius: 12px;
}
/*  */
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
  background: linear-gradient(90deg, #da0000, #000);
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
    background: linear-gradient(90deg, #da0000, #000);
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
  width: 70px;
    margin: 8px 0;
}
.step p {
  margin-top: 5px;
    font-size: 14px;
    color: #212121;
    font-weight: 600;
    line-height: 19px;
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

/*  */


.growth-section {
  display: flex;
  flex-wrap: wrap;
  padding: 40px;
  gap: 40px;
  align-items: center;
  justify-content: center;
}

.images-grid {
  display: grid;
  grid-template-columns: repeat(2, 150px);
  gap: 20px;
  position: relative;
}

.image-box {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.image-box img {
  width: 100%;
  height: auto;
  display: block;
}

.label {
  position: absolute;
  bottom: 10px;
  left: 10px;
  font-weight: bold;
  color: white;
  font-size: 14px;
  text-shadow: 0 0 5px rgba(0,0,0,0.7);
}

.square {
  width: 60px;
  height: 60px;
  border-radius: 16px;
}

.purple-bg {
  background-color: #cfd4fd;
  grid-column: 1;
  grid-row: 1;
}

.orange-bg {
  background-color: #fdb66b;
  grid-column: 2;
  grid-row: 3;
}

.content {
  max-width: 500px;
}
.content p{
  font-size: 19px;
    color: #212121;
    line-height: 29px;
}
h2 {
  font-size: 32px;
  margin-bottom: 20px;
}

.gradient-text {
  background:  linear-gradient(90deg, #da0000, #000);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

p {
  font-size: 16px;
  line-height: 1.6;
  color: #666;
}

    </style>
    @stop
@section('js')
   

@endsection