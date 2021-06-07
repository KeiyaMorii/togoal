<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Goal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('/css/mygoal.css') }}" rel="stylesheet">
</head>
<body>
    <p><a href="/home">Top</a></p>
    
    <h1>My Goal</h1>
    <h3>達成目標日</h3>
    <input type="date" name="goal">
    
    <form method="POST" action="user/mygoal">
    {{ csrf_field() }}
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">目標入力</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" id="todo" name="todo" size="45" value="{{ $input }}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        <a href="mygoal"><button type="button" class="btn btn-primary">保存</button></a>
      </div>
    </div>
  </div>
</div>

    <div class="mandara">
        <table border="2" class="left_top">
            <tr><td>{{ $item->position }}<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
        </table>
        <table border="2">
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
        </table>
        <table border="2" class="right_top">
        <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
        </table>
    </div>
    <div class="mandara_middle">
        <table border="2" class="left_middle">
        <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
        </table>
        <table border="2">
            <tr><td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#f5a500"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
        </table>
        <table border="2" class="right_middle">
        <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
        </table>
    </div>
    <div class="mandara_under">
        <table border="2" class="left_under">
        <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
        </table>
        <table border="2">
        <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
        </table>
        <table border="2" class="right_under">
        <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal"></button></td></tr>
        </table>
    </div>
    </form>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="mygoal3" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="mygoal">1</a></li>
    <li class="page-item"><a class="page-link" href="mygoal2">2</a></li>
    <li class="page-item"><a class="page-link" href="mygoal3">3</a></li>
    <li class="page-item">
      <a class="page-link" href="mygoal2">Next</a>
    </li>
  </ul>
</nav>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>