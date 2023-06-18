@extends('layouts.master')

@section('content')

    <form action="{{ route('posts.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf
        <div class="form-group form-create">
            <label>عنوان</label>
            <input type="text" class="form-control" name="title">
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
            @error('category')
            <p class="text-danger text-small text-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group form-create">
            <label>توضیحات</label>
            <textarea class="form-control" rows="3" id="description" name="description"></textarea>
            <script type="text/javascript">
                CKEDITOR.replace('description',{
                    language: 'fa',
                    filebrowserImageBrowseUrl: '{{asset('/laravel-filemanager?type=Images')}}',
                    filebrowserImageUploadUrl: '{{asset('/laravel-filemanager/upload?type=Images&_token=')}}',
                    filebrowserBrowseUrl: '{{asset('/laravel-filemanager?type=Files')}}',
                    filebrowserUploadUrl: '{{asset('/laravel-filemanager/upload?type=Files&_token=')}}'
                });
            </script>
            @error('description')
            <p class="text-danger text-small text-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group form-create">
            <label>پیش گفتار</label>
            <textarea class="form-control" rows="3" name="shorted"></textarea>

            @error('description')
            <p class="text-danger text-small text-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group form-create">
            <label>تصویر شاخص</label>
            <input type="file" class="form-control-file" name="image_path">
            @error('image_path')
            <p class="text-danger text-small text-bold">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>


@endsection
