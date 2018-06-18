@extends('layouts.app')

@section('content')
     @if (Auth::check())
       {!! link_to_route('tasklists.index', 'タスク一覧へ', null, ['class' => 'btn btn-lg btn-standard']) !!}
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasklists</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection