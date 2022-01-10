<div class="title text-center mt-5">
    <h2>Trending Series</h2>
    <span>Here's what your peers are binging.</span>
</div>

<div class="bg_grad_dark container b_rad15 mt-5">
    <div class="row w-75 justify-content-end ms-auto pt-5 pb-5">

        @foreach ($trendseriesDB as $index => $trendserieDB)

        <div class="d-flex col-6 align-items-center p-3">

            <div class="thumb w-50 bg_transparent b_rad15 me-3 ">
                <img class="rounded-circle w-100" src="{{$trendserieDB['thumb']}}" alt="{{$trendserieDB['title']}}">
            </div>

            <div class="textContainer text-white">
                <div class="title ">
                    {{\Illuminate\Support\Str::limit($trendserieDB['title'], 20, $end='...') }}
                </div>

                <div class="desc fs_7 text_gray mt-2">
                    {{\Illuminate\Support\Str::limit($trendserieDB['desc'], 86, $end='...') }}
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>