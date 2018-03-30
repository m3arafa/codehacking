@extends('layouts.admin')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">

@stop

@section('content')


    <h2>Upload Media:</h2>



    {!! Form::open(['method'=>'POST','action'=>'AdminMediasController@store', 'class'=>'dropzone']) !!}


    {!! Form::close() !!}



@stop

@section('scripts')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js"></script>

@stop