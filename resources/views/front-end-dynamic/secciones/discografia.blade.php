<section id="portfolio" class="section p-b-20px">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <div class="section-title text-center m-b-80px">
                    {{--                    <h2>Discografía</h2>--}}
                    <p>@lang('frontend.strings.discography')</p>
                    {{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>--}}
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- Container -->

    <div class="portfolio-content">
        <ul class="portfolio-cols portfolio-cols-3">

            @foreach($artist->albums as $album)
                {{ info($album->getMainImagePath()) }}
                <li class="portfolio-item illustration">
                    <div class="portfolio-col portfolio-hover-01">
                        <a href="#">
                            <img src="{{ \Storage::disk('albums')->url($album->getMainImagePath()) }}" title="" alt="">
                        </a>


                        <div class="hover text-center theme-bg">
                            <div class="hover-middle">
                                <p class="font-w-700 theme-1st">{{ $album->name }}</p>
                                <div class="action-btn">
                                    {{-- YT LINKS --}}
                                    @foreach($album->tracks as $track)
                                        @foreach($track->getYoutubeExternalUrls() as $yt_external_url)
                                            <a href="{{ $yt_external_url->url }}"
                                               class="popup-video theme-color">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        @endforeach
                                    @endforeach

                                    {{-- GALERY --}}
{{--                                    <a class="lightbox-gallery theme-color"--}}
{{--                                       href="{{ \Storage::disk('albums')->url($album->getMainImagePath()) }}"--}}
{{--                                       title="{{ $album->name }}">--}}
{{--                                        <i class="fas fa-expand"></i>--}}
{{--                                    </a>--}}
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>


