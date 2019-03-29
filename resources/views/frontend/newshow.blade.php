@extends('frontend.template')

@section('content')

    <section class="breadcrumb-area" style="background-image: url(/frontend/images/resources/solutions.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="icon text-center">
                            <span class="flaticon-alert"></span>
                        </div>
                        <div class="title text-center">
                            <h1>{{$news_update->title_lang_name}}</h1>
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
                        <h2>{{$news_update->title_lang_name}}</h2>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="single-service-carousel owl-carousel owl-theme">
                                    <div class="single-item">
                                        <div class="img-holder">
                                            <div class="icon-box">
                                                <span class="icon-power"></span>
                                            </div>
                                            <img src="{{$news_update->photo_path}}">
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
                                    {!! $news_update->description_lang_name !!}
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
                                <h3>{{__('texts.navbar.IndustrySolutions')}}</h3>
                            </div>
                            <ul class="service-pages">
                                @foreach($news as $new)
                                    <li class="active"><a href="/solutions/{{$new->id}}">{{$new->title_lang_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-contact-box text-center">
                            <a class="btn-one" href="/contact">{{__('texts.navbar.GetaQuote')}}</a>
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
@endsection

@section('css')

@endsection

@section('js')

@endsection
