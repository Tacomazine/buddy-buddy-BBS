@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="card text-light bg-dark align-items-center p-5">
            <div class="form-wrap col-xs-6 col-md-8 col-lg-6 col-xl-5">
                <div class="form-group text-center">
                    <h2 class="logo-img mx-auto">
                        ログイン
                    </h2>
                </div>
                <form method="POST" action="{{ route('login.post') }}">
                @csrf
                    <div class="form-group">
                        <input class="form-control " placeholder="メールアドレス" autocomplete="email" name="email" value="">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="パスワード" autocomplete="off" name="password">
                    </div>

                    <div class="actions text-center">
                        <input type="submit" name="commit" value="ログイン" class="btn btn-success w-auto">
                    </div>
                </form>
                <br>
                <p class="devise-link font-small text-center mt-3">
                    まだアカウントをお持ちでなければ⇨
                    <a href="{{ route('signup') }}">
                        新規登録する
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection