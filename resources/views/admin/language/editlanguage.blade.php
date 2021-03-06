@extends('layouts.admin')

@section('content')

    <div class=" text-center"><h1>{{('language')}}</h1></div>


    {!! Form::open(['method'=>'PATCH','url' => 'language/'.$language ->id]) !!}

    <div class="form-group">
        <label for="title">{{('language')}} {{('name_en')}}</label>
        <input type="text" class="form-control" placeholder="{{('name_en')}}" value="{{$language->name_en}}" name="name_en" required >
    </div>
    <div class="form-group">
        <label for="title">{{('language')}} {{('name_ar')}}</label>
        <input type="text" class="form-control" placeholder="{{('name_ar')}}" value="{{$language->name_ar}}" name="name_ar" required >
    </div>
    <div class="form-group">
        <label for="title">{{('language')}} {{('code')}}</label>
        <input type="text" class="form-control" placeholder="{{('code')}}" value="{{$language->code}}" name="code" required >
    </div>



    <div class="btns-bottom">
        <button type="submit" class="btn btn-default">{{('submit')}}</button>
        <a href="{{ url('language') }}" id="back" class="btn btn-default">{{('back')}}</a>
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
