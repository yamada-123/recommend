@extends('layout')

@section('content')
    <h1>行く予定のお店を編集</h1>
    @if ($errors->any())
        <div class = "alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::model($plan,['route' => ['plan.update', $plan->id]] )}}
        <div class='form-group'>
            {{ Form::label('content', '気になるお店:') }}
            {{ Form::text('content', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('user_name', '訪問予定日:') }}
            {{ Form::text('user_name', null) }}
        </div>
        <div class="form-group">
            {{ Form::submit('更新', ['class' => 'btn btn-primary']) }}
            <a href={{ route('plan.show', ['id' => $plan->id]) }}>一覧に戻る</a>
        </div>
    {{ Form::close() }}
@endsection