@extends('layouts.admin')

@section('content')

    <div class=" text-center"><h1>{{('contact')}}</h1></div>


    {!! Form::open(['route' =>'contactus.store', 'data-toggle'=>'validator', 'files'=>'true','method'=>'POST']) !!}

    <div class="form-group">
        <label for="title">{{('contact')}} {{('mail')}}</label>
        <input type="email" class="form-control" placeholder="{{('text1')}}" name="mail" required >
    </div>
    <div class="form-group">
        <label for="title">{{('contact')}} {{('name')}}</label>
        <input type="text" class="form-control" placeholder="{{('name')}}" name="name" required >
    </div>
    <div class="form-group">
        <label for="title">{{('contact')}} {{('phone')}}</label>
        <input type="text" class="form-control" placeholder="{{trans('phone')}}" name="phone" required >
    </div>
    <div class="form-group">
        <label for="title">{{('contact')}} {{('subject')}}</label>
        <input type="text" class="form-control" placeholder="{{('subject')}}" name="subject" required >
    </div>
    <div class="form-group">
        <label for="title">{{('contact')}} {{('message')}}</label>
        <input type="text" class="form-control" placeholder="{{('message')}}" name="message" required >
    </div>



    <div class="btns-bottom">
        <button type="submit" class="btn btn-default">{{('submit')}}</button>
        <a href="{{ url('contactus') }}" id="back" class="btn btn-default">{{('back')}}</a>
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
