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
                        <div class="hover">
                            <a href="{{ asset('Frontend/images/album-detail/1.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="gallery__img">
                                <img src="{{ asset('Frontend/images/album-detail/2.png') }}" alt="">
                                <div class="hover">
                                    <a href="{{ asset('Frontend/images/album-detail/2.png') }}">

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="gallery__img">
                                <img src="{{ asset('Frontend/images/album-detail/3.png') }}" alt="">
                                <div class="hover">
                                    <a href="{{ asset('Frontend/images/album-detail/3.png') }}">

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="gallery__img">
                                <img src="{{ asset('Frontend/images/album-detail/4.png') }}" alt="">
                                <div class="hover">
                                    <a href="{{ asset('Frontend/images/album-detail/4.png') }}">

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="gallery__img">
                                <img src="{{ asset('Frontend/images/album-detail/5.png') }}" alt="">
                                <div class="hover">
                                    <a href="{{ asset('Frontend/images/album-detail/5.png') }}">

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/6.png') }}" alt="">
                        <div class="hover">
                            <a href="{{ asset('Frontend/images/album-detail/6.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/7.png') }}" alt="">
                        <div class="hover">
                            <a href="{{ asset('Frontend/images/album-detail/7.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/8.png') }}" alt="">
                        <div class="hover">
                            <a href="{{ asset('Frontend/images/album-detail/8.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/9.png') }}" alt="">
                        <div class="hover">
                            <a href="{{ asset('Frontend/images/album-detail/9.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/10.png') }}" alt="">
                        <div class="hover">
                            <a href="{{ asset('Frontend/images/album-detail/10.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/11.png') }}" alt="">
                        <div class="hover">
                            <a href="{{ asset('Frontend/images/album-detail/11.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/12.png') }}" alt="">
                        <div class="hover">
                            <a href="{{ asset('Frontend/images/album-detail/12.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery__img">
                        <img src="{{ asset('Frontend/images/album-detail/13.png') }}" alt="">
                        <div class="hover">
                            <a href="{{ asset('Frontend/images/album-detail/13.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== / gallery section end ==== -->


    <script>
        //  gallery show

        let currIndex = 0;

        function createHTML(urlImage) {
            let modal = ` <div class="my-modal" onClick = closeModal>
            <div class="modal__content" onClick=next()>
                <img src="${urlImage}" />
            </div>
            <div class="modal__control">
                <button class="btn-pre" onClick=pre()>
                    <i class="fas fa-angle-left"></i>
                </button>
                <button class="btn-next" onClick = next()>
                    <i class="fas fa-angle-right"></i>
                </button>
            </div>
        </div>`;

            return modal;
        }

        function closeModal() {
            var modal = document.querySelector('.my-modal');
            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === e.currentTarget) {
                        render(false);
                    }
                });
            }
        }

        let modal1 = document.createElement('div');

        function render(render, html = '') {
            if (render) {
                modal1.classList.add('new-Modal');
                modal1.innerHTML = html;
                document.body.appendChild(modal1);
            } else {
                let modall = document.querySelector('.new-Modal');
                document.body.removeChild(modall);
                document.removeEventListener('keydown', keyDown, false);
            }
        }

        function next() {
            currIndex++;
            if (currIndex > listBtn.length - 1) {
                currIndex = 0;
            }
            render(true, createHTML(listBtn[currIndex].href));
            closeModal();
        }

        function pre() {
            currIndex--;
            if (currIndex < 0) {
                currIndex = listBtn.length - 1;
            }
            render(true, createHTML(listBtn[currIndex].href));
            closeModal();
        }

        var listBtn = document.querySelectorAll('.gallery__img  a');
        console.log(listBtn);

        listBtn.forEach((btn, index) => {
            btn.addEventListener('click', (e) => {
                currIndex = index;
                e.preventDefault();
                if (btn.href) {
                    render(true, createHTML(btn.href));
                    closeModal();
                    document.addEventListener('keydown', keyDown, false);
                } else return;
            });
        });

        function keyDown(e) {
            if (e.key === 'ArrowRight') {
                next();
            } else if (e.key === 'ArrowLeft') {
                pre();
            }
        }
    </script>


@stop()
