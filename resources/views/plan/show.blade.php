@extends('layout')

@section('content')
        <h1>行く予定のお店</h1>
        <p>{{ $plan->content }}</p>
        <p>{{ $plan->user_name}}</p>
        
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
