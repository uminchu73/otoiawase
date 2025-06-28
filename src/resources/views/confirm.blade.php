{{-- レイアウトファイルの読み込み --}}
@extends('layouts/app')

    @section('css')
        {{-- index.cssの読み込み --}}
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    @endsection

@section('content')
    <div class="confirm">
        <div class="confirm-title">
            <h2>お問い合わせ内容確認</h2>
        </div>
        <form action="/contacts" class="form" method="post">
            @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">
                            お名前
                        </th>
                        <td class="confirm-table__text">
                            <input type="text" name="'name" value="{{ $contact['name'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">
                            メースアドレス
                        </th>
                        <td class="confirm-table__text">
                            <input type="email" name="'email" value="{{ $contact['email'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">
                            電話番号
                        </th>
                        <td class="confirm-table__text">
                            <input type="tel" name="'tel" value="{{ $contact['tel'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">
                            お問い合わせ内容
                        </th>
                        <td class="confirm-table__text">
                            <input type="text" name="'textarea" value="{{ $contact['textarea'] }}">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form-btn">
                <button class="form-btn__submit" type="submit">送信</button>
            </div>
        </form>
    </div>
@endsection