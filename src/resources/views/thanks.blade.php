{{-- レイアウトファイルの読み込み --}}
@extends('layouts/app')

    @section('css')
        {{-- index.cssの読み込み --}}
        <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
    @endsection

@section('content')
    <div class="thanks-box">
        <h2>お問い合わせありがとうございます</h2>
    </div>
@endsection
