<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Post times in Slack</h1>


{!! Form::open(['action' => 'SlackController@store']) !!}
{!! Form::text('content', null, ['class' => 'form-input', 'placeholder' => 'コメントを入力してください']) !!}
{!! Form::submit('投稿する') !!}
{!! Form::close() !!}

</body>
</html>
