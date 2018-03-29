@extends('layouts.admin')


@section('content')


    <h2>Posts</h2>


    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>User</th>
            <th>Category</th>
            <th>Title</th>
            <th>body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>

        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->id}}</a></td>
                    <td><img height="40" src="{{$post->photo ? $post->photo->path : 'http://placehold.it/400x400'}}"
                             alt=""></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category ? $post->category->name : "None"}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{str_limit($post->body, 30)}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach

        @endif
        </tbody>
    </table>

@stop