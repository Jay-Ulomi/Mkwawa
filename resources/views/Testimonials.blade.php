<section id="testimonials" class="testimonials">
    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Event</h2>
        <p>Events that took place in different places</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                <h3>Mkwawa and People</h3>
                <p>
                    Mkwawa Tobacco’s initiative has significantly enhanced its connection with local communities,
                    fostering empowerment and engagement. Through initiatives such as supporting women’s
                    organizations and providing young girls access to ICT, we are actively contributing to
                    the improvement of livelihoods in our areas of operation. Join us in our mission to create
                    a more inclusive and prosperous society.
                </p>
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper">
                    <template class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            }
                        }
                    </template>
                    <div class="swiper-wrapper">
                        @foreach ($events as $event)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        @if($event->image1)
                                            <img src="{{ asset('images/' . $event->image1) }}" alt="Image 1" class="testimonial-img flex-shrink-0" />
                                        @endif
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <a href="{{ route('Events', ['id' => $event->id]) }}">{{ $event->title }}</a>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End swiper-slide -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
