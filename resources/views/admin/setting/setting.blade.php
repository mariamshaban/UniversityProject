@extends('layouts.admin')

@section('content')

    <div class="btns-top">
        <a class="btn btn-primary" href="{{ URL::to('setting/create') }}" >{{('add')}}</a>
        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{('delete')}}</button>
    </div>

    <div class=" text-center"><h1>Setting</h1></div>
    <table  class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <th><input type="checkbox" id="checkAll"/></th>
        <th>{{('id')}}</th>
        <th>{{('name')}}</th>
        <th>{{('email')}}</th>
        <tbody>
        @foreach ( $setting as $setting)
            <tr id="{{$setting->id}}">
                <td> <input type="checkbox" name="checkbox"  value="{{$setting->id}}" /> </td>
                <td>{{$setting->id}}</td>
                <td> <a href="{{ route('setting.edit', $setting->id) }}">{{ $setting->name }}</a></td>
                <td> {{ $setting->email }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>



@endsection
