<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KarteRequest extends FormRequest
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
            'karte_body'  => 'required|min:20',
        ];
    }
    public function messages()
    {
        return [
            'karte_body.required'  => '内容は必須です。',
            'karte_body.max'      => 'カルテの記録は20文字以上で記入してください。',
        ];
    }
}
