@extends('app/include//base')
@section('content')
<div class="page-content bg-white">
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{ URL('/') }}">Home</a></li>
                <li>Blog Classic</li>
            </ul>
        </div>
    </div>
    <!-- Page Heading Box END ==== -->
    <!-- Page Content Box ==== -->
    <div class="content-block">
        <!-- Blog Grid ==== -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="ttr-blog-grid-3 row" id="masonry">
                    <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                        <div class="recent-news">
                            <div class="action-box">
                                <img src="{{ URL('images/blog/latest-blog/pic1.jpg') }}" alt="">
                            </div>
                            <div class="info-bx">
                                <ul class="media-post">
                                    <li><a href="#"><i class="fa fa-calendar"></i>Jan 02 2019</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i>By William</a></li>
                                </ul>
                                <h5 class="post-title"><a href="{{ URL('blog_details') }}">This Story Behind Education Will
                                        Haunt You Forever.</a></h5>
                                <p>Knowing that, you’ve optimised your pages countless amount of times, written tons.
                                </p>
                                <div class="post-extra">
                                    <a href="#" class="btn-link">READ MORE</a>
                                    <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20 Comment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                        <div class="recent-news">
                            <div class="action-box">
                                <img src="{{ URL('images/blog/latest-blog/pic2.jpg') }}" alt="">
                            </div>
                            <div class="info-bx">
                                <ul class="media-post">
                                    <li><a href="#"><i class="fa fa-calendar"></i>Feb 05 2019</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i>By John</a></li>
                                </ul>
                                <h5 class="post-title"><a href="{{ URL('blog_details') }}">What Will Education Be Like In The
                                        Next 50 Years?</a></h5>
                                <p>As desperate as you are right now, you have done everything you can on your.</p>
                                <div class="post-extra">
                                    <a href="#" class="btn-link">READ MORE</a>
                                    <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>14 Comment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                        <div class="recent-news">
                            <div class="action-box">
                                <img src="{{ URL('images/blog/latest-blog/pic3.jpg') }}" alt="">
                            </div>
                            <div class="info-bx">
                                <ul class="media-post">
                                    <li><a href="#"><i class="fa fa-calendar"></i>April 14 2019</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i>By George</a></li>
                                </ul>
                                <h5 class="post-title"><a href="{{ URL('blog_details') }}">Master The Skills Of Education And
                                        Be.</a></h5>
                                <p>You will see in the guide all my years of valuable experience together with.</p>
                                <div class="post-extra">
                                    <a href="#" class="btn-link">READ MORE</a>
                                    <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>23 Comment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                        <div class="recent-news">
                            <div class="action-box">
                                <img src="{{ URL('mages/blog/latest-blog/pic3.jpg') }}" alt="">
                            </div>
                            <div class="info-bx">
                                <ul class="media-post">
                                    <li><a href="#"><i class="fa fa-calendar"></i>March 21 2019</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i>By Thomas</a></li>
                                </ul>
                                <h5 class="post-title"><a href="{{ URL('blog_details') }}">Eliminate Your Fears And Doubts About
                                        Education.</a></h5>
                                <p>When I needed to start from scratch and figure out how things work. Getting people.
                                </p>
                                <div class="post-extra">
                                    <a href="#" class="btn-link">READ MORE</a>
                                    <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>28 Comment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                        <div class="recent-news">
                            <div class="action-box">
                                <img src="{{ URL('images/blog/latest-blog/pic1.jpg') }}" alt="">
                            </div>
                            <div class="info-bx">
                                <ul class="media-post">
                                    <li><a href="#"><i class="fa fa-calendar"></i>May 08 2019</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i>By James</a></li>
                                </ul>
                                <h5 class="post-title"><a href="{{ URL('blog_details') }}">Seven Reasons You Should Fall In Love
                                        With Education.</a></h5>
                                <p>Honestly, I made ZERO money in the first year and I definitely do not want you to go.
                                </p>
                                <div class="post-extra">
                                    <a href="#" class="btn-link">READ MORE</a>
                                    <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>26 Comment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                        <div class="recent-news">
                            <div class="action-box">
                                <img src="{{ URL('images/blog/latest-blog/pic2.jpg') }}" alt="">
                            </div>
                            <div class="info-bx">
                                <ul class="media-post">
                                    <li><a href="#"><i class="fa fa-calendar"></i>June 19 2019</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i>By Arthur</a></li>
                                </ul>
                                <h5 class="post-title"><a href="{{ URL('blog_details') }}">The Biggest Contribution Of Education
                                        To Humanity.</a></h5>
                                <p>You may have seen our tool that's been featured by many world-class SEO marketers.
                                </p>
                                <div class="post-extra">
                                    <a href="#" class="btn-link">READ MORE</a>
                                    <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>15 Comment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination ==== -->
                <div class="pagination-bx rounded-sm gray clearfix">
                    <ul class="pagination">
                        <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                    </ul>
                </div>
                <!-- Pagination END ==== -->
            </div>
        </div>
        <!-- Blog Grid END ==== -->
    </div>
    <!-- Page Content Box END ==== -->
</div>
@endsection