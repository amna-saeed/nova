@extends('layout.main')
@section('content')
    <section class="inner-header-ai">
        <div class="complete-bnr-txt">
            <h1>Nova AI</h1>
        </div>
    </section>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="https://api.whatsapp.com/send/?phone=51111111872&text=Hello&app_absent=0" target="_blank" class="nova-ai-btn">
                    <button>
                        Get Connection
                    </button>
                </a>
            </div>
        </div>
    </div>

<style>
    a.nova-ai-btn {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }
    video.vdeo-pkgz-desk {
        width: 100%;
    }
    a.nova-ai-btn button {
        padding: 12px 25px;
        margin: 37px;
        border-radius: 6px;
        border: 1px solid #da0000;
        background: #da0000;
        color: #ffff;
        font-size: 20px;
        cursor: pointer;
    }
</style>

@stop
@section('js')
   

@endsection
