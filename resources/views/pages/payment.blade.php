@extends('layout.main')
@section('content')

    <section class="inner-header-payment">
    </section>

    <section class="contact-payment">
        <div class="outer-bg-pay-500">
            <div class="container">
                <div class="sec-pay 500">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <div class="icons-pay-box">
                                    <img src="{{asset('assets/images/webImg/Kuickpay.png')}}" />
                                </div>
                                <div class="pay-box-new">
                                    {{-- <h1>KuickPay</h1> --}}
                                    <p>Your wallet just went digital</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="icons-pay-box">
                                    <img src="{{asset('assets/images/webImg/easypaisa.png')}}" />
                                </div>
                                <div class="pay-box-new">
                                    {{-- <h1>EasyPaisa</h1> --}}
                                    <p>Secure. Swift. Seamless. Pay with confidence</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="icons-pay-box">
                                    <img src="{{asset('assets/images/webImg/nova-pay.png')}}" />
                                </div>
                                <div class="pay-box-new">
                                    {{-- <h1>CRM</h1> --}}
                                    <p>Smarter relationships start here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
section.contact-payment{
    border-top-right-radius: 16px;
    border-top-left-radius: 16px;
    position: relative;
    top: -13px;
    padding: 80px 30px;
    background: linear-gradient(45deg, #f8f8f8, rgb(193 191 192));
    box-shadow: rgb(183 132 169) 0px -1px 13px 0px;
    margin-bottom: 20px;
}
.pay-box-new h1 {
    font-size: 31px;
    font-weight: 800;
    text-align: center;
    margin: 19px 0px 6px;
    color: #282828;
}
.pay-box-new p {
    font-size: 22px;
    text-align: center;
    color: black;
    line-height: 25px;
}
.icons-pay-box img {
    width: 75%;
    margin-bottom: 22px;
    cursor: pointer;
}
.icons-pay-box {
    width: 100%;
    text-align: center;
    margin: 0px;
}


    </style>
    @stop
@section('js')

@endsection