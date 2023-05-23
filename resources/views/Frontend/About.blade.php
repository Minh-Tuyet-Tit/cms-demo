@extends('layouts.master')


@section('main')
    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner--inner__content">
                        <h2>{{ __('lang.about') }}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('lang.home') }}</a></li>
                                <li class="breadcrumb-item">{{ __('lang.about') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->
    <!-- ==== about section start ==== -->
    <section class="section about about--alt">
        <div class="container">
            <div class="row section__row align-items-center">
                <div class="col-lg-6 col-xl-6 section__col">
                    <div class="section__content">

                        <h2 class="section__content-title fz__48">
                            Xin chào! chúng tôi <br /> là “SUNSHINE”Golf club
                        </h2>
                        <p class="section__content-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae non voluptatem commodi
                            dignissimos distinctio in ex nulla dolor earum ratione debitis ad quia itaque, cupiditate ut
                            deserunt alias a voluptatum.
                        </p>
                        <div class="about__section-inner">
                            <div class="about__section-inner__single">
                                <div class="about__section-inner__single-thumb">
                                    <i class="golftio-flag"></i>
                                </div>
                                <div class="about__section-inner__single-content">
                                    <h5>Professional Team</h5>
                                    <p class="secondary-text">
                                        Modern & latest equipment with expert coaching
                                    </p>
                                </div>
                            </div>
                            <div class="about__section-inner__single">
                                <div class="about__section-inner__single-thumb">
                                    <i class="golftio-shot-great-upper"></i>
                                </div>
                                <div class="about__section-inner__single-content">
                                    <h5>Professional Trainings</h5>
                                    <p class="secondary-text">
                                        Modern & latest equipment with expert coaching
                                    </p>
                                </div>
                            </div>
                            <div class="about__section-inner__single">
                                <div class="about__section-inner__single-thumb">
                                    <i class="golftio-sticks"></i>
                                </div>
                                <div class="about__section-inner__single-content">
                                    <h5>Practice Facilities</h5>
                                    <p class="secondary-text">
                                        Modern & latest equipment with expert coaching
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 offset-xl-1 section__col">
                    <div class="about__thumb wow fadeInUp" data-wow-duration="0.4s">
                        <img style="width: 100%" src="{{ asset('Frontend/images/about-thumb.png') }}" alt="Image"
                            class="unset">
                        <div class="about__experience">
                            <div class="about__experience-thumb">
                                <img src="{{ asset('Frontend/images/logo.png') }}" alt="">
                            </div>
                            <h3>
                                <span class="odometer" data-odometer-final="30"></span>
                                <span>+</span>
                            </h3>
                            <p>Thành viên</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / about section end ==== -->


    <!-- ==== club section start ==== -->
    <section class="section club club--alt">
        <div class="container">
            <div class="row section__row" style="align-items: center">
                <div class="col-lg-6 col-xl-5 section__col d-none d-lg-block">
                    <div class="club__thumb dir-rtl wow fadeInUp" data-wow-duration="0.4s">
                        <img src="{{ asset('Frontend/images/club-thumb.png') }}" alt="Image" class="unset w-100">

                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1 section__col">
                    <div class="section__content ">
                        <h2 class="section__content-title fz__48">
                            Lịch sử
                        </h2>
                        <p class="section__content-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, sed pariatur amet deleniti
                            illum aliquam tenetur repellat ex ducimus error ab porro repudiandae hic eligendi, aperiam
                            exercitationem placeat ratione corrupti.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / club section end ==== -->

    <!-- ==== join club section start ==== -->
    <section class="join--tertiary bg-img">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section__content">
                        <h2 class="section__content-title fz__38">{{ __('lang.register') }}</h2>
                        <div class="join-club__form">
                            <div action="#" method="post" name="joinClubForm">
                                <div class="input-group">
                                    <div class="input-single w-100">
                                        <input type="text" name="user_name" id="userName" required placeholder="Tên">
                                    </div>
                                    <div class="input-single w-100">
                                        <input type="text" name="email" id="email" required placeholder="Email">
                                    </div>
                                    <div class="input-single w-100">
                                        <input type="text" name="user_phone" id="userPhone" required
                                            placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="input-single">
                                    <textarea name="user-message" id="userMessage" placeholder="Mô tả ngắn"></textarea>
                                </div>
                                <button data-toggle="modal" data-target="#p-developing" class="cmn-button" >Gửi yêu cầu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img class="w-100" src="{{ asset('Frontend/images/join-bg-new.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / join club section end ==== -->

@stop()
