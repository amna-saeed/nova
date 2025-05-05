@extends('layout.main')
@section('content')

<section class="about-content-padding">
    <div class="container-fluid p-0">
        <div class="row">
            <h2 class="terms-faqs">Terms & Conditions</h2>
            <div class="col-lg-6">
                <img src="{{asset('assets/images/webImg/banner-19.png')}}" class="pkggg-100" alt="" />
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="faqAccordion">
                    <!-- Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false">
                                What is your return policy?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can return any product within 30 days of purchase with a valid receipt.
                            </div>
                        </div>
                    </div>
            
                    <!-- Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false">
                                Do you offer free shipping?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer free shipping on orders over $50.
                            </div>
                        </div>
                    </div>
            
                    <!-- Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
                                How can I contact customer support?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can contact us via email at support@example.com or call us at (123) 456-7890.
                            </div>
                        </div>
                    </div>
            
                </div>
                {{--  --}}
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.querySelectorAll(".accordion-button").forEach(button => {
        button.addEventListener("click", function() {
            let icon = this.querySelector(".icon");
            document.querySelectorAll(".icon").forEach(i => {
                if (i !== icon) {
                    i.classList.replace("fa-minus", "fa-plus");
                }
            });
            icon.classList.toggle("fa-plus");
            icon.classList.toggle("fa-minus");
        });
    });
</script>

@stop
@section('js')
@endsection

