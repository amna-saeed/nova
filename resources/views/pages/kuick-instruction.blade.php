@extends('layout.main')
@section('content')
    <div class="container">
        <div class="ins-bg-full">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="pay-heading-300">Pay Your Bills Online Through EasyPaisa</h1>
                  
                    <div class="box-easypasia">
                        <img src="{{asset('assets/images/webImg/step1.png')}}" class="easy-paisa-1" />
                        <img src="{{asset('assets/images/webImg/step2.png')}}" class="easy-paisa-1" />
                        <img src="{{asset('assets/images/webImg/step3.png')}}" class="easy-paisa-1" />
                        <img src="{{asset('assets/images/webImg/step4.png')}}" class="easy-paisa-1" />
                        <img src="{{asset('assets/images/webImg/step5.png')}}" class="easy-paisa-1" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
body{
    padding-right: 0px !important;
}
h1.pay-heading-300 {
    text-align: center;
    font-size: 23px;
    color: #090909;
}
.box-easypasia {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); 
  gap: 15px; 
  padding: 10px;
}

.easy-paisa-1 {
  width: 100%; 
  height: auto;
  object-fit: contain; 
}
.box-icon-300{
    text-align: center;
    font-size: 25px;
    color: #da0000;
    font-weight: 600;
}

</style>



@stop
@section('js')
@endsection

