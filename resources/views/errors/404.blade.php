@extends('layout.siteLayout')
@section('css')

@endsection

@section('content')

     <section class="not_found_page stag-padding">
		    <div class="container">
                <div class="cont-not-found">
                    <div class="thumb-not-found wow fadeInUp">
                        <figure><img src="{{url('website/images/404.svg')}}" alt="Images 404" /></figure>
                    </div>
                    <div class="txt-not-found wow fadeInUp">
                        <h5>@lang('website.page_not_found')</h5>
                        <p>@lang('website.the_page_you_are_looking') <br /> @lang('website.renamed')</p>
                        <a href="{{url('/')}}" class="btn-site"><span>@lang('website.back_to_home')</span></a>

                    </div>
                </div>
		    </div>
		</section>
		<!--not_found_page-->

        

@endsection

@section('script')

@endsection
