<div class="row">
    <div class="col-lg-12 p-0">
        <div class="bg-services-light">
            <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                <h2>Our Services</h2>
            </div>
            <div class="container mt-4">
                <div class="services-slider-wrapper">
                    <!-- Sliders for Services -->
                    <div id="services-slider" class="services-slider">
                        <div class="services-slide-container">
                            <div class="services-slider-items">
                                <div class="slide-content">
                                    <img src="{{asset('assets/images/webImg/services-img.png')}}" alt="Slide 1" class="servicesz-slde-img">
                                    <div class="slide-text">
                                        <div class="uk-srvce-txt">
                                            <h4>IPLAY TV</h4>
                                            <div class="srvce-box-200">
                                                <p>200+ live channels across all genres</p>
                                                <p>Catch-up TV and video on demand</p>
                                                <p>Easy-to-use interface with parental controls</p>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="services-slider-items">
                                <div class="slide-content">
                                    <img src="{{asset('assets/images/webImg/b12.png')}}" alt="Slide 2" class="servicesz-slde-img">
                                    <div class="slide-text">
                                        <div class="uk-srvce-txt">
                                            <h4>INTERNET</h4>
                                            <div class="srvce-box-200">
                                                <p>Fast. Reliable. Unlimited</p>
                                                <p>Perfect for homes, gamers, and remote workers</p>
                                                <p>Unlimited data – no throttling, no surprise limits</p>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="services-slider-items">
                                <div class="slide-content">
                                    <img src="{{asset('assets/images/webImg/phone!!.png')}}" alt="Slide 3" class="servicesz-slde-img">
                                    <div class="slide-text">
                                        <div class="uk-srvce-txt">
                                            <h4>TELEPHONE</h4>
                                            <div class="srvce-box-200">
                                                <p>Clear calls. Low rates</p>
                                                <p>Unlimited local and long-distance calling</p>
                                                <p>Enjoy crystal-clear voice quality</p>
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
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const slideContainer = document.querySelector(".services-slide-container");
        const originalSlides = Array.from(document.querySelectorAll(".services-slider-items"));
        const prevBtn = document.getElementById("services-prevBtn");
        const nextBtn = document.getElementById("services-nextBtn");
    
        const slidesToShow = 1;
        let currentIndex = slidesToShow;
        let autoplayInterval;
    
        // Clone first and last slides
        originalSlides.slice(0, slidesToShow).forEach(slide => {
            slideContainer.appendChild(slide.cloneNode(true));
        });
    
        originalSlides.slice(-slidesToShow).forEach(slide => {
            slideContainer.prepend(slide.cloneNode(true));
        });
    
        // Get all slides including clones
        let allSlides = Array.from(document.querySelectorAll(".services-slider-items"));
        let slideWidth = allSlides[0].offsetWidth;
        let totalSlides = allSlides.length - (slidesToShow * 2); // exclude clones
    
        // Initial position
        slideContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    
        function updateSliderPosition() {
            slideContainer.style.transition = "transform 0.5s ease-in-out";
            slideContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    
            setTimeout(() => {
                if (currentIndex >= totalSlides + slidesToShow) {
                    slideContainer.style.transition = "none";
                    currentIndex = slidesToShow;
                    slideContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                }
                if (currentIndex <= 0) {
                    slideContainer.style.transition = "none";
                    currentIndex = totalSlides;
                    slideContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                }
            }, 400);
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
            autoplayInterval = setInterval(nextSlide, 1000);
        }
    
        function stopAutoplay() {
            clearInterval(autoplayInterval);
        }
    
        nextBtn.addEventListener("click", () => {
            nextSlide();
            stopAutoplay();
            startAutoplay();
        });
    
        prevBtn.addEventListener("click", () => {
            prevSlide();
            stopAutoplay();
            startAutoplay();
        });
    
        slideContainer.addEventListener("mouseenter", stopAutoplay);
        slideContainer.addEventListener("mouseleave", startAutoplay);
    
        // Handle responsive width on resize
        window.addEventListener("resize", () => {
            slideWidth = allSlides[0].offsetWidth;
            slideContainer.style.transition = "none";
            slideContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        });
    
        startAutoplay();
    });
</script>

<style>
/* General Styles */
.bg-services-light {
    margin:23px 0px 30px;
}

/* Slider Navigation */
.services-slider-nav {
    position: absolute;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
    pointer-events: none;
    bottom:-840px;
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
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.7);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: background 0.3s ease-in-out; */
}

#services-prevBtn:hover, #services-nextBtn:hover {
    background: #da0000;
}
.btn.focus, .btn:focus, .btn:hover {
    color: #e5e5e5 !important;
    text-decoration: none;
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

.services-slider-wrapper {
    max-width: 1170px;
    margin: 0 auto; 
    padding: 0 15px; 
}

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
    margin-left: 31px;
}
.slide-text h2 {
    font-size: 24px;
    color: #333;
}
.slide-text p {
    font-size: 16px;
    color: #666;
}

@media (min-width: 320px) and (max-width: 525px) {
    .slide-content{
        display: flex;
        align-items: center;
        gap: 0px;
        flex-direction: column;
    }
    .slide-text p {
        font-size: 16px;
        color: #666;
        text-align: center;
        line-height: 23px;
    }
    .slide-content img {
        width: 560px;
        height: auto;
        border-radius: 10px;
    }
    .slide-text {
        max-width: 890px;
        margin-left: 0px;
    }
    .services-slider-items {
        flex: 0 0 100%;
        box-sizing: border-box;
        padding: 2px 0px;
    }
    .uk-srvce-txt h4 {
        text-align: center;
    }
    .services-slider-nav {
        bottom: 255px;
    }
    #services-prevBtn {
        left: 4px;
    }
    #services-nextBtn {
        right: 35px;
    }
    .bg-services-light{
        margin: 23px 0px 20px;
    }
}
</style>