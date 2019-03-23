@extends('frontend.template')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/frontend/images/resources/kurumsal-prime-1384x480.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="icon text-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--Start about content area-->
    <section class="about-content-area">
        @foreach($abouts as $about)
            <div class="container">
                <div class="row">
                    <!--Start single blog post-->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="about-content-box">
                            <h2>{{ __('texts.content.title', ['title' => $about->title_lang_name]) }}</h2>
                            <p>{!! __('texts.content.description', ['description' => $about->description_lang_name]) !!} </p>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="about-right-img">
                            <img src="/frontend/images/resources/gunes-enerjisi-1-1024x768.jpg">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

    </section>
    <!--End about content area-->


@endsection

@section('css')

@endsection

@section('js')

@endsection
