@extends('layout.main')
@section('content')



<section class="inner-header-payment">
</section>
    <div class="ins-bg-full">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="pay-heading-300">Pay Your Bills Online</h1>
                <div class="box-icon-200">
                    <img src="{{asset('assets/images/webImg/directpay.png')}}" class="icon-pay" />
                </div>
                <p class="box-icon-300">Direct Pay</p>
                <h2>Select Your Bank</h2>
                <form action="{{ route('go.to.bank') }}" method="GET">
                    <select name="bank" required>
                        <option value="">-- Choose Bank --</option>
                        <option value="meezan">Meezan Bank</option>
                        <option value="hbl">HBL</option>
                        <option value="ubl">UBL</option>
                        <option value="mcb">MCB</option>
                    </select>
                    <br><br>
                    <button type="submit">Go to Payment Page</button>
                </form>
            </div>
        </div>
    </div>
</section>
<style>
h1.pay-heading-300 {
    text-align: center;
    font-size: 50px;
    color: #da0000;
}
.box-icon-200 {
    text-align: center;
    width: 77px;
    margin-right: auto;
    margin-left: auto;
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

