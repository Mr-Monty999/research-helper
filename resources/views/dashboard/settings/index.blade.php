@extends('dashboard.layout.master')
@section('content')
    <div class="container">
        <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h1>{{ trans('dashboard.Site Settings') }}</h1>
            <br>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center">{{ $error }}</div>
            @endforeach
            <br>
            <div class="row">
                <div class="mb-3 col-12">
                    <label for="name" class="form-label">{{ trans('dashboard.Whatsapp Phone') }}</label>
                    <input value="{{ $whatsapp_phone ? $whatsapp_phone->value : '' }}" name="whatsapp_phone" type="text"
                        class="form-control" id="whatsapp_phone">
                </div>

            </div>
            <button class="btn btn-success " type="submit">{{ trans('dashboard.Update') }}</button>
            <a class="btn btn-dark" href="{{ route('settings.index') }}">{{ trans('dashboard.Back') }}</a>

        </form>

    </div>
@endsection
