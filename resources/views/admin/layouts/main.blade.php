<!doctype html>
<html lang="en">
@include('admin.layouts.head')

    
<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->
@include('admin.layouts.header')
    
@yield('content')

@include('admin.layouts.footer')

@include('admin.layouts.js')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> 

@yield('js')

</body>

</html>
