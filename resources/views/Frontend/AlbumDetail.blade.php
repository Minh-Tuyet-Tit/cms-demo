@extends('layouts.master')


@section('main')

    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner--inner__content">
                        <h2>Chi tiết</h2>
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


    <!-- ==== gallery section start ==== -->
    <div class="section gallery wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="gallery__img">
                                <img src="{{ asset('Frontend/images/album-detail/2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="gallery__img">
                                <img src="{{ asset('Frontend/images/album-detail/3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="gallery__img">
                                <img src="{{ asset('Frontend/images/album-detail/4.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="gallery__img">
                                <img src="{{ asset('Frontend/images/album-detail/5.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/6.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/7.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/8.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/9.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/10.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/11.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/12.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/13.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== / gallery section end ==== -->
@stop()
