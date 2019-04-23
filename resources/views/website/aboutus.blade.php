@extends('layouts.app')
@section('content')

    <!-- Start main-content -->
    <div class="main-content">
        <section class="">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">{{$aboutus->title}}</h2>
                            <h4 class="text-theme-colored"> </h4>
                            <p>{{$aboutus->text}}}</p>

                        </div>
                        <div class="col-md-6">
                            <div class="video-popup">
                                <a href="https://www.youtube.com/watch?v=pW1uVUg5wXM" data-lightbox-gallery="youtube-video" title="Video">
                                    <img alt="" src="{{url('uploads/about')}}/{{$aboutus->image}}" class="img-responsive img-fullwidth">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="line-bottom mt-0 line-height-1">ما <span class="text-theme-color-2">يميزنا</span></h3>
                            <p class="mb-10">{{$aboutus->title2}}  </p>

                            <div id="accordion1" class="panel-group accordion">
                                @foreach($services as $service)
                                <div class="panel">
                                    <div class="panel-title"> <a class="collapsed" data-parent="#accordion_{{$service->id}}" data-toggle="collapse" href="#accordion_{{$service->id}}" aria-expanded="false"> <span class="open-sub"></span> {{$service->title}} </a> </div>
                                    <div id="accordion_{{$service->id}}" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-content">
                                            <p>{{$service->text}} </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>










@endsection
