@extends('dashboard.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    {{ trans('dashboard.Reseach Help Requests') }}</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ number_format($researchHelpRequestsCount) }}
                                </div>
                            </div>
                            <div class="col-auto">
                                {{-- <i class="fa-solid fa-book-open" style="font-size:30px"></i> --}}
                                <i class="fas fa-book-reader" style="font-size:30px"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
