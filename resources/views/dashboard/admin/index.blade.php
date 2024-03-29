@extends('dashboard.layout.master')


@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ trans('dashboard.Admins List') }}</h6>
            </div>
            <div class="card-body">
                <a href="{{ route('admins.create') }}" class="btn btn-primary">{{ trans('dashboard.Create Admin') }}</a>
                <br>
                <br>
                @if (session()->has('success'))
                    <div class="alert alert-success text-center">{{ session()->get('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>{{ trans('dashboard.id') }}</th>
                                <th>{{ trans('dashboard.Name') }}</th>
                                <th>{{ trans('dashboard.Email') }}</th>
                                <th>{{ trans('dashboard.Phone') }}</th>
                                <th>{{ trans('dashboard.Image') }}</th>
                                <th>{{ trans('dashboard.Created At') }}</th>
                                <th>{{ trans('dashboard.Created Date') }}</th>
                                <th>{{ trans('dashboard.Actions') }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $index => $admin)
                                @if (auth()->guard('admin')->id() != $admin->id)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>{{ $admin->phone }}</td>
                                        <td>
                                            <img style="width: 50px;height: 50px;" class="img-profile rounded-circle"
                                                src="{{ asset('storage/' . $admin->image) }}"
                                                alt="{{ trans('dashboard.No Image') }}">
                                        </td>

                                        <td>
                                            <a class="btn btn-warning"
                                                href="{{ route('admins.edit', $admin->id) }}">{{ trans('dashboard.Edit') }}</a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#deleteAdminModal">
                                                {{ trans('dashboard.Delete') }}
                                            </button>
                                        </td>
                                        <td>{{ $admin->created_at->diffForHumans() }}</td>
                                        <td>{{ $admin->created_at }}</td>


                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteAdminModal" tabindex="-1"
                                        aria-labelledby="deleteAdminModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteAdminModalLabel">
                                                        {{ trans('dashboard.Delete Admin') }}</h5>
                                                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                                                </div>
                                                <div class="modal-body">
                                                    {{ trans('dashboard.Are you sure to perform this process') }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">{{ trans('dashboard.Cancel') }}</button>
                                                    <form style="display: inline-block"
                                                        action="{{ route('admins.destroy', $admin->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="btn btn-danger">{{ trans('dashboard.Delete') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal -->
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $admins->links() !!}
            </div>
        </div>
    </div>


    </div>
@endsection
