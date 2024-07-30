<section class="hero-area hero-slider-4 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                <div class="sb-slick-slider"
                    data-slick-setting='{
                                                        "autoplay": true,
                                                        "autoplaySpeed": 8000,
                                                        "slidesToShow": 1,
                                                        "dots":true
                                                        }'>
                    @foreach ($sliders as $slider)
                        <div class="single-slide bg-image bg-overlay--dark" data-bg="{{ asset($slider->image_url) }}">
                            <div class="home-content text-center">
                                <div class="row justify-content-end">
                                    <div class="col-lg-8">
                                        <h1 class="v2">{{ $slider->title }}</h1>
                                        <h2>{{ $slider->desc }}</h2>
                                        <a href={{ $slider->link_url }} class="btn btn--yellow">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
