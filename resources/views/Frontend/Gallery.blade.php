@extends('layouts.master')

@section('main')


    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="banner--inner__content">
                        <h2 class="text-center">Gallery</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->

    <!-- ==== gallery section start ==== -->
    <div class="section gallery wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row section__row align-items-center">
                <div class="col-sm-6 col-lg-4 col-xl-4 section__col">
                    <div class="gallery__thumb">
                        <div class="gallery__thumb-single">
                            <img src="{{asset('Frontend/images/gallery/1.png')}}" alt="Image">
                        </div>
                        <div class="gallery__thumb-single">
                            <img src="{{asset('Frontend/images/gallery/2.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 section__col d-none d-lg-block">
                    <div class="gallery__thumb">
                        <div class="gallery__thumb-single">
                            <img src="{{asset('Frontend/images/gallery/3.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4 section__col">
                    <div class="gallery__thumb">
                        <div class="gallery__thumb-single">
                            <img src="{{asset('Frontend/images/gallery/4.png')}}" alt="Image">
                        </div>
                        <div class="gallery__thumb-single">
                            <img src="{{asset('Frontend/images/gallery/5.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== / gallery section end ==== -->

    <!-- ==== gallery slider section start ==== -->
    <section class="gallery-slider section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__header--secondary">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="section__header--secondary__content">
                                    <h2>Horizontal scrolling</h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="section__header--secondary__cta">
                                    <div class="slider-navigation justify-content-lg-end">
                                        <button class="next-gallery cmn-button cmn-button--secondary">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </button>
                                        <button class="prev-gallery cmn-button cmn-button--secondary">
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
        <div class="gallery-slider__wrapper">
            <div class="gallery-slider__single">
                <img src="{{asset('Frontend/images/gallery/1.png')}}" alt="Gallery">
            </div>
            <div class="gallery-slider__single">
                <img src="{{asset('Frontend/images/gallery/2.png')}}" alt="Gallery">
            </div>
            <div class="gallery-slider__single">
                <img src="{{asset('Frontend/images/gallery/4.png')}}" alt="Gallery">
            </div>
            <div class="gallery-slider__single">
                <img src="{{asset('Frontend/images/gallery/5.png')}}" alt="Gallery">
            </div>
            <div class="gallery-slider__single">
                <img src="{{asset('Frontend/images/gallery/1.png')}}" alt="Gallery">
            </div>
            <div class="gallery-slider__single">
                <img src="{{asset('Frontend/images/gallery/2.png')}}" alt="Gallery">
            </div>
            <div class="gallery-slider__single">
                <img src="{{asset('Frontend/images/gallery/4.png')}}" alt="Gallery">
            </div>
            <div class="gallery-slider__single">
                <img src="{{asset('Frontend/images/gallery/5.png')}}" alt="Gallery">
            </div>
            <div class="gallery-slider__single">
                <img src="{{asset('Frontend/images/gallery/1.png')}}" alt="Gallery">
            </div>
            <div class="gallery-slider__single">
                <img src="{{asset('Frontend/images/gallery/2.png')}}" alt="Gallery">
            </div>
            <div class="gallery-slider__single">
                <img src="{{asset('Frontend/images/gallery/4.png')}}" alt="Gallery">
            </div>
            <div class="gallery-slider__single">
                <img src="{{asset('Frontend/images/gallery/5.png')}}" alt="Gallery">
            </div>
        </div>
    </section>
    <!-- ==== / gallery slider section end ==== -->

    <!-- ==== gallery popup start ==== -->
    <section class="section gallery-popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header">
                        <h2 class="section__header-title">Golf Club Video</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="gallery-popup__content wow fadeInUp" data-wow-duration="0.4s">
                        <img src="{{asset('Frontend/images/gallery-modal.png')}}" alt="Gallery">
                        <div class="play-wrapper">
                            <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                                title="Youtube Video Player" class="play-btn">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / gallery popup end ==== -->


@stop()
