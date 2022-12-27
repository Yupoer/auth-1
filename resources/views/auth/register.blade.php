@extends('layouts.app')

@section('content')
<body class="login">
    <div class="arrange">
        <div class="loginframe">
            <form method="POST" action="{{ route('register') }}">
                <h2 class="login">註冊帳號</h2>
                @csrf
                <div class="content">
                    <label for="name"><span class="loginword">使用者名稱</span></label>
                    <input id="name" type="text" class="loginfield" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>
                    <label for="email"><span class="loginword">電子郵件</span></label>
                    <input id="email" type="email" class="loginfield" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>
                    <label for="password"><span class="loginword">密碼</span></label>
                    <input id="password" type="password" class="loginfield" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>
                    <label for="password-confirm"><span class="loginword">確認密碼</span></label>
                    <input id="password-confirm" type="password" class="loginfield" name="password_confirmation" required autocomplete="new-password">
                    <br><br>
                </div>      
                <button type="submit" class="loginbutton">註冊</button>          
            </form>
        </div>
    </div>
</body>
@endsection
