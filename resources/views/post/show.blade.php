@extends('layout.app')

@section('content')
    <a href="/post" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Created on {{$post->created_at}}</small>
    <hr>
    <a href="/post/{{$post->id}}/edit" class="btn btn-default">EDIT</a>

    {!! Form::open([ 'action' => ['postController@destroy', $post->id], 'method'=> 'post', 'class' => 'pull-right']) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        {{Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
    
    
    
@endsection