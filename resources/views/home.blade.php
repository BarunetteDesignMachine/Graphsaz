@extends('layouts.master_home')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img class="d-block w-100  slide-res" src="img/main_slide1.jpg" alt="First slide"
                     style="max-width:100%;height:auto;">
                <div class="carousel-caption d-none d-sm-block home-slide">
                    <h2>طراحی گرافیکی و دیزاین وب گرافساز</h2>
                    <p>خدمات گرافیکی و دیزاین وب سایت با پنل اختصاصی در شرکت گرافساز</p>
                    <a href="/article" class="btn btn-outline-primary"> کتابخانه مطالب</a>
                </div>
            </div>
            <div class="carousel-item slide-res">
                <img class="d-block w-100" src="img/main_slide2.jpg" alt="Second slide"
                     style="max-width:100%;height:auto;">
                <div class="carousel-caption d-none d-md-block">
                    <h2>طراحی گرافیکی و دیزاین وب گرافساز</h2>
                </div>
            </div>
            <div class="carousel-item slide-res">
                <img class="d-block w-100" src="img/mani_slide3.jpg" alt="Third slide"
                     style="max-width:100%;height:auto;">
                <div class="carousel-caption d-none d-md-block">
                    <h2>طراحی گرافیکی و دیزاین وب گرافساز</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="container third-pd-d">
        <!-- Card Start -->
        <div class="card">
            <div class="row">

                <div class="col-md-7">
                    <div class="card-block px-6">
                        <h2 class="card-title">درآمدی بر گرافساز</h2>
                        <p class="card-text text-justify first-c-n">
                            شزکت گراقساز با خدمات متعدد در زمینه های طراحی گرافیک لوگو و ست های اداری ، مدیریت فضای
                            مجازی
                            ، طراحی و مدیریت وب سایت با پنل های اختصاصی و وردپرسی
                        </p>
                        <p class="card-text text-justify first-c-n">شزکت گراقساز با خدمات متعدد در زمینه های طراحی
                            گرافیک لوگو و ست های اداری
                            ، مدیریت فضای مجازی ، طراحی و مدیریت وب سایت با پنل های اختصاصی و وردپرسی</p>
                        <br>
                        <a href="/article" class="mt-auto btn btn-primary  ">بیشتر بخوانید</a>
                    </div>
                </div>
                <!-- Carousel start -->
                <div class="col-md-5">
                    <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
                            <li data-target="#CarouselTest" data-slide-to="1"></li>
                            <li data-target="#CarouselTest" data-slide-to="2"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/sec_slide1.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/sec_slide2.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/sec_slide3.jpg" alt="">
                            </div>
                            <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End of carousel -->
            </div>
        </div>
        <!-- End of card -->
    </div>


    <div class="third text-center">
        <div class="third-pd">
            <h1 class="text-color">
                We Are Experts :
            </h1>
            <br>
            <h4 class="text-color">
                UX Design
            </h4>
            <br>
            <h4 class="text-color">
                Graphics
            </h4>
            <br>
            <h4 class="text-color">
                Backend Developer
            </h4>
            <br>
            <h4 class="text-color">
                Social Media
            </h4>
        </div>
    </div>

    <div class="text-center third-pd-d">
        <span class="uppercase text-s text-gray-400">
            آخرین پست ها
        </span>

        <h1 class="text-4xl font-bold py-10">
            Recent Posts
        </h1>

        <hr class="hr-post">

        <p class="m-auto w-4/5 text-gray-500">
            میتوانید اخرین اخبار و مقاله های آموزشی را از گرافساز بدانید و خود را به روز کنید
        </p>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-1 g-4">
            @foreach($posts as $post)
                <div class="col-4">
                    <div class="card h-100">
                        <img src="{{ $post->image_path }}" class="card-img-top card-home" alt="...">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold">{{$post->title}}</h4>
                            <p class="card-text">{{ Str::limit($post->shorted, 120) }}</p>
                            <h7 class="card-class">{{$post->category}}</h7>
                        </div>
                        <div class="card-footer c-text footer-card">
                            <a href="/article/{{ $post->title }}" class="btn btn-dark">بیشتر بخوانید</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Copy until here -->
@endsection
