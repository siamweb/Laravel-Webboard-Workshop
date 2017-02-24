@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>{{ $topic->title }}</strong>
                    </div>
                   <div class="panel-body">

                        <div>
                            <p style="white-space: pre">{{ $topic->body }}</p>
                        </div>

                        <div class="text-right">
                            By <strong>{{ $topic->user->name }}</strong>
                            at <strong>{{ $topic->created_at->diffForHumans() }}</strong>
                        </div>

                        @foreach($comments as $comment)
                            <hr />
                            <div>
                                <p style="white-space: pre">{{ $comment->body }}</p>
                            </div>

                            <div class="text-right">
                                By <strong>{{ $comment->user->name }}</strong>
                                at <strong>{{ $comment->created_at }}</strong>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection