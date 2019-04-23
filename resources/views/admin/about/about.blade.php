@extends('layouts.admin')

@section('content')

    <div class="btns-top">
        <a class="btn btn-primary" href="{{ URL::to('about/create') }}" >{{('Add')}}</a>
        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{('Delete')}}</button>
    </div>

    <div class=" text-center"><h1>About</h1></div>
    <table  class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <th><input type="checkbox" id="checkAll"/></th>
        <th>{{('id')}}</th>
        <th>{{('title')}}</th>
        <th>{{('text')}}</th>
        <tbody>
        @foreach ( $about as $about)
            <tr id="{{$about->id}}">
                <td> <input type="checkbox" name="checkbox"  value="{{$about->id}}" /> </td>
                <td>{{$about->id}}</td>
                <td> <a href="{{ route('about.edit', $about->id) }}">{{ $about->title }}</a></td>
                <td> {{ $about->text }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>



@endsection
