<div class="col-sm-10 col-md-8 col-lg-6 col-xl-4 section__col">
    <div class="sidebar wow fadeInUp" data-wow-duration="0.4s">
        <div class="sidebar__single">
            <h5 class="cl__primary">{{__('lang.search')}}</h5>
            <hr>
            <form action="{{ url('/api/search') }}" method="get">
                <div class="search_form">
                    <input type="text" name="search" id="post-Search" placeholder="Search">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                </div>
            </form>
        </div>

        <div class="sidebar__single">
            <h5 class="cl__primary">{{__('lang.blog_latest')}}</h5>
            <hr>
            <div class="sidebar__item">
                @foreach ($posts as $post)
                    <div class="sidebar__item-single">
                        <div class="sidebar__item-thumb">
                            <a href="{{ url('blog-detail/' . $post->id) }}" title="Read More">
                                <img src="{{ $post->image }}" alt="Blog">
                            </a>
                        </div>
                        <div class="sidebar__item-content">
                            <h6>
                                <a class="font-regular" href="{{ url('blog-detail/' . $post->id) }}"
                                    title="Read More">{{ substr($post->post_title, 0, 35) . '...' }}</a>
                            </h6>
                            <p class="seocndary-text">{{ date('d-m-Y', strtotime($post->created_at)) }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="sidebar__single">
            <h5 class="cl__primary">Tags</h5>
            <hr>
            <div class="sidebar__tags">
                <a href="blog.html" class="cmn-button cmn-button--secondary" title="Blog">New</a>
                <a href="blog.html" class="cmn-button cmn-button--secondary" title="Blog">Training</a>
                <a href="blog.html" class="cmn-button cmn-button--secondary" title="Blog">2023</a>
                <a href="blog.html" class="cmn-button cmn-button--secondary" title="Blog">Facility</a>
                <a href="blog.html" class="cmn-button cmn-button--secondary" title="Blog">Gallery</a>
                <a href="blog.html" class="cmn-button cmn-button--secondary" title="Blog">Shop</a>
            </div>
        </div>
        <div class="sidebar__single">
            <h5>Follow Our Journey</h5>
            <hr>
            <div class="social justify-content-start">
                <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-square-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</div>
