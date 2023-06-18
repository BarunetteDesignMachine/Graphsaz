@extends('layouts.master_home')

@section('content')

    <div class="container post-post">
        <div class="jumbotron text-center">
            <h1>اخرین مطالب</h1>
            <p>تیم طراحی گرافساز با طراحان و دیزاینر های مجرب تجربه ای تازه را در زمینه طراحی گرافیکی برای شما به ارمغان
                میاورد. تمایزات ما فقط در قیمت نیست کلید کار ما کیفیت است</p>
        </div>
        <div class="container">
            <div class="row row-cols-2 row-cols-md-4 g-4">
                @foreach($posts as $post)
                    <div class="col-4 artic-pd">
                        <div class="card h-100">
                            <img src="{{ $post->image_path }}" class="card-img-top" alt="...">
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
        <div>
            {{ $posts->links() }}
        </div>
    </div>

@endsection