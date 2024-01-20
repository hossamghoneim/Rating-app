@extends('partials.dashboard.master')
@section('content')
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">{{ __('Data List') }}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div class="card-body">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-wrap mb-5">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1 mb-2 mb-md-0">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="{{ __('Search for data') }}">
                    <select class="form-select form-select-solid w-200px ps-15 filter-input ms-2" data-filter-index="1" data-dir="@if(isArabic()) rtl @else ltr @endif" name="car_number_id" id="car_number_id_inp"
                        data-control="select2" data-allow-clear="true" data-placeholder="{{ __('اختر رقم اللوحة') }}">
                        <option></option>
                        @foreach ($carNumbers as $carNumber)
                            <option value="{{ $carNumber->id }}">{{ $carNumber->number }}</option>
                        @endforeach
                    </select>
                </div>
                <!--end::Search-->
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end gap-1" id="add_btn" data-bs-toggle="modal" data-bs-target="#crud_modal" data-kt-docs-table-toolbar="base">
                    <!--begin::Add customer-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-original-title="Coming Soon" data-kt-initialized="1">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->{{ __('add new data') }}</button>
                    <!--end::Add customer-->
                    <!--begin::Add customer-->
                    <button type="button" class="btn btn-primary" id="upload_btn" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
                    <!--begin::Svg Icon | path: icons/duotune/files/fil018.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black" />
                                <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM16 11.6L12.7 8.29999C12.3 7.89999 11.7 7.89999 11.3 8.29999L8 11.6H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H16Z" fill="white" />
                                <path opacity="0.3" d="M11 11.6V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H11Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        {{ __('Upload File') }}
                    </button>
                    <!--end::Add customer-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-docs-table-select="selected_count"></span>{{ __('Selected items') }}</div>
                    <button type="button" class="btn btn-danger" data-kt-docs-table-select="delete_selected">{{ __('Delete') }}</button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Datatable-->
            <table id="kt_datatable" class="table align-middle text-center table-row-dashed fs-6 gy-5">
                <thead>
                <tr class=" text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable .form-check-input" value="1"/>
                        </div>
                    </th>
                    <th>{{ __('Car Number') }}</th>
                    <th>{{ __('Type') }}</th>
                    <th>{{ __('Location') }}</th>
                    <th>{{ __('District') }}</th>
                    <th>{{ __('Url') }}</th>
                    <th>{{ __('date') }}</th>
                    <th class=" min-w-100px">{{ __('actions') }}</th>
                </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                </tbody>
            </table>
            <!--end::Datatable-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Basic info-->

    {{-- begin::Add Country Modal --}}
    <form id="crud_form" class="ajax-form" action="{{ route('dashboard.mini-trackers.store') }}" method="post" data-success-callback="onAjaxSuccess" data-error-callback="onAjaxError">
        @csrf
        <div class="modal fade" tabindex="-1" id="crud_modal">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="form_title">{{ __('add new data') }}</h5>
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <span class="svg-icon svg-icon-2x"></span>
                        </div>
                        <!--end::Close-->
                    </div>

                    <div class="modal-body">
                        <div class="fv-row mb-0 fv-plugins-icon-container">
                            <label for="car_number_inp" class="form-label required fs-6 fw-bold mb-3">{{ __('Car Number') }}</label>
                            <input type="text" name="car_number" class="form-control form-control-lg form-control-solid" id="car_number_inp" placeholder="{{ __('Car Number') }}" >
                            <div class="fv-plugins-message-container invalid-feedback" id="car_number"></div>
                        </div>
                        <div class="fv-row mb-0 fv-plugins-icon-container">
                            <label for="type_inp" class="form-label fs-6 fw-bold mb-3">{{ __('Type') }}</label>
                            <input type="text" name="type" class="form-control form-control-lg form-control-solid" id="type_inp" placeholder="{{ __('Type') }}" >
                            <div class="fv-plugins-message-container invalid-feedback" id="type"></div>
                        </div>
                        <div class="fv-row mb-0 fv-plugins-icon-container">
                            <label for="location_inp" class="form-label required fs-6 fw-bold mb-3">{{ __('Location') }}</label>
                            <input type="text" name="location" class="form-control form-control-lg form-control-solid" id="location_inp" placeholder="{{ __('Location') }}" >
                            <div class="fv-plugins-message-container invalid-feedback" id="location"></div>
                        </div>
                        <div class="fv-row mb-0 fv-plugins-icon-container">
                            <label for="district_inp" class="form-label required fs-6 fw-bold mb-3">{{ __('District') }}</label>
                            <input type="text" name="district" class="form-control form-control-lg form-control-solid" id="district_inp" placeholder="{{ __('District') }}" >
                            <div class="fv-plugins-message-container invalid-feedback" id="district"></div>
                        </div>
                        <div class="fv-row mb-0 fv-plugins-icon-container">
                            <label for="url_inp" class="form-label required fs-6 fw-bold mb-3">{{ __('Url') }}</label>
                            <input type="text" name="url" class="form-control form-control-lg form-control-solid" id="url_inp" placeholder="{{ __('Url') }}" >
                            <div class="fv-plugins-message-container invalid-feedback" id="url"></div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">
                                {{ __('Save') }}
                            </span>
                            <span class="indicator-progress">
                                {{ __('Please wait ...') }} <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- end::Add Country Modal --}}

    <!--begin::Modal - Upload File-->
    <form id="upload_form" class="ajax-form" action="{{ route('dashboard.upload-mini-file') }}" method="post" data-success-callback="onAjaxSuccess" data-error-callback="onAjaxError" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="kt_modal_upload" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">{{ __('Upload files') }}</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body pt-10 pb-15 px-lg-17">
                        <!--begin::Input group-->
                        <div class="form-group">
                            <input type="file" name="file" id="file_inp">
                            <!--begin::Hint-->
                            <!--end::Hint-->

                            <div class="fv-plugins-message-container invalid-feedback" id="excel_error"></div>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Modal body-->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            <span class="indicator-label">
                                {{ __('Upload') }}
                            </span>
                            <span class="indicator-progress">
                                {{ __('Please wait ...') }} <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--end::Modal - Upload File-->

@endsection
@push('scripts')
    <script src="{{ asset('js/dashboard/global/datatable-config.js') }}"></script>
    <script src="{{ asset('js/dashboard/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('js/dashboard/datatables/mini-trackers.js') }}"></script>
    <script src="{{ asset('js/dashboard/crud-operations.js') }}"></script>

    <script>
        $(document).ready(function () {
            $("#add_btn").click(function (e) {
                e.preventDefault();

                $("#form_title").text(__('add new data'));
                $("[name='_method']").remove();
                $("#crud_form").trigger('reset');
                $("#crud_form").attr('action', `/dashboard/mini-trackers`);
            });
            $("#upload_btn").click(function (e) {
                e.preventDefault();

                $("#upload_form").trigger('reset');
                $("#upload_form").attr('action', `/dashboard/upload-mini-file`);
            });
        });
    </script>
@endpush
