<div class="title text-center mt-5">
    <h2>What's New in Laravel?</h2>
    <span>Don't fall behind on the latest and greatest that Laravel has to offer. Learn the key features of each new
        point release.</span>
</div>


<div class="bg_grad_redblue container b_rad15 mt-5">
    <div class="bg_framework">
        <div class="row w-75 justify-content-end ms-auto pt-5 pb-5">

            @foreach ($laravelnewDB as $index => $laravelDB)

            <div class="d-flex col-6 align-items-center p-3">

                <div class="thumb w-50 bg_transparent b_rad15 me-3 ">
                    <img class="rounded-circle w-100" src="{{$laravelDB['thumb']}}" alt="{{$laravelDB['title']}}">
                </div>

                <div class="textContainer text-white">
                    <div class="title ">
                        {{\Illuminate\Support\Str::limit($laravelDB['title'], 20, $end='...') }}
                    </div>

                    <div class="desc fs_7 text_gray mt-2">
                        {{\Illuminate\Support\Str::limit($laravelDB['desc'], 86, $end='...') }}
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>