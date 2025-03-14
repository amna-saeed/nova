@extends('admin.layouts.main')
@section('content')

<div class="content">
    @include('admin.layouts.admin_nav')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Edit package</h6>
                    <form action="{{ route('blogs.update', $blogs->id) }}" method="post" class="repeater" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $blogs->id }}">
                        
                        <div class="row margin-wrap">
                            <div class="col-sm-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control"  name="name" value="{{ $blogs->name }}">
                            </div>
                            <div class="col-sm-4">
                                <label for="price" class="form-label">Stars</label>
                                <input type="number" max="5" class="form-control"  name="stars" value="{{ $blogs->stars }}">
                            </div>
                        </div>
                        <div class="row margin-wrap">
                            <div class="col-sm-8">
                                <label for="comment" class="form-label">Comment</label>
                                <textarea type="text" class="form-control"  name="comment">{{ $blogs->comment }}</textarea>
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

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/datejs/1.0/date.min.js"></script>

<script>
    $(document).ready(function() {
        $('.summernote').summernote(
        {
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline']],
                ['fontsize', ['fontsize', 'fontsizeunit', 'fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'style']],
                ['Insert', ['picture', 'link', 'video', 'table', 'hr']],
                ['height', ['height']],
                ['Misc', ['fullscreen', 'codeview', 'undo', 'redo', 'help']]
            ],
            fontsize: true,
            placeholder: 'Page content',
            addDefaultFonts: false,
            height: 300,
            fontNames: [
                'Arial', 'Arial Black',
                'Courier New',
                'Merriweather',
                'Comic Sans MS',
                'sans-serif',
                'Helvetica',
                'Trajan',
                'Garamond Pro',
                'Futura',
                'Bodoni',
                'Verdana',
                'Tahoma',
                'Trebuchet MS',
                'Times New Roman',
                'Georgia',
                'Garamond',
                'Courier New',
                'Brush Script MT',
            ],
            lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0', '3.0'],
            styleTags: [
                'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
            ],
        });
    });
</script>
@endsection
