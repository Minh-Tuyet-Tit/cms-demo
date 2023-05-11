@extends('layouts.master')

@section('main')

    
    <!-- ==== / preloader end ==== -->

    <!-- ==== error section start ==== -->
    <section class="section error wow fadeInUp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-xl-8">
                    <div class="error__inner">
                        <img src="{{asset('Frontend/images/error.png')}}" alt="Error">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="error__inner-content text-center">
                        <h2>Oops! Page Not Found</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <div class="section__cta">
                            <a href="{{url('/')}}" class="cmn-button">Back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop()
