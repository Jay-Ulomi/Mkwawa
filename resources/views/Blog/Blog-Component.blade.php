<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/mkwawa/WEB-IMG_3592.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Post</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Post</li>
      </ol>

    </div>
  </div>


   <!-- Blog Section - Blog Page -->
   <section id="blog" class="blog">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 posts-list">

        @foreach ($posts as $post )


        <div class="col-xl-4 col-lg-6">
            <article>

                <div class="post-img">
                    @if($post->image1)
                    <img src="{{ asset($post->image1) }}" alt="Image 1" class="img-fluid" />
                @endif
                </div>

                <p class="post-category">{{$post->category->name}}</p>

                <h2 class="title">
                  <a href="{{route('Post-Details',['id'=>$post->id])}}">{{$post->title}}</a>
                </h2>

                <div class="d-flex align-items-center">
                  <div class="post-meta">
                    <p class="post-date">Posted On:
                      <strong>
                        <time datetime="2020-02-12">{{ $post->created_at->format('F j, Y, g:i a') }}</p></time>
                      </strong>
                    </p>
                  </div>
                </div>
                {{-- <a href="#" class="btn btn-get-started align-self-start ">Read More</a> --}}
              </article>
        </div><!-- End post list item -->
        @endforeach


      </div><!-- End blog posts list -->

      <div class="pagination d-flex justify-content-center">
        <ul>
          <li class="active"><a href="#">1</a></li>
          <li ><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div><!-- End pagination -->

    </div>

  </section>
