@extends('layouts.master')


@section('content')

    <div class="container user-form">
        <form action="{{ route('users.update' , $users->id) }}" method="POST"
              enctype="multipart/form-data" class="card form-shape">
            @csrf
            @method('PUT')
            <div class="form-group card-padding">
                <label>نام کاربری</label>
                <input type="text" class="form-control" name="name" value="{{$users->name}}">
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
                <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$users->email}}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group card-padding">
                <label for="exampleInputPassword1">گذرواژه</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{$users->password}}">
            </div>
            <button type="submit" class="btn btn-primary">اعمال تغییرات</button>
        </form>
    </div>

@endsection
