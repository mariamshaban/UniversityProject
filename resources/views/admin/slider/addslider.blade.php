@extends('layouts.admin')

@section('content')

    <div class=" text-center"><h1>{{('slider')}}</h1></div>


    {!! Form::open(['route' =>'slider.store', 'data-toggle'=>'validator', 'files'=>'true','method'=>'POST']) !!}

    <div class="form-group">
        <label for="title">{{('slider')}} {{('text1')}}</label>
        <input type="text" class="form-control" placeholder="{{('text1')}}" name="text1" required >
    </div>
    <div class="form-group">
        <label for="title">{{('slider')}} {{('text2')}}</label>
        <input type="text" class="form-control" placeholder="{{('text2')}}" name="text2" required >
    </div>
    <div class="form-group">
        <label for="title">{{('slider')}} {{('short_description')}}</label>
        <input type="text" class="form-control" placeholder="{{('short_description')}}" name="short_description" required >
    </div>
    <div class="form-group">
        <label for="title">{{('slider')}} {{('link')}}</label>
        <input type="text" class="form-control" placeholder="{{('link')}}" name="link" required >

    </div>

    <div class="form-group">
        <label for="category_image">{{('image')}}</label>
        <input type="file" class="form-control" name="image" id="client_photo"  >
    </div>

    <div class="btns-bottom">
        <button type="submit" class="btn btn-default">{{('submit')}}</button>
        <a href="{{ url('slider') }}" id="back" class="btn btn-default">{{('back')}}</a>
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
