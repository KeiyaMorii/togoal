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
    <div class="mandara">
        <table border="2" class="left_top">
            <tr><td class="one">@if(isset($items[1])){{ $items[1]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="1"></button></td>
                <td>@if(isset($items[2])){{ $items[2]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="2"></button></button></td>
                <td>@if(isset($items[3])){{ $items[3]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="3"></button></td></tr>
            <tr><td>@if(isset($items[4])){{ $items[4]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="4"></button></td>
                <td bgcolor="#00a9ff">@if(isset($items[5])){{ $items[5]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="5"></button></td>
                <td>@if(isset($items[6])){{ $items[6]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="6"></button></td></tr>
            <tr><td>@if(isset($items[7])){{ $items[7]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="7"></button></td>
                <td>@if(isset($items[8])){{ $items[8]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="8"></button></td>
                <td>@if(isset($items[9])){{ $items[9]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="9"></button></td></tr>
        </table>
        <table border="2">
            <tr><td>@if(isset($items[10])){{ $items[10]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="10"></button></td>
                <td>@if(isset($items[11])){{ $items[11]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="11"></button></td>
                <td>@if(isset($items[12])){{ $items[12]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="12"></button></td></tr>
            <tr><td>@if(isset($items[13])){{ $items[13]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="13"></button></td>
                <td bgcolor="#00a9ff">@if(isset($items[14])){{ $items[14]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="14"></button></td>
                <td>@if(isset($items[15])){{ $items[15]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="15"></button></td></tr>
            <tr><td>@if(isset($items[16])){{ $items[16]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="16"></button></td>
                <td>@if(isset($items[17])){{ $items[17]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="17"></button></td>
                <td>@if(isset($items[18])){{ $items[18]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="18"></button></td></tr>
        </table>
        <table border="2" class="right_top">
        <tr><td>@if(isset($items[19])){{ $items[19]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="19"></button></td>
                <td>@if(isset($items[20])){{ $items[20]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="20"></button></td>
                <td>@if(isset($items[21])){{ $items[21]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="21"></button></td></tr>
            <tr><td>@if(isset($items[22])){{ $items[22]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="22"></button></td>
                <td bgcolor="#00a9ff">@if(isset($items[23])){{ $items[23]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="23"></button></td>
                <td>@if(isset($items[24])){{ $items[24]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="24"></button></td></tr>
            <tr><td>@if(isset($items[25])){{ $items[25]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="25"></button></td>
                <td>@if(isset($items[26])){{ $items[26]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="26"></button></td>
                <td>@if(isset($items[27])){{ $items[27]["content"] }}@endif<button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="27"></button></td></tr>
        </table>
    </div>
    <div class="mandara_middle">
        <table border="2" class="left_middle">
        <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position28"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position29"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position30"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position31"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position32"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position33"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position34"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position35"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position36"></button></td></tr>
        </table>
        <table border="2">
            <tr><td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position37"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position38"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position39"></button></td></tr>
            <tr><td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position40"></button></td>
                <td bgcolor="#f5a500"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position41"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position42"></button></td></tr>
            <tr><td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position43"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position44"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position45"></button></td></tr>
        </table>
        <table border="2" class="right_middle">
        <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position46"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position47"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position48"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position49"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position50"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position51"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position52"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position53"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position54"></button></td></tr>
        </table>
    </div>
    <div class="mandara_under">
        <table border="2" class="left_under">
        <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position55"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position56"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position57"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position58"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position59"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position60"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position61"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position62"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position63"></button></td></tr>
        </table>
        <table border="2">
        <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position64"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position65"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position66"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position67"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position68"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position69"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position70"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position71"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position72"></button></td></tr>
        </table>
        <table border="2" class="right_under">
        <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position73"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position74"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position75"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position76"></button></td>
                <td bgcolor="#00a9ff"><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position77"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position78"></button></td></tr>
            <tr><td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position79"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position80"></button></td>
                <td><button type="button" class="btn btn-page" data-toggle="modal" data-target="#exampleModal" data-whatever="position81"></button></td></tr>
        </table>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <form action="mygoal" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" name="content" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <input type="hidden" id="posi" name="position" value="1">
                    <input type="hidden" name="goal_id" value="1">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            <input type="submit" class="btn btn-primary" value="保存">
        </div>
    </form>
    </div>
  </div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="mygoal3" tabindex="-1">Previous</a>
    </li>
    <!-- mygoal?goal_id1 -->
    <li class="page-item"><a class="page-link" href="mygoal?goal_id1">1</a></li>
    <li class="page-item"><a class="page-link" href="mygoal?goal_id2">2</a></li>
    <li class="page-item"><a class="page-link" href="mygoal?goal_id3">3</a></li>
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
<script src="{{ asset('/js/mygoal.js') }}"></script>
</body>
</html>