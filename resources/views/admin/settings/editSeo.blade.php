@extends('layout.adminLayout')
@section('title')  {{ucwords(__('cp.seo_setting'))}}
@endsection
@section('css')
    {{--    <script type="text/javascript"--}}
    {{--            src="https://maps.googleapis.com/maps/api/js?key={{env('APIGoogleKey')}}&callback=initMap">--}}

    {{--    </script>--}}
    {{--    <style type="text/css">--}}
    {{--        .input-controls {--}}
    {{--            margin-top: 10px;--}}
    {{--            border: 1px solid transparent;--}}
    {{--            border-radius: 2px 0 0 2px;--}}
    {{--            box-sizing: border-box;--}}
    {{--            -moz-box-sizing: border-box;--}}
    {{--            height: 32px;--}}
    {{--            outline: none;--}}
    {{--            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);--}}
    {{--        }--}}

    {{--        #searchInput {--}}
    {{--            background-color: #fff;--}}
    {{--            font-family: Roboto;--}}
    {{--            font-size: 15px;--}}
    {{--            font-weight: 300;--}}
    {{--            margin-left: 12px;--}}
    {{--            padding: 0 11px 0 13px;--}}
    {{--            text-overflow: ellipsis;--}}
    {{--            width: 50%;--}}
    {{--        }--}}

    {{--        #searchInput:focus {--}}
    {{--            border-color: #4d90fe;--}}
    {{--        }--}}




    {{--    </style>--}}

@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline mr-5">
                        <h3>{{__('cp.seo_setting')}}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    {{--                    <a href="{{url(getLocal().'/admin/companies')}}" class="btn btn-secondary  mr-2">{{__('cp.cancel')}}</a>--}}
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
                    <form method="post" action="{{url(app()->getLocale().'/admin/system_seo')}}"
                          enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                    {{ csrf_field() }}



                    <!--<div class="card-header">-->

                    <!--    <h3 class="card-title">{{__('cp.seo_setting')}}</h3>-->

                        <!--</div>-->



                        <div class="card-body">
                            <div class="row">
                                @foreach($locales as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('cp.key_words_'.$locale->lang)}}</label>
                                            <input type="text" class="form-control"
                                                   {{($locale->lang == 'ar') ? 'dir=rtl' :'' }} name="key_words_{{$locale->lang}}"
                                                   value="{{@$item->translate($locale->lang)->key_words}}" />
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>


                        <div class="card-header">
                            <h3 class="card-title">{{__('cp.seo_setting')}}</h3>
                            <br>
                        </div>


                        <div class="row col-sm-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Seo In Body</label>
                                    <textarea class="form-control"
                                              name="seo_in_body"
                                              id="order" rows="4"
                                              >{{$item->seo_in_body}}</textarea>

                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Seo In Header</label>
                                    <textarea class="form-control"
                                              name="seo_in_header"
                                              id="order" rows="4"
                                              >{{$item->seo_in_header}}</textarea>
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
                $('#edit_image').on('change', function (e) {
                    readURL(this, $('#editImage'));
                });


                $('#edit_image1').on('change', function (e) {
                    readURL(this, $('#editImage1'));
                });
                $(document).on('click', '#submitButton', function () {
                    // $('#submitButton').addClass('spinner spinner-white spinner-left');
                    $('#submitForm').click();
                });

                {{--        $("#foodie_section").on('switchChange.bootstrapSwitch',function (e,data) {--}}
                {{--            if(data == true) {--}}
                {{--                $(this).val(1);--}}
                {{--            }--}}
                {{--            else--}}
                {{--            {--}}
                {{--                $(this).val(0);--}}
                {{--            }--}}
                {{--        });--}}

                {{--        $("#collection_section").on('switchChange.bootstrapSwitch',function (e,data) {--}}
                {{--            if(data == true) {--}}
                {{--                $(this).val(1);--}}
                {{--            }--}}
                {{--            else--}}
                {{--            {--}}
                {{--                $(this).val(0);--}}
                {{--            }--}}
                {{--        });--}}

                {{--        $("#sufra_section").on('switchChange.bootstrapSwitch',function (e,data) {--}}
                {{--            if(data == true) {--}}
                {{--                $(this).val(1);--}}
                {{--            }--}}
                {{--            else--}}
                {{--            {--}}
                {{--                $(this).val(0);--}}
                {{--            }--}}
                {{--        });--}}


                {{--        $("#tetaheba_section").on('switchChange.bootstrapSwitch',function (e,data) {--}}
                {{--            if(data == true) {--}}
                {{--                $(this).val(1);--}}
                {{--            }--}}
                {{--            else--}}
                {{--            {--}}
                {{--                $(this).val(0);--}}
                {{--            }--}}
                {{--        });--}}





                {{--        function format(){--}}
                {{--            var e = document.getElementById("type");--}}
                {{--            var type = e.options[e.selectedIndex].value;--}}
                {{--            //alert(type);--}}

                {{--            if(type == 2){--}}

                {{--                $('#park').removeClass('hidden');--}}
                {{--                $('#edu').prop('required',true);--}}
                {{--            }--}}

                {{--            if(type == 1){--}}
                {{--                $('#park').addClass('hidden');--}}
                {{--                $('#edu').prop('required',false);--}}
                {{--            }--}}

                {{--        }--}}



                {{--        /* script */--}}
                {{--        function initialize() {--}}
                {{--            var latlng = new google.maps.LatLng('{{$setting->latitude}}', '{{$setting->longitude}}');--}}
                {{--            var map = new google.maps.Map(document.getElementById('map'), {--}}
                {{--                center: latlng,--}}
                {{--                zoom: 10--}}
                {{--            });--}}
                {{--            var marker = new google.maps.Marker({--}}
                {{--                map: map,--}}
                {{--                position: latlng,--}}
                {{--                draggable: true,--}}
                {{--                anchorPoint: new google.maps.Point(0, -29)--}}
                {{--            });--}}
                {{--            var input = document.getElementById('searchInput');--}}
                {{--            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);--}}
                {{--            var geocoder = new google.maps.Geocoder();--}}
                {{--            var autocomplete = new google.maps.places.Autocomplete(input);--}}
                {{--            autocomplete.bindTo('bounds', map);--}}
                {{--            var infowindow = new google.maps.InfoWindow();--}}
                {{--            autocomplete.addListener('place_changed', function () {--}}
                {{--                infowindow.close();--}}
                {{--                marker.setVisible(false);--}}
                {{--                var place = autocomplete.getPlace();--}}
                {{--                if (!place.geometry) {--}}
                {{--                    window.alert("Autocomplete's returned place contains no geometry");--}}
                {{--                    return;--}}
                {{--                }--}}

                {{--                // If the place has a geometry, then present it on a map.--}}
                {{--                if (place.geometry.viewport) {--}}
                {{--                    map.fitBounds(place.geometry.viewport);--}}
                {{--                } else {--}}
                {{--                    map.setCenter(place.geometry.location);--}}
                {{--                    map.setZoom(17);--}}
                {{--                }--}}

                {{--                marker.setPosition(place.geometry.location);--}}
                {{--                marker.setVisible(true);--}}

                {{--                bindDataToForm(place.formatted_address, place.geometry.location.lat(), place.geometry.location.lng());--}}
                {{--                infowindow.setContent(place.formatted_address);--}}
                {{--                infowindow.open(map, marker);--}}

                {{--            });--}}
                {{--            // this function will work on marker move event into map--}}
                {{--            google.maps.event.addListener(marker, 'dragend', function () {--}}
                {{--                geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {--}}
                {{--                    if (status == google.maps.GeocoderStatus.OK) {--}}
                {{--                        if (results[0]) {--}}
                {{--                            bindDataToForm(results[0].formatted_address, marker.getPosition().lat(), marker.getPosition().lng());--}}
                {{--                            infowindow.setContent(results[0].formatted_address);--}}
                {{--                            infowindow.open(map, marker);--}}
                {{--                        }--}}
                {{--                    }--}}
                {{--                });--}}
                {{--            });--}}
                {{--        }--}}

                {{--        function bindDataToForm(address, lat, lng) {--}}
                {{--            document.getElementById('location').value = address;--}}
                {{--            document.getElementById('lat').value = lat;--}}
                {{--            document.getElementById('lng').value = lng;--}}
                {{--//                                                console.log('location = ' + address);--}}
                {{--//                                                console.log('lat = ' + lat);--}}
                {{--//                                                console.log('lng = ' + lng);--}}
                {{--        }--}}

                {{--        google.maps.event.addDomListener(window, 'load', initialize);--}}
            </script>
@endsection
