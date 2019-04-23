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
                                        <div class="post-thumb thumb">

                                        </div>
                                    </div>
                                    <div class="entry-title pt-10 pl-15">
                                        <div class="col-sm-12">
                                            <h2><a class="text-uppercase" href="#">  {{$university->name_en}} <br>
                                            {{$university->name_ar}}                                            </a></h2>
                                        </div>
                                    </div>
                                    <div class="clear clearfix"></div>
                                    <div class="entry-content mt-10">
                                        <h4>عن الجامعة</h4>
                                        <p>
                                            {{$university->about}}
                                        </p>
                                    </div>

                                </article>
                                <br>
                                <div class="col-sm-6">
                                    <h5>بكالوريوس</h5>
                                    
                                    <div id="accordion1" class="panel-group accordion">

                                        @foreach($time1 as $t1)
                                            <div class="panel">
                                                <div class="panel-title"> <a data-parent="#accordion_{{$t1->id}}" data-toggle="collapse" href="#accordion_{{$t1->id}}" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> {{$t1->name}} </a> </div>
                                                <div id="accordion_{{$t1->id}}" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                                                    <div class="panel-content">
                                                        <p>{{$t1->description}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                   
                                </div>

                                <div class="col-sm-6">
                                    <h5>دراسات عليا</h5>
                                    <div id="accordion1" class="panel-group accordion">
                                        @foreach($time as $t)
                                            <div class="panel">
                                                <div class="panel-title"> <a data-parent="#accordion_{{$t->id}}" data-toggle="collapse" href="#accordion_{{$t->id}}" class="collapsed" aria-expanded="false"> <span class="open-sub"></span>  {{$t->name}}</a> </div>
                                                <div id="accordion_{{$t->id}}" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                                                    <div class="panel-content">
                                                        <p> {{$t->description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-3">
                            <div class="sidebar sidebar-left mt-sm-30">

                                <div class="widget">
                                    <div class="wpb_wrapper">
                                        <div class="university-information">
                                            <div class="univ-logo">
                                                <div class="univ-logo image">
                                                    <div><img width="150" height="150" src="{{url('uploads/university')}}/{{$university->image}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="" sizes="(max-width: 150px) 100vw, 150px"></div>
                                                </div>
                                            </div>
                                            <p>&nbsp;</p>
                                            <div><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;المدينة:&nbsp;&nbsp;{{$university->city->name_ar}}</div>
                                            <p>&nbsp;</p>
                                            <div><i class="fa fa-area-chart"></i>&nbsp;&nbsp;&nbsp;الترتيب العالمي:&nbsp;&nbsp;{{$university->int_order}}</div>
                                            <p>&nbsp;</p>
                                            <div><i class="fa fa-line-chart"></i>&nbsp;&nbsp;&nbsp;الترتيب المحلي:&nbsp;&nbsp;{{$university->loc_order}}</div>
                                            <p>&nbsp;</p>
                                            <div><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;&nbsp;تاريخ التأسيس:&nbsp;&nbsp;{{$university->est_date}}</div>
                                            <p>&nbsp;</p>
                                            <div><i class="fa fa-language"></i>&nbsp;&nbsp;&nbsp;&nbsp;لغات التدريس:&nbsp;&nbsp;{{$lang->name_ar}}</div>
                                            <p>&nbsp;</p>
                                            <div><i class="fa fa-globe"></i>&nbsp;&nbsp;&nbsp;&nbsp;موقع الجامعة:&nbsp;&nbsp;<a href="{{$university->uni_website}}">{{$university->uni_website}}</a></div>
                                            <p>&nbsp;</p>
                                            <div class="univ-map-section"><i class="fa fa-map"></i>&nbsp;&nbsp;&nbsp;&nbsp;موقع الجامعة على الخريطة:<br>
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12096.675001134516!2d31.5131639!3d40.7143015!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a02b334a07b559d!2z2KzYp9mF2LnYqSDYo9io2KfZhtiqINi52LLYqiDYqNin2YrYs9in2YQ!5e0!3m2!1sar!2str!4v1540743832717" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>
@endsection
