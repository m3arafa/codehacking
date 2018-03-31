@extends('layouts.blog-post')



@section('content')


    <!-- Blog Post -->

    <!-- Title -->

    <h1>{{$post->title}}</h1>

    <!-- Author -->
    <p class="lead">
        by <a href="#">by {{$post->user->name}}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-responsive" src="{{$post->photo->path}}" alt="">

    <hr>

    <!-- Post Content -->

    <p>{{$post->body}}</p>
    
    <hr>

    <!-- Blog Comments -->

    <!-- Comments Form -->
    <div class="well">
        <h4>Leave a Comment:</h4>
        <form role="form">
            <div class="form-group">
                <textarea rows="3" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


    <hr>

    <!-- Posted Comments -->

    <!-- Comment -->
    <div class="media">
        <a class="pull-left" href="#">
            <img height="64" class="media-object" src="http://placehold.it/64x64" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading">Start Bootstrap
                <small>Augest 25, 2014 at 9:00 PM</small>
            </h4>
            <p>Cras site ay kalama gravita , new bosten natalia stark want to marride as you want.</p>

            <!-- Nested Comment -->
            <div class=" media">
                <a class="pull-left" href="#">
                    <img height="64" class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Nested Start Bootstrap
                        <small>Augest 25, 2014 at 9:00 PM</small>
                    </h4>
                    <p>Cras site ay kalama gravita , new bosten natalia stark want to marride as you want .</p>
                </div>


            </div>

        </div>
        <!-- End Nested Comment -->


    </div>


@stop