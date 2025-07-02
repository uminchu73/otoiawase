{{-- レイアウトファイルの読み込み --}}
@extends('layouts/app')

    @section('css')
        {{-- index.cssの読み込み --}}
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    @endsection

@section('content')

    {{-- 見出し --}}
    <div class="contact-box">
        <div class="contact-title">
            <h2>お問い合わせ</h2>
        </div>
        {{-- お問い合わせフォーム --}}
        <form class="contact-form" action="/contacts/confirm" method="post">
            @csrf
            {{-- 名前の入力欄 --}}
            <div class="contact-form__item">
                <div class="contact-form__item--label-box">
                    <span class="contact-form__item--label">お名前</span>
                    <span class="contact-form__item--label-required">必須</span>
                </div>
                <div class="contact-form__item--input-box">
                    {{-- 入力欄 --}}
                    <input type="text" name="name" class="contact-form__item--input" value="{{ old('name') }}" placeholder="テスト太朗" />
                    {{-- エラー表示 --}}
                    <div class="error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            {{-- メールアドレス入力欄 --}}
            <div class="contact-form__item">
                <div class="contact-form__item--label-box">
                    <span class="contact-form__item--label">メールアドレス</span>
                    <span class="contact-form__item--label-required">必須</span>
                </div>
                <div class="contact-form__item--input-box">
                    <input type="email" name="email" class="contact-form__item--input" value="{{ old('email') }}" placeholder="test@example.com" />
                    <div class="error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            {{-- 電話番号入力欄 --}}
            <div class="contact-form__item">
            <div class="contact-form__item--label-box">
                    <span class="contact-form__item--label">電話番号</span>
                    <span class="contact-form__item--label-required">必須</span>
                </div>
                <div class="contact-form__item--input-box">
                    <input type="tel" name="tel" class="contact-form__item--input" value="{{ old('tel') }}" placeholder="09012345678" />
                    <div class="error">
                        @error('tel')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            {{-- お問い合わせ内容入力欄 --}}
            <div class="contact-form__item">
                <div class="contact-form__item--label-box">
                    <span class="contact-form__item--label">お問合せ内容</span>
                </div>
                <div class="contact-form__item--input-box">
                    <textarea name="content" class="contact-form__item--textarea" placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
                </div>
            </div>
            {{-- 送信ボタン --}}
            <div class="contact-form__btn">
                <button class="contact-form__btn-submit" type="submit">送信</button>
            </div>
        </form>
    </div>
@endsection