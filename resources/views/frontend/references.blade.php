@extends('frontend.template')

@section('content')

    <section class="services-style1-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title">Markert We Serve</div>
                <div class="inner">
                    <div class="border1"></div>
                    <span>Solutions</span>
                    <div class="border2"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="services-carousel owl-carousel owl-theme">
                        @foreach($references as $reference)
                        <div class="single-solution-style1">
                                <div class="statics-content">
                                    <div class="text-holder">
                                        <div class="icon">
                                            <span class=""></span>
                                        </div>
                                        <div class="text">
                                            <h3>{{$reference->title_tr}}</h3>
                                            <h3>{{$reference->employers}}</h3>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @endforeach
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
