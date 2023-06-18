@extends('layouts.master')

@section('content')

    <form action="{{ route('category.update' , $category->id) }}"
          method="POST"
        @csrf
        @method('PUT')
    <div class="form-group form-create">
        <label for="exampleInputPassword1">عنوان دسته بندی</label>
        <input type="text"
               name="title"
               value="{{$category->title}}"
               class="form-control input-edit">
    </div>
        <button type="submit"
                class="btn btn-primary btn-create">
            اعمال تغییرات
        </button>
    </form>

@endsection
