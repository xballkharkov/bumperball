@extends('adminlte::page')

@section('adminlte_js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="{!! asset('js/admin/custom.js') !!}"></script>
@stop