<html>

<head>
<style>
p { font-size: 25px;}
form{ background-color: #dbedf0; padding:30px 30px; }
form dl dt{ width: 165px; padding:10px 0; float:left; clear:both; }
form dl dd{ padding:10px 0; }
.btn { border: inset; cursor: pointer; line-height: 1.6;}
</style> 
</head>
<body>
    <p>新規登録</p>
    <form action="">
      <dl>
        <dt>ユーザーネーム: </dt>
        <dd><input type="text" name="name" class="name"></dd>
        <dt>メールアドレス: </dt>
        <dd><input type="email" name="email" class="email"></dd>
        <dt>生年月日: </dt>
        <dd><input type="date" name="date" class="date"></dd>
        <dt>パスワード: </dt>
        <dd><input type="password" name="password" class="password"></dd>
        <dt>パスワード再入力: </dt>
        <dd><input type="password" name="password" class="password"></dd>
      </dl>
      <button type="submit" class="btn">登録</button>
    </form>

</body>

</html>