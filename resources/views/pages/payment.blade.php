@extends('layout.main')
@section('content')

    <section class="inner-header-payment">
        <div class="complete-bnr-txt">
            <h1>Smart & simple</h1><br />
            <h1>online payments</h1>
        </div>
    </section>

    <section class="contact-payment">
        <div class="outer-bg-pay-500">
            <div class="container">
                <div class="sec-pay 500">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-lg-4">
                                <div class="icons-pay-box">
                                    <a href="https://customers.nova.net.pk/novatel/billing/customerPortal/DashboardController/kuickPayment/novateluser" target="_blank">
                                        <img src="{{asset('assets/images/webImg/Kuickpay.png')}}" />
                                    </a>
                                </div>
                                <div class="pay-box-new">
                                    <p>Your wallet just went digital</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="icons-pay-box">
                                    <a href="https://easypay.easypaisa.com.pk/easypay-merchant/faces/pg/site/Login.jsf" target="_blank">
                                        <img src="{{asset('assets/images/webImg/easypaisa.png')}}" />
                                    </a>
                                </div>
                                <div class="pay-box-new">
                                    <p>Secure. Swift. Seamless. Pay with confidence</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="icons-pay-box">
                                    <a href="https://customers.nova.net.pk" target="_blank">
                                        <img src="{{asset('assets/images/webImg/nova-pay.png')}}" />
                                    </a>
                                </div>
                                <div class="pay-box-new">
                                    <p>Smarter relationships start here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="instr-cont">For instruction on how to pay, click here</p>
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
</style>
    @stop
@section('js')

@endsection