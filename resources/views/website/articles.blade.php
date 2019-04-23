@extends('layouts.app')
@section('content')

    <!-- Start main-content -->

    <div class="main-content">
        <section class="">
            <div class="container">
                <div class="blog-posts">
                    <div class="col-md-12">
                        <div class="list-dashed">
                            @foreach($articles as $article )
                            <article class="post clearfix mb-30 pb-30">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="entry-header">
                                            <div class="post-thumb"> <img class="img-responsive img-fullwidth" src="{{url('uploads/articles')}}/{{($article->image)}}" alt=""> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="entry-content mt-0">
                                            <a href="#">
                                                <h4 class="entry-title mt-0 pt-0">{{$article->text}}</h4>
                                            </a>
                                            <ul class="list-inline font-12 mb-20 mt-10">
                                                <li>posted by <a href="#" class="text-theme-colored">Admin |</a></li>
                                                <li><span class="text-theme-colored">SEP 12,15</span></li>
                                            </ul>
                                            <p class="mb-30">{{$article->short_description}}<a href="#">[...]</a></p>
                                            <ul class="list-inline like-comment pull-left font-12">
                                                <li><i class="pe-7s-comment"></i>36</li>
                                                <li><i class="pe-7s-like2"></i>125</li>
                                            </ul>
                                            <a class="pull-right text-gray font-13" href="{{url('article')}}/{{$article->id}}"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>

                        <nav>
                            <ul class="pagination theme-colored">
                                <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">«</span> </a> </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li> <a aria-label="Next" href="#"> <span aria-hidden="true">»</span> </a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>





    </div>

    @endsection
