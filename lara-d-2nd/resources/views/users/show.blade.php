@extends('layouts.app')
@section('content')
    <div class="text-center my-5">
        <i class="fas fa-user fa-3x"></i>
        <div class="mt-4">
            <h3>{{ auth()->user()->name }}</h3>
        </div>
        <h5>{{ auth()->user()->email }}</h5>
        <div class="mt-3">
            <a href="#" class="btn btn-sm btn-outline-dark">
                <i class="fas fa-user-edit"> プロフィール編集</i>
            </a>
            <a href="{{ route('logout') }}" class="btn btn-sm btn-outline-danger">
                <i class="far fa-hand-paper"> ログアウト</i>
            </a>
        </div>
    </div>
@endsection