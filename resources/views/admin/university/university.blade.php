@extends('layouts.admin')

@section('content')

    <div class="btns-top">
        <a class="btn btn-primary" href="{{ URL::to('universit/create') }}" >{{('add')}}</a>
        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{('delete')}}</button>
    </div>

    <div class=" text-center"><h1>university</h1></div>
    <table  class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <th><input type="checkbox" id="checkAll"/></th>
        <th>{{('id')}}</th>
        <th>{{('name_ar')}}</th>
        <th>{{('name_en')}}</th>
        <tbody>
        @foreach ( $universities as $university)
            <tr id="{{$university->id}}">
                <td> <input type="checkbox" name="checkbox"  value="{{$university->id}}" /> </td>
                <td>{{$university->id}}</td>
                <td> <a href="{{ route('universit.edit', $university->id) }}">{{ $university->name_en }}</a></td>
                <td> {{ $university->name_ar }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>



@endsection
