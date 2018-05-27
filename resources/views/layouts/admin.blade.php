@extends('adminlte::page')

@push('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
    <link rel="stylesheet" href="{!! asset('css/bootstrap/bootstrap-datetimepicker.min.css') !!}">
@endpush

@section('adminlte_js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
<<<<<<< HEAD
    <link rel="stylesheet" href="{!! asset('css/bootstrap/bootstrap3-wysihtml5.min.css') !!}">
    <script type="text/javascript" src="{!! asset('js/bootstrap/bootstrap3-wysihtml5.all.min.js') !!}"></script>
=======
    <script type="text/javascript" src="{!! asset('js/jquery/moment.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/bootstrap/bootstrap-datetimepicker.min.js') !!}"></script>
>>>>>>> add-orders-admin-page
    <script type="text/javascript" src="{!! asset('js/admin/custom.js') !!}"></script>
@stop