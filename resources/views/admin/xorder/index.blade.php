@extends('adminlte::page')

@section('title', 'Заказы')

@section('content_header')
    <h1>Заказы</h1>
@stop

@section('content')
    <table class="table table-bordered table-striped dataTable table-hover no-footer">
        <thead>
        <tr>
            <td>ID</td>            
            <td>Date</td>            
            <td>User Name</td>            
            <td>User Contact</td>            
            <td>User Info</td>            
        </tr>
        </thead>
        @foreach ($xorders as $order)
            <tr>
                <td>{{ $order->id }}</td>            
                <td>{{ $order->created }}</td>            
                <td>{{ $order->user_name }}</td>            
                <td>{{ $order->user_contact }}</td>            
                <td>{{ $order->user_info }}</td>            
            </tr>
        @endforeach
    </table>
@stop