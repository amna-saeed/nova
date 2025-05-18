@extends('layout.main')
@section('content')
    <section class="inner-header-ai">
        <div class="complete-bnr-txt">
            <h1 class="ai-head">Delivering superior services </h1>  
            <p class="text-ai">Empowering Businesses with Intelligent ICT Services</p>
            <div class="box-ai">
                <a href="https://api.whatsapp.com/send/?phone=51111111872&text=Hello&app_absent=0" target="_blank" class="nova-ai-btn">
                    <button class="get-start-100">Get Started</button>
                </a>
                <a href="{{route('faqs')}}" target="_blank" class="get-start-200">
                    <button class="get-start-200">FAQ</button></a>
            </div>
        </div>
    </section>
 

<style>
p.text-ai {
    color: #090808;
    font-size: 21px;
    margin: 7px 0px 0px;
}
.complete-bnr-txt h1 {
    font-size: 36px;
    margin: 0px;
    line-height: 55px;
    text-transform: capitalize;
    color: #ffff;
}
span.red-ai {
    font-size: 56px;
    color: #da0000;
    font-weight: 800;
}
.complete-bnr-txt {
    margin: 77px 57px;
}
   
a.nova-ai-btn button {
    line-height: 14px;
    padding: 11px 25px;
    margin: 39px 0px;
    border-radius: 42px;
    border: 1px solid #da0000;
    background: #da0000;
    color: #f8f8f8;
    font-size: 17px;
    cursor: pointer;
    font-weight: 600;
    height: 46px;
    font-family: system-ui;
}
button.get-start-200{
    line-height: 14px;
    padding: 12px 51px;
    margin: 39px 5px;
    border-radius: 42px;
    border: 1px solid #da0000;
    background: #da0000;
    color: #f8f8f8;
    font-size: 17px;
    cursor: pointer;
    font-weight: 600;
    height: 44px;
}
  
</style>

@stop
@section('js')
   

@endsection
