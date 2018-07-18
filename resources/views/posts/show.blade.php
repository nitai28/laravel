@extends ('layout')

@section('content')
    {{--<h1>jsdjkdas</h1>--}}
    <div class="col-sm-8 blog-main">
        <h1>{{$post->title}}</h1>
        {{$post->body}}
        <hr>
        <div class="comments">
            <ul>
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{$comment->created_at->diffForHumans()}}: &nbsp;
                        </strong>
                        {{$comment->body}}
                    </li>

                @endforeach
            </ul>
        </div>

    </div>
@endsection