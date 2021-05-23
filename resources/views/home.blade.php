<html>

<head>
    <title>To Goal</title>
<style>
    p { font-size: 20px; text-align: right; }
    li { font-size: 30px; padding: 10px;}
</style> 
</head>
<body>
<p><a href="/home">Top</a></p>
@auth
    <ul>
        <li><a href="user/page">My Page</a></li>
        <li><a href="user/mygoal">My Goal</a></li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">新規登録</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">ログイン</a>
            </li>
            @endauth
    </ul>
</body>

</html>