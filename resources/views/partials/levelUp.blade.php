<div class="title text-center mt-5">
    <h2>Level Up Your Testing</h2>
    <span>Imagine a workflow that alerts you each time a particular refactor was unsuccessful. How much more might you
        get done with that level of confidence?</span>
</div>


<div class="bg_grad_greenblue container b_rad15 mt-5">
    <div class="bg_testing">
        <div class="row w-75 justify-content-end ms-auto pt-5 pb-5">

            @foreach ($levelupDB as $index => $levelDB)

            <div class="d-flex col-6 align-items-center p-3">

                <div class="thumb w-50 bg_transparent b_rad15 me-3 ">
                    <img class="rounded-circle w-100" src="{{$levelDB['thumb']}}" alt="{{$levelDB['title']}}">
                </div>

                <div class="textContainer text-white">
                    <div class="title ">
                        {{\Illuminate\Support\Str::limit($levelDB['title'], 20, $end='...') }}
                    </div>

                    <div class="desc fs_7 text_gray mt-2">
                        {{\Illuminate\Support\Str::limit($levelDB['desc'], 86, $end='...') }}
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>