@extends('layouts.master')


@section('content')

    <div class="container">
        <h3>Image Gallery</h3>
        <form action="{{route('gallery.store')}}"
              class="form-image-upload"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-5">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                    @error('title')
                    <p class="text-danger text-small text-bold">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-5">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                    <p class="text-danger text-small text-bold">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-2">
                    <br/>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </form>
    </div> <!-- container / end -->
    <div class="container">
        <div class="row">
            @foreach($gallery as $gallery)
                <div class="col-sm-3 btn-gallery" style="height: 200px">
                    <a><img src="{{$gallery->image}}" class="img img-thumbnail" alt=""></a>
                        <form action="{{ route('gallery.destroy' , $gallery->id) }}"
                              method="POST">
                            @csrf
                            @method('delete')

                            <button class="btn btn-danger btn-danger-row" type="submit">
                                <center><strong>{{$gallery->title}}</strong></center> حذف
                            </button>
                        </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
