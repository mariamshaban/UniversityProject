

@extends('layouts.app')
@section('content')

<div id="wrapper" class="clearfix">

    <div class="main-content">
        <!-- Section: home -->
        <section id="home">
            <div class="container-fluid p-0">

                <!-- Slider Revolution Start -->
                <div class="rev_slider_wrapper">
                    <div class="rev_slider" data-version="5.0">
                        <ul>

                            <!-- SLIDE  -->

                            <!-- SLIDE  -->
                            @foreach($slider as $slider)
                            <li data-index="rs-4" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1900x650" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{url('uploads/slider')}}/{{$slider->image}}"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-5 text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                                     id="rs-2-layer-1"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['-90']"
                                     data-fontsize="['28']"
                                     data-lineheight="['54']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">{{$slider->text1}}
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                                     id="rs-2-layer-2"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['-20']"
                                     data-fontsize="['48']"
                                     data-lineheight="['70']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">{{$slider->text2}}
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white text-center"
                                     id="rs-2-layer-3"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['50']"
                                     data-fontsize="['16']"
                                     data-lineheight="['28']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">{{$slider->short_description}}
                                </div>



                            </li>

                            @endforeach

                        </ul>
                    </div>
                    <!-- end .rev_slider -->
                </div>
                <!-- end .rev_slider_wrapper -->
                <script>
                    $(document).ready(function(e) {
                        $(".rev_slider").revolution({
                            sliderType:"standard",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 5000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style:"zeus",
                                    enable:true,
                                    hide_onmobile:true,
                                    hide_under:600,
                                    hide_onleave:true,
                                    hide_delay:200,
                                    hide_delay_mobile:1200,
                                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                    left: {
                                        h_align:"left",
                                        v_align:"center",
                                        h_offset:30,
                                        v_offset:0
                                    },
                                    right: {
                                        h_align:"right",
                                        v_align:"center",
                                        h_offset:30,
                                        v_offset:0
                                    }
                                },
                                bullets: {
                                    enable:true,
                                    hide_onmobile:true,
                                    hide_under:600,
                                    style:"metis",
                                    hide_onleave:true,
                                    hide_delay:200,
                                    hide_delay_mobile:1200,
                                    direction:"horizontal",
                                    h_align:"center",
                                    v_align:"bottom",
                                    h_offset:0,
                                    v_offset:30,
                                    space:5,
                                    tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [650, 768, 960, 720],
                            lazyType: "none",
                            parallax: {
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                                type: "scroll"
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    });
                </script>
                <!-- Slider Revolution Ends -->

            </div>
        </section>
        <!-- Section: COURSES -->
        <section class="bg-lighter">
            <div class="container pb-60">
                <div class="section-title mb-10">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1"><span class="text-theme-color-2 font-weight-400">الجامعات</span></h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel-4col" data-dots="true">



                                  @foreach($universities as $university)
                                <div class="item">
                                    <div class="service-block">
                                        <div class="thumb">
                                            <a href="{{url('university')}}/{{$university->id}}"><img src="{{url('uploads/university')}}/{{$university->image}}" class="img-fullwidth p-20"></a>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Section: About -->
        <section class="">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0">من نحن</h6>
                            <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">اعرف اكثر عنا</h2>
                            <p class="text-theme-colored">{{$about->text}}</p>
                            <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="{{url('aboutus')}}">قراءة المزيد ← </a>
                        </div>
                        <div class="col-md-6">
                            <div class="video-popup">
                                <a href="{{url('uploads/setting/video')}}/{{$setting->video}}" data-lightbox-gallery="youtube-video" title="Video">
                                    <img alt="" src="{{url('uploads/about')}}/{{$about->image}}" class="img-responsive img-fullwidth">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Divider: Funfact -->

        <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg2.jpg" data-parallax-ratio="0.7">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">

                        <div class="funfact text-center">

                            <a href="#"> <i class="pe-7s-users mt-5 text-theme-color-2"></i></a>

                            <!--  <h2 data-animation-duration="2000" data-value="5248" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>

                             <h5 class="text-white text-uppercase mb-0">الطلبة المقبولين</h5>
               -->
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">

                        <div class="funfact text-center">

                            <a href="#">    <i class="pe-7s-global mt-5 text-theme-color-2"></i> </a>

                            <!--  <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>

                             <h5 class="text-white text-uppercase mb-0">الجامعات</h5> -->

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">

                        <div class="funfact text-center">

                            <a href="#">  <i class="pe-7s-study mt-5 text-theme-color-2"></i></a>

                            <!--   <h2 data-animation-duration="2000" data-value="248" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>

                              <h5 class="text-white text-uppercase mb-0">المنح</h5> -->

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">

                        <div class="funfact text-center">

                            <a href="#"> <i class="pe-7s-cup mt-5 text-theme-color-2"></i> </a>

                            <!-- <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>

                            <h5 class="text-white text-uppercase mb-0">الجوائز</h5> -->

                        </div>

                    </div>

                </div>

            </div>

        </section> <!-- Section: blog -->
        <section id="blog" class="bg-lighter">
            <div class="container">
                <div class="section-title mb-10">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">اخر <span class="text-theme-color-2 font-weight-400">المقالات</span></h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @foreach($lastarticles as $article)
                            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <article class="post clearfix mb-sm-30">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        <img src="{{url('uploads/articles')}}/{{$article->image}}" alt="" class="img-responsive img-fullwidth">
                                    </div>
                                </div>
                                <div class="entry-content p-20 pr-10 bg-white">
                                    <div class="entry-meta media mt-0 no-bg no-border">
                                        <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                            <ul>
                                                <li class="font-16 text-white font-weight-600 border-bottom">{{$article->created_at->format('d/m/y')}}</li>
                                                <li class="font-12 text-white text-uppercase"></li>
                                            </ul>
                                        </div>
                                        <div class="media-body pl-15">
                                            <div class="event-content pull-left flip">
                                                <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">{{$article->name}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-10">{{$article->short_description}}</p>
                                    <a href="{{url('article')}}/{{$article->id}}" class="btn-read-more"> قراءة المزيد </a>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </section>
@endsection
