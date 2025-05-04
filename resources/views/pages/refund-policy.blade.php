@extends('layout.main')
@section('content')

    <section class="inner-header-refund11">
    </section>

    <section class="terms-info">
        <div class="outer">
            <div class="container">
                <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                    <h2 class="carres-head">THE PROFFESSIONAL Communications(TPC) </br >Refund Policy</h2>
                </div>
                <div class="sec-content 500">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cntnt-cntrl">
                                <div class="contact-info">
                                    <p class="career-100">
                                        Customers may be eligible for a partial refund under the following conditions:
                                     </p>
                                     <h2 class="agree-head-bullet"><span class="bullet"></span>Return Of Hardware</h2>
                                     <p class="career-100">
                                        Customers may return hardware under eligible conditions as outlined in our service agreement.
                                        To qualify for a partial refund, the hardware must be returned in good working condition.
                                        All returned items will be assessed by TPC to verify their functionality. <br />
                                        Refunds will be calculated based on the customer's original contribution toward the hardware cost, <br />
                                        after applying depreciation deductions. The refunded amount will exclude any GST <br />
                                        Please note that TPC's assessment of the hardware condition is final, and only items deemed to be in working order will be eligible for a refund.
                                    </p>
                                    <h2 class="agree-head-bullet"><span class="bullet"></span>Cancellation Of An Installment Plan</h2>
                                    <p class="career-100">
                                        Customers may request the cancellation of an active installment plan at any time, subject to the terms and conditions of their agreement with TPC.
                                        <br />In the event of cancellation, customers may be eligible for a partial refund based on the amount paid toward the hardware
                                        <br />Refunds will be calculated after deducting applicable depreciation and will exclude GST.
                                        <br />Any associated hardware must be returned in working condition for the refund to be processed.
                                        The condition of the hardware will be assessed solely by TPC, and refunds will only be issued if the hardware meets our return criteria
                                    </p>
                                    <h2 class="agree-head-bullet"><span class="bullet"></span>Payment Default</h2>
                                    <p class="career-100">
                                        In cases of payment default, TPC reserves the right to terminate the customer's installment plan and reclaim any associated hardware
                                        <br />Customers who have made partial payments toward the hardware may be eligible for a refund, subject to the return of the hardware in good working condition.
                                        Refunds will be calculated based on the customer’s contribution toward the hardware cost, with depreciation deducted and GST excluded
                                        <br />All hardware must be returned to TPC for inspection. Refunds will only be issued if the hardware is deemed to be in working condition, as determined solely by TPC.
                                        <ul class="terms-ul">
                                            <li>The refund amount will be calculated based on the customer’s total contribution toward the hardware cost, with deductions applied for depreciation. All refunds will be exclusive of Goods and Services Tax (GST).</li>
                                           <li>Refunds will only be processed if the returned hardware is verified to be in working condition, as determined solely by TPC following its assessment procedures.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<style>
    
    .agree-head-bullet {
        font-size: 23px;
        color: black;
        margin: 0 0 10px;
        position: relative;
        padding-left: 30px;
        text-align: left;
    }
    .outer {
        margin-top: 30px;
    }
    ul.terms-ul li{
        font-size: 19px;
        color: rgb(54 54 54);
        line-height: 34px   ;
        text-align: justify;
    }
    h2.carres-head {
        margin: 0px !important;
        line-height: 42px;
        font-size: 35px !important;
        text-align: center;
        color: #da0000;
    }
    .agree-head-bullet .bullet {
        position: absolute;
        left: 0;
        top: 10px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: linear-gradient(45deg, #452d2d, #da0000);
        display: inline-block;
    }
    h2.agree-head {
        text-align: left;
        font-size: 23px;
        color: black;
        margin: 0px 0px 2px;
    }
    h2.carres-head {
        margin: 0px !important;
        line-height: 42px;
        font-size: 35px !important;
    }
    .terms-info .contact-info{
        padding: 0px 90px;
    }
    span.bold-terms10 {
        color: #da0000;
        font-weight: 500;
    }
    
    
    
</style> 

@stop
@section('js')
   

@endsection