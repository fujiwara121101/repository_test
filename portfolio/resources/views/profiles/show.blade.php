<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profiles</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <<form action="/profiles" method="POST">
            <h1 class="nickname">
                ニックネーム {{$profile->nickname}}
            <h1 class="sex">
                性別 {{$profile->sex}}
            </h1>

            <h1 class="icon">
                <img src={{ Storage::disk('s3')->url("profile/{$profile->id}.jpg") }} class="card-img-top" alt="" />
            </h1>
            <input type="submit" value="いいね！"/>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </form>
    </body>
</html>