@extends('layout')

@section('content')
        <h1>気になるお店</h1>
        <br><br>
        <h4>お店</h4><p>{{ $plan->content }}</p>
        <br>
        <h4>訪問予定日</h4><p>{{ $plan->user_name}}</p>

        <p>
        <a href={{ route('plan.list') }} class='btn btn-outline-primary'>一覧に戻る</a>
        <a href={{ route('plan.edit', ["id" => $plan->id]) }} class='btn btn-outline-primary'>編集</a>
        </p>
        <div>
        {{ Form::open(['method' => 'delete', 'route' => ['plan.delete', $plan->id]]) }}
            {{ Form::submit('削除', ['class' => 'btn btn-outline-secondary']) }}
        {{ Form::close() }}
        </div>
@endsection
