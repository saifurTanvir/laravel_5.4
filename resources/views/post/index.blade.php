 @extends('layout.app')

@section('content')
    <h1>Posts</h1>
    
    @if(count($post) > 0)
        @foreach ($post as $posts)
            <div class="well">
                <h1><a href="/post/{{$posts->id}}">{{$posts->title}}</h1></a>
                <small>Written on {{$posts->created_at}}</small>
            </div>
            
        @endforeach
        {{$post->links()}}
    @else
        <p>Post not found!</p>
    @endif

    
@endsection