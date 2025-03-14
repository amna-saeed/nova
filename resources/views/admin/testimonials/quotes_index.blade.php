@extends('admin.layouts.main')
@section('content')
<style>
.pagination .page-link {
    font-size: 14px;
    padding: 0.5rem 0.75rem;
}

.pagination .page-item.active .page-link {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
}

.pagination .page-item.disabled .page-link {
    color: #6c757d;
}

</style>
@php
use Illuminate\Support\Str;
@endphp
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
                            <h6 class="mb-4">Responsive Table with Search</h6>

                            <!-- Search Form -->
                            <form method="GET" action="{{ route('quotes.index') }}" class="mb-3">
                                <div class="input-group">
                                    <input 
                                        type="text" 
                                        name="search" 
                                        class="form-control" 
                                        placeholder="Search by name or email..." 
                                        value="{{ request()->get('search') }}"
                                    >
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($quotes->count() > 0)
                                            @foreach($quotes as $index => $quote)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ ucfirst($quote->name) }}</td>
                                                    <td>{{ $quote->phone }}</td>
                                                    <td>{{ $quote->email }}</td>
                                                    <td>{{ Str::words($quote->message, 10, '...') }}
                                                    <a href="javascript:void(0);" 
                                                        class="view-message-btn text-primary" 
                                                        data-message="{{ $quote->message }}">
                                                            <i class="bi bi-eye"></i> More
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">No records found.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <!-- View Message Modal -->
                            <div class="modal fade" id="viewMessageModal" tabindex="-1" aria-labelledby="viewMessageModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewMessageModalLabel">Message Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p id="modalMessageContent"></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination -->
                            <div class="d-flex justify-content-center mt-3">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        {{-- Previous Page Link --}}
                                        @if ($quotes->onFirstPage())
                                            <li class="page-item disabled">
                                                <span class="page-link">&laquo; Previous</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $quotes->previousPageUrl() }}" aria-label="Previous">
                                                    &laquo; Previous
                                                </a>
                                            </li>
                                        @endif

                                        {{-- Pagination Links --}}
                                        @foreach ($quotes->getUrlRange(1, $quotes->lastPage()) as $page => $url)
                                            <li class="page-item {{ $quotes->currentPage() == $page ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($quotes->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $quotes->nextPageUrl() }}" aria-label="Next">
                                                    Next &raquo;
                                                </a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <span class="page-link">Next &raquo;</span>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
        </div>
        <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top">
            <i class="bi bi-arrow-up"></i>
        </a>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('.view-message-btn').on('click', function () {
            const message = $(this).data('message');
            $('#modalMessageContent').text(message);
            $('#viewMessageModal').modal('show');
        });
    });
</script>
@endsection