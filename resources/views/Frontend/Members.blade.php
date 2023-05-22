@extends('layouts.master')



@section('main')

    {{-- {{dd($posts)}} --}}

    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner--inner__content">
                        <h2>{{ __('lang.member') }}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('lang.home') }}</a></li>
                                <li class="breadcrumb-item">{{ __('lang.member') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->


    <!-- ==== team section start ==== -->
    <section class="section team wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row">


                @foreach ($members as $index => $member)
                    <div class="col-lg-4">
                        <div class="team__slider-card">
                            <div class="team__slider-card__thumb">
                                <img src="{{ $member->image }}" alt="Team" />
                            </div>
                            <div class="team__slider-card__content">
                                <h5>{{ $member->post_title }}</h5>
                                <p class="secondary-text">Golfer</p>
                                <div class="social">
                                    <a href="https://www.facebook.com/">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-id="{{ $member }}"
                                        data-target="#modelId">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($members as $index => $member)
                    <div class="col-lg-4">
                        <div class="team__slider-card">
                            <div class="team__slider-card__thumb">
                                <img src="{{ $member->image }}" alt="Team" />
                            </div>
                            <div class="team__slider-card__content">
                                <h5>{{ $member->post_title }}</h5>
                                <p class="secondary-text">Golfer</p>
                                <div class="social">
                                    <a href="https://www.facebook.com/">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-id="{{ $member }}"
                                        data-target="#modelId">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($members as $index => $member)
                    <div class="col-lg-4">
                        <div class="team__slider-card">
                            <div class="team__slider-card__thumb">
                                <img src="{{ $member->image }}" alt="Team" />
                            </div>
                            <div class="team__slider-card__content">
                                <h5>{{ $member->post_title }}</h5>
                                <p class="secondary-text">Golfer</p>
                                <div class="social">
                                    <a href="https://www.facebook.com/">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-id="{{ $member }}"
                                        data-target="#modelId">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($members as $index => $member)
                    <div class="col-lg-4">
                        <div class="team__slider-card">
                            <div class="team__slider-card__thumb">
                                <img src="{{ $member->image }}" alt="Team" />
                            </div>
                            <div class="team__slider-card__content">
                                <h5>{{ $member->post_title }}</h5>
                                <p class="secondary-text">Golfer</p>
                                <div class="social">
                                    <a href="https://www.facebook.com/">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-id="{{ $member }}"
                                        data-target="#modelId">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($members as $index => $member)
                    <div class="col-lg-4">
                        <div class="team__slider-card">
                            <div class="team__slider-card__thumb">
                                <img src="{{ $member->image }}" alt="Team" />
                            </div>
                            <div class="team__slider-card__content">
                                <h5>{{ $member->post_title }}</h5>
                                <p class="secondary-text">Golfer</p>
                                <div class="social">
                                    <a href="https://www.facebook.com/">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-id="{{ $member }}"
                                        data-target="#modelId">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-4">
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
                </div>
                <div class="col-lg-4">
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
                </div>
                <div class="col-lg-4">
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
                </div>

            </div>
        </div>
    </section>
    <!-- ==== / team section end ==== -->


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            $('#modelId').on('show.bs.modal', event => {
                var button = $(event.relatedTarget);
                var id = button.data('id')
                if (id) {

                    var modal = $('#modelId')
                    var modal_body = modal.find(".modal-body");
                    modal_body[0].innerHTML = `
                         <div class="container-fluid">
                                <div class="row">
        
        
                                    <div class="col-md-6">
        
                                        <div class="card-image text-center">
                                            <img class="w-75" src="${id.image}"
                                                alt="Image">
                                        </div>
        
                                    </div>
                                    <div class="col-md-6">
        
                                        <div class="member-info">
                                            <div class="member-info__header">
                                                <h5 class="fz__24 font-regular member-info__name">${id.post_title}</h5>
                                                <p class="fz__24 font-regular member-info__text">Foundation</p>
                                            </div>
                                            <div class="member-info__desc">
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus
                                                    nostrum
                                                    similique delectus laboriosam eius ad maiores deserunt. Ipsa natus, amet
                                                    nobis
                                                    vitae repellendus laboriosam totam explicabo? Cupiditate dolor asperiores
                                                    dolores.</p>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, nulla.
                                                    Suscipit tenetur deserunt adipisci rem dignissimos, quas dolorum ducimus aut
                                                    velit numquam obcaecati, commodi nobis cupiditate. Molestias voluptatibus ut
                                                    enim.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                    `;
                }

            });

        });
    </script>

@stop()
