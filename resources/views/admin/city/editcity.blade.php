@extends('layouts.admin')

@section('content')

    <div class=" text-center"><h1>{{trans('home.city')}}</h1></div>


    {!! Form::open(['method'=>'PATCH','url' => 'city/'.$city->id]) !!}

    <div class="form-group">
        <label for="title">{{trans('home.city')}} {{trans('home.name_en')}}</label>
        <input type="text" class="form-control" placeholder="{{trans('home.name_en')}}" value="{{$city->name_en}}" name="name_en" required >
    </div>
    <div class="form-group">
        <label for="title">{{trans('home.city')}} {{trans('home.name_ar')}}</label>
        <input type="text" class="form-control" placeholder="{{trans('home.name_ar')}}" value="{{$city->name_ar}}" name="name_ar" required >
    </div>

    <div class="btns-bottom">
        <button type="submit" class="btn btn-default">{{trans('home.submit')}}</button>
        <a href="{{ url('city') }}" id="back" class="btn btn-default">{{trans('home.back')}}</a>
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
