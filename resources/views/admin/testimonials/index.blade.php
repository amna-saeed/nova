@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid position-relative d-flex p-0">
        <div class="content">
        @include('admin.layouts.admin_nav')

            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <a type="button" class="btn btn-outline-primary addNew Button" href="{{route('testimonials.create')}}">Add New Test</a>
                            <h6 class="mb-4"></br>Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Stars</th>
                                            <th scope="col">Comment</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($testimonials)>0)
                                        @php $i=1; @endphp
                                            @foreach($testimonials as $testimonial)
                                                <tr>
                                                    <th scope="row">{{$i}}</th>
                                                    <td>{{ucfirst($testimonial->name)}}</td>
                                                    <td>{{$testimonial->stars}}</td>
                                                    <td>{{$testimonial->comment}}</td>
                                                    <td>
                                                        <a type="button" class="btn btn-outline-primary" href="{{route('testimonials.edit',$testimonial->id)}}">Edit</a>
                                                        <a type="button" href="{{route('testimonials.delete',$testimonial->id)}}" class="btn btn-outline-danger"
                                                        onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                                                    </td>
                                                </tr>
                                            @php $i++; @endphp

                                            @endforeach
                                        @else
                                            <tr>
                                                Epmty
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
        </div>
        <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
@endsection
