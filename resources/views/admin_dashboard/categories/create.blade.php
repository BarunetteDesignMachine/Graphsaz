@extends('layouts.master')

@section('content')

    <form action="{{ route('category.index') }}"
          method="POST">
        <div class="form-group form-create">
            <label for="exampleInputPassword1">عنوان دسته بندی</label>
            @csrf
            <input class="form-control" name="title">
            @error('title')
            <p class="text-danger text-small text-bold">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-create">Submit</button>
    </form>

@endsection
