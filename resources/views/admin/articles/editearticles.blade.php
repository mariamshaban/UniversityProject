@extends('layouts.admin')

@section('content')

    <div class=" text-center"><h1>{{('Articles')}}</h1></div>


    {!! Form::open(['method'=>'PATCH','url' =>'articl/'.$article ->id]) !!}
    <div class="form-group">
        <label for="title">{{('articles')}} {{('name')}}</label>
        <input type="text" class="form-control" placeholder="{{('name')}}" value="{{$article->name}}" name="name" required >
    </div>
    <div class="form-group">
        <label for="title">{{('articles')}} {{('short_description')}}</label>
        <input type="text" class="form-control" placeholder="{{('short_description')}}" value="{{$article->short_description}}"  name="short_description" required >
    </div>
    <div class="form-group">
        <label for="title">{{('articles')}} {{('text')}}</label>
        <input type="text" class="form-control" placeholder="{{('text')}}" value="{{$article->text}}" name="text" required >
    </div>


    <div class="form-group">
        <label for="category_image">{{('image')}}</label>
        <img src="{{url('uploads/articles')}}/{{$article->image}}" width="200" height="200">
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
