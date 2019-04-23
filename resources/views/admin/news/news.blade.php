@extends('layouts.admin')

@section('content')

    <div class="btns-top">
        <a class="btn btn-primary" href="{{ URL::to('news/create') }}" >{{('add')}}</a>
        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{('delete')}}</button>
    </div>

    <div class=" text-center"><h1>News</h1></div>
    <table  class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <th><input type="checkbox" id="checkAll"/></th>
        <th>{{('id')}}</th>
        <th>{{('mail')}}</th>
        <th>{{('message')}}</th>
        <tbody>
        @foreach ( $news as $new)
            <tr id="{{$new->id}}">
                <td> <input type="checkbox" name="checkbox"  value="{{$new->id}}" /> </td>
                <td>{{$new->id}}</td>
                <td> <a href="{{ route('news.edit', $new->id) }}">{{ $new->mail }}</a></td>
                <td> {{ $new->message }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>



@endsection
