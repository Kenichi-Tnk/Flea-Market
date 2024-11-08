@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section
    <h1 class="main-title">プロフィール設定</h1>
    @csrf
    <div class="image-group">
        <img class="image-group__icon" id="preview-image" src="{{ $user->image_url }}">
        <label class="image-group__label">
            <input class="image-group__input" type="file" name="file" id="image" onchange="previewFile()">画像を選択する</input>
        </label>
    </div>
    
@endsection