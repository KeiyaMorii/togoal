@extends('layouts.app')

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
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス: </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">パスワード: </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
