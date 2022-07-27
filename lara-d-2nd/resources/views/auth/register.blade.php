<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
                <title>大事なことを掘りおこす！</title>
                    <!-- CSRF Token -->
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
                    <!--bootstrap-->
                    <!--CSS -->
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
                    <!-- Material Design Bootstrap -->
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
                    <!-- Bootstrap core CSS -->
                    <link href="css/bootstrap.min.css" rel="stylesheet">
                    <!-- Styles -->
                    <link href="{{ asset('/css/application.css') }}" rel="stylesheet">
                    <!-- Fontawsome -->
                    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        </head>

    <body>
        <div class="container mt-5">
            <div class="card align-items-center p-5">
                <div class="form-wrap col-xs-6 col-md-8 col-lg-6 col-xl-5">
                    <div class="form-group text-center">
                        <h2 class="logo-img mx-auto">
                        新規登録
                        </h2>
                    </div>
                    <form method="POST" action="{{ route('signup.post') }}">
                    @csrf
                        <div class="form-group">
                            <input class="form-control " placeholder="メールアドレス" autocomplete="email" name="email" value="">
                        </div>

                        <div class="form-group">
                            <input class="form-control" placeholder="ユーザー名" name="name" value="">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="パスワード" autocomplete="off" name="password">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="パスワード再確認" autocomplete="off" name="password_confirmation">
                        </div>

                        <div class="actions text-center">
                            <input type="submit" name="commit" value="新規登録" class="btn btn-info w-auto">
                        </div>
                    </form>
                    <br>
                    <p class="devise-link font-small text-center mt-3">
                    もうアカウントをお持ちでしたら⇨
                        <a href="/login">
                        ログインする
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
