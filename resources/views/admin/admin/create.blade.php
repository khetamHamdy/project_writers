@extends('layout.adminLayout')
@section('title')
   {{__('cp.admins')}}
@endsection
@section('css')
    <style type="text/css">
        .input-controls {
            margin-top: 10px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        #searchInput {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 50%;
        }

        #searchInput:focus {
            border-color: #4d90fe;
        }

    </style>
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline mr-5">
                        <h3>{{__('cp.admins')}}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <a href="{{url(getLocal().'/admin/admins')}}"
                       class="btn btn-secondary  mr-2">{{__('cp.cancel')}}</a>
                    <button id="submitButton" class="btn btn-success ">{{__('cp.save')}}</button>
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
                    <form class="form" method="post" action="{{url(app()->getLocale().'/admin/admins')}}"
                          enctype="multipart/form-data"  role="form" id="form">
                        @csrf
                      <div class="card-header">
                            <h3 class="card-title">{{__('cp.main_data')}}</h3>
                        </div>
                        
                            <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{__('cp.name')}}</label>
                                                <input type="text" class="form-control"
                                                       name="name" value="{{ old('name')}}" required/>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{__('cp.email')}}</label>
                                                <input type="email" class="form-control" name="email"
                                                       value="{{ old('email')}}" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{__('cp.mobile')}}</label>
                                                <input
                                                    onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"

                                                    type="number" class="form-control" name="mobile"
                                                    value="{{ old('mobile')}}" required/>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{__('cp.password')}}</label>
                                                <input type="password" class="form-control" name="password"
                                                       value="{{ old('password') }}"
                                                       placeholder="{{__('cp.password')}} " required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{__('cp.confirm_password')}}</label>
                                                <input type="password" class="form-control" name="confirm_password"
                                                       value="{{ old('confirm_password') }}"
                                                       placeholder="{{__('cp.confirm_password')}} " required>
                                            </div>
                                        </div>
                     
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> {{__('cp.role')}}</label>
                                                <select class="form-control select2" id="permissions" name="permissions[]"
                                            multiple="multiple" required>

                                        @foreach($role as$roleItem)
                                            <option value="{{$roleItem->roleSlug}}">{{$roleItem->name}}</option>

                                        @endforeach
                                    </select>
                                      @if ($errors->has('permissions'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('permissions') }}</strong>
                                            </span>
                                    @endif
                                            </div>
                                        </div>

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
        $(document).on('click', '#submitButton', function(){
           // $('#submitButton').addClass('spinner spinner-white spinner-left');
        $('#submitForm').click();
    });

    $('#edit_image').on('change', function (e) {

readURL(this, $('#editImage'));

});
</script>
@endsection

@section('script')

@endsection
