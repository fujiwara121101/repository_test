<!DOCTYPE HTML>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>store_create</title>
    </head>
    <body>
        <h1>店舗情報作成</h1>
        <form action="/stores" method="POST">
            @csrf
            <div class="name">
                <h2>店名</h2>
                <input type="text" name="store[name]" placeholder="店名を正確に入力してください"/>
                <p class="name__error" style="color:red">{{ $errors->first('store.name') }}</p>
            </div>
            <div class="adress">
                <h2>住所</h2>
                <input type="text" name="store[adress]"/>
                <p class="adress__error" style="color:red">{{ $errors->first('store.adress') }}</p>
            </div>
            <div class="url">
                <h2>URL</h2>
                <input type="text" name="store[url]" placeholder="店舗のURLがあれば入力してください"/>
            </div>
            <div class="recommend_point">
                <h2>初心者おすすめ度(1～5)</h2>
               <select name="store[recommend_point]">
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                </select>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/stores">back</a>]</div>
    </body>
</html>
@endsection