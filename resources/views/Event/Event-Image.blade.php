<section id="portfolio" class="portfolio">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2> Images</h2>
        <p></p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                @if($event->additional_images)
                    @php
                        $additionalImages = json_decode($event->additional_images);
                    @endphp

                    @foreach($additionalImages as $image)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
                            <img src="{{ asset('images/' . $image) }}" alt="Additional Image" class="img-fluid">
                            <div class="portfolio-info">
                                <a href="{{ asset('images/' . $image) }}" title="Image Preview" data-gallery="portfolio-gallery" class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                @endif
            </div><!-- End Portfolio Container -->

        </div>
    </div>

</section>
