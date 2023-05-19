@extends('layouts.master')

@section('main')

    <!-- ==== / header end ==== -->

    <!-- ==== banner section start ==== -->
    <section class="banner--secondary">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="banner__content wow fadeInUp" data-wow-duration="0.4s">
                        <h5 class="banner__content-sub-title">
                            Play Golf Like A Pro
                        </h5>
                        <h1 class="banner__content-title">
                            Get the best golf experience
                        </h1>
                        <p class="primary-text banner__content-text">
                            Our staff are always on hand to make all members
                            feel welcome. Fully dedicated to golf lovers.
                        </p>
                        <div class="banner__content-cta">
                            <a data-toggle="modal" data-target="#p-developing" href="" class="cmn-button">{{ __('lang.register') }}</a>

                            <a href="{{ url('/about') }}"
                                class="cmn-button cmn-button--secondary">{{ __('lang.about') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner section end ==== -->



    <section class="section related-news blog wow fadeInUp bg-white" data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header wow fadeInUp" data-wow-duration="0.4s">
                        <h5 class="section__header-sub-title">{{ __('lang.blog_latest') }}</h5>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero facere incidunt nam commodi nisi,
                            eaque minima hic debitis eveniet?
                        </p>
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
                                        <p><i class="golftio-user"></i> Đoàn Văn Năng</p>
                                        <p><i class="fa-solid fa-calendar-week"></i> 15-12-2022</p>
                                    </div>
                                    <p> {{ cutStr($post->summary, 0, 60) . ' ...' }} </p>

                                    <a href="{{ url('blog-detail/' . $post->id) }}" title="Read More"
                                        class="cmn-button cmn-button--secondary">{{ __('lang.read_more') }}</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="row mt-5" style="height: 0">
                <div class="col-12">
                    <div class="section__header--secondary">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="section__header--secondary__cta">
                                    <div class="slider-navigation justify-content-lg-center">
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
        </div>
    </section>



    <!-- ==== about section start ==== -->
    <section class="section about--secondary wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xxl-5 d-none d-lg-block">
                    <div class="about--secondary__thumb dir-rtl">
                        <img src="{{ asset('Frontend/images/about-two-thumb.png') }}" alt="Image" class="unset" />
                        <div class="about--secondary__thumb-experience">
                            <h3>
                                <span class="odometer" data-odometer-final="30"></span>
                                <span>+</span>
                            </h3>
                            <p>
                                Years <br />
                                of experience
                            </p>
                        </div>
                        <div class="about--secondary__modal">
                            <img src="{{ asset('Frontend/images/about-modal.png') }}" alt="img" />
                            <div class="play-wrapper">
                                <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                                    title="Youtube Video Player" class="play-btn">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xxl-6 offset-xxl-1">
                    <div class="section__content">
                        <h5 class="section__content-sub-title">{{ __('lang.about') }}</h5>
                        <h2 class="section__content-title fz__48">
                            <?= __('lang.welcom') ?>
                        </h2>
                        <p class="section__content-text">
                            We offer a lot of courses of varying difficulty
                            and beautiful scenery that golfers of all skill
                            levels can enjoy. You will learn golf from
                            professionals with our competent and experienced
                            staff.
                        </p>
                        <div class="row">
                            <div class="col-sm-12 col-md-11 col-lg-12">
                                <div class="about--secondary__single">
                                    <div class="row section__row">
                                        <div class="col-6 col-sm-4 section__col">
                                            <div class="about--secondary__single-item">
                                                <div class="about--secondary__single-item__icon">
                                                    <i class="golftio-flag"></i>
                                                </div>
                                                <h6>Professional Team</h6>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 section__col">
                                            <div class="about--secondary__single-item">
                                                <div class="about--secondary__single-item__icon">
                                                    <i class="golftio-shot-upper"></i>
                                                </div>
                                                <h6>
                                                    Professional Trainings
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 section__col">
                                            <div class="about--secondary__single-item">
                                                <div class="about--secondary__single-item__icon">
                                                    <i class="golftio-shot-ground"></i>
                                                </div>
                                                <h6>Facilities with Gym</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section__content-cta">
                            <a href="{{ url('about') }}" class="cmn-button">{{ __('lang.read_more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / about section end ==== -->





    <!-- ==== team section start ==== -->
    <section class="section team wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header">
                        <h5 class="section__header-sub-title">{{ __('lang.member') }}</h5>
                        <h2 class="section__header-title fz__48">
                            {{ __('lang.member_title') }}
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est blanditiis libero.
                            Provident,
                        </p>
                    </div>
                </div>
            </div>
            <div class="team__slider--secondary">
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="{{ asset('Frontend/images/team/one.png') }}" alt="Team" />
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Jerome Bell</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#modelId">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="{{ asset('Frontend/images/team/two.png') }}" alt="Team" />
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Mariah Tal</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#modelId">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="{{ asset('Frontend/images/team/three.png') }}" alt="Team" />
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Robert Fox</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#modelId">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="{{ asset('Frontend/images/team/four.png') }}" alt="Team" />
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Andrea Reed</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#modelId">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="{{ asset('Frontend/images/team/one.png') }}" alt="Team" />
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Jerome Bell</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#modelId">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="{{ asset('Frontend/images/team/two.png') }}" alt="Team" />
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Mariah Tal</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#modelId">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="{{ asset('Frontend/images/team/three.png') }}" alt="Team" />
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Robert Fox</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#modelId">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="{{ asset('Frontend/images/team/four.png') }}" alt="Team" />
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Andrea Reed</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>

                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#modelId">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <a href="{{ url('/members/Members') }}" class="cmn-button">{{ __('lang.see_all') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / team section end ==== -->


    <!-- ==== gallery section start ==== -->
    <div class="section gallery wow fadeInUp" data-wow-duration="0.4s"
        style="background-color: rgba(12, 169, 64, 0.05);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header wow fadeInUp" data-wow-duration="0.4s">
                        <h5 class="section__header-sub-title">{{ __('lang.gallery') }}</h5>
                        <p>
                            Golftio Sports Club is a golf club with a
                            history that goes back to XX century. From a
                            cricket club to soccer tournaments,
                        </p>
                    </div>
                </div>
            </div>
            <div class="row section__row align-items-center">
                <div class="col-sm-6 col-lg-4 col-xl-4 section__col">
                    <div class="gallery__thumb">
                        <div class="gallery__thumb-single">
                            <img src="{{ asset('Frontend/images/gallery/1.png') }}" alt="Image">
                        </div>
                        <div class="gallery__thumb-single">
                            <img src="{{ asset('Frontend/images/gallery/2.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 section__col d-none d-lg-block">
                    <div class="gallery__thumb">
                        <div class="gallery__thumb-single">
                            <img src="{{ asset('Frontend/images/gallery/3.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4 section__col">
                    <div class="gallery__thumb">
                        <div class="gallery__thumb-single">
                            <img src="{{ asset('Frontend/images/gallery/4.png') }}" alt="Image">
                        </div>
                        <div class="gallery__thumb-single">
                            <img src="{{ asset('Frontend/images/gallery/5.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== / gallery section end ==== -->




  
    <script>
        // document.addEventListener("DOMContentLoaded", function() {


        //     $('#exampleModal').on('show.bs.modal', event => {
        //         var button = $(event.relatedTarget);
        //         var modal = $(this);
        //         // Use above variables to manipulate the DOM

        //     });

        // });
    </script>



@stop
