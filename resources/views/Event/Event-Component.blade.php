<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/mkwawa/WEB-IMG_3592.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Event</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Event</li>
      </ol>

    </div>
  </div>


  <section id="features" class="features">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>{{$event->title}}</h2>
      <p>Posted on: <strong>{{ $event->created_at->format('F j, Y, g:i a') }}</strong></p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4 align-items-center features-item">
        <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h5>{{$event->content1}}</h5>
          <p>
           {{$event->content2}}
          </p>

        </div>
        <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
          <div class="image-stack">
            @if($event->image1)
            <img src="{{ asset('images/' . $event->image1) }}" alt="Image 1" class="stack-front" />
            @endif
            @if($event->image2)
            <img src="{{ asset('images/' . $event->image2) }}" alt="Image 1"  class="stack-back" />
            @endif

          </div>
        </div>
      </div><!-- Features Item -->

      <div class="row gy-4 align-items-stretch justify-content-between features-item ">
        <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
            @if($event->image2)
            <img src="{{ asset('images/' . $event->image2) }}" alt="Image 1"  class="img-fluid" />
            @endif
        </div>
        <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
            <h3 class="text-capitalize">{{$event->subtitle1}}</h3>

          <p>
            {{$event->content3}}
          </p>

        </div>
      </div><!-- Features Item -->

      <div class="row gy-4 align-items-stretch justify-content-between features-item ">
        <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
            <h3 class="text-capitalize">{{$event->subtitle2}}</h3>

          <p>
            {{$event->content4}}
          </p>

        </div>
        <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
            @if($event->image3)
            <img src="{{ asset('images/' . $event->image3) }}" alt="Image 1"  class="img-fluid" />
            @endif
          </div>
      </div>

    </div>

  </section>



