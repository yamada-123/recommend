<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>shop</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>行く予定のお店</h1>
        <p>{{ $plan->content }}</p>
        <p>{{ $plan->user_name}}</p>
        <p>
          <a href = {{ route('plan.list') }}一覧に戻る</a>
        </p>
        <div>
        {{ Form::open(['method' => 'delete', 'route' => ['plan.delete', $plan->id]]) }}
            {{ Form::submit('削除', ['class' => 'btn btn-outline-secondary']) }}
        {{ Form::close() }}
        </div>
    </body>
</html>
