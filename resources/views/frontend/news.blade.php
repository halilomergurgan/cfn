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
                            <h1>News & Updates</h1>
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
                <!--Start single blog post-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="/frontend/images/resources/0d1fd34f22c9730e91eb5170fbddc114_XL.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <div class="icon">
                                            <a class="readmore" href="/about"><span class="icon-more"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="post-date">
                                <p>12th March, 2019</p>
                            </div>
                            <h3 class="blog-title"><a href="/about">We are attending to SOLAREX 2019 exhibition</a></h3>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="/frontend/images/blog/v1-3.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <div class="icon">
                                            <a class="readmore" href="/about"><span class="icon-more"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="post-date">
                                <p>12th March, 2019</p>
                            </div>
                            <h3 class="blog-title"><a href="/about">CFN Enerji is installing 10 MW Solar Power Station in Iraq</a></h3>
                        </div>

                    </div>
                </div>
                <!--End single blog post-->



            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="post-pagination text-center">
                        <li><a class="left" href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i><span>Prev</span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a class="right" href="#"><span>Next</span><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!--End blog area-->


@endsection

@section('css')

@endsection

@section('js')

@endsection
