@extends('layouts.master')


@section('content')
    <div class="container user-form">
        <form action="{{ route('users.store') }}" method="POST"
              enctype="multipart/form-data" class="card form-shape">
            @csrf
            <div class="form-group card-padding">
                <label>نام کاربری</label>
                <input type="text" class="form-control" name="name">
                @error('name')
                <p class="text-danger text-small text-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group card-padding">
                <label>سمت کاربر</label>
                <select class="form-control" name="access">
                        <option>CEO-Founder</option>
                        <option>Editor</option>
                </select>
            </div>
                <div class="form-group card-padding">
                    <label for="exampleInputEmail1">آدرس ایمیل</label>
                    <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    @error('email')
                    <p class="text-danger text-small text-bold">{{ $message }}</p>
                    @enderror
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group card-padding">
                    <label for="exampleInputPassword1">گذرواژه</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    @error('password')
                    <p class="text-danger text-small text-bold">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group card-padding">
                    <label for="exampleFormControlFile1">عکس پرسنلی</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="pro_image">
                    @error('image')
                    <p class="text-danger text-small text-bold">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">ثبت کاربر</button>
        </form>
    </div>
@endsection
