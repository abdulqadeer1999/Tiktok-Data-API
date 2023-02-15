        {{-- <iframe src="{{ $val['webVideoUrl'] }}" width="540" height="310"></iframe> --}}
        {{-- @foreach($data as $val)

            <video width="320" height="240" controls>
                    <source src="{{ $val['webVideoUrl'] }}" type="video/mp4">
            </video>
        @endforeach --}}

        {{-- hadi work --}}
        {{-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-313c1852-9089-470c-a7c2-57d5fc69b179"></div> --}}
        {{-- hadi work --}}

        {{-- my work --}}
        @foreach($data as $val)
            @php
                $uriSegments = explode("/", parse_url($val['webVideoUrl'], PHP_URL_PATH));

                $lastUriSegment = array_pop($uriSegments);
            @endphp

            <blockquote class="tiktok-embed" cite="{{ $val['webVideoUrl'] }}"
                        data-video-id="{{$lastUriSegment}}">
                        <section>
                            <a title="@ladypanda0" href="https://www.tiktok.com/@ladypanda0?refer=embed"></a>
                            <a title="fyp" href="https://www.tiktok.com/tag/fyp?refer=embed"></a>
                            <a title="foryou" href="https://www.tiktok.com/tag/foryou?refer=embed"></a>

                        </section>
            </blockquote>
       @endforeach
      <script async src="https://www.tiktok.com/embed.js"></script>
     {{-- my work --}}

