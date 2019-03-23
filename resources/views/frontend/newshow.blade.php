@extends('frontend.template')

@section('content')
    @foreach($news as $value)
    @endforeach
    <section class="breadcrumb-area" style="background-image: url(frontend/images/resources/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="icon text-center">
                            <span class="flaticon-alert"></span>
                        </div>
                        <div class="title text-center">
                            <h1>{{$value->title_lang_name}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="single-service-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                    <div class="single-service-top">
                        <h2>{{$value->title_lang_name}}</h2>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="single-service-carousel owl-carousel owl-theme">
                                    <div class="single-item">
                                        <div class="img-holder">
                                            <div class="icon-box">
                                                <span class="icon-power"></span>
                                            </div>
                                            <img src="{{$value->photo_path}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-service-text">
                                <p>
                                    {!! $value->description_lang_name !!}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                    <div class="single-service-sidebar">
                        <!--Start Single sidebar-->
                        <div class="single-sidebar">
                            <div class="title-box">
                                <h3>Industry Solutions</h3>
                            </div>
                            <ul class="service-pages">
                                @foreach($news as $new)
                                    <li class="active"><a href="/solutions/{{$new->id}}">{{$new->title_lang_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!--End Single sidebar-->

                        <!--Start Single sidebar-->
                        <div class="single-sidebar">
                            <div class="title-box">
                                <h3>Our Materials</h3>
                            </div>
                            <ul class="our-materials">
                                <li>
                                    <a href="#">
                                        <div class="icon-holder">
                                            <span class="flaticon-word"></span>
                                        </div>
                                        <div class="title-holder">
                                            <h3>Service Overview<br> 1.3 mb</h3>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon-holder">
                                            <span class="flaticon-text-file"></span>
                                        </div>
                                        <div class="title-holder">
                                            <h3>Company Overview<br> 2.5 mb</h3>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--End Single sidebar-->

                        <!--Start Single sidebar-->
                        <div class="single-sidebar">
                            <div class="title-box">
                                <h3>Why Our Service?</h3>
                            </div>
                            <ul class="why-service">
                                <li>
                                    <a href="#">
                                        <div class="icon-holder">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="title-holder">
                                            <h4>Quality brands and Work</h4>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon-holder">
                                            <span class="flaticon-contract"></span>
                                        </div>
                                        <div class="title-holder">
                                            <h4>Fully licensed and insured</h4>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon-holder">
                                            <span class="flaticon-ribbon"></span>
                                        </div>
                                        <div class="title-holder">
                                            <h4>100% service warranty</h4>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--End Single sidebar-->

                        <div class="sidebar-contact-box text-center">
                            <h3>Let’s Start Work<br> Together</h3>
                            <a class="btn-one" href="#">Get a Quote</a>
                            <h4>{{__('texts.navbar.quickContact')}}</h4>
                            <ul>
                                <li>Ph: +90 382 202 00 72</li>
                                <li>Email: info@cfnenerji.com</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Single Service Area-->

    <!--Start Caption Area-->
    <section class="caption-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="caption-title float-left">
                        <h2>Quality service for construction projects and Automative service.</h2>
                    </div>
                    <div class="request-button float-right">
                        <a class="btn-one" href="#">Request for a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('css')

@endsection

@section('js')

@endsection
