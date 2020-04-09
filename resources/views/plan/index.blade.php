@extends('layout')

@section('content')
        <h1>気になるお店</h1>
        @include('plan.search')
        <table class = 'table table-striped table-hover'>
        <tr>
              <th>気になるお店</th><th>訪問予定日</th><th>投稿者</th>
          </tr>  
        @foreach ($plans as $plan)
          <tr>
            <td>
              <a href = '{{ route("plan.show",["id" => $plan->id]) }}'>
                {{ $plan->content }}
              </a>
            </td>
            <td>{{ $plan->user_name}}</td>
            <td>{{ $plan->user->name}}</td>
          </tr>
        @endforeach
        </table>
      @auth
        <div>
            <a href={{ route('plan.new') }} class = 'btn btn-outline-primary'> 新規投稿</a>
        </div>
      @endauth
@endsection
