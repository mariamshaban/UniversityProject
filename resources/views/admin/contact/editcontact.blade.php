@extends('layouts.admin')

@section('content')

    <div class=" text-center"><h1>{{('contact')}}</h1></div>


    {!! Form::open(['method'=>'PATCH','url' => 'contactus/'.$contact ->id]) !!}

    <div class="form-group">
        <label for="title">{{('contact')}} {{('mail')}}</label>
        <input type="email" class="form-control" placeholder="{{('text1')}}" value="{{$contact->mail}}" name="mail" required >
    </div>
    <div class="form-group">
        <label for="title">{{trans('home.contact')}} {{('name')}}</label>
        <input type="text" class="form-control" placeholder="{{('name')}}" value="{{$contact->name}}" name="name" required >
    </div>
    <div class="form-group">
        <label for="title">{{('contact')}} {{('phone')}}</label>
        <input type="text" class="form-control" placeholder="{{('phone')}}" value="{{$contact->phone}}" name="phone" required >
    </div>
    <div class="form-group">
        <label for="title">{{('contact')}} {{('subject')}}</label>
        <input type="text" class="form-control" placeholder="{{('subject')}}" value="{{$contact->subject}}" name="subject" required >
    </div>
    <div class="form-group">
        <label for="title">{{('contact')}} {{('message')}}</label>
        <input type="text" class="form-control" placeholder="{{('message')}}" value="{{$contact->message}}" name="message" required >
    </div>



    <div class="btns-bottom">
        <button type="submit" class="btn btn-default">{{('submit')}}</button>
        <a href="{{ url('contact') }}" id="back" class="btn btn-default">{{('back')}}</a>
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
