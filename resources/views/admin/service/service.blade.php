@extends('layouts.admin')

@section('content')

    <div class="btns-top">
        <a class="btn btn-primary" href="{{ URL::to('service/create') }}" >{{('add')}}</a>
        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{('delete')}}</button>
    </div>

    <div class=" text-center"><h1>Services</h1></div>
    <table  class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <th><input type="checkbox" id="checkAll"/></th>
        <th>{{('id')}}</th>
        <th>{{('text')}}</th>
        <th>{{('title')}}</th>
        <tbody>
        @foreach ( $service as $service)
            <tr id="{{$service->id}}">
                <td> <input type="checkbox" name="checkbox"  value="{{$service->id}}" /> </td>
                <td>{{$service->id}}</td>
                <td> <a href="{{ route('service.edit', $service->id) }}">{{ $service->text }}</a></td>
                <td> {{ $service->title }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>



@endsection
