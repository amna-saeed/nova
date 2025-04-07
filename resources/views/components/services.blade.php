<div class="bg-services-light">
    <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
        <span class="double-line"></span> &ensp;
        <h2>Our Services</h2>
        &ensp; <span class="double-line"></span>
    </div>
    <div class="container mt-4">
        <div class="services-slider-wrapper">
            <!-- Sliders for Services -->
            <div id="services-slider" class="services-slider">
               
                <div class="services-slide-container">
                    <div class="services-slider-items">
                        <div class="slide-content">
                            <img src="{{asset('assets/images/webImg/analogue.png')}}" alt="Slide 1" class="servicesz-slde-img">
                            <div class="slide-text">
                                <div class="uk-srvce-txt">
                                    <h4>Voice & Telephony Services</h4>
                                    <div class="srvce-box-200">
                                        <p>Crystal-Clear Voice</p>
                                        <p>Competitive Calling Plans</p>
                                        <p>Customizable Residential & Business Plans</p>
                                        <p>Customizable Residential & Business Plans</p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="services-slider-items">
                        <div class="slide-content">
                            <img src="{{asset('assets/images/webImg/service-HD.png')}}" alt="Slide 1" class="servicesz-slde-img">
                            <div class="slide-text">
                                <div class="uk-srvce-txt">
                                    <h4>Voice & Telephony Services</h4>
                                    <div class="srvce-box-200">
                                        <p>Crystal-Clear Voice</p>
                                        <p>Competitive Calling Plans</p>
                                        <p>Customizable Residential & Business Plans</p>
                                        <p>Customizable Residential & Business Plans</p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="services-slider-nav">
            <button id="services-prevBtn" class="btn btn-outline-primary">
                <i class="fa fa-arrow-left"></i>
            </button>
            <button id="services-nextBtn" class="btn btn-outline-primary">
                <i class="fa fa-arrow-right"></i>
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
     const slideContainer = document.querySelector(".services-slide-container");
     const slides = Array.from(document.querySelectorAll(".services-slider-items"));
     const prevBtn = document.getElementById("services-prevBtn");
     const nextBtn = document.getElementById("services-nextBtn");
 
     const slidesToShow = 1; // Show 1 slide at a time
     let currentIndex = slidesToShow;
     let totalSlides = slides.length;
     let autoplayInterval;
 
     // Clone first and last slides for infinite effect
     slides.slice(0, slidesToShow).forEach(slide => {
         slideContainer.appendChild(slide.cloneNode(true));
     });
 
     slides.slice(-slidesToShow).forEach(slide => {
         slideContainer.prepend(slide.cloneNode(true));
     });
 
     // Update slide references after cloning
     const allSlides = document.querySelectorAll(".services-slider-items");
     const slideWidth = allSlides[0].offsetWidth;
     slideContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
 
     function updateSliderPosition() {
         slideContainer.style.transition = "transform 0.5s ease-in-out";
         slideContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
 
         setTimeout(() => {
             if (currentIndex >= totalSlides) {
                 slideContainer.style.transition = "none";
                 currentIndex = slidesToShow;
                 slideContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
             }
             if (currentIndex <= 0) {
                 slideContainer.style.transition = "none";
                 currentIndex = totalSlides;
                 slideContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
             }
         }, 500);
     }
 
     function nextSlide() {
         currentIndex++;
         updateSliderPosition();
     }
 
     function prevSlide() {
         currentIndex--;
         updateSliderPosition();
     }
 
     function startAutoplay() {
        autoplayInterval = setInterval(nextSlide, 3000); 
     }
 
     function stopAutoplay() {
         clearInterval(autoplayInterval);
     }
 
     startAutoplay();
 
     nextBtn.addEventListener("click", function () {
         nextSlide();
         stopAutoplay(); 
         startAutoplay();
     });
 
     prevBtn.addEventListener("click", function () {
         prevSlide();
         stopAutoplay(); 
         startAutoplay();
     });
 
     slideContainer.addEventListener("mouseenter", stopAutoplay);
     slideContainer.addEventListener("mouseleave", startAutoplay);
 });
 </script>
 


<style>
/* General Styles */
.bg-services-light {
    margin:18px 0px 30px;
}

/* Slider Navigation */
.services-slider-nav {
    position: absolute;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
    pointer-events: none;
    bottom: -723px;
}

 #services-prevBtn, #services-nextBtn {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    pointer-events: all;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.7);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: background 0.3s ease-in-out; */
}

#services-prevBtn:hover, #services-nextBtn:hover {
    background: rgb(133 10 10);
}
#services-prevBtn {
    left: 12px;
}
#services-nextBtn {
    right:200px;
}
.uk-srvce-txt h4 {
    color: #020626;
    font-size: 22px;
    font-weight: 700;
    font-family: poppins;
    margin-bottom: 5px;
}
#services-prevBtn i, #services-nextBtn i {
    font-size: 24px;
    color: #1559a8;
}

/* Slider Styles */
.services-slider {
    position: relative;
    width: 100%;
    max-width: 1170px;
    margin: auto;
    overflow: hidden;
}

/* .services-slider-wrapper {
    max-width: 1170px;
    margin: 0 auto; 
    padding: 0 15px; 
} */

.services-slide-container {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

/* Slide Layout */
.services-slider-items {
    flex: 0 0 100%;
    box-sizing: border-box;
    padding: 6px 85px;
}

/* Slide Content */
.slide-content {
    display: flex;
    align-items: center;
    gap: 0px;
}

/* Reverse Layout for Alternating Slides */
.reverse {
    flex-direction: row-reverse;
}

/* Image Styling */
.slide-content img {
    width: 496px;
    height: auto;
    border-radius: 10px;
}

/* Text Styling */
.slide-text {
    max-width: 500px;
    margin-left: 27px;
}
.slide-text h2 {
    font-size: 24px;
    color: #333;
}
.slide-text p {
    font-size: 16px;
    color: #666;
}
</style>