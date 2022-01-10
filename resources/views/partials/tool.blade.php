<div>
    <h2>Learn a Tool</h2>
</div>

<?php

$desc = "The new CSS Grid spec offers unprecedented control when it comes to constructing layouts and components. In fact, this level of power and flexibility has never been available before now. That being said, there's a slight learning curve.

Come along, as I teach you everything you need to know in bite-sized episodes. You'll be constructing your own custom grids in no time."
?>

<div class="myCardSingle mt-3 p-4 bg-white cssGrid">

    <div class="btn badge rounded-pill bg-warning p-2 ps-4 pe-4">
        LANGUAGES
    </div>

    <h2>Inertia and SPA Techniques</h2>

    <div class="desc">
        {{\Illuminate\Support\Str::limit($desc, 300, $end='...') }}
    </div>

    <div class="courseStats d-flex mt-3 text-secondary align-items-center">

        <div class="diff me-3 d-flex align-items-center">
            <i class="fas fa-ellipsis-v fa-2x me-1"></i>
            <div>
                Intermediate
                <br>
                difficulty
            </div>
        </div>

        <div class="lessons me-3 d-flex align-items-center">
            <i class="fas fa-book me-1"></i>
            <div>
                6 lessons
            </div>
        </div>

        <div class="lenght d-flex align-items-center">
            <i class="fas fa-clock me-1"></i>
            <div>
                37m
            </div>
        </div>

    </div>



    <div class="btn mt-3 mb-3 rounded-pill bg_gray p-2 ps-4 pe-4">
        <i class="far fa-play-circle"></i>
        Start Series
    </div>
</div>


<div class="bg_grad_dark container b_rad15 mt-5">
    <div class="row flex-row">

        <div class="title text-center text-white m-4">
            Don't Forget About These
        </div>
        @foreach ($moreseriesDB as $index => $moreserieDB)

        <div class="col-2 myCol b_rad15 text-center text-white">

            <div class="thumb">
                <img src="{{$moreserieDB['thumb']}}" alt="{{$moreserieDB['title']}}">
            </div>

            <div class="title ">
                {{\Illuminate\Support\Str::limit($moreserieDB['title'], 20, $end='...') }}
            </div>

            <div class="date fs_7 text_gray">
                {{$moreserieDB['date']}}
            </div>

            <div class="desc fs_7 text_gray mt-2">
                {{\Illuminate\Support\Str::limit($moreserieDB['desc'], 86, $end='...') }}
            </div>

        </div>
        @endforeach
    </div>
</div>