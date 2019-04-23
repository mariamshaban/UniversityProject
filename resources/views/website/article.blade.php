@extends('layouts.app')
@section('content')
    <!-- Start main-content -->

    <div class="main-content">
        <section class="">
            <div class="container">
                <div class="section-content">



                    <div class="row">
                        <div class="col-md-9 blog-pull-right">
                            <div class="blog-posts single-post">
                                <article class="post clearfix mb-0">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb"> <img src="{{url('uploads/articles')}}/{{$article->image}}" alt="" class="img-responsive img-fullwidth"> </div>
                                    </div>
                                    <div class="entry-title pt-10 pl-15">
                                        <h4><a class="text-uppercase" href="#">{{$article->name}}</a></h4>
                                    </div>
                                    <div class="entry-meta pl-15">
                                        <ul class="list-inline">
                                            <li>Posted: <span class="text-theme-color-2"> {{$article->created_at}}</span></li>
                                            <li>By: <span class="text-theme-color-2">Admin</span></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content mt-10">
                                        <p class="mb-15">{{$article->text}}</p>

                                        <div class="mt-30 mb-0">
                                            <h5 class="pull-left mt-10 mr-20 text-theme-color-2">Share:</h5>
                                            <ul class="styled-icons icon-circled m-0">
                                                <li><a href="#" data-bg-color="#3A5795" style="background: rgb(58, 87, 149) !important;"><i class="fa fa-facebook text-white"></i></a></li>
                                                <li><a href="#" data-bg-color="#55ACEE" style="background: rgb(85, 172, 238) !important;"><i class="fa fa-twitter text-white"></i></a></li>
                                                <li><a href="#" data-bg-color="#A11312" style="background: rgb(161, 19, 18) !important;"><i class="fa fa-google-plus text-white"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>

                                <div class="author-details media-post">
                                    <a href="#" class="post-thumb mb-0 pull-left flip pr-20"><img class="img-thumbnail" alt="" src="http://placehold.it/110x110"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-0"><a href="#" class="font-18">John Doe</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>


                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="sidebar sidebar-left mt-sm-30">
                                <div class="widget">
                                    <h5 class="widget-title line-bottom">Search box</h5>
                                    <div class="search-form">

                                            <div class="input-group">
                                                <input type="text" placeholder="Click to Search" class="form-control search-input">
                                                <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                                            </div>
                                        <div class="search-error"></div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h5 class="widget-title line-bottom">Latest News</h5>
                                    @foreach($lastarticles as $article)
                                    <div class="latest-posts">
                                        <article class="post media-post clearfix pb-0 mb-10">
                                            <a class="post-thumb" href="#"><img src="{{url('uploads/articles')}}/{{$article->image}}" alt=""></a>
                                            <div class="post-right">
                                                <h5 class="post-title mt-0"><a href="#">{{$article->name}}</a></h5>
                                                <p>{{$article->short_description}}</p>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

@endsection
