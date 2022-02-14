@extends('layouts.app')

@section('content')
    <head>
        <title>ユーザー検索</title>
    </head>
    <body>
        <h1>ユーザー検索</h2>
            <form action="/profiles/search" method="get">
                @csrf
                <div class="search_sex">
                性別:
                <input type="radio" name="profile[sex]" value="男性">男性
                <input type="radio" name="profile[sex]" value="女性">女性
                <input type="radio" name="profile[sex]" value="その他">その他
                </div>
                <div class="search_prefecture">
                都道府県:<select name="profile[prefecture_id]" >
                    @foreach($prefectures as $prefecture)
                        <option value="{{ $prefecture->id }}">{{ $prefecture->name}}</option>
                    @endforeach
                </div>
                <input type="submit"　value="検索する">
            </form>
        
        @if(isset($profiles))
        <table class="table">
          <tr>
            <th>ニックネーム</th><th>性別</th><th>都道府県</th>
          </tr>
        @foreach($profiles as $profile)
          <tr>
            <td>{{$profile->nickname}}</td><td>{{$profile->sex}}</td><td>{{$profile->prefecture->name}}</td>
          </tr>
        @endforeach
        </table>
        @endif
        
        </div>
            
    </body>
@endsection
