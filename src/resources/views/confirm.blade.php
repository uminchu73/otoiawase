{{-- レイアウトファイルの読み込み --}}
@extends('layouts/app')

    @section('css')
        {{-- index.cssの読み込み --}}
        <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
    @endsection

@section('content')
    <div class="confirm">
        {{-- 見出し --}}
        <div class="confirm-title">
            <h2>お問い合わせ内容確認</h2>
        </div>
        <form action="/contacts" class="form" method="post">
            @csrf
            {{-- テーブル形式で確認内容を表示 --}}
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    {{-- 名前の行 --}}
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">
                            お名前
                        </th>
                        <td class="confirm-table__text">
                            <input type="text" name="name" value="{{ $contact['name'] }}">
                        </td>
                    </tr>
                    {{-- メアドの行 --}}
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">
                            メールアドレス
                        </th>
                        <td class="confirm-table__text">
                            <input type="email" name="email" value="{{ $contact['email'] }}">
                        </td>
                    </tr>
                    {{-- 電話番号の行 --}}
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">
                            電話番号
                        </th>
                        <td class="confirm-table__text">
                            <input type="tel" name="tel" value="{{ $contact['tel'] }}">
                        </td>
                    </tr>
                    {{-- お問い合わせ内容の行 --}}
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">
                            お問い合わせ内容
                        </th>
                        <td class="confirm-table__text">
                            <input type="text" name="content" value="{{ $contact['content'] }}">
                        </td>
                    </tr>
                </table>
            </div>
            {{-- 送信ボタン --}}
            <div class="form-btn">
                <button class="form-btn__submit" type="submit">送信</button>
            </div>
        </form>
    </div>
@endsection