<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/mkwawa/WEB-IMG_3592.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Post Details</h2>
        <ol>
            <li><a href="index.html">Home</a></li>
            <li>Post Details</li>
        </ol>
    </div>
</div>

<section id="blog-details" class="blog-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-5">
            <div class="col-lg-8">
                <article class="article">
                    @if($post->image1)
                    <div class="post-img">
                        <img src="{{ asset($post->image1) }}" alt="Image 1" class="img-fluid" />
                    </div>
                    @endif

                    <h2 class="title">{{ $post->title }}</h2>

                    <div class="meta-top">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-02-12">{{ $post->created_at->format('F j, Y, g:i a') }}</time></a></li>
                        </ul>
                    </div><!-- End meta top -->

                    <div class="content">
                        @if($post->content1)
                        <p>{{ $post->content1 }}</p>
                        @endif

                        @if($post->content2)
                        <p>{{ $post->content2 }}</p>
                        @endif

                        @if($post->note)
                        <blockquote>
                            <p>{{ $post->note }}</p>
                        </blockquote>
                        @endif

                        @if($post->content3)
                        <p>{{ $post->content3 }}</p>
                        @endif

                        @if($post->subtitle1)
                        <h3>{{ $post->subtitle1 }}</h3>
                        @endif

                        @if($post->content4)
                        <p>{{ $post->content4 }}</p>
                        @endif

                        @if($post->image2)
                        <img src="{{ asset($post->image2) }}" alt="Image 2" class="img-fluid" />
                        @endif

                        @if($post->subtitle2)
                        <h3>{{ $post->subtitle2 }}</h3>
                        @endif

                        @if($post->content5)
                        <p>{{ $post->content5 }}</p>
                        @endif

                        @if($post->image3)
                        <img src="{{ asset($post->image3) }}" alt="Image 3" class="img-fluid" />
                        @endif

                        {{--
                        @if($post->image4)
                        <img src="{{ asset($post->image4) }}" alt="Image 4" class="img-fluid" />
                        @endif

                        @if($post->image5)
                        <img src="{{ asset($post->image5) }}" alt="Image 5" class="img-fluid" />
                        @endif

                        @if($post->image6)
                        <img src="{{ asset($post->image6) }}" alt="Image 6" class="img-fluid" />
                        @endif

                        @if($post->image7)
                        <img src="{{ asset($post->image7) }}" alt="Image 7" class="img-fluid" />
                        @endif

                        @if($post->image8)
                        <img src="{{ asset($post->image8) }}" alt="Image 8" class="img-fluid" />
                        @endif

                        @if($post->image9)
                        <img src="{{ asset($post->image9) }}" alt="Image 9" class="img-fluid" />
                        @endif

                        @if($post->image10)
                        <img src="{{ asset($post->image10) }}" alt="Image 10" class="img-fluid" />
                        @endif
                        --}}
                    </div><!-- End post content -->

                    {{--
                    <div class="meta-bottom">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            <li><a href="#">{{ $post->category->name ?? 'Uncategorized' }}</a></li>
                        </ul>

                        <i class="bi bi-tags"></i>
                        <ul class="tags">
                            @foreach($post->tags as $tag)
                            <li><a href="#">{{ $tag->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    --}}

                </article><!-- End post article -->

                <div class="comments">
                    <div class="reply-form">
                        <h4>Leave a Reply</h4>
                        <p>Your email address will not be published. Required fields are marked * </p>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input name="website" type="text" class="form-control" placeholder="Your Website">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div><!-- End blog comments -->

            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-item search-form">
                        <h3 class="sidebar-title">Search</h3>
                        <form action="" class="mt-3">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!-- End sidebar search form -->

                    <div class="sidebar-item categories">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul class="mt-3">
                            <li><a href="#">News <span>(25)</span></a></li>
                            <li><a href="#">Community <span>(12)</span></a></li>
                            <li><a href="#">Events <span>(5)</span></a></li>
                        </ul>
                    </div><!-- End sidebar categories -->

                    <div class="sidebar-item recent-posts">
                        <h3 class="sidebar-title">Recent Posts</h3>
                        @foreach($recentPosts as $recentPost)
                        <div class="post-item">
                            <img src="{{ asset($recentPost->image1) }}" alt="" class="flex-shrink-0">
                            <div>
                                <h4><a href="{{ route('Post-Details', ['id'=>$recentPost->id]) }}">{{ $recentPost->title }}</a></h4>
                                <time datetime="{{ $recentPost->created_at->format('Y-m-d') }}">{{ $recentPost->created_at->format('F j, Y') }}</time>
                            </div>
                        </div><!-- End recent post item -->
                        @endforeach
                    </div><!-- End sidebar recent posts -->
                </div><!-- End Sidebar -->
            </div>
        </div>
    </div>
</section>
