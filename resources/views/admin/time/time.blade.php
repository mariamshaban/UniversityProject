@extends('layouts.admin')

@section('content')

    <div class="btns-top">
        <a class="btn btn-primary" href="{{ URL::to('time/create') }}" >{{('Add')}}</a>
        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{('Delete')}}</button>
    </div>

    <div class=" text-center"><h1>Important Times</h1></div>
    <table  class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <th><input type="checkbox" id="checkAll"/></th>
        <th>{{('id')}}</th>
        <th>{{('name')}}</th>
        <th>{{('description')}}</th>
        <tbody>
        @foreach ( $time as $time)
            <tr id="{{$time->id}}">
                <td> <input type="checkbox" name="checkbox"  value="{{$time->id}}" /> </td>
                <td>{{$time->id}}</td>
                <td> <a href="{{ route('time.edit', $time->id) }}">{{ $time->name }}</a></td>
                <td> {{ $time->description }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>



@endsection
