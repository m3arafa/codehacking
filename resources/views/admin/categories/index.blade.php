@extends('layouts.admin')


@section('content')



    <h1>Categories:</h1>

    <div class="row">
        <div class="col-md-5">


            {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store']) !!}

            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name', null , ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('create Category',['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}


        </div>
        <div class="col-md-7">

            @if($categories)

                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Created date</th>
                        <th>Updated date</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
                            <td>{{$category->created_at ? $category->created_at->diffForHumans() : "No Date"}}</td>
                            <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : "No Date"}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @endif

        </div>

    </div>



@stop