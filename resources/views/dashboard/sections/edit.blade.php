@extends('dashboard.layout.master')
@section('content')
    <div class="container">
        <form action="{{ route('sections.update', $section->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h1>{{ trans('dashboard.Edit Section') }}</h1>
            <br>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center">{{ $error }}</div>
            @endforeach
            <br>
            <div class="row">
                <div class="mb-3 col-12">
                    <label for="name" class="form-label">{{ trans('dashboard.Section Name') }}</label>
                    <input value="{{ $section->name }}" name="name" type="text" class="form-control" id="name">
                </div>
                <div class="mb-3 col-12">
                    <label for="description" class="form-label">{{ trans('dashboard.Description') }}</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="5">{{ $section->description }}</textarea>
                </div>

            </div>
            <button class="btn btn-success " type="submit">{{ trans('dashboard.Update') }}</button>
            <a class="btn btn-dark" href="{{ route('sections.index') }}">{{ trans('dashboard.Back') }}</a>

        </form>

    </div>
@endsection
