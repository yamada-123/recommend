@extends('layout')

@section('content')
    <h1>行く予定のお店を編集</h1>
    {{ Form::model($plan,['route' => ['plan.update', $plan->id]] )}}
        <div class='form-group'>
            {{ Form::label('content', 'Content:') }}
            {{ Form::text('content', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('user_name', 'Name:') }}
            {{ Form::text('user_name', null) }}
        </div>
        <div class="form-group">
            {{ Form::submit('更新', ['class' => 'btn btn-primary']) }}
            <a href={{ route('plan.show', ['id' => $plan->id]) }}>一覧に戻る</a>
        </div>
    {{ Form::close() }}
@endsection