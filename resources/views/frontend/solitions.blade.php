@extends('frontend.template')

@section('content')

    <section class="breadcrumb-area" style="background-image: url(frontend/images/resources/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="icon text-center">
                            <span class="flaticon-alert"></span>
                        </div>
                        <div class="title text-center">
                            <h1>Single Solution</h1>
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
                        <h2>Standyby Power & Energy System</h2>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="single-service-carousel owl-carousel owl-theme">
                                    <!--Start Single Item-->
                                    <div class="single-item">
                                        <div class="img-holder">
                                            <div class="icon-box">
                                                <span class="icon-power"></span>
                                            </div>
                                            <img src="frontend/images/services/service-single/single-service-1.jpg" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <!--End Single Item-->
                                    <!--Start Single Item-->
                                    <div class="single-item">
                                        <div class="img-holder">
                                            <div class="icon-box">
                                                <span class="icon-power"></span>
                                            </div>
                                            <img src="frontend/images/services/service-single/single-service-2.jpg" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <!--End Single Item-->
                                    <!--Start Single Item-->
                                    <div class="single-item">
                                        <div class="img-holder">
                                            <div class="icon-box">
                                                <span class="icon-power"></span>
                                            </div>
                                            <img src="frontend/images/services/service-single/single-service-3.jpg" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <!--End Single Item-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-service-text">
                                <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally occur in which toil and pain can procure.</p>   <p>Who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally occur in which toil pain can procure him some great pleasure.</p>
                            </div>
                        </div>
                    </div>

                    <div class="research-development">
                        <div class="sec-title-box">
                            <h2>Research & Development</h2>
                            <p>Use these core principles along with tools like computer-aided design, product lifecycle management to design and analyze manufacturing plants, industrial equipment and machinery.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <h4>Step 01</h4>
                                            <p>Production technques ( irrigation managment, recommended nitrogen inputs)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <h4>Step 02</h4>
                                            <p>Improving agricultural productivity in terms of quantity and quality.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <h4>Step 03</h4>
                                            <p>Minimizing the effects  pests (weeds, insects, pathogens, nematodes) on animal production or crop systems.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-5">
                                <div class="graph-outer clearfix">
                                    <div class="donut-graph">
                                        <canvas id="profit-improvement-graph" style="width:100%;"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="single-service-text-box">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="single-box float-left">
                                    <h3>Clean Unpolluted</h3>
                                    <p>To take a trivial example, which of us ever undertakes laboris physical exercise obtain some advantage.</p>
                                </div>
                                <div class="single-box float-right">
                                    <h3>Clean Unpolluted</h3>
                                    <p>To take a trivial example, which of us ever undertakes laboris physical exercise obtain some advantage.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-solution-box">
                        <div class="sec-title-box">
                            <h2>Services & Solutions</h2>
                            <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtainsome advantage from it who has any right to find fault with a to enjoy.</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <ul>
                                    <li>
                                        <div class="icon-holder one">
                                            <span class="flaticon-power"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Solar Energy</h3>
                                            <p>Idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-farm"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Wind Mills</h3>
                                            <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-hydro"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Hydro Power</h3>
                                            <p>Any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="single-service-tab-box">
                        <div class="sec-title-box">
                            <h2>Service Result</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="service-tab-box">
                                    <div class="tabmenu-box">
                                        <ul class="tab-menu">
                                            <li data-tab-name="precautions" class="active"><span>Precautions</span></li>
                                            <li data-tab-name="intelligence"><span>Intelligence</span></li>
                                            <li data-tab-name="specials"><span>Specials</span></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content-box">
                                        <div class="single-tab-content" id="precautions">
                                            <div class="top-content">
                                                <p>Processing and refining operatons turn crude oil and gas into marktable products the case of crude oil, these products include heating oil, gasoline for use in vehicles, jet fuel, and diesel oil include distillation, vacuum distillation, catalytic reforming, catalytic.</p>
                                            </div>
                                        </div>
                                        <div class="single-tab-content" id="intelligence">
                                            <div class="top-content">
                                                <p>Statistic professionals provide a wide range off valuation and business analytic seds services. Whether you’re a startup or among that Fortune 500, all our seds offerings are scalable to your unique needs. Our flat, non -bure aucratic structure allows us to be nimble and responsive. Fortune 500, all our seds offerings are scalable to your unique needs. Our flat, non -bure aucratic structure allows us to be nimble</p>
                                            </div>
                                        </div>
                                        <div class="single-tab-content" id="specials">
                                            <div class="top-content">
                                                <p>Gasoline for use in vehicles, jet fuel, and diesel oil include distillation, vacuum distillation, catalytic reforming, catalytic. Processing and refining operatons turn crude oil and gas into marktable products the case of crude oil, these products include heating oil</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                <li class="active"><a href="ser-gas-petroleum.html">Gas & Petroleum</a></li>
                                <li><a href="ser-standby-power.html">Standby Power</a></li>
                                <li><a href="ser-agriculture.html">Agriculture</a></li>
                                <li><a href="ser-military-contracts.html">Military Contracts</a></li>
                                <li><a href="ser-oe-manufactures.html">OE Manufactures</a></li>
                                <li><a href="ser-marine-contracts.html">Marine Contracts</a></li>
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
                            <h4>Quick Contact</h4>
                            <ul>
                                <li>Ph: +555 5678 12340</li>
                                <li>Email: info@example.com</li>
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
