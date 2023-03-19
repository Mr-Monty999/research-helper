@extends('dashboard.layout.main')
@section('content')
    <div class="container">
        <form action="{{ route('admins.profile.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            @if (session()->has('success'))
                <div class="alert alert-success text-center">{{ session()->get('success') }}</div>
            @endif
            <div class="row">
                <div class="mb-3 col-12">
                    <label for="exampleFormControlInput1" class="form-label">{{ trans('dashboard.User Name') }}</label>
                    <input value="{{ $admin->name }}" name="name" type="text" class="form-control"
                        id="exampleFormControlInput1" placeholder="Ex: mohammed">
                </div>
                <div class="mb-3 col-12">
                    <label for="email" class="form-label">{{ trans('dashboard.Email') }}</label>
                    <input value="{{ $admin->email }}" name="email" type="email" class="form-control" id="email"
                        placeholder="Ex: admin@admin.com">
                </div>
                <div class="mb-3 col-12">
                    <label for="phone" class="form-label">{{ trans('dashboard.Phone') }}</label>
                    <input value="{{ $admin->phone }}" name="phone" type="text" class="form-control" id="phone"
                        placeholder="Ex: 012345523">
                </div>
                <div class="mb-3 col-12">
                    <label for="image" class="form-label">{{ trans('dashboard.Profile Image') }}</label>
                    <input name="image" type="file" class="form-control" id="image">
                    @if ($admin->image)
                        <img style="width: 100px" src="{{ asset('storage/' . $admin->image) }}"
                            alt="{{ trans('dashboard.Profile Image') }}">
                    @endif
                </div>
                <div class="mb-3 col-12">
                    <label for="old_password" class="form-label">{{ trans('dashboard.Old Password') }}</label>
                    <input name="old_password" type="text" class="form-control" id="old_password">
                </div>
                <div class="mb-3 col-12">
                    <label for="new_password" class="form-label">{{ trans('dashboard.New Password') }}</label>
                    <input name="new_password" type="text" class="form-control" id="new_password">
                </div>
            </div>
            <button class="btn btn-success " type="submit">{{ trans('dashboard.Update') }}</button>
        </form>
        <br>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger text-center">{{ $error }}</div>
        @endforeach
        @if (session()->has('error'))
            <div class="alert alert-danger text-center">{{ session()->get('error') }}</div>
        @endif
    </div>
@endsection
