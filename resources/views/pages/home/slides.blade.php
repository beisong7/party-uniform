<aside id="colorlib-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            @foreach($slides as $slide)
                <li style="background-image: url({{$slide->image}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1>{{ $slide->title }}</h1>
                                        <h2>{{ $slide->info }}</h2>
                                        <p><a href="#" class="btn btn-primary btn-learn">{{ $slide->btn_text }} <i class="icon-arrow-right3"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</aside>