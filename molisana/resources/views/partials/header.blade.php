<header id="site_header">

    <div class="logo text-center">
        <img src="{{asset ('img/logo.png')}}" alt="">
    </div>
    <nav class="nav justify-content-center">

        <!-- This routes MUST be added as name value in Web.php -->
        <a class="nav-link" href="{{route('welcome')}}">Home</a>
        <a class="nav-link" href="{{route('products')}}">Products</a>
        <a class="nav-link" href="{{route('news')}}">News</a>
    </nav>


</header>