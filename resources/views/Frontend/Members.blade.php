@extends('layouts.master')



@section('main')

    {{-- {{dd($posts)}} --}}

    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="banner--inner__content">
                        <h2 class="text-center">Members</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->

    <!-- ==== training section start ==== -->
    <section class="section training training--main wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center section__row">
                @foreach ($members as $member)
                    <div class="col-md-6 col-xl-4 section__col">
                        <div class="training__slider-single">
                            <div class="training__slider-single__thumb">
                                <a href="{{url('member-detail/'. $member->id)}}"><img src="{{ $member->image }}" alt="Image"></a>
                                <div class="training__slider-single__thumb-small">
                                    <i class="golftio-shot-down"></i>
                                </div>
                            </div>
                            <div class="training__slider-single__content">
                                <h5><a href="{{url('member-detail/'. $member->id)}}">{{$member->post_title}}</a></h5>
                                <p class="secondary-text">
                                   <?=$member->summary?>
                                </p>
                                <a href="{{url('member-detail/'. $member->id)}}" class="cmn-button cmn-button--secondary">View more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-6 col-xl-4 section__col">
                    <div class="training__slider-single">
                        <div class="training__slider-single__thumb">
                            <a href="training-details.html"><img src="{{ asset('Frontend/images/training/two.png') }}"
                                    alt="Image"></a>
                            <div class="training__slider-single__thumb-small">
                                <i class="golftio-shot-great-upper"></i>
                            </div>
                        </div>
                        <div class="training__slider-single__content">
                            <h5><a href="training-details.html">Body Rotation</a></h5>
                            <p class="secondary-text">
                                We teach you how to get the right body position in the
                                strokes. You can contact us for any question you may have
                                about this course.
                            </p>
                            <a href="training-details.html" class="cmn-button cmn-button--secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 section__col">
                    <div class="training__slider-single">
                        <div class="training__slider-single__thumb">
                            <a href="training-details.html"><img src="{{ asset('Frontend/images/training/grip.png') }}"
                                    alt="Image"></a>
                            <div class="training__slider-single__thumb-small">
                                <i class="golftio-shot-upper"></i>
                            </div>
                        </div>
                        <div class="training__slider-single__content">
                            <h5><a href="training-details.html">Correct Grip</a></h5>
                            <p class="secondary-text">
                                We teach you how to get the right body position in the
                                strokes. You can contact us for any question you may have
                                about this course.
                            </p>
                            <a href="training-details.html" class="cmn-button cmn-button--secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 section__col">
                    <div class="training__slider-single">
                        <div class="training__slider-single__thumb">
                            <a href="training-details.html"><img src="{{ asset('Frontend/images/training/three.png') }}"
                                    alt="Image"></a>
                            <div class="training__slider-single__thumb-small">
                                <i class="golftio-shot-upper"></i>
                            </div>
                        </div>
                        <div class="training__slider-single__content">
                            <h5><a href="training-details.html">Chip Shot</a></h5>
                            <p class="secondary-text">
                                We teach you how to get the right body position in the
                                strokes. You can contact us for any question you may have
                                about this course.
                            </p>
                            <a href="training-details.html" class="cmn-button cmn-button--secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 section__col">
                    <div class="training__slider-single">
                        <div class="training__slider-single__thumb">
                            <a href="training-details.html"><img src="{{ asset('Frontend/images/training/shot.png') }}"
                                    alt="Image"></a>
                            <div class="training__slider-single__thumb-small">
                                <i class="golftio-shot-great-upper"></i>
                            </div>
                        </div>
                        <div class="training__slider-single__content">
                            <h5><a href="training-details.html">Putt Shot</a></h5>
                            <p class="secondary-text">
                                We teach you how to get the right body position in the
                                strokes. You can contact us for any question you may have
                                about this course.
                            </p>
                            <a href="training-details.html" class="cmn-button cmn-button--secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 section__col">
                    <div class="training__slider-single">
                        <div class="training__slider-single__thumb">
                            <a href="training-details.html"><img src="{{ asset('Frontend/images/training/types.png') }}"
                                    alt="Image"></a>
                            <div class="training__slider-single__thumb-small">
                                <i class="golftio-shot-upper"></i>
                            </div>
                        </div>
                        <div class="training__slider-single__content">
                            <h5><a href="training-details.html">Grip Types</a></h5>
                            <p class="secondary-text">
                                We teach you how to get the right body position in the
                                strokes. You can contact us for any question you may have
                                about this course.
                            </p>
                            <a href="training-details.html" class="cmn-button cmn-button--secondary">View more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 justify-content-center section__cta">
                    <ul class="pagination">
                        <li>
                            <button><i class="fa-solid fa-angle-left"></i></button>
                        </li>
                        <li><a href="training.html">1</a></li>
                        <li><a href="training.html">2</a></li>
                        <li><a href="training.html">3</a></li>
                        <li><a href="training.html">...</a></li>
                        <li>
                            <button><i class="fa-solid fa-angle-right"></i></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / training section end ==== -->

    <!-- ==== join club section start ==== -->
    <section class="join--tertiary bg-img" data-background="{{ asset('Frontend/images/join-bg-three.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-2 col-xl-6 offset-xl-6">
                    <div class="section__content">
                        <h5 class="section__content-sub-title">Join Club</h5>
                        <h2 class="section__content-title">Join our club</h2>
                        <div class="join-club__form">
                            <form action="#" method="post" name="joinClubForm">
                                <div class="input-group">
                                    <div class="input-single">
                                        <input type="text" name="user-name" id="userName" required
                                            placeholder="Your Name *">
                                    </div>
                                    <div class="input-single">
                                        <input type="text" name="user-phone" id="userPhone" required
                                            placeholder="Your Phone *">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-single">
                                        <input type="email" name="user-email" id="userEmail" required
                                            placeholder="Your Email *">
                                    </div>
                                    <div class="input-single">
                                        <input type="text" name="user-url" id="userUrl" placeholder="Website URL ">
                                    </div>
                                </div>
                                <div class="input-single">
                                    <textarea name="user-message" id="userMessage" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="cmn-button">Submit Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / join club section end ==== -->

    <!-- ==== sponsor section start ==== -->
    <div class="sponsor wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sponsor__inner">
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/one.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/two.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/three.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/four.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/five.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/six.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/one.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/one.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/two.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/three.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/four.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/five.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/six.png') }}" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="{{ url('Frontend/images/sponsor/one.png') }}" alt="Sponsor">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== / sponsor section end ==== -->

@stop()
