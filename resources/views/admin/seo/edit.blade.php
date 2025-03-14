@extends('admin.layouts.main')
@section('content')

<div class="content">
    @include('admin.layouts.admin_nav')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Edit SEO Data</h6>
                    <form action="{{ route('seo.update', $seo->id) }}" method="post" class="repeater" enctype="multipart/form-data">
                        @csrf
                        <div class="row margin-wrap">
                            <div class="col-sm-6 mb-3">
                                <label for="url" class="form-label">Page URL</label>
                                <input type="text" class="form-control" name="url" value="{{ old('url', $seo->url) }}" required>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title', $seo->meta_title) }}" required>
                            </div>
                        </div>
                        <div class="row margin-wrap">
                            <div class="col-sm-12 mb-3">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea class="form-control" name="meta_description" rows="2" required>{{ old('meta_description', $seo->meta_description) }}</textarea>
                            </div>
                        </div>
                        <div class="row margin-wrap">
                            <div class="col-sm-12 mb-3">
                                <label for="keywords" class="form-label">Keywords</label>
                                <input type="text" class="form-control" name="keywords" value="{{ old('keywords', $seo->keywords) }}" placeholder="Comma-separated keywords" required>
                            </div>
                        </div>
                        <div class="row margin-wrap">
                            <div class="col-sm-12 mb-3">
                                <label for="schema_s" class="form-label">Schema</label>
                                <textarea class="form-control" name="schema_s" rows="4" required>{{ old('schema_s', $seo->schema_s) }}</textarea>
                            </div>
                        </div>
                        <div class="row margin-wrap">
                            <div class="col-sm-6 mt-4">
                                <button type="submit" class="btn btn-default btn-outline-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
