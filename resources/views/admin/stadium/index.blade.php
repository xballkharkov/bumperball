@extends('adminlte::page')

@section('title', 'Стадионы')

@section('content_header')
    <h1>Стадионы</h1>
@stop

@section('content')
    <table class="table table-bordered table-striped dataTable table-hover no-footer">
        <thead>
        <tr>
            <td>ID</td>            
            <td>Name</td>            
            <td>Address</td>            
            <td>Phone</td>            
            <td>Site</td>            
        </tr>
        </thead>
        @foreach ($list as $stadium)
            <tr>
                <td>{{ $stadium->id }}</td>            
                <td>{{ $stadium->name }}</td>            
                <td>{{ $stadium->address }}</td>            
                <td>{{ $stadium->phone }}</td>            
                <td>{{ $stadium->site }}</td>            
            </tr>
        @endforeach
    </table>
@stop