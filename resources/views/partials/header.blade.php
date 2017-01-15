<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} {{$title}}</title>
    {{ Html::style('css/app.css') }}
</head>
<body>
    <div class="container-fluid">
        <div id="page-header" class="row">
            <div class="col-xs-12 text-right">
                <a href="{!! url('/login') !!}" class="btn btn-primary">Login</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">

