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
                                    <a href="https://customers.nova.net.pk/novatel/billing/customerPortal/DashboardController/kuickPayment/novateluser" target="_blank">
                                        <img src="{{asset('assets/images/webImg/Kuickpay.png')}}" />
                                    </a>
                                </div>
                                <div class="clicking-box">
                                    <a href="https://customers.nova.net.pk/novatel/billing/customerPortal/DashboardController/kuickPayment/novateluser" target="_blank"
                                    class="blink-clicking">Pay Now</a>
                                </div>
                               <div class="pay-box-new">
                                <p>Instruction</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="icons-pay-box">
                                    <a href="https://easypay.easypaisa.com.pk/easypay-merchant/faces/pg/site/Login.jsf" target="_blank">
                                        <img src="{{asset('assets/images/webImg/easypaisa.png')}}" />
                                    </a>
                                </div>
                                <div class="clicking-box">
                                    <a href="https://easypay.easypaisa.com.pk/easypay-merchant/faces/pg/site/Login.jsf" target="_blank"
                                    class="blink-clicking">Pay Now</a>
                                </div>
                                <div class="pay-box-new">
                                    <p>Instruction</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="icons-pay-box">
                                    <a href="https://customers.nova.net.pk" target="_blank">
                                        <img src="{{asset('assets/images/webImg/nova-pay.png')}}" />
                                    </a>
                                </div>
                                <div class="clicking-box">
                                    <a href="https://customers.nova.net.pk" target="_blank"
                                        class="blink-clicking">Pay Now</a>
                                </div>
                                <div class="pay-box-new">
                                    <p>Instruction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
.clicking-box {
  text-align: center;
}

.blink-clicking {
    font-size: 14px;
    font-weight: 400;
    color: #fff;
    background: linear-gradient(45deg, #8d5dff, #da0000);
    animation: blinkEffect 1s infinite;
    border-radius: 6px;
    padding: 7px 11px;
}
a.blink-clicking:hover{
    color: #fff;
}
@keyframes blinkEffect {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.3;
  }
}
.pay-box-new {
    margin-top: 22px;
}
h1.red {
    color: #da0000;
    font-size: 54px;
    line-height: 67px;
} 
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

@media (min-width: 320px) and (max-width: 525px) {
    section.contact-payment{
        padding: 40px 19px 11px;
    }
    .icons-pay-box img {
        width: 46%;
        margin-bottom: 15px;
        cursor: pointer;
    }
    .pay-box-new p
    {
        font-size: 16px;
        text-align: center;
        color: black;
        line-height: 12px;
        text-decoration: underline;
        font-weight: 600;
        margin-bottom: 25px;
    }
    .footer-widget.latest-post {
        display: none;
    }
}
</style>
@stop
@section('js')

@endsection