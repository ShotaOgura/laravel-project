<!DOCTYPE html>
<html>
<header>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<title>1ちゃんねる</title>
</header>
    <body>
        <h3 style="text-align:center">1ちゃんねる</h3>
        <h5 style="text-align:center">日本最古のインターネット掲示板です。</h5>
        <div class="post-history">
            @foreach ($posts as $post)
            <li class="frame post">
                {{ $post->contents }}
                <div class="post dt">{{ $post->posted}}</div><br>
                <div class="post name">{{ $post->userName }}</div><br>
            </li>
        @endforeach
        </div>

        <div class="post-form">
        <form action="/board" method="post">
            <label id="userName">名前</label>
            <input id="userName" type="text" name="userName" maxlength="6">
            <br>
            <label id="contents">投稿内容</label>
            <textarea id="contents" name="contents"></textarea>
            <br>
            <div style="text-align:center"><input type="submit" value="投稿する"></div>
        </form>
        </div>
    <link rel="stylesheet" href="board.css">
    </body>

    <style>
    /* stylesheet */

    li{
        list-style:none ;
    }

    .frame {
        width: 95%;
        height: 100px;
        background: #f5f5f5;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 3px;
        border:1px solid #000000;
        }

        .post {
        position: relative;
        }

        .post.dt {
            position: absolute;
            bottom: 0px;
            margin: 2px;
        }

        .post.name {
        position: absolute;
        bottom: 0px;
        margin: 2px;
        right: 2px;
        }

        .post-form {
        width: 95%;
        height: 100px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 3px;
        border:1px solid #000000;
        }

        .post-form label{
        vertical-align: top;
        }

    </style>
</html>

