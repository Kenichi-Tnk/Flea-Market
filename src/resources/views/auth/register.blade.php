@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('main')
    <h2 class="main-title">会員登録</h2>
    <form class="form-content" action="/register" method="post">
        @csrf
        <label class="form-content__label">メールアドレス
            <input class="form-content__input" type="email" name="email" value="//">
        </label>
        @error('email')
            <div class="form-content__error">{{ $message }}</div>
        @enderror

        <label class="form-content__label">パスワード
            <input class="form-__icontentnput" type="password" name="password">
        </label>
        @error('password')
            <div class="form-content__error"></div>
        @enderror

        <button class="form-content__button" type="submit">会員登録する</button>
        <a class="form-content__link" href="/login">ログインはこちら</a>
    </form>
@endsection