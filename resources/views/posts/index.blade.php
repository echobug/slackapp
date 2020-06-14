@extends('layouts.common')

@section('title', 'Times in Slack')


@section('content')

    <h1>Times On Slack</h1>

@foreach($posts as $post)

    <ul>
        <li>{{$post->content}}</li>
    </ul>

@endforeach

@endsection

@include('layouts.footer')

