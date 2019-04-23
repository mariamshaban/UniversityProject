@extends('layouts.admin')

@section('content')

    <div class="btns-top">
        <a class="btn btn-primary" href="{{ URL::to('city/create') }}" >{{('add')}}</a>
        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{('delete')}}</button>
    </div>

    <div class=" text-center"><h1>City</h1></div>
    <table  class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <th><input type="checkbox" id="checkAll"/></th>
        <th>{{('id')}}</th>
        <th>{{('name_en')}}</th>
        <th>{{('name_ar')}}</th>
        <tbody>
        @foreach ( $city as $city)
            <tr id="{{$city->id}}">
                <td> <input type="checkbox" name="checkbox"  value="{{$city->id}}" /> </td>
                <td>{{$city->id}}</td>
                <td> <a href="{{ route('city.edit', $city->id) }}">{{ $city->name_ar }}</a></td>
                <td> {{ $city->name_en }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>



@endsection
