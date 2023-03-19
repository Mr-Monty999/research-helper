@extends('dashboard.layout.master')


@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ trans('dashboard.Sections List') }}</h6>
            </div>
            <div class="card-body">
                <a href="{{ route('sections.create') }}" class="btn btn-primary">{{ trans('dashboard.Create Section') }}</a>
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
                                <th>{{ trans('dashboard.Description') }}</th>
                                <th>{{ trans('dashboard.Created At') }}</th>
                                <th>{{ trans('dashboard.Created Date') }}</th>
                                <th>{{ trans('dashboard.Actions') }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sections as $index => $section)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $section->name }}</td>
                                    <td>{{ $section->description }}</td>
                                    <td>{{ $section->created_at->diffForHumans() }}</td>
                                    <td>{{ $section->created_at }}</td>
                                    <td>
                                        <a class="btn btn-warning"
                                            href="{{ route('sections.edit', $section->id) }}">{{ trans('dashboard.Edit') }}</a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteSectionModal">
                                            {{ trans('dashboard.Delete') }}
                                        </button>
                                    </td>



                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteSectionModal" tabindex="-1"
                                    aria-labelledby="deleteSectionModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteSectionModalLabel">
                                                    {{ trans('dashboard.Delete Section') }}</h5>
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
                                                    action="{{ route('sections.destroy', $section->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="btn btn-danger">{{ trans('dashboard.Delete') }}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $sections->links() !!}
            </div>
        </div>
    </div>


    </div>
@endsection
