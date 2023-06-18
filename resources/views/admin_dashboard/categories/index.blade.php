@extends('layouts.master')

@section('content')


    <table class="table direci">
        <thead class="thead-dark">

        <tr>
            <th scope="col">ID</th>
            <th scope="col">عنوان</th>
            <th scope="col">تاریخ انتشار</th>
            <th scope="col">عملیات</th>
            <th><a href="{{ route('category.create') }}" class="btn btn-primary">دسته بندی جدید</a></td></th>

        </tr>
        </thead>

        <tbody>
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->title }}</td>
            <td>{{ $category->created_at }}</td>
            <td>
                <div class="row">
                    <div>
                <form action="{{ route('category.destroy' , $category->id) }}"
                      method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-pos" type="submit">
                        حذف
                    </button>
                </form>
                    </div>
                    <div>
                        <a href="{{ route('category.edit' , $category->id) }}"
                           class="btn btn-primary">
                            تدوین
                        </a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
