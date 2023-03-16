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
            // 'sex'  => 'required',
            'tel_num'  => 'required',
            'email'  => 'required',
            'postal_num'  => 'required',
            'address'  => 'required',
            // 'parking_lot'  => 'required',
            'needs'  => 'required',
            'medical_history_f'  => 'required',
            'medical_history_s'  => 'required',
            'medical_history_t'  => 'required',
            'rom'  => 'required',
            'work'  => 'required',
            // 'adl_basic'  => 'required',
            // 'adl_eating'  => 'required',
            // 'adl_grooming'  => 'required',
            // 'adl_toilet'  => 'required',
            // 'adl_clothes'  => 'required',
            // 'adl_bathing'  => 'required',
            'others'  => 'required',
        ];
    }

    public function messages()
{
    return [
        'name.required'  => '内容は必須です。',
        'age.required'  => '内容は必須です。',
        // 'sex.required'  => '内容は必須です。',
        'tel_num.required'  => '内容は必須です。',
        'email.required'  => '内容は必須です。',
        'postal_num.required'  => '内容は必須です。',
        'address.required'  => '内容は必須です。',
        // 'parking_lot.required'  => '内容は必須です。',
        'needs.required'  => '内容は必須です。',
        'medical_history_f.required'  => '内容は必須です。',
        'medical_history_s.required'  => '内容は必須です。',
        'medical_history_t.required'  => '内容は必須です。',
        'rom.required'  => '内容は必須です。',
        'work.required'  => '内容は必須です。',
        // 'adl_basic.required'  => '内容は必須です。',
        // 'adl_eating.required'  => '内容は必須です。',
        // 'adl_grooming.required'  => '内容は必須です。',
        // 'adl_toilet.required'  => '内容は必須です。',
        // 'adl_clothes.required'  => '内容は必須です。',
        // 'adl_bathing.required'  => '内容は必須です。',
        'others.required'  => '内容は必須です。',
    ];
}
}
