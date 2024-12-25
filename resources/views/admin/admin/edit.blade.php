@extends('layout.adminLayout')
@section('title')
    {{ ucwords(__('cp.admins')) }}
@endsection
@section('css')
@endsection
@section('content')


    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline mr-5">
                        <h3>{{ __('cp.edit_admin') }}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <a href="{{ url(getLocal() . '/admin/admins') }}" class="btn btn-secondary  mr-2">{{ __('cp.cancel') }}</a>
                    <button id="submitButton" class="btn btn-success ">{{ __('cp.save') }}</button>
                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <form method="post" action="{{ url(app()->getLocale() . '/admin/admins/' . $item->id) }}"
                        enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="card-header">
                            <h3 class="card-title">{{ __('cp.main_data') }}</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('cp.name') }}</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name', $item->name) }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('cp.email') }}</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ old('email', $item->email) }}" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('cp.mobile') }}</label>
                                        <input
                                            onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                            type="text" class="form-control" name="mobile"
                                            value="{{ old('mobile', $item->mobile) }}" required />
                                    </div>
                                </div>



                                @if ($item->id != 1)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> {{ __('cp.role') }}</label>
                                            <select class="form-control select2" id="permissions" name="permissions[]"
                                                multiple="multiple" required>
                                                @foreach ($role as $roleItem)
                                                    <option value="{{ $roleItem->roleSlug }}"
                                                        @if (in_array($roleItem->roleSlug, $userRoleItem)) selected @endif>
                                                        {{ $roleItem->name }}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>


                        <button type="submit" id="submitForm" style="display:none"></button>
                    </form>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>


@endsection
@section('js')
    <script>
        $('#edit_image').on('change', function(e) {
            readURL(this, $('#editImage'));
        });
        $('#edit_image1').on('change', function(e) {
            readURL(this, $('#editImage1'));
        });
        $(document).on('click', '#submitButton', function() {
            // $('#submitButton').addClass('spinner spinner-white spinner-left');
            $('#submitForm').click();
        });
    </script>
@endsection

@section('script')
@endsection