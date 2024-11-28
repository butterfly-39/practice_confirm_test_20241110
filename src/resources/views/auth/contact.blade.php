@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<h2>Contact</h2>
<div class="contact-form__content">
    <form action="/contact" method="get">
        @csrf
        <div class="form-group">
                <label for="name">お名前 <span class="required">*</span></label>
                <div class="input-group">
                    <input type="text" id="last_name" value="{{ old('last_name')}}" placeholder="例: 山田">
                    <input type="text" id="first_name" value="{{ old('first_name')}}"placeholder="例: 太郎">
                </div>
            </div>
            <div class="form-group">
                <label for="gender">性別 <span class="required">*</span></label>
                <div class="input-radio">
                    <label><input type="radio" name="gender" value="男性" checked> 男性</label>
                    <label><input type="radio" name="gender" value="女性"> 女性</label>
                    <label><input type="radio" name="gender" value="その他"> その他</label>
                </div>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス <span class="required">*</span></label>
                <input type="email" id="email" value="{{ old('email')}}" placeholder="例: test@example.com">
            </div>
            <div class="form-group">
                <label for="phone">電話番号 <span class="required">*</span></label>
                <div class="input-phone">
                    <input type="text" placeholder="080"> -
                    <input type="text" placeholder="1234"> -
                    <input type="text" placeholder="5678">
                </div>
            </div>
            <div class="form-group">
                <label for="address">住所 <span class="required">*</span></label>
                <input type="text" id="address" value="{{ old('address')}}" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
            </div>
            <div class="form-group">
                <label for="building">建物名</label>
                <input type="text" id="building" value="{{ old('building')}}" placeholder="例: 千駄ヶ谷マンション101">
            </div>
            <div class="form-group">
                <label for="category">お問い合わせの種類 <span class="required">*</span></label>
                <select id="category">
                    <option value="">選択してください</option>
                    <option value="質問">質問</option>
                    <option value="要望">要望</option>
                    <option value="その他">その他</option>
                </select>
            </div>
            <div class="form-group">
                <label for="content">お問い合わせ内容 <span class="required">*</span></label>
                <textarea id="content" value="{{ old('content')}}" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="submit-btn">確認画面</button>
            </div>
        </form>
    </div>
@endsection
