<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <form action="{{ route('recipes.index') }}">
    <input type="text" name="name" id="name" placeholder="名前" value={{ $request->input('name') }}>
    <select name="category" id="category" value={{ old('category') }}>
        <option value=""></option>
        <option value="インド料理" @if( $request->input('category') === 'インド料理' ) selected @endif>インド料理</option>
        <option value="和食" @if( $request->input('category') === '和食' ) selected @endif>和食</option>
    </select>
    <button type="submit">検索</button>
</form>

<ul>
    @foreach($recipes as $recipe)
        <li>{{$recipe->name}}</li>
        <li>{{$recipe->category}}</li>
    @endforeach
</ul>
{{ $recipes->links('vendor.pagination.simple-default') }}


   
</body>
</html>

