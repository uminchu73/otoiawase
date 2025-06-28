<?php

namespace App\Http\Controllers;

use App\Models\Contact;//Contactモデルの読み込み
use App\Http\Requests\ContactRequest;//フォームリクエストの読み込み
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();

        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $data =$request->validated();
        Contact::create($data);

        return redirect('/contacts');
    }

    public function thanks()
    {
        return view('thanks');
    }

}

