@extends('layout')

@section('content')
    <h1>行く予定のお店を登録</h1>
    @if ($errors->any())
<div class = "alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
    @endif
    {{ Form::open(['route' => 'plan.store']) }}
        <div class='form-group'>
            {{ Form::label('content', 'Content:') }}
            {{ Form::text('content', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('user_name', 'Name:') }}
            {{ Form::text('user_name', null) }}
        </div>
        <div class="form-group">
            {{ Form::submit('登録', ['class' => 'btn btn-primary']) }}
            <a href={{ route('plan.list') }}>一覧に戻る</a>
        </div>
    {{ Form::close() }}
@endsection

