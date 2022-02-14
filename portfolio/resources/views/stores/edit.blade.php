<!DOCTYPE HTML>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>store_update</title>
    </head>
    <body>
        <h1>店舗情報修正</h1>
        <form action="/stores/{{ $store->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="content_name">
                <h2>店名</h2>
                <input type='text' name="store[name]" value="{{ $store->name }}">
                <p class="name__error" style="color:red">{{ $errors->first('store.name') }}</p>
            </div>
            <div class="content_adress">
                <h2>住所</h2>
                <input type="text" name="store[adress]" value="{{ $store->adress }}">
                <p class="adress__error" style="color:red">{{ $errors->first('store.adress') }}</p>
            </div>
            <div class="content_url">
                <h2>URL</h2>
                <input type="text" name="store[url]" value="{{ $store->url }}">
            </div>
            <div>
                <h2>初心者おすすめ度(1～5)</h2>
               <select name="store[recommend_point]" value=""{{ $store->recommend_point}}>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                </select>
            </div>
            <input type="submit" value="変更"/>
        </form>
        <div class="back">[<a href="/stores/{{ $store->id }}">back</a>]</div>
    </body>
</html>
@endsection