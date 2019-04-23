@extends('layouts.admin')

@section('content')

    <div class="btns-top">
        <a class="btn btn-primary" href="{{ URL::to('slider/create') }}" >{{('add')}}</a>
        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{('delete')}}</button>
    </div>

    <div class=" text-center"><h1>Slider</h1></div>
    <table  class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <th><input type="checkbox" id="checkAll"/></th>
        <th>{{('id')}}</th>
        <th>{{('text1')}}</th>
        <th>{{('short_description')}}</th>
        <tbody>
        @foreach ( $slider as $slider)
            <tr id="{{$slider->id}}">
                <td> <input type="checkbox" name="checkbox"  value="{{$slider->id}}" /> </td>
                <td>{{$slider->id}}</td>
                <td> <a href="{{ route('slider.edit', $slider->id) }}">{{ $slider->text1 }}</a></td>
                <td> {{ $slider->short_description }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>



@endsection
