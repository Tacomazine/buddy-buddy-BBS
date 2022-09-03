@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="card text-light bg-dark align-items-center p-5">
        <div class="form-wrap col-xs-6 col-md-8 col-lg-6 col-xl-5">
            <div class="form-group text-center">
                <h2 class="mx-auto mb-4">
                    プロフィール編集
                </h2>
            </div>
            <form method="POST" action="{{ route('user.update', $user->id) }}">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <input class="form-control" placeholder="" name="name" value="{{ Auth::user()->name??'ユーザー名' }}">
                </div>

                <div class="form-group">
                    <input class="form-control " placeholder="" autocomplete="email" name="email" value="{{ Auth::user()->email??'メールアドレス' }}">
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" placeholder="パスワード" autocomplete="off" name="password">
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" placeholder="パスワード再確認" autocomplete="off" name="password_confirmation">
                </div>

                <div class="actions text-center mt-4">
                    <input type="submit" name="commit" value="変更する" class="btn btn-outline-warning w-auto">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection