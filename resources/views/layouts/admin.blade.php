<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Control Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::to('resources/assets/back/images/logo2.png') }}" />
    <link rel="stylesheet" href="{{ URL::to('resources/assets/back/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::to('resources/assets/back/css/select2.min.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('resources/assets/back/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::to('resources/assets/back/css/jquery.dataTables.css') }}"/>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ URL::to('resources/assets/back/css/style-ar.css') }}" />
    <link rel="stylesheet" href="{{ URL::to('resources/assets/back/css/media-queries-ar.css') }}" />
    <link rel="stylesheet" href="{{ URL::to('resources/assets/front/css/easy-autocomplete.min.css')}}">
    <link rel="stylesheet" href="{{ URL::to('resources/assets/front/css/datepickerui.css')}}">

@yield('messagepop')
<!-- route('configuration . edit', 1)  -->
    @yield('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="menu">
            <div class="brand-name">
                <img src="{{ URL::to('') }}" alt= />
                <h3><a href="{{ url('/admin') }}">{{('')}}</a></h3>
            </div>
            <div class="profile-info">
                @if(Auth::user()->image)
                    <img src="{{ URL::to('uploads/users/source') }}/{{ Auth::user()->image }}" alt="Person" />
                @else
                    <img src="{{ URL::to('uploads/user1.png') }}" alt="Person" />
                @endif
                <p>{{('welcome')}}, <span class="user-name">{{Auth::user()->name}}</span></p>
            </div>





            <div class="links">
                <div class="link"  data-toggle="collapse" href="#collapseOne-7" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-home"></i><a href="#">{{('University')}}</a><span class="fa fa-chevron-down"></span>
                </div>

                <div class="link-data collapse" id="collapseOne-7">
                    <ul>
                        <li><a href="{{ url('universit') }}">{{('University')}}</a></li>
                        <li><a href="{{ url('time') }}" >{{('Important Times')}}</a></li>
                        <li><a href="{{ url('city') }}" >{{('Cities')}}</a></li>
                        <li><a href="{{ url('language') }}" >{{('Language')}}</a></li>
                    </ul>
                </div>
            </div>

            <div class="links">
                <div class="link"  data-toggle="collapse" href="#collapseOne-8" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-home"></i><a href="#">{{('Articles')}}</a><span class="fa fa-chevron-down"></span>
                </div>

                <div class="link-data collapse" id="collapseOne-8">
                    <ul>
                        <li><a href="{{ url('articl') }}" >{{('Articles')}}</a></li>

                    </ul>
                </div>
            </div>
            <div class="links">
                <div class="link"  data-toggle="collapse" href="#collapseOne-9" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-home"></i><a href="#">{{('About_Us')}}</a><span class="fa fa-chevron-down"></span>
                </div>

                <div class="link-data collapse" id="collapseOne-9">
                    <ul>
                        <li><a href="{{ url('about') }}" >{{('About_Us')}}</a></li>
                        <li><a href="{{ url('service') }}" >{{('Service')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="links">
                <div class="link"  data-toggle="collapse" href="#collapseOne-11" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-home"></i><a href="#">{{('Contact_Us')}}</a><span class="fa fa-chevron-down"></span>
                </div>

                <div class="link-data collapse" id="collapseOne-11">
                    <ul>
                        <li><a href="{{ url('news') }}" >{{('News_litter')}}</a></li>
                    </ul>
                    <ul>
                        <li><a href="{{ url('contactus') }}" >{{('Contact_Us')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="links">
                <div class="link"  data-toggle="collapse" href="#collapseOne-22" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-home"></i><a href="#">{{('Setting')}}</a><span class="fa fa-chevron-down"></span>
                </div>

                <div class="link-data collapse" id="collapseOne-22">
                    <ul>
                        <li><a href="{{ url('slider') }}" >{{('Slider')}}</a></li>
                        <li><a href="{{ url('setting') }}" >{{('Setting')}}</a></li>

                    </ul>
                </div>
            </div>

            <div class="links">
                <div class="link"  data-toggle="collapse" href="#collapseOne-40" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-home"></i><a href="#">{{('users')}}</a><span class="fa fa-chevron-down"></span>
                </div>

                <div class="link-data collapse" id="collapseOne-40">
                    <ul>
                        <li><a href="{{ url('/user') }}" >{{('user')}}</a></li>


                    </ul>
                </div>
            </div>
        </div>



        <div class="content col-xs-12">
            <div class="nav-bar group">
                <span class="group"><i class="fa fa-bars"></i></span>
                <div class="logout">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><span>{{('logout')}}</span><i class="fa fa-sign-out"></i></a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <div class="language group">
                    <ul class="lang">
                    </ul>
                </div>
            </div>
            <div class="information">
                @yield('content')
            </div>

        </div>
    </div>
</div>
<footer class="col-xs-12">
    <div class="copyrights">
        <p>Designed & Developed by <a href="#"></a>&copy;</p>
    </div>
</footer>

<script src="{{ URL::to('resources/assets/back/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ URL::to('resources/assets/back/js/select2.full.min.js') }}"></script>
<script src="{{ URL::to('resources/assets/back/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/js/bootstrap-select.min.js"></script>
<script src="{{ URL::to('resources/assets/back/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('resources/assets/back/js/validator.min.js') }}"></script>
<script src="{{ URL::to('resources/assets/back/js/tinymce/tinymce.min.js') }}"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="{{ URL::to('resources/assets/back/js/script.js') }}"></script>
<script src="{{ URL::to('resources/assets/back/js/datepickerui.js') }}"></script>

<script src="{{ URL::to('resources/assets/front/js/jquery.easy-autocomplete.min.js') }}"></script>


@yield('script')
@stack('scripts')
<script>
    $(function() {
        $( ".datepicker" ).datepicker({
            dateFormat: "yy-mm-dd",
            timeFormat:  "hh:mm:ss"
        });

        tinymce.init({
            mode : "specific_textareas",
            mode : "textareas",
            editor_selector : "area1",
            height: 500,
            fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages',
            toolbar2: 'ltr rtl | print preview media | forecolor backcolor emoticons | fontsizeselect',
            //image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });




    });


</script>

<script>



    //datatables
    (function() {
        $('#datatable').DataTable();
    })();

    //checkAll

    $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
    });

    $(".checkAll").change(function () {
        $(".web").prop('checked', $(this).prop("checked"));
    });

    $(".checkAllcart").change(function () {
        $(".cart").prop('checked', $(this).prop("checked"));
    });

    $(document).ready(function() {
        $("#c").change(function() {
            $.getJSON(  "{{ URL::to('cate/') }}/" + $("#c").val(), function(data) {
                console.log(data);
                var $stations = $("#cat");
                $stations.empty();

                if ($("#c").val() == 'articles') {
                    $.each(data, function(index, value) {
                        $stations.append('<option value="' + value.id +'">' + value.title + '</option>');
                    });
                }
                if ($("#c").val() == 'catogries') {
                    $.each(data, function(index, value) {
                        $stations.append('<option value="' + value.id +'">' + value.name + '</option>');
                    });
                }
                if ($("#c").val() == 'gallery') {
                    $.each(data, function(index, value) {
                        $stations.append('<option value="' + value.id +'">' + value.title + '</option>');
                    });
                }
                if ($("#c").val() == 'contactus') {
                    $.each(data, function(index, value) {
                        $stations.append('<option value="' + value.id +'">' + value.title + '</option>');
                    });
                }
                $("#cat").trigger("change"); /* trigger next drop down list not in the example */
            });
        });
    });

    // btn_delete
    $(document).ready(function(){
        $('#btn_delete').click(function(){

            var id = [];
            <?php
            $last_word = Request::segment(1);
            Session::put('route', $last_word);
            ?>
            $(':checkbox:checked').each(function(i){
                id[i] = $(this).val();
            });
            if(id.length === 0) //tell you if the array is empty
            {
                alert("Please Select atleast one checkbox");
            }
            else
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:"<?php echo Session::get('route')?>/"+ id,
                    type:'DELETE',
                    data:{id:id},
                    success:function()
                    {
                        for(var i=0; i<id.length; i++)
                        {
                            $('tr#'+id[i]+'').css('background-color', '#ccc');
                            $('tr#'+id[i]+'').fadeOut('slow');
                            $('input:checkbox').removeAttr('checked');
                        }
                    }
                });
            }


        });
    });
    // btn_active
    $(document).ready(function(){
        $('#btn_active').click(function(){
            var id = [];
            <?php
            $last_word = Request::segment(1);
            Session::put('route', $last_word);
            ?>
            $(':checkbox:checked').each(function(i){
                id[i] = $(this).val();
            });
            if(id.length === 0) //tell you if the array is empty
            {
                alert("Please Select atleast one checkbox");
            }
            else
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:"<?php echo Session::get('route')?>/up/"+ id,
                    method:'POST',
                    data:{id:id},
                    success:function()
                    {
                        $('input:checkbox').removeAttr('checked');
                        location.reload();
                    }
                });
            }
        });

        $('#btn_back').click(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:"backup",
                method:'GET',
                success:function()
                {

                }
            });

        });

    });


</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-35082599-2', 'auto');
    ga('send', 'pageview');

</script>

</body>
</html>
