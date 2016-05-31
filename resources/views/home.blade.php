@extends('layouts.master')

@section('content')
        <!--=========== BEGIN SLIDER SECTION ================-->
<div id="captioned-gallery">
    <figure class="slider">
        <figure>
            <img class="img-responsive" src="src/images/slider/2.jpg" alt>
            <div class="slider_caption">
                <h2>Largest & Beautiful University</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <!--<a class="slider_btn" href="#">Know More</a>-->
            </div>
            <!--<figcaption>LARGEST CLASS ROOM</figcaption>-->
        </figure>
        <figure>
            <img class="img-responsive" src="src/images/slider/3.jpg" alt>
            <div class="slider_caption slider_right_caption">
                <h2>Better Education Environment</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                <!--<a class="slider_btn" href="#">Know More</a>-->
            </div>
            <!--<figcaption>BETTER EDUCATION ENVIRONMENT</figcaption>-->
        </figure>
        <figure>
            <img class="img-responsive" src="src/images/slider/4.jpg" alt>
            <div class="slider_caption">
                <h2>Find out you in better way</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                <!--<a class="slider_btn" href="#">Know More</a>-->
            </div>
            <!--<figcaption>Utah, United States</figcaption>-->
        </figure>
        <figure>
            <img class="img-responsive" src="src/images/slider/2.jpg" alt>
            <div class="slider_caption">
                <h2>Largest & Beautiful University</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <!--<a class="slider_btn" href="#">Know More</a>-->
            </div>
            <!--<figcaption>LARGEST CLASS ROOM</figcaption>-->
        </figure>
    </figure>
</div>
<!--=========== END SLIDER SECTION ================-->
<!--=========== BEGIN ABOUT US SECTION ================-->
<section id="aboutUs">
    <div class="container">
        <div class="row">
            <!-- Start about us area -->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="aboutus_area wow fadeInLeft">
                    <h2 class="titile">About Us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Panel Heading</div>
                    <div class="panel-body">
                        <ul class="news_tab">
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <a class="news_img" href="#">
                                            <img class="media-object" src="src/images/news.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Dummy text of the printing and typesetting industry</a>
                                        <span class="feed_date">27.02.15</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <a class="news_img" href="#">
                                            <img class="media-object" src="src/images/news.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Dummy text of the printing and typesetting industry</a>
                                        <span class="feed_date">28.02.15</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <a class="news_img" href="#">
                                            <img class="media-object" src="src/images/news.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Dummy text of the printing and typesetting industry</a>
                                        <span class="feed_date">28.02.15</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a class="see_all" href="#">See All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== END ABOUT US SECTION ================-->

@endsection
