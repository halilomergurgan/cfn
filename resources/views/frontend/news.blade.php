@extends('frontend.template')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/frontend/images/resources/ges.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="icon text-center">
                            <span class="icon-blog"></span>
                        </div>
                        <div class="title text-center">
                            <h1>{{ __('texts.navbar.newsAndUpdate') }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start blog area-->
    <section id="blog-area" class="blog-default-area">
        <div class="container">
            <div class="row">
                @foreach($news as $new)
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img  style="height: 270px; width: 367px;" src="{{$new->photo_path}}">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <div class="icon">
                                                <a class="readmore" href="/newshow/{{$new->id}}"><span class="icon-more"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="post-date">
                                    <p>{{$new->created_at}}</p>
                                </div>

                                <h3 class="blog-title" ><a href="/about">{!!__('texts.content.description', ['description' => $new->description_lang_name]) !!}</a></h3>

                            </div>
                        </div>
                    </div>
                @endforeach






            </div>


        </div>
    </section>
    <!--End blog area-->


@endsection

@section('css')

@endsection

@section('js')

@endsection
