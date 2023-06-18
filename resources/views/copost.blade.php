@extends('layouts.master_home')

@section('content')

    <section class="section bg-secondary co-po">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center c-text">
                    <h3>"As a Designer, I Refuse to Call People ‘Users’"</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- /page-title -->

    <!-- blog single -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content">
                        <img src="{{ $post->image_path }}" alt="image" class="img-fluid">
                        <div class="text-justify co-text-a">
                            <?php
                            $input = "{$post->description}" ;
                            $output = preg_replace_callback("/(&#[0-9]+;)/",
                                function($m) { return mb_convert_encoding($m[1], "UTF-8", "HTML-ENTITIES"); }, $input);
                            echo $output;
                            ?>
                                @error('description')
                                <p class="text-danger text-small text-bold">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget mp-w">
                        <h4 class="mb-4">آخرین مطالب</h4>
                                @foreach($posts as $post)
                            <div class="card" style="width:300px">
                                <img class="card-img-top img-filter" src="{{$post->image_path}}" alt="Card image">
                                <div class="card-img-overlay">
                                    <h4 class="card-title c-text">{{$post->title}}</h4>
                                    <a href="/article/{{ $post->title }}" class="btn btn-primary c-text c-b-p">بیشتر بخوانید</a>
                                </div>
                            </div>
                                @endforeach
                    </div>
                    <div class="widget">
                    </div>
                    <div class="widget cat-p">
                        <h4 class="mb-4">دسته بندی ها</h4>
                        <ul class="list-inline tag-list">
                            @foreach($categories as $category)
                                <button class="list-inline-item m-1 btn btn-dark cat-btn"><a href="/post/{{ $category->title }}">{{ $category->title }}</a>
                                </button><br>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
