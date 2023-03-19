@extends('dashboard.layout.master')
@section('content')
    <div class="container">
        <form action="{{ route('admins.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1>{{ trans('dashboard.Create Admin') }}</h1>
            <br>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center">{{ $error }}</div>
            @endforeach
            <br>
            <div class="row">
                <div class="mb-3 col-12">
                    <label for="name" class="form-label">{{ trans('dashboard.Name') }}</label>
                    <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name"
                        placeholder="{{ trans('dashboard.Name') }}">
                </div>
                <div class="mb-3 col-12">
                    <label for="email" class="form-label">{{ trans('dashboard.Email') }}</label>
                    <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="email"
                        placeholder="{{ trans('dashboard.Email') }}">
                </div>
                <div class="mb-3 col-12">
                    <label for="phone" class="form-label">{{ trans('dashboard.Phone') }}</label>
                    <input value="{{ old('phone') }}" name="phone" type="phone" class="form-control" id="phone"
                        placeholder="{{ trans('dashboard.Phone') }}">
                </div>
                <div class="mb-3 col-12">
                    <label for="image" class="form-label">{{ trans('dashboard.Image') }}</label>
                    <input value="{{ old('image') }}" name="image" type="file" class="form-control" id="image"
                        placeholder="{{ trans('dashboard.Image') }}">
                </div>
                <div class="mb-3 col-12">
                    <label for="password" class="form-label">{{ trans('dashboard.Password') }}</label>
                    <input name="password" type="password" class="form-control" id="password"
                        placeholder="{{ trans('dashboard.Password') }}">
                </div>
                <div class="mb-3 col-12">
                    <label for="password_confirmation"
                        class="form-label">{{ trans('dashboard.Password Confirmation') }}</label>
                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation"
                        placeholder="{{ trans('dashboard.Password Confirmation') }}">
                </div>
            </div>
            <button class="btn btn-success " type="submit">{{ trans('dashboard.Create') }}</button>
            <a class="btn btn-dark" href="{{ route('admins.index') }}">{{ trans('dashboard.Back') }}</a>

        </form>

    </div>
@endsection
