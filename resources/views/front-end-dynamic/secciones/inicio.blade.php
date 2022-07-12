<section id="home" class="home-banner" style="background-image: url('{{ \Storage::disk('artists')->url($artist->getProfileMediaPath()) }}');">
    <div class="container">
        <div class="row justify-content-center text-center full-screen">
            {{--            <div class="col-md-8 col-lg-7">--}}
            {{--                    TODO add external ulrs to artist and get from youtube type --}}
            <a href="https://www.youtube.com/results?search_query={{ $artist->name }}" class="popup-video"
               style="position: absolute;
                        left: 0;
                        right: 0;
                        bottom: 260px;
                        height: 25px;
                        z-index: 2;"
            >
{{--                    TODO hacer imagen más pequeña, intentar ponerle una animacion--}}
                <img src="front-end-dynamic/img/icon-play.png" title="" alt=""/>
            </a>
            {{--            </div> <!-- col -->--}}
        </div> <!-- row -->
    </div><!-- container -->

    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center full-screen">--}}
    {{--            <div class="col-md-10">--}}
    {{--                <div class="home-text-center text-center">--}}
    {{--                    <h1 class="font-alt">Shark AGENCY</h1>--}}
    {{--                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
    {{--                        labore et dolore magna aliqua</h3>--}}
    {{--                    <div class="btn-bar">--}}
    {{--                        <a href="#" class="btn btn-theme">Learn More</a>--}}
    {{--                        <a href="#contact" class="btn btn-dark">Buy Now</a>--}}
    {{--                    </div>--}}
    {{--                </div> <!-- home-text-center -->--}}
    {{--            </div> <!-- col -->--}}
    {{--        </div> <!-- row -->--}}
    {{--    </div><!-- container -->--}}

    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center text-center">--}}
    {{--            <div class="col-md-8 col-lg-7">--}}
    {{--                <a href="https://www.youtube.com/watch?v=-D_yJcxMoqY" class="popup-video">--}}
    {{--                    <img src="front-end-dynamic/img/icon-play.png" title="" alt=""/>--}}
    {{--                </a>--}}
    {{--                --}}{{--                <h4 class="font-alt">Unique. Powerful. Creative.</h4>--}}
    {{--                --}}{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
    {{--                --}}{{--                    labore et dolore magna aliqua</p>--}}
    {{--            </div> <!-- col -->--}}
    {{--        </div> <!-- row -->--}}
    {{--    </div> <!-- container -->--}}

    <a href="" data-scroll="smooth" class="mouse-icon hidden-sm"><span class="wheel"></span></a>
</section>
