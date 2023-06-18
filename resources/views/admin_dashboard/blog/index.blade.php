@extends('layouts.master')

@section('content')

    <table class="table direci">
        <thead class="thead-dark">

        <tr>
            <th scope="col">ID</th>
            <th scope="col">عنوان</th>
            <th scope="col">دسته بندی</th>
            <th scope="col">توضیحات</th>
            <th scope="col">تاریخ انتشار</th>
            <th scope="col">تصویر</th>
            <th scope="col">عملیات</th>
            <th><a href="{{ route('posts.create') }}" class="btn btn-primary">پست جدید</a></td></th>

        </tr>
        </thead>
@foreach($posts as $post)
        <tbody>

            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category }}</td>
                <td>{{ Str::limit($post->description, 20) }}</td>
                <td>{{ $post->created_at}}</td>
                <td> <img src="{{ $post->image_path }}" alt="Avatar" class="avatar"></td>
                <td>
                    <div class="row">
                        <div>
                            <form action="{{ route('posts.destroy' , $post->id) }}"
                                  method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-pos" type="submit">
                                    حذف
                                </button>
                            </form>
                        </div>
                        <div>
                            <a href=" {{ route('posts.edit' , $post->id) }} "
                               class="btn btn-primary">
                                تدوین
                            </a>
                        </div>
                    </div>
                </td>
            </tr>

        </tbody>
        @endforeach
    </table>

@endsection
