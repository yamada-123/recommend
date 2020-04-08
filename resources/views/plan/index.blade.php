<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>shop</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>行く予定のお店</h1>
        @foreach ($plans as $plan)
          <p>
              <a href = '{{ route("plan.show",["id" => $plan->id]) }}'>
                {{ $plan->content }}
                {{ $plan->user_name }}
              </a>
          </p>
        @endforeach
        <div>
            <a href={{ route('plan.new') }}>新規投稿</a>
        </div>
    </body>
</html>
