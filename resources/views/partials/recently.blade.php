<div class="title text-center">
    <h2>Recently Updated</h2>
    <span>Curious what's new at Laracasts? The following series have been recently updated.</span>
</div>

<?php

$desc = "So you've mastered the basics of building an SPA with Laravel and Inertia? Nice work, but of course
        there's always more to learn. In this series, we'll review a variety of useful tips and techniques to
        simplify and clean up your single page applications. This includes everything from creating webpack
        aliases, to wrapping third party APIs, to leveraging Laravel's API resources. So what do you think?
        Ready to get started?"
?>

<div class="myCardSingle mt-3 p-4 bg-white inertia">

    <div class="btn badge rounded-pill bg-danger p-2 ps-4 pe-4">
        FRAMEWORKS
    </div>

    <h2>Inertia and SPA Techniques</h2>

    <div class="desc">
        {{\Illuminate\Support\Str::limit($desc, 300, $end='...') }}
    </div>

    <div class="courseStats d-flex mt-3 text-secondary align-items-center">

        <div class="diff me-3 d-flex align-items-center">
            <i class="fas fa-ellipsis-v fa-2x me-1"></i>
            <div>
                Advanced
                <br>
                difficulty
            </div>
        </div>

        <div class="lessons me-3 d-flex align-items-center">
            <i class="fas fa-book me-1"></i>
            <div>
                3 lessons
            </div>
        </div>

        <div class="lenght d-flex align-items-center">
            <i class="fas fa-clock me-1"></i>
            <div>
                20m
            </div>
        </div>

    </div>



    <div class="btn mt-3 mb-3 rounded-pill bg_gray p-2 ps-4 pe-4">
        <i class="far fa-play-circle"></i>
        Start Series
    </div>
</div>

<?php

$desc = "GraphQL is often looked at as the successor to REST APIs. It provides a powerful query language and allows you
        to make requests for exactly the information you want, nothing more and nothing less.
        Many services now offer GraphQL APIs making it easier for users to interact with their data. With its powerful
        type system, the syntax is intuitive, and error messages provide helpful feedback. In this series, we’ll take a
        look at using GraphQL within the Laravel and Vue ecosystem. We’ll build out the obligatory blog as a full-stack
        GraphQL application. In the backend we’ll make use of the popular lighthouse package which allows us to define
        our GraphQL schema. In the frontend, we’ll leverage Vue Apollo to allow us to communicate with the backend and
        display the data in the browser."
?>

<div class="myCardSingle mt-3 p-4 bg-white graphQL">

    <div class="btn badge rounded-pill pill_indigo p-2 ps-4 pe-4">
        TOOLING
    </div>

    <h2>GraphQL with Laravel and Vue</h2>

    <div class="desc">
        {{\Illuminate\Support\Str::limit($desc, 300, $end='...') }}

    </div>

    <div class="courseStats d-flex mt-3 text-secondary align-items-center">

        <div class="diff me-3 d-flex align-items-center">
            <i class="fas fa-ellipsis-v fa-2x me-1"></i>
            <div>
                Advanced
                <br>
                difficulty
            </div>
        </div>

        <div class="lessons me-3 d-flex align-items-center">
            <i class="fas fa-book me-1"></i>
            <div>
                16 lessons
            </div>
        </div>

        <div class="lenght d-flex align-items-center">
            <i class="fas fa-clock me-1"></i>
            <div>
                2h 56m
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
            More Recently Updated Series
        </div>
        @foreach ($seriesDB as $index => $serieDB)

        <div class="col-2 myCol b_rad15 text-center text-white">

            <div class="thumb">
                <img src="{{$serieDB['thumb']}}" alt="{{$serieDB['title']}}">
            </div>

            <div class="title ">
                {{\Illuminate\Support\Str::limit($serieDB['title'], 20, $end='...') }}
            </div>

            <div class="date fs_7 text_gray">
                {{$serieDB['date']}}
            </div>

            <div class="desc fs_7 text_gray mt-2">
                {{\Illuminate\Support\Str::limit($serieDB['desc'], 86, $end='...') }}
            </div>

        </div>
        @endforeach
    </div>
</div>