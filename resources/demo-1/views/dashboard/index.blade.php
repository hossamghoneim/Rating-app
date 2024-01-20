@extends('partials.dashboard.master')
@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">تقرير التقييمات</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <div class="col-xl-12">
                    <!--begin::Charts Widget 2-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Delivery Stats</span>
                                <span class="text-muted fw-bold fs-7 mb-4">Users from all channels</span>
                                <span class="card-label fw-bolder fs-1 mb-1">{{ $allRatesCount }}</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar" data-kt-buttons="true">
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary @if(request()->query('date') == 'year') active @endif px-4 me-1" href="{{ route('dashboard.index', ['date' => 'year']) }}" id="kt_charts_widget_2_year_btn">Year</a>
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary @if(request()->query('date') == 'month') active @endif px-4 me-1" href="{{ route('dashboard.index', ['date' => 'month']) }}" id="kt_charts_widget_2_month_btn">Month</a>
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary @if(request()->query('date') == 'week') active @endif px-4" href="{{ route('dashboard.index', ['date' => 'week']) }}" id="kt_charts_widget_2_week_btn">Week</a>
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary @if(request()->query('date') == 'day' || (request()->query('date') != 'week' && request()->query('date') != 'month' && request()->query('date') != 'year')) active @endif px-4 me-1" href="{{ route('dashboard.index', ['date' => 'day']) }}" id="kt_charts_widget_2_year_btn">Day</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_2_chart" style="height: 350px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 2-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->

@endsection
@push('scripts')
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('dashboard-assets/demo-1/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('dashboard-assets/demo-1/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('dashboard-assets/demo-1/js/custom/utilities/modals/upgrade-plan.js') }}"></script>

    <script>
        // Pass the test variable to widgets.js using a data attribute
        let veryGoodCount = {{ $veryGoodCount }};
        let goodCount = {{ $goodCount }};
        let acceptableCount = {{ $acceptableCount }};
        let poorCount = {{ $poorCount }};
        document.addEventListener("DOMContentLoaded", function () {
            var widgetsScript = document.createElement('script');
            widgetsScript.type = 'text/javascript';
            widgetsScript.setAttribute('data-veryGoodCount', veryGoodCount); // Set the data attribute
            widgetsScript.setAttribute('data-goodCount', goodCount); // Set the data attribute
            widgetsScript.setAttribute('data-acceptableCount', acceptableCount); // Set the data attribute
            widgetsScript.setAttribute('data-poorCount', poorCount); // Set the data attribute
            document.head.appendChild(widgetsScript);
        });
    </script>

    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
@endpush
