@extends('layouts.layout')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>
        
        {{ $post->body }}

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach ($post->comments as $comment) 
                    <li class="list-group-item">
                        <strong>{{ $comment->created_at->diffForHUmans() }}: &nbsp;</strong>

                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        <hr>

        {{-- Add a comment --}}
        <div class="card">
            <div class="card-block">
            
                {{-- If the method is ever patch or delete, use method_field function. --}}
                {{-- At the time of this course, most browsers only understand GET and POST, this is a way of faking it. --}}
                {{-- {{ method_field('PATCH') }} --}}
                <form action="/posts/{{ $post->id }}/comments" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>

                @include('layouts.errors')

            </div>
        </div>

    </div>
@endsection