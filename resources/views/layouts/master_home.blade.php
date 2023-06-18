<html>
<head>

    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="شرکت طراحی سایت و گرافیک گرافساز"/>
    <meta name=”robots” content="index, follow">
    <meta name=”keywords” content=”گرافساز،برنامه_نویسی،گرافیک،طراحی_سایت”>
    <title>{{ config('app.name', 'Graphsaz') }}</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/graphsaz_home.css') }}" rel="stylesheet">
    <!-- Styles -->
    <script src="{{ asset('js/java.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

<header>

    <nav class="navbar navbar-expand-lg nav-color fixed-top">
        <!-- Image and text -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"><img src="img/ham.png" width="30"></span>
        </button>
        <form class="form-inline my-2 my-lg-0"
              action="{{ route('search') }}" method="GET">
            <input class="form-control mr-sm-2 search-br" name="search" type="search" placeholder="عنوان مورد نظر را وارد کنید"
                   aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0 home-btn" type="submit">جستجو</button>
        </form>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="dropdown nav-item nav-drop">
                    <a class="dropdown-toggle li-drop" href="#" role="button" id="dropdownMenu"
                       data-toggle="dropdown" data-target="#Navbar-new" aria-haspopup="true" aria-expanded="false">
                        دسته بندی ها
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu" id="navbar-new" data-toggle="collapse">
                        @foreach($categories as $category)
                            <a class="dropdown-item" href="/post/{{ $category->title }}">{{ $category->title }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-co" href="/article">کتابخانه مطالب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-co" href="/gallery">گالری</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-co" href="/package">پکیج ها</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link link-co" href="/">خانه<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <nav class="navbar">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('img/nuno_white.png') }}" width="30" height="30"
                         class="d-inline-block align-top  brand-nav"
                         alt="">
                </a>
            </nav>

        </div>
    </nav>

</header>


@yield('content')


<footer class="text-white" style="background-color: #f1f1f1;">


    <div class="mt-5 pt-5 pb-5 footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xs-12 about-company">
                    <h2>گرافساز</h2>
                    <p class="pr-5 text-white-50 pd-fo">تیم طراحی گرافساز با طراحان و دیزاینر های مجرب تجربه ای تازه را
                        در زمینه طراحی گرافیکی برای شما به
                        ارمغان میاورد. تمایزات ما فقط در قیمت نیست کلید کار ما کیفیت است. </p>
                    <img src="{{ asset('img/nuno_white.png') }}">
                </div>
                <div class="col-lg-3 col-xs-12 links link-d">
                    <h4 class="mt-lg-0 mt-sm-3">مبانی سایت</h4>
                    <ul class="m-0 p-0">
                        @foreach($categories as $category)
                            <li><a class="footer-link" href="/post/{{ $category->title }}">{{$category->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 location">
                    <h4 class="mt-lg-0 mt-sm-4">Contact Us</h4>
                    <p>با ما در ارتباط باشید</p>
                    <p class="mb-0"><i class="fa fa-phone mr-3"></i> (+98) 930-311-4784</p>
                    <p><i class="fa fa-envelope-o mr-3"></i> Graphsaz.co@gmail.com</p>
                    <p><i class="fa fa-instagram mr-3"></i> Graphsaz.co</p>
{{--                    <a href="#"><img src="{{ asset('img/4.png') }}" width="30"></a>--}}
                </div>
            </div>
            <div class="row mt-5">
                <div class="col copyright">
                    <p class=""><small class="text-white-50">© 2021. All Rights Reserved.</small></p>
                </div>
            </div>
        </div>
    </div>


</footer>


</body>


</html>
