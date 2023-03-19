@extends('dashboard.layout.master')
@section('content')
    <div class="container">
        <form action="{{ route('colleges.update', $college->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h1>{{ trans('dashboard.Edit College') }}</h1>
            <br>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center">{{ $error }}</div>
            @endforeach
            <br>
            <div class="row">
                <div class="mb-3 col-12">
                    <label for="name" class="form-label">{{ trans('dashboard.College Name') }}</label>
                    <input value="{{ $college->name }}" name="name" type="text" class="form-control" id="name">
                </div>
                <div class="mb-3 col-12">
                    <label for="description" class="form-label">{{ trans('dashboard.Description') }}</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="5">{{ $college->description }}</textarea>
                </div>

            </div>
            <button class="btn btn-success " type="submit">{{ trans('dashboard.Update') }}</button>
            <a class="btn btn-dark" href="{{ route('colleges.index') }}">{{ trans('dashboard.Back') }}</a>

        </form>

    </div>
@endsection
