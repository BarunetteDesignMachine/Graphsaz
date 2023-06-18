@extends('layouts.master')


@section('content')

    <div class="container">
        <a href="{{ route('users.create') }}" class="btn btn-primary user-btn">کاربر جدید</a>
    </div>

    <hr>
    <!-- Team item -->
    <div class="container rtl-dr">
        <div class="row">
            @foreach($users as $user)
                <div class="col-xl-3 col-sm-6 mb-5 text-center shadow pd-user">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ $user->pro_image }}" alt=""
                                                                           width="100" height="100"
                                                                           class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">{{ $user->name }}</h5><span
                            class="small text-uppercase text-muted">{{ $user->access }}</span>
                        <div class="row">
                            <div>
                                <a href="{{ route('users.edit' , $user->id) }}"
                                   class="btn btn-primary btn-user-pri btn-with">تدوین</a>
                            </div>
                            <div>
                                <form action="{{ route('users.destroy' , $user->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-user-danger btn-with" type="submit">
                                        حذف
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- End -->
            @endforeach
        </div>
    </div>

@endsection
