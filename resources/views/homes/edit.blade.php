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
    <p>プロフィール編集</p>
    <form action="">
      <dl>
        <dt>ユーザーネーム: </dt>
        <dd><input type="text" name="name" class="name"></dd>
        <dt>メールアドレス: </dt>
        <dd><input type="email" name="email" class="email"></dd>
        <dt>生年月日: </dt>
        <dd><input type="date" name="date" class="date"></dd>
      </dl>
      <button type="submit" class="btn">保存</button>
    </form>

</body>

</html>