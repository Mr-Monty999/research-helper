@extends('dashboard.layout.master')
@section('content')
    <div class="container">
        <form action="{{ route('sections.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1>{{ trans('dashboard.Create Section') }}</h1>
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
                    <label for="description" class="form-label">{{ trans('dashboard.Email') }}</label>
                    <input value="{{ old('description') }}" name="description" type="description" class="form-control"
                        id="description" placeholder="{{ trans('dashboard.Description') }}">
                </div>

            </div>
            <button class="btn btn-success " type="submit">{{ trans('dashboard.Create') }}</button>
            <a class="btn btn-dark" href="{{ route('sections.index') }}">{{ trans('dashboard.Back') }}</a>

        </form>

    </div>
@endsection
