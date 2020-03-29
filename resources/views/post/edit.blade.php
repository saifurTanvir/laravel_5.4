@extends('layout.app')
 
@section('content')
    <h1>Update Post</h1>

    {!! Form::open(['action' => ['postController@update', $post->id], 'method' => 'post']) !!}
        <div class='form-group'>
            {{Form::label('title', 'Title')}} 
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'] )}} 
        </div>
        <div class='form-group'>
            {{Form::label('body', 'Body')}} 
            {{Form::textarea( 'body', $post->body, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body'] )}} 
        </div>
        {!! Form::hidden('_method', 'put') !!}
        {{form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    
   

    
@endsection