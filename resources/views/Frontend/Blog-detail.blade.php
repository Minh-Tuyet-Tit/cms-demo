@extends('layouts.master')

@section('main')



    <!-- ==== / preloader end ==== -->


    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner--inner__content">
                        <h2>{{ __('lang.blog_detail') }}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('lang.home') }}</a></li>
                                <li class="breadcrumb-item">Blog</li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Chi tiết
                                </li>
                            </ol>
                        </nav>
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


                        <div class="blog-details__comment">
                            <h4>Bình luận <span>(23)</span></h4>
                            <div class="blog-comment-single">
                                <div class="blog-comment__thumb">
                                    <img src="{{ asset('Frontend/images/blog/author-one.png') }}" alt="Author">
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
                                                <img src="{{ asset('Frontend/images/blog/author-four.png') }}"
                                                    alt="Author">
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
                                    <img src="{{ asset('Frontend/images/blog/author-two.png') }}" alt="Author">
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
                                        <div class="blog-comment-single">
                                            <div class="blog-comment__thumb">
                                                <img src="{{ asset('Frontend/images/blog/author-two.png') }}"
                                                    alt="Author">
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
                                                            <img src="{{ asset('Frontend/images/blog/author-four.png') }}"
                                                                alt="Author">
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
                                        <div class="blog-comment-reply-inner">
                                            <div class="reply__author">
                                                <img src="{{ asset('Frontend/images/blog/author-four.png') }}"
                                                    alt="Author">
                                            </div>
                                            <div class="reply__form">
                                                {{-- <div class="blog-comment-single">
                                                    <div class="blog-comment__thumb">
                                                        <img src="{{ asset('Frontend/images/blog/author-two.png') }}"
                                                            alt="Author">
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
                                                                    <img src="{{ asset('Frontend/images/blog/author-four.png') }}"
                                                                        alt="Author">
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
                                                </div> --}}
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
                                    <img src="{{ asset('Frontend/images/blog/author-three.png') }}" alt="Author">
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
                                                <img src="{{ asset('Frontend/images/blog/author-four.png') }}"
                                                    alt="Author">
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
                                <a href="blog-details.html" class="cmn-button">Xem thêm bình luận</a>
                            </div>
                        </div>
                        <div class="comment-form">
                            <h5>Viết bình luận</h5>
                            <form action="#" method="post">
                                <div class="input-group">
                                    <div class="input-single">
                                        <input type="text" name="comment-name" id="commentName" required
                                            placeholder="Tên">
                                    </div>
                                    <div class="input-single">
                                        <input type="email" name="comment-email" id="commentEmail" required
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="input-single">
                                    <textarea name="comment-message" id="commentMessage" placeholder="Viết bình luận..."></textarea>
                                </div>
                                <button type="submit" class="cmn-button">Bình luận</button>
                            </form>
                        </div>
                    </div>
                </div>
                @include('partials.SidebarSingle')
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
                                    <h2>Bài viết khác</h2>
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
                                            title="Read More">{{ cutStr($post->post_title, 0, 45) . '...' }}</a>
                                    </h5>
                                    <div class="blog__content-meta">
                                        <p><i class="golftio-user"></i> Admin</p>
                                        <p><i class="fa-solid fa-calendar-week"></i> 15-12-2022</p>
                                    </div>

                                    <p>{{ cutStr($post->summary, 0, 60) . '...' }}</p>

                                    <a href="{{ url('blog-detail/' . $post->id) }}" title="Read More"
                                        class="cmn-button cmn-button--secondary">Đọc thêm</a>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / related news end ==== -->


@stop()
