<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Graphsaz') }}</title>
    <meta name="description" content="Admin dashboard for the Graphsaz company web site"/>
    <meta name=”robots” content="index, follow">
    <meta name=”keywords” content=”HTML,CSS,graphsaz,Web,graphics,design”>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/graphsaz.css') }}" rel="stylesheet">
    <!-- Styles -->
    <script src="{{ asset('js/java.js') }}" defer></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <!-- Scripts -->


</head>
<body>
@if(auth()->check())
    <nav class="navbar navbar-light bg-color">
        <a class="navbar-brand" href="#">
            <img src="{{asset('img/nuno.png')}}" width="120" height="30" class="d-inline-block align-top" alt="">
        </a>
        <h4>Welcome {{ Auth::user()->name }}<span
                class="badge badge-secondary user-name">{{ Auth::user()->access }}</span></h4>
    </nav>
    <div class="row">
        <div class="container col-lg-10 col-md-10 col-sm-11">
            @yield('content')
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 text-center">
            <a href="{{ route('category.index') }}" class="btn btn-sm btn-dark pd-dark mt-dark text-white">دسته بندی
                ها</a> <br>
            <a href="{{ route('posts.index') }}" type="button" class="btn btn-sm btn-dark pd-dark ">بلاگ</a> <br>
            <a href="{{ route('gallery.index') }}" type="button" class="btn btn-sm btn-dark pd-dark">گالری</a> <br>
            <a href="{{ route('sourceimage.index') }}" type="button" class="btn btn-sm btn-dark pd-dark">گالری مربوطه
                پست</a> <br>
            <a href="{{ route('users.index') }}" type="button" class="btn btn-sm btn-dark pd-dark">کاربران</a> <br>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark pt-dark">خروج</button>
            </form>
        </div>
    </div>
@endif
</body>
</html>
