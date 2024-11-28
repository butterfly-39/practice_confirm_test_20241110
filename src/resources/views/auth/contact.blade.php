@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<h2>Contact</h2>
<div class="contact-form__content">
    <form action="/contact" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="例: 山田"/>
                </div>
                <div class="form__input--text">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="例: 太郎"/>
                </div>
                <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
