@extends('layouts.admin')

@section('content')

    <div class="btns-top">
        <a class="btn btn-primary" href="{{ URL::to('language/create') }}" >{{('add')}}</a>
        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{('delete')}}</button>
    </div>

    <div class=" text-center"><h1>Language</h1></div>
    <table  class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <th><input type="checkbox" id="checkAll"/></th>
        <th>{{('id')}}</th>
        <th>{{('name_ar')}}</th>
        <th>{{('name_en')}}</th>
        <tbody>
        @foreach ( $language as $language)
            <tr id="{{$language->id}}">
                <td> <input type="checkbox" name="checkbox"  value="{{$language->id}}" /> </td>
                <td>{{$language->id}}</td>
                <td> <a href="{{ route('language.edit', $language->id) }}">{{ $language->name_en }}</a></td>
                <td> {{ $language->name_ar }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>



@endsection
