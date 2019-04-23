@extends('layouts.admin')

@section('content')

    <div class=" text-center"><h1>{{('articles')}}</h1></div>


    {!! Form::open(['route' =>'articl.store', 'data-toggle'=>'validator', 'files'=>'true','method'=>'POST']) !!}

    <div class="form-group">
        <label for="title">{{('articles')}} {{('name')}}</label>
        <input type="text" class="form-control" placeholder="{{('name')}}" name="name" required >
    </div>
    <div class="form-group">
        <label for="title">{{('articles')}} {{('short_description')}}</label>
        <input type="text" class="form-control" placeholder="{{('short_description')}}" name="short_description" required >
    </div>
    <div class="form-group">
        <label for="title">{{('articles')}} {{('text')}}</label>
        <input type="text" class="form-control" placeholder="{{('text')}}" name="text" required >
    </div>


    <div class="form-group">
        <label for="category_image">{{('image')}}</label>
        <input type="file" class="form-control" name="image" id="client_photo"  >
    </div>

    <div class="btns-bottom">
        <button type="submit" class="btn btn-default">{{('submit')}}</button>
        <a href="{{ url('articl') }}" id="back" class="btn btn-default">{{('back')}}</a>
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
