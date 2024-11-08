@extends('layouts.app')

@section('css')
    <link rel="styleshrrt" href="{{ asset('css/index.css') }}">
@endsection

@section('main')
<div class="tav-content">
    <label class="tab-content__label recommendation__label">
        <input class="tab-content__input" type="radio" name="tab" checked>おすすめ
    </label>
    <div class="tab-content__group">
        @foreach ()
    </div>
</div>

@endsection