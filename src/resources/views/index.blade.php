{{-- レイアウトファイルの読み込み --}}
@extends('layouts/app')

    @section('css')
        {{-- index.cssの読み込み --}}
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    @endsection

@section('content')

    {{--  --}}
    <div class="contact-box">
        <div class="contact-title">
            <h2>お問い合わせ</h2>
        </div>
        <form class="contact-form" action="/contacts/confirm" method="post">
            @csrf
            <div class="contact-form__item">
                <p class="contact-form__item--label">
                    お名前
                    <span class="contact-form__item--label-required">必須</span>
                </p>
                <input type="text" name="name" class="contact-form__item--input" value="{{ old('name') }}" placeholder="テスト太朗" />
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
            </div>
            <div class="contact-form__item">
                <p class="contact-form__item--label">
                    メールアドレス
                    <span class="contact-form__item--label-required">必須</span>
                </p>
                <input type="email" name="email" class="contact-form__item--input" value="{{ old('email') }}" placeholder="test@exmpul.com" />
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
            </div>
            <div class="contact-form__item">
                <p class="contact-form__item--label">
                    電話番号
                    <span class="contact-form__item--label-required">必須</span>
                </p>
                <input type="tel" name="tel" class="contact-form__item--input" value="{{ old('tel') }}" placeholder="09012345678" />
                    @error('tel')
                        <div class="error">{{ $message }}</div>
                    @enderror
            </div>
            <div class="contact-form__item">
                <p class="contact-form__item--label">
                    お問合せ内容
                </p>
                <textarea name="textarea" class="contact-form__item--textarea" placeholder="資料をいただきたいです"></textarea>
            </div>
            <div class="contact-form__btn">
                <button class="contact-form__btn-submit" type="submit">送信</button>
            </div>
        </form>
    </div>
@endsection