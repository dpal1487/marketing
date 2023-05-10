@extends('layouts.app')
@section('content')

<div class="banner-area">
    <div id="bootcarousel" class="carousel inc-top-heading slide carousel-fade animate_text" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner text-light carousel-zoom">
            <div class="item active">
                <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/1.jpg);"></div>
                <div class="box-table shadow dark">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h3 data-animation="animated slideInRight">Welcome to buspro</h3>
                                        <h1 data-animation="animated slideInLeft">We are <span>Providing</span> Best Business Service</h1>
                                        <a data-animation="animated slideInUp" class="btn btn-light effect btn-md" href="#">View Projects</a>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/2.jpg);"></div>
                <div class="box-table shadow dark">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h3 data-animation="animated slideInUp">Include more sales</h3>
                                        <h1 data-animation="animated slideInDown">make unique <span>planning</span> for your business</h1>
                                        <a data-animation="animated slideInUp" class="btn btn-light effect btn-md" href="#">View Projects</a>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/3.jpg);"></div>
                <div class="box-table shadow dark">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h3 data-animation="animated slideInLeft">More convenient than others</h3>
                                        <h1 data-animation="animated slideInRight">Find Value And <span>Build</span> confidence</h1>
                                        <a data-animation="animated slideInUp" class="btn btn-light effect btn-md" href="#">View Projects</a>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
<div class="services-area bg-gray default-padding bottom-less ">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Case Studies</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="services-items item-cell">
                <!-- Single Item -->
                <div class="col-md-6 col-sm-12 equal-height">
                    <div class="item">

                        <div class="info">
                            <p>
                                At MarketElevate Research, we have a proven track record of delivering high-quality research solutions to our clients. Here are some examples of successful projects we've completed for our clients.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-6 col-sm-12 equal-height">
                    <div class="item">
                        <div class="info">
                            <p>
                                A leading consumer goods company wanted to understand consumer attitudes towards their products. We conducted an online survey of their target audience and provided them with valuable insights that helped them improve their marketing strategies and product development.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-6 col-sm-12 equal-height">
                    <div class="item">
                        <div class="info">
                            <p>
                                A financial services company wanted to improve their customer experience. We conducted in-depth interviews with their customers and provided them with insights that helped them improve their customer service and loyalty programs.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-6 col-sm-12 equal-height">
                    <div class="item">
                        <div class="info">
                            <p>
                                A healthcare provider wanted to better understand patient satisfaction. We conducted a series of focus groups with their patients and provided them with insights that helped them improve their services and patient experience.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-6 col-sm-12 equal-height">
                    <div class="item">
                        <div class="info">
                            <p>
                                Contact us today to learn more about how we can help you achieve your business goals.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
@endsection