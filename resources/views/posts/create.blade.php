@extends('layouts.common')

@section('title', 'Times in Slack | Post times comment')

@section('content')

<h1>Post times comment in Slack</h1>

{!! Form::open(['action' => 'SlackController@store']) !!}
{!! Form::text('content', null, ['class' => 'form-input', 'placeholder' => 'コメントを入力してください']) !!}
{!! Form::submit('投稿する') !!}
{!! Form::close() !!}

@endsection

@include('layouts.footer')
