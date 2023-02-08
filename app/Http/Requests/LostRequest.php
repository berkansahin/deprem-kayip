<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LostRequest extends FormRequest
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
            'full_name' => 'required',
            'city' => 'nullable',
            'district' => 'nullable',
            'status' => 'nullable',
            'contact' => 'required',
            'saver' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Lütfen ad bilgisini giriniz',
            'contact.required' => 'Lütfen iletişim bilgisini giriniz'
        ];
    }
}
