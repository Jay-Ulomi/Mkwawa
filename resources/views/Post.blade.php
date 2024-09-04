<section id="recent-posts" class="recent-posts">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Recent Posts</h2>
        <p>Stay updated with our latest news, events, and community initiatives. Discover how Mkwawa Leaf Tobacco Limited is making a difference and bringing positive change to our community. Explore our recent highlights and see how we're working to create a better future.</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            @foreach ($posts as $index => $post)
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <article>
                    @if($post->image1)
                    <div class="post-img">
                        <img src="{{ asset($post->image1) }}" alt="Image 1" class="img-fluid" />
                    </div>
                    @endif

                    <p class="post-category">{{ $post->category->name }}</p>

                    <h2 class="title">
                        <a href="{{route('Post-Details',['id'=>$post->id])}}">{{ $post->title }}</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <div class="post-meta">
                            <p class="post-date">Posted On:
                                <strong>
                                    <time datetime="{{ $post->created_at }}">{{ $post->created_at->format('F j, Y, g:i a') }}</time>
                                </strong>
                            </p>
                        </div>
                    </div>
                    {{-- <a href="#" class="btn btn-get-started align-self-start ">Read More</a> --}}
                </article>
            </div><!-- End post list item -->
            @endforeach
        </div><!-- End recent posts list -->
    </div>

</section>
