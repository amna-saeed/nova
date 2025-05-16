<!DOCTYPE html>
<html lang="en">

    @include('layout.head')
    
    <body>
        <div class="se-pre-con"></div>
        @include('layout.header')
        @yield('content')
        @include('layout.footer')
        <!--Scroll to top-->
        <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>
        @include('layout.js')
    </body>
    <!-- Mirrored from html.spidertrixcons.com/pixxles/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 11:14:40 GMT -->
</html>


