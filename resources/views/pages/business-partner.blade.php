@extends('layout.main')
@section('content')

<section class="inner-header-business">
</section>

<section  class="partner-serivce">
    <div class="container">
        <p class="com-para">
            <strong>Nova Communication</strong> proudly hosts one of the largest teams of Cisco Certified Experts in Pakistan as a Cisco Gold Partner. As industry leaders in delivering Cisco solutions, we offer a comprehensive range of services tailored to meet your specific needs. Our experts not only provide cutting-edge Cisco technologies but also integrate them seamlessly to ensure optimal performance and value.
        </p>
        <div class="toping">
            <div class="slider">
                <div class="slide-track">
                    
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/anchroage09.png')}}" height="100" width="180" alt="" />
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/Armedforces05.png')}}" height="100" width="160" alt="" />
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/bahriatown10.png')}}" height="100" width="120" alt="" />
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/DHA1.png')}}" height="100" width="150" alt="" />
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/Government13.png')}}" height="100" width="120" alt="" />
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/jazz03.png')}}" height="100" width="140" alt="" />
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/jsbank07.png')}}" height="100" width="170" alt="" />
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/nadra15.png')}}" height="100" width="140" alt="" />
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/navy12.png')}}" height="100" width="160" alt="" />
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/NDU08.png')}}" height="100" width="140" alt="" />
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/paf11.png')}}" height="100" width="150" alt="" />
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/schartred06.png')}}" height="100" width="150" alt="" />
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/images/logos/transworld2.png')}}" height="100" width="150" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
p.com-para {
    font-size: 19px;
    color: #303030;
    text-align: center;
    font-family: sans-serif;
    padding: 0px 54px;
    line-height: 30px;
}
p.com-para {
    padding-top: 35px;
}
.toping {
    margin-top: 65px;
    margin-bottom: 50px;
}
/*  */

 @keyframes scroll {
	 0% {
		 transform: translateX(0);
	}
	 100% {
		 transform: translateX(calc(-250px * 7));
	}
}
 .slider {
    background: white;
    /* box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.15); */
    height: 100px;
    margin: auto;
    overflow: hidden;
    position: relative;
    width: 1139px;
 }
 .slider::before, .slider::after {
    content: "";
    height: 100px;
    position: absolute;
    width: 200px;
    z-index: 2;
}
 .slider::after {
    right: 0;
    top: 0;
    transform: rotateZ(180deg);
}
 .slider::before {
    left: 0;
    top: 0;
}
.slider .slide-track {
    animation: scroll 20s linear infinite;
    display: flex;
    width: calc(250px * 14);
}
.slider .slide {
    height: 100px;
    width: 270px;
}
 
</style>

@stop
@section('js')
@endsection
