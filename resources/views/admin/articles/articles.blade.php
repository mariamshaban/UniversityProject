@extends('layouts.admin')

@section('content')

    <div class="btns-top">
        <a class="btn btn-primary" href="{{ URL::to('articl/create') }}" >{{('add')}}</a>
        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{('delete')}}</button>
    </div>

    <div class=" text-center"><h1>articles</h1></div>
    <table  class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <th><input type="checkbox" id="checkAll"/></th>
        <th>{{('id')}}</th>
        <th>{{('name')}}</th>
        <th>{{('short_desc')}}</th>
        <tbody>
        @foreach ( $articles as $article)
            <tr id="{{$article->id}}">
                <td> <input type="checkbox" name="checkbox"  value="{{$article->id}}" /> </td>
                <td>{{$article->id}}</td>
                <td> <a href="{{ route('articl.edit', $article->id) }}">{{ $article->name }}</a></td>
                <td> {{ $article->short_description }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>



@endsection
