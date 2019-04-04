
@extends('layout.common')
@section('title.toppage')

@section('content')
<div class="main">
    <h1>Top page</h1>
@isset($name)
    <p>こんにちは{{$name}}さん</p>

@endisset
</div>
@endsection

<style>
    .main {
        font-size:15px;
        text-align: center;
        /* フォームをページの中央に置く */
        margin: 100 auto;
        width: 50%;
        /* フォームの範囲がわかるようにする */
        padding: 3em;
        border: 3px double #CCC;
        border-radius: 5em;
    }
</style>