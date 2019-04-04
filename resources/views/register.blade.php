

@extends('layout.common')

@section('content')

<form action="{{ url('/login')}}" method="post" >
{{ csrf_field() }}
<p>新規登録</p>
    <div class="container">
        <div >名前<br><input type="text" name="name1" placeholder="お名前を登録してください" /></div>
        <div >email<br><input type="text" name="mail1"placeholder="メールアドレスを登録してください"/></div>
        <div >password<br><input type="text" name="pass1"placeholder="passwordを登録してください"/></div>
    </div>

    <div class="button">
         <button type="submit"> 新規登録</button>
    </div>
</form>
@endsection

<style>
    form {
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