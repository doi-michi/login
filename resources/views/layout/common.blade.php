<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<style>
header {margin-top: 30px;height: 50px; border-bottom: 3px double #ccc;border-top:3px double #ccc;}
ul{list-style:none;}
a{text-decoration:none; color:black;}
.title{font-weight:bold;float: left; font-size: 16px; padding-left: 10px; line-height: 50px; margin: 0;}
.menu{font-size:10px; float:right; padding-left:10px; padding-right:10px;} 
body{margin:0 30px;}
</style>




</head>
<body>
    <header>
        <a class="title">Repeaters Memo</a> 
        <ul>
        @isset($name)
            <li><a class="menu" href="/login">ログアウト</a></li>
        @else
            <li><a class="menu" href="/login">ログイン</a></li>
        @endisset
            <li><a class="menu" href="/home">Home</a></li>
            <li><a class="menu" href="/register">新規登録</a></li>
        </ul>
    </header> 
    @yield('content')
</body>
</html>