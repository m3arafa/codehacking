@extends('layouts.admin')


@section('content')

    <h2>Edit User</h2>

    <div class="col-sm-3">

        <img src="{{$user->photo? $user->photo->path : "Empty"}}" alt="" class="img-responsive img-rounded">

    </div>

    <div class="col-sm-9">

        {!! Form::model($user ,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id],'files'=> true]) !!}

        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name', null , ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email', null , ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role','Role:') !!}
            {!! Form::select('role_id', $roles, null , ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('status','Status:') !!}
            {!! Form::select('is_active',array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id','Profile Picture:') !!}
            {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group col-md-10">
            {!! Form::submit('Update User',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}






        {{--------- To Delete User -----------}}

        {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy', $user->id]]) !!}

        <div class="form-group col-md-2">
            {!! Form::submit('Delete User',['class'=>'btn btn-danger']) !!}
        </div>

        {!! Form::close() !!}





        {{----------- check for form data  request -----------}}
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif
    </div>

@stop