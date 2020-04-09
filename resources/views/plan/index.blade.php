@extends('layout')

@section('content')
        <h1>行く予定のお店</h1>
        @include('plan.search')
        <table class = 'table table-striped table-hover'>
        @foreach ($plans as $plan)
          <tr>
            <td>
              <a href = '{{ route("plan.show",["id" => $plan->id]) }}'>
                {{ $plan->content }}
              </a>
            </td>
            <td>{{ $plan->user_name }}</td>
          </tr>
        @endforeach
        </table>

        <div>
            <a href={{ route('plan.new') }} class = 'btn btn-outline-primary'> 新規投稿</a>
        </div>
@endsection
