@extends('layout')

@section('content')
    <h1>気になるお店を登録</h1>
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
            {{ Form::label('content', '気になるお店:') }}
            {{ Form::text('content', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('user_name', '訪問予定日:') }}
            {{ Form::text('user_name', null) }}
        </div>
        <div class="form-group">
            {{ Form::submit('登録', ['class' => 'btn btn-primary']) }}
            <a href={{ route('plan.list') }}>一覧に戻る</a>
        </div>
    {{ Form::close() }}
@endsection

