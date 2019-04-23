@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="divider">
            <div class="container pt-0">
                <div class="row mb-60 bg-deep">
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-info text-center pt-60 pb-60 border-right">
                            <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                            <h4>اتصل بنا</h4>
                            <h6 class="text-gray"> {{$setting->phone}}</h6>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-info text-center  pt-60 pb-60 border-right">
                            <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                            <h4>Address</h4>
                            <h6 class="text-gray">{{$setting->address}}</h6>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-info text-center  pt-60 pb-60">
                            <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                            <h4>Email</h4>
                            <h6 class="text-gray">{{$setting->email}}</h6>
                        </div>
                    </div>
                </div>
                <div class="row pt-10">
                    <div class="col-md-5">
                        <h4 class="mt-0 mb-30 line-bottom">موقعنا</h4>
                        <!-- Google Map HTML Codes -->
                        <div data-address="121 King Street, Melbourne Victoria 3000 Australia" data-popupstring-id="#popupstring1" class="map-canvas autoload-map" data-mapstyle="style8" data-height="420" data-latlng="{{$setting->longitude}},{{$setting->latitude}}" data-title="sample title" data-zoom="12" data-marker="images/map-marker.png" style="height: 420px;">
                        </div>
                        <div class="map-popupstring hidden" id="popupstring1">
                            <div class="text-center">

                                <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                            </div>
                        </div>
                        <!-- Google Map Javascript Codes -->
                        <script src="http://maps.google.com/maps/api/js"></script>
                        <script src="js/google-map-init.js"></script>
                    </div>
                    <div class="col-md-7">
                        <h4 class="mt-0 mb-30 line-bottom">اترك رسالة</h4>
                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class="" action="{{url('contact/data')}}" method="post" novalidate="novalidate">
                                @csrf
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="form_name">الاسم <small>*</small></label>
                                        <input name="name" class="form-control" type="text" placeholder="الاسم" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>البريد الالكتروني <small>*</small></label>
                                        <input name="mail" class="form-control required email" type="email" placeholder="البريد الالكتروني " aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">الموضوع <small>*</small></label>
                                        <input name="subject" class="form-control required" type="text" placeholder="الموضوع" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_phone">رقم الموبايل</label>
                                        <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="form_name">نص الرسالة</label>
                                <textarea name="message" class="form-control required" rows="5" placeholder="نص الرسالة" aria-required="true"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">إرسال</button>
                            </div>
                        </form>

                        <!-- Contact Form Validation-->

                    </div>
                </div>
            </div>
        </section>
    @endsection
