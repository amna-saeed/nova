@extends('layout.main')
@section('content')

    <section>
        <div class="ended">
            <div class="container">
                <h1>The project timeline has extended significantly, and the frequent changes have made it difficult to continue. Therefore, I’ve decided to step away. Thank you for the opportunity.</h1>
            </div>
        </div>
    </section>

<style>
.ended {
    background: red;
    height: 100vh;
    padding: 0px;
    margin: 0px;
    padding: 113px 7px;
}
.ended h1 {
    color: #ffff;
    font-size: 42px;
    width: 92%;
    text-align: center;
    text-transform: capitalize;
}
</style>

@stop
@section('js')

@endsection
