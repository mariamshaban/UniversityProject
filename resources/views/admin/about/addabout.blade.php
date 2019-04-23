@extends('layouts.admin')

@section('content')


    {!! Form::open(['route' =>'about.store', 'data-toggle'=>'validator', 'files'=>'true','method'=>'POST']) !!}



    <div class="form-group">
        <label for="title">{{('')}} {{('title')}}</label>
        <input type="text" class="form-control" placeholder="{{('title')}}" name="title"  required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('title2')}}</label>
        <input type="text" class="form-control" placeholder="{{('title2')}}" name="title2"  required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('text')}}</label>
        <input type="text" class="form-control" placeholder="{{('text')}}" name="text"  required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('phone')}}</label>
        <input type="text" class="form-control" placeholder="{{('phone')}}" name="phone"  required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('mail')}}</label>
        <input type="email" class="form-control" placeholder="{{('mail')}}" name="mail"  required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('address')}}</label>
        <input type="text" class="form-control" placeholder="{{('address')}}" name="address"  required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('longitude')}}</label>
        <input type="text" class="form-control" placeholder="{{('longitude')}}" name="longitude"  required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('latitude')}}</label>
        <input type="text" class="form-control" placeholder="{{('latitude')}}" name="latitude"  required >
    </div>



    <div class="btns-bottom">
        <a href="https://www.latlong.net/" target="_blank"><button type="button" class="btn btn-success">Get Your Longitude&Latitude</button></a>
    </div>



    <div class="form-group">
        <label for="category_image">{{('image')}}</label>
        <input type="file" class="form-control" name="image" id="client_photo"  >
    </div>



    <div class="btns-bottom">
        <button type="submit" class="btn btn-default">{{('submit')}}</button>
        <a href="{{ url('about') }}" id="back" class="btn btn-default">{{('back')}}</a>
    </div>


    {!! Form::close() !!}


@endsection
@section('script')
    <script>
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

    </script>
@endsection
