@extends('layouts.master')





@section('main')

    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner--inner__content">
                        <h2>Blog</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('lang.home') }}</a></li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Blog
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
                                                    title="Read More">{{ cutStr($post->post_title, 0, 45) . '...' }}</a>

                                            </h5>
                                            <div class="blog__content-meta">
                                                <p><i class="golftio-user"></i> Admin</p>
                                                <p><i class="fa-solid fa-calendar-week"></i> 15-12-2022</p>
                                            </div>
                                            <p>{{ cutStr($post->summary, 0, 60) . '...' }}</p>
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
                @include('partials.SidebarSingle')
            </div>
        </div>
    </section>

    
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            var search = document.getElementById('post-Search');

            var divSearch = document.querySelector('.search_form');

            search.addEventListener('focus', e => {

            })

            search.addEventListener('input', (e) => {
                if (e.target.value) {
                    fetch(`{{ url('api/search?search=') }}${e.target.value}`)
                        .then((res) => {
                            return res.json();
                        })
                        .then((data) => {
                            console.log(data);
                            if (data.length == 0) {

                                return;
                            }

                        });
                } else {

                }
            });
        });
    </script>
@stop()
