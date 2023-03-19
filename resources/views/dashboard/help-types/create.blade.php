@extends('dashboard.layout.master')
@section('content')
    <div class="container">
        <form action="{{ route('help-types.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1>{{ trans('dashboard.Create Help Type') }}</h1>
            <br>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center">{{ $error }}</div>
            @endforeach
            <br>
            <div class="row">
                <div class="mb-3 col-12">
                    <label for="name" class="form-label">{{ trans('dashboard.Help Type Name') }}</label>
                    <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name">
                </div>
                <div class="mb-3 col-12">
                    <label for="description" class="form-label">{{ trans('dashboard.Description') }}</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="5">{{ old('description') }}</textarea>
                </div>

            </div>
            <button class="btn btn-success " type="submit">{{ trans('dashboard.Create') }}</button>
            <a class="btn btn-dark" href="{{ route('help-types.index') }}">{{ trans('dashboard.Back') }}</a>

        </form>

    </div>
@endsection
