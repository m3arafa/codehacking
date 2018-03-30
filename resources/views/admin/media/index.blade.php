@extends('layouts.admin')



@section('content')


    @if($photos)
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($photos as $photo)
                <tr>
                    <td>{{$photo->id}}</td>
                    <td><img height="60" src="{{$photo->path}}" alt="not found"></td>
                    <td>{{$photo->created_at ? $photo->created_at : "no date"}}</td>
                    <td>


                        {!! Form::open(['method'=>'DELETE','action'=>['AdminMediasController@destroy',$photo->id]]) !!}

                        <div class="form-group">
                            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                        </div>

                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

@stop