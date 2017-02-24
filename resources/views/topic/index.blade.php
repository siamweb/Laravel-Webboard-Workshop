@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>
                <div class="panel-body">
                <ol>
                    @foreach($topics as $topic)
                        <li>{{ $topic->title}}<br />{{ $topic->created_at}}
                    @endforeach
                </ol>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
