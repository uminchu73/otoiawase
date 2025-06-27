<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:225',
            'email' => 'required|email|max:255',
            'tel' => 'required|digits_between:10,11',
            'content' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式が正しくありません',
            'tel.required' => '電話番号を入力してください',
            'tel.digits_between' => '電話番号は10桁または11桁で入力してください',
        ];
    }
}
