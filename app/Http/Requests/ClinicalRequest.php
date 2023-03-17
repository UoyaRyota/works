<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClinicalRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'  => 'required',
            'age'  => 'required',
            'sex'  => 'required',
            'tel_num'  => 'required',
            'email'  => 'required',
            'postal_num'  => 'required',
            'address'  => 'required',
            'parking_lot'  => 'required',
            'needs'  => 'required',
            'medical_history_f'  => 'required',
            'medical_history_s'  => 'required',
            'medical_history_t'  => 'required',
            'rom'  => 'required',
            'work'  => 'required',
            'adl_basic'  => 'required',
            'adl_eating'  => 'required',
            'adl_grooming'  => 'required',
            'adl_toilet'  => 'required',
            'adl_clothes'  => 'required',
            'adl_bathing'  => 'required',
            'others'  => 'required',
        ];
    }

    public function messages()
{
    return [
        'name.required'  => '名前を入力してください。',
        'age.required'  => '年齢をを入力してください。',
        'sex.required'  => '性別を選択してください。',
        'tel_num.required'  => '電話番号を入力してください。',
        'email.required'  => 'メールアドレスを入力してください。',
        'postal_num.required'  => '郵便番号を入力してください。',
        'address.required'  => '住所を入力してください。',
        'parking_lot.required'  => '駐車場の有無を選択してください。',
        'needs.required'  => 'ニーズを入力してください。',
        'medical_history_f.required'  => '既往歴を入力してください。',
        'medical_history_s.required'  => '既往歴を入力してください。',
        'medical_history_t.required'  => '既往歴を入力してください。',
        'rom.required'  => 'ROMを入力してください。',
        'work.required'  => '仕事を入力してください。',
        'adl_basic.required'  => '基本動作を選択してください。',
        'adl_eating.required'  => '食事動作を選択してください。',
        'adl_grooming.required'  => '整容動作を選択してください。',
        'adl_toilet.required'  => 'トイレ動作を選択してください。',
        'adl_clothes.required'  => '衣類動作を選択してください。',
        'adl_bathing.required'  => '入浴動作を選択してください。',
        'others.required'  => '備考を入力してください。',
    ];
}
}
