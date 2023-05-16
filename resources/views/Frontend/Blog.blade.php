@extends('layouts.master')

@section('main')

    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="banner--inner__content">
                        <h2 class="text-center">Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->

    <!-- ==== blog grid start ==== -->
    <section class="section blog blog-grid">
        <div class="container">
            <div class="row justify-content-center section__row">
                <div class="col-12 col-xl-8 section__col">
                    <div class="blog__wrapper">
                        <div class="row justify-content-center section__row">
                            @foreach ($posts as $post)
                                <div class="col-sm-10 col-md-6 section__col">
                                    <div class="blog-single">
                                        <div class="blog__thumb">
                                            <a href="{{ url('blog-detail/' . $post->id) }}" title="Read More">
                                                <img style="height: 100%" src="{{ $post->image }}" alt="Blog">
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
                                            {{-- <p class="secondary-text">{{ substr($post->summary, 3, 100)}}</p> --}}
                                            <a href="{{ url('blog-detail/' . $post->id) }}" title="Read More"
                                                class="cmn-button cmn-button--secondary">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach







                        </div>
                        <div class="row">
                            <div class="col-12 justify-content-center section__cta">
                                <ul class="pagination">
                                    <li>
                                        <button><i class="fa-solid fa-angle-left"></i></button>
                                    </li>
                                    <li><a href="blog.html">1</a></li>
                                    <li><a href="blog.html">2</a></li>
                                    <li><a href="blog.html">3</a></li>
                                    <li><a href="blog.html">...</a></li>
                                    <li>
                                        <button><i class="fa-solid fa-angle-right"></i></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4 section__col">
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
    <!-- ==== / blog grid end ==== -->

@stop()
