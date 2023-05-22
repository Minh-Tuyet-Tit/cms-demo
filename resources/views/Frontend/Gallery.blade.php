@extends('layouts.master')

@section('main')


    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner--inner__content">
                        <h2>{{ __('lang.gallery') }}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('lang.home') }}</a></li>
                                <li class="breadcrumb-item" aria-current="page">
                                    {{ __('lang.gallery') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->

    <!-- ==== gallery section start ==== -->
    <div class="section gallery wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{url('/album-detail/1')}}" class="album">
                        <div class="album__thumb">
                            <img src="{{ asset('Frontend/images/album/1.png') }}" alt="">
                        </div>
                        <div class="album__content">
                            <h5 class="font-regular" >Album:</h5>
                            <h2 class="fz__32">SSGC - TEAM BUILDING 2024</h2>
                            <p class="font-regular fz__18">
                                <i class="fas fa-calendar"></i> Thứ 2, 20-07-202310:00 AM
                            </p>
                            <p class="font-regular fz__18">
                                <i class="golftio-location"></i> Sunshine City, KĐT Nam Thăng Long, Từ Liêm, Hà Nội
                            </p>
                            <p class="font-bold fz__18 album__count">
                                <i class="fas fa-images"></i> +20 hình ảnh
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('/album-detail/1')}}" class="album">
                        <div class="album__thumb">
                            <img src="{{ asset('Frontend/images/album/2.png') }}" alt="">
                        </div>
                        <div class="album__content">
                            <h5 class="font-regular" >Album:</h5>
                            <h2 class="fz__32">SSGC - TEAM BUILDING 2024</h2>
                            <p class="font-regular fz__18">
                                <i class="fas fa-calendar"></i> Thứ 2, 20-07-202310:00 AM
                            </p>
                            <p class="font-regular fz__18">
                                <i class="golftio-location"></i> Sunshine City, KĐT Nam Thăng Long, Từ Liêm, Hà Nội
                            </p>
                            <p class="font-bold fz__18 album__count">
                                <i class="fas fa-images"></i> +20 hình ảnh
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('/album-detail/1')}}" class="album">
                        <div class="album__thumb">
                            <img src="{{ asset('Frontend/images/album/3.png') }}" alt="">
                        </div>
                        <div class="album__content">
                            <h5 class="font-regular" >Album:</h5>
                            <h2 class="fz__32">SSGC - TEAM BUILDING 2024</h2>
                            <p class="font-regular fz__18">
                                <i class="fas fa-calendar"></i> Thứ 2, 20-07-202310:00 AM
                            </p>
                            <p class="font-regular fz__18">
                                <i class="golftio-location"></i> Sunshine City, KĐT Nam Thăng Long, Từ Liêm, Hà Nội
                            </p>
                            <p class="font-bold fz__18 album__count">
                                <i class="fas fa-images"></i> +20 hình ảnh
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('/album-detail/1')}}" class="album">
                        <div class="album__thumb">
                            <img src="{{ asset('Frontend/images/album/4.png') }}" alt="">
                        </div>
                        <div class="album__content">
                            <h5 class="font-regular" >Album:</h5>
                            <h2 class="fz__32">SSGC - TEAM BUILDING 2024</h2>
                            <p class="font-regular fz__18">
                                <i class="fas fa-calendar"></i> Thứ 2, 20-07-202310:00 AM
                            </p>
                            <p class="font-regular fz__18">
                                <i class="golftio-location"></i> Sunshine City, KĐT Nam Thăng Long, Từ Liêm, Hà Nội
                            </p>
                            <p class="font-bold fz__18 album__count">
                                <i class="fas fa-images"></i> +20 hình ảnh
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('/album-detail/1')}}" class="album">
                        <div class="album__thumb">
                            <img src="{{ asset('Frontend/images/album/5.png') }}" alt="">
                        </div>
                        <div class="album__content">
                            <h5 class="font-regular" >Album:</h5>
                            <h2 class="fz__32">SSGC - TEAM BUILDING 2024</h2>
                            <p class="font-regular fz__18">
                                <i class="fas fa-calendar"></i> Thứ 2, 20-07-202310:00 AM
                            </p>
                            <p class="font-regular fz__18">
                                <i class="golftio-location"></i> Sunshine City, KĐT Nam Thăng Long, Từ Liêm, Hà Nội
                            </p>
                            <p class="font-bold fz__18 album__count">
                                <i class="fas fa-images"></i> +20 hình ảnh
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('/album-detail/1')}}" class="album">
                        <div class="album__thumb">
                            <img src="{{ asset('Frontend/images/album/6.png') }}" alt="">
                        </div>
                        <div class="album__content">
                            <h5 class="font-regular" >Album:</h5>
                            <h2 class="fz__32">SSGC - TEAM BUILDING 2024</h2>
                            <p class="font-regular fz__18">
                                <i class="fas fa-calendar"></i> Thứ 2, 20-07-202310:00 AM
                            </p>
                            <p class="font-regular fz__18">
                                <i class="golftio-location"></i> Sunshine City, KĐT Nam Thăng Long, Từ Liêm, Hà Nội
                            </p>
                            <p class="font-bold fz__18 album__count">
                                <i class="fas fa-images"></i> +20 hình ảnh
                            </p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- ==== / gallery section end ==== -->




@stop()
