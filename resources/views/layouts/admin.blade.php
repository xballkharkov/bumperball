@extends('adminlte::page')

@section('adminlte_js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{!! asset('css/bootstrap/bootstrap3-wysihtml5.min.css') !!}">
    <script type="text/javascript" src="{!! asset('js/bootstrap/bootstrap3-wysihtml5.all.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/admin/custom.js') !!}"></script>
@stop