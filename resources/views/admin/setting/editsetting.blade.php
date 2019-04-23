@extends('layouts.admin')

@section('content')

    <div class=" text-center"><h1>{{('setting')}}</h1></div>


    {!! Form::open(['method'=>'PATCH','url' =>'setting/'.$setting ->id,'files'=>'true']) !!}
    <div class="form-group">
        <label for="title">{{('setting')}} {{('name')}}</label>
        <input type="text" class="form-control" placeholder="{{trans('home.name')}}" value="{{$setting->name}}" name="name" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('name_en')}}</label>
        <input type="text" class="form-control" placeholder="{{('home.facebook')}}" value="{{$setting->facebook}}" name="facebook" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('twitter')}}</label>
        <input type="text" class="form-control" placeholder="{{('twitter')}}" value="{{$setting->twitter}}" name="twitter" required >
    </div>
    <div class="form-group">
        <label for="title">{{trans('setting')}} {{('instgram')}}</label>
        <input type="text" class="form-control" placeholder="{{trans('instgram')}}" value="{{$setting->instgram}}" name="instgram" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('pinterst')}}</label>
        <input type="text" class="form-control" placeholder="{{('pinterst')}}" value="{{$setting->pinterst}}" name="pinterst" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('google_plus')}}</label>
        <input type="text" class="form-control" placeholder="{{('google_plus')}}" value="{{$setting->google_plus}}" name="google_plus" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('linkedin')}}</label>
        <input type="text" class="form-control" placeholder="{{('inkedin')}}" value="{{$setting->linkedin}}" name="linkedin" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('email')}}</label>
        <input type="text" class="form-control" placeholder="{{('email')}}" value="{{$setting->email}}" name="email" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('phone')}}</label>
        <input type="text" class="form-control" placeholder="{{('phone')}}" value="{{$setting->phone}}" name="phone" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('address')}}</label>
        <input type="text" class="form-control" placeholder="{{('address')}}" value="{{$setting->address}}" name="address" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('longitude')}}</label>
        <input type="text" class="form-control" placeholder="{{('longitude')}}" value="{{$setting->longitude}}"  {{$setting->address}} name="longitude" required >
    </div>
    <div class="form-group">
        <label for="title">{{('setting')}} {{('latitude')}}</label>
        <input type="text" class="form-control" placeholder="{{('latitude')}}"value="{{$setting->latitude}}"  name="latitude" required >
    </div>

     <div class="btns-bottom">
         <a href="https://www.latlong.net/" target="_blank"><button type="button" class="btn btn-success">Get Your Longitude&Latitude</button></a>
       </div>
    <div class="form-group">
        <label for="category_image">{{('logo')}}</label>
        <input type="file" class="form-control" name="logo" id="client_photo"  >
    </div>
    <div class="form-group">
        <label for="category_image">{{('logo')}}</label>
        <img src="{{url('uploads/setting/source')}}/{{$setting->logo}}" width="200" height="200">
    </div>


    <div class="form-group">
        <label for="category_image">{{('video')}}</label>
        <input type="file" class="form-control" name="video" id="client_photo"  >
    </div>
    <div class="form-group">
        <label for="category_image">{{('video')}}</label>
        <video width="320" height="240" controls>
            <source src="{{url('uploads/setting/video')}}/{{$setting->video}}" >
        </video>
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
