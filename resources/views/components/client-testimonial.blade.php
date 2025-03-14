<!--Start Our Testimonials Area-->
<section class="testimonials wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
    <div class="container">
        <div class="row clearfix">
            <div class="sec-title">
                <span class="double-line"></span> &ensp;
                <h2>Client Reviews</h2>
                &ensp; <span class="double-line"></span>
            </div>
            <!--Slider-->
            <div class="slider clearfix">
                <!--Slide Item-->
                @foreach($testimonials as $testimonial)
                    <div class="slide-item anim-5-all">
                        <div class="avatar"><img src="assets/images/testimonials/1.jpg" alt="" title="" /></div>
                        <div class="content">
                            <span class="curve"></span>
                            <div class="quote-text">
                                {{$testimonial->comment}}
                                <div class="quote-author"><strong class="text-thm">{{$testimonial->name}}</strong></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
