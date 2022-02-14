<!DOCTYPE HTML>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>create_profile</title>
    </head>
    <body>
        <h1>プロフィール登録</h1>
        <form action="/profiles" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="sex">
                <h2>性別</h2>
                <input type="radio" name="profile[sex]" value="男性">男性
                <input type="radio" name="profile[sex]" value="女性">女性
                <input type="radio" name="profile[sex]" value="その他">その他
            <div>
            <div class="nickname">
                <h2>ニックネーム</h2>
                <input type="text" name="profile[nickname]" placeholder="ニックネーム"/>
            </div>
            <div class="prefecture">
                <h2>お住いの都道府県</h2>
                <select name="profile[prefecture_id]" >
                    @foreach($prefectures as $prefecture)
                        <option value="{{ $prefecture->id }}">{{ $prefecture->name}}</option>
                    @endforeach
                </select>
            </div>
                <h2>プロフィール画像</h2>
                <input type="file" name="icon">
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
@endsection