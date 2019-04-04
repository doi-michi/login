

@extends('layout.common')

@section('content')

<div class="container">
<p>{{$msg}}</p>

<form action="{{url('/home')}}" method="post">
{{ csrf_field() }}
        <div label for="name">name<br><input type="text" name="name" placeholder="name"/></div>
        <div label for="email">email<br><input type="text" name="email" placeholder="email@example.com"/></div>
        <div label for="pass">password<br><input type="text" name="pass" placeholder="password"/></div>

        <div class="button">
            <button type="submit">ログイン</button>
        </div>
    </div>
    </form>
@endsection

<style>
    .container {
        font-size:15px;
        /* フォームをページの中央に置く */
        margin: 50 auto;
        width: 80%;
        /* フォームの範囲がわかるようにする */
        padding: 3em;
        border: 1px solid #CCC;
        border-radius: 1em;
    }
    input{
        width:100%;
        font-size: 15px;
        margin:15px 0;
    }
    .button{
        margin-top:5px;
        text-align:center;
    }
</style>