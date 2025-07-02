<?php

namespace App\Http\Controllers;

use App\Models\Contact;//Contactモデルの読み込み
use App\Http\Requests\ContactRequest;//フォームリクエストの読み込み
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //お問い合わせフォームを表示
    public function index()
    {
        return view('index');
    }

    //確認画面を表示
    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();//フォームの全データ取得

        return view('confirm', compact('contact'));//confirm.blade.phpにデータを渡す
    }

    //お問い合わせ内容保存
    public function store(ContactRequest $request)
    {
        $data =$request->validated();//バリデーション済みのデータだけ取得
        Contact::create($data);//データベースに保存

        return redirect('/contacts');
    }

    //お問い合わせ完了ページの表示
    public function thanks()
    {
        return view('thanks');
    }

}

