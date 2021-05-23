@extends('layouts.app')

<html>

<head>
<style>
form{ background-color: #193278; color: blanchedalmond; padding:30px 30px; }
form dl dt{ width: 165px; padding:10px 0; float:left; clear:both; }
form dl dd{ padding:10px 0; }
.btn { border: inset; cursor: pointer; line-height: 1.6; margin-left: 200;}
</style> 
</head>
<body>
    <h1>ログイン</h1>
    <form action="">
      <dl>
        <dt>メールアドレス: </dt>
        <dd><input type="email" name="email" class="email"></dd>
        <dt>パスワード: </dt>
        <dd><input type="password" name="password" class="password"></dd>
      </dl>
      <button type="submit" class="btn">ログイン</button>
      <p>パスワード忘れた方へ</p>
      <p>登録されているメールアドレスを入力後、送信ボタンを押して下さい。</p>
      <dl>
        <dt>メールアドレス入力: </dt>
        <dd><input type="email" name="email" class="email"></dd>
      </dl>
      <button type="submit" class="btn">送信</button>
    </form>

</body>

</html>