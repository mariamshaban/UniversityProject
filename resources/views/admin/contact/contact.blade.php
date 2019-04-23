@extends('layouts.admin')

@section('content')

    <div class="btns-top">
        <a class="btn btn-primary" href="{{ URL::to('contactus/create') }}" >{{('add')}}</a>
        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{('delete')}}</button>
    </div>

    <div class=" text-center"><h1> Contact</h1></div>
    <table  class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <th><input type="checkbox" id="checkAll"/></th>
        <th>{{('id')}}</th>
        <th>{{('name')}}</th>
        <th>{{('subject')}}</th>
        <tbody>
        @foreach ( $contact as $contact)
            <tr id="{{$contact->id}}">
                <td> <input type="checkbox" name="checkbox"  value="{{$contact->id}}" /> </td>
                <td>{{$contact->id}}</td>
                <td> <a href="{{ route('contactus.edit', $contact->id) }}">{{ $contact->name }}</a></td>
                <td> {{ $contact->subject }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>



@endsection
