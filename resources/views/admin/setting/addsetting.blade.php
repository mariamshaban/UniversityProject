@extends('layouts.admin')

@section('content')

    <div class=" text-center"><h1>{{trans('setting')}}</h1></div>


    {!! Form::open(['route' => 'setting.store', 'data-toggle'=>'validator', 'files'=>'true','method'=>'POST']) !!}

    <div class="form-group">
        <label for="title">{{('setting')}} {{('name')}}</label>
        <input type="text" class="form-control" placeholder="{{('name')}}" name="name" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('name_en')}}</label>
        <input type="text" class="form-control" placeholder="{{('facebook')}}" name="facebook" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('twitter')}}</label>
        <input type="text" class="form-control" placeholder="{{('twitter')}}" name="twitter" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('instgram')}}</label>
        <input type="text" class="form-control" placeholder="{{('instgram')}}" name="instgram" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('pinterst')}}</label>
        <input type="text" class="form-control" placeholder="{{('pinterst')}}" name="pinterst" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('google_plus')}}</label>
        <input type="text" class="form-control" placeholder="{{('google_plus')}}" name="google_plus" required >
    </div>
    <div class="form-group">
        <label for="title">{{trans('setting')}} {{('linkedin')}}</label>
        <input type="text" class="form-control" placeholder="{{('linkedin')}}" name="linkedin" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('email')}}</label>
        <input type="text" class="form-control" placeholder="{{('email')}}" name="email" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('phone')}}</label>
        <input type="text" class="form-control" placeholder="{{('phone')}}" name="phone" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('address')}}</label>
        <input type="text" class="form-control" placeholder="{{('address')}}" name="address" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('longitude')}}</label>
        <input type="text" class="form-control" placeholder="{{('longitude')}}" name="longitude" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('latitude')}}</label>
        <input type="text" class="form-control" placeholder="{{('latitude')}}" name="latitude" required >
    </div>


    <div class="btns-bottom">
        <a href="https://www.latlong.net/" target="_blank"><button type="button" class="btn btn-success">Get Your Longitude&Latitude</button></a>
    </div>

    <div class="form-group">
        <label for="category_image">{{('logo')}}</label>
        <input type="file" class="form-control" name="logo" id="client_photo"  >
    </div>
    <div class="form-group">
        <label for="category_image">{{('video')}}</label>
        <input type="file" class="form-control" name="video" id="client_photo"  >
    </div>

    <div class="btns-bottom">
        <button type="submit" class="btn btn-default">{{('submit')}}</button>
        <a href="{{ url('setting') }}" id="back" class="btn btn-default">{{trans('back')}}</a>
    </div>


    {!! Form::close() !!}


@endsection

@section('script')
    <script>
        $('#home').select2({
            'placeholder' : 'home',
        });
        $('#parent').select2({
            'placeholder' : 'Select Parent ',
        });

        $('#status').select2({
            'placeholder' : 'status',
        });
        $('#parent').select2({
            'placeholder' : 'Select Parent ',
        });


        $('#topcaliber').select2({
            'placeholder' : 'topcaliber',
        });
        $('#parent').select2({
            'placeholder' : 'Select Parent ',
        });

        $('#eltizam').select2({
            'placeholder' : 'eltizam',
        });
        $('#parent').select2({
            'placeholder' : 'Select Parent ',
        });
        $(document).ready(function() {
            $('.multiselect').select2();
        });
    </script>
@endsection
