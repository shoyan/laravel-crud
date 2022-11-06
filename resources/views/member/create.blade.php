<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>新規作成</h1>

    <form method="POST" action="{{route('member.store')}}">
      @csrf
    
      <div>
        <label for="form-name">名前</label>
        <input type="text" name="name" id="form-name" required>
      </div>
    
      <div>
        <label for="form-tel">電話番号</label>
        <input type="tel" name="telephone" id="form-tel">
      </div>
    
      <div>
        <label for="form-email">メールアドレス</label>
        <input type="email" name="email" id="form-email">
      </div>
    
      <button type="submit">登録</button>
    
    </form> 
    <div>
        <a href="{{ route('member.index') }}">{{ __('一覧へ戻る') }}</a>
    </div>
</body>
</html>