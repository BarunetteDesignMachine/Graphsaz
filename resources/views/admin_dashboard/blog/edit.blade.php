@extends('layouts.master')

@section('content')

    <form action="{{ route('posts.update' , $post->id) }}"
          method="POST">
        @csrf
        @method('PUT')
        <div class="form-group form-create">
            <label>عنوان</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}">
            @error('title')
            <p class="text-danger text-small text-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group form-create">
            <label>دسته بندی</label>
            <select class="form-control" name="category">
                @foreach($categories as $category)
                    <option>{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group form-create">
            <label>توضیحات</label>
            <textarea class="form-control" rows="3" name="description">{{ $post->description }}</textarea>
            <script type="text/javascript">
                CKEDITOR.replace('description',{
                    language: 'fa',
                    filebrowserImageBrowseUrl: '{{asset('/laravel-filemanager?type=Images')}}',
                    filebrowserImageUploadUrl: '{{asset('/laravel-filemanager/upload?type=Images&_token=')}}',
                    filebrowserBrowseUrl: '{{asset('/laravel-filemanager?type=Files')}}',
                    filebrowserUploadUrl: '{{asset('/laravel-filemanager/upload?type=Files&_token=')}}'
                });
            </script>
        </div>
        <div class="form-group form-create">
            <label>توضیحات</label>
            <textarea class="form-control" rows="3" name="shorted"></textarea>

            @error('description')
            <p class="text-danger text-small text-bold">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>

@endsection
