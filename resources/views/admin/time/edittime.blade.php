@extends('layouts.admin')

@section('content')

    <div class=" text-center"><h1>{{('Important Times')}}</h1></div>


    {!! Form::open(['method'=>'PATCH','url' => 'time/'.$time ->id]) !!}

    <div class="form-group">
        <label for="title">{{('time')}} {{('name')}}</label>
        <input type="text" class="form-control" placeholder="{{('name')}}" value="{{$time->name}}"  name="name" required >
    </div>
    <div class="form-group">
        <label for="title">{{('time')}} {{('description')}}</label>
        <input type="text" class="form-control" placeholder="{{('description')}}" value="{{$time->description}}" name="description" required >
    </div>
    <div class="form-group">
        <label for="title">{{('time')}} {{('type')}}</label>
        <select name="type"   class="form-control" id="status">
            <option value="1">بكالوريوس</option>
            <option value="0">دراسات عليا</option>
        </select>
    </div>

    <div class="btns-bottom">
        <button type="submit" class="btn btn-default">{{('submit')}}</button>
        <a href="{{ url('time') }}" id="back" class="btn btn-default">{{('back')}}</a>
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
