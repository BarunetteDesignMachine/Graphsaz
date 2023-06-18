@extends('layouts.master_home')


@section('content')

    <div class="container gall">
        <div class="jumbotron">
            <h1>گالری نمونه کار ها</h1>
            <p>تیم طراحی گرافساز با طراحان و دیزاینر های مجرب تجربه ای تازه را در زمینه طراحی گرافیکی برای شما به ارمغان
                میاورد. تمایزات ما فقط در قیمت نیست کلید کار ما کیفیت است</p>
        </div>
        <div class="container page-top gallery">

            <div class="gallery">
                @foreach($gallery as $gallery)

                <figure>
                    <img src="{{$gallery->image}}" alt="..." />
                    <figcaption>{{$gallery->title}}</figcaption>
                </figure>
                @endforeach
            </div>
            <script>
                popup = {
                    init: function(){
                        $('figure').click(function(){
                            popup.open($(this));
                        });

                        $(document).on('click', '.popup img', function(){
                            return false;
                        }).on('click', '.popup', function(){
                            popup.close();
                        })
                    },
                    open: function($figure) {
                        $('.gallery').addClass('pop');
                        $popup = $('<div class="popup" />').appendTo($('body'));
                        $fig = $figure.clone().appendTo($('.popup'));
                        $bg = $('<div class="bg" />').appendTo($('.popup'));
                        $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
                        $shadow = $('<div class="shadow" />').appendTo($fig);
                        src = $('img', $fig).attr('src');
                        $shadow.css({backgroundImage: 'url(' + src + ')'});
                        $bg.css({backgroundImage: 'url(' + src + ')'});
                        setTimeout(function(){
                            $('.popup').addClass('pop');
                        }, 10);
                    },
                    close: function(){
                        $('.gallery, .popup').removeClass('pop');
                        setTimeout(function(){
                            $('.popup').remove()
                        }, 100);
                    }
                }

                popup.init()

            </script>


        </div>
    </div>
@endsection
