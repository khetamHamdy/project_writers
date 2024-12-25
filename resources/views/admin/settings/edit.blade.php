@extends('layout.adminLayout')
@section('title')
    {{ ucwords(__('cp.general_setting')) }}
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
                        <h3>{{ __('cp.general_setting') }}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
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
                    <form method="post" action="{{ url(app()->getLocale() . '/admin/settings') }}"
                        enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                        {{ csrf_field() }}



                        <div class="card-header">

                            <h3 class="card-title">{{ __('cp.main_data') }}</h3>

                        </div>

                        <div class="card-body">
                            <div class="row">
                                @foreach ($locales as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label
                                                for="title_{{ $locale->lang }}">{{ __('cp.name_' . $locale->lang) }}</label>
                                            <input type="text" class="form-control"
                                                {{ $locale->lang == 'ar' ? 'dir=rtl' : 'dir=ltr' }}
                                                name="title_{{ $locale->lang }}" id="title_{{ $locale->lang }}"
                                                rows="4" value="{{ @$item->translate($locale->lang)->title }}"
                                                required />
                                        </div>
                                    </div>
                                @endforeach

                                @foreach ($locales as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label
                                                for="description_{{ $locale->lang }}">{{ __('cp.description_' . $locale->lang) }}</label>
                                            <textarea class="form-control" {{ $locale->lang == 'ar' ? 'dir=rtl' : 'dir=ltr' }}
                                                name="description_{{ $locale->lang }}" id="description_{{ $locale->lang }}" rows="4" required>{{ @$item->translate($locale->lang)->description }}</textarea>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>


                        <div class="card-header">
                            <h3 class="card-title">{{ __('cp.other_data') }}</h3>
                            <br>
                        </div>


                        <div class="row col-sm-12">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('cp.mobile') }}</label>
                                    <input type="number" class="form-control" name="mobile" value="{{ $item->mobile }}"
                                        required />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('cp.email') }}</label>
                                    <input type="email" class="form-control" name="info_email"
                                        value="{{ $item->info_email }}" required />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('cp.tax_amount') }}</label>
                                    <input type="number" class="form-control" name="tax_amount"
                                        value="{{ $item->tax_amount }}" required />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('cp.currency') }}</label>
                                    <input type="text" class="form-control" name="currency"
                                        value="{{ $item->currency }}" required />
                                </div>
                            </div>

                        </div>

                        <div class="row col-sm-12">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('website.whatsapp') }}</label>
                                    <input type="text" class="form-control" name="whatsapp"
                                        value="{{ $item->whatsapp }}"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('cp.linkedin') }}</label>
                                    <input type="text" class="form-control" name="linkedin"
                                        value="{{ $item->linkedin }}"  />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('cp.facebook') }}</label>
                                    <input type="text" class="form-control" name="facebook"
                                        value="{{ $item->facebook }}"  />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('cp.twitter') }}</label>
                                    <input type="text" class="form-control" name="twitter" value="{{ $item->twitter }}"
                                         />
                                </div>
                            </div>

                        </div>

                </div>


                <div class="tab-content mt-5">
                    <div class="tab-pane fade show active" id="myTabContent2" role="tabpanel"
                        aria-labelledby="content-tab-main2">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="fileinputForm">
                                        <label>{{ __('cp.logo') }}</label>
                                        <div class="fileinput-new thumbnail"
                                            onclick="document.getElementById('edit_image1').click()"
                                            style="cursor:pointer">
                                            <img src="{{ $item->logo }}" id="editImage1">
                                        </div>
                                        <div class="btn btn-change-img red"
                                            onclick="document.getElementById('edit_image1').click()">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                        <input type="file" class="form-control" name="logo" id="edit_image1"
                                            style="display:none">
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="fileinputForm">
                                        <label>{{ __('cp.image') }}</label>
                                        <div class="fileinput-new thumbnail"
                                            onclick="document.getElementById('edit_image').click()"
                                            style="cursor:pointer">
                                            <img src="{{ $item->image }}" id="editImage">
                                        </div>
                                        <div class="btn btn-change-img red"
                                            onclick="document.getElementById('edit_image').click()">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                        <input type="file" class="form-control" name="image" id="edit_image"
                                            style="display:none">
                                    </div>
                                </div>


                            </div>

                        </div>



                    </div>





                </div>




                <button type="submit" id="submitForm" style="display:none"></button>
                </form>
            </div>
            <!--end::Card-->
        </div>
    @endsection
    @section('script')
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

            {{--        $("#foodie_section").on('switchChange.bootstrapSwitch',function (e,data) { --}}
            {{--            if(data == true) { --}}
            {{--                $(this).val(1); --}}
            {{--            } --}}
            {{--            else --}}
            {{--            { --}}
            {{--                $(this).val(0); --}}
            {{--            } --}}
            {{--        }); --}}

            {{--        $("#collection_section").on('switchChange.bootstrapSwitch',function (e,data) { --}}
            {{--            if(data == true) { --}}
            {{--                $(this).val(1); --}}
            {{--            } --}}
            {{--            else --}}
            {{--            { --}}
            {{--                $(this).val(0); --}}
            {{--            } --}}
            {{--        }); --}}

            {{--        $("#sufra_section").on('switchChange.bootstrapSwitch',function (e,data) { --}}
            {{--            if(data == true) { --}}
            {{--                $(this).val(1); --}}
            {{--            } --}}
            {{--            else --}}
            {{--            { --}}
            {{--                $(this).val(0); --}}
            {{--            } --}}
            {{--        }); --}}


            {{--        $("#tetaheba_section").on('switchChange.bootstrapSwitch',function (e,data) { --}}
            {{--            if(data == true) { --}}
            {{--                $(this).val(1); --}}
            {{--            } --}}
            {{--            else --}}
            {{--            { --}}
            {{--                $(this).val(0); --}}
            {{--            } --}}
            {{--        }); --}}





            {{--        function format(){ --}}
            {{--            var e = document.getElementById("type"); --}}
            {{--            var type = e.options[e.selectedIndex].value; --}}
            {{--            //alert(type); --}}

            {{--            if(type == 2){ --}}

            {{--                $('#park').removeClass('hidden'); --}}
            {{--                $('#edu').prop('required',true); --}}
            {{--            } --}}

            {{--            if(type == 1){ --}}
            {{--                $('#park').addClass('hidden'); --}}
            {{--                $('#edu').prop('required',false); --}}
            {{--            } --}}

            {{--        } --}}



            {{--        /* script */ --}}
            {{--        function initialize() { --}}
            {{--            var latlng = new google.maps.LatLng('{{$setting->latitude}}', '{{$setting->longitude}}'); --}}
            {{--            var map = new google.maps.Map(document.getElementById('map'), { --}}
            {{--                center: latlng, --}}
            {{--                zoom: 10 --}}
            {{--            }); --}}
            {{--            var marker = new google.maps.Marker({ --}}
            {{--                map: map, --}}
            {{--                position: latlng, --}}
            {{--                draggable: true, --}}
            {{--                anchorPoint: new google.maps.Point(0, -29) --}}
            {{--            }); --}}
            {{--            var input = document.getElementById('searchInput'); --}}
            {{--            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input); --}}
            {{--            var geocoder = new google.maps.Geocoder(); --}}
            {{--            var autocomplete = new google.maps.places.Autocomplete(input); --}}
            {{--            autocomplete.bindTo('bounds', map); --}}
            {{--            var infowindow = new google.maps.InfoWindow(); --}}
            {{--            autocomplete.addListener('place_changed', function () { --}}
            {{--                infowindow.close(); --}}
            {{--                marker.setVisible(false); --}}
            {{--                var place = autocomplete.getPlace(); --}}
            {{--                if (!place.geometry) { --}}
            {{--                    window.alert("Autocomplete's returned place contains no geometry"); --}}
            {{--                    return; --}}
            {{--                } --}}

            {{--                // If the place has a geometry, then present it on a map. --}}
            {{--                if (place.geometry.viewport) { --}}
            {{--                    map.fitBounds(place.geometry.viewport); --}}
            {{--                } else { --}}
            {{--                    map.setCenter(place.geometry.location); --}}
            {{--                    map.setZoom(17); --}}
            {{--                } --}}

            {{--                marker.setPosition(place.geometry.location); --}}
            {{--                marker.setVisible(true); --}}

            {{--                bindDataToForm(place.formatted_address, place.geometry.location.lat(), place.geometry.location.lng()); --}}
            {{--                infowindow.setContent(place.formatted_address); --}}
            {{--                infowindow.open(map, marker); --}}

            {{--            }); --}}
            {{--            // this function will work on marker move event into map --}}
            {{--            google.maps.event.addListener(marker, 'dragend', function () { --}}
            {{--                geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) { --}}
            {{--                    if (status == google.maps.GeocoderStatus.OK) { --}}
            {{--                        if (results[0]) { --}}
            {{--                            bindDataToForm(results[0].formatted_address, marker.getPosition().lat(), marker.getPosition().lng()); --}}
            {{--                            infowindow.setContent(results[0].formatted_address); --}}
            {{--                            infowindow.open(map, marker); --}}
            {{--                        } --}}
            {{--                    } --}}
            {{--                }); --}}
            {{--            }); --}}
            {{--        } --}}

            {{--        function bindDataToForm(address, lat, lng) { --}}
            {{--            document.getElementById('location').value = address; --}}
            {{--            document.getElementById('lat').value = lat; --}}
            {{--            document.getElementById('lng').value = lng; --}}
            {{-- //                                                console.log('location = ' + address); --}}
            {{-- //                                                console.log('lat = ' + lat); --}}
            {{-- //                                                console.log('lng = ' + lng); --}}
            {{--        } --}}

            {{--        google.maps.event.addDomListener(window, 'load', initialize); --}}

            $("#datepicker1").datepicker({
                onSelect: function(selectedDate) {
                    $("#datepicker1").val(selectedDate);
                }
            });

            $("#datepicker2").datepicker({
                onSelect: function(selectedDate) {
                    $("#datepicker2").val(selectedDate);
                }
            });
        </script>
    @endsection
