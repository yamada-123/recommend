@extends('layout')

@section('content')
        <h1>お店一覧</h1>

          @include('search')
          <table class = 'table table-striped table-hover'>
          <tr>
              <th>カテゴリ</th><th>店名</th><th>住所</th><th>投稿者</th>
          </tr>  
        @foreach ($shops as $shop)
            <tr>
                <td>{{ $shop->category->name }}</td>
                <td>
                    <a href = {{ route('shop.detail',['id' => $shop->id]) }}>
                          {{ $shop->name }}
                    </a>
                </td>
                <td>{{ $shop->address }}</td>
                <td>{{ $shop->user->name }}</td>
            </tr>
        @endforeach
          </table>
          <a href={{ route('plan.list') }} class = 'btn btn-outline-primary'>お店のTodoリストへ</a>
        @auth
            <div>
              <a href={{ route('shop.new') }} class='btn btn-outline-primary'>新規作成</a>
            </div>
        @endauth
       {{$shops ->links()}}
@endsection