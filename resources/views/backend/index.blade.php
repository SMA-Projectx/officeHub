@extends('layouts.backend')

@section('title')
    Dashboard
@endsection

@section('content')
    <!-- Quick Overview -->
    <div class="row items-push">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center h-100 mb-0"  href="{{ url('/admin/equipments') }}">
                <div class="block-content py-5">
                    <div class="fs-3 fw-semibold text-primary mb-1"></div>
                    <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                        All Equipment
                    </p>
                </div>
            </a>
        </div>

        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center h-100 mb-0"  href="{{ url('/admin/features') }}">
                <div class="block-content py-5">
                    <div class="fs-3 fw-semibold text-primary mb-1"></div>
                    <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                        All Features
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center h-100 mb-0"  href="{{ url('/admin/properties') }}">
                <div class="block-content py-5">
                    <div class="fs-3 fw-semibold text-primary mb-1"></div>
                    <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                        All Properties
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center h-100 mb-0"  href="{{ url('/admin/rooms') }}">
                <div class="block-content py-5">
                    <div class="fs-3 fw-semibold text-primary mb-1"></div>
                    <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                        All Rooms
                    </p>
                </div>
            </a>
        </div>
    </div>
    </div>
    <!-- END Quick Overview -->

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Orders Overview</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <!-- Chart.js is initialized in js/pages/be_pages_ecom_dashboard.min.js which was auto compiled from _js/pages/be_pages_ecom_dashboard.js) -->
            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
            <div style="height: 420px;"><canvas id="js-chartjs-overview"></canvas></div>
        </div>
    </div>

@endsection

@section('css')
@endsection

@section('js')
@endsection

@section('style')
@endsection

@section('script')
@endsection
