@extends('layouts.master')


@section('main')

    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner--inner__content">
                        <h2>{{ __('lang.event') }}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('lang.home') }}</a></li>
                                <li class="breadcrumb-item">{{ __('lang.event') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->


    <!-- ==== event section start ==== -->
    <section class="section event wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center section__row">
                <div class="col-sm-10 col-md-6 section__col">
                    <div class="event__single">
                        <div class="event__single-thumb">
                            <a href="sign-up.html">
                                <img src="{{ asset('Frontend/images/event/one.png') }}" alt="Image" />
                            </a>
                        </div>
                        <div class="event__single-content">
                            <h5>Tên sự kiện</h5>
                            <p class="font-regular fz__18">
                                <i class="fas fa-calendar"></i> Thứ 2, 20-07-202310:00 AM
                            </p>
                            <p class="font-regular fz__18">
                                <i class="golftio-location"></i> Sunshine City, KĐT Nam Thăng Long, Từ Liêm, Hà Nội
                            </p>
                            <p class="cl__primary font-bold">
                                <i class="fas fa-ticket-alt"></i> Free
                            </p>

                            <a href="sign-up.html" data-toggle="modal" data-target="#p-event" class="cmn-button">Xem chi
                                tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 section__col">
                    <div class="event__single">
                        <div class="event__single-thumb">
                            <a href="sign-up.html">
                                <img src="{{ asset('Frontend/images/event/two.png') }}" alt="Image" />
                            </a>
                        </div>
                        <div class="event__single-content">
                            <h5>Tên sự kiện</h5>
                            <p class="font-regular fz__18">
                                <i class="fas fa-calendar"></i> Thứ 2, 20-07-202310:00 AM
                            </p>
                            <p class="font-regular fz__18">
                                <i class="golftio-location"></i> Sunshine City, KĐT Nam Thăng Long, Từ Liêm, Hà Nội
                            </p>
                            <p class="cl__primary font-bold">
                                <i class="fas fa-ticket-alt"></i> Free
                            </p>

                            <a data-toggle="modal" data-target="#p-event" class="cmn-button">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 section__col">
                    <div class="event__single">
                        <div class="event__single-thumb">
                            <a href="sign-up.html">
                                <img src="{{ asset('Frontend/images/event/three.png') }}" alt="Image" />
                            </a>
                        </div>
                        <div class="event__single-content">
                            <h5>Tên sự kiện</h5>
                            <p class="font-regular fz__18">
                                <i class="fas fa-calendar"></i> Thứ 2, 20-07-202310:00 AM
                            </p>
                            <p class="font-regular fz__18">
                                <i class="golftio-location"></i> Sunshine City, KĐT Nam Thăng Long, Từ Liêm, Hà Nội
                            </p>
                            <p class="cl__primary font-bold">
                                <i class="fas fa-ticket-alt"></i> Free
                            </p>

                            <a data-toggle="modal" data-target="#p-event" class="cmn-button">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 section__col">
                    <div class="event__single">
                        <div class="event__single-thumb">
                            <a href="sign-up.html">
                                <img src="{{ asset('Frontend/images/event/one.png') }}" alt="Image" />
                            </a>
                        </div>
                        <div class="event__single-content">
                            <h5>Tên sự kiện</h5>
                            <p class="font-regular fz__18">
                                <i class="fas fa-calendar"></i> Thứ 2, 20-07-202310:00 AM
                            </p>
                            <p class="font-regular fz__18">
                                <i class="golftio-location"></i> Sunshine City, KĐT Nam Thăng Long, Từ Liêm, Hà Nội
                            </p>
                            <p class="cl__primary font-bold">
                                <i class="fas fa-ticket-alt"></i> Free
                            </p>

                            <a data-toggle="modal" data-target="#p-event" class="cmn-button">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 section__col">
                    <div class="event__single">
                        <div class="event__single-thumb">
                            <a href="sign-up.html">
                                <img src="{{ asset('Frontend/images/event/one.png') }}" alt="Image" />
                            </a>
                        </div>
                        <div class="event__single-content">
                            <h5>Tên sự kiện</h5>
                            <p class="font-regular fz__18">
                                <i class="fas fa-calendar"></i> Thứ 2, 20-07-202310:00 AM
                            </p>
                            <p class="font-regular fz__18">
                                <i class="golftio-location"></i> Sunshine City, KĐT Nam Thăng Long, Từ Liêm, Hà Nội
                            </p>
                            <p class="cl__primary font-bold">
                                <i class="fas fa-ticket-alt"></i> Free
                            </p>

                            <a data-toggle="modal" data-target="#p-event" class="cmn-button">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 section__col">
                    <div class="event__single">
                        <div class="event__single-thumb">
                            <a href="sign-up.html">
                                <img src="{{ asset('Frontend/images/event/one.png') }}" alt="Image" />
                            </a>
                        </div>
                        <div class="event__single-content">
                            <h5>Tên sự kiện</h5>
                            <p class="font-regular fz__18">
                                <i class="fas fa-calendar"></i> Thứ 2, 20-07-202310:00 AM
                            </p>
                            <p class="font-regular fz__18">
                                <i class="golftio-location"></i> Sunshine City, KĐT Nam Thăng Long, Từ Liêm, Hà Nội
                            </p>
                            <p class="cl__primary font-bold">
                                <i class="fas fa-ticket-alt"></i> Free
                            </p>

                            <a data-toggle="modal" data-target="#p-event" class="cmn-button">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / event section end ==== -->




    <script>
        window.addEventListener('DOMContentLoaded', function(event) {

             $('#p-developing').on('show.bs.modal',e=>{
               
                $('#p-event').hide()
             })

             $('#p-developing').on('hide.bs.modal',e=>{
                
                var modal_backdrop = document.querySelector('.modal-backdrop')
                document.body.classList.remove('modal-open')
                document.body.removeChild(modal_backdrop)
             })
        });
    </script>

@stop()
