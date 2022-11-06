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


