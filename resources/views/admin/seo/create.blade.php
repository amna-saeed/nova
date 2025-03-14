@extends('admin.layouts.main')
@section('content')

<div class="content">
    @include('admin.layouts.admin_nav')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">SEO Data Form</h6>
                    <form action="{{ route('seo.store') }}" method="post" class="repeater" enctype="multipart/form-data">
                        @csrf
                        <div class="row margin-wrap">
                            <div class="col-sm-6 mb-3">
                                <label for="url" class="form-label">Page URL</label>
                                <input type="text" class="form-control" name="url" required>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" required>
                            </div>
                        </div>
                        <div class="row margin-wrap">
                            <div class="col-sm-12 mb-3">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea class="form-control" name="meta_description" rows="2" required></textarea>
                            </div>
                        </div>
                        <div class="row margin-wrap">
                            <div class="col-sm-12 mb-3">
                                <label for="keywords" class="form-label">Keywords</label>
                                <input type="text" class="form-control" name="keywords" placeholder="Comma-separated keywords" required>
                            </div>
                        </div>
                        <div class="row margin-wrap">
                            <div class="col-sm-12 mb-3">
                                <label for="meta_description" class="form-label">Schema</label>
                                <textarea class="form-control" name="schema_s" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="row margin-wrap">
                            <div class="col-sm-6 mt-4">
                                <button type="submit" class="btn btn-default btn-outline-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
