<div class="colorlib-about">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6">
                <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url({{ is_file($about->about_image)?$about->about_image:'pu/wrapa.jpg' }}) ;">
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="about-desc">
                    <span class="heading-meta">{{ $about->about_title }}</span>
                    <h2 class="colorlib-heading">{{ $about->about_title2 }}</h2>
                    <p>
                        {!! $about->about_info !!}
                    </p>

                </div>
                <div class="row padding">
                    <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                        <a href="#" class="steps active">
                            <p class="icon"><span><i class="icon-check"></i></span></p>
                            <h3>{!! $about->key1 !!}</h3>
                        </a>
                    </div>
                    <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                        <a href="#" class="steps">
                            <p class="icon"><span><i class="icon-check"></i></span></p>
                            <h3>{!! $about->key2 !!}</h3>
                        </a>
                    </div>
                    <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                        <a href="#" class="steps">
                            <p class="icon"><span><i class="icon-check"></i></span></p>
                            <h3>{!! $about->key3 !!}</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>