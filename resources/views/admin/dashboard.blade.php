@extends('admin.layouts.main')
@section('content')
<div class="content">
    <!-- Navbar Start -->
    @include('admin.layouts.admin_nav')

    <!-- Navbar End -->

    
    <!-- Sale & Revenue Start -->
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
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Registered Users</p>
                        <h6 class="mb-0">5</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Users Who Purchased Courses</p>
                        <h6 class="mb-0">6</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Currently Active Users</p>
                        <h6 class="mb-0">7</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Certified Users</p>
                        <h6 class="mb-0">10</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Sale & Revenue End -->

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Recent Users</h6>
                <a href="{{route('user.index')}}">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Registration Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($users)
                            @foreach($users as $user)
                            <tr>
                                <td><input class="form-check-input" name="user[]" value="{{$user['id']}}" type="checkbox"></td>
                                <td>{{ date('D, d M Y', strtotime($user['created_at'])) }} - {{ date('h:i a', strtotime($user['created_at'])) }}</td>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user['phone'] ?? 'N/A' }}</td>
                                <td>{{ ucfirst($user['role']) }}</td>
                                <td>{{ ucfirst($user['status']) }}</td>
                                <td><a class="btn btn-sm btn-primary" href="{{route('user.edit',$user->id)}}">Detail</a></td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="h-100 bg-secondary rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">To Do List</h6>
                        <a href="">Show All</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() 
    {
        var selected_users = [];

        $('input[name="lead[]"]').on('change', function() {
            if($(this).is(':checked')) {
                selected_users.push($(this).val());
            }
            else {
                selected_users.splice($.inArray($(this).val(), selected_users),1);
            }
            $('#lead_list').val(JSON.stringify(selected_users));
        });
    });
   
</script>
@endsection