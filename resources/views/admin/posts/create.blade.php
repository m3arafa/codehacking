@extends('layouts.admin')


@section('content')


    <h2>Create Post</h2>


    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store', 'files'=> true]) !!}

    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title', null , ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id',array(1=>'PHP', 2=>'JavaScript'), null , ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','Photo:') !!}
        {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body','Description:') !!}
        {!! Form::textarea('body', null , ['class'=>'form-control', 'rows'=>3]) !!}
    </div>






    <div class="form-group">
        {!! Form::submit('create Post',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif


@stop