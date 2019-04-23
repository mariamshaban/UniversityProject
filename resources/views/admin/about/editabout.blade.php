@extends('layouts.admin')

@section('content')


    {!! Form::open(['method'=>'PATCH','url' => 'about/'.$about ->id]) !!}



    <div class="form-group">
        <label for="title">{{('')}} {{('title')}}</label>
        <input type="text" class="form-control" placeholder="{{('title')}}" name="title" value="{{$about->title}}" required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('title2')}}</label>
        <input type="text" class="form-control" placeholder="{{('title2')}}" name="title" value="{{$about->title2}}" required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('text')}}</label>
        <input type="text" class="form-control" placeholder="{{trans('text')}}" name="text" value="{{$about->text}}" required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('phone')}}</label>
        <input type="text" class="form-control" placeholder="{{('phone')}}" value="{{$about->phone}}" name="phone"  required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('mail')}}</label>
        <input type="email" class="form-control" placeholder="{{('mail')}}" value="{{$about->mail}}" name="mail"  required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('address')}}</label>
        <input type="text" class="form-control" placeholder="{{('address')}}" value="{{$about->address}}" name="address"  required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('longitude')}}</label>
        <input type="text" class="form-control" placeholder="{{('longitude')}}" value="{{$about->longitude}}" name="longitude"  required >
    </div>
    <div class="form-group">
        <label for="title">{{('')}} {{('latitude')}}</label>
        <input type="text" class="form-control" placeholder="{{('latitude')}}" value="{{$about->longitude}}" name="latitude"  required >
    </div>



    <div class="btns-bottom">
        <a href="https://www.latlong.net/" target="_blank"><button type="button" class="btn btn-success">Get Your Longitude&Latitude</button></a>
    </div>

    <div class="form-group">
        <label for="category_image">{{('image')}}</label>
        <input type="file" class="form-control" name="image" id="client_photo"  >
    </div>

    <div class="form-group">
        <label for="category_image">{{('image')}}</label>
        <img src="{{url('uploads/about')}}/{{$about->image}}" width="200" height="200">
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
