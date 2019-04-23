@extends('layouts.admin')

@section('content')

    <div class=" text-center"><h1>{{('university')}}</h1></div>


    {!! Form::open(['route' => 'universit.store', 'data-toggle'=>'validator', 'files'=>'true','method'=>'POST']) !!}

    <div class="form-group">
        <label for="title">{{('university')}} {{('name_ar')}}</label>
        <input type="text" class="form-control" placeholder="{{('name_ar')}}" name="name_ar" required >
    </div>
    <div class="form-group">
        <label for="title">{{('university')}} {{('name_en')}}</label>
        <input type="text" class="form-control" placeholder="{{('name_en')}}" name="name_en" required >
    </div>
    <div class="form-group">
        <label for="title">{{('university')}} {{('type')}}</label>
        <select name="type"   class="form-control" required id="status">
                <option value="1">حكومية</option>
                <option value="0">خاصة</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">{{('university')}} {{('int_order')}}</label>
        <input type="number" class="form-control" placeholder="{{('int_order')}}" name="int_order" required >
    </div>
    <div class="form-group">
        <label for="title">{{('university')}} {{('loc_order')}}</label>
        <input type="number" class="form-control" placeholder="{{('loc_order')}}" name="loc_order" required >
    </div>
    <div class="form-group">
        <label for="title">{{('university')}} {{('est_date')}}</label>
        <input type="date"   class="form-control" placeholder="{{('est_date')}}" name="est_date" required >
    </div>
    <div class="form-group">
        <label for="title">{{('university')}} {{('uni_website')}}</label>
        <input type="text" class="form-control" placeholder="{{('uni_website')}}" name="uni_website" required >
    </div>
    <div class="form-group">
        <label for="title">{{('university')}} {{('latitude')}}</label>
        <input type="text" class="form-control" placeholder="{{('latitude')}}" name="latitude" required >
    </div>
    <div class="form-group">
        <label for="title">{{('university')}} {{('longitude')}}</label>
        <input type="text" class="form-control" placeholder="{{('longitude')}}" name="longitude" required >
    </div>


    <div class="btns-bottom">
        <a href="https://www.latlong.net/" target="_blank"><button type="button" class="btn btn-success">Get Your Longitude&Latitude</button></a>
    </div>
    <div class="form-group">
        <label for="title">{{('university')}} {{('about')}}</label>
        <input type="text" class="form-control" placeholder="{{('about')}}" name="about" required >
    </div>
    <div class="form-group">
        <label for="title">{{('university')}} {{('city_id')}}</label>
        <select name="city_id" class="form-control" id="status" required>
            @foreach($cities as $city)
            <option value="{{$city->id}}">{{$city->name_an}}</option>
            @endforeach
        </select>    </div>
    <div class="form-group">
        <label for="title">{{('university')}} {{('status')}}</label>
        <select name="status"    class="form-control" id="status" required>
            <option value="1">Open</option>
            <option value="0">Close</option>
        </select>

        <div class="form-group">
            <label for="title">{{('university')}} {{('exam')}}</label>
            <select name="exam"    class="form-control" id="status" required>
                <option value="1">Accept Sat</option>
                <option value="0">Not Accept Sat</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">{{('university')}} {{('language')}}</label>
            <select name="language[]" multiple="multiple"  required class="form-control  language" id="language">
                  @foreach($languages as $language)
                <option value="{{$language->id}}">{{$language->name_ar}}</option>
                  @endforeach
            </select> </div>
    <div class="form-group">
        <label for="category_image">{{('image')}}</label>
        <input type="file" class="form-control" name="image" id="client_photo"  >
    </div>

    <div class="btns-bottom">
        <button type="submit" class="btn btn-default">{{('submit')}}</button>
        <a href="{{ url('universit') }}" id="back" class="btn btn-default">{{('back')}}</a>
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
        $(document).ready(function() {
            $('.language').select2();
        });
    </script>
@endsection
