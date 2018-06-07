@extends('layouts.app')

@section('content')

    <h1>id: {{ $tasklist->id }} のタスク編集ページ</h1>

    
    {!! Form::model($tasklist, ['route' => ['tasklists.update',$tasklist->id],'method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status',null,['class' =>'form-controll']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content',null,['class' =>'form-controll']) !!}
    </div>

        {!! Form::submit('投稿',['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}

@endsection