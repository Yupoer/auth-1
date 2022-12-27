@extends('layouts.app')
@section('content')

<body class="login">
    <div class="arrange">
        <div class="loginframe">
            <form action="{{ route('login') }}" method="post">
                <h2 class="login">學分計算機</h2>
                <div class="logincontent">
                    <label for="email">帳號
                        <input id="email" type="email" class="loginfield" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </label>
                    <br><br>
                    <label for="password">密碼
                        <input id="password" type="password" class="loginfield" name="password" required autocomplete="current-password">
                    </label>
                    <div class="loginminor">
                        @if (Route::has('password.request'))
                        <a href="#" class="loginword">不准忘記密碼</a><span> ｜ </span><a href="{{ route('register') }}"  class="loginword"> 註冊</a>
                        @endif
                    </div>
                    <button type="submit" class="loginbutton">登入{{ csrf_field() }}</button>
                </div>
            </form>
        </div>
    </div>
</body
@endsection
