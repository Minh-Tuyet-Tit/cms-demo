@extends('layouts.master')

@section('main')



    <!-- ==== / preloader end ==== -->


    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="banner--inner__content">
                        <h2 class="text-center">{{$post->post_title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->

    <!-- ==== blog details start ==== -->

    <section class="section blog-details">
        <div class="container">
            <div class="row justify-content-center section__row">
                <div class="col-12 col-xl-8 section__col">
                    <div class="blog-details__wrapper">
                        <div class="blog-details__inner">
                            <div class="blog-details__thumb">
                                <img src="{{ $post->image }}" alt="Blog Details">
                            </div>
                            <div class="blog-details__meta">
                                <h3>{{ $post->post_title }}</h3>
                                <div class="blog-details__content-meta">
                                    <p><i class="golftio-user"></i> Admin</p>
                                    <p><i class="fa-solid fa-calendar-week"></i> 15-12-2022</p>
                                </div>

                                <?= $post->description ?>

                            </div>
                        </div>


                        {{-- <div class="blog-details__comment">
                            <h4>Comments <span>(03)</span></h4>
                            <div class="blog-comment-single">
                                <div class="blog-comment__thumb">
                                    <img src="assets/images/blog/author-one.png" alt="Author">
                                </div>
                                <div class="blog-comment__content">
                                    <div class="blog-comment__author">
                                        <p class="primary-text">Ralph Edwards</p>
                                        <span class="author-active"></span>
                                        <p>2 days ago</p>
                                    </div>
                                    <div class="blog-comment__feedback">
                                        <p class="secondary-text">
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in
                                            some form, by injected humour, or randomised words which
                                            don't look even slightly believable. If you are going to
                                            use a passage of Lorem Ipsum, you...
                                        </p>
                                    </div>
                                    <div class="blog-comment__meta">
                                        <a href="blog-details.html">
                                            <i class="fa-solid fa-thumbs-up"></i> Like
                                        </a>
                                        <a href="javascript:void(0)" class="reply">
                                            <i class="fa-solid fa-comments"></i> Reply
                                        </a>
                                    </div>
                                    <div class="blog-comment-reply">
                                        <div class="blog-comment-reply-inner">
                                            <div class="reply__author">
                                                <img src="assets/images/blog/author-four.png" alt="Author">
                                            </div>
                                            <div class="reply__form">
                                                <form action="#" method="post">
                                                    <div class="reply__form-inner">
                                                        <textarea rows="1" cols="1" placeholder="Join the discussion..."></textarea>
                                                        <button type="submit" class="cmn-button">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="blog-comment-single">
                                <div class="blog-comment__thumb">
                                    <img src="assets/images/blog/author-two.png" alt="Author">
                                </div>
                                <div class="blog-comment__content">
                                    <div class="blog-comment__author">
                                        <p class="primary-text">Wade Warren</p>
                                        <span class="author-active"></span>
                                        <p>2 days ago</p>
                                    </div>
                                    <div class="blog-comment__feedback">
                                        <p class="secondary-text">
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in
                                            some form, by injected humour, or randomised words which
                                            don't look even slightly believable. If you are going to
                                            use a passage of Lorem Ipsum, you...
                                        </p>
                                    </div>
                                    <div class="blog-comment__meta">
                                        <a href="blog-details.html">
                                            <i class="fa-solid fa-thumbs-up"></i> Like
                                        </a>
                                        <a href="javascript:void(0)" class="reply">
                                            <i class="fa-solid fa-comments"></i> Reply
                                        </a>
                                    </div>
                                    <div class="blog-comment-reply">
                                        <div class="blog-comment-reply-inner">
                                            <div class="reply__author">
                                                <img src="assets/images/blog/author-four.png" alt="Author">
                                            </div>
                                            <div class="reply__form">
                                                <form action="#" method="post">
                                                    <div class="reply__form-inner">
                                                        <textarea rows="1" cols="1" placeholder="Join the discussion..."></textarea>
                                                        <button type="submit" class="cmn-button">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="blog-comment-single">
                                <div class="blog-comment__thumb">
                                    <img src="assets/images/blog/author-three.png" alt="Author">
                                </div>
                                <div class="blog-comment__content">
                                    <div class="blog-comment__author">
                                        <p class="primary-text">Devon Lane</p>
                                        <span class="author-active"></span>
                                        <p>2 days ago</p>
                                    </div>
                                    <div class="blog-comment__feedback">
                                        <p class="secondary-text">
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in
                                            some form, by injected humour, or randomised words which
                                            don't look even slightly believable. If you are going to
                                            use a passage of Lorem Ipsum, you...
                                        </p>
                                    </div>
                                    <div class="blog-comment__meta">
                                        <a href="blog-details.html">
                                            <i class="fa-solid fa-thumbs-up"></i> Like
                                        </a>
                                        <a href="javascript:void(0)" class="reply">
                                            <i class="fa-solid fa-comments"></i> Reply
                                        </a>
                                    </div>
                                    <div class="blog-comment-reply">
                                        <div class="blog-comment-reply-inner">
                                            <div class="reply__author">
                                                <img src="assets/images/blog/author-four.png" alt="Author">
                                            </div>
                                            <div class="reply__form">
                                                <form action="#" method="post">
                                                    <div class="reply__form-inner">
                                                        <textarea rows="1" cols="1" placeholder="Join the discussion..."></textarea>
                                                        <button type="submit" class="cmn-button">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section__cta">
                                <a href="blog-details.html" class="cmn-button">View All Comment</a>
                            </div>
                        </div> --}}
                        <div class="comment-form">
                            <h5>Write a Comment</h5>
                            <form action="#" method="post">
                                <div class="input-group">
                                    <div class="input-single">
                                        <input type="text" name="comment-name" id="commentName" required
                                            placeholder="Enter Your Name...">
                                    </div>
                                    <div class="input-single">
                                        <input type="email" name="comment-email" id="commentEmail" required
                                            placeholder="Enter Your Email...">
                                    </div>
                                </div>
                                <div class="input-single">
                                    <textarea name="comment-message" id="commentMessage" placeholder="Write a comment..."></textarea>
                                </div>
                                <button type="submit" class="cmn-button">Submit Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 section__col">
                    <div class="sidebar wow fadeInUp" data-wow-duration="0.4s">
                        <div class="sidebar__single">
                            <h5>Search</h5>
                            <hr>
                            <form action="#" method="post">
                                <div class="search_form">
                                    <input type="text" name="post-search" id="postSearch" placeholder="Search">
                                    <button type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="sidebar__single">
                            <h5>Popular Blog Posts</h5>
                            <hr>
                            <div class="sidebar__item">

                                @foreach ($posts as $post)
                                    <div class="sidebar__item-single">
                                        <div class="sidebar__item-thumb">
                                            <a href="{{ url('blog-detail/' . $post->id) }}" title="Read More">
                                                <img src="{{ $post->image }}" alt="Blog">
                                            </a>
                                        </div>
                                        <div class="sidebar__item-content">
                                            <h6>
                                                <a href="{{ url('blog-detail/' . $post->id) }}"
                                                    title="Read More">{{ $post->post_title }}</a>
                                            </h6>
                                            <p class="seocndary-text">{{ $post->created_at }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="sidebar__single">
                            <h5>Popular Tags</h5>
                            <hr>
                            <div class="sidebar__tags">
                                <a href="blog.html" class="cmn-button cmn-button--secondary" title="Blog">New</a>
                                <a href="blog.html" class="cmn-button cmn-button--secondary" title="Blog">Training</a>
                                <a href="blog.html" class="cmn-button cmn-button--secondary" title="Blog">2023</a>
                                <a href="blog.html" class="cmn-button cmn-button--secondary" title="Blog">Facility</a>
                                <a href="blog.html" class="cmn-button cmn-button--secondary" title="Blog">Gallery</a>
                                <a href="blog.html" class="cmn-button cmn-button--secondary" title="Blog">Shop</a>
                            </div>
                        </div>
                        <div class="sidebar__single">
                            <h5>Follow Our Journey</h5>
                            <hr>
                            <div class="social justify-content-start">
                                <a href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / blog details end ==== -->

    <!-- ==== related news start ==== -->
    <section class="section related-news blog wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__header--secondary">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="section__header--secondary__content">
                                    <h2>More Related News</h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="section__header--secondary__cta">
                                    <div class="slider-navigation justify-content-lg-end">
                                        <button class="next-news cmn-button cmn-button--secondary">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </button>
                                        <button class="prev-news cmn-button cmn-button--secondary">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center section__row">
                <div class="col-sm-10 col-md-12 section__col">
                    <div class="related-news__slider">
                        @foreach ($posts as $post)
                            <div class="blog-single">
                                <div class="blog__thumb">
                                    <a href="{{ url('blog-detail/' . $post->id) }}" title="Read More">
                                        <img src="{{ $post->image }}" alt="Blog">
                                    </a>
                                </div>
                                <div class="blog__content">
                                    <h5>
                                        <a href="{{ url('blog-detail/' . $post->id) }}"
                                            title="Read More">{{ $post->post_title }}</a>
                                    </h5>
                                    <div class="blog__content-meta">
                                        <p><i class="golftio-user"></i> Admin</p>
                                        <p><i class="fa-solid fa-calendar-week"></i> 15-12-2022</p>
                                    </div>
                                    <?= $post->summary ?>
                                    
                                    <a href="{{ url('blog-detail/' . $post->id) }}" title="Read More"
                                        class="cmn-button cmn-button--secondary">Read more</a>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / related news end ==== -->

    <!-- ==== sponsor section start ==== -->
    <div class="sponsor wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sponsor__inner">
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/one.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/two.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/three.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/four.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/five.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/six.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/one.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/one.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/two.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/three.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/four.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/five.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/six.png')}}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{asset('Frontend/images/sponsor/one.png')}}" alt="Sponsor">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== / sponsor section end ==== -->

@stop()
