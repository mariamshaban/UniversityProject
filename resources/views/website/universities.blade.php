@extends('layouts.app')

@section('content')
    <div id="wrapper" class="clearfix">

        <!-- Start main-content -->

        <div class="main-content">
            <section class="">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="sidebar sidebar-right mt-sm-30">
                                    <div class="widget">
                                        <h5 class="widget-title line-bottom">ابحث</h5>
                                        <div class="search-form">
                                                <div class="input-group">
                                                    <input type="text" placeholder="ابحث عن .." class="form-control search-input ">
                                                    <span class="input-group-btn search">
                                                        <button  class="btn search-button"><i class="fa fa-search"></i></button>
                                                   </span>
                                                </div>
                                            <div class="search-error"></div>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h5 class="widget-title line-bottom">نوع الجامعة</h5>
                                        <div class="categories">
                                            <ul class="list list-border angle-double-right">
                                                <li><a href="#" class="filter" data-type="type" data-id="1">حكومية <span class="type2">({{$type2}})</span></a></li>
                                                <li><a href="#" class="filter" data-type="type" data-id="0">خاصة <span class="type">({{$type}})</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h5 class="widget-title line-bottom">حالة التسجيل</h5>
                                        <div class="categories">
                                            <ul class="list list-border angle-double-right">
                                                <li><a href="#" class="filter" data-type="reg" data-id="0">مغلق <span class="register_close">({{$close}})</span></a></li>
                                                <li><a href="#" class="filter" data-type="reg" data-id="1">مفتوح <span class="register_open">({{$open}})</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h5 class="widget-title line-bottom">الإمتحانات
                                        </h5>
                                        <div class="categories">
                                            <ul class="list list-border angle-double-right">
                                                <li><a href="#">جامعة تقبل بدون يوس أو سات <span class="except">({{$except}})</span></a></li>
                                                <li><a href="#">جامعة لا تقبل إلا ب يوس أو سات <span class="notex">({{$notex}})</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h5 class="widget-title line-bottom">حسب المدينة
                                        </h5>
                                        <div class="categories">

                                            <select class="basel_dropdown_layered_nav_city form-control city"  data-filter-url="/ar/%D8%A7%D9%84%D8%AC%D8%A7%D9%85%D8%B9%D8%A7%D8%AA/?filtering=1&amp;filter_city=BASEL_FILTER_VALUE">
                                                <option value="0">أي ‏المدينة</option>
                                                @foreach($cities as $city)
                                                <option value="{{ $city->id }}">   {{$city->name_ar}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h5 class="widget-title line-bottom">لغات التدريس
                                        </h5>
                                        <div class="categories">
                                            <ul class="list list-border angle-double-right countLang">
                                                @foreach($counlang as $cl)
                                                    <li><a href="#">{{ $cl->Lang->name_ar  }} <span>({{ $cl->Count }})</span></a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 search-item">
                                <div class="row">
                                    @foreach($universities as $university)
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="schedule-box maxwidth500 bg-light mb-30">
                                            <div class="thumb">
                                                <a href="{{url('university')}}/{{$university->id}}">
                                                    <img class="img-fullwidth" alt="" src="{{url('uploads/university')}}/{{$university->image}}">
                                                </a>
                                                <div style="padding:10px 3px" class="overlay text-center">
                                                    <a href="{{url('university')}}/{{$university->id}}">{{$university->name_en}} </a> <br>
                                                    <a href="{{url('university')}}/{{$university->id}}">{{$university->name_ar}}  </a>
                                                </div>
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
@section('script')
    <script>
        $(document).ready(function(){
           
            $('#menuUniversities').addClass('active');
            $("a").trigger("click");
            $('.filter').click(function(){
                var filterArr = [];
                var type = $(this).data('type');
                var id = $(this).data('id');
                var isTypeAlreadyExist = filterArr.filter(function(el){
                    return el.Type == type;
                });
                if(isTypeAlreadyExist.length > 0){
                    var index = filterArr.indexOf(isTypeAlreadyExist);
                    filterArr.splice(index, 1);
                }
                filterArr.push({"Type" : type, "Id" : id});
                FilterResults(filterArr);
            });
            function FilterResults(filterArr){
                $.ajax({
                    url:" {{url('search-university')}}",
                    method:'POST',
                    data:{search:'',type:'input'},
                    success:function(data)
                    {

                        $('.search-item').html(data.html);
                        $('.type').html(data.type);
                        $('.type2').html(data.type2);
                        $('.register_close').html(data.close);
                        $('.register_open').html(data.open);
                        $('.except').html(data.except);
                        $('.notex').html(data.notex);

                        var i;
                        var html = '';
                        var unvirsityData =  data.counlang;
                        debugger;
                        for (i = 0; i < data.counlang.length; i++) {
                            html += '<li><a href="#">'+ data.counlang[i].lang.name_ar +'<span>(' + data.counlang[i].Count +')</span></a></li>';
                        }
                        $('.countLang').html(html);
                        //location.reload();
                    }
                });
            }
        });
        $('.search').click(function () {
            var search = $('.search-input').val();
            var type = 'input';

            if(search != ''){
                $('.search-error').html('');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:" {{url('search-university')}}",
                    method:'POST',
                    data:{search:search,type:type},
                    success:function(data)
                    {
                       
                        $('.search-item').html(data.html);
                        $('.type').html(data.type);
                        $('.type2').html(data.type2);
                        $('.register_close').html(data.close);
                        $('.register_open').html(data.open);
                        $('.except').html(data.except);
                        $('.notex').html(data.notex);
                        
                        var i;
                        var html = '';
                        for (i = 0; i < data.counlang.length; i++) { 
                        html += '<li><a href="#">'+ data.counlang[i].lang.name_ar +'<span>(' + data.counlang[i].Count +')</span></a></li>';
                        }
                        $('.countLang').html(html);
                        //location.reload();
                    }
                });
            }else{
                //$('.search-input').hide();
               $('.search-error').html('Please Fill This Input').css('color','red');
            }
        });


        $('.city').change(function () {
            var city = $(this).val();
            var type = 'select';
               
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:" {{url('search-university')}}",
                    method:'POST',
                    data:{city:city,type:type},
                    success:function(data)
                    {
                       
                        $('.search-item').html(data.html);
                        $('.type').html(data.type);
                        $('.type2').html(data.type2);
                        $('.register_close').html(data.close);
                        $('.register_open').html(data.open);
                        $('.except').html(data.except);
                        $('.notex').html(data.notex);
                        
                        var i;
                        var html = '';
                        for (i = 0; i < data.counlang.length; i++) { 
                        html += '<li><a href="#">'+ data.counlang[i].lang.name_ar +'<span>(' + data.counlang[i].Count +')</span></a></li>';
                        }
                        $('.countLang').html(html);
                     
                    
                    }
                });
        });
    </script>
@endsection



